<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Profils extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'profil_id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
				'constraint'     => '100',
			],
			'profil_tentang'       => [
				'type'           => 'TEXT',
				'null'           => true,
			],
			'profil_candra'       => [
				'type'           => 'TEXT',
				'null'           => true,
			],
			'profil_evan'       => [
				'type'           => 'TEXT',
				'null'           => true,
			],
			'profil_no1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'profil_no2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
		]);
		$this->forge->addKey('profil_id', true);
		$this->forge->createTable('profils');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('profils');
	}
}
