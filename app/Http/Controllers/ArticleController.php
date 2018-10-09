<?php

namespace App\Http\Controllers;

use App\Article;
use App\Article_User;
use App\Category;
use App\Card;
use App\Sell;
use Illuminate\Http\Request;
//use Storage;

use Session;

use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Auth;

class ArticleController extends Controller
{

    public function index()
    {

        $article=DB::table('articles')->get();
        return view('admin.show-article',compact('article'));

    }

    public function create()
    {

        return view('/admin.index');
    }

    public function store(Request $request)
    {
        $categories=DB::table('categories')->get();

        $this->validate($request,[
            'fa_name'=>'required',
            'author'=>'required',
            'price'=>'required|numeric',
            'article-file'=>'required|mimes:pdf',
            'cat_id'=>'numeric|min:1',
            'article-pix'=>'required|image'
            ],[
                'fa_name.required'=>"نام مقاله را وارد کنید",
                'author.required'=>"نام نویسنده را وارد کنید",
                'price.required'=>"قیمت را وارد کنید",
                'article-file.required'=>'مقاله موجود نیست',
                'price.numeric'=>'قیمت را به عدد وارد کنید',
                'cat_id.min'=>'دسته به درستی انتخاب نشده است',
                'article-pix.required'=>'لطفا عکس مقاله را وارد کنید',
                'article-pix.image'=>'لطفا تصویر را وارد کنید',
                'article-pix.mimes'=>'فرمت عکس باید jpg باشد',
                'article-file.mimes'=>'فرمت مقاله باید pdf باشد',
            ]
        );

        $article = new Article($request->all());
        $article->cat_id=$request->cat_id;

        foreach ($categories as $category){
            //echo $category->id;
            if($category->id==$article->cat_id){
                $article->cat_name=$category->eng_name;
                $article->supercat_name=$category->type;
                $cat_name=$category->eng_name;
            }
        }

        if($request->hasFile('article-file')){
            $articleFile=$request->file('article-file');
            $fullArticleName=$articleFile->getClientOriginalName();
            $justArticleName = pathinfo($fullArticleName, PATHINFO_FILENAME);
            $newArticleName=$justArticleName.".pdf";
            $newArticlePixName=$justArticleName.".jpg";
            $article->eng_name=$justArticleName;
            //$art=\File::get($request->file('article-file'));
            print_r($request->all());
            $art=Input::file('article-file');
            //print_r($articleFile);
            $art->move(public_path().'/articles/'.$cat_name.'/',$newArticleName);
            //Storage::disk('local')->put('/papers/articles'.'/'.$cat_path.'/'.$justArticleName.'/'.$fullArticleName, \File::get($request->file('article-file')));
                if($request->hasFile('article-pix')){
                    $article->logo=$newArticlePixName;
                    $picture=Input::file('article-pix');
                    $picture->move(public_path().'/articles/'.$cat_name.'/',$newArticlePixName);
                }
            }
        else{
            echo "shit";
        }
        $article->save();
        \Session::flash('flash_message','مقاله با موفقیت اضافه شد');
        return back();

//        return response()->download(storage_path("app/test.png"));

    }

    public function show($supercat , $cat, $art_id)
    {
        $supercats=DB::table('supercat')->get();
        $current_article=Article::find($art_id);
        $categories=DB::table('categories')->get();


        foreach ($categories as $category){
            if($category->eng_name == $cat){
                $cat_name=$category->fa_name;
            }
        }



            $sim_arts= Article::where('fa_name','Like','%'  . $current_article->fa_name . '%')
                ->orWhere('eng_name','Like','%'  . $current_article->eng_name . '%')
                ->orWhere('author','Like',  $current_article->author )->get();

        return view('single',compact('cat_name','current_article','categories','supercats','sim_arts'));
    }

    public function addArtPage()
    {
        $supercats=DB::table('supercat')->get();
        $categories=DB::table('categories')->get();
        return view('/admin/add-article',compact('categories','supercats'));
    }

    public function edit($id)
    {
        $categories=DB::table('categories')->get();
        $article= Article::find($id);

        return view('admin.edit-single-article',compact('article','categories'));
    }

    public function getCheckout()
    {
        if(!Session::has('card')){
            return view('shop.shopping-card');
        }
        $oldCard=Session::get('card');
        $card=new Card($oldCard);
        $total=$card->totalPrice;
        return view('shop.checkout',['total'=>$total]);
    }
    
    public function getAddToCard(Request $request,$id)
    {
        $article=Article::find($id);
        $oldCard=Session::has('card') ? Session::get('card'):null;
        $card = new Card($oldCard);
        $card->add($article,$article->id);

        $request->session()->put('card',$card);


        //dd($request->session()->get('card'));
        return back();
    }

    public function getRemoveItem($id)
    {
        $oldCard=Session::has('card') ? Session::get('card'):null;
        $card = new Card($oldCard);
        $card->removeItem($id);

        Session::put('card',$card);
        return back();
//        return redirect()->route('shop.shoppingCard');
    }
    
    public function final()
    {
        //return $id;
        $oldCard=Session::get('card');
        $card=new Card($oldCard);

        //$a=$card->art_ids["1"];
        $first_key = key($card->items);

        $cardSize =sizeof($card->art_ids);


        for ($num=0 ; $num <$cardSize; $num++){

            $sells=new Sell;
            $sells->article_id=$card->items[$card->art_ids[$num]]['item']['id'];
            $sells->article_price=$card->items[$card->art_ids[$num]]['item']['price'];
            $sells->article_name=$card->items[$card->art_ids[$num]]['item']['fa_name'];
            $sells->user_id=Auth::user()->id;
            $sells->user_name=Auth::user()->name;
            $sells->save();
        }
        Session::forget('card');
        $card=new Card($oldCard);

        return back();
    }

    public function getCard()
    {
        $categories=DB::table('categories')->get();
        $supercats=DB::table('supercat')->get();
        if(Session::has('card')){
//            return view('shop.shopping-card',['articles'=>null],compact('categories','supercats'));
        }
        $oldCard=Session::get('card');
        $card=new Card($oldCard);
        //return $card->items;


        $articles=$card->items;

        //return view('shop.shopping-card',['products'=>$card->items,'totalPrice'=>$card->totalPrice]);
       // return view('shop.shopping-card',compact('card'));
        return view('shop.shopping-card',['articles'=>$card->items,'totalPrice'=>$card->totalPrice],compact('categories','supercats','card'));
    }

    public function update(Request $request, $id)
    {
        $article= Article::find($id);
        $article->update($request->all());
        return back();
        //return view('/admin/edit-article');
    }

    public function destroy($id)
    {
        Article::where('id',$id)->delete();
        return back()->with('success','article has been delete successfully');

    }

    public function search(Request $request)
    {
        $categories=DB::table('categories')->get();
        $supercats=DB::table('supercat')->get();
        $query=$request->input('q');
        if($request != ""){
            $arts= Article::where('fa_name','Like','%'  . $query . '%')
                            ->orWhere('eng_name','Like','%'  . $query . '%')
                             ->orWhere('author','Like','%'  . $query . '%')
                             ->orWhere('eng_name','Like','%'  . $query . '%')->get();
            if (count($arts) > 0 ){
                return view('search',compact('arts' , 'categories','supercats','query'));
            }
        }
        return view('search-not-found',compact('categories','supercats','query'));
    }
}
