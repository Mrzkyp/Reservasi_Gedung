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

    public function tampilkandata($id)
{
    $jadwal = Jadwal::find($id);
    // dd($jadwal);
    return view ('admin.tampildata', compact('jadwal'));
}

public function updatedata(Request $request, $id)
{
    $jadwal = Jadwal::find($id);
    $jadwal->update($request->all()); 
    
    return redirect()->route("jadwal_admin")->with('success',' Data telah diperbaharui!');
}

    public function delete($id){
        $data = jadwal::find($id);
        $data->delete();

        return redirect()->route("jadwal_admin")->with("success", "Data berhasil di hapus");
    }

}
