<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produk extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_produk'             => ['type' => 'INT', 'unsigned' => TRUE, 'auto_increment' => TRUE],
            'id_kategori'           => ['type' => 'INT', 'unsigned' => TRUE],
            'sku_produk'            => ['type' => 'VARCHAR', 'constraint' => '32', 'unique' => TRUE],
            'nama_produk'           => ['type' => 'VARCHAR', 'constraint' => '64'],
            'harga_beli'            => ['type' => 'INT'],
            'harga_jual'            => ['type' => 'INT'],
            'stok'                  => ['type' => 'INT'],
            'created_at'            => ['type' => 'DATETIME', 'null' => TRUE],
            'updated_at'            => ['type' => 'DATETIME', 'null' => TRUE],
            'deleted_at'            => ['type' => 'DATETIME', 'null' => TRUE],
        ]);
        $this->forge->addKey('id_produk', TRUE);
        $this->forge->createTable('produk');
    }

    public function down()
    {
        $this->forge->dropTable('produk');
    }
}
