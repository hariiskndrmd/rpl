<div class="container">
	<div class="card">
		<img src="<?= base_url('assets/uploads/') . $berita_id['image'] ?>" class="card-img-top" alt="...">
		<div class="card-body">
			<p class="card-text"><small class="text-muted"><i class="far fa-clock"></i> <?= $berita_id['tanggal'] ?></small>&nbsp;&nbsp;&nbsp;<small class="text-muted"><i class="far fa-user"></i> <?= $berita_id['penulis'] ?></small></p>
			<h4 class="card-title"><?= $berita_id['judul'] ?></h4>
			<p class="card-text"><?= nl2br($berita_id['artikel'])  ?></p>
			<div class="buton-berita">
				<div class="row">
					<div class="col-md-6">
						<a href="<?= base_url('home/previousBerita/') . $berita_id['id'] ?>" class="btn btn-primary">Previous</a>
					</div>
					<div class="col-md-6">
						<a href="<?= base_url('home/nextBerita/') . $berita_id['id'] ?>" class="btn btn-primary float-right">Next</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
