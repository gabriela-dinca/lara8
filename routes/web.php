<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', static fn () => view('posts', ['posts' => Post::all()]) );

Route::get('/posts/{post:slug}', static function (Post $post) {
    return view('post', [
        'post' => $post
    ]);
});
