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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',function(){
    return view('pages.dashboard');
});
Route::get('/dashboard/{id}',['uses' =>'PagesController@redirect']);
Route::resource('posts','PostController');
Route::resource('logins','LoginController');
Route::get('/delete',function(){
    return view('pages.delete');
});