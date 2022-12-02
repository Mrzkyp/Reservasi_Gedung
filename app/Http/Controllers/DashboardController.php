<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Reservasi;



class DashboardController extends Controller
{
    public function index(){
        return view('admin.dashboard_admin');
    }


    public function show(Request $request)
    {
        $reservasi = Reservasi::latest()->paginate(5);
        return view('home', compact('reservasi'));
    }
    

    public function destroys()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }

    

}
