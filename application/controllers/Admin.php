<?php

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') !== true) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Anda Belum Login</div>');
			redirect('auth');
		}
	}

	public function index()
	{
		$id = $this->session->userdata('id');
		$data['profile'] = $this->db->get_where('tb_pengguna', ['id' => $id])->row_array();
		$data['title'] = "Dashboard";
		$this->load->view('templates2/header', $data);
		$this->load->view('templates2/sidebar', $data);
		$this->load->view('templates2/navbar', $data);
		$this->load->view('admin/dashboard', $data);
		$this->load->view('templates2/footer', $data);
	}

	// AdminPage

	public function pengguna()
	{
		$id = $this->session->userdata('id');
		$data['profile'] = $this->db->get_where('tb_pengguna', ['id' => $id])->row_array();
		$data['title'] = "Admin";
		$data['admin'] = $this->M_admin->getAdmin();
		$this->load->view('templates2/header', $data);
		$this->load->view('templates2/sidebar', $data);
		$this->load->view('templates2/navbar', $data);
		$this->load->view('admin/pengguna', $data);
		$this->load->view('templates2/footer', $data);
	}

	public function addAdmin()
	{
		$this->M_admin->add_admin();
		$this->session->set_flashdata('flash', 'Ditambah');
		redirect('admin/pengguna');
	}

	public function deleteAdmin($id)
	{
		$this->M_admin->delete_admin($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('admin/pengguna');
	}

	public function editAdmin($id)
	{
		$id = $this->session->userdata('id');
		$data['profile'] = $this->db->get_where('tb_pengguna', ['id' => $id])->row_array();
		$data['title'] = "Update Admin";

		$this->load->view('templates2/header', $data);
		$this->load->view('templates2/sidebar', $data);
		$this->load->view('templates2/navbar', $data);
		$this->load->view('admin/editAdmin', $data);
		$this->load->view('templates2/footer', $data);
	}

	public function updateAdmin()
	{
		$this->M_admin->update_admin();
		$this->session->set_flashdata('flash', 'Diubah');
		redirect('admin/pengguna');
	}

	public function exportExcelAdmin()
	{
		$this->load->library('Excel');
		$object = new PHPExcel();
		$object->setActiveSheetIndex(0);
		$table_columns = array("Nama", "Username");
		$column = 0;
		foreach ($table_columns as $field) {

			$object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);

			$column++;
		}

		$adminData = $this->M_admin->getAdmin();
		$excel_row = 2;
		foreach ($adminData as $row) {
			$object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row['name']);
			$object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row['username']);
			$excel_row++;
		}

		$object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="Laporan data Admin.xls"');
		$object_writer->save('php://output');
	}

	//End AdminPage

	//CrauselPage
	public function crausel()
	{
		$id = $this->session->userdata('id');
		$data['profile'] = $this->db->get_where('tb_pengguna', ['id' => $id])->row_array();
		$data['title'] = "Crausel";
		$data['crausel'] = $this->M_admin->getCrausel();
		$this->load->view('templates2/header', $data);
		$this->load->view('templates2/sidebar', $data);
		$this->load->view('templates2/navbar', $data);
		$this->load->view('admin/crausel', $data);
		$this->load->view('templates2/footer', $data);
	}

	public function addCrausel()
	{
		$this->M_admin->add_crausel();
		$this->session->set_flashdata('flash', 'Ditambah');
		redirect('admin/crausel');
	}
	public function deleteCrausel($id)
	{
		$this->M_admin->delete_crausel($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('admin/crausel');
	}
	//End CrauselPage

	//CatagoryNewsPage
	public function kategori()
	{
		$id = $this->session->userdata('id');
		$data['profile'] = $this->db->get_where('tb_pengguna', ['id' => $id])->row_array();
		$data['title'] = "Admin";
		$data['kategori'] = $this->M_admin->getKategori();
		$this->load->view('templates2/header', $data);
		$this->load->view('templates2/sidebar', $data);
		$this->load->view('templates2/navbar', $data);
		$this->load->view('admin/kategori', $data);
		$this->load->view('templates2/footer', $data);
	}
	public function addKategori()
	{
		$this->M_admin->add_kategori();
		$this->session->set_flashdata('flash', 'Ditambah');
		redirect('admin/kategori');
	}
	public function deleteKategori($id)
	{
		$this->M_admin->delete_kategori($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('admin/kategori');
	}
	//EndCatagoryNewsPage

	//Berita
	public function berita()
	{
		$id = $this->session->userdata('id');
		$data['profile'] = $this->db->get_where('tb_pengguna', ['id' => $id])->row_array();
		$data['title'] = "Berita";
		$data['kategori'] = $this->M_admin->getKategori();
		$data['berita'] = $this->M_admin->getBerita();

		$this->load->view('templates2/header', $data);
		$this->load->view('templates2/sidebar', $data);
		$this->load->view('templates2/navbar', $data);
		$this->load->view('admin/berita', $data);
		$this->load->view('templates2/footer', $data);
	}
	public function addBerita()
	{
		$this->M_admin->add_berita();
		$this->session->set_flashdata('flash', 'Ditambah');
		redirect('admin/berita');
	}
	public function deleteBerita($id)
	{
		$this->M_admin->delete_berita($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('admin/berita');
	}
	public function editBerita($id2)
	{
		$id = $this->session->userdata('id');
		$data['kategori'] = $this->M_admin->getKategori();
		$data['profile'] = $this->db->get_where('tb_pengguna', ['id' => $id])->row_array();
		$data['title'] = "Update Berita";
		$data['berita'] = $this->db->get_where('tb_berita', ['id' => $id2])->row_array();

		$this->load->view('templates2/header', $data);
		$this->load->view('templates2/sidebar', $data);
		$this->load->view('templates2/navbar', $data);
		$this->load->view('admin/editBerita', $data);
		$this->load->view('templates2/footer', $data);
	}
	public function updateBerita()
	{
		$this->M_admin->update_berita();
		$this->session->set_flashdata('flash', 'Diubah');
		redirect('admin/berita');
	}
	public function detailBerita($id2)
	{
		$id = $this->session->userdata('id');
		$data['kategori'] = $this->M_admin->getKategori();
		$data['profile'] = $this->db->get_where('tb_pengguna', ['id' => $id])->row_array();
		$data['title'] = "Detail Berita";
		$data['berita'] = $this->db->get_where('tb_berita', ['id' => $id2])->row_array();

		$this->load->view('templates2/header', $data);
		$this->load->view('templates2/sidebar', $data);
		$this->load->view('templates2/navbar', $data);
		$this->load->view('admin/detailBerita', $data);
		$this->load->view('templates2/footer', $data);
	}
	//End BeritaPage

	//projekPage
	public function projek()
	{
		$id = $this->session->userdata('id');
		$data['profile'] = $this->db->get_where('tb_pengguna', ['id' => $id])->row_array();
		$data['title'] = "Projek";
		$data['projek'] = $this->M_admin->getProjek();
		$this->load->view('templates2/header', $data);
		$this->load->view('templates2/sidebar', $data);
		$this->load->view('templates2/navbar', $data);
		$this->load->view('admin/projek', $data);
		$this->load->view('templates2/footer', $data);
	}
	public function addProjek()
	{
		$this->M_admin->add_projek();
		$this->session->set_flashdata('flash', 'Ditambah');
		redirect('admin/projek');
	}

	public function deleteProjek($id)
	{
		$this->M_admin->delete_projek($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('admin/projek');
	}
	public function editProjek($id2)
	{
		$id = $this->session->userdata('id');
		$data['profile'] = $this->db->get_where('tb_pengguna', ['id' => $id])->row_array();
		$data['title'] = "Update Projek";
		$data['projek'] = $this->M_admin->getProjekById($id2);

		$this->load->view('templates2/header', $data);
		$this->load->view('templates2/sidebar', $data);
		$this->load->view('templates2/navbar', $data);
		$this->load->view('admin/editProjek', $data);
		$this->load->view('templates2/footer', $data);
	}
	public function updateProjek()
	{
		$this->M_admin->update_projek();
		$this->session->set_flashdata('flash', 'Diubah');
		redirect('admin/projek');
	}
	//End projekPage

	//galeriPage
	public function galeri()
	{
		$id = $this->session->userdata('id');
		$data['profile'] = $this->db->get_where('tb_pengguna', ['id' => $id])->row_array();
		$data['title'] = "Galeri";
		$data['galeri'] = $this->M_admin->getGaleri();

		$this->load->view('templates2/header', $data);
		$this->load->view('templates2/sidebar', $data);
		$this->load->view('templates2/navbar', $data);
		$this->load->view('admin/galeri', $data);
		$this->load->view('templates2/footer', $data);
	}
	public function addGaleri()
	{
		$this->M_admin->add_galeri();
		$this->session->set_flashdata('flash', 'Ditambah');
		redirect('admin/galeri');
	}
	public function deleteGaleri($id)
	{
		$this->M_admin->delete_galeri($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('admin/galeri');
	}
	public function editGaleri($id2)
	{
		$id = $this->session->userdata('id');
		$data['profile'] = $this->db->get_where('tb_pengguna', ['id' => $id])->row_array();
		$data['title'] = "Update Galeri";
		$data['galeri'] = $this->db->get_where('tb_galeri', ['id' => $id2])->row_array();;

		$this->load->view('templates2/header', $data);
		$this->load->view('templates2/sidebar', $data);
		$this->load->view('templates2/navbar', $data);
		$this->load->view('admin/editGaleri', $data);
		$this->load->view('templates2/footer', $data);
	}
	public function updateGaleri()
	{
		$this->M_admin->update_galeri();
		$this->session->set_flashdata('flash', 'Diubah');
		redirect('admin/galeri');
	}
	//End galeriPage

	//vismisPage
	public function vismis()
	{
		$id = $this->session->userdata('id');
		$data['profile'] = $this->db->get_where('tb_pengguna', ['id' => $id])->row_array();
		$data['title'] = "Visi & Misi";
		$data['vismis'] = $this->M_admin->getVismis();

		$this->load->view('templates2/header', $data);
		$this->load->view('templates2/sidebar', $data);
		$this->load->view('templates2/navbar', $data);
		$this->load->view('admin/vismis', $data);
		$this->load->view('templates2/footer', $data);
	}
	public function addVismis()
	{
		$this->M_admin->add_vismis();
		$this->session->set_flashdata('flash', 'Ditambah');
		redirect('admin/vismis');
	}
	public function deleteVismis($id)
	{
		$this->M_admin->delete_vismis($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('admin/vismis');
	}
	public function editVismis($id2)
	{
		$id = $this->session->userdata('id');
		$data['profile'] = $this->db->get_where('tb_pengguna', ['id' => $id])->row_array();
		$data['title'] = "Update Visi & Misi";
		$data['vismis'] = $this->db->get_where('tb_visimisi', ['id' => $id2])->row_array();;

		$this->load->view('templates2/header', $data);
		$this->load->view('templates2/sidebar', $data);
		$this->load->view('templates2/navbar', $data);
		$this->load->view('admin/editVismis', $data);
		$this->load->view('templates2/footer', $data);
	}
	public function updateVismis()
	{
		$this->M_admin->update_vismis();
		$this->session->set_flashdata('flash', 'Diubah');
		redirect('admin/vismis');
	}
	public function detailVismis($id2)
	{
		$id = $this->session->userdata('id');
		$data['profile'] = $this->db->get_where('tb_pengguna', ['id' => $id])->row_array();
		$data['title'] = "Detail Visi & Misi";
		$data['vismis'] = $this->db->get_where('tb_visimisi', ['id' => $id2])->row_array();;

		$this->load->view('templates2/header', $data);
		$this->load->view('templates2/sidebar', $data);
		$this->load->view('templates2/navbar', $data);
		$this->load->view('admin/detailVismis', $data);
		$this->load->view('templates2/footer', $data);
	}
	//EndvismisPage

	//navbarPage
	public function navbar()
	{
		$id = $this->session->userdata('id');
		$data['profile'] = $this->db->get_where('tb_pengguna', ['id' => $id])->row_array();
		$data['title'] = "Navbar";
		$data['navbar'] = $this->M_admin->getNavbar();

		$this->load->view('templates2/header', $data);
		$this->load->view('templates2/sidebar', $data);
		$this->load->view('templates2/navbar', $data);
		$this->load->view('admin/navbar', $data);
		$this->load->view('templates2/footer', $data);
	}
	public function addNavbar()
	{
		$this->M_admin->add_navbar();
		$this->session->set_flashdata('flash', 'Ditambah');
		redirect('admin/navbar');
	}
	public function deleteNavbar($id)
	{
		$this->M_admin->delete_navbar($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('admin/navbar');
	}
	public function editNavbar($id2)
	{
		$id = $this->session->userdata('id');
		$data['profile'] = $this->db->get_where('tb_pengguna', ['id' => $id])->row_array();
		$data['title'] = "Update Navbar";
		$data['navbar'] = $this->db->get_where('tb_navbar', ['id' => $id2])->row_array();;

		$this->load->view('templates2/header', $data);
		$this->load->view('templates2/sidebar', $data);
		$this->load->view('templates2/navbar', $data);
		$this->load->view('admin/editNavbar', $data);
		$this->load->view('templates2/footer', $data);
	}
	public function updateNavbar()
	{
		$this->M_admin->update_navbar();
		$this->session->set_flashdata('flash', 'Diubah');
		redirect('admin/navbar');
	}
	//End navbarPage
}
