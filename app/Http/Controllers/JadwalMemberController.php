<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;

class JadwalMemberController extends Controller
{
    public function proses()
    {
        $jadwal = Jadwal::get();
        return view('member.jadwalmember', $jadwal);
    }  
    
    public function muncul(Request $request)
    { 
        $jadwal = Jadwal::latest()->paginate(5);
        return view('member.jadwalmember', compact('jadwal'));
    }

}
