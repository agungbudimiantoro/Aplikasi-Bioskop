<?php

namespace App\Models;

use CodeIgniter\Model;

class FilmModel extends Model
{
    protected $table = 'film';
    protected $primaryKey = 'kd_film';

    public function buatid()
    {
        $query = $this->db->query('SELECT max(kd_film) as maxKode FROM film');

        $results = $query->getResultArray();
        foreach ($results as $row) {
            $maxKode = $row['maxKode'];
        }
        $noUrut = (int) substr($maxKode, 1, 3);
        $noUrut++;

        $char = "F";
        $kode = $char . sprintf("%03s", $noUrut);

        return $kode;
    }

    public function getId($id)
    {
        return $this->db->table($this->table)->getWhere(['kd_film' => $id])->getRow();
    }


    public function tambahFilm($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function updateFilm($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('kd_film' => $id));
        return $query;
    }


    public function hapusFilm($id)
    {
        $query = $this->db->table($this->table)->delete(array('kd_film' => $id));
        return $query;
    }
}
