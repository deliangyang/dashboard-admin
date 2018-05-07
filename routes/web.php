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

Route::get('/', function () {
    return view('layouts.dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', function () {
    $owner = new \App\Model\Role();
    $owner->name = 'owner';
    $owner->display_name = 'Project Owner';
    $owner->description = 'User is the owner of a given project';
    $owner->save();

    $createPost = new \App\Model\Permission();
    $createPost->name = 'create-post';
    $createPost->display_name = 'Create Posts';
    $createPost->description = 'create new blog posts';
    $createPost->save();

    $owner->attachPermission($createPost);
});
