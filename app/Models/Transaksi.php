<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    public $fillable = [
        'no_invoice',
        'kantor_id',
        'catering_id',
        'makanan_id',
        'jumlah_porsi',
        'tanggal_pengiriman',
    ];

    public function kantor()
    {
        return $this->belongsTo(User::class, 'kantor_id');
    }

    public function catering()
    {
        return $this->belongsTo(User::class, 'catering_id');
    }

    public function makanan()
    {
        return $this->belongsTo(Makanan::class, 'makanan_id');
    }
}
