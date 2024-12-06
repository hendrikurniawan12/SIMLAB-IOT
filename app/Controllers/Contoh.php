<?php

namespace App\Controllers;

use App\Models\M_Aslab;
use App\Models\M_Kehadiran;


class Contoh extends BaseController
{

    protected $aslabModel;
    protected $kehadiranModel;

    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->aslabModel        = new M_Aslab();
        $this->kehadiranModel    = new M_Kehadiran();
        if (!session()->get('nip_laboran')) {
            header('Location: ' . base_url());
            die();
        }
    }

    public function ContohDashboard()
    {
        return view('Contoh/ContohDashboard');
    }

    public function dataaslab()
    {
        $data['aslab'] = $this->aslabModel->getData();
        return view('contoh/v_index', $data);
    }
    public function kehadiran()
    {
        $data['kehadiran'] = $this->kehadiranModel->getData();
        return view('contoh/contohdata', $data);
    }
}
