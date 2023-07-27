<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DataJurusan extends Seeder
{
    public function run()
    {
        $data = [
            "prodi" => "informatika",
            "fakultas" => "teknologi informasi",
            "gelar" => "s.pd",
            "deskripsi" => "516271js"
        ];
        $this->db->table('prodi')->insert($data);
    }
}
