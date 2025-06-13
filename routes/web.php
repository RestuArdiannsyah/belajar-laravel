<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Restu Ardiansyah', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Posts', 'posts' => Post::all()]);
});

Route::get('/posts/{slug}', function ($slug) {
    $post = Post::find($slug);
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Us']);
});


Route::get('/welcome', function () {
    return view('welcome', ['title' => 'Welcome']);
});
