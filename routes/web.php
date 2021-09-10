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
    return view('frontend.index');
});

Route::get('/post/add', function () {
    return view('backend.posts.add');
});

Route::get('/post/edit', function () {
    return view('backend.edit');
});

Route::get('/post/list', function () {
    return view('backend.posts.list');
});

Route::get('/login', function () {
    return view('login');
});


