<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('kaprodi', 'Kaprodi::index');
$routes->get('tambahkprodi', 'Kaprodi::tambah');
$routes->get('ubahprodi/(:segment)', 'Kaprodi::ubah/$1');
$routes->post('ubah/(:segment)', 'Kaprodi::edit/$1');
$routes->get('delete/(:segment)', 'Kaprodi::hapus/$1');
$routes->post('tambah', 'Kaprodi::create');


$routes->get('mahasiswa', 'Mahasiswa::index');
$routes->get('tambahmhss', 'Mahasiswa::tambahh');
$routes->get('ubahmhs/(:segment)', 'Mahasiswa::ubah/$1');
$routes->post('ubahh/(:segment)', 'Mahasiswa::edit/$1');
$routes->get('deletemhs/(:segment)', 'Mahasiswa::hapuss/$1');
$routes->post('tambahm', 'Mahasiswa::createe');

$routes->get('dosen', 'Dosen::index');
$routes->get('tambahdosen', 'Dosen::tambahhh');
$routes->get('ubahdsn/(:segment)', 'Dosen::update/$1');
$routes->post('ubahds/(:segment)', 'Dosen::ubah/$1');
$routes->get('deletedsn/(:segment)', 'Dosen::delete/$1');
$routes->post('tambahdsn', 'Dosen::createee');

$routes->get('matakuliah', 'Matakuliah::index');
$routes->get('tambahMatakuliah', 'Matakuliah::tambahmk');
$routes->get('ubahmk/(:segment)', 'Matakuliah::updatemk/$1');
$routes->post('ubahmkl/(:segment)', 'Matakuliah::ubahmk/$1');
$routes->get('deletemk/(:segment)', 'Matakuliah::delete/$1');
$routes->post('tambahmk', 'Matakuliah::createmk');

$routes->get('kelas', 'Kelas::index');
$routes->get('tambahKelas', 'Kelas::tambahkl');
$routes->get('ubahkl/(:segment)', 'Kelas::ubahkl/$1');
$routes->post('ubahhkl/(:segment)', 'Kelas::editkl/$1');
$routes->get('deletekl/(:segment)', 'Kelas::hapuskl/$1');
$routes->post('tambahkl', 'Kelas::createkl');

$routes->get('ruangan', 'Ruangan::index');
$routes->get('tambahkruangan', 'Ruangan::tambahrg');
$routes->get('ubahruangan/(:segment)', 'Ruangan::ubahrg/$1');
$routes->post('ubahrg/(:segment)', 'Ruangan::editrg/$1');
$routes->get('deleterg/(:segment)', 'Ruangan::hapusrg/$1');
$routes->post('tambahrg', 'Ruangan::createrg');

$routes->get('jadwal', 'Jadwal::index');
$routes->get('tambahJadwal', 'Jadwal::tambahjdwl');
$routes->get('ubahjdwl/(:segment)', 'Jadwal::ubahjdwl/$1');
$routes->post('ubahhjdwl/(:segment)', 'Jadwal::editjdwl/$1');
$routes->get('deletejdwl/(:segment)', 'Jadwal::hapusjdwl/$1');
$routes->post('tambahjdwl', 'Jadwal::createjdwl');

$routes->get('user', 'User::index');
$routes->get('tambahuser', 'User::tambahusr');
$routes->get('ubahuser/(:segment)', 'User::ubahusr/$1');
$routes->post('edituser/(:segment)', 'User::editusr/$1');
$routes->get('hapussuser/(:segment)', 'User::hapussusr/$1');
$routes->post('createuser', 'User::createusr');

