<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data['title'] = 'Selamat Datang di Aplikasi Eky School';
        return view('layout/dashboard', $data);
    }
}
