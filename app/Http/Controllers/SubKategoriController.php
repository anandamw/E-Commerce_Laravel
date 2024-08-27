<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Pivot_Produk_Kategori;
use App\Models\Produk;
use App\Models\SubKategori;
use Illuminate\Http\Request;

class SubKategoriController extends Controller
{
    public function index($id)
    {
        $kategori = Kategori::where('id_kategoris', $id)->first();
        $semua_sub = SubKategori::where('kategori_id', $id)->get();

        return view('admin.kategori.subs.subs_kategori', compact('semua_sub', 'kategori'));
    }

    public function store(Request $request, $id)
    {
        $request->validate([
            'nama_kategori' => 'required|unique:sub_kategoris,nama_sub_kategori'
        ]);

        SubKategori::create([
            'kategori_id' => $id,
            'nama_sub_kategori' => $request->nama_kategori,
        ]);

        return redirect('/kategori/' . $id . '/subs')->with(['success' => 'Berhasil Hore']);
    }

    public function update(Request $request, $id, $sub_id)
    {
        $request->validate([
            'nama_kategori' => 'required|unique:sub_kategoris,nama_sub_kategori'
        ]);

        SubKategori::where('id_sub_kategori', $sub_id)
            ->update([
                'kategori_id' => $id,
                'nama_sub_kategori' => $request->nama_kategori,
            ]);
        return redirect('/kategori/' . $id . '/subs')->with(['success' => 'Berhasil Hore']);
    }

    public function destroy($sub_id)
    {
        $cek_sub = Produk::where('sub_kategori_id', $sub_id)->first();
        if (isset($cek_sub)) {
            return redirect('/kategori/' . $cek_sub->kategori_id . '/subs')
                ->with(['success' => 'Sub Kategori ini masih digunakan di produk']);
        }

        $id = SubKategori::where('id_sub_kategori', $sub_id)->first();

        SubKategori::where('id_sub_kategori', $sub_id)->delete();
        return redirect('/kategori/' . $id->kategori_id . '/subs')
            ->with(['success' => 'Berhasil menghapus data']);
    }
}
