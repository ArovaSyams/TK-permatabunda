<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Beranda | TK Permata Bunda Bengkulu'
        ];
        return view('pages/beranda', $data);
    }
}
