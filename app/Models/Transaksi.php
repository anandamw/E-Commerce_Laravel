<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    // Mengatur primary key yang digunakan oleh model
    protected $primaryKey = 'id_transaksis';

    // Pastikan primary key ini adalah auto-incrementing
    public $incrementing = true;

    // Jika primary key bukan tipe integer, ubah menjadi false
    protected $keyType = 'int';

    // Tentukan kolom-kolom yang dapat diisi
    protected $fillable = [
        'harga',
        'token_transaksi',
        'users_id',
        'produks_id',
        'snap_token'
    ];
}
