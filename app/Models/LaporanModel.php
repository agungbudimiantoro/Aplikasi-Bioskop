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
    public function getPenayangan()
    {
        $query = $this->db->query("SELECT * FROM penayangan")->getResultArray();
        return $query;
    }
    public function getNamaAdmin($username)
    {
        $query = $this->db->query("SELECT nama FROM admin Where username = '$username'")->getRow();
        return $query;
    }
}
