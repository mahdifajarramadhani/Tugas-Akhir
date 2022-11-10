<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pengguna extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pengguna'           => ['type' => 'INT', 'unsigned' => TRUE, 'auto_increment' => TRUE],
            'email'                 => ['type' => 'VARCHAR', 'constraint' => '64', 'unique' => TRUE],
            'password'              => ['type' => 'VARCHAR', 'constraint' => '256'],
            'nama_lengkap'          => ['type' => 'VARCHAR', 'constraint' => '64'],
            'nomor_telepon'         => ['type' => 'VARCHAR', 'constraint' => '16'],
            'created_at'            => ['type' => 'DATETIME', 'null' => TRUE],
            'updated_at'            => ['type' => 'DATETIME', 'null' => TRUE],
            'deleted_at'            => ['type' => 'DATETIME', 'null' => TRUE],
        ]);
        $this->forge->addKey('id_pengguna', TRUE);
        $this->forge->createTable('pengguna');
    }

    public function down()
    {
        $this->forge->dropTable('pengguna');
    }
}
