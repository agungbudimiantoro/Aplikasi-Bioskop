<?php

namespace App\Controllers;

use App\Models\LoginModel;

class Login extends BaseController
{
    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        echo view('login/login');
    }
    public function admin()
    {
        echo view('login/loginAdmin');
    }
    public function login()
    {
        $model = new LoginModel();
        helper('form');
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $cek = $model->getData($username, 'pengguna');
        $data = ['username' => $username];



        //cek username
        if ($cek) {
            //password
            if (password_verify($password, $cek->password)) {
                $data = [
                    'username' => $username,
                    'status' => 'pengguna',
                    'nama' => $cek->nama,
                    'foto' => $cek->foto
                ];
                $this->session->set($data);
                return redirect()->to('/dashboard');
            } else {
                $error = 'Username atau Password Salah';
                session()->setFlashdata('error', '<br><small class="red-text">
                ' . $error . '</small>');
                return redirect()->to('/login/index');
            }
        } else {
            $error = 'Username atau Password Salah';
            session()->setFlashdata('error', '<br><small class="red-text">
                ' . $error . '</small>');
            return redirect()->to('/login/index');
        }
    }

    public function loginAdmin()
    {
        $model = new LoginModel();
        helper('form');
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $cek = $model->getData($username, 'admin');
        $data = ['username' => $username];

        //cek username
        if ($cek) {
            //password
            if (password_verify($password, $cek->password)) {
                $data = [
                    'username' => $username,
                    'status' => 'admin',
                    'nama' => $cek->nama,
                    'foto' => 'default.jpg'
                ];
                $this->session->set($data);
                return redirect()->to('/dashboard');
            } else {
                $error = 'Username atau Password Salah';
                session()->setFlashdata('error', '<br><small class="red-text">
                ' . $error . '</small>');
                return redirect()->to('/login/Admin');
            }
        } else {
            $error = 'Username atau Password Salah';
            session()->setFlashdata('error', '<br><small class="red-text">
                ' . $error . '</small>');
            return redirect()->to('/login/Admin');
        }
    }

    public function logout()
    {
        session_destroy();
        return redirect()->to('/home');
    }
}
