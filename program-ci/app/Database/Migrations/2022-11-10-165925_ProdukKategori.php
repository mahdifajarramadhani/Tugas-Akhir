<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProdukKategori extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_kategori'           => ['type' => 'INT', 'unsigned' => TRUE, 'auto_increment' => TRUE],
            'nama_produk'           => ['type' => 'VARCHAR', 'constraint' => '64'],
            'created_at'            => ['type' => 'DATETIME', 'null' => TRUE],
            'updated_at'            => ['type' => 'DATETIME', 'null' => TRUE],
            'deleted_at'            => ['type' => 'DATETIME', 'null' => TRUE],
        ]);
        $this->forge->addKey('id_kategori', TRUE);
        $this->forge->createTable('produk_kategori');
    }

    public function down()
    {
        $this->forge->dropTable('produk_kategori');
    }
}
