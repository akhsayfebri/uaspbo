<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JurusanMigrate extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'         => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_prodi' => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'deskripsi'  => [
                'type'           => 'TEXT',
                'null'           => true,
            ],
            'created_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'updated_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('prodi');
    }

    public function down()
    {
        //
    }
}
