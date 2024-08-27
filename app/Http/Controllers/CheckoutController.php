<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Midtrans\Snap;
use App\Models\Transaksi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Midtrans\Transaction;

class CheckoutController extends Controller
{
    public function index()
    {
        $produk = session()->get('checkout_produk');
        return view('pages.checkout', compact('produk'));
    }

    public function Checkout(Request $request)
    {
        // Validasi input untuk memastikan semua data yang diperlukan ada
        $validated = $request->validate([
            'harga' => 'required|numeric|min:0', // Validasi harga sebagai angka
            'produks_id' => 'required|exists:produks,id_produks', // Validasi bahwa produk ada di tabel produks
        ]);

        // Membuat transaksi baru
        $transaksi = Transaksi::create([
            'harga' => $validated['harga'],
            'token_transaksi' => Str::random(10),
            'users_id' => auth()->user()->id, // Ambil ID pengguna yang sedang login
            'produks_id' => $validated['produks_id'], // Gunakan ID produk yang divalidasi dari input
        ]);

        // Konfigurasi Midtrans
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        \Midtrans\Config::$isProduction = false; // Ubah ke true untuk produksi
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        // Parameter untuk Midtrans
        $params = [
            'transaction_details' => [
                'order_id' => 'order-' . $transaksi->id_transaksis, // Gunakan ID transaksi
                'gross_amount' => $validated['harga'],
            ],
            'customer_details' => [
                'name' => Auth::user()->name,
                'email' => Auth::user()->email,
            ],
        ];

        // Mendapatkan Snap Token dari Midtrans
        $snapToken = \Midtrans\Snap::getSnapToken($params);

        // Menyimpan snap token ke dalam transaksi
        $transaksi->snap_token = $snapToken;
        $transaksi->save(); // Jangan lupa menambahkan tanda kurung di metode save()

        // Redirect ke halaman checkout dengan pesan sukses
        return redirect('/transaksi/' . $transaksi->id_transaksis);
    }


    public function transaksi(Transaksi $transaksi)
    {

        $produks = config('produks');  // Mengambil data produk dari konfigurasi
        $produk = collect($produks)->firstWhere('produks_id', $transaksi->produks_id);  // Mencari produk berdasarkan ID produk dari transaksi

        return view('pages.transaksi', compact('transaksi', 'produk'));  // Mengirimkan data transaksi dan produk ke view
    }


    public function processCheckout(Transaksi $transaksi)
    {
        $produks = config('produks');  // Mengambil data produk dari konfigurasi
        $produk = collect($produks)->firstWhere('produks_id', $transaksi->produks_id);  // Mencari produk berdasarkan ID produk dari transaksi

        return view('transksi_send', compact('transaksi', 'produk'));  // Mengirimkan data transaksi dan produk ke view
    }
}
