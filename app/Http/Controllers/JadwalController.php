<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\Nama;

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
        'name' => $request->name,
        'hari_tanggal' => $request->hari_tanggal,
        'waktu' => $request->waktu,
        'keterangan' => $request->keterangan,
        ]);
        return redirect('/jadwal_admin');
    }

    public function pesan1(){
        return view('admin.tambahdata');
    }
    
    public function update(Request $request, $id){
        Jadwal::where("id", $id)->update([
        'name' => $request->name,
        'hari_tanggal' => $request->hari_tanggal,
        'waktu' => $request->waktu,
        'keterangan' => $request->keterangan,
        ]);
        return back();
    }

    public function destroy($id)
{
    $Jadwal = Jadwal::where('id', $id)->first();
    $Jadwal->delete();
    Jadwal::where('id', $id)->delete();
    return back();
}
    
}
