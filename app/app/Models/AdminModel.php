<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admin';
    protected $primaryKey = 'id_admin';


    public function buatid()
    {
        $query = $this->db->query('SELECT max(id_admin) as maxKode FROM admin');

        $results = $query->getResultArray();
        foreach ($results as $row) {
            $maxKode = $row['maxKode'];
        }
        $noUrut = (int) substr($maxKode, 3, 3);
        $noUrut++;

        $char = "ADM";
        $kode = $char . sprintf("%03s", $noUrut);

        return $kode;
    }

    public function getId($id)
    {
        return $this->db->table($this->table)->getWhere(['id_admin' => $id])->getRow();
    }

    public function tambahAdmin($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;;
    }

    public function updateAdmin($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id_admin' => $id));
        return $query;
    }

    public function hapusAdmin($id)
    {
        $query = $this->db->table($this->table)->delete(array('id_admin' => $id));
        return $query;
    }
}
