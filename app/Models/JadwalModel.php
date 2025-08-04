<?php

namespace App\Models;

use CodeIgniter\Model;

class JadwalModel extends Model
{
    protected $table            = 'jadwal';
    protected $primaryKey       = 'id_jadwal';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_jadwal', 'kdmk', 'nidn', 'hari', 'jam_mulai', 'jam_selesai', 'kode_ruangan', 'kode_kelas'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getAllJadwal()
    {
        return $this->db->table('jadwal')
            ->select('jadwal.*, matakuliah.namamk, dosen.nama, ruangan.nama_ruangan, kelas.nama_kelas')
            ->join('matakuliah', 'matakuliah.kdmk = jadwal.kdmk')
            ->join('dosen', 'dosen.nidn = jadwal.nidn')
            ->join('ruangan', 'ruangan.kode_ruangan = jadwal.kode_ruangan')
            ->join('kelas', 'kelas.kode_kelas = jadwal.kode_kelas')
            ->get()
            ->getResultArray();
    }
}
