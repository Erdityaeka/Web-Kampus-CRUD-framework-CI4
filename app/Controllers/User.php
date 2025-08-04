<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class User extends BaseController
{
    protected $user;
    public function __construct()
    {
        $this->user = new UserModel();
    }

    public function index()
    {
        //ambil data user dari model
        $data = [
            'title' => 'Halaman Tampilan user',
            'user' => $this->user->findAll(),
        ];
        //tampilkan data user ke view
        return view('pages/user/tampil_user', $data);
    }
    public function tambahusr()
    {
        //ambil data user dari model
        $data = [
            'title' => 'Halaman Tampilan tambah user',
            'activeuser' => 'active',
        ];
        //tampilkan data user ke view
        return view('pages/user/tambah_user', $data);
    }
    public function createusr()
    {
        $this->user->insert([
            'iduser'   => $this->request->getPost('iduser'),
            'username'  => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'role' => $this->request->getPost('role'),
        ]);
        session()->setFlashdata('success', 'Data berhasil disimpan');
        return redirect()->to('/user');
    }
    public function ubahusr($iduser)
    {
     
        $data = [
            'title' => 'Halaman Tampilan edit user',
            'edituser' => $this->user->find($iduser)
        ];
    
        return view('pages/user/ubah_user', $data);
    }
    public function editusr($iduser)
    {
        $this->user->update($iduser, [
            'iduser' => $this->request->getPost('iduser'),
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'role' => $this->request->getPost('role'),
        ]);
        return redirect()->to('/user')->with('success', 'Data berhasil diubah');
    }
    public function hapussusr($iduser)
    {
        $this->user->delete($iduser);
        return redirect()->to('/user');
    }
}
