<?php

namespace App\Controllers;
use App\Models\LayoutModel;

class Pages extends BaseController
{
    protected $layoutModel;
    public function __construct() {
        $this->layoutModel = new LayoutModel();
    }

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
            'title' => 'TK Permata Bunda Bengkulu | Galeri',
            'layout' => $this->layoutModel->findAll(),
            'layoutSelect' => $this->layoutModel
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
    public function panduan() {
        if (!session()->has('admin')) {
            return redirect()->to('/');
        }

        $data = [
            'title' => 'TK Permata Bunda Bengkulu | Panduan'
        ];
        return view('pages/panduan', $data);
    }
}
