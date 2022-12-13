<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
		<div class="buton ml-auto">
			<a href="<?= base_url('admin/exportExcelAdmin') ?>" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-file-excel text-white"></i> Export Excel</a>
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
							<th>Foto Profile</th>
							<th>Username</th>
							<th>Nama</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($admin as $row) : ?>
							<tr>
								<td><img src="<?= base_url('assets/uploads/' . $row['image']) ?>" alt="" width="80"></td>
								<td><?= $row['username'] ?></td>
								<td><?= $row['name'] ?></td>
								<td>
									<a href="<?= base_url('admin/deleteAdmin/') ?><?= $row['id'] ?>" class="btn btn-sm btn-danger tombol-hapus"><i class="fas fa-trash"></i></a>
									<a href="<?= base_url('admin/editAdmin/') ?><?= $row['id'] ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
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
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Data Admin</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="post" action="<?= base_url('admin/addAdmin') ?>" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="form-group">
						<label>Nama Lengkap</label>
						<input type="text" class="form-control name" name="name" placeholder="......." minlength="4" required>
						<p><span class="emsg" hidden>*isi nama dengan benar</span></p>
					</div>
					<div class="form-group">
						<label>Username</label>
						<input type="text" class="form-control username" name="username" minlength="4" placeholder="......." required>
						<p><span class="emsg2" hidden>*username harus lebih dari 4 karakter</span></p>
					</div>
					<div class="form-group">
						<label>Kata Sandi</label>
						<input type="password" class="form-control password" name="password" minlength="4" placeholder="......." required>
						<p><span class="emsg3" hidden>*password harus lebih dari 4 karakter</span></p>
					</div>
					<div class="form-group">
						<label for="image">Foto Profile</label>
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
