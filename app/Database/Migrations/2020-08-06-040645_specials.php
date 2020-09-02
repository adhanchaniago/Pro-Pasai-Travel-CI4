<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Specials extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'special_id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'special_kategori'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'special_kode'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'special_nama_paket'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'special_include' => [
				'type'           => 'TEXT',
				'null'           => true,
			],
			'special_exclude' => [
				'type'           => 'TEXT',
				'null'           => true,
			],
			'special_trip_array' => [
				'type'           => 'TEXT',
				'null'           => true,
			],
			'special_harga' => [
				'type'           => 'TEXT',
				'null'           => true,
			],
			'special_desc' => [
				'type'           => 'TEXT',
				'null'           => true,
			],
			'special_foto' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
		]);
		$this->forge->addKey('special_id', true);
		$this->forge->createTable('specials');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('specials');
	}
}
