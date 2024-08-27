<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{


    public function dashboard()
    {

        $user = auth()->user()->username;

        toast('Selamat Datang ' . $user, 'info');
        return view('admin.dashboard');
    }
}
