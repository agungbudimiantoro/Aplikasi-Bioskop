<?php

namespace App\Controllers;

use App\Models\ProfileModel;

class Profile extends BaseController
{
    public function index()
    {
        $model = new ProfileModel();
        $session = \Config\Services::session();

        $data = [
            'judul' => 'Admin - Profile',
            'judul_utama' => 'Data Profile',
            'nama' => $session->nama,
            'status' => $session->status,
            'foto' => $session->foto,
        ];
        $id = $session->username;

        if ($session->status == 'admin') {
            $data['profile'] = $model->get('admin', $id);
            echo view('templates/header', $data);
            echo view('profile/profileAdmin', $data);
        } elseif ($session->status == 'pengguna') {
            $data['profile'] = $model->get('pengguna', $id);
            echo view('templates/headerp', $data);
            echo view('profile/profile', $data);
        }
        echo view('templates/footer');
    }
}
