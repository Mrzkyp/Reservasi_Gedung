<?php

namespace App\Http\Controllers;

use App\Models\member;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    public function proses(Request $request){
        member::create([
            'name' => $request->name,
            'notelepon' => $request->notelepon,
            'alamat' => $request->alamat,
            'hari_tanggal' => $request->hari_tanggal,
            'waktu' => $request->waktu,
            'keterangan' => $request->keterangan,
            
        ]);
        return redirect('/reservasi');
    }
}
