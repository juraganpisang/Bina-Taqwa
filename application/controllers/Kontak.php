<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kontak extends CI_Controller
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
	public function index()
	{
		$category = 11; //cek db
		$data['data_content'] = $this->admin_model->content($category);

		$category = 1; //get data header 1
		$data_header_1['data_content_header_1'] = $this->admin_model->content($category);

		$category = 2; //get data header 2
		$data_header_2['data_content_header_2'] = $this->admin_model->content($category);

		$category = 3; //get data footer
		$data_footer['data_content_footer'] = $this->admin_model->content($category);

		$data_header['data_header_1'] = $data_header_1['data_content_header_1'];
		$data_header['data_header_2'] = $data_header_2['data_content_header_2'];

		$this->load->view('templates/header', $data_header);
		$this->load->view('kontak/index', $data);
		$this->load->view('templates/footer', $data_footer);
	}

	public function kontak_kami()
	{
		$category = 12; //get data Email
		$data['data_content_email'] = $this->admin_model->content($category);

		// Konfigurasi email
		$config = [
			'mailtype'  => 'html',
			'charset'   => 'utf-8',
			'protocol'  => 'smtp',
			'smtp_host' => 'smtp.gmail.com',
			'smtp_user' => 'pesanbinataqwa@gmail.com',  // Email gmail
			'smtp_pass'   => 'binataqwa123',  // Password gmail
			'smtp_crypto' => 'ssl',
			'smtp_port'   => 465,
			'crlf'    => "\r\n",
			'newline' => "\r\n"
		];

		$this->load->library('email', $config);
		$this->email->from('pesanbinataqwa@gmail.com', 'Bina Taqwa');
		$this->email->to($data['data_content_email']['content']); // Ganti dengan email tujuan
		// $this->email->attach('codeigniter.png');
		$this->email->subject('Pesan Baru dari User | BinaTaqwa');

		$nama_depan = $this->input->post('nama_depan');
		$nama_belakang = $this->input->post('nama_belakang');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');
		$pesan = $this->input->post('pesan');

		// Isi email
		$this->email->message("Nama : $nama_depan $nama_belakang<br>
		Alamat : $alamat<br>
		Email : $email<br>
		Pesan : $pesan		
		");

		// Tampilkan pesan sukses atau error
		if ($this->email->send()) {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Pesan berhasil Terkirim!</div>');
			redirect('Kontak');
		} else {
			echo 'Error! email tidak dapat dikirim.';
		}
	}
}
