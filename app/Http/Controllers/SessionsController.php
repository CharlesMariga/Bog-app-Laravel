<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        // Validate the request
        $attributes = request()->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
        // Attempt to authenticate and login the user based on the provided credentials
        if (! auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified.',
            ]);
            //     return back()->withInput()->withErrors([
            //         'email' => 'Your provided credentials could not be verified.',
            //     ]);
        }

        // redirect with a success flash message
        // If successful, redirect to the intended location
        return redirect('/')->with('success', 'Welcome back!');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
