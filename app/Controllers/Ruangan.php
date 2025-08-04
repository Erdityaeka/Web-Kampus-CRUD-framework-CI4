<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RuanganModel;
use CodeIgniter\HTTP\ResponseInterface;

class Ruangan extends BaseController
{
    protected $ruangan;
    public function __construct()
    {
        $this->ruangan = new RuanganModel();
    }

    public function index()
    {
        //ambil data ruangan dari model
        $data = [
            'title' => 'Halaman Tampilan ruangan',
            'ruangan' => $this->ruangan->findAll(),
        ];
        //tampilkan data ruangan ke view
        return view('pages/ruangan/tampil_ruangan', $data);
    }
    public function tambahrg()
    {
        //ambil data ruangan dari model
        $data = [
            'title' => 'Halaman Tampilan tambah ruangan',
            'activeruangan' => 'active',
        ];
        //tampilkan data ruangan ke view
        return view('pages/ruangan/tambah_ruangan', $data);
    }
    public function createrg()
    {
        $this->ruangan->insert([
            'kode_ruangan' => $this->request->getPost('kode_ruangan'),
            'nama_ruangan' => $this->request->getPost('nama_ruangan'),

        ]);
        session()->setFlashdata('success', 'Data berhasil disimpan');
        return redirect()->to('/ruangan');
    }
    public function ubahrg($kode_ruangan)
    {
        //ambil data ruangan dari model
        $data = [
            'title' => 'Halaman Tampilan edit ruangan',
            'editruangan' => $this->ruangan->find($kode_ruangan)


        ];
        //tampilkan data ruangan ke view
        return view('pages/ruangan/ubah_ruangan', $data);
    }
    public function editrg($kode_ruangan)
    {
        $this->ruangan->update($kode_ruangan, [
            'kode_ruangan' => $this->request->getPost('kode_ruangan'),
            'nama_ruangan' => $this->request->getPost('nama_ruangan'),

        ]);
        return redirect()->to('/ruangan')->with('success', 'Data berhasil diubah');
    }
    public function hapusrg($kode_ruangan)
    {
        $this->ruangan->delete($kode_ruangan);
        return redirect()->to('/ruangan');
    }
}
