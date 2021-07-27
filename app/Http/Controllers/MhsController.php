<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MhsController extends Controller
{
    public function index($nama = 'didin')
    {
        $pelajaran = ['basis data', 'bahasa c', 'sistem digital', 'algoritma dan pemrograman'];
        return view('datamhs',['nama' => $nama, 'matkul' => $pelajaran]);
    }

    public function formulir()
    {
        return view('formulirmhs');
    }

    public function proses(Request $request)
    {
        $nama = $request->input('nama');
        $nim = $request->input('nim');
        return "nama : ". $nama . " nim : ". $nim;
    }

}
