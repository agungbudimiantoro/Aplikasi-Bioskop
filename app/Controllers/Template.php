<?php

namespace App\Controllers;

class Template extends BaseController
{
    public function index()
    {

        echo view('template/template');
    }
}
