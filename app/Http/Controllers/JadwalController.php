<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi;

class JadwalController extends Controller
{
    public function proses()
    {

        $reservasi = Reservasi::get();
        return view('admin.jadwal_reservasi', $reservasi);
    }

    public function show(Request $request)
    {
        $reservasi = Reservasi::latest()->paginate(5);
        return view('admin.jadwal_reservasi', compact('reservasi'));
    }

    public function delete($id){
        $data = Reservasi::find($id);
        $data->delete();

        return redirect()->route("status_pemesanan_admin")->with("success", "Data berhasil di hapus");
    }

}
