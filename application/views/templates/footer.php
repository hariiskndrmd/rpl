	<!-- Footer -->
	<footer class="page-footer font-small pt-4 bg-dark mt-5">
		<div class="container">

			<!-- Footer Links -->
			<div class="container-fluid text-center text-md-left">
				<!-- Grid row -->
				<div class="row">
					<!-- Grid column -->
					<div class="col-md-3 mt-md-0 mt-3">

						<!-- Content -->
						<h4 class="text-uppercase warna3">KONTAK</h4>
						<h5 class="mt-4 warna3"><small>Jl.Jendral Soedirman No.269
								Ciamis,Jawa Barat
								46215
								Indonesia</small></h5>
					</div>
					<!-- Grid column -->
					<hr class="clearfix w-100 d-md-none pb-3">
					<!-- Grid column -->
					<div class="col-md-3 mb-md-0 mb-3">
						<!-- Links -->
						<h5 class="text-uppercase warna3">Link terkait</h5>
						<ul class="list-unstyled mt-4">
							<li>
								<a href="#!" class="warna3">smkn 1 ciamis</a>
							</li>
							<li>
								<a href="#!" class="warna3">lsp smkn1ciamis</a>
							</li>
							<li>
								<a href="#!" class="warna3">lms smkn1ciamis</a>
							</li>
						</ul>

					</div>
					<div class="col-md-3 mb-md-0 mb-3">
						<!-- Links -->
						<h5 class="text-uppercase warna3">menu</h5>
						<ul class="list-unstyled mt-4">
							<?php foreach ($navbar as $row) : ?>
								<li>
									<a href="<?= base_url($row['link']) ?>" class="warna3"><?= $row['nama'] ?></a>
								</li>
							<?php endforeach; ?>
						</ul>

					</div>
					<div class="col-md-3 mb-md-0 mb-3">
						<!-- Links -->
						<h5 class="text-uppercase warna3">ikuti kami</h5>
						<div class="ikuti mt-4">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-3">
										<a class="text-white mr-3" href="#">
											<span class=""><i class="fab fa-facebook-f"></i></span>
										</a>
									</div>
									<div class="col-md-3">
										<a class="text-white mr-3" href="#">
											<span class=""><i class="fab fa-instagram"></i></span>
										</a>
									</div>
									<div class="col-md-3">
										<a class="text-white mr-3" href="#">
											<span class=""><i class="fab fa-google-plus-g"></i></span>
										</a>
									</div>
									<div class="col-md-3">
										<a class="text-white" href="#">
											<span class=""><i class="fab fa-youtube"></i></span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Grid column -->



				</div>
				<!-- Grid row -->

			</div>
			<!-- Footer Links -->

		</div>
		<!-- Copyright -->
		<div class="footer-copyright text-center py-3 warna3">
			© 2020 Copyright: SMKN 1 CIAMIS
		</div>
		<!-- Copyright -->

	</footer>
	<!-- Footer -->


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script>
		$(document).ready(function() {
			$(".berita-card").hover(
				function() {
					$(this).addClass('shadow-lg').css('cursor', 'pointer');
					$(this).addClass('transisi').css('transition', 'all 0.5s ease');
				},
				function() {
					$(this).removeClass('shadow-lg');
					$(this).removeClass('transisi');
				}
			);
		});
	</script>
	<script>
		$(document).ready(function() {
			function detail(id) {
				$.ajax({
					url: "<?= base_url('home/detailBerita') ?>",
					method: "post",
					data: {
						id: id
					},
					success: function(data) {
						$('#post_modal').modal('show');
						$('#post_detail').html(data);
					}
				})
			}

			$(document).on('click', '.btnBerita', function() {
				var id = $(this).attr('id')
				detail(id)
			})

			$(document).on('click', '.previous', function() {
				var id = $(this).attr('id')
				detail(id)
			})
			$(document).on('click', '.next', function() {
				var id = $(this).attr('id')
				detail(id)
			})

		})
	</script>
	</body>

	</html>
