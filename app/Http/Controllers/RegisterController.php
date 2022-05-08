<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Validation\Rule;


class RegisterController extends Controller
{
    public function create(): Factory|View|Application
    {
        return view('register.create');
    }

    public function store(): Redirector|Application|RedirectResponse
    {
        $attributes = request()?->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:225', Rule::unique('users', 'username')],
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:7|max:255'
        ]);

        $newUser = User::create($attributes);

        auth()->login($newUser);

        return redirect('/')->with('success', 'Your account has been created.');
    }

}
