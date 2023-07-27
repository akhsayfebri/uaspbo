<?php

namespace App\Controllers;

use App\Database\Migrations\JurusanMigrate;
use App\Models\JurusanModel;
use App\Models\FakultasModel;
use App\Models\Product;
use JetBrains\PhpStorm\Internal\ReturnTypeContract;

use function PHPSTORM_META\type;

class Jurusan extends BaseController
{
    protected $JurusanModel;
    protected $FakultasModel;
    public function __construct()
    {
        $this->JurusanModel = new JurusanModel();
        $this->FakultasModel = new FakultasModel();
    }
    public function index()
    {
        $JurusanModel = new JurusanModel();
        $FakultasModel = new FakultasModel();
        $data['prodi'] = $JurusanModel->findAll();
        $data['fakultas'] = $FakultasModel->findAll();

        // return json_encode(
        //     array(
        //         "data" => $data['prodi']
        //     )
        // );
        // $data = [
        //     'title' => 'Data Jurusan',
        //     'isi' => 'v_home',
        // ];

        return view('v_home', $data);
    }

    // View Jurusan
    public function ViewJurusan()
    {
        $JurusanModel = new JurusanModel();
        $data['prodi'] = $JurusanModel->findAll();

        return view('v_jurusan', $data);
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

    // Jurusan create
    public function create()
    {
        if ($this->request->getMethod() === 'post') {
            $JurusanModel = new JurusanModel();

            $data = [
                'prodi' => $this->request->getPost('prodi'),
                'fakultas' => $this->request->getPost('fakultas'),
                'gelar' => $this->request->getPost('gelar'),
                'deskripsi' => $this->request->getPost('deskripsi')
            ];

            $JurusanModel->insert($data);

            return redirect()->to(base_url('/jurusan'));
        }

        return view('v_create');
    }

    // Jurusan edit
    public function edit($prodi_id)
    {
        $JurusanModel = new JurusanModel();
        $data['prodi'] = $JurusanModel->find($prodi_id);

        if ($this->request->getMethod() === 'post') {
            $data = [
                'prodi' => $this->request->getPost('prodi'),
                'fakultas' => $this->request->getPost('fakultas'),
                'gelar' => $this->request->getPost('gelar'),
                'deskripsi' => $this->request->getPost('deskripsi')
            ];

            $JurusanModel->update($prodi_id, $data);

            return redirect()->to(base_url('/jurusan'));
        }

        return view('v_edit', $data);
    }

    // Jurusan delete
    public function delete($prodi_id)
    {
        $JurusanModel = new JurusanModel();
        $JurusanModel->delete($prodi_id);

        return redirect()->to(base_url('/jurusan'));
    }


    //View Fakultas
    public function ViewFakultas()
    {
        $FakultasModel = new FakultasModel();
        $data['fakultas'] = $FakultasModel->findAll();

        return view('v_fakultas', $data);
    }
    // Fakultas Create
    public function FakultasCreate()
    {
        if ($this->request->getMethod() === 'post') {
            $FakultasModel = new FakultasModel();

            $data = [

                'fakultas' => $this->request->getPost('fakultas'),
                'prodi' => $this->request->getPost('prodi'),
                'dekan' => $this->request->getPost('dekan'),

            ];

            $FakultasModel->insert($data);

            return redirect()->to(base_url('/jurusan'));
        }

        return view('v_FakultasCreate');
    }
    // Fakultas Edit
    public function FakultasEdit($fakultas_id)
    {
        $FakultasModel = new FakultasModel();
        $data['fakultas'] = $FakultasModel->find($fakultas_id);

        if ($this->request->getMethod() === 'post') {
            $data = [
                'fakultas' => $this->request->getPost('fakultas'),
                'prodi' => $this->request->getPost('prodi'),
                'dekan' => $this->request->getPost('dekan'),
            ];

            $FakultasModel->update($fakultas_id, $data);

            return redirect()->to(base_url('/jurusan'));
        }

        return view('v_FakultasEdit', $data);
    }
    // Fakultas delete
    public function FakultasDelete($fakultas_id)
    {
        $FakultasModel = new FakultasModel();
        $FakultasModel->delete($fakultas_id);

        return redirect()->to(base_url('/jurusan'));
    }
}
