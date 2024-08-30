<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    // Register Post method
    public function register(Request $request)
    {
        $incomingFields = $request->validate([
            'name' => ['required', 'string', 'min:6', 'max:30', Rule::unique('users', 'name')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'string', 'min:6']
        ]);

        // hash password
        $incomingFields['password'] = bcrypt($incomingFields['password']);

        // create user save to db
        $user = User::all();
        echo ($user);
        User::create($incomingFields);

        return redirect('/');
    }

    // Login post method
    public function login(Request $request)
    {
        $incomingFields = $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);

        // check if user exists
        if (Auth::attempt([
            'email' => $incomingFields['email'],
            'password' => $incomingFields['password']
        ])) {
            $request->session()->regenerate();
        }

        return redirect('/');
        // $user = Auth::attempt(['name' => $incomingFields['']])
    }

    // Logout post method
    public function logout(Request $request)
    {
        Auth::logout();
        Session::flush();
        return redirect('/');
    }
}
