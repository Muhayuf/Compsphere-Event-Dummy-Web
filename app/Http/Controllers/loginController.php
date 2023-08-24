<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index() {
        return view('login-register/login', [
            'title' => 'Login'
        ]);
    }
    
    /* Inspired by: https://laravel.com/docs/10.x/authentication#main-content */
    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
 
        return back()->with('loginError', 'Login Failed! Please enter correct email or password.')->onlyInput('email');
    }

    /* Inspired by: https://laravel.com/docs/10.x/authentication#logging-out */
    public function logout(Request $request) {
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
