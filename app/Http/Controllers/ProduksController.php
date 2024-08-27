<?php

namespace App\Http\Controllers;

use App\Models\AtributProduk;
use App\Models\Foto_produk;
use App\Models\Produk;
use App\Models\Varian;
use App\Models\Kategori;
use App\Models\Pivot_Produk_Kategori;
use App\Models\Ukuran;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProduksController extends Controller
{


    public function index()
    {
        $data = Produk::ProdukJoinUsers();
        $dataProduk = [
            'dataProduk' => $data,
        ];

        return view('admin.produks.produk', $dataProduk);
    }

    public function produk()
    {
        return view('pages.produk');
    }

    public function create()
    {
        $kategoris = kategori::with('subs')->get();

        return view('admin.produks.produk_create', compact('kategoris'));
    }

    public function store(Request $request)
    {
        // $request->validate([

        // ]);
        $token = uniqid('', true);
        $token_file = uniqid(13);
        $userId = auth()->user()->id;
        $file = $request->file('thumbnail');
        if (isset($file)) {
            $file_name = $token_file . '.' . $file->getClientOriginalExtension();
        } else {
            $file_name = 'default.png';
        }
        $produk = [
            'token_produk' => $token,
            'nama_produk' => $request->nama_produk,
            'deskripsi' => $request->deskripsi,
            'thumbnail' => $file_name ?? 'default.png',
            'sub_kategori_id' => $request->sub_kategori,
            'users_id' => $userId,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        $produk = Produk::insertGetId($produk);
        $file->move('thumbnail_produk', $file_name);

        $rawDataAtribut = AtributProduk::rawData($produk, [
            'varians' => $request->input('varian', []),
            'ukurans' => $request->input('ukuran', []),
            'hargas' => $request->input('harga', []),
            'stoks' => $request->input('stok', []),
        ]);
        AtributProduk::insert($rawDataAtribut);

        toast('Berhasil Menambahkan Data ', 'success');

        return redirect(auth()->user()->role . '/foto-produk' . "?id=$produk");
    }

    public function edit($id)
    {
        $detail = Produk::where('id_produks', $id)->first();
        $atribut = AtributProduk::where('produks_id', $id)->get();
        $kategoris = kategori::with('subs')->get();
        return view('admin.produks.produk_edit', compact('kategoris', 'detail', 'atribut'));
    }

    public function update(Request $request, $id)
    {
        // $request->validate([

        // ]);
        $token = uniqid('', true);
        $token_file = uniqid(13);
        $userId = auth()->user()->id;
        $file = $request->file('thumbnail');
        if (isset($file)) {
            $file_name = $token_file . '.' . $file->getClientOriginalExtension();
            $file->move('thumbnail_produk', $file_name);
            $sebelumnya = Produk::where('id_produks', $id)->first()->thumbnail;
            File::delete('thumbnail_produk/' . $sebelumnya);
        } else {
            $file_name = Produk::where('id_produks', $id)->first()->thumbnail;
        }
        $produk = [
            'token_produk' => $token,
            'nama_produk' => $request->nama_produk,
            'deskripsi' => $request->deskripsi,
            'thumbnail' => $file_name,
            'sub_kategori_id' => $request->sub_kategori,
            'users_id' => $userId,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        Produk::where('id_produks', $id)->update($produk);
        AtributProduk::where('produks_id', $id)->delete();

        $rawDataAtribut = AtributProduk::rawData($id, [
            'varians' => $request->input('varian', []),
            'ukurans' => $request->input('ukuran', []),
            'hargas' => $request->input('harga', []),
            'stoks' => $request->input('stok', []),
        ]);
        AtributProduk::insert($rawDataAtribut);
        toast('Berhasil Memperbarui Data ', 'success');

        return redirect(auth()->user()->role . '-produk');
    }

    public function destroy($id)
    {
        AtributProduk::where('produks_id', $id)->delete();
        Produk::where('id_produks', $id)->delete();
        File::delete('thumbnail_produk/' . Produk::where('id_produks', $id)->first()->thumbnail);
        toast('Berhasil Menghapus Data ', 'success');

        return redirect()->route('produk.index');
    }


    public function ckeditor(Request $request)
    {
        if ($request->hasFile('upload')) {
            $token = Str::random(10);

            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $token . '.' . $extension;

            $request->file('upload')->move(public_path('media'), $fileName);

            $url = asset('media/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
    }
}
