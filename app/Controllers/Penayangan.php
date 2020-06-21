<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PenayanganModel;

class Penayangan extends BaseController
{
    public function index()
    {
        //cek session admin / pengguna
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }
        $model = new PenayanganModel();
        $data = [
            'judul' => 'Admin - penayangan',
            'judul_utama' => 'Data penayangan',
            'penayangan' => $model->getPenayangan(),
            'nama' => $session->nama,
            'status' => $session->status,
            'foto' => $session->foto
        ];

        echo view('templates/header', $data);
        echo view('penayangan/penayangan', $data);
        echo view('templates/footer');
    }
    public function akanTayang()
    {
        //cek session admin / pengguna
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }
        $model = new PenayanganModel();
        $data = [
            'judul' => 'Admin - penayangan',
            'judul_utama' => 'Data penayangan',
            'penayangan' => $model->getData(),
            'nama' => $session->nama,
            'status' => $session->status,
            'foto' => $session->foto
        ];

        echo view('templates/header', $data);
        echo view('penayangan/akanTayang', $data);
        echo view('templates/footer');
    }

    public function sedangTayang()
    {
        //cek session admin / pengguna
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }
        $model = new PenayanganModel();
        $data = [
            'judul' => 'Admin - penayangan',
            'judul_utama' => 'Data penayangan',
            'tayang' => $model->getTime(),
            'nama' => $session->nama,
            'status' => $session->status,
            'foto' => $session->foto
        ];

        echo view('templates/header', $data);
        echo view('penayangan/sedangTayang', $data);
        echo view('templates/footer');
    }

    public function cari()
    {
        //cek session admin / pengguna
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }
        $cari = $this->request->getPost('cari');
        if (!$cari) {
            return redirect()->to('/penayangan');
        }
        $model = new PenayanganModel();
        $data = [
            'judul' => 'Admin - penayangan',
            'judul_utama' => 'Data penayangan',
            'penayangan' => $model->getDataWhere($cari),
            'tayang' => $model->getTime(),
            'nama' => $session->nama,
            'status' => $session->status,
            'foto' => $session->foto
        ];
        echo view('templates/header', $data);
        echo view('penayangan/penayangan', $data);
        echo view('templates/footer');
    }


    public function bukaTambah()
    {
        helper('form');
        $model = new PenayanganModel();
        //cek session admin / pengguna
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }

        $data = [
            'judul' => 'Admin - penayangan',
            'judul_utama' => 'Data penayangan',
            'nama' => $session->nama,
            'status' => $session->status,
            'foto' => $session->foto,
            'film' => $model->getFK('kd_film', 'film'),
            'ruangan' => $model->getFK('kd_ruangan', 'ruangan')
        ];

        echo view('templates/header', $data);
        echo view('penayangan/tambahPenayangan', $data);
        echo view('templates/footer');
    }

    public function ubah($id)
    {
        helper('form');
        $model = new PenayanganModel();
        //cek session admin / pengguna
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }

        $data = [
            'judul' => 'Admin - penayangan',
            'judul_utama' => 'Data penayangan',
            'penayangan' => $model->getId($id),
            'nama' => $session->nama,
            'status' => $session->status,
            'foto' => $session->foto,
            'film' => $model->getFK('kd_film', 'film'),
            'ruangan' => $model->getFK('kd_ruangan', 'ruangan')
        ];

        echo view('templates/header', $data);
        echo view('penayangan/editPenayangan', $data);
        echo view('templates/footer');
    }

    public function tambah()
    {
        $model = new PenayanganModel();
        helper('form');

        //cek session admin / pengguna
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }

        $this->form_validation = \Config\Services::validation();

        $data = [
            'kd_penayangan' => $model->buatid(),
            'kd_film' => $this->request->getPost('kd_film'),
            'kd_ruangan' => $this->request->getPost('kd_ruangan'),
            'kd_admin' => $session->username,
            'tanggal' => $this->request->getPost('tanggal'),
            'waktu_mulai' => $this->request->getPost('waktu_mulai'),
        ];


        if ($this->form_validation->run($data, 'penayangan') == FALSE) {
            $error = $this->form_validation->ListErrors();
            session()->setFlashdata('error', '<br><small class="red-text">
            ' . $error . '</small>');
            $data = [
                'judul' => 'Admin - penayangan',
                'judul_utama' => 'Data penayangan',
                'penayangan' => $model->getData(),
                'nama' => $session->nama,
                'status' => $session->status,
                'foto' => $session->foto,
                'film' => $model->getFK('kd_film', 'film'),
                'ruangan' => $model->getFK('kd_ruangan', 'ruangan')
            ];
            echo view('templates/header', $data);
            echo view('penayangan/tambahPenayangan', $data);
            echo view('templates/footer');
        } else {
            $model->tambahPenayangan($data);
            session()->setFlashdata('tipe', 'penayangan');
            session()->setFlashdata('success', 'ditambahkan');
            return redirect()->to('/penayangan');
        }
    }

    public function update()
    {
        //cek session admin / pengguna
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }


        $model = new PenayanganModel();
        helper('form');
        $this->form_validation = \Config\Services::validation();


        $data = [
            'kd_penayangan' => $this->request->getPost('kd_penayangan'),
            'kd_film' => $this->request->getPost('kd_film'),
            'kd_ruangan' => $this->request->getPost('kd_ruangan'),
            'tanggal' => $this->request->getPost('tanggal'),
            'waktu_mulai' => $this->request->getPost('waktu_mulai')
        ];

        $id =  $this->request->getPost('kd_penayangan');

        if ($this->form_validation->run($data, 'penayangan') == FALSE) {
            $error = $this->form_validation->listErrors();
            session()->setFlashdata('error', '<br><small class="red-text">
            ' . $error . '</small>');
            return redirect()->to($_SERVER['HTTP_REFERER']);;
        } else {
            $model->updatePenayangan($data, $id);
            session()->setFlashdata('tipe', 'admin');
            session()->setFlashdata('success', 'diubah');
            return redirect()->to('http://localhost:8080/penayangan/');
        }
    }
    public function hapus($id)
    {
        //cek session admin / pengguna
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }

        $model = new PenayanganModel();
        $model->hapusPenayangan($id);
        session()->setFlashdata('tipe', 'penayangan');
        session()->setFlashdata('success', 'dihapus');
        return redirect()->to('/penayangan');
    }

    //pelanggan
    public function Daftar()
    {
        $session = \Config\Services::session();
        $model = new PenayanganModel();
        $data = [
            'judul' => 'Admin - penayangan',
            'judul_utama' => 'Data penayangan',
            'penayangan' => $model->getData(),
            'tayang' => $model->getTime(),
            'nama' => $session->nama,
            'status' => $session->status,
            'foto' => $session->foto
        ];
        if ($session->status == 'admin') {
            echo view('templates/header', $data);
        } elseif ($session->status == 'pengguna') {
            echo view('templates/headerp', $data);
        }
        echo view('penayangan/daftarPenayangan', $data);
        echo view('penayangan/daftarSedangTayang', $data);
        echo view('templates/footer');
    }

    public function cariPenayangan()
    {
        //cek session admin / pengguna
        $session = \Config\Services::session();
        $cari = $this->request->getPost('cari');
        if (!$cari) {
            return redirect()->to('/penayangan');
        }
        $model = new PenayanganModel();
        $data = [
            'judul' => 'Admin - penayangan',
            'judul_utama' => 'Data penayangan',
            'penayangan' => $model->getDataWhere($cari),
            'tayang' => $model->getTime(),
            'nama' => $session->nama,
            'status' => $session->status,
            'foto' => $session->foto
        ];

        echo view('templates/headerp', $data);
        echo view('penayangan/daftarPenayangan', $data);
        echo view('penayangan/daftarSedangTayang', $data);
        echo view('templates/footer');
    }
}
