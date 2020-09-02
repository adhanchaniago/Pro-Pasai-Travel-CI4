<?php

namespace App\Controllers;

use App\Models\GalleryModel;

class Gallery extends BaseController
{

	public function __construct()
	{
		helper(['form']);
		helper(['pembantu']);
		$this->Gallery = new GalleryModel();
	}

	public function index($id = false)
	{

		if ($id === false) {
			$data = [
				'title' => 'Gallery',
				'child' => 'dataGallery',
				'gallerys' => $this->Gallery->get(),
				'content' => 'gallery/v_index.php'
			];
			return view('index-backend.php', $data);
		} else {
			$data = [
				'title' => 'Gallery',
				'child' => 'dataGallery',
				'gallerys' => $this->Gallery->get($id),
				'content' => 'gallery/v_detail.php'
			];
			return view('index-backend.php', $data);
		}
	}


	public function update($id = false)
	{
		if ($id === false) {
			$image = $this->request->getFile('foto');
			$cek = $image->getName();
			if ($cek == '') {
				$id = $this->request->getPost('id');
				$data = [
					'gallery_nama' => $this->request->getPost('judul'),
				];

				$this->Gallery->edit($id, $data);

				return redirect()->to(base_url('/admin/gallery'));
			} else {
				$id = $this->request->getPost('id');
				$image = $this->request->getFile('foto');
				$name = $image->getRandomName();
				$data = [
					'gallery_nama' => $this->request->getPost('judul'),
					'gallery_foto' => $name,
				];

				$this->Gallery->edit($id, $data);
				$image->move('./uploads/gallery', $name);

				return redirect()->to(base_url('/admin/gallery'));
			}
		} else {
			$data = [
				'title' => 'Gallery',
				'child' => 'dataGallery',
				'gallerys' => $this->Gallery->get($id),
				'content' => 'gallery/v_update.php'
			];
			return view('index-backend.php', $data);
		}
	}

	public function create()
	{
		$data = [
			'title' => 'Gallery',
			'child' => 'tambahGallery',
			'content' => 'gallery/v_tambah.php'
		];
		return view('index-backend.php', $data);
	}

	public function store()
	{
		$image = $this->request->getFile('foto');
		$name = $image->getRandomName();
		$data = [
			'gallery_nama' => $this->request->getPost('judul'),
			'gallery_tgl'  => date('Y-m-d'),
			'gallery_foto' => $name
		];

		$image->move('./uploads/gallery', $name);

		$this->Gallery->add($data);

		return redirect()->to(base_url('/admin/gallery'));
	}

	public function delete($id)
	{
		$this->Gallery->deleteGallery($id);
		return redirect()->back();
	}

	//--------------------------------------------------------------------

}
