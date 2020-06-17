<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    public function getData($username, $table)
    {
        return $this->db->table($table)->getWhere(['username' => $username])->getRow();
    }
}
