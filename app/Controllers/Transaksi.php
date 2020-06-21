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
        if ($session->status == 'admin') {
            echo view('templates/header', $data);
        } elseif ($session->status == 'pengguna') {
            echo view('templates/headerp', $data);
        }
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

        if ($session->status == 'admin') {
            echo view('templates/header', $data);
        } elseif ($session->status == 'pengguna') {
            echo view('templates/headerp', $data);
        }
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
        $data = [
            'kd_transaksi' => $model->buatid(),
            'kd_kursi' => $kursi,
            'kd_penayangan' => $penayangan,
            'tanggal' => date('Y-m-d'),
            'harga' => 32000,
            'diskon' => 0
        ];
        if ($session->status == 'admin') {
            $data['status'] = 'lunas';
            $data['metode'] = 'penjualan';
            $data['NIK'] = '1234567890123456';
        } elseif ($session->status == 'pengguna') {
            $nik = $model->getNIK($session->username);
            $data['status'] = 'belum dibayar';
            $data['metode'] = 'pemesanan';
            $data['NIK'] = $nik->NIK;
        }
        if ($this->form_validation->run($data, 'transaksi') == FALSE) {
            $error = $this->form_validation->ListErrors();
            session()->setFlashdata('error', '<br><small class="red-text">
            ' . $error . '</small>');
            return redirect()->to('/profile');
        } else {
            if ($session->status == 'pengguna') {
                if ($nik->status != 'aktif') {
                    $error = 'akun anda tidak dapat melakukan pemesanan, karena tidak melakukan pembayaran di pemesanan sebelumnya';
                    session()->setFlashdata('error', '<br><small class="red-text">
                    ' . $error . '</small>');
                    return redirect()->to('/dashboard');
                }
                $transaksi = $model->cekTransaksiPengguna($nik->NIK);
                if ($transaksi != null) {
                    $error = 'akun anda tidak dapat melakukan pemesanan, karena batas pemesanan hanya 1';
                    session()->setFlashdata('error', '<br><small class="red-text">
                    ' . $error . '</small>');
                    return redirect()->to('/dashboard');
                }
            }
            $model->tambahTransaksi($data);
            session()->setFlashdata('tipe', 'tiket');
            session()->setFlashdata('success', 'dipesan');
            if ($session->status == 'admin') {
                return redirect()->to('/laporan/tiket/' . $data['kd_transaksi']);
            } elseif ($session->status == 'pengguna') {
                return redirect()->to('/dashboard');
            }
        }
    }
    public function bayar()
    {
        $session = \Config\Services::session();
        $model = new TransaksiModel();

        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }

        $data = [
            'judul' => 'bayar Tiket',
            'nama' => $session->nama,
            'status' => $session->status,
            'foto' => $session->foto,
            'judul_utama' => 'Bayar Tiket'
        ];
        echo view('templates/header', $data);
        echo view('transaksi/bayarTiket', $data);
        echo view('templates/footer');
    }
    public function bayarTiket()
    {
        $session = \Config\Services::session();
        $model = new TransaksiModel();

        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }
        $kd = $this->request->getPost('kd_transaksi');
        $transaksi = $model->getId($kd);

        if ($transaksi == Null) {
            $error = 'Kode Pemesanan salah';
            session()->setFlashdata('error', '<br><small class="red-text">
            ' . $error . '</small>');
            return redirect()->to('/transaksi/bayar');
        }
        if ($transaksi->status == 'lunas') {
            $error = 'Kode Pemesanan salah';
            session()->setFlashdata('error', '<br><small class="red-text">
            ' . $error . '</small>');
            return redirect()->to('/transaksi/bayar');
        }
        if ($transaksi->metode == 'penjualan') {
            $error = 'Kode Pemesanan salah';
            session()->setFlashdata('error', '<br><small class="red-text">
            ' . $error . '</small>');
            return redirect()->to('/transaksi/bayar');
        }
        $data = [
            'judul' => 'bayar Tiket',
            'nama' => $session->nama,
            'status' => $session->status,
            'transaksi' => $transaksi,
            'foto' => $session->foto,
            'judul_utama' => 'Bayar Tiket'
        ];
        echo view('templates/header', $data);
        echo view('transaksi/bayarPemesanan', $data);
        echo view('templates/footer');
    }

    public function ambilTiket()
    {
        $session = \Config\Services::session();
        $model = new TransaksiModel();

        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }
        $kd = $this->request->getPost('kd_transaksi');
        $transaksi = $model->getId($kd);

        if ($transaksi == Null) {
            $error = 'Kode Pemesanan salah';
            session()->setFlashdata('error', '<br><small class="red-text">
            ' . $error . '</small>');
            return redirect()->to('/transaksi/bayar');
        }
        if ($transaksi->status == 'lunas') {
            $error = 'Kode Pemesanan salah';
            session()->setFlashdata('error', '<br><small class="red-text">
            ' . $error . '</small>');
            return redirect()->to('/transaksi/bayar');
        }
        if ($transaksi->status == 'penjualan') {
            $error = 'Kode Pemesanan salah';
            session()->setFlashdata('error', '<br><small class="red-text">
            ' . $error . '</small>');
            return redirect()->to('/transaksi/bayar');
        }

        $data = [
            'status' => 'lunas'
        ];

        $model->updateTransaksi($data, $kd);
        session()->setFlashdata('tipe', 'pemesanan');
        session()->setFlashdata('success', 'dibayar');
        return redirect()->to('/laporan/tiket/' . $kd);
    }
}
