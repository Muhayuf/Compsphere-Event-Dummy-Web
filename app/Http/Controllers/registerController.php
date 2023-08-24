<?php

/* Inspired by: https://www.youtube.com/watch?v=6sIk2sYacTw&list=PLFIM0718LjIWiihbBIq-SWPU6b6x21Q_2&index=15&ab_channel=WebProgrammingUNPAS */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class registerController extends Controller
{
    public function index() {
        return view('login-register/register', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        
        User::create($validatedData);
        
        return redirect('/login')->with('success', 'Registration Successfull! Please Login, Mate.');
    }
}
