<?php

namespace App\Controllers;
use App\Models\M_user;
class C_Admin extends BaseController
{
	protected $M_user;
    public function __construct()
    {
        $this->M_user = new M_user();
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

		$M_kegiatan = model("M_kegiatan");
		$M_kegiatan->save([
			'id_kegiatan' => $id_kegiatan,
			'nama_kegiatan'=>$this->request->getVar('nama_kegiatan'),
		]);
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
            'admin' => $this->M_user->where('role', 2)->findAll(),
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
}
