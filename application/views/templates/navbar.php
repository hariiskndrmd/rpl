<!-- navbar -->
<nav class="">
	<div class="col bg-color-1 pt-1 pb-1">
		<div class="row">
			<div class="col-md-12">
				<a class="text-white mr-3 ml-5" href="#">
					<span class=""><i class="fab fa-facebook-f"></i></span>
				</a>
				<a class="text-white mr-3" href="#">
					<span class=""><i class="fab fa-instagram"></i></span>
				</a>
				<a class="text-white mr-3" href="#">
					<span class=""><i class="fab fa-google-plus-g"></i></span>
				</a>
				<a class="text-white" href="#">
					<span class=""><i class="fab fa-youtube"></i></span>
				</a>

				<div class="float-right">
					<!-- <a class="nav2" href="<?= base_url('home/akreditasi') ?>">akreditasi</a> -->
					<a class="nav2" href="<?= base_url('home/galeri') ?>">galeri</a>
				</div>
			</div>
		</div>

	</div>
</nav>

<nav class="navbar navbar-expand-md sticky-top bg-nav-1 pl-3 navbar-dark">
	<a class="navbar-brand text-dark ml-4" href="<?= base_url('home/') ?>">
		<img src="<?= base_url('assets/image/logo-rpl.png') ?>" width="80" height="50" class="d-inline-block align-top" alt="">
	</a>
	<div id="navigation-bar" class="ml-auto">
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav ">
				<?php foreach ($navbar as $row) : ?>
					<?php if ($title == $row['nama']) : ?>
						<a class="nav-item nav-link text-warning" href="<?= base_url($row['link']) ?>"><?= $row['nama'] ?></a>
					<?php else : ?>
						<a class="nav-item nav-link text-light" href="<?= base_url($row['link']) ?>"><?= $row['nama'] ?></a>
					<?php endif; ?>
				<?php endforeach; ?>
				<!-- <a class="nav-item nav-link <?php if ($this->uri->segment(2) == "") echo "text-warning";
													else echo "text-light" ?>" href="<?= base_url('/') ?>">Beranda</a>
				<a class="nav-item nav-link <?php if ($this->uri->segment(2) == "tentang") echo "text-warning";
											else echo "text-light" ?>" href="<?= base_url('home/tentang') ?>">tentang</a>
				<a class="nav-item nav-link <?php if ($this->uri->segment(2) == "akademik") echo "text-warning";
											else echo "text-light" ?>" href="<?= base_url('home/akademik') ?>">akademik</a>
				<a class="nav-item nav-link <?php if ($this->uri->segment(2) == "berita") echo "text-warning";
											else echo "text-light" ?>" href="<?= base_url('home/berita') ?>">Berita</a>
				<a class="nav-item nav-link <?php if ($this->uri->segment(2) == "projek") echo "text-warning";
											else echo "text-light" ?>" href="<?= base_url('home/projek') ?>">Projek & hasil</a>
				<a class="nav-item nav-link text-light" target="blank" href="http://ppdb.smkn1ciamis.id">registrasi</a> -->
			</div>
		</div>
	</div>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
</nav>
<!-- end navbar -->
