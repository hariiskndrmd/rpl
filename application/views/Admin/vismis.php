<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
		<div class="buton ml-auto">
			<!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#add"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data</a> -->
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
							<th>Visi</th>
							<th>Misi</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($vismis as $row) : ?>
							<tr>
								<td><?= mb_substr($row['visi'], 0, 60) ?></td>
								<td><?= mb_substr($row['misi'], 0, 200) ?></td>
								<td>
									<a href="<?= base_url('admin/deleteVismis/') ?><?= $row['id'] ?>" class="btn btn-sm btn-danger tombol-hapus"><i class="fas fa-trash"></i></a>
									<a href="<?= base_url('admin/editVismis/') ?><?= $row['id'] ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
									<a href="<?= base_url('admin/detailVismis/') ?><?= $row['id'] ?>" class="btn btn-sm btn-success"><i class="fas fa-search-plus"></i></a>
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
				<h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Visi & Misi</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="post" action="<?= base_url('admin/addVismis') ?>" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="form-group">
						<label>Visi</label>
						<input type="text" class="form-control" name="visi" placeholder="......." minlength="4" required>
					</div>
					<div class="form-group">
						<label for="exampleFormControlTextarea1">Misi</label>
						<textarea class="form-control" name="misi" id="exampleFormControlTextarea1" rows="10" cols="20"></textarea>
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
