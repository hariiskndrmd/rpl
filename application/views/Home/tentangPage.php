<div class="pemberitahu mt-5 justify-content-center text-center">
	<div class="container">
		<h1 class="judul-2">Tentang Rekayasa Perangkat Lunak</h1>
		<p class="caption-2">Tempat Belajar Manimba Ilmu Bersama</p>
		<hr class="mt-5 garis-2 mb-5">
		<div class="isi-2">
			<div class="row">
				<div class="col-md-3">
					<h3 class="judul-c">Guru</h3>
					<h3 class="angka-c pt-2">4</h3>
				</div>
				<div class="col-md-3">
					<h3 class="judul-c">Mata Pelajaran</h3>
					<h3 class="angka-c pt-2">12</h3>
				</div>
				<div class="col-md-3">
					<h3 class="judul-c">Dibuka Pada</h3>
					<h3 class="angka-c pt-2">2012</h3>
				</div>
				<div class="col-md-3">
					<h3 class="judul-c">Lokasi</h3>
					<h3 class="angka-c pt-2">Smkn 1 Ciamis</h3>
				</div>
			</div>
		</div>
		<hr class="mt-5 garis-2">
	</div>
</div>

<div class="visi">
	<div class="container">
		<div class="row">
			<div class="col-md-6 pl-5 pt-5 pr-5 justify-content-center mx-auto text-center">
				<img src="<?= base_url('assets/image/pakiki.jpg') ?>" alt="">
			</div>
			<div class="col-md-6 pl-5 pt-5 pb-5 kata">
				<h5 class="kata1">Ketua Jurusan Rekayasa Perangkat Lunak</h5>
				<h2 class="kata2">Kiki Supendi, ST,MT</h2>
				<br>
				<br>
				<?php
				foreach ($vismis as $row) : ?>
					<h5>Visi :</h5>
					<p><?= $row['visi'] ?></p>
					<h5>Misi :</h5>
					<p><?= nl2br($row['misi']) ?></p>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>

<div class="apa-itu mt-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1 class="apa-1">Apa itu RPL ?</h1>
				<hr class="garis4">
				<br>
				<br>
				<p class="apa-2">
					Satu bidang profesi yang mendalami cara-cara pengembangan perangkat lunak termasuk pembuatan, pemeliharaan, manajemen organisasi pengembangan perangkat lunak dan manajemen kualitas.
				</p>
			</div>
			<div class="col-md-6">
				<img src="<?= base_url('assets/image/rpl1.jpeg') ?>" alt="">
			</div>
		</div>
	</div>
</div>
