<?php

namespace App\Controllers;

use App\Models\ProfilModel;

class Profil extends BaseController
{

	public function __construct()
	{
		helper(['form']);
		helper(['pembantu']);
		$this->Profil = new ProfilModel();
	}

	public function index($id = false)
	{

		if ($id === false) {
			$data = [
				'title' => 'Profil',
				'child' => 'dataProfil',
				'profils' => $this->Profil->get(1),
				'content' => 'profil/v_index.php'
			];
			return view('index-backend.php', $data);
		} else {
			$data = [
				'title' => 'Profil',
				'child' => 'dataProfil',
				'profils' => $this->Profil->get($id),
				'content' => 'profil/v_detail.php'
			];
			return view('index-backend.php', $data);
		}
	}


	public function update($id = false)
	{
		if ($id === false) {
			$id = 1;
			$data = [
				'profil_tentang' => $this->request->getPost('tentang'),
				'profil_candra'  => $this->request->getPost('tentang_candra'),
				'profil_evan'    => $this->request->getPost('tentang_evan'),
				'profil_no1'     => $this->request->getPost('no_candra'),
				'profil_no2'     => $this->request->getPost('no_evan'),
			];

			$this->Profil->edit($id, $data);

			return redirect()->to(base_url('/admin/profil'));
		} else {
			$data = [
				'title' => 'Profil',
				'child' => 'dataProfil',
				'profils' => $this->Profil->get($id),
				'content' => 'profil/v_update.php'
			];
			return view('index-backend.php', $data);
		}
	}

	public function create()
	{
		$data = [
			'title' => 'Profil',
			'child' => 'tambahContact',
			'content' => 'profil/v_tambah.php'
		];
		return view('index-backend.php', $data);
	}

	public function store()
	{
		$image = $this->request->getFile('foto');
		$name = $image->getRandomName();
		$data = [
			'profil_nama' => $this->request->getPost('judul'),
			'profil_tgl'  => date('Y-m-d'),
			'profil_foto' => $name,
		];

		$image->move('./public/uploads/profil', $name);
		// $image->move(ROOTPATH . 'public/uploads/profil', $name);

		$this->Profil->add($data);

		return redirect()->to(base_url('/admin/profil'));
	}

	public function delete($id)
	{
		$this->Profil->remove($id);
		return redirect()->back();
	}

	//--------------------------------------------------------------------

}
