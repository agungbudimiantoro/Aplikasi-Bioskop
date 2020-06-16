<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\TransaksiModel;

class Transaksi extends BaseController
{

    public function cekkursi($id)
    {
        //cek session admin / pengguna
        $session = \Config\Services::session();
        $model = new TransaksiModel();
        $transaksi = $model->cekTransaksi($id);
        $ruangan = $model->cekRuangan($id);
        $ruangan = $ruangan->kd_ruangan;
        $kursi = $model->cekKursi($ruangan, $transaksi);
        $data = [
            'judul' => 'Pilih kursi',
            'nama' => $session->nama,
            'status' => $session->status,
            'transaksi' => $transaksi,
            'kursi' => $kursi,
            'foto' => $session->foto,
            'penayangan' => $id,
            'judul_utama' => 'Pilih Kursi'
        ];
        echo view('templates/headerp', $data);
        echo view('transaksi/cekKursi', $data);
        echo view('templates/footer');
    }
    public function tambahPemesanan()
    {
        $session = \Config\Services::session();
        $model = new TransaksiModel();
        $kursi = $this->request->getPost('kursi');
        $penayangan = $this->request->getPost('penayangan');
        $ruangan = $model->cekRuangan($penayangan);
        $film = $model->cekFilm($penayangan);

        $data = [
            'judul' => 'Pesan Tiket',
            'judul_utama' => 'Pesan Tiket',
            'penayangan' => $penayangan,
            'nama' => $session->nama,
            'status' => $session->status,
            'foto' => $session->foto,
            'film' => $film,
            'ruangan' => $ruangan,
            'kursi' => $kursi,
        ];

        echo view('templates/headerp', $data);
        echo view('transaksi/tambahPemesanan', $data);
        echo view('templates/footer');
    }

    public function pesanTiket()
    {
        $this->form_validation = \Config\Services::validation();
        $session = \Config\Services::session();
        $model = new TransaksiModel();
        $kursi = $this->request->getPost('kursi');
        $penayangan = $this->request->getPost('penayangan');
        $nik = $model->getNIK($session->username);
        $data = [
            'kd_transaksi' => $model->buatid(),
            'NIK' => $nik->NIK,
            'kd_kursi' => $kursi,
            'kd_penayangan' => $penayangan,
            'tanggal' => date('Y-m-d'),
            'harga' => 32000,
            'diskon' => 0,
            'status' => 'belum dibayar',
            'metode' => 'pemesanan'
        ];
        if ($this->form_validation->run($data, 'transaksi') == FALSE) {
            $error = $this->form_validation->ListErrors();
            session()->setFlashdata('error', '<br><small class="red-text">
            ' . $error . '</small>');
            return redirect()->to('/profile');
        } else {
            $model->tambahTransaksi($data);
            session()->setFlashdata('tipe', 'tiket');
            session()->setFlashdata('success', 'dipesan');
            return redirect()->to('/profile');
        }
    }
}
