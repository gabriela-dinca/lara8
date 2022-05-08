<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create(): Factory|View|Application
    {
        return view('sessions.create');
    }

    /**
     * @throws ValidationException
     */
    public function store(): Redirector|Application|RedirectResponse
    {
        $attributes = request()?->validate([
            'email' => 'required|exists:users|email',
            'password' => 'required|min:7|max:255'
        ]);

        if (!auth()->attempt($attributes)){
            throw ValidationException::withMessages([
                'email'=> 'Your provided credentials could not be verified!'
            ]);
        }

        session()->regenerate();
        return redirect('/')->with('success', 'Welcome back!');
    }

    public function destroy(): Redirector|Application|RedirectResponse
    {
       auth()->logout();
       return redirect('/')->with('success', 'Goodbye!');
    }
}
