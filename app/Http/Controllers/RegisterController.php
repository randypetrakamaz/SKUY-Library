<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('admin.register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validateData['password'] = Hash::make($validateData['password']); //->enkripsi password
        // $validateData['password'] = bcrypt($validateData['password']); ->enkripsi password
        User::create($validateData);

        $request->session()->flash('success', 'Registration Successful! Please Login'); //another method to show message 

        return redirect('/login')->with('success', 'Registration Successful! Please Login');
    }
}