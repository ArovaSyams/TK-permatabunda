<?php

namespace App\Controllers;

use App\Models\LayoutModel;

class AdminGaleri extends BaseController
{
    protected $layoutModel;
    protected $beritaModel;
    public function __construct()
    {
        $this->layoutModel = new LayoutModel();
    }
    public function addGaleri()
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
                'rules' => 'required|is_unique[galeri.nama_foto]',
                'errors' => [
                    'required' => 'Nama foto harus diisi',
                    'is_unique' => 'Nama foto sudah dipakai'
                ]
            ],
            'keterangan' => [
                'rules' => 'max_length[16777215]',
                'errors' => [
                    'max_length' => 'keterangan harus kurang dari 16.777.215 karakter'
                ]
            ],
            'foto' => [
                'rules' => 'uploaded[foto]|max_size[foto,4086]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Harus ada foto yg di upload',
                    'max_size' => 'Ukuran gambar harus kurang dari 4Mb',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ],
        ])) {
            return redirect()->to('addGaleri')->withInput();
        }

        $fotoGaleri = $this->request->getFile('foto');

        $namaFoto = $fotoGaleri->getRandomName();
        $fotoGaleri->move('img/galeri', $namaFoto);

        $this->layoutModel->save([
            'nama_foto' => $this->request->getVar('nama-foto'),
            'keterangan' => $this->request->getVar('keterangan'),
            'foto' => $namaFoto
        ]);
        session()->setFlashdata('pesan', '<div class="alert alert-success" role="alert">Foto berhasil diupload</div>');
        return redirect()->to('galeri');
    }
    public function editGaleri($id)
    {
        if (!session()->has('admin')) {
            return redirect()->to('/');
        }

        $data = [
            'title' => 'Edit Gambar | TK Permata Bunda Bengkulu',
            'layout' => $this->layoutModel->where('id', $id)->first(),
            'validation' => \Config\Services::validation()
        ];
        return view('admin/editgaleri', $data);
    }
    public function updateGaleri($id)
    {
        if (!session()->has('admin')) {
            return redirect()->to('/');
        }

        if (!$this->validate([
            'nama-foto' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama foto harus diisi',
                    'is_unique' => 'Nama foto sudah dipakai'
                ]
            ],
            'keterangan' => [
                'rules' => 'max_length[16777215]',
                'errors' => [
                    'max_length' => 'keterangan harus kurang dari 16.777.215 karakter'
                ]
            ],
            'foto' => [
                'rules' => 'max_size[foto,4086]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar harus kurang dari 4Mb',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ],
        ])) {
            return redirect()->to('/admin/galeri/' . $this->request->getVar('id'))->withInput();
        }
        $fotoGaleri = $this->request->getFile('foto');

        if ($fotoGaleri->getError() == 4) {
            $namaFoto = $this->request->getVar('foto-lama');
        } else {
            $namaFoto = $fotoGaleri->getRandomName();
            $fotoGaleri->move('img/galeri', $namaFoto);
            unlink('img/galeri/' . $this->request->getVar('foto-lama'));
        }

        $this->layoutModel->save([
            'id' => $id,
            'nama_foto' => $this->request->getVar('nama-foto'),
            'keterangan' => $this->request->getVar('keterangan'),
            'foto' => $namaFoto
        ]);
        session()->setFlashdata('pesan', '<div class="alert alert-success" role="alert">Foto berhasil diedit</div>');
        return redirect()->to('/admin/galeri');
    }
    public function deleteGaleri($id)
    {
        $galeri = $this->layoutModel->find($id);
        unlink('img/galeri/' . $galeri['foto']);
        // hapus data
        $this->layoutModel->delete($id);
        session()->setFlashdata('pesan', '<div class="alert alert-success" role="alert">Foto berhasil dihapus</div>');
        return redirect()->to('/admin/galeri');
    }
}
