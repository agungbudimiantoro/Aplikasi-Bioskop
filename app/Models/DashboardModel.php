<?php

namespace App\Models;

use CodeIgniter\Model;

class DashboardModel extends Model
{

    public function getAdmin()
    {
        $query = $this->db->query('SELECT count(id_admin) as total FROM admin')->getRow();

        return $query;
    }
    public function getPengguna()
    {
        $query = $this->db->query('SELECT count(NIK) as total FROM pengguna')->getRow();

        return $query;
    }
    public function getRuangan()
    {
        $query = $this->db->query('SELECT count(kd_ruangan) as total FROM ruangan')->getRow();

        return $query;
    }
    public function getKursi()
    {
        $query = $this->db->query('SELECT count(kd_kursi) as total FROM kursi')->getRow();

        return $query;
    }
    public function getFilm()
    {
        $query = $this->db->query('SELECT count(kd_film) as total FROM film')->getRow();

        return $query;
    }
    public function getPenayangan()
    {
        $query = $this->db->query('SELECT count(kd_penayangan) as total FROM penayangan')->getRow();

        return $query;
    }
    public function getPemesanan()
    {
        $query = $this->db->query("SELECT count(kd_transaksi) as total FROM transaksi WHERE metode='pemesanan'")->getRow();

        return $query;
    }
    public function getPenjualan()
    {
        $query = $this->db->query("SELECT count(kd_transaksi) as total FROM transaksi WHERE metode='penjualan'")->getRow();

        return $query;
    }
    public function getNIK($username)
    {
        $query = $this->db->query("SELECT NIK FROM pengguna WHERE username='$username'")->getRow();

        return $query;
    }

    public function getTransaksiPengguna($NIK)
    {
        $query = $this->db->query("SELECT transaksi.kd_penayangan, transaksi.kd_transaksi, penayangan.kd_film, transaksi.status, transaksi.NIK, penayangan.tanggal, penayangan.waktu_mulai, penayangan.kd_ruangan, transaksi.kd_kursi, transaksi.harga FROM transaksi JOIN penayangan ON transaksi.kd_penayangan = penayangan.kd_penayangan WHERE NIK='$NIK' and status='belum dibayar' and CONCAT(penayangan.tanggal,' ',penayangan.waktu_mulai)>=now()")->getRow();
        return $query;
    }
}
