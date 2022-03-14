<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;


class RegisterController extends Controller
{
    public function create(): Factory|View|Application
    {
        return view('register.create');
    }

    public function store()
    {
        $attributes = request()?->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:7|max:255'
        ]);

        User::create($attributes);

        return redirect('/');
    }

}
