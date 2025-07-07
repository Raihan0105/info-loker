<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Loker extends Model
{
    use HasFactory;

    protected $table = 'loker';

    protected $fillable = [
        "kategori_id",
        "judul",
        "deskripsi",
        "perusahaan",
        "logo_perusahaan"
    ];

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(KategoriLoker::class);
    }
}
