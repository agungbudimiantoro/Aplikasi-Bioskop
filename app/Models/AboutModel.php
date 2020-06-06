<?php

namespace App\Models;

use CodeIgniter\Model;

class AboutModel extends Model
{
    protected $table = 'coba';
    protected $primarykey = 'email';

    public function getAll()
    {
        return $this->findAll();
    }
}
