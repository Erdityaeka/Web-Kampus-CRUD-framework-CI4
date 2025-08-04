<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KaprodiModel;
use App\Models\KelasModel;

class Kelas extends BaseController
{
    protected $kelas;
    protected $kaprodi;

    public function __construct()
    {
        $this->kelas = new KelasModel();
        $this->kaprodi = new KaprodiModel();
    }

    // Tampilkan semua data kelas (dengan join nama prodi)
    public function index()
    {
        $data = [
            'title' => 'Halaman Tampilan Kelas',
            'kelas' => $this->kelas->getAllKelas(),
        ];
        return view('pages/kelas/tampil_kelas', $data);
    }

    // Form tambah kelas
    public function tambahkl()
    {
        $data = [
            'title' => 'Halaman Tambah Kelas',
            'activekelas' => 'active',
            'prodi' => $this->kaprodi->findAll(), // data untuk dropdown prodi
        ];
        return view('pages/kelas/tambah_kelas', $data);
    }

    // Simpan data baru
    public function createkl()
    {
        $this->kelas->insert([
            'kode_kelas' => $this->request->getPost('kode_kelas'),
            'nama_kelas' => $this->request->getPost('nama_kelas'),
            'idprodi' => $this->request->getPost('idprodi'),
        ]);
        session()->setFlashdata('success', 'Data berhasil disimpan');
        return redirect()->to('/kelas');
    }

    // Form edit kelas
    public function ubahkl($kode_kelas)
    {
        $data = [
            'title' => 'Halaman Edit Kelas',
            'editkelas' => $this->kelas->find($kode_kelas),
            'prodi' => $this->kaprodi->findAll(), // untuk dropdown edit prodi
        ];
        return view('pages/kelas/ubah_kelas', $data);
    }

    // Simpan perubahan
    public function editkl($kode_kelas)
    {
        $this->kelas->update($kode_kelas, [
            'kode_kelas' => $this->request->getPost('kode_kelas'),
            'nama_kelas' => $this->request->getPost('nama_kelas'),
            'idprodi' => $this->request->getPost('idprodi'),
        ]);
        return redirect()->to('/kelas')->with('success', 'Data berhasil diubah');
    }

    // Hapus data kelas
    public function hapuskl($kode_kelas)
    {
        $this->kelas->delete($kode_kelas);
        return redirect()->to('/kelas')->with('success', 'Data berhasil dihapus');
    }
}
