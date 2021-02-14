<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 11,
				'auto_increment' => TRUE
			],
			'fullname' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'username' => [
				'type' => 'VARCHAR',
				'constraint' => 128,
			],
			'email' => [
				'type' => 'VARCHAR',
				'constraint' => 128,
			],
			'phone' => [
				'type' => 'VARCHAR',
				'constraint' => 16,
			],
			'image' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'password' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
			],
			'status' => [
				'type' => 'INT',
				'constraint' => 1,
			],
		]);
		$this->forge->addKey('id');
		$this->forge->createTable('users');
	}

	public function down()
	{
		//
	}
}
