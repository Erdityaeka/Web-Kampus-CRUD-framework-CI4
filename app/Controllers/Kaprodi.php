<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KaprodiModel;
use CodeIgniter\HTTP\ResponseInterface;

class Kaprodi extends BaseController
{
    protected $kaprodi;
    public function __construct()
    {
        $this->kaprodi = new KaprodiModel();
    }

    public function index()
    {
        //ambil data kaprodi dari model
        $data = [
            'title' => 'Halaman Tampilan Kaprodi',
            'kaprodi' => $this->kaprodi->findAll(),
        ];
        //tampilkan data kaprodi ke view
        return view('pages/prodi/tampil_kaprodi', $data);
    }
    public function tambah()
    {
        //ambil data kaprodi dari model
        $data = [
            'title' => 'Halaman Tampilan tambah Kaprodi',
            'activekaprodi' => 'active',
        ];
        //tampilkan data kaprodi ke view
        return view('pages/prodi/tambah_kaprodi', $data);
    }
    public function create()
    {
        $this->kaprodi->insert([
            'nama' => $this->request->getPost('nama'),
            'prodi' => $this->request->getPost('prodi'),

        ]);
        session()->setFlashdata('success', 'Data berhasil disimpan');
        return redirect()->to('/kaprodi');
    }
    public function ubah($idprodi)
    {
        //ambil data kaprodi dari model
        $data = [
            'title' => 'Halaman Tampilan edit Kaprodi',
            'editprodi' => $this->kaprodi->find($idprodi)


        ];
        //tampilkan data kaprodi ke view
        return view('pages/prodi/ubah_kaprodi', $data);
    }
    public function edit($idprodi)
    {
        $this->kaprodi->update($idprodi, [
            'nama' => $this->request->getPost('nama'),
            'prodi' => $this->request->getPost('prodi'),

        ]);
        return redirect()->to('/kaprodi')->with('success', 'Data berhasil diubah');
    }
    public function hapus($idprodi)
    {
        $this->kaprodi->delete($idprodi);
        return redirect()->to('/kaprodi');
    }
}
