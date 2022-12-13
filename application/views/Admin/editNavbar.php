<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
	</div>

	<div class="card shadow mb-4 col-md-12">

		<!-- Card Body -->
		<?= form_open_multipart('admin/updateNavbar'); ?>
		<div class="card-body">
			<div class="col-md-7 justify-content-center mx-auto mt-2 mb-5">
				<div class="form-group">
					<label for="exampleFormControlTextarea1">Nama</label>
					<input class="form-control" name="nama" id="exampleFormControlTextarea1" value="<?= $navbar['nama'] ?>"></input>
				</div>
				<div class="form-group">
					<label for="exampleFormControlTextarea1">Link</label>
					<input class="form-control" name="link" id="exampleFormControlTextarea1" value="<?= $navbar['link'] ?>"></input>
					<input type="hidden" name="id" value="<?= $navbar['id'] ?>">
				</div>
				<button type="submit" class="btn btn-primary float-right">Submit</button>
			</div>

		</div>
		</form>
	</div>
</div>
<!-- /.container-fluid -->
