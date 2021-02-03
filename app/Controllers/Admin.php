<?php

namespace App\Controllers;

use App\Models\LayoutModel;
use App\Models\BeritaModel;
use App\Models\ContactModel;

class Admin extends BaseController
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
    public function contactUs()
    {
        if (!session()->has('admin')) {
            return redirect()->to('/');
        }

        $emailHp = $this->request->getVar('email-hp');
        $role = $this->request->getVar('role');
        $contact = $this->contactModel;
        if ($emailHp || $role) {
            if ($emailHp) {
                $contact = $this->contactModel->searchE($emailHp);
            }
            if ($role) {
                $contact = $this->contactModel->searchRole($role);
            }
            if ($emailHp && $role) {
                $contact = $this->contactModel->searchDouble($emailHp, $role);
            } else {
                $contact = $this->contactModel;
            }
        }
        $urutan = $contact->orderBy('id', 'DESC');
        $data = [
            'title' => 'Contact Us | TK Permata Bunda Bengkulu',
            'contact' => $urutan->paginate(8, 'contact-us'),
            'pager' => $this->contactModel->pager
        ];
        return view('/admin/contactus', $data);
    }
    public function deleteContactUs($id)
    {
        $this->contactModel->delete($id);
        session()->setFlashdata('pesan', '<div class="alert alert-success" role="alert">Contact berhasil dihapus</div>');
        return redirect()->to('/admin/contactus');
    }
    public function PPDB()
    {
        if (!session()->has('admin')) {
            return redirect()->to('/');
        }
        // $urutan = $this->beritaModel->orderBy('id', 'DESC');
        $data = [
            'title' => 'PPDB | TK Permata Bunda Bengkulu',
            // 'berita' => $urutan->paginate(8, 'berita'),
            // 'pager' => $this->beritaModel->pager
        ];
        return view('/admin/ppdb', $data);
    }
    public function PPDBdetail()
    {
        if (!session()->has('admin')) {
            return redirect()->to('/');
        }
        // $urutan = $this->beritaModel->orderBy('id', 'DESC');
        $data = [
            'title' => 'Detail Foto PPDB | TK Permata Bunda Bengkulu',
            // 'berita' => $urutan->paginate(8, 'berita'),
            // 'pager' => $this->beritaModel->pager
        ];
        return view('/admin/ppdbdetail', $data);
    }
}
