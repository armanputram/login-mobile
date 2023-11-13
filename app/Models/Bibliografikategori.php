<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bibliografikategori extends Model
{
    use HasFactory;

    //tambahkan
    protected $table='bibliografi_kategori';
    protected $guarded = ['id'];
}
