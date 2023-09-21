<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_transaksi',
        'tgl_transaksi',
        'pelanggan_id',
        'kasir_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
