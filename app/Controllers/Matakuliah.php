<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MatakuliahModel;
use CodeIgniter\HTTP\ResponseInterface;

class Matakuliah extends BaseController
{
    protected $matakuliah;
    public function __construct()
    {
        $this->matakuliah = new MatakuliahModel();
    }



    public function index()
    {
        $data = [
            'title' => 'Halaman Tampilan matakuliah',
            'matakuliah' => $this->matakuliah->findAll(),
        ];
        //tampilkan data matakuliah ke view
        return view('pages/matakuliah/tampil_matakuliah', $data);
    }
    public function tambahmk()
    {
        $data = [
            'title' => 'Halaman Tampilan tambah matakuliah',
            'activematakuliah' => 'active',
        ];
        //tampilkan data matakuliah ke view
        return view('pages/matakuliah/tambah_matakuliah', $data);
    }
    public function createmk()
    {
        $this->matakuliah->insert([
            'kdmk' => $this->request->getPost('kdmk'),
            'namamk' => $this->request->getPost('namamk'),
            'sks' => $this->request->getPost('sks'),
            'prodi' => $this->request->getPost('prodi'),
            'semester' => $this->request->getPost('semester'),
            'jenis' => $this->request->getPost('jenis'),
        ]);
        session()->setFlashdata('success', 'Data berhasil disimpan');
        return redirect()->to('/matakuliah');
    }
    public function updatemk($kdmk)
    {
        //ambil data mahasiswa dari model
        $data = [
            'title' => 'Halaman Tampilan edit mahasiswa',
            'editmatakuliah' => $this->matakuliah->find($kdmk)


        ];
        //tampilkan data matakuliah ke view
        return view('pages/matakuliah/ubah_matakuliah', $data);
    }
    public function ubahmk($kdmk)
    {
        $this->matakuliah->update($kdmk, [
            'kdmk' => $this->request->getPost('kdmk'),
            'namamk' => $this->request->getPost('namamk'),
            'sks' => $this->request->getPost('sks'),
            'prodi' => $this->request->getPost('prodi'),
            'semester' => $this->request->getPost('semester'),
            'jenis' => $this->request->getPost('jenis'),
        ]);
        return redirect()->to('/matakuliah')->with('success', 'Data berhasil diubah');
    }
    public function delete($kdmk)
    {
        $this->matakuliah->delete($kdmk);
        return redirect()->to('/matakuliah');
    }
}
