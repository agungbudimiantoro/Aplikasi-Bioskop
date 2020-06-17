<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileModel extends Model
{
    public function get($table, $id)
    {
        return $this->db->table($table)->getWhere(['username' => $id])->getRow();
    }
}
