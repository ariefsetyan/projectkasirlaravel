<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $table = 'item';
    protected $primaryKey='id_item';
    protected $fillable = [
        'id_item',
        'kode_item',
        'nama_item',
        'id_supplier',
        'id_cat_item',
        'status',
        'created_at',
        'updated_at'
    ];
}
