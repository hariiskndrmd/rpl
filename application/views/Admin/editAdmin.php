<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
	</div>

	<div class="card shadow mb-4 col-md-8">

		<!-- Card Body -->
		<div class="card-body">
			<div class="row">
				<div class="col-md-5">
					<img src="<?= base_url('assets/uploads/' . $profile['image']) ?>" alt="" class="card-img-top">
				</div>
				<div class="col-md-7">
					<?= form_open_multipart('admin/updateAdmin'); ?>
					<div class="form-row">
						<div class="form-group col-md-12">
							<label for="title">Nama Lengkap</label>
							<input type="text" class="form-control" autocomplete="off" name="name" value="<?= $profile['name'] ?>">
							<input type="hidden" class="form-control" autocomplete="off" name="id" id="title" value="<?= $profile['id'] ?>">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-12">
							<label for="title">Username</label>
							<input type="text" class="form-control" autocomplete="off" name="username" id="title" value="<?= $profile['username'] ?>">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group">
							<label for="inputState">Foto Profile</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" name="gambar">
								<label class="custom-file-label" for="inputGroupFile04">Choose file</label>
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-primary float-right">Submit</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- /.container-fluid -->
