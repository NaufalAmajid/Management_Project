<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    protected $table = "galery";
    protected $primarykey = "id";
    protected $fillable = ['id', 'gambar'];
    use HasFactory;
}
