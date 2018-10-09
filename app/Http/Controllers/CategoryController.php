<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Supercat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=DB::table('categories')->get();
        $supercats=DB::table('supercat')->get();
        return view('index',compact('categories','supercats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $supercats=DB::table('supercat')->get();
        $this->validate($request,[
            'fa_name'=>'required',
            'eng_name'=>'required',
            'cat_picture'=>'required',
            'cat_logo'=>'required',
            'type'=>'required'
        ],[
                'fa_name.required'=>"نام فارسی دسته را وارد کنید",
                'eng_name.required'=>"نام انگلیسی دسته را وارد کنید",
            ]
        );
        $category = new Category($request->all());

        foreach ($supercats as $supercat){
            //echo $category->id;
            if($supercat->id==$request->type){
                $category->type=$supercat->eng_name;
            }
        }
        if($request->hasFile('cat_logo')){
            $logo=$request->file('cat_logo');
            $newLogoName=$request->eng_name.".png";
            $category->logo=$newLogoName;
            $logo=Input::file('cat_logo');
            $logo->move(public_path().'/images/category/logo/',$newLogoName);
        }
        if($request->hasFile('cat_picture')){
            $picture=$request->file('cat_picture');
            $newPictureName=$request->eng_name.".jpg";
            $picture=Input::file('cat_picture');
            $picture->move(public_path().'/images/category/brand/',$newPictureName);
        }


        $category->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($supercat,$cat)
    {
        $supercats=DB::table('supercat')->get();
        $categories=DB::table('categories')->get();
        $articles=DB::table('articles')->get();
//        foreach ($articles as $article){
//            if($article->cat_name==)
//        }
        $article = Article::where('cat_name', '=', $cat)->paginate(4);


        //      $article=Article::find($cat);

        //       return $cat_name;

        return view('category',compact('categories','cat','article','supercats','supercat'));
    }


    public function pick(Request $request,$supercat)
    {

        $categories=DB::table('categories')->get();

        $supercats=DB::table('supercat')->get();



        foreach ($supercats as $superCat)
        {
            if($superCat->eng_name == $supercat)
                $supercatfa=$superCat->fa_name;
        }
        return view('supercat',compact('categories','supercat','supercatfa','supercats'));
    }



    public function showForAdmin()
    {
        $categories = Category::all();
        return view('admin.show-category',compact('categories'));
    }

    public function addCategory()
    {
        $categories = Category::all();
        $supercats=DB::table('supercat')->get();
        return view('admin.add-category',compact('categories','supercats'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
