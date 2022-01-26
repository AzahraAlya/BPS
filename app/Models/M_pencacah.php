<?php

namespace App\Models;

use CodeIgniter\Model;

class M_pencacah extends Model
{
	
	protected $table                = 'bps';
	protected $primaryKey           = 'No_Urut';
	protected $allowedFields        = ['Kode_Mitra','password','noKecamatan','NOMOR_PESERTA','NIK','NAMA','JENIS_KELAMIN', 'TEMPAT_LAHIR','TANGGAL_LAHIR','PENDIDIKAN','STATUS_PERKAWINAN','PEKERJAAN','PENGALAMAN_SURVEI_BPS','ALAMAT','DESA','KECAMATAN','KABUPATEN','NOMOR_HP','NOMOR_WA','KESAN_DAN_PESAN','PENAMPILAN','KOMUNIKASI','NILAI','KEPEMILIKAN_HP','SPESIFIKASI_ANDROID','OPERASI_GOOGLE_MAPS','GAMBAR','E','I','S','N','T','F','J','P','huruf1','huruf2','huruf3','huruf4','Rekomendasi_Hasil_MBTI','Psikolog_Prov','Evaluasi_KSK','HASIL_AKHIR','LULUS_PEMETAAN','Keterangan','NILAI_PENDALAMAN','NILAI_PENGAMATAN','JUMLAH_ERROR','PSIKOTES','Umur','Tanggal_Rekrutment'];
	protected $useTimestamps        = true;
	
	public function getPencacah($No_Urut=false){
		if($No_Urut == false){
			return $this->findAll();
		}

		return $this->where(['No_Urut'=> $No_Urut]) -> first();
	}

	public function getUser($No_Urut=false){
		if($No_Urut == false){
			return $this->findAll();
		}

		return $this->where(['No_Urut'=> $No_Urut]) -> first();
	}

    public function getPencacahan($No_Urut=false){
		if($No_Urut == false){
			return $this->findAll();
		}

		return $this->where(['No_Urut'=> $No_Urut]) -> first();
	}

	public function getPencacahdata($kode = false)
	{
		if ($kode == false) {
			return $this->findAll();
		}
		return $this->where(['Kode_Mitra' => $kode])->first();
	}

	public function id_KodeMitra(){
		$kode = $this->db->table('bps')
		->select('RIGHT(Kode_Mitra,5) as Kode_Mitra', false)
		->orderBy('Kode_Mitra', 'DESC')
		->limit(1)->get()->getRowArray();
    	$kode_mitra = isset($kode['Kode_Mitra']) ? $kode['Kode_Mitra'] : '';
		if($kode_mitra ==null){
			$no = 1;
		}else{
			$no = intval($kode_mitra) + 1;
		}

		$tgl = 18;
		$batas = str_pad($no, 5, "0", STR_PAD_LEFT);
		$id_mitra = $tgl.$batas;
		return $id_mitra;
	}

	
	protected $beforeUpdate = ['beforeUpdate'];

  
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

}
