<?php

namespace App\Models;

use CodeIgniter\Model;

class KursiModel extends Model
{
    protected $table = 'kursi';
    protected $primaryKey = 'kd_kursi';

    public function buatid()
    {
        $query = $this->db->query('SELECT max(kd_kursi) as maxKode FROM kursi');

        $results = $query->getResultArray();
        foreach ($results as $row) {
            $maxKode = $row['maxKode'];
        }
        $noUrut = (int) substr($maxKode, 1, 3);
        $noUrut++;

        $char = "K";
        $kode = $char . sprintf("%03s", $noUrut);

        return $kode;
    }

    public function getId($id)
    {
        return $this->db->table($this->table)->getWhere(['kd_kursi' => $id])->getRow();
    }


    public function tambahKursi($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;;
    }

    public function updateKursi($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('kd_kursi' => $id));
        return $query;
    }


    public function hapusKursi($id)
    {
        $query = $this->db->table($this->table)->delete(array('kd_kursi' => $id));
        return $query;
    }

    public function getRuangan()
    {
        $query = $this->db->query('SELECT * FROM ruangan ')->getResultArray();
        return $query;
    }
}
