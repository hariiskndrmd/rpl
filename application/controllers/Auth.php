<?php

class Auth extends CI_Controller
{
	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'required', [
			'required' => 'Username tidak boleh kosong'
		]);
		$this->form_validation->set_rules('password', 'Password', 'required', [
			'required' => 'Password tidak boleh kosong'
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view('templates2/auth/index');
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('tb_pengguna', ['username' => $username])->row_array();
		if ($user) {
			if (password_verify($password, $user['password'])) {
				$data = [
					'id' => $user['id'],
					'username' => $user['username'],
					'name' => $user['name'],
					'image' => $user['image'],
					'status' => true
				];
				$this->session->set_userdata($data);
				redirect('admin');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            	Password salah</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Username Tidak ada</div>');
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('name');
		$this->session->unset_userdata('image');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Berhasil Keluar</div>');
		redirect('auth');
	}
}
