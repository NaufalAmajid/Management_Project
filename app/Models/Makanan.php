<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    protected $table = "makanan";
    protected $primaryKey = "id";
    protected $fillable   = ['id', 'kode_makanan', 'nama_makanan', 'harga', 'jenis', 'gambar_makanan'];
    use HasFactory;
}
