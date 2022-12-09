<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi;
use Illuminate\Support\Carbon;

class ReservasiController extends Controller
{

    //Reservasi member
    public function pesan()
    {
        $now = $this->getDateNow();
        $back = $this->getDateBack();
        return view('member.reservasi', compact('now', 'back'));
    }


    public function show(Request $request)
    {
        $reservasi = Reservasi::latest()->paginate(5);
        return view('admin.status_pemesanan', compact('reservasi'));
    }

    public function getDateNow()
    {
        return date('Y-m-d', strtotime(Carbon::today()->toDateString()));
    }
    public function getDateBack()
    {
        return date('Y-m-d', strtotime(Carbon::today()->addDays(31)->toDateString()));
    }

    public function proses1(Request $request)
    {
        $data = Reservasi::where('hari_tanggal', $request->hari_tanggal)->get();

        if ($data->count() == '0') {
            Reservasi::create([
                'name' => $request->name,
                'notelepon' => $request->notelepon,
                'alamat' => $request->alamat,
                'hari_tanggal' => $request->hari_tanggal,
                'waktu_mulai' => $request->waktu_mulai,
                'waktu_berakhir' => $request->waktu_berakhir,
                'keterangan' => $request->keterangan,
                'status' => 0,
            ]);
        } else {
            $success = false;
            foreach ($data as $dt) {
                if ($dt->waktu_mulai > $request->waktu_mulai && $dt->waktu_mulai >= $request->waktu_berakhir) {
                    $success = true;
                } elseif (($dt->waktu_berakhir <= $request->waktu_mulai && $dt->waktu_berakhir < $request->waktu_berakhir)) {
                    $success = true;
                }
            }
            if ($success) {
                Reservasi::create([
                    'name' => $request->name,
                    'notelepon' => $request->notelepon,
                    'alamat' => $request->alamat,
                    'hari_tanggal' => $request->hari_tanggal,
                    'waktu_mulai' => $request->waktu_mulai,
                    'waktu_berakhir' => $request->waktu_berakhir,
                    'keterangan' => $request->keterangan,
                    'status' => 0,
                ]);
            }
        }
        return redirect('/');
    }

    public function tampilkandata1($id)
    {

        $reservasi = Reservasi::find($id);
        // dd($reservasi);

        return view('admin.tampildata1', compact('reservasi'));
    }


    public function accreservasi(Request $request, $id)
    {
        $data = Reservasi::find($id)->update([
            'status' => 1
        ]);

        return redirect()->route("jadwal_reservasi")->with('success', ' Data telah diperbaharui!');
    }
}