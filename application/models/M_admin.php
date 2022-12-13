<?php


class M_admin extends CI_Model
{
	//adminPage
	public function getAdmin()
	{
		return $this->db->get('tb_pengguna')->result_array();
	}

	public function add_admin()
	{
		$name = $this->input->post('name');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$upload_image = $_FILES['gambar']['name'];

		if ($upload_image) {
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']     = '2548';
			$config['upload_path'] = 'assets/uploads';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('gambar')) {
				$new_image = $this->upload->data('file_name');
				$this->db->set('image', $new_image);
			} else {
				echo $this->upload->display_errors();
			}

			$this->db->set('name', $name);
			$this->db->set('username', $username);
			$this->db->set('password', password_hash($password, PASSWORD_DEFAULT));
			$this->db->insert('tb_pengguna');
		}
	}

	public function delete_admin($id)
	{
		$this->db->delete('tb_pengguna', ['id' => $id]);
	}

	public function update_admin()
	{
		$name = $this->input->post('name');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$id = $this->input->post('id');
		$upload_image = $_FILES['gambar']['name'];

		if ($upload_image != null) {
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size']     = '2548';
				$config['upload_path'] = 'assets/uploads';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('gambar')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);
				} else {
					echo $this->upload->display_errors();
				}

				$this->db->set('name', $name);
				$this->db->set('username', $username);
				$this->db->where('id', $id);
				$this->db->update('tb_pengguna');
			}
		} else {
			$this->db->set('name', $name);
			$this->db->set('username', $username);
			$this->db->where('id', $id);
			$this->db->update('tb_pengguna');
		}
	}
	//end adminPage

	//crauselPage
	public function getCrausel()
	{
		return $this->db->get('tb_crausel')->result_array();
	}
	public function add_crausel()
	{
		$upload_image = $_FILES['gambar']['name'];

		if ($upload_image != null) {
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']     = '2548';
			$config['upload_path'] = 'assets/uploads';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('gambar')) {
				$new_image = $this->upload->data('file_name');
				$this->db->set('image', $new_image);
				$this->db->insert('tb_crausel');
			} else {
				echo $this->upload->display_errors();
			}
		} else {
			echo "gambar belum dimasukan";
		}
	}
	public function delete_crausel($id)
	{
		$this->db->delete('tb_crausel', ['id' => $id]);
	}
	//End crauselPage

	//kategoriPage
	public function getKategori()
	{
		return $this->db->get('tb_kategori_berita')->result_array();
	}
	public function add_kategori()
	{
		$nama_kategori = $this->input->post('name');
		$data = ['nama_kategori' => $nama_kategori];
		$this->db->insert('tb_kategori_berita', $data);
	}
	public function delete_kategori($id)
	{
		$this->db->delete('tb_kategori_berita', ['id' => $id]);
	}
	//End kategoriPage

	//beritaPage
	public function getBerita()
	{
		$query = "SELECT `tb_kategori_berita`.*,`tb_berita`.* FROM `tb_kategori_berita` JOIN `tb_berita` ON `tb_berita`.`kategori_id` = `tb_kategori_berita`.`id`";
		return $this->db->query($query)->result_array();
	}
	public function add_berita()
	{
		date_default_timezone_set('Asia/Jakarta');
		$judul = $this->input->post('judul');
		$kategori = $this->input->post('kategori');
		$penulis = $this->input->post('penulis');
		$tanggal =  date('Y-m-d H:i:s');
		$artikel = $this->input->post('artikel');
		$upload_image = $_FILES['gambar']['name'];

		if ($upload_image) {
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']     = '2548';
			$config['upload_path'] = 'assets/uploads';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('gambar')) {
				$new_image = $this->upload->data('file_name');
				$this->db->set('image', $new_image);
			} else {
				echo $this->upload->display_errors();
			}

			$this->db->set('kategori_id', $kategori);
			$this->db->set('penulis', $penulis);
			$this->db->set('tanggal', $tanggal);
			$this->db->set('judul', $judul);
			$this->db->set('artikel', $artikel);
			$this->db->insert('tb_berita');
		}
	}
	public function delete_berita($id)
	{
		$this->db->delete('tb_berita', ['id' => $id]);
	}
	public function update_berita()
	{
		$id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$kategori = $this->input->post('kategori');
		$artikel = $this->input->post('artikel');
		$upload_image = $_FILES['gambar']['name'];

		if ($upload_image != null) {
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size']     = '2548';
				$config['upload_path'] = 'assets/uploads';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('gambar')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);
				} else {
					echo $this->upload->display_errors();
				}

				$this->db->set('judul', $judul);
				$this->db->set('kategori_id', $kategori);
				$this->db->set('artikel', $artikel);
				$this->db->where('id', $id);
				$this->db->update('tb_berita');
			}
		} else {
			$this->db->set('judul', $judul);
			$this->db->set('kategori_id', $kategori);
			$this->db->set('artikel', $artikel);
			$this->db->where('id', $id);
			$this->db->update('tb_berita');
		}
	}
	//End beritaPage

	//projekPage
	public function getProjek()
	{
		return $this->db->get('tb_projek')->result_array();
	}
	public function add_projek()
	{
		$judul = $this->input->post('judul');
		$deskripsi = $this->input->post('deskripsi');
		$upload_image = $_FILES['gambar']['name'];

		if ($upload_image != null) {
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size']     = '2548';
				$config['upload_path'] = 'assets/uploads';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('gambar')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				} else {
					echo $this->upload->display_errors();
				}

				$this->db->set('judul', $judul);
				$this->db->set('deskripsi', $deskripsi);
				$this->db->insert('tb_projek');
			}
		} else {
			echo $this->upload->display_errors();
		}
	}
	public function delete_projek($id)
	{
		$this->db->delete('tb_projek', ['id' => $id]);
	}
	public function getProjekById($id)
	{
		return $this->db->get_where('tb_projek', ['id' => $id])->row_array();
	}
	public function update_projek()
	{
		$id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$deskripsi = $this->input->post('deskripsi');;
		$upload_image = $_FILES['gambar']['name'];

		if ($upload_image != null) {
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size']     = '2548';
				$config['upload_path'] = 'assets/uploads';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('gambar')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				} else {
					echo $this->upload->display_errors();
				}

				$this->db->set('judul', $judul);
				$this->db->set('deskripsi', $deskripsi);
				$this->db->where('id', $id);
				$this->db->update('tb_projek');
			}
		} else {
			$this->db->set('judul', $judul);
			$this->db->set('deskripsi', $deskripsi);
			$this->db->where('id', $id);
			$this->db->update('tb_projek');
		}
	}
	//End projekPage

	//galeriPage
	public function getGaleri()
	{
		return $this->db->get('tb_galeri')->result_array();
	}
	public function add_galeri()
	{
		$judul = $this->input->post('judul');
		$upload_image = $_FILES['gambar']['name'];

		if ($upload_image != null) {
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size']     = '2548';
				$config['upload_path'] = 'assets/uploads';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('gambar')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				} else {
					echo $this->upload->display_errors();
				}

				$this->db->set('judul', $judul);
				$this->db->insert('tb_galeri');
			}
		} else {
			echo $this->upload->display_errors();
		}
	}
	public function delete_galeri($id)
	{
		$this->db->delete('tb_galeri', ['id' => $id]);
	}
	public function update_galeri()
	{
		$judul = $this->input->post('judul');
		$id = $this->input->post('id');
		$upload_image = $_FILES['gambar']['name'];

		if ($upload_image != null) {
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size']     = '2548';
				$config['upload_path'] = 'assets/uploads';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('gambar')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				} else {
					echo $this->upload->display_errors();
				}

				$this->db->set('judul', $judul);
				$this->db->where('id', $id);
				$this->db->update('tb_galeri');
			}
		} else {
			$this->db->set('judul', $judul);
			$this->db->where('id', $id);
			$this->db->update('tb_galeri');
		}
	}
	//End galeriPage

	//vismisPage
	public function getVismis()
	{
		return $this->db->get('tb_visimisi')->result_array();
	}
	public function add_vismis()
	{
		$visi = $this->input->post('visi');
		$misi = $this->input->post('misi');
		$data = [
			'visi' => $visi,
			'misi' => $misi
		];
		$this->db->insert('tb_visimisi', $data);
	}
	public function delete_vismis($id)
	{
		$this->db->delete('tb_visimisi', ['id' => $id]);
	}
	public function update_vismis()
	{
		$id = $this->input->post('id');
		$visi = $this->input->post('visi');
		$misi = $this->input->post('misi');

		$data = [
			'visi' => $visi,
			'misi' => $misi
		];

		$this->db->update('tb_visimisi', $data, ['id' => $id]);
	}
	//End vismisPage

	//NavbarPage
	public function getNavbar()
	{
		return $this->db->get('tb_navbar')->result_array();
	}
	public function add_navbar()
	{
		$nama = $this->input->post('nama');
		$link = $this->input->post('link');
		$data = [
			'nama' => $nama,
			'link' => $link
		];
		$this->db->insert('tb_navbar', $data);
	}
	public function delete_navbar($id)
	{
		$this->db->delete('tb_navbar', ['id' => $id]);
	}
	public function update_navbar()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$link = $this->input->post('link');

		$data = [
			'nama' => $nama,
			'link' => $link
		];

		$this->db->update('tb_navbar', $data, ['id' => $id]);
	}
	//End NavbarPage
}
