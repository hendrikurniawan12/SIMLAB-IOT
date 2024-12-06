<?php

namespace App\Models;

use CodeIgniter\Model;
use EnchantDictionary;

class M_Aslab extends Model
{

    protected $table = 'aslab';
    protected $primaryKey = 'nim_aslab';
    protected $allowedFields = ['nim_aslab', 'nama_aslab', 'rfid'];

    function getData()
    {
        return $this->findAll();
    }

    public function getDataByNIM($nim_aslab)
    {
        $this->where('nim_aslab', $nim_aslab);
        return $this->first();
    }

    public function updateData($nim_aslab_, $data)
    {
        // Update data berdasarkan nim_aslab_ sebagai identifier
        return $this->where('nim_aslab', $nim_aslab_)->set($data)->update();
    }
}
