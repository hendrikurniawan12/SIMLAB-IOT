<?php

namespace App\Controllers;

use App\Models\M_Aslab;
use App\Models\M_Kehadiran;
use App\Models\M_Pulang;


class Absensi extends BaseController
{

    protected $aslabModel;
    protected $kehadiranModel;
    protected $simpanPulangModel;

    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        // explode();
        $this->aslabModel        = new M_Aslab();
        $this->kehadiranModel    = new M_Kehadiran();
       
    }

    public function index()
    {
        $data['aslab'] = $this->aslabModel->getData();
        return view('absensi', $data);
        // dd($data['aslab']);
    }

    public function absen()
    {
        echo 'function absen';
    }

    public function simpanDataDiri()
    {
        if (!$this->validate([
            'nim_aslab'     => ['rules' => 'required'],
            'nama_aslab'    => ['rules' => 'required'],
            'rfid'          => ['rules' => 'required']
        ])) {
            // kondisi kalau tidak ada yang diisi
            echo 'harap lengkapi';
            echo '<script>setTimeout(function(){ window.history.back(); }, 1000);</script>';
        } else {
            $nim_aslab  = $this->request->getPost('nim_aslab');
            $nama_aslab = $this->request->getPost('nama_aslab');
            $rfid       = $this->request->getPost('rfid');
            $input      = [
                'nim_aslab'     => $nim_aslab,
                'nama_aslab'    => $nama_aslab,
                'rfid'          => $rfid
            ];
            $this->aslabModel->insert($input);
            // return redirect()->back()->withInput();
            return redirect()->to('Absensi/save');
        }
    }

    public function updateDataDiri()
    {
        if (!$this->validate([
            'nim_aslab'     => ['rules' => 'required'],
            'nim_aslab_'    => ['rules' => 'required'],
            'nama_aslab'    => ['rules' => 'required'],
            'nama_aslab_'   => ['rules' => 'required'],
            'rfid'          => ['rules' => 'required'],
            'rfid_'         => ['rules' => 'required']
        ])) {
            // kondisi kalau tidak ada yang diisi
            echo 'harap lengkapi';
            echo '<script>setTimeout(function(){ window.history.back(); }, 1000);</script>';
        } else {
            // Mengambil data dari input
            $nim_aslab_  = $this->request->getPost('nim_aslab_');
            $data = [
                'nim_aslab' => $this->request->getPost('nim_aslab'),
                'nama_aslab' => $this->request->getPost('nama_aslab'),
                'rfid' => $this->request->getPost('rfid'),
            ];

            // Memanggil metode updateData
            $this->aslabModel->updateData($nim_aslab_, $data);

            // Redirect ke halaman Absensi/save
            return redirect()->to('Absensi/save');
        }
    }

    public function deleteDataDiri($nim_aslab)
    {
        // Cek apakah ada data dengan NIM tersebut
        $aslab = $this->aslabModel->find($nim_aslab);
        if (!$aslab) {
            // Jika tidak ada, berikan pesan error
            session()->setFlashdata('error', 'Data tidak ditemukan.');
            return redirect()->back();
        }

        // Lakukan penghapusan
        $this->aslabModel->delete($nim_aslab);

        // Berikan pesan sukses
        session()->setFlashdata('success', 'Data berhasil dihapus.');
        return redirect()->to('Absensi/save');
    }


    public function simpanMasuk()
    {
        if (!$this->validate([
            'tanggal'   => ['rules' => 'required'],
            'jam_masuk' => ['rules' => 'required']
        ])) {
            echo 'silahkan dilengkapi';
        } else {
            // echo 'okee data masuk';
            $tanggal    = $this->request->getPost('tanggal');
            $jam_masuk  = $this->request->getPost('jam_masuk');
            $input      = [
                'tanggal_kehadiran' => $tanggal,
                'jam_kehadiran'     => $jam_masuk
            ];
            // dd($input);
            $this->kehadiranModel->insert($input);
            return redirect()->back();
        }
    }

    public function simpanPulang()
    {
        if (!$this->validate([
            'nim_aslab'      => ['rules' => 'required'],
            'nama_aslab'     => ['rules' => 'required'],
            'rfid'           => ['rules' => 'required'],
            'tanggal_Pulang' => ['rules' => 'required'],
            'jam_Pulang'     => ['rules' => 'required']
        ])) {
            echo 'silahkan dilengkapi';
        } else {
            $nim_aslab         = $this->request->getPost('nim_aslab');
            $nama_aslab        = $this->request->getPost('nama_aslab');
            $rfid              = $this->request->getPost('rfid');
            $tanggal_Pulang    = $this->request->getPost('tanggal_Pulang');
            $jam_Pulang        = $this->request->getPost('jam_Pulang');
            $input      = [
                'nim_aslab'      => $nim_aslab,
                'nama_aslab'     => $nama_aslab,
                'rfid'           => $rfid,
                'tanggal_Pulang' => $tanggal_Pulang,
                'jam_Pulang'     => $jam_Pulang
            ];
            // dd($input);
            $this->simpanPulangModel->insert($input);
            return redirect()->back();
        }
    }

    public function save()
    {
        $aslab = new M_Aslab();
        $data['data'] = $aslab->findAll();
        // dd($data);
        // $nim_aslab  = $this->request->getVar('nim_aslab');
        // $nama_aslab = $this->request->getVar('nama_aslab');
        // $rfid       = $this->request->getVar('rfid');
        // var_dump($nim_aslab, $nama_aslab, $rfid);

        return view('save', $data);
    }
    public function aslab(){
        $data['aslab'] = $this->aslabModel->getData();
        return view('aslab', $data);
    }
    
}