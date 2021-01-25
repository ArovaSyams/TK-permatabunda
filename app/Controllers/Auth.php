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
                    session()->setFlashdata('pesan', '<div class="alert alert-success" role="alert">Selamat Datang Admin <a href="/panduan">Selengkapnya</a></div>');
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
}
