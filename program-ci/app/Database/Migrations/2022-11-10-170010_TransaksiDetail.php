<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TransaksiDetail extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_transaksi_detail'   => ['type' => 'INT', 'unsigned' => TRUE, 'auto_increment' => TRUE],
            'id_tansaksi'           => ['type' => 'INT', 'unsigned' => TRUE],
            'id_produk'             => ['type' => 'INT', 'unsigned' => TRUE],
            'jumlah_produk'         => ['type' => 'INT'],
            'harga_produk'          => ['type' => 'INT'],
            'created_at'            => ['type' => 'DATETIME', 'null' => TRUE],
            'updated_at'            => ['type' => 'DATETIME', 'null' => TRUE],
            'deleted_at'            => ['type' => 'DATETIME', 'null' => TRUE],
        ]);
        $this->forge->addKey('id_transaksi_detail', TRUE);
        $this->forge->createTable('transaksi_detail');
    }

    public function down()
    {
        $this->forge->dropTable('transaksi_detail');
    }
}
