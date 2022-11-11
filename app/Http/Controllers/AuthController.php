<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\User;
use Illuminate\Support\Str;



use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //login
    public function index(){
        return view('login.login');
    }
//login proses
    public function signin(Request $request)
    {
        $input = $request->all();
        // User::where("email",  $input->email)
        // dd(Auth::attempt(['email' => $input['email'],'password' => $input['password']]));
        if (Auth::attempt(['email' => $input['email'],'password' => $input['password']])) {
            return redirect('/dashboard');
        }
        return redirect('/login');
    }
//register
    public function register()
    {
        return view('register.register');
    }
//proses register
    public function store(Request $request)
    {
        member::create([
            'name' => $request->name,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'notelepon' => $request->notelepon,
            'password' => bcrypt($request->password),
            "role"=>"member",
        ]);
        return redirect('/login');
    }
//logout member
    public function destroy()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
//Reservasi member
    public function pesan()
    {
        return view('member.reservasi');
    }
    
    public function jadwal1()
    {
        return view('member.jadwalMember');
    }
    
// login admin
    public function index1()
{
    return view('login.login-admin');
}


// //login proses admin
public function store1(Request $request)
{
    $input = $request->all();
        // dd(Auth::attempt(['email' => $input['email'],'password' => $input['password']]));
        if (Auth::attempt(['email' => $input['email'],'password' => $input['password'], 'role' => 'admin'])) {
            return redirect('/dashboard-admin');
        } else{
        return redirect('/login-admin');
}
}


}