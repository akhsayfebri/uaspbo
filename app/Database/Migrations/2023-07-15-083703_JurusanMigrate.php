<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JurusanMigrate extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'prodi_id'         => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'prodi' => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'fakultas' => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'gelar' => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'deskripsi'  => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
        ]);

        $this->forge->addKey('prodi_id', true);
        $this->forge->createTable('prodi');
    }

    public function down()
    {
        $this->forge->dropTable('JurusanMigrate');
    }
}
