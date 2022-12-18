<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    use HasFactory;
    protected $table = 'menus';
    protected $fillable = [
        'id',
        'name_menu',
        'url',
        'route',
        'icon',
        'is_active',
        'created_at',
        'updated_at'
    ];
    public function subMenu(){
        return $this->hasMany(Menus::class);
    }
}
