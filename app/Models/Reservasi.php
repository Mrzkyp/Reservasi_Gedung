<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;
    
    protected $table = 'reservasi';
    protected $primaryKey = 'id';
    
    // protected $fillable =[
    //     'name',
    //     'notelepon',
    //     'alamat',
    //     'hari_tanggal',
    //     'waktu_mulai',
    //     'waktu_berakhir',
    //     'jenis_reservasi',
    //     'keterangan',
    //     'status',
    // ];

    protected $guarded = [""];
    
}
