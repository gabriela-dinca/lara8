<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class PostController extends Controller
{

    public function index(): Factory|View|Application
    {
        return view('posts', [
            'posts' => Post::latest('published_at')->filter(request(['search', 'category']))->with(['category', 'author'])->get(),
            'categories' => Category::all(),
            'currentCategory' => Category::firstWhere('slug', request('category'))
        ]);
    }

    public function show(Post $post): Factory|View|Application
    {
        return view('post', [
            'post' => $post,
            'categories' => Category::all()
        ]);
    }
}
