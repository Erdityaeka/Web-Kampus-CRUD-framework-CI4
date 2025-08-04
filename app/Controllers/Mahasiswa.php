<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MahasiswaModel;
use CodeIgniter\HTTP\ResponseInterface;

class Mahasiswa extends BaseController
{
    protected $mahasiswa;
    public function __construct()
    {
        $this->mahasiswa = new MahasiswaModel();
    }

    public function index()
    {
        //ambil data mahasiswa dari model
        $data = [
            'title' => 'Halaman Tampilan mahasiswa',
            'mahasiswa' => $this->mahasiswa->findAll(),
        ];
        //tampilkan data mahasiswa ke view
        return view('pages/mahasiswa/tampil_mahasiswa', $data);
    }
    public function tambahh()
    {
        //ambil data mahasiswa dari model
        $data = [
            'title' => 'Halaman Tampilan tambah mahasiswa',
            'activemahasiswa' => 'active',
        ];
        //tampilkan data mahasiswa ke view
        return view('pages/mahasiswa/tambah_mahasiswa', $data);
    }
    public function createe()
    {
        $this->mahasiswa->insert([
            'nim'   => $this->request->getPost('nim'),
            'nama'  => $this->request->getPost('nama'),
            'prodi' => $this->request->getPost('prodi'),
        ]);
        session()->setFlashdata('success', 'Data berhasil disimpan');
        return redirect()->to('/mahasiswa');
    }
    public function ubah($nim)
    {
        //ambil data mahasiswa dari model
        $data = [
            'title' => 'Halaman Tampilan edit mahasiswa',
            'editprodi' => $this->mahasiswa->find($nim)


        ];
        //tampilkan data mahasiswa ke view
        return view('pages/mahasiswa/ubah_mahasiswa', $data);
    }
    public function edit($nim)
    {
        $this->mahasiswa->update($nim, [
            'nim' => $this->request->getPost('nim'),
            'nama' => $this->request->getPost('nama'),
            'prodi' => $this->request->getPost('prodi'),
        ]);
        return redirect()->to('/mahasiswa')->with('success', 'Data berhasil diubah');
    }
    public function hapuss($nim)
    {
        $this->mahasiswa->delete($nim);
        return redirect()->to('/mahasiswa');
    }
}
