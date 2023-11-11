<?php

namespace App\Database\Migrations;

class TransaksiAlterAlamat extends \CodeIgniter\Database\Migration
{

    public function up()
    {
        $fileds = [
            'alamat' => [
                'type' => 'TEXT',
            ],
            'ongkir' => [
                'type' => 'INT',
            ],
            'status' => [
                'type' => 'INT',
                'constraint' => 1,
            ]
        ];
        $this->forge->addColumn('transaksi', $fileds);
    }
    public function down()
    {
        $this->forge->dropColumn('transaksi', ['alamat', 'ongkir', 'status']);
    }
}
