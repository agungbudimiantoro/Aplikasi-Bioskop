<?php

namespace App\Controllers;

use App\Models\DashboardModel;
use App\Models\LaporanModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $model = new DashboardModel();
        $model2 = new LaporanModel();

        $session = \Config\Services::session();
        if (!$session->username) {
            return redirect()->to('/login');
        }
        $data = [
            'judul' => 'Dashboard',
            'judul_utama' => 'Dashboard',
            'nama' => $session->nama,
            'status' => $session->status,
            'foto' => $session->foto,
        ];
        if ($session->status == 'admin') {
            $data['admin'] = $model->getAdmin();
            $data['film'] = $model->getFilm();
            $data['ruangan'] = $model->getRuangan();
            $data['kursi'] = $model->getKursi();
            $data['penayangan'] = $model->getPenayangan();
            $data['pengguna'] = $model->getPengguna();
            $data['pemesanan'] = $model->getPemesanan();
            $data['Penjualan'] = $model->getPenjualan();

            echo view('templates/header', $data);
            echo view('dashboard/dashboardAdmin', $data);
        } elseif ($session->status == 'pengguna') {
            $data['NIK'] = $model->getNIK($session->username);
            $data['transaksi'] = $model->getTransaksiPengguna($data['NIK']->NIK);
            $data['film'] = $model2->getTiketFilm($data['transaksi']->kd_film);
            $data['ruangan'] = $model2->getTiketRuangan($data['transaksi']->kd_ruangan);
            $data['kursi'] = $model2->getTiketKursi($data['transaksi']->kd_kursi);
            echo view('templates/headerp', $data);
            echo view('dashboard/dashboard', $data);
        }
        echo view('templates/footer');
    }
}
