<?php
// Di sini saya membuat controllers buat login

namespace App\Controllers;

use App\Models\M_Users;

use App\Controllers\BaseController;
use App\Models\M_Aslab;
use App\Models\M_laboran;

class Auth extends BaseController
{

    protected $m_aslab;
    protected $m_users;
    protected $m_laboran;

    public function __construct()
    {
        $this->m_aslab   = new M_Aslab();
        $this->m_users   = new M_Users();
        $this->m_laboran = new M_laboran();
        if (session()->get('nip_laboran')) {
            header('Location: ' . base_url('ContohKehadiran'));
            die();
        }
        if (session()->get('nim_aslab')) {
            header('Location: ' . base_url('Aslab/Dashboard'));
            die();
        }
    }

    public function index()
    {
        return view('contoh/contohlogin');
    }

    public function login()
    {
        // if untuk pengecekan inputan username & password
        if (!$this->validate([
            // syarat inputan ada (required)
            'username'  => ['rules' => 'required'],
            'password'  => ['rules' => 'required']
        ])) {
            //jika username/password kosong
            session()->setFlashdata('error', 'Username atau password harap dilengkapi');
            return redirect()->to(base_url())->withInput();
        } else {
            //jika username & password diisi
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $get_data = $this->m_users->getDataByUsername($username);

            //if untuk cek di database ada datanya atau tidak
            if ($get_data) {
                // jika username ditemukan di database

                // if untuk pengecekan password cocok atau tidak yang diinputkan dengan database
                if (password_verify($password, $get_data['password'])) {
                    // jika password cocok dengan database
                    // echo 'password cocok';
                    if ($get_data['nip_laboran'] != null) {
                        // echo 'dia laboran';
                        // $data_laboran = $this->m_laboran->getDataByUsername($username);
                        $data_laboran = $this->m_laboran->getDataBynip($get_data['nip_laboran']);
                        session()->set('nip_laboran', $data_laboran['nip_laboran']);
                        session()->set('nama_laboran', $data_laboran['nama_laboran']);
                        return redirect()->to(base_url('/ContohKehadiran'));
                    }
                    if ($get_data['nim_aslab']   != null) {
                        // echo 'dia aslab';
                        // session()->set('nim_aslab');
                        $data_aslab = $this->m_aslab->getDataByNIM($get_data['nim_aslab']);
                        // session()->destroy();
                        session()->set('nim_aslab', $data_aslab['nim_aslab']);
                        session()->set('nama_aslab', $data_aslab['nama_aslab']);
                        return redirect()->to(base_url('Aslab/Dashboard'));
                    }
                } else {
                    // jika password tidak cocok dengan database
                    session()->setFlashdata('error', 'Password yang Anda masukkan salah');
                    return redirect()->to(base_url())->withInput();
                }
            } else {
                // jika username tidak ditemukan di database
                session()->setFlashdata('error', 'Username tidak ditemukan');
                return redirect()->to(base_url())->withInput();
            }
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url());
        // return view('contoh/contohlogin');
    }
}
