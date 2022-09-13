<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Monitoring_Kendaraan extends Model
{
    use HasFactory;

    protected $table = 'monitoring_kendaraan';
    // protected $fillable = ['kendaraan','pengguna'];
    protected $guarded = [];
}
