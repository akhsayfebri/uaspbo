<?php

namespace App\Controllers;

use App\Models\jurusanModel;

class prodi extends BaseController
{
    public function read()
    {
        $jurusanModel = new jurusanModel();
        $data['prodis'] = $jurusanModel->findAll();

        return view('prodi/read', $data);
    }
}
