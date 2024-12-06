<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Users extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'username';
    protected $allowedFields = ['username', 'password', 'nip_laboran', 'nim_aslab'];

    public function getDataByUsername($username)
    {
        $this->where('username', $username);
        return $this->first();
        // $this->findAll();
    }
}
