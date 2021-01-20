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
        $la = $this->authModel->findAll();
        d($la);
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
        if($admin) {

            if(password_verify($password, $admin['password'])) {

                session()->set('admin', $admin['username']);

                return redirect()->to('/pages')->withInput();

            }else {
                session()->setFlashdata('pesan', '<div class="alert alert-danger" role="alert">Username tidak terdaftar</div>');
                return redirect()->to('index')->withInput();
            }
        } else {
            session()->setFlashdata('pesan', '<div class="alert alert-danger" role="alert">Username tidak terdaftar</div>');
            return redirect()->to('index')->withInput();
        }
        
    }
}
