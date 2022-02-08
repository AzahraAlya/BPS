<?php

namespace App\Models;

use CodeIgniter\Model;

class M_petugas extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'tb_petugas';
	protected $primaryKey           = 'NO_URUT';
	protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'array';
    protected $useSoftDeletes       = true;
    protected $protectFields        = true;
	protected $allowedFields        = ['KODE_PETUGAS','password','role','noKECAMATAN','NOMOR_PESERTA','NIK_NIP','NAMA','JENIS_KELAMIN', 'TEMPAT_LAHIR','TANGGAL_LAHIR','PENDIDIKAN','STATUS_PERKAWINAN','PEKERJAAN','PENGALAMAN_SURVEI_BPS','ALAMAT','DESA','KECAMATAN','KABUPATEN','NOMOR_HP','NOMOR_WA','KESAN_DAN_PESAN','PENAMPILAN','KOMUNIKASI','NILAI','KEPEMILIKAN_HP','SPESIFIKASI_ANDROID','OPERASI_GOOGLE_MAPS','GAMBAR','E','I','S','N','T','F','J','P','huruf1','huruf2','huruf3','huruf4','REKOMENDASI_HASIL_MBTI','PSIKOLOG_PROV','EVALUASI_KSK','HASIL_AKHIR','LULUS_PEMETAAN','KETERANGAN','NILAI_PENDALAMAN','NILAI_PENGAMATAN','JUMLAH_ERROR','PSIKOTES','UMUR','TANGGAL_REKRUTMENT_UJIAN_MBTI'];
	protected $useTimestamps        = true;

	 // Dates
 
    protected $dateFormat           = 'datetime';
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    protected $deletedField         = 'deleted_at';

	protected $beforeUpdate = ['beforeUpdate'];
  
  public function getUser($NO_URUT=false){
		if($NO_URUT == false){
			return $this->findAll();
		}

		return $this->where(['NO_URUT'=> $NO_URUT]) -> first();
	}
  
    protected function beforeUpdate(array $data){
      $data = $this->passwordHash($data);
      $data['data']['updated_at'] = date('Y-m-d H:i:s');
      return $data;
    }
  
    protected function passwordHash(array $data){
      if(isset($data['data']['password']))
        $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
  
      return $data;
    }
	public function getPetugas($NO_URUT=false){
		if($NO_URUT == false){
		  return $this->findAll();
		}
	
		return $this->where(['NO_URUT'=> $NO_URUT]) -> first();
	  }

    public function getPencacah($NO_URUT=false){
      if($NO_URUT == false){
        return $this->findAll();
      }
  
      return $this->where(['NO_URUT'=> $NO_URUT]) -> first();
    }
}