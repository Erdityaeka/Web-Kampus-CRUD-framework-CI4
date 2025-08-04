<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DosenModel;
use App\Models\JadwalModel;
use App\Models\KelasModel;
use App\Models\MatakuliahModel;
use App\Models\RuanganModel;
use CodeIgniter\HTTP\ResponseInterface;

class Jadwal extends BaseController
{
    protected $jadwal;
    protected $matakuliah;
    protected $dosen;
    protected $ruangan;
    protected $kelas;

    public function __construct()
    {
        $this->jadwal = new JadwalModel();
        $this->matakuliah = new MatakuliahModel();
        $this->dosen = new DosenModel();
        $this->ruangan = new RuanganModel();
        $this->kelas = new KelasModel();
    }


    public function index()
    {
        $data = [
            'title' => 'Halaman Tampilan Jadwal',
            'jadwal' => $this->jadwal->getAllJadwal(),
        ];
        return view('pages/jadwal/tampil_jadwal', $data);
    }


    public function tambahjdwl()
    {
        $data = [
            'title' => 'Halaman Tambah Jadwal',
            'activejadwal' => 'active',
            'matakuliah' => $this->matakuliah->findAll(),
            'dosen' => $this->dosen->findAll(),
            'ruangan' => $this->ruangan->findAll(),
            'kelas' => $this->kelas->findAll(),
        ];
        return view('pages/jadwal/tambah_jadwal', $data);
    }


    public function createjdwl()
    {
        $this->jadwal->insert([
            'id_jadwal' => $this->request->getPost('id_jadwal'),
            'kdmk' => $this->request->getPost('kdmk'),
            'nidn' => $this->request->getPost('nidn'),
            'hari' => $this->request->getPost('hari'),
            'jam_mulai' => $this->request->getPost('jam_mulai'),
            'jam_selesai' => $this->request->getPost('jam_selesai'),
            'kode_ruangan' => $this->request->getPost('kode_ruangan'),
            'kode_kelas' => $this->request->getPost('kode_kelas'),
        ]);
        session()->setFlashdata('success', 'Data berhasil disimpan');
        return redirect()->to('/jadwal');
    }


    public function ubahjdwl($id_jadwal)
    {
        $data = [
            'title' => 'Halaman Edit Jadwal',
            'editjadwal' => $this->jadwal->find($id_jadwal),
            'matakuliah' => $this->matakuliah->findAll(),
            'dosen' => $this->dosen->findAll(),
            'ruangan' => $this->ruangan->findAll(),
            'kelas' => $this->kelas->findAll(),
        ];
        return view('pages/jadwal/ubah_jadwal', $data);
    }


    public function editjdwl($id_jadwal)
    {
        $this->jadwal->update($id_jadwal, [
            'kdmk' => $this->request->getPost('kdmk'),
            'nidn' => $this->request->getPost('nidn'),
            'hari' => $this->request->getPost('hari'),
            'jam_mulai' => $this->request->getPost('jam_mulai'),
            'jam_selesai' => $this->request->getPost('jam_selesai'),
            'kode_ruangan' => $this->request->getPost('kode_ruangan'),
            'kode_kelas' => $this->request->getPost('kode_kelas'),
        ]);
        return redirect()->to('/jadwal')->with('success', 'Data berhasil diubah');
    }


    public function hapusjdwl($id_jadwal)
    {
        $this->jadwal->delete($id_jadwal);
        return redirect()->to('/jadwal')->with('success', 'Data berhasil dihapus');
    }
}
