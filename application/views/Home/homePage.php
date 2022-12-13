<!-- crausel -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<?php
		foreach ($crausel as $key => $value) {
			$active = ($key == 0) ? 'active' : '';
			echo '<li data-target="#carouselExampleCaptions" data-slide-to="' . $key . '" class="' . $active . '"></li>';
		}
		?>
	</ol>
	<div class="carousel-inner">
		<?php foreach ($crausel as $key => $value) {
			$active = ($key == 0) ? 'active' : '';
			echo '	<div class="carousel-item ' . $active . '">
						<img src="' . base_url('assets/uploads/') . $value['image'] . '" class="d-block w-100" alt="...">
					</div>';
		} ?>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
<!-- end crausel -->

<div class="berita">
	<div class="container">
		<div class="judul1 justify-content-center text-center">
			<h1 class="text-judul">Berita Terkini</h1>
			<hr class="garis">
		</div>
		<div class="berita-image">
			<div class="row">
				<?php foreach ($berita as $row) : ?>
					<div class="col-md-4 mt-3 ">
						<div class="card">
							<img src="<?= base_url('assets/uploads/') . $row['image'] ?>" class="img-fluid card-img-top" alt="...">
							<div class="card-body">
								<p class="card-text"><small class="text-muted"><i class="far fa-clock"></i> <?= $row['tanggal'] ?></small>&nbsp;&nbsp;&nbsp;<small class="text-muted"><i class="far fa-user"></i> <?= $row['penulis'] ?></small></p>
								<a class="card-judul" href="<?= base_url('home/detailBerita/') . $row['id'] ?>">
									<h5 class="card-title text-1"><?= $row['judul'] ?></h5>
								</a>
								<p class="card-text"><?= mb_substr($row['artikel'], 0, 60) ?></p>
								<button id="<?= $row['id'] ?>" class="btn btn-color-1 btnBerita">Selengkapnya</button>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
		<div class="justify-content-center text-center mt-5">
			<a href="<?= base_url('home/berita') ?>" class="btn btn-color-1">VIEW ALL NEWS</a>
		</div>
	</div>
</div>

<div class="mt-5 fakta p-5">
	<div class="container">
		<div class="informasi">
			<h1 class="text-white text-judul2">Fakta Jurusan RPL</h1>
			<div class="row mt-5">
				<div class="col-md-3 text-white">
					<img src="<?= base_url('assets/image/icon/icon-siswa.png') ?>" alt="" width="150" alt="workingspace" class="img-fluid">
					<h5 class="isi-informasi mt-4 text-1">120</h5>
					<h5 class="isi-informasi">Jumlah Siswa</h5>
				</div>
				<div class="col-md-3 text-white">
					<img src="<?= base_url('assets/image/icon/icon-buku.png') ?>" alt="" width="150" alt="workingspace" class="img-fluid">
					<h5 class="isi-informasi mt-4 text-1">12</h5>
					<h5 class="isi-informasi">Mata Pelajaran</h5>
				</div>
				<div class="col-md-3 text-white">
					<img src="<?= base_url('assets/image/icon/icon-tropi.png') ?>" alt="" width="150" alt="workingspace" class="img-fluid">
					<h5 class="isi-informasi mt-4 text-1">A</h5>
					<h5 class="isi-informasi">Akreditas Nasional</h5>
				</div>
				<div class="col-md-3 text-white">
					<img src="<?= base_url('assets/image/icon/icon-grafik.png') ?>" alt="" width="150" alt="workingspace" class="img-fluid">
					<h5 class="isi-informasi mt-4 text-1">70%</h5>
					<h5 class="isi-informasi">Berperan di Sekolah</h5>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- working space -->
<div class="working p-5">
	<div class="row">
		<div class="col-lg-6">
			<img src="<?= base_url('assets/image/workingImg3.png') ?>" alt="working" class="img-fluid">
		</div>
		<div class="col-lg-6 text-center justify-content-center">
			<img src="<?= base_url('assets/image/smk_bisa.png') ?>" width="300" alt="working" class="img-fluid">
			<div class="mt-5"></div>
			<h1 class="ngajak"><b>bergabung</b> bersama rpl <span class="text-center">(programer)</span> </h1>
			<hr class="garis">
			<p class="ngajak2">Jurusan Terbaik di Ciamis</p>
			<a href="http://ppdb.smkn1ciamis.id" target="blank" class="btn btn-color-1 mt-4">DAFTAR SEKARANG</a>
		</div>
	</div>
</div>

<div class="modal fade bd-example-modal-lg" id="post_modal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-body" id="post_detail">

			</div>
		</div>
	</div>
</div>
