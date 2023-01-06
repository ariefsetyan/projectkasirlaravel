<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat_item extends Model
{
    use HasFactory;
    protected $table = 'cat_item';
    protected $primaryKey = 'id_cat_item';
    protected $fillable = [
        'id_cat_item',
        'cat_name',
        'status',
        'created_at',
        'updated_at'
    ];
}
