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
        return redirect('/status_pemesanan');
    }

    public function tampilkandata1($id)
{
    $reservasi = Reservasi::find($id);
    
    return view ('admin.status_pemesanan', compact('reservasi'));
}


    public function updatedata(Request $request, $id)
{
    $reservasi = Reservasi::find($id);
    $reservasi->update($request->all()); 
    
    return redirect()->route("admin.status_pemesanan")->with('success',' Data telah diperbaharui!');
}

    public function delete1($id){
        $data = Reservasi::find($id);
        $data->delete();

        return redirect()->route("admin.status_pemesanan")->with("success", "Data berhasil di hapus");
    }


}
