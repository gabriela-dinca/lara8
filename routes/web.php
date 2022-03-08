<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', static fn () =>
    view('posts', [
        'posts' => Post::latest('published_at')->with(['category', 'author'])->get(),
        'categories' => Category::all()
    ])
);

Route::get('/posts/{post:slug}', static fn (Post $post)  =>
     view('post', [
        'post' => $post,
         'categories' => Category::all()
    ])
);

Route::get('/categories/{category:slug}', static fn (Category $category)  =>
     view('posts', [
        'posts' => $category->posts->load(['category', 'author']),
        'currentCategory' => $category,
        'categories' => Category::all()
    ])
);

Route::get('/authors/{author:username}', static function (User $author) {
    return view('posts', [
        'posts' => $author->posts->load(['category', 'author']),
        'categories' => Category::all()
    ]);
});

