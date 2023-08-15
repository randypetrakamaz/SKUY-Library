<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function profile()
    {
        return view('user.profile');
    }
    public function visimisi()
    {
        return view('user.visimisi');
    }
    public function jamlayanan()
    {
        return view('user.jamlayanan');
    }
    public function fasilitas()
    {
        return view('user.fasilitas');
    }
    public function jeniskoleksi()
    {
        return view('user.jeniskoleksi');
    }
    public function faq()
    {
        return view('user.faq');
    }
}