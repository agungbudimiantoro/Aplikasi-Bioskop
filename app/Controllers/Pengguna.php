<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PenggunaModel;

class Pengguna extends BaseController
{
    public function index()
    {
        //cek session admin / pengguna
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }

        $pager = \Config\Services::pager();
        $model = new PenggunaModel();
        $data = [
            'judul' => 'Admin - pengguna',
            'pengguna' => $model->orderBy('NIK')->Paginate(5, 'konten'),
            'pager' => $model->pager,
            'judul_utama' => 'Data Pengguna',
            'nama' => $session->nama,
            'status' => $session->status,
            'foto' => $session->foto,
            'ruangan' => $model->getRuangan()
        ];
        echo view('templates/header', $data);
        echo view('pengguna/pengguna', $data);
        echo view('templates/footer');
    }

    public function cari()
    {
        //cek session admin / pengguna
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }

        $model = new PenggunaModel();
        $cari = $this->request->getPost('cari');
        $pager = \Config\Services::pager();

        if (!$cari) {
            return redirect()->to('/pengguna');
        }

        $data = [
            'judul' => 'Admin - pengguna',
            'pengguna' => $model->orderBy('nama')->LIKE('nama', $cari, 'both')->orLike('username', $cari, 'both')->Paginate(5, 'konten'),
            'pager' => $model->pager,
            'nama' => $session->nama,
            'status' => $session->status,
            'foto' => $session->foto,
            'judul_utama' => 'Data Pengguna'
        ];
        echo view('templates/header', $data);
        echo view('pengguna/pengguna', $data);
        echo view('templates/footer');
    }

    public function ubah($id)
    {
        //cek session admin / pengguna
        $session = \Config\Services::session();
        if ($session->status != 'pengguna') {
            return redirect()->to('/dashboard');
        }


        $model = new PenggunaModel();
        helper('form');
        $this->form_validation = \Config\Services::validation();
        $data = [
            'judul' => 'ubah profile',
            'pengguna' => $model->getId($id),
            'judul_utama' => 'Ubah pengguna',
            'nama' => $session->nama,
            'status' => $session->status,
            'foto' => $session->foto,
        ];

        echo view('templates/headerP', $data);
        echo view('pengguna/penggunaUbah', $data);
        echo view('templates/footer');
    }
    public function ubahPassword($id)
    {
        //cek session admin / pengguna
        $session = \Config\Services::session();
        if ($session->status != 'pengguna') {
            return redirect()->to('/dashboard');
        }


        $model = new PenggunaModel();
        helper('form');
        $this->form_validation = \Config\Services::validation();
        $data = [
            'judul' => 'ubah password',
            'pengguna' => $model->getId($id),
            'judul_utama' => 'Ubah passowrd',
            'nama' => $session->nama,
            'status' => $session->status,
            'foto' => $session->foto,
        ];

        echo view('templates/headerP', $data);
        echo view('pengguna/penggunaUbahPassword', $data);
        echo view('templates/footer');
    }

    public function update()
    {
        //cek session admin / pengguna
        $session = \Config\Services::session();
        if ($session->status != 'pengguna') {
            return redirect()->to('/dashboard');
        }


        $model = new PenggunaModel();
        helper('form');
        $this->form_validation = \Config\Services::validation();


        //set image
        $avatar = $this->request->getFile('gambar');
        $gambar = $avatar->getName();
        if ($gambar == NULL) {
            $gambar = $this->request->getPost('namagambar');
        } else {
            $avatar->move(ROOTPATH . 'public/uploads/gambar');
        }


        // $password = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);

        $data = [
            'NIK' => $this->request->getPost('NIK'),
            'username' => $this->request->getPost('username'),
            // 'password' =>  $this->request->getPost('password'),
            // 'password2' =>  $this->request->getPost('password2'),
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'jk' => $this->request->getPost('jk'),
            'alamat' => $this->request->getPost('alamat'),
            'foto' => $gambar,
        ];

        $id =  $this->request->getPost('NIK');

        if ($this->form_validation->run($data, 'editProfile') == FALSE) {
            $error = $this->form_validation->listErrors();
            session()->setFlashdata('error', '<br><small class="red-text">
            ' . $error . '</small>');
            return redirect()->to($_SERVER['HTTP_REFERER']);;
        } else {
            // $data['password'] = $password;
            // unset($data['password2']);
            $model->updatePengguna($data, $id);
            $sessions = $model->getData($id);
            $array = [
                'username' => $sessions->username,
                'status' => 'pengguna',
                'nama' => $sessions->nama,
                'foto' => $sessions->foto,
            ];
            $session->set($array);
            session()->setFlashdata('tipe', 'pengguna');
            session()->setFlashdata('success', 'diubah');
            return redirect()->to('http://localhost:8080/profile/');
        }
    }

    public function updatePassword()
    {
        //cek session admin / pengguna
        $session = \Config\Services::session();
        if ($session->status != 'pengguna') {
            return redirect()->to('/dashboard');
        }


        $model = new PenggunaModel();
        helper('form');
        $this->form_validation = \Config\Services::validation();


        $password = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);

        $data = [
            'NIK' => $this->request->getPost('NIK'),
            'password' =>  $this->request->getPost('password'),
            'password2' =>  $this->request->getPost('password2'),
        ];

        $id =  $this->request->getPost('NIK');

        if ($this->form_validation->run($data, 'editPassword') == FALSE) {
            $error = $this->form_validation->listErrors();
            session()->setFlashdata('error', '<br><small class="red-text">
            ' . $error . '</small>');
            return redirect()->to($_SERVER['HTTP_REFERER']);;
        } else {
            $data['password'] = $password;
            unset($data['password2']);
            $model->updatePengguna($data, $id);
            session()->setFlashdata('tipe', 'password');
            session()->setFlashdata('success', 'diubah');
            return redirect()->to('http://localhost:8080/profile/');
        }
    }
}
