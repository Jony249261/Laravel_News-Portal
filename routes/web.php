<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', 'HomepageController@index');
Route::get('/search', 'HomepageController@search')->name('search');
Route::get('/category/{id}', 'ListingpageController@listing1');
Route::get('/author/{id}', 'ListingPageController@listing');
Route::get('/listing', 'ListingPageController@index');
Route::get('/details/{slug}', 'DetailspageController@index')->name('details');
Route::post('/comments', 'DetailspageController@comment');


Route::group(['prefix'=>'back', 'middleware'=>'auth'], function(){
    Route::get('/', 'Admin\DashboardController@index');
    Route::get('/list', 'Admin\CategoryController@list');
    Route::get('/create', 'Admin\CategoryController@create');
    Route::get('/edit', 'Admin\CategoryController@edit');

    //Permission Route----------------

    Route::get('/permission/create', ['uses'=>'Admin\PermissionController@create','as'=>'permission-create', 'middleware'=> 'permission:Permission List|All'] );

    Route::post('/permission/store', ['uses'=>'Admin\PermissionController@store','as'=>'permission-store', 'middleware'=> 'permission:Permission List|All'] );

    Route::get('/permission', ['uses'=>'Admin\PermissionController@index','as'=>'permission-list', 'middleware'=> 'permission:Permission List|All|Permission'] );
    
    Route::get('/permission/edit/{id}',  ['uses'=>'Admin\PermissionController@edit','as'=>'permission-edit', 'middleware'=> 'permission:Permission List|All'] );

    Route::put('/permission/update/{id}',['uses'=>'Admin\PermissionController@update','as'=>'permission-update', 'middleware'=> 'permission:Permission List|All'] ); 

    Route::get('/permission/delete/{id}',['uses'=>'Admin\PermissionController@delete','as'=>'permission-delete', 'middleware'=> 'permission:Permission List|All'] );


    //Role Route -------------------------

    Route::get('/roles/create', 'Admin\RoleController@create');
    Route::get('/roles', 'Admin\RoleController@index');
    Route::post('/roles/store', 'Admin\RoleController@store');
    Route::get('/roles/edit/{id}', ['uses'=>'Admin\RoleController@edit','as'=>'role-edit'] );
   Route::put('/roles/edit/{id}', ['uses'=>'Admin\RoleController@update','as'=>'role-update'] );
    Route::get('/roles/delete/{id}', 'Admin\RoleController@destroy');

    //Author Route.........................--

   Route::get('/author', 'Admin\AuthorController@index');
   Route::get('/author/create', 'Admin\AuthorController@create');
   Route::post('/author/store', 'Admin\AuthorController@store');
   Route::get('/author/edit/{id}', ['uses'=>'Admin\AuthorController@edit','as'=>'author-edit'] );
   Route::put('/author/edit/{id}', ['uses'=>'Admin\AuthorController@update','as'=>'author-update'] );
   Route::get('/author/delete/{id}', ['uses'=>'Admin\AuthorController@destroy','as'=>'author-delete'] );

   //Category Route----------------

    Route::get('/category', ['uses'=>'Admin\CategoryController@list','as'=>'category-list', 'middleware'=> 'permission:Category List|All'] );

    Route::get('/category/create', ['uses'=>'Admin\CategoryController@create','as'=>'category-create', 'middleware'=> 'permission:Category Create|All'] );

    Route::post('/category/store', ['uses'=>'Admin\CategoryController@store','as'=>'category-store', 'middleware'=> 'permission:Category Store|All'] );

    Route::get('/category/active/{id}', ['uses'=>'Admin\CategoryController@active','as'=>'category-active', 'middleware'=> 'permission:Category Active|All'] );

    Route::get('/category/inactive/{id}', ['uses'=>'Admin\CategoryController@inactive','as'=>'category-inactive', 'middleware'=> 'permission:Category Inactive|All'] );

    Route::get('/category/delete/{id}', ['uses'=>'Admin\CategoryController@destroy','as'=>'category-delete', 'middleware'=> 'permission:Category Delete|All'] );

    Route::get('/category/edit/{id}', ['uses'=>'Admin\CategoryController@edit','as'=>'category-edit', 'middleware'=> 'permission:Category Edit|All'] );

    Route::put('/category/update/{id}', ['uses'=>'Admin\CategoryController@update','as'=>'category-update', 'middleware'=> 'permission:Category Update|All'] );


    //Post route---------------------------------

    Route::get('/posts', ['uses'=>'Admin\PostController@index','as'=>'post-list', 'middleware'=> 'permission:Post List|All'] );

    Route::get('/posts/create', ['uses'=>'Admin\PostController@create','as'=>'post-create', 'middleware'=> 'permission:Post Add|All'] );

    Route::post('/post/store', ['uses'=>'Admin\PostController@store','as'=>'post-store', 'middleware'=> 'permission:Post List|All'] );

    Route::get('/post/active/{id}', ['uses'=>'Admin\PostController@active','as'=>'post-active', 'middleware'=> 'permission:Post List|All'] );

    Route::get('/post/inactive/{id}', ['uses'=>'Admin\PostController@inactive','as'=>'post-inactive', 'middleware'=> 'permission:Post List|All'] );

    Route::get('/post/hot/news/{id}', ['uses'=>'Admin\PostController@hotNews','as'=>'hot_news', 'middleware'=> 'permission:Hot News|All'] );

    Route::get('/post/edit/{id}', ['uses'=>'Admin\PostController@edit','as'=>'post-edit', 'middleware'=> 'permission:Post List|All'] );

Route::put('/post/update/{id}', ['uses'=>'Admin\PostController@update','as'=>'post-update', 'middleware'=> 'permission:Post update|All'] );

    Route::get('/post/delete/{id}', ['uses'=>'Admin\PostController@destroy','as'=>'post-delete', 'middleware'=> 'permission:Post Delete|All'] );

//Comment Route goes here------------

    Route::get('/post/comment/{id}', ['uses'=>'Admin\CommentController@index','as'=>'comment-list', 'middleware'=> 'permission:Comment List|All'] );

    Route::get('/comment/status/{id}', ['uses'=>'Admin\CommentController@status','as'=>'comment', 'middleware'=> 'permission:Comment List|All'] );

    Route::get('/comment/reply/{id}', ['uses'=>'Admin\CommentController@reply','as'=>'comment-view', 'middleware'=> 'permission:Post List|All'] );

    Route::post('/comment/reply', ['uses'=>'Admin\CommentController@store','as'=>'comment-reply', 'middleware'=> 'permission:Post List|All'] );


    //System Setting Route -----------------

    Route::get('/settings', ['uses'=>'Admin\SettingController@index','as'=>'setting', 'middleware'=> 'permission:Post List|All'] );

    Route::put('/settings/update', ['uses'=>'Admin\SettingController@update','as'=>'setting-update', 'middleware'=> 'permission:Post List|All'] );






    

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

