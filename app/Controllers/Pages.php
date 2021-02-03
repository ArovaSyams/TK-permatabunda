<?php

namespace App\Controllers;

use App\Models\LayoutModel;
use App\Models\BeritaModel;
use App\Models\ContactModel;

class Pages extends BaseController
{
    protected $layoutModel;
    protected $beritaModel;
    protected $contactModel;
    public function __construct()
    {
        $this->layoutModel = new LayoutModel();
        $this->beritaModel = new BeritaModel();
        $this->contactModel = new ContactModel();
    }

    public function index()
    {
        $urutan = $this->beritaModel->orderBy('id', 'DESC');
        $data = [
            'title' => 'TK Permata Bunda Bengkulu | Beranda',
            'berita' => $urutan->findAll(),
            'validation' => \Config\Services::validation()
        ];
        return view('pages/beranda', $data);
    }
    public function savecontact()
    {
        if (!$this->validate([
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama foto harus diisi',
                ]
            ],
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Email / No. Handphone harus diisi'
                ]
            ],
            'role' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Peran harus diisi'
                ]
            ],
            'pesan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pesan harus diisi'
                ]
            ]
        ])) {
            return redirect()->to('index')->withInput();
        }
        $this->contactModel->save([
            'nama' => $this->request->getVar('name'),
            'email-hp' => $this->request->getVar('email'),
            'role' => $this->request->getVar('role'),
            'pesan' => $this->request->getVar('pesan')
        ]);
        session()->setFlashdata('pesan', '<div class="alert alert-success" role="alert">Pesan berhasil dikirim</div>');
        return redirect()->to('index');
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
        $urutan = $this->layoutModel->orderBy('id', 'DESC');
        $data = [
            'title' => 'TK Permata Bunda Bengkulu | Galeri',
            'layout' => $urutan->paginate(12, 'galeri'),
            'pager' => $this->layoutModel->pager
        ];
        return view('pages/galeri', $data);
    }
    public function berita()
    {
        $urutan = $this->beritaModel->orderBy('id', 'DESC');
        $data = [
            'title' => 'TK Permata Bunda Bengkulu | Berita',
            'berita' => $urutan->paginate(10, 'berita'),
            'pager' => $this->beritaModel->pager
        ];
        return view('pages/berita', $data);
    }
    public function detailBerita($id)
    {
        $urutan = $this->beritaModel->orderBy('id', 'DESC');
        $data = [
            'title' => 'TK Permata Bunda Bengkulu | Berita',
            'berita' => $this->beritaModel->where('id', $id)->first(),
            'beritaLain' => $urutan->paginate(8)
        ];
        return view('pages/detailberita', $data);
    }
    public function hubungi()
    {
        $data = [
            'title' => 'TK Permata Bunda Bengkulu | Hubungi',
            'validation' => \Config\Services::validation()
        ];
        return view('pages/hubungi', $data);
    }
    public function panduan()
    {
        if (!session()->has('admin')) {
            return redirect()->to('/');
        }

        $data = [
            'title' => 'TK Permata Bunda Bengkulu | Panduan'
        ];
        return view('pages/panduan', $data);
    }
}
