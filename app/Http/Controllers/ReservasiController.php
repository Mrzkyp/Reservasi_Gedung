<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi;

class ReservasiController extends Controller
{
    
    //Reservasi member
    public function pesan()
    {
        return view('member.reservasi');
    }
    
    public function muncul(Request $request)
    { 
        $reservasi = Reservasi::latest()->paginate(5);
        return view('admin.status_pemesanan', compact('reservasi'));
    }

    public function proses1(Request $request)
    {
        Reservasi::create([
        'name' => $request->name,
        'notelepon' => $request->notelepon,
        'alamat' => $request->alamat,
        'hari_tanggal' => $request->hari_tanggal,
        'waktu' => $request->waktu,
        'keterangan' => $request->keterangan,
        ]);
        return redirect('/jadwal');
    }


}
