<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterKendaraan extends Model
{
    use HasFactory;
    protected $table = 'm_kendaraan';
    protected $guarded = [];
}
