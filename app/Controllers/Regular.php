<?php

namespace App\Controllers;

use App\Models\RegularModel;
use App\Models\TripModel;

class Regular extends BaseController
{

	public function __construct()
	{
		helper(['form']);
		helper(['pembantu']);
		$this->Regular = new RegularModel();
		$this->Trip = new TripModel();
		//Do your magic here
	}

	public function index($id = false)
	{

		if ($id === false) {
			$data = [
				'title' => 'Regular',
				'child' => 'dataRegular',
				'regulars' => $this->Regular->getRegular(),
				'content' => 'regular/v_index.php'
			];
			return view('index-backend.php', $data);
		} else {
			$data = [
				'title' => 'Regular',
				'child' => 'dataRegular',
				'regulars' => $this->Regular->getRegular($id),
				'content' => 'regular/v_detail.php'
			];
			$trip = $data['regulars']->relugar_trip_array;
			$arrTrip = unserialize($trip);
			$hasil = [];
			foreach ($arrTrip as $val) :
				$hasil[] = $this->Trip->getTrip($val);
			endforeach;
			$data['hasil'] = $hasil;
			return view('index-backend.php', $data);
		}
	}

	public function update($id = false)
	{
		if ($id === false) {
			$image = $this->request->getFile('foto');
			$cek = $image->getName();
			if ($cek == '') {
				if ($this->request->getPost('trip') == null) {
					$id = $this->request->getPost('id');
					$data = [
						'relugar_kode'       => $this->request->getPost('kode'),
						'relugar_nama_paket' => $this->request->getPost('nama'),
						'relugar_include'    => $this->request->getPost('include'),
						'relugar_exclude'    => $this->request->getPost('exclude'),
						'relugar_rute'       => $this->request->getPost('rute'),
						'relugar_harga'      => $this->request->getPost('harga'),
						'relugar_desc'       => $this->request->getPost('desc'),
					];
					$this->Regular->updateRegular($id, $data);
					return redirect()->to(base_url('/admin/regular'));
				} else {
					$arrayTrip = $this->request->getPost('trip');
					$serialTrip = serialize($arrayTrip);
					$id = $this->request->getPost('id');
					$data = [
						'relugar_kode'       => $this->request->getPost('kode'),
						'relugar_nama_paket' => $this->request->getPost('nama'),
						'relugar_include'    => $this->request->getPost('include'),
						'relugar_exclude'    => $this->request->getPost('exclude'),
						'relugar_rute'       => $this->request->getPost('rute'),
						'relugar_trip_array' => $serialTrip,
						'relugar_harga'      => $this->request->getPost('harga'),
						'relugar_desc'       => $this->request->getPost('desc'),
					];
					$this->Regular->updateRegular($id, $data);
					return redirect()->to(base_url('/admin/regular'));
				}
			} else {
				$image = $this->request->getFile('foto');
				$name = $image->getRandomName();
				if ($this->request->getPost('trip') == null) {
					$id = $this->request->getPost('id');
					$data = [
						'relugar_kode'       => $this->request->getPost('kode'),
						'relugar_nama_paket' => $this->request->getPost('nama'),
						'relugar_include'    => $this->request->getPost('include'),
						'relugar_exclude'    => $this->request->getPost('exclude'),
						'relugar_rute'       => $this->request->getPost('rute'),
						'relugar_harga'      => $this->request->getPost('harga'),
						'relugar_desc'       => $this->request->getPost('desc'),
						'relugar_foto'       => $name,
					];
				} else {
					$arrayTrip = $this->request->getPost('trip');
					$serialTrip = serialize($arrayTrip);
					$id = $this->request->getPost('id');
					$data = [
						'relugar_kode'       => $this->request->getPost('kode'),
						'relugar_nama_paket' => $this->request->getPost('nama'),
						'relugar_include'    => $this->request->getPost('include'),
						'relugar_exclude'    => $this->request->getPost('exclude'),
						'relugar_rute'       => $this->request->getPost('rute'),
						'relugar_trip_array' => $serialTrip,
						'relugar_harga'      => $this->request->getPost('harga'),
						'relugar_desc'       => $this->request->getPost('desc'),
						'relugar_foto'       => $name,
					];
				}

				$image->move('./uploads/regulars', $name);
				$this->Regular->updateRegular($id, $data);
				return redirect()->to(base_url('/admin/regular'));
			}
		} else {
			$data = [
				'title' => 'Regular',
				'child' => 'dataRegular',
				'regulars' => $this->Regular->getRegular($id),
				'trips' => $this->Trip->getTrip(),
				'content' => 'regular/v_update.php'
			];
			$trip = $data['regulars']->relugar_trip_array;
			$arrTrip = unserialize($trip);
			$hasil = [];
			foreach ($arrTrip as $val) :
				$hasil[] = $this->Trip->getTrip($val);
			endforeach;
			$data['hasil'] = $hasil;
			return view('index-backend.php', $data);
		}
	}

	public function create()
	{
		$data = [
			'title' => 'Regular',
			'child' => 'tambahRegular',
			'trips' => $this->Trip->getTrip(),
			'content' => 'regular/v_tambah.php'
		];
		return view('index-backend.php', $data);
	}

	public function store()
	{
		$arrayTrip = $this->request->getPost('trip');
		$serialTrip = serialize($arrayTrip);

		$image = $this->request->getFile('foto');
		$name = $image->getRandomName();
		$data = [
			'relugar_kode'       => $this->request->getPost('kode'),
			'relugar_nama_paket' => $this->request->getPost('nama'),
			'relugar_include'    => $this->request->getPost('include'),
			'relugar_exclude'    => $this->request->getPost('exclude'),
			'relugar_rute'       => $this->request->getPost('rute'),
			'relugar_trip_array' => $serialTrip,
			'relugar_harga'      => $this->request->getPost('harga'),
			'relugar_desc'       => $this->request->getPost('desc'),
			'relugar_foto'       => $name,
		];

		$image->move('./uploads/regulars', $name);
		// $image->move(ROOTPATH . 'public/uploads/regulars', $name);

		$this->Regular->insertRegular($data);

		return redirect()->to(base_url('/admin/regular'));
	}

	public function delete($id)
	{
		$this->Regular->delete($id);
		return redirect()->back();
	}

	//--------------------------------------------------------------------

}
