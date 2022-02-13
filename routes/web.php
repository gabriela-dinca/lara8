<?php

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', static fn () => view('posts', ['posts' => Post::all()]) );

Route::get('/posts/{post:slug}', static fn (Post $post)  =>
     view('post', [
        'post' => $post
    ])
);

Route::get('/categories/{category:slug}', static fn (Category $category)  =>
     view('posts', [
        'posts' => $category->posts
    ])
);
