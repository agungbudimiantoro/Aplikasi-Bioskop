<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model
{
    public function getPengguna()
    {
        $query = $this->db->query('SELECT * FROM pengguna ')->getResultArray();
        return $query;
    }
    public function getAdmin()
    {
        $query = $this->db->query('SELECT * FROM admin ')->getResultArray();
        return $query;
    }
    public function getKursi()
    {
        $query = $this->db->query('SELECT * FROM kursi ORDER BY kd_kursi')->getResultArray();
        return $query;
    }
    public function getRuangan()
    {
        $query = $this->db->query('SELECT * FROM ruangan ')->getResultArray();
        return $query;
    }
    public function getFilm()
    {
        $query = $this->db->query('SELECT * FROM film ')->getResultArray();
        return $query;
    }

    // penayangan

    public function getPenayangan()
    {
        $query = $this->db->query("SELECT * FROM penayangan")->getResultArray();
        return $query;
    }
    public function getPenayanganTgl($tanggal)
    {
        $query = $this->db->query("SELECT * FROM penayangan WHERE tanggal = '$tanggal'")->getResultArray();
        return $query;
    }
    public function getPenayanganBulan($bulan, $tahun)
    {
        $query = $this->db->query("SELECT * FROM penayangan WHERE month(tanggal) = '$bulan' and year(tanggal) = '$tahun'")->getResultArray();
        return $query;
    }
    public function getPenayanganTahun($tahun)
    {
        $query = $this->db->query("SELECT * FROM penayangan WHERE year(tanggal) = '$tahun'")->getResultArray();
        return $query;
    }

    //penjualan

    public function getPenjualan()
    {
        $query = $this->db->query("SELECT * FROM transaksi WHERE metode ='penjualan' ORDER BY kd_transaksi ASC ")->getResultArray();
        return $query;
    }
    public function getPenjualanTgl($tanggal)
    {
        $query = $this->db->query("SELECT * FROM transaksi ORDER BY kd_transaksi ASC WHERE metode = 'penjualan' and tanggal = '$tanggal'  ORDER BY kd_transaksi ASC")->getResultArray();
        return $query;
    }
    public function getPenjualanBulan($bulan, $tahun)
    {
        $query = $this->db->query("SELECT * FROM transaksi WHERE metode = 'penjualan' and month(tanggal) = '$bulan' and year(tanggal) = '$tahun'  ORDER BY kd_transaksi ASC")->getResultArray();
        return $query;
    }
    public function getPenjualanTahun($tahun)
    {
        $query = $this->db->query("SELECT * FROM transaksi WHERE metode = 'penjualan' and year(tanggal) = '$tahun' ORDER BY kd_transaksi ASC")->getResultArray();
        return $query;
    }

    // pemesanan

    public function getPemesanan()
    {
        $query = $this->db->query("SELECT * FROM transaksi WHERE metode = 'pemesanan'  ORDER BY kd_transaksi ASC")->getResultArray();
        return $query;
    }
    public function getPemesananTgl($tanggal)
    {
        $query = $this->db->query("SELECT * FROM transaksi WHERE metode = 'pemesanan' and tanggal = '$tanggal' ORDER BY kd_transaksi ASC ")->getResultArray();
        return $query;
    }
    public function getPemesananBulan($bulan, $tahun)
    {
        $query = $this->db->query("SELECT * FROM transaksi WHERE metode = 'pemesanan' and month(tanggal) = '$bulan' and year(tanggal) = '$tahun'")->getResultArray();
        return $query;
    }
    public function getPemesananTahun($tahun)
    {
        $query = $this->db->query("SELECT * FROM transaksi WHERE metode = 'pemesanan' and year(tanggal) = '$tahun'  ORDER BY kd_transaksi ASC")->getResultArray();
        return $query;
    }
    public function getNamaAdmin($username)
    {
        $query = $this->db->query("SELECT nama FROM admin Where username = '$username'")->getRow();
        return $query;
    }
}
