<?php

namespace App\Http\Controllers;

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

    public function store(Request $request)
    {
        //
    }
}
