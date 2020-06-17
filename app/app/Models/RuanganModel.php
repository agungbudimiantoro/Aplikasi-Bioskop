<?php

namespace App\Models;

use CodeIgniter\Model;

class RuanganModel extends Model
{
    protected $table = 'ruangan';
    protected $primaryKey = 'kd_ruangan';

    public function buatid()
    {
        $query = $this->db->query('SELECT max(kd_ruangan) as maxKode FROM ruangan');

        $results = $query->getResultArray();
        foreach ($results as $row) {
            $maxKode = $row['maxKode'];
        }
        $noUrut = (int) substr($maxKode, 1, 3);
        $noUrut++;

        $char = "R";
        $kode = $char . sprintf("%03s", $noUrut);

        return $kode;
    }

    public function getId($id)
    {
        return $this->db->table($this->table)->getWhere(['kd_ruangan' => $id])->getRow();
    }


    public function tambahRuangan($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;;
    }

    public function updateRuangan($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('kd_ruangan' => $id));
        return $query;
    }

    public function hapusRuangan($id)
    {
        $query = $this->db->table($this->table)->delete(array('kd_ruangan' => $id));
        return $query;
    }
    // tidak terpakai
    public function cariRuangan($cari)
    {
        $query = $this->db->query("SELECT * FROM ruangan WHERE kd_ruangan LIKE '%" . $cari . "%'")->getResultArray();
        return $query;
    }

    public function getRuangan()
    {
        $query = $this->db->query('SELECT * FROM ruangan ORDER BY SUBSTRING(kd_ruangan,1) ASC')->getResultArray();
        return $query;
    }
}
