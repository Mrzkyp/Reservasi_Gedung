<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi;
use App\Models\JadwalMember;

class JadwalMemberController extends Controller
{
    public function proses()
    {
        $reservasi = Reservasi::get();
        return view('member.jadwalmember', $reservasi);
    }  
    
    public function muncul(Request $request)
    { 
        $reservasi = Reservasi::latest()->paginate(5);
        return view('member.jadwalmember', compact('reservasi'));
    }

}
