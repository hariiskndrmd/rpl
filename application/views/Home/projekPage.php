<div class="comuniti text-center m-5">
	<img src="<?= base_url('assets/image/comunity.png') ?>" class="img-flud" width="250" alt="">
</div>

<div class="projek">
	<div class="container">
		<div class="row">
			<?php foreach ($projek as $row) : ?>
				<div class="col-md-6">
					<div class="card">
						<img src="<?= base_url('assets/uploads/') . $row['gambar'] ?>" class="card-img-top" alt="...">
						<div class="card-body">
							<h4 class="card-title text-1 text-judul2"><?= $row['judul'] ?></h4>
							<p class="card-text"><?= nl2br($row['deskripsi']) ?></p>
							<a href="#" class="btn btn-color-1 float-right">Go somewhere</a>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
