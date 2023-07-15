<?php

namespace App\Controllers;

use App\Database\Migrations\JurusanMigrate;
use App\Models\JurusanModel;
use App\Models\Product;
use JetBrains\PhpStorm\Internal\ReturnTypeContract;

use function PHPSTORM_META\type;

class Jurusan extends BaseController
{

    public function index()
    {
        $JurusanModel = new JurusanModel();
        $jurusan['prodi'] = $JurusanModel->findAll();

        // return json_encode (
        //     array(
        //         "fakultas" =>$fakultas['fakultas']
        //     )
        //     );

        return view('index', $jurusan);
    }


    public function getAllJurusan()
    {
        $JurusanModel = new JurusanModel();
        $data['prodi'] = $JurusanModel->findAll();
        return json_encode(
            array(
                "data" => $data['prodi']
            )
        );
    }
}
