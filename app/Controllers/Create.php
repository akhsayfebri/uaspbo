<?php

namespace App\Controllers;

use App\Models\jurusanModel;

class prodi extends BaseController
{
    public function create()
    {
        // Jika form disubmit
        if ($this->request->getMethod() === 'post') {
            // Validasi input
            $validation =  \Config\Services::validation();
            $validation->setRules([
                'name' => 'required',
                'price' => 'required|numeric',
                'description' => 'required'
            ]);

            if (!$validation->withRequest($this->request)->run()) {
                // Jika validasi gagal, tampilkan pesan error
                $data['validation'] = $validation;
            } else {
                // Jika validasi sukses, simpan data ke database
                $jurusanModel = new jurusanModel();

                $data = [
                    'name' => $this->request->getPost('name'),
                    'price' => $this->request->getPost('price'),
                    'description' => $this->request->getPost('description')
                ];

                $jurusanModel->insert($data);

                // Redirect ke halaman sukses atau tampilan lainnya
                return redirect()->to('/prodi/success');
            }
        }

        // Tampilkan form input
        return view('prodi/create');
    }
}
