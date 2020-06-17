<?php

namespace App\Controllers;

use App\Models\RegistrasiModel;

class Registrasi extends BaseController
{
    public function index()
    {
        $model = new RegistrasiModel();
        helper('form');
        $this->form_validation = \Config\Services::validation();
        echo view('registrasi/registrasi');
    }

    public function tambah()
    {
        $model = new RegistrasiModel();
        helper('form');
        $this->form_validation = \Config\Services::validation();

        $password = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);

        $data = [
            'NIK' => $this->request->getPost('NIK'),
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'password2' => $this->request->getPost('password2'),
            'nama' => $this->request->getPost('nama'),
            'jk' => $this->request->getPost('jk'),
            'email' => $this->request->getPost('email'),
            'alamat' => $this->request->getPost('alamat'),
            'foto' => 'default.jpg'
        ];

        $email = $this->request->getPost('email');
        $emailvalid = $model->getEmail($email);

        $id = $this->request->getPost('NIK');
        $idValid = $model->getId($id);

        $username = $this->request->getPost('username');
        $usernameValid = $model->getUsername($username);

        if ($emailvalid and $idValid) {
            $error = 'NIK dan Email sudah terdaftar';
            session()->setFlashdata('error', '<br><small class="red-text">
                ' . $error . '</small>');
            echo view('registrasi/registrasi', $data);
            die;
        }
        if ($idValid) {
            $error = 'NIK sudah terdaftar';
            session()->setFlashdata('error', '<br><small class="red-text">
                    ' . $error . '</small>');
            echo view('registrasi/registrasi', $data);
            die;
        }
        if ($emailvalid) {
            $error = 'Email sudah terdaftar';
            session()->setFlashdata('error', '<br><small class="red-text">
                    ' . $error . '</small>');
            echo view('registrasi/registrasi', $data);
            die;
        }
        if ($usernameValid) {
            $error = 'username sudah dipakai';
            session()->setFlashdata('error', '<br><small class="red-text">
                    ' . $error . '</small>');
            echo view('registrasi/registrasi', $data);
            die;
        }

        if ($this->form_validation->run($data, 'registrasi') == FALSE) {
            $error = $this->form_validation->ListErrors();
            session()->setFlashdata('error', '<br><small class="red-text">
            ' . $error . '</small>');
            echo view('registrasi/registrasi', $data);
        } else {
            $data['password'] = $password;
            unset($data['password2']);
            $model->tambah($data);
            session()->setFlashdata('tipe', 'pengguna');
            session()->setFlashdata('success', 'ditambahkan');
            return redirect()->to('/login');
        }
    }
}
