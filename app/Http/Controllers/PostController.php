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
        return view('posts.index', [
            'posts' => Post::latest('published_at')->filter(
                request(['search', 'category', 'author'])
            )->with([
                'category', 'author'
            ])->paginate(6)->withQueryString()
        ]);
    }

    public function show(Post $post): Factory|View|Application
    {
        return view('posts.show', [
            'post' => $post,
            'categories' => Category::all()
        ]);
    }
}
