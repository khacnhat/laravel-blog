<?php

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

Route::get('/', "PostController@listAllPosts")->name("post.list");
Route::get('/add', "PostController@showAddForm")->name("post.add");
Route::post('/add', "PostController@createPost")->name("post.create");
Route::get('/{id}/edit', "PostController@showEditForm")->name("post.edit");
Route::post('/{id}/edit', "PostController@updatePost")->name("post.update");
Route::get('/{id}/delete', "PostController@showDeleteForm")->name("post.deleteForm");
Route::post('/{id}/delete', "PostController@deletePost")->name("post.delete");

Route::get('/test', function (){
    return "abc";
});
Route::get('/test2', function (){
    return view("welcome");
});