<?php

namespace App\Controllers;
use App\Models\M_petugas;
class C_Admin extends BaseController
{
	protected $M_user;
    public function __construct()
    {
        $this->M_petugas = new M_petugas();
    }
	public function index()
	{

        $M_nilai = model("M_nilai");
        
        $admin = [
            'admin' => $M_nilai->getDataAdmin(),

		];
		return view('admin/print_nilai',$admin);
	}

		//tampilan data petugas lengkap
		public function lengkap(){
			$model = model("M_petugas");
			$data = [
				'petugas' => $model->where('role !=', 3)->findAll(), 
			];
			return view('admin/data-lengkap',$data);
		}
	
		//tampilan data detail petugas lengkap
		public function detailLengkap($NO_URUT){
			$model = model("M_petugas");
			$data = [
				'petugas' => $model->getPetugas($NO_URUT),
			];
			return view('admin/detail-lengkap',$data);
		}
	
		//hapus data petugas
		public function deletePetugas($NO_URUT)
		{
			$model = model("M_petugas");
			$model->delete($NO_URUT);
			return redirect()->to(base_url('/admin/mitra-lengkap'));
		}
	
		//tambah petugas baru
		public function tambah(){
			$model = model("M_petugas");
			$M_kecamatan = model("M_kecamatan");
			$id_petugas = $model->id_KodePetugas();
	
			$data = [
				'id_petugas' => $id_petugas,
				'kecamatan' => $M_kecamatan->findAll(),
			];
			return view('admin/tambah_mitra',$data);
		}
	
		//simpan petugas baru
		public function storeMitra($NO_URUT){
			helper(['swal_helper']);
			$M_petugas = model("M_petugas");
			$M_petugas->save([
				'NO_URUT' => $NO_URUT,
				'KODE_PETUGAS' => $this->request->getVar('KODE_PETUGAS'),
				'noKECAMATAN'=> $this->request->getVar('noKECAMATAN'),
				'NOMOR_PESERTA' => $this->request->getVar('NOMOR_PESERTA'),
				'NIK_NIP'=> $this->request->getVar('NIK_NIP'),
				'NAMA'=> $this->request->getVar('NAMA'),
				'JENIS_KELAMIN'=> $this->request->getVar('JENIS_KELAMIN'),
				'TEMPAT_LAHIR'=> $this->request->getVar('TEMPAT_LAHIR'),
				'TANGGAL_LAHIR'=> $this->request->getVar('TANGGAL_LAHIR'),
				'PENDIDIKAN'=> $this->request->getVar('PENDIDIKAN'),
				'STATUS_PERKAWINAN'=> $this->request->getVar('STATUS_PERKAWINAN'),
				'PEKERJAAN'=> $this->request->getVar('PEKERJAAN'),
				'PENGALAMAN_SURVEI_BPS'=> $this->request->getVar('PENGALAMAN_SURVEI_BPS'),
				'ALAMAT'=> $this->request->getVar('ALAMAT'),
				'DESA'=> $this->request->getVar('DESA'),
				'KECAMATAN'=> $this->request->getVar('KECAMATAN'),
				'KABUPATEN'=> $this->request->getVar('KABUPATEN'),
				'NOMOR_HP'=> $this->request->getVar('NOMOR_HP'),
				'NOMOR_WA'=> $this->request->getVar('NOMOR_WA'),
				'KESAN_DAN_PESAN' => $this->request->getVar('KESAN_DAN_PESAN'),
				'PENAMPILAN' => $this->request->getVar('PENAMPILAN'),
				'KOMUNIKASI'=> $this->request->getVar('KOMUNIKASI'),
				'NILAI' => $this->request->getVar('NILAI'),
				'KEPEMILIKAN_HP' => $this->request->getVar('KEPEMILIKAN_HP'),
				'SPESIFIKASI_ANDROID' => $this->request->getVar('SPESIFIKASI_ANDROID'),
				'OPERASI_GOOGLE_MAPS'=> $this->request->getVar('OPERASI_GOOGLE_MAPS'),
				'GAMBAR' => $this->request->getVar('GAMBAR'),
				'E' => $this->request->getVar('E'),
				'I' => $this->request->getVar('I'),
				'S' => $this->request->getVar('S'),
				'N' => $this->request->getVar('N'),
				'T' => $this->request->getVar('T'),
				'F' => $this->request->getVar('F'),
				'J' => $this->request->getVar('J'),
				'P' => $this->request->getVar('P'),
				'huruf1' => $this->request->getVar('huruf1'),
				'huruf2' => $this->request->getVar('huruf2'),
				'huruf3' => $this->request->getVar('huruf3'),
				'huruf4' => $this->request->getVar('huruf4'),
				'REKOMENDASI_HASIL_MBTI' => $this->request->getVar('REKOMENDASI_HASIL_MBTI'),
				'PSIKOLOG_PROV' => $this->request->getVar('PSIKOLOG_PROV'),
				'EVALUASI_KSK' => $this->request->getVar('EVALUASI_KSK'),
				'HASIL_AKHIR' => $this->request->getVar('HASIL_AKHIR'),
				'LULUS_PEMETAAN' => $this->request->getVar('LULUS_PEMETAAN'),
				'KETERANGAN' => $this->request->getVar('KETERANGAN'),
				'NILAI_PENDALAMAN' => $this->request->getVar('NILAI_PENDALAMAN'),
				'NILAI_PENGAMATAN' => $this->request->getVar('NILAI_PENGAMATAN'),
				'JUMLAH_ERROR' => $this->request->getVar('JUMLAH_ERROR'),
				'PSIKOTES' => $this->request->getVar('PSIKOTES'),
				'UMUR' => $this->request->getVar('UMUR'),
				'TANGGAL_REKRUTMEN_UJIAN_MBTI' => $this->request->getVar('TANGGAL_REKRUTMEN_UJIAN_MBTI'),
			]);
			
			set_notifikasi_swal('success', 'Berhasil','Data Berhasil Diupdate');
			return redirect()->to(base_url('/admin/mitra-lengkap'));
		}
	
    public function detail($No_Urut)
	{
		$M_pencacah = model("M_pencacah");
		$data = [
			'validation' => \Config\Services::validation(),
			'pencacah' => $M_pencacah->getPencacah($No_Urut),
		];
		return view('admin/ad_detailpencacah', $data);
	}

    

	public function edit($id_kegiatan){
		$M_kegiatan = model("M_kegiatan");
		$data = [
			'validation' => \Config\Services::validation(),
			'kegiatan' => $M_kegiatan->getKegiatan($id_kegiatan),
		];
		return view('admin/edit_kegiatan', $data);
	}

	public function update($id_kegiatan){
		helper(['swal_helper']);
		
		$M_kegiatan = model("M_kegiatan");
		$M_kegiatan->save([
			'id_kegiatan' => $id_kegiatan,
			'nama_kegiatan'=>$this->request->getVar('nama_kegiatan'),
		]);
		set_notifikasi_swal('success', 'Berhasil','Data Berhasil Diupdate');
		return redirect()->to(base_url('/admin/kegiatan'));
	}

	public function delete($id_kegiatan)
	{
		$M_kegiatan = model("M_kegiatan");
		$M_kegiatan->delete($id_kegiatan);
		return redirect()->to(base_url('/admin/kegiatan'));
	}

    public function excel(){
        $M_nilai = model("M_nilai");
        $data = [
            'admin' => $M_nilai->getDataAdmin(),
            

		];
		return view('admin/excel',$data);
    }

	public function printpetugas(){
        $M_petugas = model("M_petugas");
        $data = [
            'admin' => $M_petugas->findAll(),
            

		];
		return view('admin/print_petugas',$data);
    }

	public function kegiatan(){
		$M_kegiatan = model("M_kegiatan");
		$data = [
			'kegiatan' => $M_kegiatan->findAll(),
			// 'validation' => \Config\Services::validation(),
		];
		return view('admin/data_kegiatan', $data);
	}

	public function tambahkegiatan(){
		return view('admin/tambah_kegiatan');
	}

	public function store_kegiatan(){
		helper(['swal_helper']);
		$data = [
			'nama_kegiatan' => $this->request->getVar('nama_kegiatan'),
		];
		$M_kegiatan = model("M_kegiatan");
		$M_kegiatan->insert($data);
		set_notifikasi_swal('success', 'Berhasil','Data Berhasil Diupdate');
		return redirect()->to(base_url('/admin/kegiatan'));
	}

	public function manageaccount(){
		helper(['form']);
		$data = [
            'admin' => $this->M_petugas->where('role !=', 0)->findAll(),
        ];

		return view('admin/manageaccount',$data);
	}

	public function manageaccountuser(){
		helper(['form']);
		
		$data = [
            'admin' => $this->M_petugas->where('role =', 0)->findAll(),
            
        ];

		return view('admin/manageaccountuser',$data);
	}

	//tampilan data pegawai
	// public function dataPegawai(){
	// 	$M_user = model("M_user");
	// 	$data = [
	// 		'pegawai' => $M_user->where('role !=', 0)->findAll(), 
	// 	];
	// 	return view('admin/data-pegawai',$data);
	// }

	//detail data pegawai
	// public function detailpegawai($id_user){
	// 	$M_user = model("M_user");
	// 	$data = [
	// 		'pegawai' => $M_user->getPenilai($id_user), 
	// 	];
	// 	return view('admin/detail-pegawai',$data);
	// }

	//hapus data pegawai
	// public function deletePegawai($id_user)
	// {
	// 	$M_user = model("M_user");
	// 	$M_user->delete($id_user);
	// 	return redirect()->to(base_url('/admin/pegawai'));
	// }

	//tampilan pertanyaan penilaian pegawai
	public function nilaipegawai($NO_URUT){
		$model = model("M_petugas");
		$M_kegiatan = model("M_kegiatan");
		$data = [
			'petugas' => $model->getPetugas($NO_URUT), 
			'kegiatan' => $M_kegiatan->findAll(),
			
		];
		return view('admin/nilaipegawai',$data);
	}

	public function listNilaiPegawai($kode){
		$M_nilai = model("M_nilai");
		// $kode = session()->get('Kode_Mitra');
		$data = [
			'validation' => \Config\Services::validation(),
			'kegiatan' => $M_nilai->getKegiatan($kode),
		];
		return view('admin/list-kegiatan', $data);
	}

	//simpan hasil penilaian
	public function storeNilaiPegawai(){
		helper(['swal_helper']);
		$data = [
			'kode_mitra' => $this->request->getVar('kode_mitra'),
			'nama' => $this->request->getVar('nama'),
			'nik' => $this->request->getVar('nik'),
			'no_hp' => $this->request->getVar('no_hp'),
			'alamat' => $this->request->getVar('alamat'),
			'nama_penilai' => $this->request->getVar('nama_penilai'),
			'nama_kegiatan' => $this->request->getVar('nama_kegiatan'),
			'bulan_kegiatan' => $this->request->getVar('bulan_kegiatan'),
			'beban_kerja' => $this->request->getVar('beban_kerja'),
			'status' => $this->request->getVar('status'),
			'que1' => $this->request->getVar('que1'),
			'que2'=> $this->request->getVar('que2'),
			'que3'=> $this->request->getVar('que3'),
			'que4'=> $this->request->getVar('que4'),
			'que5' => implode(",",(array)$this->request->getVar('que5')),
			'que6' => implode(",",(array)$this->request->getVar('que6')),
			'catatan' => $this->request->getVar('catatan'),
		];
		$model = model("M_nilai");
		$model->insert($data);
		set_notifikasi_swal('success', 'Berhasil','Data Berhasil Diupdate');
		return redirect()->to(base_url('/admin/mitra-lengkap'));
	}

	//tampilan daftar pegawai yang sudah dinilai
	// public function penilaianPegawai(){
	// 	$M_pegawai = model("M_pegawai");
        
    //     $data = [
    //         'pegawai' => $M_pegawai->findAll(),

	// 	];
	// 	return view('admin/show-nilaipegawai',$data);
	// }
}
