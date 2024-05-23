<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function insertUser()
    {
        // Dados do usuário
        $user = User::create([
            'name' => 'Ana',
            'email' => 'ana@hotmail.com',
            'password' => Hash::make('ana@hotmail.com'),
        ]);

        // Redireciona para a página de login
        return redirect('/login')->with('status', 'User inserted successfully');
    }

       public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('home');
        } else {
            return redirect()->back()
                ->withInput($request->only('email'))
                ->withErrors(['login_error' => 'Invalid email or password.']);
        }
    }

     public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/home');
    }
}
