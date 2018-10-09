<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/admin/test',function (){
    return view('admin.test');
});


Route::get('/test',function (){
    return view('test');
});



Route::auth();
Auth::routes();

//Route::post('/login/custom','PagesController@login');


Route::post('/login/custom',[
        'uses'=>'PagesController@login',
        'as'=>'login.custom']
);

//Route::get('/home', 'HomeController@index');

Route::get('/home', [
    'uses'=>'UserController@profile',
    'as'=>"get.profile"
]);

//Route::get('/home', 'HomeController@index')->name('home');


//-------------------------------------begin admin pages----------------------------------------
Route::group(['middleware'=>'auth'],function (){

    //--------------------Begin Edit Content-------------------------------------
    Route::get('/admin/edit-article','AdminController@index');
    Route::get('/admin/add-article','ArticleController@addArtPage');
    Route::get('admin/add-article/uploadFile','ArticleController@uploadFile');
    Route::get('/admin/edit-article/edit/{id}','ArticleController@edit');
    Route::patch('/admin/edit-article/{id}/update','ArticleController@update');
    Route::post('/admin/add-article/create','ArticleController@create');
    Route::post('/admin/add-article/store','ArticleController@store');
    Route::get('/admin/edit-article/delete/{id}','ArticleController@destroy');
    Route::get('/admin/add-category','CategoryController@addCategory');
    Route::post('/admin/add-category/store','CategoryController@store');
    //--------------------End Edit Content---------------------------------------

    //--------------------Begin Show Content--------------------------------------
    //--------------------Main Admin Page-----------------------------------
    Route::get('/admin','AdminController@show')->name('admin');
    //--------------------Main Admin Page-----------------------------------

    Route::get('admin/showSellsTable',[
        'uses'=>"AdminController@showSells",
        'as'=>"show.sells"
    ]);
    Route::get('/admin/show-article',[
        'uses'=>"ArticleController@index",
        'as'=>'admin.getArticles'
    ]);
    Route::get('/admin/show-users',[
        'uses'=>"UserController@index",
        'as'=> 'admin.getUsers'
    ]);
    Route::get('/admin/show-category',[
        'uses'=> 'CategoryController@showForAdmin',
        'as'=> 'admin.getCategory'
    ]);

    //--------------------Begin Show Content--------------------------------------




   // Route::get('/admin/edit-article/del','ArticleController@dest');



});
//-------------------------------------end admin pages-------------------------------------------


//Route::get('/final','ArticleController@final');

Route::get('/profile',[
    'uses'=>'UserController@profile',
    'as'=>"get.profile"
    ]);
Route::post('/profile',[
    'uses'=>'UserController@update_avatar',
    'as'=>'post.profile'
]);
Route::get('/shopping-card',[
    'uses'=>'ArticleController@getCard',
    'as'=>'get.card'
]);
Route::get('remove/{id}',[
    'uses'=>'ArticleController@getRemoveItem',
    'as'=>"article.remove"
]);
Route::get('/checkout',[
    'uses'=>'ArticleController@final',
    'as'=>'checkout'
    ]);
Route::post('/checkout',[
    'uses'=>'ArticleController@postCheckout',
    'as'=>'checkout'
]);
Route::get('/add-to-card/{id}',[
    'uses'=>'ArticleController@getAddToCard',
    'as'=>'Article.addToCard'
]);
Route::get('/','CategoryController@index')->name('main');
Route::get('/{supercategory}',[
    'uses'=>'CategoryController@pick',
    'as'=>'get.supercategory'
]);
Route::get('/{supercategory}/{category}',[
    'uses'=>'CategoryController@show',
    'as'=>'get.category'
]);
Route::get('/{supercategory}/{category}/{id}',[
    'uses'=>"ArticleController@show",
    'as'=>'get.article'
]);
Route::post('/comment/{article}/store',[
    'uses'=>"CommentController@store",
    'as'=>'post.comment'
]);
//Route::post('user/identify','UserController@identify');




//
//Route::get('/register-page',function (){
//    return view('register');
//});

Route::post('upload', 'AdminController@upload');


Route::post('/search','ArticleController@search');