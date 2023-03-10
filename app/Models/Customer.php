<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customer';
    protected $primaryKey='id_customer';
    protected $fillable = [
        'id_customer',
        'nama_customer',
        'telp',
        'alamat',
        'status',
        'created_at',
        'updated_at'
    ];

    public function kendaraan()
    {
        return $this->hasMany(Kendaraan::class,'id_customer','id_customer');
    }
}
