<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Validation\Rule;


class RegisterController extends Controller
{
    public function create(): Factory|View|Application
    {
        return view('register.create');
    }

    public function store()
    {
        $attributes = request()?->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:225', Rule::unique('users', 'username')],
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:7|max:255'
        ]);

        User::create($attributes);

        return redirect('/')->with('success', 'Your account has been created.');
    }

}
