<?php

namespace App\Controllers;

use App\Models\M_laboran;

use App\Controllers\BaseController;
use App\Models\M_Kehadiran;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class Laboran extends BaseController
{
  protected $m_laboran;

  public function __construct()
  {
    $this->m_laboran = new M_Kehadiran();
  }

  public function dashboard()
  {
    return view('/ContohKehadiran');
  }
  public function datakehadiran()
  {
    $data['kehadiran'] = $this->m_laboran->getDataBynip(session()->get('nama_laboran'));
    return view('/ContohKehadiran', $data);
    // dd($data['data']);
  }
}
