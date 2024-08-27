<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubKategori extends Model
{
    use HasFactory;
    protected $table = 'sub_kategoris';
    protected $guarded = [];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id_kategoris');
    }

    public function produk()
    {
        return $this->hasMany(Produk::class, 'sub_kategori_id', 'id_sub_kategori');
    }
}
