<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Reservasi;
use PDF;


class DashboardController extends Controller
{
    public function index(){
        return view('admin.dashboard_admin');
    }


    public function show(Request $request)
    {
        $reservasi = Reservasi::where('status', '1')->latest()->simplePaginate(5);
        $reservasi_blm = Reservasi::where('status', '0')->latest()->simplePaginate(5);
        return view('home', compact('reservasi', 'reservasi_blm'));
    }
    

    public function destroys()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }

    public function download_data($id){
        $data = Reservasi::find($id);
        $pdf = PDF::loadView('pdf.tes', ['data' => $data]);
        return $pdf->stream('laporan-pdf.pdf');
    }
    
    public function download_data_blm($id){
        $data = Reservasi::find($id);
        $pdf = PDF::loadView('pdf.tes', ['data' => $data]);
        return $pdf->stream('laporan-pdf.pdf');
    }
}
