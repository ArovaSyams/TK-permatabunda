<?php

namespace App\Controllers;

use App\Models\BeritaModel;

class AdminBerita extends BaseController
{
    protected $beritaModel;
    public function __construct()
    {
        $this->beritaModel = new BeritaModel();
    }
    public function addBerita()
    {
        if (!session()->has('admin')) {
            return redirect()->to('/');
        }
        $data = [
            'title' => 'Tambah Berita | TK Permata Bunda Bengkulu',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/addberita', $data);
    }
    public function saveberita()
    {
        if (!session()->has('admin')) {
            return redirect()->to('/');
        }
        if (!$this->validate([
            'judul-berita' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul berita harus diisi'
                ]
            ],
            'highlight' => [
                'rules' => 'required|max_length[250]',
                'errors' => [
                    'required' => 'Highlight harus diisi',
                    'max_length' => 'Highlight harus kurang dari 250 karakter'
                ]
            ],
            'paragraf1' => [
                'rules' => 'required|max_length[4294967295]',
                'errors' => [
                    'required' => 'Paragraf 1 wajib diisi',
                    'max_length' => 'Paragraf tidak boleh lebih dari 4.294.967.295 karakter'
                ]
            ],
            'paragraf' => [
                'rules' => 'max_length[4294967295]',
                'errors' => [
                    'max_length' => 'Paragaf tidak boleh lebih dari 4.294.967.295 karakter'
                ]
            ],
            'foto' => [
                'rules' => 'uploaded[foto]|max_size[foto,4086]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Gambar harus diisi',
                    'max_size' => 'Ukuran gambar harus kurang dari 4Mb',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            return redirect()->to('/admin/addberita')->withInput();
        }
        $fotoBerita = $this->request->getFile('foto');

        $namaFoto = $fotoBerita->getRandomName();
        $fotoBerita->move('img/berita', $namaFoto);

        $this->beritaModel->save([
            'judul_berita' => $this->request->getVar('judul-berita'),
            'highlight' => $this->request->getVar('highlight'),
            'paragraf_1' => $this->request->getVar('paragraf1'),
            'paragraf_2' => $this->request->getVar('paragraf2'),
            'paragraf_3' => $this->request->getVar('paragraf3'),
            'paragraf_4' => $this->request->getVar('paragraf4'),
            'paragraf_5' => $this->request->getVar('paragraf5'),
            'foto' => $namaFoto
        ]);
        session()->setFlashdata('pesan', '<div class="alert alert-success" role="alert">Berita berhasil diupload</div>');
        return redirect()->to('/admin/berita');
    }
    public function editBerita($id)
    {
        if (!session()->has('admin')) {
            return redirect()->to('/');
        }
        $data = [
            'title' => 'Edit Berita | TK Permata Bunda Bengkulu',
            'berita' => $this->beritaModel->where('id', $id)->first(),
            'validation' => \Config\Services::validation()
        ];
        return view('admin/editberita', $data);
    }
    public function updateBerita($id)
    {
        if (!session()->has('admin')) {
            return redirect()->to('/');
        }

        if (!$this->validate([
            'judul-berita' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul berita harus diisi'
                ]
            ],
            'highlight' => [
                'rules' => 'required|max_length[250]',
                'errors' => [
                    'required' => 'Highlight harus diisi',
                    'max_length' => 'Highlight harus kurang dari 250 karakter'
                ]
            ],
            'paragraf1' => [
                'rules' => 'required|max_length[4294967295]',
                'errors' => [
                    'required' => 'Paragraf 1 wajib diisi',
                    'max_length' => 'Paragraf tidak boleh lebih dari 4.294.967.295 karakter'
                ]
            ],
            'paragraf' => [
                'rules' => 'max_length[4294967295]',
                'errors' => [
                    'max_length' => 'Paragaf tidak boleh lebih dari 4.294.967.295 karakter'
                ]
            ],
            'foto' => [
                'rules' => 'max_size[foto,4086]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar harus kurang dari 4Mb',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            return redirect()->to('/admin/berita/' . $this->request->getVar('id'))->withInput();
        }
        $fotoBerita = $this->request->getFile('foto');

        if ($fotoBerita->getError() == 4) {
            $namaFoto = $this->request->getVar('foto-lama');
        } else {
            $namaFoto = $fotoBerita->getRandomName();
            $fotoBerita->move('img/berita', $namaFoto);
            unlink('img/berita/' . $this->request->getVar('foto-lama'));
        }

        $this->beritaModel->save([
            'id' => $id,
            'judul_berita' => $this->request->getVar('judul-berita'),
            'highlight' => $this->request->getVar('highlight'),
            'paragraf_1' => $this->request->getVar('paragraf1'),
            'paragraf_2' => $this->request->getVar('paragraf2'),
            'paragraf_3' => $this->request->getVar('paragraf3'),
            'paragraf_4' => $this->request->getVar('paragraf4'),
            'paragraf_5' => $this->request->getVar('paragraf5'),
            'foto' => $namaFoto
        ]);
        session()->setFlashdata('pesan', '<div class="alert alert-success" role="alert">Berita berhasil diupdate</div>');
        return redirect()->to('/admin/berita');
    }
    public function deleteBerita($id)
    {
        $berita = $this->beritaModel->find($id);
        unlink('img/berita/' . $berita['foto']);
        // hapus data
        $this->beritaModel->delete($id);
        session()->setFlashdata('pesan', '<div class="alert alert-success" role="alert">Berita berhasil dihapus</div>');
        return redirect()->to('/admin/berita');
    }
}
