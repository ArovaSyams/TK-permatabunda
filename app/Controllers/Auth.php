<?php

namespace App\Controllers;

use App\Models\AuthModel;

class Auth extends BaseController
{
    protected $authModel;
    public function __construct()
    {
        $this->authModel = new AuthModel();
    }

    public function index()
    {

        if (session()->has('admin')) {
            return redirect()->to('/pages');
        }
        $data = [
            'title' => 'TK Permata Bunda | Login',
            'validation' => \Config\Services::validation()
        ];
        return view('auth/login', $data);
    }
    public function login()
    {
        if (!$this->validate([
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ]
        ])) {
            return redirect()->to('/auth/index')->withInput();
        }
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $admin = $this->authModel->where(['username' => $username])->first();

        // cek username
        if ($admin) {

            if (password_verify($password, $admin['password'])) {

                session()->set('admin', $admin['username']);

                if (session()->has('admin')) {
                    session()->setFlashdata('pesan', 'Selamat Datang');
                    return redirect()->to('/admin');
                }
            } else {
                session()->setFlashdata('pesan', '<div class="alert alert-danger" role="alert">Password anda salah</div>');
                return redirect()->to('/login')->withInput();
            }
        } else {
            session()->setFlashdata('pesan', '<div class="alert alert-danger" role="alert">Username anda salah</div>');
            return redirect()->to('/login')->withInput();
        }
    }

    public function logout()
    {
        session()->remove('admin');
        session()->setFlashdata('pesan', '<div class="alert alert-success" role="alert">Anda telah keluar</div>');
        return redirect()->to('/');
    }
    public function logoutSetting()
    {
        session()->remove('confirm');
        session()->setFlashdata('pesan', '<div class="alert alert-success" role="alert">Ubah data dibatalkan</div>');
        return redirect()->to('/admin/setting');
    }
    public function confirm()
    {
        if (!$this->validate([
            'confirm-password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Konfirmasi password harus diisi'
                ]
            ]
        ])) {
            return redirect()->to('/admin/setting')->withInput();
        }
        $password = $this->request->getVar('confirm-password');
        $admin = $this->authModel->findAll();
        foreach ($admin as $a) {
            $pass = $a['password'];
            $user = $a['username'];
            if (password_verify($password, $pass)) {

                session()->set('confirm', $user);
                session()->setFlashdata('pesan', '<div class="alert alert-success" role="alert">Silahka Ubah Password Anda</div>');
                return redirect()->to('/admin/setting');
            }
        }
        session()->setFlashdata('pesan', '<div class="alert alert-danger" role="alert">Password anda salah</div>');
        return redirect()->to('/admin/setting');
    }
    public function editAkun($id)
    {
        if (!$this->validate([
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password harus diisi'
                ]
            ]
        ])) {
            return redirect()->to('/admin/setting')->withInput();
        }
        $password = $this->request->getVar('password');
        $password2 = $this->request->getVar('password2');
        if ($password == $password2) {
            $this->authModel->save([
                'id' => $id,
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ]);
            session()->remove('confirm');
            session()->remove('admin');
            session()->setFlashdata('pesan', '<div class="alert alert-success" role="alert">Password berhasil diubah, Silahkan Login</div>');
            return redirect()->to('/auth/login');
        } else {
            session()->setFlashdata('pesan', '<div class="alert alert-danger" role="alert">Konfirmasi password anda salah</div>');
            return redirect()->to('/admin/setting');
        }
    }
    public function tambahAkun()
    {
        if (!$this->validate([
            'username-baru' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Username harus diisi'
                ]
            ],
            'password-baru' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password harus diisi'
                ]
            ]
        ])) {
            return redirect()->to('/admin/setting')->withInput();
        }
        $password = $this->request->getVar('password-baru');
        $password2 = $this->request->getVar('password-baru2');
        if ($password == $password2) {
            $this->authModel->save([
                'username' => $this->request->getVar('username-baru'),
                'password' => password_hash($this->request->getVar('password-baru'), PASSWORD_DEFAULT)
            ]);
            session()->remove('admin');
            session()->setFlashdata('pesan', '<div class="alert alert-success" role="alert">Akun Telah ditambahkan silahkan login</div>');
            return redirect()->to('/auth/login')->withInput();
        } else {
            session()->setFlashdata('pesan', '<div class="alert alert-danger" role="alert">Konfirmasi akun salah</div>');
            return redirect()->to('/admin/setting')->withInput();
        }
    }
    public function deleteakun($id)
    {
        session()->remove('admin');
        $this->authModel->delete($id);
        session()->setFlashdata('pesan', '<div class="alert alert-success" role="alert">Akun berhasil dihapus</div>');
        return redirect()->to('/auth/login');
    }
}
