<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles=DB::table('articles')->get();
        return view('admin.edit-article',compact('articles'));
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
        //
    }

    public function upload(Request $request)
    {
        $file = $request->file('filepond');
        //print_r($request->all());
        return \Storage::put('app', $file);
        //$file->storePubliclyAs('upload','file','public');
        //return $request->file('filepond');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $articles=DB::table('articles')->get();
        $sells = DB::table('sells')
            ->orderBy('created_at', 'desc')
            ->get();
        //$sells=DB::table('sells')->get();
        $users=DB::table('users')->get();
        $totalPrice=0;
        $totalUsers=0;
        $totalArticles=0;
        foreach ($users as $user){
            $totalUsers++;
        }
        foreach ($articles as $article){
            $totalArticles++;
        }

        return view('/admin.index',compact('sells','totalPrice','totalUsers','totalArticles'));
    }

    public function showSells()
    {
        $sells=DB::table('sells')->get();
        return view('admin.sells-table',compact('sells'));
    }

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
