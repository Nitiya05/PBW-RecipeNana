<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    use HasFactory;
    protected $table = 'reseps';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'nama_makanan',
        'resep',
        'gambar',

    ];
}
