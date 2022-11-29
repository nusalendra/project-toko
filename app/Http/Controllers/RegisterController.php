<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request) {        
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:3|max:255',
            'role' => 'required|min:3|max:255'
        ]);

        // Menggunakan Hashing password agar password bcrypt!
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // with = (Flash message)
        return redirect('/login')->with('success', 'Registration successfull! Please Login');                
    }
    
}
