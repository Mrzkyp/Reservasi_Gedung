<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi;
use Illuminate\Support\Carbon;

class ReservasiAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $now = $this->getDateNow();
        $back = $this->getDateBack();
        return view('member.reservasiadmin', compact('now', 'back'));
    }

    public function getDateNow()
    {
        return date('Y-m-d', strtotime(Carbon::today()->toDateString()));
    }
    public function getDateBack()
    {
        return date('Y-m-d', strtotime(Carbon::today()->addDays(31)->toDateString()));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
            return redirect('/status_pemesanan');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $data = Reservasi::findOrFail($id);
        // $this->data['data'] = $data;
        // return view('admin.edit_pemesanan', $this->data);
        $data = Reservasi::find($id);
        // dd($data);
        return view('admin.edit_pemesanan', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Reservasi::find($id);
        $data->update($request->all());

        return redirect()->route("status_pemesanan_admin")->with('success', ' Data telah diperbaharui!');
    }

    /**
 * Remove the specified resource from storage
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
