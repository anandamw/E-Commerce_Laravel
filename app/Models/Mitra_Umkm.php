<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mitra_Umkm extends Model
{
    use HasFactory;

    protected $table = "mitra_umkms";
    protected $primaryKey = 'id_mitra_umkms';
    protected $guarded = ["id_mitra_umkms", "status"];


    public static function JoinUMKMToUser__()
    {
        $query = DB::table('mitra_umkms')->join('users', 'mitra_umkms.users_id', '=', 'users.id');
        return $query;
    }

    public static function GETjoinPendingUMKM()
    {
        $query = DB::table('mitra_umkms')
            ->join('users', 'mitra_umkms.users_id', '=', 'users.id')
            ->where('mitra_umkms.status', 'pending')
            ->select('mitra_umkms.*', 'users.*') // Sesuaikan kolom yang ingin diambil
            ->get(); // Ambil hasilnya

        return $query;
    }

    public static function TokenMitraUsers($token)
    {
        // Eksekusi query langsung dengan first()
        $query = DB::table('mitra_umkms')
            ->join('users', 'mitra_umkms.users_id', '=', 'users.id')
            ->where('mitra_umkms.token_umkm', $token)
            ->first(); // Eksekusi langsung

        return $query; // Mengembalikan hasil query
    }



    public static function TokenMitra($token)
    {
        return DB::table('mitra_umkms')->where('token_umkm', $token)->get();
    }
}
