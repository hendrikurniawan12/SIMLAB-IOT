<?php

use App\Controllers\Absensi;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Begin routes Auth
$routes->get('/', 'Auth::index');
$routes->post('/auth/login', 'Auth::login');
$routes->get('/auth/logout', 'Auth::logout');

// End routes Auth


$routes->get('/Absensi', 'Absensi::index');
$routes->get('/Absensi/index', 'Absensi::index');
$routes->get('/Absensi/absen', 'Absensi::absen');
$routes->get('/Absensi/lihat', 'Absensi::lihat');

$routes->post('/Absensi/simpanDataDiri', 'Absensi::simpanDataDiri');
$routes->post('/Absensi/updateDataDiri', 'Absensi::updateDataDiri');
$routes->post('Absensi/deleteDataDiri/(:any)', 'Absensi::deleteDataDiri/$1');
$routes->post('/Absensi/simpanMasuk', 'Absensi::simpanMasuk');
$routes->post('/Absensi/simpanPulang', 'Absensi::simpanPulang');

$routes->get('/Absensi/save', 'Absensi::save');
$routes->get('/ContohDashboard', 'Contoh::ContohDashboard');
$routes->get('/ContohData', 'Contoh::dataaslab');
$routes->get('/ContohKehadiran', 'Contoh::kehadiran');
$routes->get('/ContohKehadiran', 'Contoh::kehadiran');
// $routes->get('/DashboardUser', 'Contoh::index');

$routes->get('/Aslab/Dashboard', 'Aslab::dashboard');
$routes->get('/Aslab/Data', 'Aslab::datakehadiran');
$routes->post('/Aslab/simpanKegiatan', 'Aslab::simpanKegiatan');
