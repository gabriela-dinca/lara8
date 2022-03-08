<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('/posts/{post:slug}', [PostController::class, 'show']);

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

