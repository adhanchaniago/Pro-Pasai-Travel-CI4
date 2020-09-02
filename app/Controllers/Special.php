<?php

namespace App\Controllers;

use App\Models\SpecialModel;
use App\Models\TripModel;

class Special extends BaseController
{

	public function __construct()
	{
		helper(['form']);
		helper(['pembantu']);
		$this->Special = new SpecialModel();
		$this->Trip = new TripModel();
		//Do your magic here
	}

	public function index($id = false)
	{

		if ($id === false) {
			$data = [
				'title' => 'Special',
				'child' => 'dataSpecial',
				'specials' => $this->Special->get(),
				'content' => 'special/v_index.php'
			];
			return view('index-backend.php', $data);
		} else {
			$data = [
				'title' => 'Special',
				'child' => 'dataSpecial',
				'specials' => $this->Special->get($id),
				'content' => 'special/v_detail.php'
			];
			$trip = $data['specials']->special_trip_array;
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
						'special_kategori'   => $this->request->getPost('kategori'),
						'special_kode'       => $this->request->getPost('kode'),
						'special_nama_paket' => $this->request->getPost('nama'),
						'special_include'    => $this->request->getPost('include'),
						'special_exclude'    => $this->request->getPost('exclude'),
						'special_harga'      => $this->request->getPost('harga'),
						'special_desc'       => $this->request->getPost('desc'),
					];
					$this->Special->edit($id, $data);
					return redirect()->to(base_url('/admin/special'));
				} else {
					$arrayTrip = $this->request->getPost('trip');
					$serialTrip = serialize($arrayTrip);
					$id = $this->request->getPost('id');
					$data = [
						'special_kategori'   => $this->request->getPost('kategori'),
						'special_kode'       => $this->request->getPost('kode'),
						'special_nama_paket' => $this->request->getPost('nama'),
						'special_include'    => $this->request->getPost('include'),
						'special_exclude'    => $this->request->getPost('exclude'),
						'special_trip_array' => $serialTrip,
						'special_harga'      => $this->request->getPost('harga'),
						'special_desc'       => $this->request->getPost('desc'),
					];
					$this->Special->edit($id, $data);
					return redirect()->to(base_url('/admin/special'));
				}
			} else {
				$image = $this->request->getFile('foto');
				$name = $image->getRandomName();
				if ($this->request->getPost('trip') == null) {
					$id = $this->request->getPost('id');
					$data = [
						'special_kategori'   => $this->request->getPost('kategori'),
						'special_kode'       => $this->request->getPost('kode'),
						'special_nama_paket' => $this->request->getPost('nama'),
						'special_include'    => $this->request->getPost('include'),
						'special_exclude'    => $this->request->getPost('exclude'),
						'special_harga'      => $this->request->getPost('harga'),
						'special_desc'       => $this->request->getPost('desc'),
						'special_foto'       => $name,
					];
				} else {
					$arrayTrip = $this->request->getPost('trip');
					$serialTrip = serialize($arrayTrip);
					$id = $this->request->getPost('id');
					$data = [
						'special_kategori'   => $this->request->getPost('kategori'),
						'special_kode'       => $this->request->getPost('kode'),
						'special_nama_paket' => $this->request->getPost('nama'),
						'special_include'    => $this->request->getPost('include'),
						'special_exclude'    => $this->request->getPost('exclude'),
						'special_trip_array' => $serialTrip,
						'special_harga'      => $this->request->getPost('harga'),
						'special_desc'       => $this->request->getPost('desc'),
						'special_foto'       => $name,
					];
				}

				$image->move('./uploads/specials', $name);
				$this->Special->edit($id, $data);
				return redirect()->to(base_url('/admin/special'));
			}
		} else {
			$data = [
				'title' => 'Special',
				'child' => 'dataSpecial',
				'specials' => $this->Special->get($id),
				'trips' => $this->Trip->getTrip(),
				'content' => 'special/v_update.php'
			];
			$trip = $data['specials']->special_trip_array;
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
			'title' => 'Special',
			'child' => 'tambahSpecial',
			'trips' => $this->Trip->getTrip(),
			'content' => 'special/v_tambah.php'
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
			'special_kategori'   => $this->request->getPost('kategori'),
			'special_kode'       => $this->request->getPost('kode'),
			'special_nama_paket' => $this->request->getPost('nama'),
			'special_include'    => $this->request->getPost('include'),
			'special_exclude'    => $this->request->getPost('exclude'),
			'special_trip_array' => $serialTrip,
			'special_harga'      => $this->request->getPost('harga'),
			'special_desc'       => $this->request->getPost('desc'),
			'special_foto'       => $name,
		];

		$image->move('./uploads/specials', $name);

		$this->Special->add($data);

		return redirect()->to(base_url('/admin/special'));
	}

	public function edit()
	{
		var_dump("Egova");
		exit;
		$image = $this->request->getFile('foto');
		$name = $image->getRandomName();
		$id = $this->request->getPost('id');
		$data = [
			'rent_nama_mobil'    => $this->request->getPost('namaMobil'),
			'rent_driver'        => $this->request->getPost('driver'),
			'rent_fuel'          => $this->request->getPost('fuel'),
			'rent_harga'         => $this->request->getPost('harga'),
			'rent_max_jam'       => $this->request->getPost('maxJam'),
			'rent_max_penumpang' => $this->request->getPost('maxPenumpang'),
			'rent_transmisi'     => $this->request->getPost('transmisi'),
			'rent_ac'            => $this->request->getPost('ac'),
			'rent_smoking'       => $this->request->getPost('smoking'),
			'rent_foto'          => $name,
		];

		$image->move('./uploads/specials', $name);

		$this->Special->edit($data, $id);

		return redirect()->to(base_url('/admin/special'));
	}

	public function delete($id)
	{
		$this->Special->hapus($id);
		return redirect()->back();
	}

	//--------------------------------------------------------------------

}
