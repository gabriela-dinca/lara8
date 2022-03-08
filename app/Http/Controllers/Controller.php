<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(): Factory|View|Application
    {
        return view('posts', [
            'posts' => Post::latest('published_at')->filter(request(['search']))->with(['category', 'author'])->get(),
            'categories' => Category::all()
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
