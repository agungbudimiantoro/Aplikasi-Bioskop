<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\FilmModel;

class Film extends BaseController
{
    public function index()
    {

        //cek session admin / pengguna
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }

        $pager = \Config\Services::pager();
        $model = new FilmModel();
        $data = [
            'judul' => 'Admin - film',
            'nama' => $session->nama,
            'status' => $session->status,
            'film' => $model->orderBy('kd_film')->Paginate(6, 'konten'),
            'pager' => $model->pager,
            'foto' => $session->foto,
            'judul_utama' => 'Data film'
        ];
        echo view('templates/header', $data);
        echo view('film/film', $data);
        echo view('templates/footer');
    }

    public function bukaTambah()
    {
        //cek session admin / pengguna
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }


        helper('form');
        $data = [
            'judul' => 'Admin - Tambah Film',
            'nama' => $session->nama,
            'status' => $session->status,
            'foto' => $session->foto,
            'judul_utama' => 'Tambah Film'
        ];
        echo view('templates/header', $data);
        echo view('film/tambahFilm', $data);
        echo view('templates/footer');
    }

    public function tambah()
    {
        //cek session admin / pengguna
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }


        $model = new FilmModel();
        helper('form');
        $validation = \Config\Services::validation();
        //  set durasi ke time
        $durasi = $this->request->getPost('durasi');
        $jam = floor($durasi / 60);
        $menit = $durasi % 60;
        $durasi = "0$jam:$menit:00";
        // set image
        $avatar = $this->request->getFile('gambar');
        $avatar->move(ROOTPATH . 'public/uploads/film');
        $data = [
            'kd_film' => $model->buatid(),
            'judul' => $this->request->getPost('judul'),
            'tahun' => $this->request->getPost('tahun'),
            'durasi' => $durasi,
            'sinopsis' => $this->request->getPost('sinopsis'),
            'namagambar' => $this->request->getPost('namagambar')
        ];


        if ($validation->run($data, 'film') == FALSE) {
            $error = $validation->listErrors();
            session()->setFlashdata('error', '<br><small class="red-text">
            ' . $error . '</small>');
            $data = [
                'judul' => 'Admin - Tambah Film',
                'judul_utama' => 'Tambah Film',
                'nama' => $session->nama,
                'status' => $session->status,
                'foto' => $session->foto,
            ];
            echo view('templates/header', $data);
            echo view('film/tambahFilm', $data);
            echo view('templates/footer');
        } else {
            unset($data['namagambar']);
            $data['gambar'] = $avatar->getName();
            $model->tambahFilm($data);
            session()->setFlashdata('tipe', 'film');
            session()->setFlashdata('success', 'ditambahkan');
            return redirect()->to('/film');
        }
    }

    public function cari()
    {
        //cek session admin / pengguna
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }


        $model = new FilmModel();
        $cari = $this->request->getPost('cari');
        $pager = \Config\Services::pager();

        if (!$cari) {
            return redirect()->to('/film');
        }

        $data = [
            'judul' => 'Admin - film',
            'nama' => $session->nama,
            'status' => $session->status,
            'film' => $model->orderBy('kd_film')->LIKE('kd_film', $cari, 'both')->Paginate(6, 'konten'),
            'pager' => $model->pager,
            'judul_utama' => 'Data Film',
            'foto' => $session->foto,
        ];
        echo view('templates/header', $data);
        echo view('film/film', $data);
        echo view('templates/footer');
    }



    public function ubah($id)
    {
        //cek session admin / pengguna
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }


        $model = new FilmModel();
        helper('form');
        $this->form_validation = \Config\Services::validation();
        $data = [
            'judul' => 'Admin - film',
            'nama' => $session->nama,
            'status' => $session->status,
            'film' => $model->getId($id),
            'foto' => $session->foto,
            'judul_utama' => 'Ubah film',
        ];

        echo view('templates/header', $data);
        echo view('film/editFilm', $data);
        echo view('templates/footer');
    }

    public function update()
    {
        //cek session admin / pengguna
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }

        $model = new FilmModel();
        helper('form');
        $this->form_validation = \Config\Services::validation();

        //  set durasi ke time
        $durasi = $this->request->getPost('durasi');
        $jam = floor($durasi / 60);
        $menit = $durasi % 60;
        $durasi = "0$jam:$menit:00";
        //set image
        $avatar = $this->request->getFile('gambar');
        $gambar = $avatar->getName();
        if ($gambar == NULL) {
            $gambar = $this->request->getPost('namagambar');
        } else {
            $avatar->move(ROOTPATH . 'public/uploads/film');
        }

        $id =  $this->request->getPost('kd_film');
        $data = [
            'kd_film' => $id,
            'judul' => $this->request->getPost('judul'),
            'tahun' => $this->request->getPost('tahun'),
            'durasi' => $durasi,
            'sinopsis' => $this->request->getPost('sinopsis'),
            'gambar' => $gambar,
            'namagambar' => $this->request->getPost('namagambar')
        ];


        if ($this->form_validation->run($data, 'film') == FALSE) {
            $error = $this->form_validation->listErrors();
            session()->setFlashdata('error', '<br><small class="red-text">
            ' . $error . '</small>');
            return redirect()->to($_SERVER['HTTP_REFERER']);;
        } else {
            unset($data['namagambar']);
            $model->updateFilm($data, $id);
            session()->setFlashdata('tipe', 'film');
            session()->setFlashdata('success', 'diubah');
            return redirect()->to('http://localhost:8080/film/');
        }
    }

    public function hapus($id)
    {
        //cek session admin / pengguna
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }

        $model = new FilmModel();
        $model->hapusFilm($id);
        session()->setFlashdata('tipe', 'film');
        session()->setFlashdata('success', 'dihapus');
        return redirect()->to('/film');
    }
}
