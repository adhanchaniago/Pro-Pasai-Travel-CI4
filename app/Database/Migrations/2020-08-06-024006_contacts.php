<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Contacts extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'contact_id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'contact_facebook'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'contact_twitter'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'contact_youtube'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'contact_email'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'contact_alamat'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'contact_rek_bri'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'contact_rek_bni'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'contact_rek_bca'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
		]);
		$this->forge->addKey('contact_id', true);
		$this->forge->createTable('contacts');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('contacts');
	}
}
