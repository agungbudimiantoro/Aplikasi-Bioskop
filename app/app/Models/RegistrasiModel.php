<?php

namespace App\Models;

use CodeIgniter\Model;

class RegistrasiModel extends Model
{
    protected $table = 'pengguna';
    protected $primaryKey = 'NIK';
    public function buatid()
    {
        $query = $this->db->query('SELECT max(NIK) as maxKode FROM pengguna');

        $results = $query->getResultArray();
        foreach ($results as $row) {
            $maxKode = $row['maxKode'];
        }
        $noUrut = (int) substr($maxKode, 3, 3);
        $noUrut++;

        $char = "PLG";
        $kode = $char . sprintf("%03s", $noUrut);

        return $kode;
    }

    public function getId($id)
    {
        return $this->db->table($this->table)->getWhere(['NIK' => $id])->getRow();
    }
    public function getEmail($email)
    {
        return $this->db->table($this->table)->getWhere(['email' => $email])->getRow();
    }
    public function getUsername($username)
    {
        return $this->db->table($this->table)->getWhere(['username' => $username])->getRow();
    }



    public function tambah($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;;
    }
}
