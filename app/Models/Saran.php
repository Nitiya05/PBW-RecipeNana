<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saran extends Model
{
    use HasFactory;
    protected $table = 'sarans';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'nama',
        'nama_makanan',
        'keterangan',

    ];
}
