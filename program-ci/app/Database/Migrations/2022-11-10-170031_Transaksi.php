<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaksi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_transaksi'          => ['type' => 'INT', 'unsigned' => TRUE, 'auto_increment' => TRUE],
            'id_pengguna'           => ['type' => 'INT', 'unsigned' => TRUE],
            'nomor_transaksi'       => ['type' => 'VARCHAR', 'constraint' => '64', 'unique' => TRUE],
            'nama_pelanggan'        => ['type' => 'VARCHAR', 'constraint' => '64'],
            'nomor_telepone'        => ['type' => 'VARCHAR', 'constraint' => '15'],
            'created_at'            => ['type' => 'DATETIME', 'null' => TRUE],
            'updated_at'            => ['type' => 'DATETIME', 'null' => TRUE],
            'deleted_at'            => ['type' => 'DATETIME', 'null' => TRUE],
        ]);
        $this->forge->addKey('id_transaksi', TRUE);
        $this->forge->createTable('transaksi');
    }

    public function down()
    {
        $this->forge->dropTable('transaksi');
    }
}
