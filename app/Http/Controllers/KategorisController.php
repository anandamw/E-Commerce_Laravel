<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Pivot_Produk_Kategori;
use App\Models\SubKategori;
use Illuminate\Http\Request;

class KategorisController extends Controller
{
    public function index()
    {
        $kategori = Kategori::get();
        return view('admin.kategori.kategori', compact('kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required|unique:kategoris'
        ], [
            'nama_kategori' => 'nama_kategori sudah ada'
        ]);

        Kategori::create(['nama_kategori' => $request->nama_kategori]);
        toast('Berhasil Menambahkan Data ', 'success');

        return redirect()->route('kategori.index');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kategori' => 'required|unique:kategoris'
        ], [
            'nama_kategori' => 'nama_kategori sudah ada'
        ]);

        Kategori::where('id_kategoris', $id)->update(['nama_kategori' => $request->nama_kategori]);
        toast('Berhasil Mengubah Data ', 'success');

        return redirect()->route('kategori.index');
    }

    public function destroy($id)
    {
        $data_produk = SubKategori::where('kategori_id', $id)->first();
        if (isset($data_produk)) {
            return redirect('/kategori')->with(['success' => 'ada produk yang masih menggunakan kategori ini']);
        }

        Kategori::where('id_kategoris', $id)->delete();
        toast('Berhasil Menghapus Data ', 'success');

        return redirect('/kategori')->with(['success' => 'Berhasil Menghapus Data']);
    }
}
