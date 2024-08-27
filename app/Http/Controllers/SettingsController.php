<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Settings;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use PHPUnit\Framework\MockObject\ReturnValueNotConfiguredException;

class SettingsController extends Controller
{
    public function index()
    {
        $dataSettings = [
            "getSettings" => User::all(),
        ];

        return view('admin.settings.setting', $dataSettings);
    }

    public function profile($token)
    {

        $detailUser = [
            'Getdata' => Settings::tokenProfile($token)->first()

        ];


        return view('admin.settings.profile', $detailUser);
    }


    public function profile_edit($token)
    {
        $detailUser = [
            'Getdata' => Settings::tokenProfile($token)->first()
        ];

        return view('admin.settings.profile_edit', $detailUser);
    }



    public function profile_edit_action(Request $request, $token)
    {
        // Validasi input
        $request->validate([
            "foto_profile" => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            "username" => 'required|string',
            "name" => 'nullable|string',
            "email" => 'required|email',
            "no_telepon" => 'required|string',
            "alamat_users" => 'nullable|string',
        ]);

        // Temukan pengguna berdasarkan token
        $user = User::where("token_users", $token)->firstOrFail();

        // Siapkan data yang akan diupdate
        $data = [
            "username" => $request->username,
            "name" => $request->name,
            "email" => $request->email,
            "no_telepon" => $request->no_telepon,
            "alamat_users" => $request->alamat_users,
        ];

        // Periksa apakah file foto_profile diupload
        if ($request->hasFile('foto_profile')) {
            $file = $request->file('foto_profile');
            $tokenfILE = Str::random(20);
            $filename = $tokenfILE . '.' . $file->getClientOriginalExtension();

            // Hapus gambar lama jika ada
            if ($user->foto_profile && Storage::exists('public/foto_profile/' . $user->foto_profile)) {
                Storage::delete('public/foto_profile/' . $user->foto_profile);
            }

            // Simpan gambar baru
            $file->move(public_path('foto_profile'), $filename);

            // Tambahkan path gambar ke data yang akan diupdate
            $data['foto_profile'] = $filename;
        }

        // Perbarui data pengguna
        $user->update($data);

        // Berikan pesan sukses
        toast('Berhasil Melakukan Perubahan', 'success');

        // Redirect ke halaman lain
        return redirect('/page');
    }

    public function create()
    {
    }
    public function create_action(Request $request)
    {

        $request->validate([
            'username' => 'required|string|max:255',
            'alamat_users' => 'required|string|max:255',
            'foto_profile' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);


        $token = uniqid();


        $filePath = null;
        if ($request->hasFile('foto_profile')) {
            $foto = $request->file('foto_profile');
            $fileName = $token . '.' . $foto->getClientOriginalExtension();
            $filePath = $foto->storeAs('public/foto_profiles', $fileName);
        }


        $dataSetting = [
            'username' => $request->username,
            'foto_profile' => $filePath ? basename($filePath) : null,
            'alamat_users' => $request->alamat_users
        ];


        Settings::create($dataSetting);


        return redirect('/setting')->with('success', 'Setting berhasil dibuat!');
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
