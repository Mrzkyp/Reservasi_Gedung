<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi;

class TransaksiController extends Controller
{
    public function index()
    {
        $reservasi = Reservasi::get();
        return view('admin.status_transaksi', $reservasi);
    }

    public function show(Request $request)
    {
        $reservasi = Reservasi::latest()->paginate(5);
        return view('admin.status_transaksi', compact('reservasi'));
    }



}
