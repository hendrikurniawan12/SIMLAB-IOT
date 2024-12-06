<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Kehadiran extends Model
{
    protected $table = 'aslab_kehadiran';
    protected $primaryKey = 'id_kehadiran';
    protected $allowedFields = ['tanggal_masuk', 'tanggal_pulang', 'kegiatan', 'nim_aslab'];

    function getData()
    {
        $this->join('aslab', 'aslab_kehadiran.nim_aslab = aslab.nim_aslab');
        $this->orderBy('id_kehadiran', 'DESC');
        return $this->findAll();
    }

    public function getDataByNIM($nim_aslab)
    {
        $this->where('nim_aslab', $nim_aslab);
        $this->orderBy('id_kehadiran', 'DESC');
        return $this->findAll();
    }

    public function updateKegiatan($id_kehadiran, $kegiatan)
    {
        $this->set('kegiatan', $kegiatan);
        $this->where('id_kehadiran', $id_kehadiran);
        $this->update();
    }
}
