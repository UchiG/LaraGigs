<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    // Show Register Create form
    public function create()
    {
        return view('users.register');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
        ]);

        // Hash password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create user
        $user = User::create($formFields);

        // Login
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in!');
    }
}
