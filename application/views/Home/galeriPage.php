<div class="container">
	<div class="galeri">
		<div class="row">
			<?php foreach ($galeri as $row) : ?>
				<div class="col-md-3 p-0 isi-gambar">
					<img src="<?= base_url('assets/uploads/') . $row['gambar'] ?>" class="img-fluid" alt="">
					<div class="bottomleft"><?= $row['judul'] ?></div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
