<?php

namespace App\Controllers;

use App\Models\jurusanModel;

class prodi extends BaseController
{
    public function delete($id)
    {
        $jurusanModel = new jurusanModel();

        // Hapus data produk dari database berdasarkan ID
        $jurusanModel->delete($id);

        // Redirect ke halaman sukses atau tampilan lainnya
        return redirect()->to('/prodi/success');
    }
}
