<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Minuman extends Model
{
    protected $table = "minuman";
    protected $primarykey = "id";
    protected $fillable = ['id', 'nama_minuman', 'harga', 'jenis', 'gambar_minuman'];
    use HasFactory;
}
