<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $session = \Config\Services::session();
        if (!$session->username) {
            return redirect()->to('/login');
        }
        $data = [
            'judul' => 'Dashboard',
            'judul_utama' => 'Dashboard',
            'nama' => $session->nama,
            'status' => $session->status,
            'foto' => $session->foto

        ];
        if ($session->status == 'admin') {
            echo view('templates/header', $data);
            echo $session->status;
        } elseif ($session->status == 'pengguna') {
            echo view('templates/headerp', $data);
            echo $session->status;
        }
        echo view('templates/footer');
    }
}
