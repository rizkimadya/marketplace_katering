<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'catering_id',
        'nama_menu',
        'harga',
        'gambar',
        'deskripsi',
    ];

    public function catering()
    {
        return $this->belongsTo(User::class, 'catering_id');
    }
}
