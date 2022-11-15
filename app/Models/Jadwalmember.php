<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwalmember extends Model
{
    use HasFactory;
    protected $table = 'jadwalmember';
    
    protected $fillable =[
        'hari_tanggal',
        'waktu',
        'pengguna',
        'keterangan',
    ];
}

