<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Controllers\HomeController;

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
