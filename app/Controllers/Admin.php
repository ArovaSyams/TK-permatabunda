<?php

namespace App\Controllers;

use App\Models\LayoutModel;
use App\Models\BeritaModel;

class Admin extends BaseController
{
    protected $layoutModel;
    protected $beritaModel;
    public function __construct()
    {
        $this->layoutModel = new LayoutModel();
        $this->beritaModel = new BeritaModel();
    }

    public function index()
    {
        if (!session()->has('admin')) {
            return redirect()->to('/');
        }

        $data = [
            'title' => 'Administrator | TK Permata Bunda Bengkulu'
        ];
        return view('admin/index', $data);
    }
    public function galeri()
    {
        if (!session()->has('admin')) {
            return redirect()->to('/');
        }
        $urutan = $this->layoutModel->orderBy('id', 'DESC');
        $data = [
            'title' => 'Galeri | TK Permata Bunda Bengkulu',
            'layout' => $urutan->paginate(8, 'galeri'),
            'pager' => $this->layoutModel->pager
        ];
        return view('admin/galeri', $data);
    }
    public function berita()
    {
        if (!session()->has('admin')) {
            return redirect()->to('/');
        }
        $urutan = $this->beritaModel->orderBy('id', 'DESC');
        $data = [
            'title' => 'Berita | TK Permata Bunda Bengkulu',
            'berita' => $urutan->paginate(8, 'berita'),
            'pager' => $this->beritaModel->pager
        ];
        return view('/admin/berita', $data);
    }
}
