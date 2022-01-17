<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\I18n\Time;

class User extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_user'				=> [
				'type'				=> 'INT',
				'constraint'		=> 11,
				'unsigned'			=> true,
				'auto_increment'	=> true
			],

			'firstname'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 100
			],

			'lastname'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 100
			],

			'username'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 100
			],

			'email'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 100
			],

			'password'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 100
			],
			
			'role'			=> [
				'type'				=> 'INT',
				'constraint'		=> 2,
			],
			'created_at'			=> [
				'type'				=> 'DATE',
				'null'				=> true
			],
			'updated_at'			=> [
				'type'				=> 'DATE',
				'null'				=> true
			],
			'deleted_at'			=> [
				'type'				=> 'DATE',
				'null'				=> true
			],
		]);
		$this->forge->addKey('id_user', true);
		$this->forge->createTable('user');

		// Insert Super Admin Data
		$data = [
			'username' => 'admin',
			'password' => password_hash('admin', PASSWORD_DEFAULT),
			'firstname' => 'Super',
			'lastname' => 'Admin',
			'email' => 'cobabisa@gmail.com',
			'role' => '0',
			'created_at' => new Time('now'),
			'updated_at' => new Time('now')
		];
		$this->db->table('user')->insert($data);

		// Insert User Data
		$data = [
			'username' => 'user',
			'password' => password_hash('user', PASSWORD_DEFAULT),
			'firstname' => 'Regular',
			'lastname' => ' User',
			'email' => 'user@gmail.com',
			'role' => '1',
			'created_at' => 'date',
			'updated_at' => 'date'
		];
		$this->db->table('user')->insert($data);

		$data = [
			'username' => 'pengawas',
			'password' => password_hash('pengawas', PASSWORD_DEFAULT),
			'firstname' => 'Penilai',
			'lastname' => ' Admin',
			'email' => 'user@gmail.com',
			'role' => '2',
			'created_at' => 'date',
			'updated_at' => 'date'
		];
		$this->db->table('user')->insert($data);
	}

	public function down()
	{
		$this->forge->dropTable('user');
	}
}
