<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        if(!session()->has('admin')) {
            return redirect()->to('/');
        }

        $data = [
            'title' => 'Administrator | TK Permata Bunda '
        ];
        return view('admin/index', $data);
    }
    public function galeri() 
    {
        if(!session()->has('admin')) {
            return redirect()->to('/');
        }

        $data = [
            'title' => 'Tambah Gambar | TK Permata Bunda '
        ];
        return view('admin/galeri', $data);
    }

}
