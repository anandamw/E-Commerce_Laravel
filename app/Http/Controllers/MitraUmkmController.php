<?php

namespace App\Http\Controllers;

use App\Models\Mitra_Umkm;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

class MitraUmkmController extends Controller
{
    public function umkm()
    {
        $dataUmkm = [
            "getdata" => Mitra_Umkm::JoinUMKMToUser__()->get(),
        ];

        return view('admin.umkm.umkm_view', $dataUmkm);
    }

    public function daftar()
    {
        $dataUmkm = [
            "getdata" => Mitra_Umkm::all()
        ];


        return view('admin.umkm.daftar_umkm', $dataUmkm);
    }

    public function daftar_action(Request $request)
    {
        $request->validate([
            'nama_umkm' => 'required|string|max:255',
            'alamat_umkm' => 'required|string|max:255',
            'foto_ktp' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            // 'file_facecame' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'logo_umkm' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $TOKEN = Str::random(90);

        $foto_ktp = $request->file('foto_ktp');
        $logo_umkm = $request->file('logo_umkm');

        $FOTO_KTP_NAME = $TOKEN . '_KTP.' .  $foto_ktp->getClientOriginalExtension();
        $LOGO_UMKM_NAME = $TOKEN . '_LOGO.' . $logo_umkm->getClientOriginalExtension();

        $foto_ktp->move(public_path('foto_ktp'), $FOTO_KTP_NAME);
        $logo_umkm->move(public_path('logo_umkm'), $LOGO_UMKM_NAME);

        $datauser = [
            'users_id' => auth()->user()->id,
            'nama_umkm' => $request->nama_umkm,
            'alamat_umkm' => $request->alamat_umkm,
            'foto_ktp' => $FOTO_KTP_NAME,
            'file_facecame' => 'none',
            'logo_umkm' => $LOGO_UMKM_NAME,
            'token_umkm' => $TOKEN,
            'status' => 'register'
        ];

        // Perbarui data user

        // Simpan UMKM dan ambil ID-nya
        $umkmId = Mitra_Umkm::insertGetId($datauser);

        $umkmToken = Mitra_Umkm::where('id_mitra_umkms', $umkmId)->select('token_umkm')->first();

        // Redirect ke halaman dengan ID UMKM
        return redirect('/selfie' . "?token=" . $umkmToken->token_umkm);
    }

    // public function show($id)
    // {
    //     $umkm = Mitra_Umkm::findOrFail($id);
    //     return view('admin.umkm.selfie', compact('umkm'));
    // }


    public function selfie()
    {
        $get = $_GET['token'];
        $detail = Mitra_Umkm::where('token_umkm', $get)->first();

        return view('admin.umkm.selfie', compact('detail'));
    }
    public function update_action(Request $request, $token)
    {
        // Validasi input
        $request->validate([
            'file_facecame' => 'required|string', // Pastikan input adalah string
        ]);

        // Ambil data UMKM berdasarkan token_umkm
        $umkm = Mitra_Umkm::where('token_umkm', $token)->select(['id_mitra_umkms', 'token_umkm', 'file_facecame'])->first();

        if ($umkm) {
            // Mendapatkan data base64
            $file_facecame = $request->input('file_facecame');

            // Mengecek jika data base64 tidak kosong
            if (!empty($file_facecame)) {
                // Menghapus prefix data base64
                $file_facecame = str_replace('data:image/jpeg;base64,', '', $file_facecame);
                $file_facecame = str_replace(' ', '+', $file_facecame);

                // Dekode base64 menjadi binary
                $file_facecame = base64_decode($file_facecame);

                // Menyimpan file
                $FILE_FACECAME_NAME = $umkm->token_umkm . '_FACECAME.jpeg';
                $file_path = public_path('file_facecame/' . $FILE_FACECAME_NAME);

                // Cek apakah direktori ada, jika tidak buat
                if (!file_exists(public_path('file_facecame'))) {
                    mkdir(public_path('file_facecame'), 0755, true);
                }

                // Menyimpan file ke server
                file_put_contents($file_path, $file_facecame);

                // Update kolom file_facecame dengan nama file baru
                $umkm->file_facecame = $FILE_FACECAME_NAME;
                $umkm->save(); // Simpan perubahan ke database


                $data = [
                    "status" => "pending"
                ];


                Mitra_Umkm::where('token_umkm', $token)->update($data);


                return redirect('/page');
            } else {
                return redirect()->back()->with('error', 'Gambar tidak ditemukan.');
            }
        } else {
            return redirect()->back()->with('error', 'Data UMKM tidak ditemukan.');
        }
    }



    public function delete($id)
    {
        return redirect();
    }
}
