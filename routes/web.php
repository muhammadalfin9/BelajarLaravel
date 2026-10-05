<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view('home', ['title' => 'home']);
});



Route::get('/posts', function () {
    $posts = Post::all();
    return view('posts', ['title' => 'blog', 'posts' => $posts]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Singgle Post', 'post' => $post]);
});

Route::get('/authors/{user}', function (User $user) {
    return view('posts', ['title' => 'Article By. ' . $user->name, 'posts' => $user->posts]);
});


Route::get('/about', function () {
    return view('about', ['title' => 'about']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'contact']);
});
