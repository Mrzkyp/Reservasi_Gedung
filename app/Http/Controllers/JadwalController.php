<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;
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

    public function proses1(Request $request)
    {
        Jadwal::create([
        'name' => $request->name,
        'hari_tanggal' => $request->hari_tanggal,
        'waktu' => $request->waktu,
        'keterangan' => $request->keterangan,
        ]);
        return redirect('/jadwal_reservasi');
    }

    public function tampilkandata($id)
{
    $jadwal = Jadwal::find($id);
    // dd($jadwal);
    return view ('admin.tampildata', compact('jadwal'));
}

    public function delete($id){
        $data = Reservasi::find($id);
        $data->delete();

        return redirect()->route("status_pemesanan_admin")->with("success", "Data berhasil di hapus");
    }

}
