<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;
    protected $table = 'kendaraan';
    protected $primaryKey="id_kendaraan";
    protected $fillable = [
        'id_kendaraan',
        'nopol',
        'nama_kendaran',
        'tipe_kendaran',
        'jenis_kendaran',
        'id_customer',
        'created_at',
        'updated_at'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class,'id_customer','id_customer');
    }
}
