<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Illuminate\Http\Controllers\LoginMemberController;
use Illuminate\Http\Controllers\AuthController;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    
}