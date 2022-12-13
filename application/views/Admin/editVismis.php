<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
	</div>

	<div class="card shadow mb-4 col-md-12">

		<!-- Card Body -->
		<?= form_open_multipart('admin/updateVismis'); ?>
		<div class="card-body">
			<div class="col-md-7 justify-content-center mx-auto mt-2 mb-5">
				<div class="form-row">
					<div class="form-group">
						<label for="exampleFormControlTextarea1">Visi</label>
						<textarea class="form-control" name="visi" id="exampleFormControlTextarea1" rows="10" cols="70"><?= $vismis['visi'] ?></textarea>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group">
						<label for="exampleFormControlTextarea1">Misi</label>
						<textarea class="form-control" name="misi" id="exampleFormControlTextarea1" rows="20" cols="70"><?= $vismis['misi'] ?></textarea>
						<input type="hidden" name="id" value="<?= $vismis['id'] ?>">
					</div>
				</div>
				<button type="submit" class="btn btn-primary float-right">Submit</button>
			</div>

		</div>
		</form>
	</div>
</div>
<!-- /.container-fluid -->
