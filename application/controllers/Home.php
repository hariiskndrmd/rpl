<?php

class Home extends CI_Controller
{
	public function index()
	{
		$data['crausel'] = $this->M_home->getCrausel();
		$data['berita'] = $this->M_home->getBerita();
		$data['navbar'] = $this->M_home->getNavbar();

		$data['title'] = "beranda";
		$this->load->view('templates/header');
		$this->load->view('templates/navbar', $data);
		$this->load->view('home/homePage', $data);
		$this->load->view('templates/footer', $data);
	}

	public function tentang()
	{
		$data['caption'] = "Baca Selengkapnya Tentang Kami";
		$data['title'] = "tentang";
		$data['vismis'] = $this->M_home->getVismis();
		$data['navbar'] = $this->M_home->getNavbar();

		$this->load->view('templates/header');
		$this->load->view('templates/navbar', $data);
		$this->load->view('home/plusJumborton', $data);
		$this->load->view('home/tentangPage', $data);
		$this->load->view('templates/footer', $data);
	}

	public function akademik()
	{
		$data['title'] = "akademik";
		$data['navbar'] = $this->M_home->getNavbar();

		$this->load->view('templates/header');
		$this->load->view('templates/navbar', $data);
		$this->load->view('home/plusJumborton', $data);
		$this->load->view('home/akademikPage');
		$this->load->view('templates/footer', $data);
	}

	public function berita()
	{
		$data['title'] = "berita";
		$data['navbar'] = $this->M_home->getNavbar();
		$data['berita'] = $this->M_home->getBerita();

		$this->load->view('templates/header');
		$this->load->view('templates/navbar', $data);
		$this->load->view('home/plusJumborton', $data);
		$this->load->view('home/beritaPage');
		$this->load->view('templates/footer', $data);
	}

	public function detailBerita()
	{
		$id = $this->input->post('id');

		$berita = $this->M_home->detailBerita($id);
		$output = '';
		$data_1 = $this->M_home->detailBeritaPrevious($id);
		$data_2 = $this->M_home->detailBeritaNext($id);

		if ($data_1 == null || $data_2 == null) {
			echo '';
		}

		$if_previous_disable = ($data_1 == "") ? 'disabled' : '';
		$if_next_disable = ($data_2 == "") ? 'disabled' : '';


		$output .= '
			<div class="card">
				<img src="' . base_url('assets/uploads/') . $berita['image'] . '" class="card-img-top" alt="...">
				<div class="card-body">
					<p class="card-text"><small class="text-muted"><i class="far fa-clock"></i> ' . $berita['tanggal'] . '</small>&nbsp;&nbsp;&nbsp;<small class="text-muted"><i class="far fa-user"></i> ' . $berita['penulis'] . '</small></p>
					<h4 class="card-title text-1">' . $berita['judul'] . '</h4>
					<p class="card-text">' . nl2br($berita['artikel']) . '</p>
					<div class="buton-berita">
						<button type="button" name="previous" class="btn btn-color-1 previous" id="' . $data_1["id"] . '" ' . $if_previous_disable . '>Previous</button>
						<button type="button" name="next" class="btn btn-color-1 next " id="' . $data_2["id"] . '" ' . $if_next_disable . '>Next</button>
						<button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		';


		echo $output;
		// $data['title'] = "berita";
		// $data['navbar'] = $this->M_home->getNavbar();

		// $this->load->view('templates/header');
		// $this->load->view('templates/navbar', $data);
		// $this->load->view('home/plusJumborton', $data);
		// $this->load->view('home/detailBeritaPage', $data);
		// $this->load->view('templates/footer', $data);
	}

	public function previousBerita($id)
	{
		$data['berita_id'] = $this->M_home->detailBeritaPrevious($id);
		$data['title'] = "berita";
		$data['navbar'] = $this->M_home->getNavbar();

		$this->load->view('templates/header');
		$this->load->view('templates/navbar', $data);
		$this->load->view('home/plusJumborton', $data);
		$this->load->view('home/detailBeritaPage', $data);
		$this->load->view('templates/footer', $data);
	}

	public function nextBerita($id)
	{
		$data['berita_id'] = $this->M_home->detailBeritaNext($id);
		$data['title'] = "berita";
		$data['navbar'] = $this->M_home->getNavbar();

		$this->load->view('templates/header');
		$this->load->view('templates/navbar', $data);
		$this->load->view('home/plusJumborton', $data);
		$this->load->view('home/detailBeritaPage', $data);
		$this->load->view('templates/footer', $data);
	}

	public function akreditasi()
	{
		$data['title'] = "akreditasi";
		$data['navbar'] = $this->M_home->getNavbar();

		$this->load->view('templates/header');
		$this->load->view('templates/navbar', $data);
		$this->load->view('home/plusJumborton', $data);
		$this->load->view('home/akreditasiPage');
		$this->load->view('templates/footer', $data);
	}

	public function galeri()
	{
		$data['title'] = "galeri";
		$data['galeri'] = $this->M_home->getGaleri();
		$data['navbar'] = $this->M_home->getNavbar();

		$this->load->view('templates/header');
		$this->load->view('templates/navbar', $data);
		$this->load->view('home/plusJumborton', $data);
		$this->load->view('home/galeriPage');
		$this->load->view('templates/footer', $data);
	}

	public function projek()
	{
		$data['title'] = "Projek & Hasil";
		$data['projek'] = $this->M_home->getProjek();
		$data['navbar'] = $this->M_home->getNavbar();

		$this->load->view('templates/header');
		$this->load->view('templates/navbar', $data);
		$this->load->view('home/plusJumborton', $data);
		$this->load->view('home/projekPage');
		$this->load->view('templates/footer', $data);
	}
}
