<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Laboran extends Model
{
    protected $table = 'laboran';
    protected $primaryKey = 'nip_laboran';
    protected $allowedFields = ['nip_laboran', 'nama_laboran', 'posisi_laboran'];

    public function getDataBynip($nip)
    {
        $this->where('nip_laboran', $nip);
        return $this->first();
    }
}
