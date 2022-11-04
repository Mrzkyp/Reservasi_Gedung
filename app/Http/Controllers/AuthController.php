<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\User;
use Illuminate\Support\Str;


use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('login.login');
    }

    public function signin(Request $request)
    {
        $input = $request->all();
        // dd(Auth::attempt(['email' => $input['email'],'password' => $input['password']]));
        if (Auth::attempt(['email' => $input['email'],'password' => $input['password']])) {
            return redirect('/dashboard');
        }
        return redirect('/login');
    }

    public function register()
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

    public function destroy()
    {
        (Str::length(auth()->user()) > 0);
        return redirect('/');
    }
}
