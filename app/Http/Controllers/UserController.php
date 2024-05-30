<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function insertUser(Request $request)
{
    try {
        // Validação dos dados do usuário
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Criação do usuário
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'user_type' => 2, // Definir 2 por padrão de user
        ]);

        return redirect('/')->with('message', 'Great! ' .$request->name.' now you have an account');
    } catch (ValidationException $e) {
        return redirect()->back()->withErrors()->withInput();
    }
}

       public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/');
        } else {
            return redirect()->back()
                ->withInput($request->only('email'))
                ->withErrors(['login_error' => 'Invalid email or password.']);
        }
    }

     public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
