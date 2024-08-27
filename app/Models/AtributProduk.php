<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtributProduk extends Model
{
    use HasFactory;
    protected $table = 'atribut_produk';
    protected $primaryKey = 'id_atribut_produk';
    protected $guarded = ['id_atribut_produk'];

    public static function rawData($produkId, array $data)
    {
        $atributProduks = [];

        $varians = $data['varians'];
        $ukurans = $data['ukurans'];
        $hargas = $data['hargas'];
        $stoks = $data['stoks'];

        foreach ($varians as $index => $varian) {
            $atributProduks[] = [
                'nama_varian' => $varian,
                'ukuran' => $ukurans[$index] ?? null,  // Mengambil ukuran berdasarkan index
                'harga' => $hargas[$index] ?? null,    // Mengambil harga berdasarkan index
                'stok' => $stoks[$index] ?? null,      // Mengambil stok berdasarkan index
                'produks_id' => $produkId,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        return $atributProduks;
    }

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'produks_id', 'id_produks');
    }
}
