<div class="container">
	<div class="row">
		<?php foreach ($berita as $row) : ?>
			<div class="col-md-6">
				<div class="card mb-3 berita-card">
					<div class="row no-gutters">
						<div class="col-md-5 berita-foto">
							<img src="<?= base_url('assets/uploads/') . $row['image'] ?>" class="card-img" alt="...">
						</div>
						<div class="col-md-7">
							<div class="card-body">
								<p><small class="text-muted"><i class="far fa-clock"></i> <?= $row['tanggal'] ?></small>&nbsp;&nbsp;&nbsp;<small class="text-muted"><i class="far fa-user"></i> <?= $row['penulis'] ?></small></p>
								<h5 class="card-title text-1"><?= $row['judul'] ?></h5>
								<p class="card-text"><?= mb_substr($row['artikel'], 0, 60) ?></p>
								<button id="<?= $row['id'] ?>" class="btn btn-color-1 float-right mb-2 btnBerita">Selengkapnya</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
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
