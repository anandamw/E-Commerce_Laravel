<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Settings extends Model
{
    use HasFactory;


    protected $table = "settings ";
    protected $guarded = ['id_settings'];


    public static function SettingsJoinUsers()
    {
        return DB::Table("settings")->join('users', 'settings.users_id', '=', 'users.id')->get();
    }

    public static function tokenProfile($token)
    {
        $query = DB::table('users')->where("token_users", $token);
        return $query;
    }

    public function User()
    {
        $this->hasOne(User::class);
    }
}
