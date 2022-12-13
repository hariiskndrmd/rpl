	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
				<div class="sidebar-brand-icon rotate-n-15">
					<i class="fas fa-laugh-wink"></i>
				</div>
				<div class="sidebar-brand-text mx-3">Admin <sup>2</sup></div>
			</a>

			<!-- Divider -->
			<hr class="sidebar-divider my-0">

			<!-- Nav Item - Dashboard -->
			<li class="nav-item <?php if ($this->uri->segment(2) == "") echo "active" ?>" href="<?= base_url('/') ?>">
				<a class="nav-link" href="<?= base_url('admin') ?>">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Nav Item - Charts -->
			<li class="nav-item <?php if ($this->uri->segment(2) == "pengguna") echo "active" ?>">
				<a class="nav-link " href="<?= base_url('admin/pengguna') ?>">
					<i class="fas fa-fw fa-user-cog "></i>
					<span>Admin</span></a>
			</li>
			<li class="nav-item <?php if ($this->uri->segment(2) == "crausel") echo "active" ?>">
				<a class="nav-link " href="<?= base_url('admin/crausel') ?>">
					<i class="fas fa-fw fa-layer-group "></i>
					<span>Crausel</span></a>
			</li>
			<li class="nav-item <?php if ($this->uri->segment(2) == "kategori") echo "active" ?>">
				<a class="nav-link " href="<?= base_url('admin/kategori') ?>">
					<i class="fas fa-fw fa-list-alt "></i>
					<span>Kategori Berita</span></a>
			</li>
			<li class="nav-item <?php if ($this->uri->segment(2) == "berita") echo "active" ?>">
				<a class="nav-link " href="<?= base_url('admin/berita') ?>">
					<i class="fas fa-fw fa-newspaper "></i>
					<span>Berita</span></a>
			</li>
			<li class="nav-item <?php if ($this->uri->segment(2) == "projek") echo "active" ?>">
				<a class="nav-link " href="<?= base_url('admin/projek') ?>">
					<i class="fas fa-fw fa-code "></i>
					<span>Projek & Hasil</span></a>
			</li>
			<li class="nav-item <?php if ($this->uri->segment(2) == "galeri") echo "active" ?>">
				<a class="nav-link " href="<?= base_url('admin/galeri') ?>">
					<i class="fas fa-fw fa-images "></i>
					<span>Galeri</span></a>
			</li>
			<li class="nav-item <?php if ($this->uri->segment(2) == "vismis") echo "active" ?>">
				<a class="nav-link " href="<?= base_url('admin/vismis') ?>">
					<i class="fas fa-fw fa-copy "></i>
					<span>Visi & Misi</span></a>
			</li>
			<li class="nav-item <?php if ($this->uri->segment(2) == "navbar") echo "active" ?>">
				<a class="nav-link " href="<?= base_url('admin/navbar') ?>">
					<i class="fas fa-fw fa-bars "></i>
					<span>Navbar</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider d-none d-md-block">

			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>

		</ul>
		<!-- End of Sidebar -->
