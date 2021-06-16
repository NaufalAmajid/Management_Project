<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    protected $table = "testimoni";
    protected $primarykey = "id";
    protected $fillable = ['id', 'nama', 'email', 'telephone', 'komentar'];
    use HasFactory;
}
