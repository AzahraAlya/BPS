<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tb_Nilai extends Migration
{
	public function up()
	{
		//kode_mitra','nama','nik','no_hp','alamat','nama_penilai','nama_kegiatan'
		//,'beban_kerja','status','que1','que2','que3','que4','que5','que6','catatan', 
		//'created_at', 'updated_at'

		$this->forge->addField([
			'id_nilai' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true,
			],
			'kode_mitra' => [
				'type' => 'INT',
				'constraint' => 11,
			],
			'nama' => [
				'type' => 'VARCHAR',
				'constraint' => 50,
			],
			'nik'=> [
				'type' => 'VARCHAR',
				'constraint' => 16,
			],
			'no_hp' => [
				'type' => 'VARCHAR',
				'constraint' => 38
			],
			'alamat' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],
			'nama_penilai' => [
				'type' => 'VARCHAR',
				'constraint' => 100
			],
			'nama_kegiatan' => [
				'type' => 'VARCHAR',
				'constraint' => 100
			],
			'beban_kerja' => [
				'type' => 'INT',
				'constraint' => 11
			],
			'status' => [
				'type' => 'VARCHAR',
				'constraint' => 25
			],
			'que1' => [
				'type' => 'INT',
				'constraint' => 11
			],
			'que2' => [
				'type' => 'INT',
				'constraint' => 11
			],
			'que3' => [
				'type' => 'INT',
				'constraint' => 11
			],
			'que4' => [
				'type' => 'INT',
				'constraint' => 11
			],
			'que5' => [
				'type' => 'INT',
				'constraint' => 11
			],
			'que6' => [
				'type' => 'INT',
				'constraint' => 11
			],
			'catatan' => [
				'type' => 'TEXT'
			],
			'created_at' =>[
				'type' => 'DATETIME',
				'null' => true
			],
			'updated_at' => [
				'type' => 'DATETIME',
				'null' => true
			]
		
	]);
	$this->forge->addKey('id_nilai', true);
	$this->forge->createTable('tb_nilai');
	
	}

	public function down()
	{
		$this->forge->dropTable('tb_nilai');
	}
}
