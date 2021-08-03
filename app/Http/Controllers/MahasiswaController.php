<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MahasiswaController extends Controller
{
    public function daftarMahasiswa(Request $request)
    {
        if(Auth::check())
        {
            echo "Selamat datang, ".$request->user()->name;
        }
        else{
            echo "Silakan login terlebih dahulu";
        }
    }

    public function tabelMahasiswa()
    {
        return view('halaman',['judul' => 'Tabel Mahasiswa']);
    }

    public function blogMahasiswa()
    {
        return view('halaman',['judul' => 'Blog Mahasiswa']);
    }
}
