<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Mitra_Umkm;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HakAksesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $dataHakAkses = [
            "RoleAdmin" => User::where('role', 'admin')->get(),
            "RoleCustomer" => User::where('role', 'customer')->get(),
            "RoleMitra" => User::where('role', 'mitra')->get(),
            "getPendaftarUMKM" => Mitra_Umkm::GETjoinPendingUMKM()
        ];

        return view('admin.hak_akses.index', $dataHakAkses);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.hak_akses.hakases_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // ddd($request->all());

        // $request->validate([
        //     'username' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users,email',
        //     'no_telepon' => 'nullable|string|max:255',
        //     'password' => 'required|string|min:8',
        // ]);

        $token_file = uniqid(13);
        $file = $request->file('foto_profile');
        if (isset($file)) {
            $file_name = $token_file . '.' . $file->getClientOriginalExtension();
        } else {
            $file_name = 'default.png';
        }

        User::create([
            "username" => $request->username,
            "email" => $request->email,
            "password" => bcrypt($request->password),
            "no_telepon" => $request->no_telepon,
            "token_users" => Str::random(100),
            "role" => $request->role,
            "name" => $request->name,
            "deskripsi" => $request->deskripsi,
            "alamat_users" => $request->alamat_users,
            "foto_profile" => $file_name,
        ]);



        $file->move('foto_profile', $file_name);




        return redirect()->route('hak-akses.index');
    }

    /**
     * Display the specified resource.
     */
    public function details(string $token)
    {
        // Data sudah diambil dari fungsi TokenMitraUsers
        $data = Mitra_Umkm::TokenMitraUsers($token);
        // dd($data);
        // Menampilkan halaman dengan data yang diambil
        return view('admin.hak_akses.hakases_detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // User::,
        $data = [
            'getsdata' =>  User::where('id', $id)->first(),
            'getsdataall' =>  User::all()
        ];

        return view('admin.hak_akses.hakases_update', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi input
        $validated = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'nullable|min:8', // Password opsional
            'no_telepon' => 'nullable|string|max:15',
            'role' => 'nullable|string',
            'name' => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
            'alamat_users' => 'nullable|string',
            'foto_profile' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
        ]);

        // Ambil pengguna yang akan diperbarui
        $user = User::findOrFail($id);

        // Token file untuk foto profil
        $file_name = $user->foto_profile; // Set default value

        // Periksa jika ada file foto profil yang diunggah
        if ($request->hasFile('foto_profile')) {
            $file = $request->file('foto_profile');
            $token_file = uniqid(13);
            $file_name = $token_file . '.' . $file->getClientOriginalExtension();
            $file->move('foto_profile', $file_name);
        }

        // Update data pengguna
        $user->update([
            "username" => $request->username,
            "email" => $request->email,
            "password" => $request->filled('password') ? bcrypt($request->password) : $user->password, // Update password jika diisi
            "no_telepon" => $request->no_telepon,
            "token_users" => Str::random(100),
            "role" => $request->role ?? $user->role,
            "name" => $request->name,
            "deskripsi" => $request->deskripsi,
            "alamat_users" => $request->alamat_users,
            "foto_profile" => $file_name,
        ]);

        toast('Berhasil Memperbarui Data ', 'success');


        // Redirect ke route yang diinginkan
        return redirect()->route('hak-akses.index')->with('success', 'User updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Temukan pengguna berdasarkan ID
        $user = User::findOrFail($id);

        // Hapus file foto profil jika ada
        if ($user->foto_profile && file_exists(public_path('foto_profile/' . $user->foto_profile))) {
            unlink(public_path('foto_profile/' . $user->foto_profile));
        }

        // Hapus data pengguna
        $user->delete();
        toast('Berhasil Hapus Data ', 'success');

        // Redirect ke route yang diinginkan dengan pesan sukses
        return redirect()->route('hak-akses.index')->with('success', 'User deleted successfully');
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
