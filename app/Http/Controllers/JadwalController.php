<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;

class JadwalController extends Controller
{
    public function proses()
    {

        return view('admin.tambahdata');
    }  
    
    public function muncul(Request $request)
    { 
        $jadwal = Jadwal::latest()->paginate(5);
        return view('admin.jadwal_reservasi', compact('jadwal'));
    }

    public function proses1(Request $request)
    {
        Jadwal::create([
        'hari_tanggal' => $request->hari_tanggal,
        'waktu' => $request->waktu,
        'pengguna' => $request->pengguna,
        'keterangan' => $request->keterangan,
        ]);
        return redirect('/jadwal_admin');
    }

    public function pesan1(){
        return view('admin.tambahdata');
    }
    
}
