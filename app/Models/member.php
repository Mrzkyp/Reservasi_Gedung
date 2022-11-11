<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'email',
        'alamat',
        'notelepon',
        'password',
        'role',
    ];

    protected $hidden = [
        'email',
        'password',
        'remember_token',
    ];

}
