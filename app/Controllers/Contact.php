<?php

namespace App\Controllers;

use App\Models\ContactModel;

class Contact extends BaseController
{

	public function __construct()
	{
		helper(['form']);
		helper(['pembantu']);
		$this->Contact = new ContactModel();
	}

	public function index($id = false)
	{

		if ($id === false) {
			$data = [
				'title' => 'Contact',
				'child' => 'dataContact',
				'contacts' => $this->Contact->get(1),
				'content' => 'contact/v_index.php'
			];
			return view('index-backend.php', $data);
		} else {
			$data = [
				'title' => 'Contact',
				'child' => 'dataContact',
				'contacts' => $this->Contact->get($id),
				'content' => 'contact/v_detail.php'
			];
			return view('index-backend.php', $data);
		}
	}


	public function update($id = false)
	{
		if ($id === false) {
			$id = 1;
			$data = [
				'contact_facebook' => $this->request->getPost('fb'),
				'contact_twitter'  => $this->request->getPost('tw'),
				'contact_youtube'  => $this->request->getPost('yt'),
				'contact_email'    => $this->request->getPost('email'),
				'contact_alamat'   => $this->request->getPost('alamat'),
				'contact_rek_bri'  => $this->request->getPost('bri'),
				'contact_rek_bni'  => $this->request->getPost('bni'),
				'contact_rek_bca'  => $this->request->getPost('bca'),
			];

			$this->Contact->edit($id, $data);

			return redirect()->to(base_url('/admin/contact'));
		} else {
			$data = [
				'title' => 'Contact',
				'child' => 'dataContact',
				'contacts' => $this->Contact->get($id),
				'content' => 'contact/v_update.php'
			];
			return view('index-backend.php', $data);
		}
	}

	public function create()
	{
		$data = [
			'title' => 'Contact',
			'child' => 'tambahContact',
			'content' => 'contact/v_tambah.php'
		];
		return view('index-backend.php', $data);
	}

	public function store()
	{
		$image = $this->request->getFile('foto');
		$name = $image->getRandomName();
		$data = [
			'contact_nama' => $this->request->getPost('judul'),
			'contact_tgl'  => date('Y-m-d'),
			'contact_foto' => $name,
		];

		$image->move('./uploads/contact', $name);
		// $image->move(ROOTPATH . 'public/uploads/contact', $name);

		$this->Contact->add($data);

		return redirect()->to(base_url('/admin/contact'));
	}

	public function edit()
	{
		var_dump("Egova");
		exit;
		$image = $this->request->getFile('foto');
		$name = $image->getRandomName();
		$id = $this->request->getPost('id');
		$data = [
			'contact_nama' => $this->request->getPost('namaMobil'),
			'contact_tgl'  => $this->request->getPost('driver'),
			'contact_foto' => $name,
		];

		$image->move('./public/uploads/contacts', $name);
		// $image->move(ROOTPATH . 'public/uploads/contacts', $name);

		$this->Contact->updateContact($data, $id);

		return redirect()->to(base_url('/admin/contact'));
	}

	public function delete($id)
	{
		$this->Contact->deleteContact($id);
		return redirect()->back();
	}

	//--------------------------------------------------------------------

}
