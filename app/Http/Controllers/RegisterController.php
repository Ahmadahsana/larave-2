<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'max:255'],
            'username' => ['required', 'min:4', 'max:200', 'unique:users'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'min:5', 'max:255']
        ]);

        $data['password'] = Hash::make($data['password']);

        User::create($data);

        // $request->session()->flash('success', 'SElamat yA GaiS. . .');
        return redirect('/login')->with('success', 'SElamat yA GaiS. . .');
    }
}
