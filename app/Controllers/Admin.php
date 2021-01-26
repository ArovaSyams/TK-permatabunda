<?php

namespace App\Controllers;

use App\Models\LayoutModel;

class Admin extends BaseController
{
    protected $layoutModel;
    public function __construct()
    {
        $this->layoutModel = new LayoutModel();
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
                'rules' => 'max_length[250]',
                'errors' => [
                    'max_length' => 'keterangan harus kurang dari 250 karakter'
                ]
            ],
            'foto' => [
                'rules' => 'uploaded[foto]|max_size[foto,4086]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Harus ada foto yg di upload',
                    'max_size' => 'Ukuran gambar harus kurang dari 3Mb',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ],
        ])) {
            return redirect()->to('addGaleri')->withInput();
        }

        $fotoGaleri = $this->request->getFile('foto');

        $namaFoto = $fotoGaleri->getRandomName();
        $fotoGaleri->move('img', $namaFoto);

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

        $galeriLama = $this->layoutModel->where('id', $id)->first();
        // if ($galeriLama['nama_foto'] == $this->request->getVar('nama-foto')) {
        //     $rules = 'required';
        // } else {
        //     $rules = 'required|is_unique[galeri.nama_foto]';
        // }

        if (!$this->validate([
            'nama-foto' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama foto harus diisi',
                    'is_unique' => 'Nama foto sudah dipakai'
                ]
            ],
            'keterangan' => [
                'rules' => 'max_length[250]',
                'errors' => [
                    'max_length' => 'keterangan harus kurang dari 250 karakter'
                ]
            ],
            'foto' => [
                'rules' => 'max_size[foto,4086]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar harus kurang dari 3Mb',
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
            $fotoGaleri->move('img', $namaFoto);
            unlink('img/' . $this->request->getVar('foto-lama'));
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
        unlink('img/' . $galeri['foto']);
        // hapus data
        $this->layoutModel->delete($id);
        session()->setFlashdata('pesan', '<div class="alert alert-success" role="alert">Foto berhasil dihapus</div>');
        return redirect()->to('/admin/galeri');
    }
}
