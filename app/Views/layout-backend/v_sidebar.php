<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="/admin/home" class="brand-link">
		<img src="<?= base_url(); ?>/logo_baru.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">PASAI West Sumatera Tour</span>
	</a>
	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<!-- <div class="image">
				<img src="<?= base_url(); ?>/assets-backend/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
			</div> -->
			<div class="info">
				<a href="#" class="d-block">Welcome, Administrator</a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class font-awesome or any other icon font library -->
				<li class="nav-item ">
					<a href="/admin/home" class="nav-link <?php echo ($title == "Home") ? "active" : ""; ?>">
						<i class="nav-icon fas fa-home"></i>
						<p>
							Home
						</p>
					</a>

				</li>
				<li class="nav-header">PACKAGES</li>
				<li class="nav-item has-treeview <?php echo ($title == "Rent") ? "menu-open" : ""; ?>">
					<a href="/admin/rent" class="nav-link <?php echo ($title == "Rent") ? "active" : ""; ?>">
						<i class="nav-icon fas fa-car"></i>
						<p>
							Rental For Tours & Education
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="/admin/rent/store" class="nav-link <?php echo ($child == "tambahRent") ? "active" : ""; ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Tambah Data</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="/admin/rent" class="nav-link <?php echo ($child == "dataRent") ? "active" : ""; ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Data</p>
							</a>
						</li>
					</ul>
				</li>

				<li class="nav-item has-treeview <?php echo ($title == "Regular") ? "menu-open" : ""; ?>">
					<a href="/admin/regular" class="nav-link <?php echo ($title == "Regular") ? "active" : ""; ?>">
						<i class="nav-icon fas fa-compass"></i>
						<p>
							Regular Tours
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="/admin/regular/store" class="nav-link <?php echo ($child == "tambahRegular") ? "active" : ""; ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Tambah Data</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="/admin/regular" class="nav-link <?php echo ($child == "dataRegular") ? "active" : ""; ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Data</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item has-treeview <?php echo ($title == "Special") ? "menu-open" : ""; ?>">
					<a href="/admin/special" class="nav-link <?php echo ($title == "Special") ? "active" : ""; ?>">
						<i class="nav-icon fas fa-hiking"></i>
						<p>
							Special Tours
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="/admin/special/store" class="nav-link <?php echo ($child == "tambahSpecial") ? "active" : ""; ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Tambah Data</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="/admin/special" class="nav-link <?php echo ($child == "dataSpecial") ? "active" : ""; ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Data</p>
							</a>
						</li>
					</ul>
				</li>


				<li class="nav-header">MASTERS</li>
				<li class="nav-item has-treeview <?php echo ($title == "Trip") ? "menu-open" : ""; ?>">
					<a href="/admin/trip" class="nav-link <?php echo ($title == "Trip") ? "active" : ""; ?>">
						<i class="nav-icon fas fa-route"></i>
						<p>
							Trips
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="/admin/trip/store" class="nav-link <?php echo ($child == "tambahTrip") ? "active" : ""; ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Tambah Data</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="/admin/trip" class="nav-link <?php echo ($child == "dataTrip") ? "active" : ""; ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Data</p>
							</a>
						</li>
					</ul>
				</li>

				<li class="nav-item has-treeview <?php echo ($title == "Gallery") ? "menu-open" : ""; ?>">
					<a href="/admin/gallery" class="nav-link <?php echo ($title == "Gallery") ? "active" : ""; ?>">
						<i class="nav-icon fas fa-image"></i>
						<p>
							Gallery
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="/admin/gallery/store" class="nav-link <?php echo ($child == "tambahGallery") ? "active" : ""; ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Tambah Data</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="/admin/gallery" class="nav-link <?php echo ($child == "dataGallery") ? "active" : ""; ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Data</p>
							</a>
						</li>
					</ul>
				</li>

				<li class="nav-item has-treeview <?php echo ($title == "News") ? "menu-open" : ""; ?>">
					<a href="/admin/news" class="nav-link <?php echo ($title == "News") ? "active" : ""; ?>">
						<i class="nav-icon fas fa-newspaper"></i>
						<p>
							News
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="/admin/news/store" class="nav-link <?php echo ($child == "tambahNews") ? "active" : ""; ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Tambah Data</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="/admin/news" class="nav-link <?php echo ($child == "dataNews") ? "active" : ""; ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>Data</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-header">ABOUT</li>
				<li class="nav-item <?php echo ($title == "Contact") ? "menu-open" : ""; ?>">
					<a href="/admin/contact" class="nav-link <?php echo ($title == "Contact") ? "active" : ""; ?>">
						<i class="nav-icon fas fa-id-card"></i>
						<p>
							Contacts
						</p>
					</a>
				</li>
				<li class="nav-item <?php echo ($title == "Profil") ? "menu-open" : ""; ?>">
					<a href="/admin/profil" class="nav-link <?php echo ($title == "Profil") ? "active" : ""; ?>">
						<i class="nav-icon fas fa-building"></i>
						<p>
							Profil
						</p>
					</a>
				</li>
				<li class="nav-header">SETTING</li>
				<li class="nav-item">
					<a href="<?= base_url('logout') ?>" class="nav-link">
						<i class="nav-icon fas  fa-power-off"></i>
						<p>
							Logout
						</p>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>