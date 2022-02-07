<?php

namespace App\Models;

use CodeIgniter\Model;

class M_pegawai extends Model
{

    protected $table                = 'tb_pegawai';
	protected $primaryKey           = 'id_pgw';
	protected $allowedFields        = ['nama_pegawai','nip','nama_penilai','nama_kegiatan','beban','status','que1','que2','que3','que4','que5','que6','catatan','created_at', 'updated_at'];
	protected $useTimestamps        = true;

	
}


?>