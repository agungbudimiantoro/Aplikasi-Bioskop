<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AdminModel;

class Admin extends BaseController
{

    public function index()
    {
        //cek session admin / pengguna
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }

        $pager = \Config\Services::pager();
        $model = new AdminModel();
        $data = [
            'judul' => 'Admin - Admin',
            'nama' => $session->nama,
            'status' => $session->status,
            'foto' => $session->foto,
            'admin' => $model->orderBy('id_admin')->Paginate(5, 'konten'),
            'pager' => $model->pager,
            'judul_utama' => 'Data Admin'
        ];
        echo view('templates/header', $data);
        echo view('admin/admin', $data);
        echo view('templates/footer');
    }

    public function bukaTambah()
    {
        helper('form');
        //cek session admin / pengguna
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }

        $data = [
            'judul' => 'Admin - Tambah admin',
            'nama' => $session->nama,
            'status' => $session->status,
            'judul_utama' => 'Tambah admin',
            'foto' => $session->foto
        ];
        echo view('templates/header', $data);
        echo view('admin/tambahAdmin', $data);
        echo view('templates/footer');
    }


    public function tambah()
    {
        $model = new AdminModel();
        helper('form');

        //cek session admin / pengguna
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }

        $this->form_validation = \Config\Services::validation();

        $password = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);
        $data = [
            'id_admin' => $model->buatid(),
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'password2' => $this->request->getPost('password2'),
            'nama' => $this->request->getPost('nama'),
            'jk' => $this->request->getPost('jk'),
            'alamat' => $this->request->getPost('alamat')
        ];


        if ($this->form_validation->run($data, 'admin') == FALSE) {
            $error = $this->form_validation->ListErrors();
            session()->setFlashdata('error', '<br><small class="red-text">
            ' . $error . '</small>');
            $data = [
                'judul' => 'Admin - Admin',
                'nama' => $session->nama,
                'status' => $session->status,
                'admin' => $model->orderBy('id_admin')->Paginate(5, 'konten'),
                'pager' => $model->pager,
                'judul_utama' => 'Data Admin',
                'foto' => $session->foto,
            ];
            echo view('templates/header', $data);
            echo view('admin/tambahAdmin', $data);
            echo view('templates/footer');
        } else {
            $data['password'] = $password;
            unset($data['password2']);
            $model->tambahAdmin($data);
            session()->setFlashdata('tipe', 'Admin');
            session()->setFlashdata('success', 'ditambahkan');
            return redirect()->to('/admin');
        }
    }


    public function cari()
    {
        $model = new AdminModel();

        //cek session admin / pengguna
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }


        $cari = $this->request->getPost('cari');
        $pager = \Config\Services::pager();

        if (!$cari) {
            return redirect()->to('/admin');
        }

        $data = [
            'judul' => 'Admin - admin',
            'nama' => $session->nama,
            'status' => $session->status,
            'admin' => $model->orderBy('id_admin')->LIKE('id_admin', $cari, 'both')->Paginate(5, 'konten'),
            'pager' => $model->pager,
            'judul_utama' => 'Data admin',
            'foto' => $session->foto,
        ];
        echo view('templates/header', $data);
        echo view('admin/admin', $data);
        echo view('templates/footer');
    }


    public function ubah($id)
    {
        //cek session admin / pengguna
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }


        $model = new AdminModel();
        helper('form');
        $this->form_validation = \Config\Services::validation();
        $data = [
            'judul' => 'Admin - admin',
            'nama' => $session->nama,
            'status' => $session->status,
            'admin' => $model->getId($id),
            'judul_utama' => 'Ubah admin',
            'foto' => $session->foto,
        ];

        echo view('templates/header', $data);
        echo view('admin/editAdmin', $data);
        echo view('templates/footer');
    }

    public function update()
    {
        //cek session admin / pengguna
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }


        $model = new AdminModel();
        helper('form');
        $this->form_validation = \Config\Services::validation();


        $data = [
            'id_admin' => $this->request->getPost('id_admin'),
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'password2' => $this->request->getPost('password2'),
            'nama' => $this->request->getPost('nama'),
            'jk' => $this->request->getPost('jk'),
            'alamat' => $this->request->getPost('alamat')
        ];

        $id =  $this->request->getPost('id_admin');

        if ($this->form_validation->run($data, 'admin') == FALSE) {
            $error = $this->form_validation->listErrors();
            session()->setFlashdata('error', '<br><small class="red-text">
            ' . $error . '</small>');
            return redirect()->to($_SERVER['HTTP_REFERER']);;
        } else {
            $password = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);
            $data['password'] =  $password;
            unset($data['password2']);
            $model->updateAdmin($data, $id);

            $cek = $model->getId($id);
            $array = [
                'username' => $cek->username,
                'status' => 'admin',
                'nama' => $cek->nama,
                'foto' => 'default.jpg',
            ];
            $session->set($array);
            session()->setFlashdata('tipe', 'admin');
            session()->setFlashdata('success', 'diubah');
            return redirect()->to('http://localhost:8080/admin/');
        }
    }

    public function hapus($id)
    {
        //cek session admin / pengguna
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }

        $model = new AdminModel();
        $model->hapusAdmin($id);
        session()->setFlashdata('tipe', 'admin');
        session()->setFlashdata('success', 'dihapus');
        return redirect()->to('/admin');
    }
}
