<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    
    use HasFactory;
/**
 * Bootstrap any application services.
 *
 * @return void
 */
  
    protected $fillable =[
        'name',
        'email',
        'password',
        'level',
    ];

    protected $hidden = [
        'email',
        'password',
        'remember_token',
    ];

}
