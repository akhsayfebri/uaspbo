<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DataJurusan extends Seeder
{
    public function run()
    {
        $data = [
            [
                "prodi" => "informatika",
                "fakultas" => "tekonlogi informasi",
                "gelar" => "s.pd"
            ],
            [
                "prodi" => "elektro",
                "fakultas" => "teknologi informasi",
                "gelar" => "str.m"
            ],
            [
                "prodi" => "komputer",
                "fakultas" => "teknologi informasi",
                "gelar" => "M.pd"
            ],


        ];
        $this->db->table('prodi')->insertBatch($data);
    }
}
