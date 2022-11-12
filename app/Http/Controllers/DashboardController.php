<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Controllers\HomeController;
use Illuminate\Http\Controllers\LoginMemberController;


class DashboardController extends Controller
{
    public function index()
    {
        return view('member.dashboard');
    }

    public function indexa()
    {
        return view('admin.dashboard_admin');
    }

    public function destroys()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }

}
