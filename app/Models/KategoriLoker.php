<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriLoker extends Model
{
    use HasFactory;
    use HasFactory;

    protected $table = 'kategori_loker';

    protected $fillable= [
        "nama_kategori",
    ];
}
