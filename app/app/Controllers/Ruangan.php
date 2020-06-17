<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\RuanganModel;

class Ruangan extends BaseController
{
    public function index()
    {
        //cek session admin / pengguna
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }


        $pager = \Config\Services::pager();
        $model = new RuanganModel();
        $data = [
            'judul' => 'Admin - Ruangan',
            'ruangan' => $model->orderBy('kd_ruangan')->Paginate(5, 'konten'),
            'pager' => $model->pager,
            'nama' => $session->nama,
            'status' => $session->status,
            'foto' => $session->foto,
            'judul_utama' => 'Data Ruangan'
        ];
        echo view('templates/header', $data);
        echo view('ruangan/ruangan', $data);
        echo view('templates/footer');
    }

    public function tambah()
    {
        //cek session admin / pengguna
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }


        $model = new RuanganModel();
        helper('form');
        $this->form_validation = \Config\Services::validation();


        $data = [
            'kd_ruangan' => $model->buatid(),
            'no_ruangan' => $this->request->getPost('no_ruangan')
        ];


        if ($this->form_validation->run($data, 'ruangan') == FALSE) {
            $error = $this->form_validation->getError('no_ruangan');
            session()->setFlashdata('error', '<br><small class="red-text">
            ' . $error . '</small>');
            return redirect()->to('/ruangan');
        } else {
            $model->tambahRuangan($data);
            session()->setFlashdata('tipe', 'ruangan');
            session()->setFlashdata('success', 'ditambahkan');
            return redirect()->to('/ruangan');
        }
    }

    public function cari()
    {
        //cek session admin / pengguna
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }

        $model = new RuanganModel();
        $cari = $this->request->getPost('cari');
        $pager = \Config\Services::pager();

        if (!$cari) {
            return redirect()->to('/ruangan');
        }

        $data = [
            'judul' => 'Admin - Ruangan',
            'ruangan' => $model->orderBy('kd_ruangan')->LIKE('kd_ruangan', $cari, 'both')->orLike('no_ruangan', $cari, 'both')->Paginate(5, 'konten'),
            'pager' => $model->pager,
            'nama' => $session->nama,
            'status' => $session->status,
            'foto' => $session->foto,
            'judul_utama' => 'Data Ruangan'
        ];
        echo view('templates/header', $data);
        echo view('ruangan/ruangan', $data);
        echo view('templates/footer');
    }

    public function ubah($id)
    {        //cek session admin / pengguna
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }

        $model = new RuanganModel();
        helper('form');
        $this->form_validation = \Config\Services::validation();
        $data = [
            'judul' => 'Admin - Ruangan',
            'ruangan' => $model->getId($id),
            'nama' => $session->nama,
            'status' => $session->status,
            'foto' => $session->foto,
            'judul_utama' => 'Ubah Ruangan',
        ];

        echo view('templates/header', $data);
        echo view('ruangan/editRuangan', $data);
        echo view('templates/footer');
    }

    public function update()
    {
        //cek session admin / pengguna
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }

        $model = new RuanganModel();
        helper('form');
        $this->form_validation = \Config\Services::validation();

        $data = [
            'kd_ruangan' => $this->request->getPost('kd_ruangan'),
            'no_ruangan' => $this->request->getPost('no_ruangan')
        ];
        $id =  $this->request->getPost('kd_ruangan');

        if ($this->form_validation->run($data, 'ruangan') == FALSE) {
            $id =  $this->request->getPost('kd_ruangan');
            $error = $this->form_validation->getError('no_ruangan');
            session()->setFlashdata('error', '<br><small class="red-text">
            ' . $error . '</small>');
            return redirect()->to($_SERVER['HTTP_REFERER']);
        } else {
            $model->updateRuangan($data, $id);
            session()->setFlashdata('tipe', 'ruangan');
            session()->setFlashdata('success', 'diubah');
            return redirect()->to('http://localhost:8080/Ruangan/');
        }
    }


    public function hapus($id)
    {
        //cek session admin / pengguna
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }

        $model = new RuanganModel();
        $model->hapusRuangan($id);
        session()->setFlashdata('tipe', 'ruangan');
        session()->setFlashdata('success', 'dihapus');
        return redirect()->to('/ruangan');
    }
}


// $validation =  \Config\Services::validation();
// helper(['form', 'url']);



// $val = $this->validate(
//     ['no_ruangan' => [
//         'label'  => 'Nomor Ruangan',
//         'rules' => 'required|min_length[2]',
//         'errors' => [
//             'required' => 'no data  kosong',
//             'min_length' => 'no data terlalu pendek'
//         ]
//     ]],
//     ['kd_ruangan' => [
//         'label'  => 'kode Ruangan',
//         'rules' => 'required|min_length[3]',
//         'errors' => [
//             'required' => 'kd data kosong',
//             'min_length' => 'kd data terlalu pendek'
//         ]
//     ]]
// );

// if ($validation->run()) {
//     echo "ossk";
// } else {
//     echo $validation->listErrors();
// }