<?php

namespace App\Models;

use CodeIgniter\Model;

class M_kegiatan extends Model
{

    protected $table                = 'tb_kegiatan';
	protected $primaryKey           = 'id_kegiatan';
	protected $allowedFields        = ['nama_kegiatan','created_at', 'updated_at'];
	protected $useTimestamps        = true;

	public function getKegiatan($id_kegiatan=false){
		if($id_kegiatan == false){
			return $this->findAll();
		}

		return $this->where(['id_kegiatan'=> $id_kegiatan]) -> first();
	}
}


?>