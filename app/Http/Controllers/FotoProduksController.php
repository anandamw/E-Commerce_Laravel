<?php

namespace App\Http\Controllers;

use App\Models\AtributProduk;
use App\Models\Produk;
use Illuminate\Http\Request;

class FotoProduksController extends Controller
{
    public function index()
    {
        $id = $_GET['id'];
        $detail = Produk::where('id_produks', $id)->first();
        $atributProduk = AtributProduk::where('produks_id', $id)->get();

        return view('admin.produks.foto_produk', compact('atributProduk', 'detail'));
    }


    public function update(Request $request, $id)
    {
        $files = $request->file('thumbnail', []);

        if (!empty($files)) {
            foreach ($files as $index => $file) {
                $token = uniqid();
                if ($file) {
                    $nama_foto = $token . '.' . $file->getClientOriginalExtension();

                    // Temukan atribut produk terkait
                    $atributProduk = AtributProduk::where('produks_id', $id)
                        ->orderBy('id_atribut_produk')
                        ->skip($index)
                        ->first();

                    if ($atributProduk) {
                        // Update kolom foto_produk
                        $atributProduk->update(['foto_produk' => $nama_foto]);

                        // Pindahkan file ke folder
                        $file->move(public_path('foto-varian'), $nama_foto);
                    }
                }
            }
        }

        return redirect(auth()->user()->role . '-produk');
    }


    public function destroy($id)
    {
        return redirect();
    }
}
