<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\KursiModel;

class Kursi extends BaseController
{
    public function index()
    {
        //cek session admin / pengguna
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }

        $pager = \Config\Services::pager();
        $model = new KursiModel();
        $data = [
            'judul' => 'Admin - kursi',
            'kursi' => $model->orderBy('kd_kursi')->Paginate(5, 'konten'),
            'pager' => $model->pager,
            'judul_utama' => 'Data kursi',
            'nama' => $session->nama,
            'status' => $session->status,
            'foto' => $session->foto,
            'ruangan' => $model->getRuangan()
        ];
        echo view('templates/header', $data);
        echo view('kursi/kursi', $data);
        echo view('templates/footer');
    }

    public function tambah()
    {
        //cek session admin / pengguna
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }

        $model = new kursiModel();
        helper('form');
        $validation = \Config\Services::validation();


        $data = [
            'kd_kursi' => $model->buatid(),
            'no_kursi' => $this->request->getPost('no_kursi'),
            'kd_ruangan' => $this->request->getPost('kd_ruangan')
        ];


        if ($validation->run($data, 'kursi') == FALSE) {
            $error = $validation->listErrors();
            session()->setFlashdata('error', '<br><small class="red-text">
            ' . $error . '</small>');
            return redirect()->to('/kursi');
        } else {
            $model->tambahKursi($data);
            session()->setFlashdata('tipe', 'kursi');
            session()->setFlashdata('success', 'ditambahkan');
            return redirect()->to('/kursi');
        }
    }

    public function cari()
    {
        //cek session admin / pengguna
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }

        $model = new KursiModel();
        $cari = $this->request->getPost('cari');
        $pager = \Config\Services::pager();

        if (!$cari) {
            return redirect()->to('/kursi');
        }

        $data = [
            'judul' => 'Admin - kursi',
            'kursi' => $model->orderBy('kd_kursi')->LIKE('kd_kursi', $cari, 'both')->orLike('no_kursi', $cari, 'both')->Paginate(5, 'konten'),
            'pager' => $model->pager,
            'nama' => $session->nama,
            'status' => $session->status,
            'foto' => $session->foto,
            'judul_utama' => 'Data kursi'
        ];
        echo view('templates/header', $data);
        echo view('kursi/kursi', $data);
        echo view('templates/footer');
    }

    public function ubah($id)
    {
        //cek session admin / pengguna
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }

        $model = new KursiModel();
        helper('form');
        $this->form_validation = \Config\Services::validation();
        $data = [
            'judul' => 'Admin - kursi',
            'kursi' => $model->getId($id),
            'judul_utama' => 'Ubah kursi',
            'nama' => $session->nama,
            'status' => $session->status,
            'foto' => $session->foto,
            'ruangan' => $model->getRuangan()
        ];

        echo view('templates/header', $data);
        echo view('kursi/editKursi', $data);
        echo view('templates/footer');
    }

    public function update()
    {
        //cek session admin / pengguna
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }

        $model = new KursiModel();
        helper('form');
        $this->form_validation = \Config\Services::validation();

        $data = [
            'kd_kursi' => $this->request->getPost('kd_kursi'),
            'no_kursi' => $this->request->getPost('no_kursi'),
            'kd_ruangan' => $this->request->getPost('kd_ruangan')
        ];

        $id =  $this->request->getPost('kd_kursi');

        if ($this->form_validation->run($data, 'kursi') == FALSE) {
            $error = $this->form_validation->listErrors();
            session()->setFlashdata('error', '<br><small class="red-text">
            ' . $error . '</small>');
            return redirect()->to($_SERVER['HTTP_REFERER']);
        } else {
            $model->updateKursi($data, $id);
            session()->setFlashdata('tipe', 'kursi');
            session()->setFlashdata('success', 'diubah');
            return redirect()->to('http://localhost:8080/Kursi/');
        }
    }


    public function hapus($id)
    {
        //cek session admin / pengguna
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }

        $model = new KursiModel();
        $model->hapusKursi($id);
        session()->setFlashdata('tipe', 'kursi');
        session()->setFlashdata('success', 'dihapus');
        return redirect()->to('/kursi');
    }
}
