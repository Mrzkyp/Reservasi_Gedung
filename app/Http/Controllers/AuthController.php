<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
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
            return redirect('/')->with('sukses', 'Berhasil Login');
        }else{
        return redirect('/login')->with('gagal', 'Password Atau Email salah');;
    }
    }
//register
    public function register()
    {
        return view('register.register');
    }
//proses register
    public function store(Request $request)
    {
        $nama = $request->input('name');
        $email = $request->get('email');
        $alamat = $request->get('alamat');
        $notelepon = $request->get('notelepon');
        $password = $request->get('password');
        $role = 'member';
        $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 

        $data = Member::where([
            'email' => $email,
            'role' => 'member', 
        ])->exists();

        if($data == false ){
            if(strlen($password) !== 8 && preg_match($regex, $email) == false){
                return redirect()->back()->with('gagal', 'Harap isi Form dengan benar');
            }elseif(strlen($password) == 8 && preg_match($regex, $email) == true){
                member::create([
                    'name' => $request->get('name'),
                    'email' => $request->get('email'),
                    'alamat' => $request->get('alamat'),
                    'notelepon' => $request->get('notelepon'),
                    'password' => bcrypt($request->get('password')),
                    "role"=>"member",
                ]);
                return redirect('/login')->with('sukses', 'Berhasil daftar silahkan Login');
            }
           
        }elseif($data !== false ){
            return redirect('/register')->with('gagal', 'Data sudah ada !');

        }
    }
//logout member
    public function destroy()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/')->with('sukses', 'Berhasil LogOut');
    }
}
