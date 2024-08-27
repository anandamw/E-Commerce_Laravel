<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;

    protected $guarded = ["id_produks"];

    public static function ProdukJoinUsers()
    {
        return  DB::Table("produks")
            ->select(
                'produks.*',
                DB::raw('MIN(atribut_produk.harga) as harga_terendah'),
                DB::raw('MAX(atribut_produk.harga) as harga_tertinggi'),
                DB::raw('SUM(atribut_produk.stok) as total_stok'),
                DB::raw('MIN(atribut_produk.ukuran) as ukuran_terendah'),
                DB::raw('MAX(atribut_produk.ukuran) as ukuran_tertinggi')
            )
            ->join("users", "produks.users_id", "=", "users.id")
            ->join('atribut_produk', 'produks.id_produks', '=', 'atribut_produk.produks_id')
            ->groupBy(
                'produks.id_produks',
                'produks.nama_produk',
                'produks.thumbnail',
                'produks.deskripsi',
                'produks.sub_kategori_id',
                'produks.users_id'
            )
            ->get();
    }

    public function atr()
    {
        return $this->hasMany(AtributProduk::class, 'produks_id', 'id_produks');
    }

    public function subs()
    {
return $this->belongsTo(SubKategori::class,  'sub_kategori_id', 'id_sub_kategori');
    }
}
