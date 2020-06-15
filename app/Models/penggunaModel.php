<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggunaModel extends Model
{
    protected $table = 'pengguna';

    public function getId($id)
    {
        return $this->db->table($this->table)->getWhere(['NIK' => $id])->getRow();
    }
    public function updatePengguna($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('NIK' => $id));
        return $query;
    }
    public function getData($NIK)
    {
        return $this->db->table($this->table)->getWhere(['NIK' => $NIK])->getRow();
    }

    public function getEmail($email)
    {
        return $this->db->table($this->table)->getWhere(['email' => $email])->getRow();
    }
    public function getUsername($username)
    {
        return $this->db->table($this->table)->getWhere(['username' => $username])->getRow();
    }
}
