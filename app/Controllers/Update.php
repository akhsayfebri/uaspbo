<?php

namespace App\Controllers;

use App\Models\jurusanModel;

class prodi extends BaseController
{
    public function update($id)
    {
        $jurusanModel = new jurusanModel();

        // Jika form disubmit
        if ($this->request->getMethod() === 'post') {
            // Validasi input
            $validation = \Config\Services::validation();
            $validation->setRules([
                'name' => 'required',
                'price' => 'required|numeric',
                'description' => 'required'
            ]);

            if (!$validation->withRequest($this->request)->run()) {
                // Jika validasi gagal, tampilkan pesan error
                $data['validation'] = $validation;
            } else {
                // Jika validasi sukses, update data ke database
                $data = [
                    'name' => $this->request->getPost('name'),
                    'price' => $this->request->getPost('price'),
                    'description' => $this->request->getPost('description')
                ];

                $jurusanModel->update($id, $data);

                // Redirect ke halaman sukses atau tampilan lainnya
                return redirect()->to('/prodi/success');
            }
        }

        // Ambil data produk dari database berdasarkan ID
        $data['prodi'] = $jurusanModel->find($id);

        // Tampilkan form update
        return view('prodi/update', $data);
    }
}
