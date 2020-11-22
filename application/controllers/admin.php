<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function login()
	{
		$this->load->view('admin/login');
	}

	public function do_login()
	{
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);

		$result = $this->admin_model->check_login($data);

		if ($result) {
			redirect('admin/beranda');
		} else {
			$this->session->set_flashdata('message', '<div class="text-danger small text-center mt-2"><i class="fas fa-times text-danger"></i> Maaf, username atau password salah </div>');
			$this->login();
		}
	}

	public function logout()
	{
		// hancurkan semua sesi
		$this->session->sess_destroy();
		redirect(base_url('beranda'));
	}

	public function do_update($halaman)
	{
		if (!$this->session->has_userdata('logged_in')) {
			redirect(base_url('beranda'));
		}

		$data = array(
			'id_content' => $this->input->post('id_content'),
			'content' => $this->input->post('content')
		);

		$this->admin_model->edit_content($data);

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data berhasil diperbarui!</div>');
		redirect('admin/' . $halaman);
	}

	public function beranda()
	{
		if (!$this->session->has_userdata('logged_in')) {
			redirect(base_url('beranda'));
		}
		
		$this->load->view('admin/templates/header_admin');
		$this->load->view('admin/beranda/admin_beranda');
		$this->load->view('admin/templates/footer_admin');
	}

	public function tentang_yayasan()
	{
		if (!$this->session->has_userdata('logged_in')) {
			redirect(base_url('beranda'));
		}

		$category = 4; //cek db
		$data['data_content'] = $this->admin_model->content($category);

		$this->load->view('admin/templates/header_admin');
		$this->load->view('admin/profil/admin_tentang_yayasan', $data);
		$this->load->view('admin/templates/footer_admin');
	}

	public function visi_misi()
	{
		if (!$this->session->has_userdata('logged_in')) {
			redirect(base_url('beranda'));
		}

		$category = 5; //cek db
		$data['data_content'] = $this->admin_model->content($category);

		$this->load->view('admin/templates/header_admin');
		$this->load->view('admin/profil/admin_visi_misi', $data);
		$this->load->view('admin/templates/footer_admin');
	}

	public function struktur_organisasi()
	{
		if (!$this->session->has_userdata('logged_in')) {
			redirect(base_url('beranda'));
		}

		$category = 6; //cek db
		$data['data_content'] = $this->admin_model->content($category);

		$this->load->view('admin/templates/header_admin');
		$this->load->view('admin/profil/admin_struktur_organisasi', $data);
		$this->load->view('admin/templates/footer_admin');
	}

	public function informasi_donatur()
	{
		if (!$this->session->has_userdata('logged_in')) {
			redirect(base_url('beranda'));
		}

		$category = 7; //cek db
		$data['data_content'] = $this->admin_model->content($category);

		$this->load->view('admin/templates/header_admin');
		$this->load->view('admin/profil/admin_informasi_donatur', $data);
		$this->load->view('admin/templates/footer_admin');
	}
}
