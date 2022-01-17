<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbKecamatan extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'kode_kcm' => [
				'type' => 'VARCHAR',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true,
			],
			'nama_kcm' => [
				'type' => 'VARCHAR',
				'constraint' => 100,
			]
	]);
	$this->forge->addKey('kode_kcm', true);
	$this->forge->createTable('tb_kecamatan');
	}

	public function down()
	{
		$this->forge->dropTable('tb_kecamatan');
	}
}
