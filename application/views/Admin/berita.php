<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
		<div class="buton ml-auto">
			<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#add"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data</a>
		</div>
	</div>

	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Gambar</th>
							<th>Judul</th>
							<th>Tanggal</th>
							<!-- <th>Penulis</th> -->
							<th>kategori</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($berita as $row) : ?>
							<tr>
								<td><img src="<?= base_url('assets/uploads/' . $row['image']) ?>" alt="" width="80"></td>
								<td><?= $row['judul'] ?></td>
								<td><?= $row['tanggal'] ?></td>
								<!-- <td><?= $row['penulis'] ?></td> -->
								<td><?= $row['nama_kategori'] ?></td>
								<td>
									<a href="<?= base_url('admin/deleteBerita/') ?><?= $row['id'] ?>" class="btn btn-sm btn-danger tombol-hapus"><i class="fas fa-trash"></i></a>
									<a href="<?= base_url('admin/editBerita/') ?><?= $row['id'] ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
									<a href="<?= base_url('admin/detailBerita/') ?><?= $row['id'] ?>" class="btn btn-sm btn-success"><i class="fas fa-search-plus"></i></a>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Berita</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="post" action="<?= base_url('admin/addBerita') ?>" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="form-group">
						<label>Judul</label>
						<input type="text" class="form-control" name="judul" placeholder="......." minlength="4" required>
					</div>
					<div class="form-group">
						<label>Kategori</label>
						<select class="form-control" name="kategori">
							<option selected disabled>Pilih Kategori</option>
							<?php foreach ($kategori as $row) : ?>
								<option value="<?= $row['id'] ?>"><?= $row['nama_kategori'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-group">
						<input type="hidden" class="form-control" name="penulis" value="<?= $profile['name'] ?>" placeholder=".......">
					</div>
					<div class="form-group">
						<label for="exampleFormControlTextarea1">Artikel</label>
						<textarea class="form-control" name="artikel" id="exampleFormControlTextarea1" rows="5" cols="10"></textarea>
					</div>
					<div class="form-group">
						<label for="image">Gambar Berita</label>
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="image" name="gambar">
							<label class="custom-file-label" for="image">Choose file</label>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>
