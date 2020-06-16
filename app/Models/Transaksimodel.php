<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey = 'kd_transaksi';


    public function buatid()
    {
        $query = $this->db->query('SELECT max(kd_transaksi) as maxKode FROM transaksi');

        $results = $query->getResultArray();
        foreach ($results as $row) {
            $maxKode = $row['maxKode'];
        }
        $noUrut = (int) substr($maxKode, 3, 3);
        $noUrut++;

        $char = "T";
        $kode = $char . sprintf("%03s", $noUrut);

        return $kode;
    }

    public function cekKursi($ruangan, $kd_kursi)
    {
        $query = $this->db->query("SELECT kd_kursi FROM kursi WHERE kd_ruangan='$ruangan' ORDER BY kd_kursi limit 36")->getResultArray();;
        return $query;
    }
    public function cekRuangan($penayangan)
    {
        $query = $this->db->query("SELECT kd_ruangan FROM penayangan WHERE kd_penayangan='$penayangan'")->getRow();
        return $query;
    }
    public function cekTransaksi($penayangan)
    {
        $query = $this->db->query("SELECT kd_kursi FROM transaksi WHERE kd_penayangan='$penayangan'")->getResultArray();
        return $query;
    }
    public function cekFilm($penayangan)
    {
        $query = $this->db->query("SELECT kd_film FROM penayangan WHERE kd_penayangan='$penayangan'")->getRow();
        return $query;
    }
    public function cekPengguna($username)
    {
        $query = $this->db->query("SELECT NIK FROM pengguna WHERE username='$username'")->getResultArray();
        return $query;
    }
    public function getNIk($username)
    {
        $query = $this->db->query("SELECT NIK FROM pengguna WHERE username='$username'")->getRow();
        return $query;
    }




    public function getId($id)
    {
        return $this->db->table($this->table)->getWhere(['kd_transaksi' => $id])->getRow();
    }

    public function tambahtransaksi($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updatetransaksi($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('kd_transaksi' => $id));
        return $query;
    }

    public function hapustransaksi($id)
    {
        $query = $this->db->table($this->table)->delete(array('kd_transaksi' => $id));
        return $query;
    }
}
