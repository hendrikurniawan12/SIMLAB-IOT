<?php

namespace App\Controllers;

use App\Models\M_Aslab;

use App\Controllers\BaseController;
use App\Models\M_Kehadiran;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class Aslab extends BaseController
{
  protected $m_kehadiran;

  public function __construct()
  {
    $this->m_kehadiran = new M_Kehadiran();
  }

  public function dashboard()
  {
    // session()->destroy();
    return view('aslab/dashboard');
  }
  public function datakehadiran()
  {
    $data['kehadiran'] = $this->m_kehadiran->getDataByNIM(session()->get('nim_aslab'));
    return view('aslab/data', $data);
    // dd($data['data']);
  }

  public function simpanKegiatan()
  {
    if ($this->validate([
      'id_kehadiran'  => ['rules' => 'required'],
      'kehadiran'     => ['rules' => 'required']
    ])) {
      return redirect()->to(base_url('Aslab/Data'));
    } else {
      $id_kehadiran = $this->request->getPost('id_kehadiran');
      $kegiatan     = $this->request->getPost('kegiatan');
      // echo $id_kehadiran . ' isiannya ' . $kegiatan;
      $this->m_kehadiran->updateKegiatan($id_kehadiran, $kegiatan);
      session()->setFlashdata('sukses', 'Kegiatan Berhasil Disimpan');
      return redirect()->to(base_url('Aslab/Data'));
    }
  }
}
