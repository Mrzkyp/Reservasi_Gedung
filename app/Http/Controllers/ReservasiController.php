<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi;
use Illuminate\Support\Carbon;
use PDF;
use Illuminate\Support\Facades\Auth;
class ReservasiController extends Controller
{

    //Reservasi member
    public function pesan()
    {
        $now = $this->getDateNow();
        $back = $this->getDateBack();

        $cek = Reservasi::latest();
         
        if(Auth::check()){
            $read = 'readonly';
        }else{
            $read = '';
        }
        return view('member.reservasi', compact('now', 'back', 'cek', 'read'));
    }
    public function download_data_jadi(){
        $data = Reservasi::latest()->first();
        $pdf = PDF::loadView('pdf.tes', ['data' => $data]);
        return $pdf->stream('laporan-pdf.pdf');
    }

    public function show(Request $request)
    {
        $reservasi = Reservasi::latest()->simplePaginate(5);
        return view('admin.status_pemesanan', compact('reservasi'));
    }

    public function getDateNow()
    {
        return date('Y-m-d', strtotime(Carbon::today()->toDateString()));
    }
    public function getDateBack()
    {
        return date('Y-m-d', strtotime(Carbon::today()->addDays(30)->toDateString()));
    }

    public function proses1(Request $request)
    {
        $data = Reservasi::where('hari_tanggal', $request->hari_tanggal)->get();
        if(Auth::check()){
        
        if(Auth::user()->role == 'member'){
            if ($data->count() == '0') {
                Reservasi::create([
                    'name' => $request->name,
                    'notelepon' => $request->notelepon,
                    'alamat' => $request->alamat,
                    'hari_tanggal' => $request->hari_tanggal,
                    'hari_berakhir' => date('Y-m-d', strtotime(Carbon::today()->addDays(30)->toDateString())),
                    'waktu_mulai' => $request->waktu_mulai,
                    'waktu_berakhir' => $request->waktu_berakhir,
                    'jenis_reservasi' => $request->jenis_reservasi,
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
                        'hari_berakhir' => date('Y-m-d', strtotime(Carbon::today()->addDays(30)->toDateString())),
                        'waktu_mulai' => $request->waktu_mulai,
                        'waktu_berakhir' => $request->waktu_berakhir,
                        'jenis_reservasi' => $request->jenis_reservasi,
                        'keterangan' => $request->keterangan,
                        'status' => 0,
                    ]);
                }
            }
            return redirect()->back()->with('sukses', 'Berhasil Reservasi, Harap Download File PDF Sebagai Tanda Bukti');
        }
    }else{
        if ($data->count() == '0') {
            Reservasi::create([
                'name' => $request->name,
                'notelepon' => $request->notelepon,
                'alamat' => $request->alamat,
                'hari_tanggal' => $request->hari_tanggal,
                'waktu_mulai' => $request->waktu_mulai,
                'waktu_berakhir' => $request->waktu_berakhir,
                'jenis_reservasi' => $request->jenis_reservasi,
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
                    'jenis_reservasi' => $request->jenis_reservasi,
                    'keterangan' => $request->keterangan,
                    'status' => 0,
                ]);
            }
        }
        return redirect()->back()->with('sukses', 'Berhasil Reservasi, Harap Download File PDF Sebagai Tanda Bukti');
    }
    }


    public function accreservasi($id)
    {
        $data = Reservasi::find($id)->update([
            'status' => 1
        ]);

        return redirect()->back()->with('sukses', ' Data telah diperbaharui!');
    }
    public function delete1($id){
        $data = Reservasi::find($id);
        $data->delete();

        return redirect()->route("status_pemesanan_admin")->with("sukses", "Data berhasil di hapus");
    }
}