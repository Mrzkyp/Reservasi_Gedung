<?php

namespace App\Http\Controllers;

use App\Models\member;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.register');
    }


    public function store(Request $request)
    {
        member::create([
            'name' => $request->name,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'notelepon' => $request->notelepon,
            'password' => bcrypt($request->password),
        ]);
        return redirect('/login');
    }
}