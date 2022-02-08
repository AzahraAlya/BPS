<?php

namespace App\Controllers;
use App\Models\M_user;
use App\Models\M_petugas;
class C_Admin extends BaseController
{
	protected $M_user;
    public function __construct()
    {
        $this->M_user = new M_user();
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
		$data = [
			'nama_kegiatan' => $this->request->getVar('nama_kegiatan'),
		];
		$M_kegiatan = model("M_kegiatan");
		$M_kegiatan->insert($data);
		return redirect()->to(base_url('/admin/tambah-kegiatan'));
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
		$M_pencacah = model("M_pencacah");
		$data = [
            'admin' => $M_pencacah->findAll(),
        ];

		return view('admin/manageaccountuser',$data);
	}

	//tampilan data pegawai
	public function dataPegawai(){
		$M_user = model("M_user");
		$data = [
			'pegawai' => $M_user->where('role !=', 0)->findAll(), 
		];
		return view('admin/data-pegawai',$data);
	}

	//detail data pegawai
	public function detailpegawai($id_user){
		$M_user = model("M_user");
		$data = [
			'pegawai' => $M_user->getPenilai($id_user), 
		];
		return view('admin/detail-pegawai',$data);
	}

	//hapus data pegawai
	public function deletePegawai($id_user)
	{
		$M_user = model("M_user");
		$M_user->delete($id_user);
		return redirect()->to(base_url('/admin/pegawai'));
	}

	//tampilan pertanyaan penilaian pegawai
	public function nilaipegawai($id_user){
		$M_user = model("M_user");
		$M_kegiatan = model("M_kegiatan");
		$data = [
			'pegawai' => $M_user->getPenilai($id_user), 
			'kegiatan' => $M_kegiatan->findAll(),
			
		];
		return view('admin/nilaipegawai',$data);
	}

	public function listNilaiPegawai($kode){
		$M_pegawai = model("M_pegawai");
		// $kode = session()->get('Kode_Mitra');
		$data = [
			'validation' => \Config\Services::validation(),
			'kegiatan' => $M_pegawai->getKegiatan($kode),
		];
		return view('admin/list-kegiatan', $data);
	}

	//simpan hasil penilaian
	public function storeNilaiPegawai(){
		helper(['swal_helper']);
		$data = [
			'nip' => $this->request->getVar('nip'),
			'nama_pegawai' => $this->request->getVar('nama_pegawai'),
			'nama_penilai' => $this->request->getVar('nama_penilai'),
			'nama_kegiatan' => $this->request->getVar('nama_kegiatan'),
			'beban' => $this->request->getVar('beban'),
			'status' => $this->request->getVar('status'),
			'que1' => $this->request->getVar('que1'),
			'que2'=> $this->request->getVar('que2'),
			'que3'=> $this->request->getVar('que3'),
			'que4'=> $this->request->getVar('que4'),
			'que5' => implode(",",(array)$this->request->getVar('que5')),
			'que6' => implode(",",(array)$this->request->getVar('que6')),
			'catatan' => $this->request->getVar('catatan'),
		];
		$M_pegawai = model("M_pegawai");
		$M_pegawai->insert($data);
		set_notifikasi_swal('success', 'Berhasil','Data Berhasil Diupdate');
		return redirect()->to(base_url('/admin/pegawai'));
	}

	//tampilan daftar pegawai yang sudah dinilai
	public function penilaianPegawai(){
		$M_pegawai = model("M_pegawai");
        
        $data = [
            'pegawai' => $M_pegawai->findAll(),

		];
		return view('admin/show-nilaipegawai',$data);
	}
}
