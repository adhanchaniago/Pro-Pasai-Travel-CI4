<?php

namespace App\Controllers;

use App\Models\RentModel;
use App\Models\RegularModel;
use App\Models\ContactModel;
use App\Models\ProfilModel;
use App\Models\SpecialModel;
use App\Models\NewsModel;
use App\Models\GalleryModel;
use App\Models\TripModel;


class Home extends BaseController
{

	public function __construct()
	{
		helper(['form']);
		helper(['pembantu']);
		$this->Rent = new RentModel();
		$this->Contact = new ContactModel();
		$this->Profil = new ProfilModel();
		$this->Regular = new RegularModel();
		$this->Special = new SpecialModel();
		$this->News = new NewsModel();
		$this->Gallery = new GalleryModel();
		$this->Trip = new TripModel();
		//Do your magic here
	}

	public function index()
	{
		$pager = \Config\Services::pager();
		$data['title'] = 'Home';
		$data['menu'] = 'home';
		$data['contacts'] = $this->Contact->get(1);
		$data['profils'] = $this->Profil->get(1);
		$data['rents'] = $this->Rent->getRent();
		$data['regulars'] = $this->Regular->getRegular();
		$data['specials'] = $this->Special->get();
		$data['newsLimit'] = $this->News->getLimit();
		$data['news'] = $this->News->paginate(1, 'bootstrap');
		$data['pager'] = $this->News->pager;
		$data['gallerys'] = $this->Gallery->get();
		$data['galleryBanner'] = $this->Gallery->getBanner();
		$data['gallerysfooter'] = $this->Gallery->gallerysfooter();
		return view('index-frontend', $data);
	}

	public function special($id = false)
	{
		if ($id === false) {
			$data['title'] = 'Special';
			$data['menu'] = 'packages';
			$data['contacts'] = $this->Contact->get(1);
			$data['profils'] = $this->Profil->get(1);
			$data['rents'] = $this->Rent->getRent();
			$data['regulars'] = $this->Regular->getRegular();
			$data['specials'] = $this->Special->get();
			$data['newsLimit'] = $this->News->getLimit();
			$data['news'] = $this->News->paginate(1, 'bootstrap');
			$data['pager'] = $this->News->pager;
			$data['gallerys'] = $this->Gallery->get();
			$data['gallerysfooter'] = $this->Gallery->gallerysfooter();
			return view('layout-frontend/pages/special', $data);
		} else {
			$data['title'] = 'Special';
			$data['menu'] = 'packages';
			$data['contacts'] = $this->Contact->get(1);
			$data['profils'] = $this->Profil->get(1);
			$data['specials'] = $this->Special->get($id);

			$trip = $data['specials']->special_trip_array;
			$arrTrip = unserialize($trip);
			$hasil = [];
			foreach ($arrTrip as $no => $val) :
				$hasil[] = $this->Trip->getTrip($val);
			endforeach;

			$data['hasil'] = $hasil;

			$data['newsLimit'] = $this->News->getLimit();
			$data['news'] = $this->News->paginate(1, 'bootstrap');
			$data['pager'] = $this->News->pager;
			$data['gallerys'] = $this->Gallery->get();
			$data['gallerysfooter'] = $this->Gallery->gallerysfooter();
			return view('layout-frontend/pages/detailSpecial', $data);
		}
	}

	public function regular($id = false)
	{
		if ($id === false) {
			$data['title'] = 'Regular';
			$data['menu'] = 'packages';
			$data['contacts'] = $this->Contact->get(1);
			$data['profils'] = $this->Profil->get(1);
			$data['rents'] = $this->Rent->getRent();
			$data['newsLimit'] = $this->News->getLimit();
			$data['regulars'] = $this->Regular->getRegular();
			$data['specials'] = $this->Special->get();
			$data['news'] = $this->News->paginate(1, 'bootstrap');
			$data['pager'] = $this->News->pager;
			$data['gallerys'] = $this->Gallery->get();
			$data['gallerysfooter'] = $this->Gallery->gallerysfooter();
			return view('layout-frontend/pages/regular', $data);
		} else {
			$data['title'] = 'Regular';
			$data['menu'] = 'packages';
			$data['contacts'] = $this->Contact->get(1);
			$data['profils'] = $this->Profil->get(1);
			$data['rents'] = $this->Rent->getRent();
			$data['regulars'] = $this->Regular->getRegular($id);
			$trip = $data['regulars']->relugar_trip_array;
			$arrTrip = unserialize($trip);
			$hasil = [];
			foreach ($arrTrip as $no => $val) :
				$hasil[] = $this->Trip->getTrip($val);
			endforeach;

			$data['hasil'] = $hasil;

			$data['specials'] = $this->Special->get();
			$data['newsLimit'] = $this->News->getLimit();
			$data['news'] = $this->News->paginate(1, 'bootstrap');
			$data['pager'] = $this->News->pager;
			$data['gallerys'] = $this->Gallery->get();
			$data['gallerysfooter'] = $this->Gallery->gallerysfooter();
			return view('layout-frontend/pages/detailRegular', $data);
		}
	}

	public function getOneTrip($data)
	{
		var_dump(unserialize($data));
		exit;
	}

	public function rental($id = false)
	{
		if ($id === false) {
			$data['title'] = 'Rental';
			$data['menu'] = 'packages';
			$data['contacts'] = $this->Contact->get(1);
			$data['profils'] = $this->Profil->get(1);
			$data['rents'] = $this->Rent->getRent();
			$data['regulars'] = $this->Regular->getRegular();
			$data['specials'] = $this->Special->get();
			$data['news'] = $this->News->paginate(1, 'bootstrap');
			$data['newsLimit'] = $this->News->getLimit();
			$data['pager'] = $this->News->pager;
			$data['gallerys'] = $this->Gallery->get();
			$data['gallerysfooter'] = $this->Gallery->gallerysfooter();
			return view('layout-frontend/pages/rent', $data);
		} else {
			$data['title'] = 'Detail';
			$data['menu'] = 'packages';
			$data['contacts'] = $this->Contact->get(1);
			$data['profils'] = $this->Profil->get(1);
			$data['regulars'] = $this->Regular->getRegular();
			$data['specials'] = $this->Special->get();
			$data['news'] = $this->News->get();
			$data['newsLimit'] = $this->News->getLimit();
			$data['gallerys'] = $this->Gallery->get();
			$data['rents'] = $this->Rent->getRent($id);
			$data['gallerysfooter'] = $this->Gallery->gallerysfooter();
			return view('layout-frontend/pages/detailRental', $data);
		}
	}


	public function contact()
	{
		$data['title'] = 'Home';
		$data['menu'] = 'contact';
		$data['profils'] = $this->Profil->get(1);
		$data['contacts'] = $this->Contact->get(1);
		$data['gallerys'] = $this->Gallery->get();
		$data['news'] = $this->News->paginate(1, 'bootstrap');
		$data['pager'] = $this->News->pager;
		$data['gallerysfooter'] = $this->Gallery->gallerysfooter();
		return view('layout-frontend/pages/contact', $data);
	}

	public function gallery()
	{
		$data['title'] = 'Home';
		$data['menu'] = 'gallery';
		$data['profils'] = $this->Profil->get(1);
		$data['contacts'] = $this->Contact->get(1);
		$data['gallerys'] = $this->Gallery->get();
		$data['news'] = $this->News->paginate(1, 'bootstrap');
		$data['newsLimit'] = $this->News->getLimit();
		$data['pager'] = $this->News->pager;
		$data['gallerysfooter'] = $this->Gallery->gallerysfooter();
		return view('layout-frontend/pages/gallery', $data);
	}

	public function news()
	{
		$data['title'] = 'Home';
		$data['menu'] = 'news';
		$data['profils'] = $this->Profil->get(1);
		$data['contacts'] = $this->Contact->get(1);
		$data['gallerys'] = $this->Gallery->get();
		$data['newsLimit'] = $this->News->getLimit();
		$data['news'] = $this->News->paginate(1, 'bootstrap');
		$data['pager'] = $this->News->pager;
		$data['gallerysfooter'] = $this->Gallery->gallerysfooter();
		return view('layout-frontend/pages/news', $data);
	}
	public function home()
	{
		// return view('welcome_message');
		echo "Selamat datang di halaman hoome";
	}

	//--------------------------------------------------------------------

}
