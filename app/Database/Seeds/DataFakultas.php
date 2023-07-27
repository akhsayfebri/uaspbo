<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DataFakultas extends Seeder
{
    public function run()
    {
        $data = [
            "fakultas" => "teknologi informasi",
            "prodi" => "tekom",
            "dekan" => "pak syamsiro",
        ];
        $this->db->table('fakultas')->insert($data);
    }
}
