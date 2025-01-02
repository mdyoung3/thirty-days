<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;


Route::get('/', function ()  {

    return view('home', [ 'posts' => Post::all()]);
});

Route::get('/post/{id}', function ($id)  {

    $post = Post::find($id);


    return view('post', [
        'post' => $post
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
