<?php

namespace App\Controllers;

use App\Models\LayoutModel;

class Admin extends BaseController
{
    protected $galeriModel;
    public function __construct()
    {
        $this->galeriModel = new LayoutModel();
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

        $data = [
            'title' => 'Galeri | TK Permata Bunda Bengkulu'
        ];
        return view('admin/galeri', $data);
    }
    public function addgaleri()
    {
        if (!session()->has('admin')) {
            return redirect()->to('/');
        }

        $data = [
            'title' => 'Tambah Gambar | TK Permata Bunda Bengkulu',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/addgaleri', $data);
    }
    public function savegaleri()
    {
        if (!session()->has('admin')) {
            return redirect()->to('/');
        }

        if (!$this->validate([
            'nama-foto' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama foto harus diisi'
                ]
            ],
            'keterangan' => [
                'rules' => 'max_length[250]',
                'errors' => [
                    'max_length' => 'keterangan harus kurang dari 250 karakter'
                ]
            ],
            'foto' => [
                'rules' => 'uploaded[foto]|max_size[foto,3062]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Harus ada foto yg di upload',
                    'max_size' => 'Ukuran gambar harus kurang dari 3Mb',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ],
        ])) {
            return redirect()->to('addgaleri')->withInput();
        }

        $fotoGaleri = $this->request->getFile('foto');

        $namaFoto = $fotoGaleri->getRandomName();
        $fotoGaleri->move('img', $namaFoto);

        $this->layoutModel->save([
            'nama_foto' => $this->request->getVar('nama-foto'),
            'keterangan' => $this->request->getVar('keterangan'),
            'foto' => $namaFoto
        ]);
        session()->setFlashdata('pesan', '<div class="alert alert-danger" role="alert">Foto berhasil diupload</div>');
        return redirect()->to('galeri');
    }
}
