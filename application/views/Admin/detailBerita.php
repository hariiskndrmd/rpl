<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
	</div>

	<div class="card shadow mb-4 col-md-12">

		<!-- Card Body -->
		<div class="card-body">
			<div class="row">
				<div class="col-md-5">
					<img src="<?= base_url('assets/uploads/' . $berita['image']) ?>" alt="" class="card-img-top">
				</div>
				<div class="col-md-7">
					<?= form_open_multipart('admin/updateBerita'); ?>
					<div class="form-row">
						<div class="form-group col-md-12">
							<label for="title">Judul</label>
							<input type="text" class="form-control" autocomplete="off" name="judul" value="<?= $berita['judul'] ?>">
							<input type="hidden" class="form-control" autocomplete="off" name="id" id="title" value="<?= $berita['id'] ?>">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-12">
							<label>Kategori</label>
							<select class="form-control" name="kategori">
								<option selected disabled>Pilih Kategori</option>
								<?php foreach ($kategori as $row) : ?>
									<?php if ($row['id'] == $berita['kategori_id']) : ?>
										<option selected value="<?= $row['id'] ?>"><?= $row['nama_kategori'] ?></option>
									<?php else : ?>
										<option value="<?= $row['id'] ?>"><?= $row['nama_kategori'] ?></option>
									<?php endif; ?>
								<?php endforeach; ?>
							</select>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-12">
							<label for="title">Penulis</label>
							<input type="text" class="form-control" autocomplete="off" name="username" id="title" value="<?= $berita['penulis'] ?>">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group">
							<label for="exampleFormControlTextarea1">Artikel</label>
							<textarea class="form-control" name="artikel" id="exampleFormControlTextarea1" rows="20" cols="70"><?= $berita['artikel'] ?></textarea>
						</div>
					</div>

					</form>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- /.container-fluid -->
