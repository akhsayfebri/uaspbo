<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class FakultasMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'fakultas_id'         => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'fakultas' => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'prodi' => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'dekan' => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
        ]);

        $this->forge->addKey('fakultas_id', true);
        $this->forge->createTable('fakultas');
    }

    public function down()
    {
        $this->forge->dropTable('FakultasMigrate');
    }
}
