<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;
    protected $table = 'kendaraans';
    protected $fillable = [
            'id_kendaraan',
'nopol',
'nama_kendaran',
'tipe_kendaran',
'jenis_kendaran',
'created_at',
'updated_at'
        ];
}
