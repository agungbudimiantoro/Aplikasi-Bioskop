<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\LaporanModel;
use \Mpdf\Mpdf;

class Laporan extends BaseController
{
    public function index()
    {

        //cek session admin / pengguna
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }
        $data = [
            'judul' => 'Cetak laporan',
            'nama' => $session->nama,
            'status' => $session->status,
            'foto' => $session->foto,
            'judul_utama' => 'Cetak Laporan'
        ];
        echo view('templates/header', $data);
        echo view('laporan/laporan', $data);
        echo view('templates/footer');
    }

    public function cek()
    {
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }
        $cek = $this->request->getPost('cek');
        $sortir = $this->request->getPost('sortir');

        if ($sortir == NULL) {
            return redirect()->to("/laporan/$cek");
        } else {
            $data = [
                'judul' => 'Cetak laporan',
                'nama' => $session->nama,
                'status' => $session->status,
                'foto' => $session->foto,
                'laporan' => $cek,
                'sortir' => $sortir,
                'judul_utama' => 'Cetak Laporan'
            ];
            echo view('templates/header', $data);
            echo view('laporan/laporanSortir', $data);
            echo view('templates/footer');
        }
    }


    public function pengguna()
    {
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }
        $mpdf = new Mpdf(['mode' => 'utf-8']);
        $model = new LaporanModel();
        $username = $session->username;
        $data = [
            'judul' => 'Laporan Data Pengguna',
            'data' => $model->getPengguna(),
            'admin' => $model->getNamaAdmin($username)
        ];
        $mpdf->WriteHTML(view('laporan/laporanPengguna', $data));
        return redirect()->to($mpdf->Output('htmltopdf.pdf', 'I'));
    }

    public function admin()
    {
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }
        $username = $session->username;
        $mpdf = new Mpdf(['mode' => 'utf-8']);
        $model = new LaporanModel();
        $data = [
            'judul' => 'Laporan Data Admin',
            'data' => $model->getAdmin(),
            'admin' => $model->getNamaAdmin($username)
        ];
        $mpdf->WriteHTML(view('laporan/laporanAdmin', $data));
        return redirect()->to($mpdf->Output('htmltopdf.pdf', 'I'));
    }

    public function kursi()
    {
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }
        $username = $session->username;
        $mpdf = new Mpdf(['mode' => 'utf-8']);
        $model = new LaporanModel();
        $data = [
            'judul' => 'Laporan Data Kursi',
            'data' => $model->getKursi(),
            'admin' => $model->getNamaAdmin($username)
        ];
        $mpdf->WriteHTML(view('laporan/laporanKursi', $data));
        return redirect()->to($mpdf->Output('htmltopdf.pdf', 'I'));
    }

    public function ruangan()
    {
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }
        $username = $session->username;
        $mpdf = new Mpdf(['mode' => 'utf-8']);
        $model = new LaporanModel();
        $data = [
            'judul' => 'Laporan Data Ruangan',
            'data' => $model->getRuangan(),
            'admin' => $model->getNamaAdmin($username)
        ];
        $mpdf->WriteHTML(view('laporan/laporanRuangan', $data));
        return redirect()->to($mpdf->Output('htmltopdf.pdf', 'I'));
    }

    public function film()
    {
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }
        $username = $session->username;
        $mpdf = new Mpdf(['mode' => 'utf-8']);
        $model = new LaporanModel();
        $data = [
            'judul' => 'Laporan Data Film',
            'data' => $model->getFilm(),
            'admin' => $model->getNamaAdmin($username)
        ];
        $mpdf->WriteHTML(view('laporan/laporanFilm', $data));
        return redirect()->to($mpdf->Output('htmltopdf.pdf', 'I'));
    }

    public function penayangan()
    {
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }
        $username = $session->username;
        $mpdf = new Mpdf(['mode' => 'utf-8']);
        $model = new LaporanModel();

        $tanggal = $this->request->getPost('hari');
        $bulan = $this->request->getPost('bulan');
        $tahun = $this->request->getPost('tahun');

        $data = [
            'judul' => 'Laporan Data Penayangan',
            'data' => $model->getPenayangan(),
            'admin' => $model->getNamaAdmin($username)
        ];
        if ($tanggal) {
            $data['data'] = $model->getPenayanganTgl($tanggal);
        }
        if ($tahun) {
            $data['data'] = $model->getPenayanganTahun($tahun);
        }
        if ($bulan) {
            $data['data'] = $model->getPenayanganBulan($bulan, $tahun);
        }
        $mpdf->WriteHTML(view('laporan/laporanPenayangan', $data));
        return redirect()->to($mpdf->Output('htmltopdf.pdf', 'I'));
    }

    public function penjualan()
    {
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }
        $username = $session->username;
        $mpdf = new Mpdf(['mode' => 'utf-8']);
        $model = new LaporanModel();

        $tanggal = $this->request->getPost('hari');
        $bulan = $this->request->getPost('bulan');
        $tahun = $this->request->getPost('tahun');

        $data = [
            'judul' => 'Laporan Data Penjualan',
            'data' => $model->getPenjualan(),
            'admin' => $model->getNamaAdmin($username)
        ];
        if ($tanggal) {
            $data['data'] = $model->getPenjualanTgl($tanggal);
        }
        if ($tahun) {
            $data['data'] = $model->getPenjualanTahun($tahun);
        }
        if ($bulan) {
            $data['data'] = $model->getPenjualanBulan($bulan, $tahun);
        }
        $mpdf->WriteHTML(view('laporan/laporanTransaksi', $data));
        return redirect()->to($mpdf->Output('htmltopdf.pdf', 'I'));
    }

    public function pemesanan()
    {
        $session = \Config\Services::session();
        if ($session->status != 'admin') {
            return redirect()->to('/dashboard');
        }
        $username = $session->username;
        $mpdf = new Mpdf(['mode' => 'utf-8']);
        $model = new LaporanModel();

        $tanggal = $this->request->getPost('hari');
        $bulan = $this->request->getPost('bulan');
        $tahun = $this->request->getPost('tahun');

        $data = [
            'judul' => 'Laporan Data Pemesanan',
            'data' => $model->getPemesanan(),
            'admin' => $model->getNamaAdmin($username)
        ];
        if ($tanggal) {
            $data['data'] = $model->getPemesananTgl($tanggal);
        }
        if ($tahun) {
            $data['data'] = $model->getPemesananTahun($tahun);
        }
        if ($bulan) {
            $data['data'] = $model->getPemesananBulan($bulan, $tahun);
        }
        $mpdf->WriteHTML(view('laporan/laporanTransaksi', $data));
        return redirect()->to($mpdf->Output('htmltopdf.pdf', 'I'));
    }
}
