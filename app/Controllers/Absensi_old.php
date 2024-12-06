<?
// file: app/Controllers/Absensi.php

namespace App\Controllers;

// use CodeIgniter\Controller;
use App\Models\PegawaiModel;
use App\Models\AbsensiModel;

class Absensi_old extends BaseController
{
    public function index()
    {
        $pegawaiModel = new PegawaiModel();
        $absensiModel = new AbsensiModel();
        $data['pegawai'] = $pegawaiModel->findAll();
        $data['absensi'] = $absensiModel->findAll();
        return view('absensi', $data);
    }

    public function masuk()
    {
        $absensiModel = new AbsensiModel();
        $data['absensi'] = $absensiModel->findAll();
        return view('absensi_masuk', $data);
    }

    public function pulang()
    {
        $absensiModel = new AbsensiModel();
        $data['absensi'] = $absensiModel->findAll();
        return view('absensi_pulang', $data);
    }

    public function save()
    {
        $absensiModel = new AbsensiModel();
        $data = [
            'id_pegawai' => $this->request->getPost('id_pegawai'),
            'tanggal' => $this->request->getPost('tanggal'),
            'jam_masuk' => $this->request->getPost('jam_masuk'),
            'jam_pulang' => $this->request->getPost('jam_pulang'),
        ];
        $absensiModel->save($data);
        return redirect()->to('/absensi');
    }
}
