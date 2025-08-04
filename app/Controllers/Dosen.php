<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DosenModel;
use CodeIgniter\HTTP\ResponseInterface;

class Dosen extends BaseController
{
    protected $dosen;
    public function __construct()
    {
        $this->dosen = new DosenModel();
    }



    public function index()
    {
        $data = [
            'title' => 'Halaman Tampilan dosen',
            'dosen' => $this->dosen->findAll(),
        ];
        //tampilkan data dosen ke view
        return view('pages/dosen/tampil_dosen', $data);
    }
    public function tambahhh()
    {
        $data = [
            'title' => 'Halaman Tampilan tambah dosen',
            'activedosen' => 'active',
        ];
        //tampilkan data dosen ke view
        return view('pages/dosen/tambah_dosen', $data);
    }
    public function createee()
    {
        $this->dosen->insert([
            'nidn' => $this->request->getPost('nidn'),
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'tlpn' => $this->request->getPost('tlpn'),
        ]);
        session()->setFlashdata('success', 'Data berhasil disimpan');
        return redirect()->to('/dosen');
    }
    public function update($nidn)
    {
        //ambil data mahasiswa dari model
        $data = [
            'title' => 'Halaman Tampilan edit mahasiswa',
            'editdosen' => $this->dosen->find($nidn)


        ];
        //tampilkan data dosen ke view
        return view('pages/dosen/ubah_dosen', $data);
    }
    public function ubah($nidn)
    {
        $this->dosen->update($nidn, [
            'nidn' => $this->request->getPost('nidn'),
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'tlpn' => $this->request->getPost('tlpn'),
        ]);
        return redirect()->to('/dosen')->with('success', 'Data berhasil diubah');
    }
    public function delete($nidn)
    {
        $this->dosen->delete($nidn);
        return redirect()->to('/dosen');
    }
}
