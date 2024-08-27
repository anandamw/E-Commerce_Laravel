<?php

namespace App\Http\Controllers;

use App\Models\AtributProduk;
use App\Models\Produk;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index()
    {

        $data = [
            'getStatus' => DB::table('mitra_umkms')
                ->join('users', 'mitra_umkms.users_id', '=', 'users.id')->first(),

            'produks' => Produk::with([
                'atr' => function ($query) {
                    $query->select('produks_id', 'stok', 'harga')
                        ->orderBy('harga', 'asc');
                },
                'subs' => function ($query) {
                    $query->select('id_sub_kategori', 'nama_sub_kategori')->get();
                },
            ])
                ->orderBy('created_at', 'desc')
                ->take(5)
                ->get()
        ];

        return view('pages.beranda', $data);
    }

    public function produk()
    {

        return view('pages.produk');
    }

    public function produk_detail($token)
    {
        $produk = Produk::join('sub_kategoris', 'produks.sub_kategori_id', '=', 'sub_kategoris.id_sub_kategori')
            ->join('users', 'produks.users_id', '=', 'users.id')
            ->join('kategoris', 'sub_kategoris.kategori_id', '=', 'kategoris.id_kategoris')
            ->where('produks.token_produk', $token)
            ->first();

        $atribut =  AtributProduk::join('produks', 'atribut_produk.produks_id', '=', 'produks.id_produks')->first();

        // Simpan produk saja ke sesi untuk checkout
        session()->put('checkout_produk', $produk);


        // Kirimkan data ke view
        return view('pages.detail_produk', ['getsData' => $produk], compact('atribut'));
    }



    public function create()
    {
        return view();
    }
    public function create_action(Request $request)
    {
        return redirect();
    }
    public function update($id)
    {
        return view();
    }
    public function update_action(Request $request, $id)
    {
        return redirect();
    }
    public function delete($id)
    {
        return redirect();
    }
}
