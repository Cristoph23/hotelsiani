<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_prov',
        'telefono'
    ];

    public function products(){
        return $this->hasMany(Product::class);
    }
}
