<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class LoginMemberController extends Controller
{
    public function index(){
        return view('login.login');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))){
            return redirect('layouts.master-member');
        }
        return redirect('/dashboard');
    }
}
