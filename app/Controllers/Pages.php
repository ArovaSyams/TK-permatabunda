<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'TK Permata Bunda Bengkulu | Beranda'
        ];
        return view('pages/beranda', $data);
    }
    public function profil()
    {
        $data = [
            'title' => 'TK Permata Bunda Bengkulu | Profil'
        ];
        return view('pages/profil', $data);
    }
    public function pendidikan()
    {
        $data = [
            'title' => 'TK Permata Bunda Bengkulu | Pendidikan'
        ];
        return view('pages/pendidikan', $data);
    }
    public function galeri()
    {
        $data = [
            'title' => 'TK Permata Bunda Bengkulu | Galeri'
        ];
        return view('pages/galeri', $data);
    }
    public function berita()
    {
        $data = [
            'title' => 'TK Permata Bunda Bengkulu | Berita'
        ];
        return view('pages/berita', $data);
    }
    public function hubungi()
    {
        $data = [
            'title' => 'TK Permata Bunda Bengkulu | Hubungi'
        ];
        return view('pages/hubungi', $data);
    }
}
