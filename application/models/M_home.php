<?php


class M_home extends CI_Model
{
	public function getBerita()
	{
		$query = "SELECT `tb_kategori_berita`.*,`tb_berita`.* FROM `tb_kategori_berita` JOIN `tb_berita` ON `tb_berita`.`kategori_id` = `tb_kategori_berita`.`id` LIMIT 6";
		return $this->db->query($query)->result_array();
	}

	public function detailBerita($id)
	{
		$query = "SELECT `tb_kategori_berita`.*,`tb_berita`.* FROM `tb_kategori_berita` JOIN `tb_berita` ON `tb_berita`.`kategori_id` = `tb_kategori_berita`.`id` where `tb_berita`.`id` = '$id'";
		return $this->db->query($query)->row_array();
	}

	public function detailBeritaPrevious($id)
	{
		$query = "SELECT `tb_kategori_berita`.*,`tb_berita`.* FROM `tb_kategori_berita` JOIN `tb_berita` ON `tb_berita`.`kategori_id` = `tb_kategori_berita`.`id` where `tb_berita`.`id` < '$id' LIMIT 1";
		return $this->db->query($query)->row_array();
	}

	public function detailBeritaNext($id)
	{
		$query = "SELECT `tb_kategori_berita`.*,`tb_berita`.* FROM `tb_kategori_berita` JOIN `tb_berita` ON `tb_berita`.`kategori_id` = `tb_kategori_berita`.`id` where `tb_berita`.`id` > '$id' LIMIT 1";
		return $this->db->query($query)->row_array();
	}

	public function getCrausel()
	{
		return $this->db->get('tb_crausel')->result_array();
	}

	public function getProjek()
	{
		return $this->db->get('tb_projek')->result_array();
	}
	public function getGaleri()
	{
		return $this->db->get('tb_galeri')->result_array();
	}
	public function getVismis()
	{
		return $this->db->get('tb_visimisi')->result_array();
	}
	public function getNavbar()
	{
		return $this->db->get('tb_navbar')->result_array();
	}
}
