<?php

namespace App\Models;

use CodeIgniter\Model;

class PenayanganModel extends Model
{
    protected $table = 'penayangan';
    protected $primaryKey = 'kd_penayangan';

    public function buatid()
    {
        $query = $this->db->query('SELECT max(kd_penayangan) as maxKode FROM penayangan');

        $results = $query->getResultArray();
        foreach ($results as $row) {
            $maxKode = $row['maxKode'];
        }
        $noUrut = (int) substr($maxKode, 1, 3);
        $noUrut++;

        $char = "P";
        $kode = $char . sprintf("%03s", $noUrut);

        return $kode;
    }

    public function getData()
    {
        $query = $this->db->query('SELECT kd_penayangan,tanggal,waktu_mulai,kd_ruangan,judul,tahun,durasi,sinopsis,gambar FROM penayangan INNER JOIN film ON penayangan.kd_film=film.kd_film WHERE CONCAT(penayangan.tanggal," ",penayangan.waktu_mulai)>=now()')->getResultArray();
        return $query;
    }
    public function getTime()
    {
        $query = $this->db->query('SELECT  kd_penayangan,tanggal,waktu_mulai,kd_ruangan,judul,tahun,durasi,sinopsis,gambar FROM penayangan INNER JOIN film ON penayangan.kd_film=film.kd_film WHERE CONCAT(penayangan.tanggal," ",penayangan.waktu_mulai)<=now() and CONCAT(penayangan.tanggal," ",ADDTIME(waktu_mulai,durasi))>=now()')->getResultArray();
        return $query;
    }

    public function getDataWhere($tgl)
    {
        $query = $this->db->query("SELECT kd_penayangan,tanggal,waktu_mulai,kd_ruangan,judul,tahun,durasi,sinopsis,gambar FROM penayangan INNER JOIN film ON penayangan.kd_film=film.kd_film WHERE penayangan.tanggal='$tgl'")->getResultArray();
        return $query;
    }

    public function getFK($id, $table)
    {
        $query = $this->db->query("SELECT $id FROM $table")->getResultArray();
        return $query;
    }

    public function getId($id)
    {
        return $this->db->table($this->table)->getWhere(['kd_penayangan' => $id])->getRow();
    }




    public function tambahPenayangan($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updatePenayangan($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('kd_Penayangan' => $id));
        return $query;
    }


    public function hapusPenayangan($id)
    {
        $query = $this->db->table($this->table)->delete(array('kd_penayangan' => $id));
        return $query;
    }
}
