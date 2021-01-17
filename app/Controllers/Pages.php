<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Beranda | TK Permata Bunda Bengkulu'
        ];
        return view('pages/beranda', $data);
    }
    public function profil()
    {
        $data = [
            'title' => 'Profil | TK Permata Bunda Bengkulu'
        ];
        return view('pages/profil', $data);
    }
    public function pendidikan()
    {
        $data = [
            'title' => 'Pendidikan | TK Permata Bunda Bengkulu'
        ];
        return view('pages/pendidikan', $data);
    }
    public function galeri()
    {
        $data = [
            'title' => 'Galeri | TK Permata Bunda Bengkulu'
        ];
        return view('pages/galeri', $data);
    }
    public function berita()
    {
        $data = [
            'title' => 'Berita | TK Permata Bunda Bengkulu'
        ];
        return view('pages/berita', $data);
    }
    public function hubungi()
    {
        $data = [
            'title' => 'Hubungi | TK Permata Bunda Bengkulu'
        ];
        return view('pages/hubungi', $data);
    }
}
