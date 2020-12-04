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
	function __construct(){
		parent::__construct();		
		$this->load->model('berita_model');
 
	}
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

		$category = 4; //cek db
		$data['data_content'] = $this->admin_model->content($category);
		$data['popular_post'] = $this->berita_model->popularPost()->result();

		$category = 1; //get data Header 1
		$data_header_1['data_content_header_1'] = $this->admin_model->content($category);

		$category = 2; //get data Header 2
		$data_header_2['data_content_header_2'] = $this->admin_model->content($category);

		$category = 3; //get data footer
		$data_footer['data_content_footer'] = $this->admin_model->content($category);

		//Set all data Header and Content to data_header
		$data_header['data_content'] = $data['data_content'];
		$data_header['data_header_1'] = $data_header_1['data_content_header_1'];
		$data_header['data_header_2'] = $data_header_2['data_content_header_2'];

		$this->load->view('admin/templates/header_admin', $data_header);
		$this->load->view('admin/beranda/admin_beranda', $data);
		$this->load->view('admin/templates/footer_admin', $data_footer);
	}

	public function tentang_yayasan()
	{
		if (!$this->session->has_userdata('logged_in')) {
			redirect(base_url('beranda'));
		}

		$category = 5; //cek db
		$data['data_content'] = $this->admin_model->content($category);
		$data['latest_news'] = $this->berita_model->latestPost()->result();

		$category = 1; //get data Header 1
		$data_header_1['data_content_header_1'] = $this->admin_model->content($category);

		$category = 2; //get data Header 2
		$data_header_2['data_content_header_2'] = $this->admin_model->content($category);

		$category = 3; //get data footer
		$data_footer['data_content_footer'] = $this->admin_model->content($category);

		//Set all data Header and Content to data_header
		$data_header['data_content'] = $data['data_content'];
		$data_header['data_header_1'] = $data_header_1['data_content_header_1'];
		$data_header['data_header_2'] = $data_header_2['data_content_header_2'];

		$this->load->view('admin/templates/header_admin', $data_header);
		$this->load->view('admin/profil/admin_tentang_yayasan', $data);
		$this->load->view('admin/templates/footer_admin', $data_footer);
	}

	public function visi_misi()
	{
		if (!$this->session->has_userdata('logged_in')) {
			redirect(base_url('beranda'));
		}

		$category = 6; //cek db
		$data['data_content'] = $this->admin_model->content($category);
		$data['latest_news'] = $this->berita_model->latestPost()->result();

		$category = 1; //get data Header 1
		$data_header_1['data_content_header_1'] = $this->admin_model->content($category);

		$category = 2; //get data Header 2
		$data_header_2['data_content_header_2'] = $this->admin_model->content($category);

		$category = 3; //get data footer
		$data_footer['data_content_footer'] = $this->admin_model->content($category);

		//Set all data Header and Content to data_header
		$data_header['data_content'] = $data['data_content'];
		$data_header['data_header_1'] = $data_header_1['data_content_header_1'];
		$data_header['data_header_2'] = $data_header_2['data_content_header_2'];

		$this->load->view('admin/templates/header_admin', $data_header);
		$this->load->view('admin/profil/admin_visi_misi', $data);
		$this->load->view('admin/templates/footer_admin', $data_footer, $data['data_content']);
	}

	public function struktur_organisasi()
	{
		if (!$this->session->has_userdata('logged_in')) {
			redirect(base_url('beranda'));
		}

		$category = 7; //cek db
		$data['data_content'] = $this->admin_model->content($category);
		$data['latest_news'] = $this->berita_model->latestPost()->result();

		$category = 1; //get data Header 1
		$data_header_1['data_content_header_1'] = $this->admin_model->content($category);

		$category = 2; //get data Header 2
		$data_header_2['data_content_header_2'] = $this->admin_model->content($category);

		$category = 3; //get data footer
		$data_footer['data_content_footer'] = $this->admin_model->content($category);

		//Set all data Header and Content to data_header
		$data_header['data_content'] = $data['data_content'];
		$data_header['data_header_1'] = $data_header_1['data_content_header_1'];
		$data_header['data_header_2'] = $data_header_2['data_content_header_2'];

		$this->load->view('admin/templates/header_admin', $data_header);
		$this->load->view('admin/profil/admin_struktur_organisasi', $data);
		$this->load->view('admin/templates/footer_admin', $data_footer, $data['data_content']);
	}

	public function informasi_donatur()
	{
		if (!$this->session->has_userdata('logged_in')) {
			redirect(base_url('beranda'));
		}

		$category = 8; //cek db
		$data['data_content'] = $this->admin_model->content($category);
		$data['latest_news'] = $this->berita_model->latestPost()->result();

		$category = 1; //get data Header 1
		$data_header_1['data_content_header_1'] = $this->admin_model->content($category);

		$category = 2; //get data Header 2
		$data_header_2['data_content_header_2'] = $this->admin_model->content($category);

		$category = 3; //get data footer
		$data_footer['data_content_footer'] = $this->admin_model->content($category);

		//Set all data Header and Content to data_header
		$data_header['data_content'] = $data['data_content'];
		$data_header['data_header_1'] = $data_header_1['data_content_header_1'];
		$data_header['data_header_2'] = $data_header_2['data_content_header_2'];

		$this->load->view('admin/templates/header_admin', $data_header);
		$this->load->view('admin/profil/admin_informasi_donatur', $data);
		$this->load->view('admin/templates/footer_admin', $data_footer, $data['data_content']);
	}

	public function manasik_haji()
	{
		if (!$this->session->has_userdata('logged_in')) {
			redirect(base_url('beranda'));
		}

		$category = 9; //cek db
		$data['data_content'] = $this->admin_model->content($category);

		$category = 1; //get data Header 1
		$data_header_1['data_content_header_1'] = $this->admin_model->content($category);

		$category = 2; //get data Header 2
		$data_header_2['data_content_header_2'] = $this->admin_model->content($category);

		$category = 3; //get data footer
		$data_footer['data_content_footer'] = $this->admin_model->content($category);

		//Set all data Header and Content to data_header
		$data_header['data_content'] = $data['data_content'];
		$data_header['data_header_1'] = $data_header_1['data_content_header_1'];
		$data_header['data_header_2'] = $data_header_2['data_content_header_2'];

		$this->load->view('admin/templates/header_admin', $data_header);
		$this->load->view('admin/program/admin_manasik_haji', $data);
		$this->load->view('admin/templates/footer_admin', $data_footer);
	}

	public function kegiatan_dakwah()
	{
		if (!$this->session->has_userdata('logged_in')) {
			redirect(base_url('beranda'));
		}

		$category = 10; //cek db
		$data['data_content'] = $this->admin_model->content($category);

		$category = 1; //get data Header 1
		$data_header_1['data_content_header_1'] = $this->admin_model->content($category);

		$category = 2; //get data Header 2
		$data_header_2['data_content_header_2'] = $this->admin_model->content($category);

		$category = 3; //get data footer
		$data_footer['data_content_footer'] = $this->admin_model->content($category);

		//Set all data Header and Content to data_header
		$data_header['data_content'] = $data['data_content'];
		$data_header['data_header_1'] = $data_header_1['data_content_header_1'];
		$data_header['data_header_2'] = $data_header_2['data_content_header_2'];

		$this->load->view('admin/templates/header_admin', $data_header);
		$this->load->view('admin/program/admin_kegiatan_dakwah', $data);
		$this->load->view('admin/templates/footer_admin', $data_footer);
	}

	public function kontak_kami()
	{
		if (!$this->session->has_userdata('logged_in')) {
			redirect(base_url('beranda'));
		}

		$category = 11; //cek db
		$data['data_content'] = $this->admin_model->content($category);

		$category = 1; //get data Header 1
		$data_header_1['data_content_header_1'] = $this->admin_model->content($category);

		$category = 2; //get data Header 2
		$data_header_2['data_content_header_2'] = $this->admin_model->content($category);

		$category = 3; //get data footer
		$data_footer['data_content_footer'] = $this->admin_model->content($category);

		$category = 12; //get data Email
		$data['data_content_email'] = $this->admin_model->content($category);

		//Set all data Header and Content to data_header
		$data_header['data_content'] = $data['data_content'];
		$data_header['data_header_1'] = $data_header_1['data_content_header_1'];
		$data_header['data_header_2'] = $data_header_2['data_content_header_2'];

		$this->load->view('admin/templates/header_admin', $data_header);
		$this->load->view('admin/kontak/admin_kontak_kami', $data);
		$this->load->view('admin/templates/footer_admin', $data_footer);
	}

	public function berita()
	{
		if (!$this->session->has_userdata('logged_in')) {
			redirect(base_url('beranda'));
		}

		$category = 13; //cek db
		$data['data_content'] = $this->admin_model->content($category);
		$data['list_berita'] = $this->berita_model->getAllBerita()->result();

		$category = 1; //get data Header 1
		$data_header_1['data_content_header_1'] = $this->admin_model->content($category);

		$category = 2; //get data Header 2
		$data_header_2['data_content_header_2'] = $this->admin_model->content($category);

		$category = 3; //get data footer
		$data_footer['data_content_footer'] = $this->admin_model->content($category);

		// $category = 12; //get data Email
		// $data['data_content_email'] = $this->admin_model->content($category);

		//Set all data Header and Content to data_header
		$data_header['data_content'] = $data['data_content'];
		$data_header['data_header_1'] = $data_header_1['data_content_header_1'];
		$data_header['data_header_2'] = $data_header_2['data_content_header_2'];

		$this->load->view('admin/templates/header_admin', $data_header);
		$this->load->view('admin/berita/berita_index', $data);
		$this->load->view('admin/templates/footer_admin', $data_footer);
	}

	public function simpanBerita(){
		$judul_berita = $_POST['judul_berita'];
		$isi_berita = $_POST['isi_berita'];
		$foto = $this->do_upload();
		$penulis_id = $this->session->userdata('username');
		
		$data = array(
			'news' => $isi_berita,
			'penulis_id' => $penulis_id,
			'judul' => $judul_berita,
			'foto' => $foto
		);

		$result = $this->berita_model->simpanBerita('news', $data);

		if ($result) {
			redirect('admin/berita');
		} else {
			$this->session->set_flashdata('message', '<div class="text-danger small text-center mt-2"><i class="fas fa-times text-danger"></i> Gagal </div>');
			$this->berita();
		}
	}

	private function do_upload(){
		$config['upload_path']          = './assets/img/news/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = $_FILES['foto_berita']['name'];
		$config['overwrite']			= true;
		$config['max_size']             = 2048; // 1MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('foto_berita')) {
			return $this->upload->data("file_name");
		}
		
		return "default.jpg";
	}

	public function seeMoreBerita($id){
		if (!$this->session->has_userdata('logged_in')) {
			redirect(base_url('beranda'));
		}

		$this->db->set('jumlah_view', '`jumlah_view`+ 1', FALSE);
        $this->db->where('id_news', $id);
        $this->db->update('news');

		$category = 13; //cek db
		$data['data_content'] = $this->admin_model->content($category);
		// $data['list_berita'] = $this->berita_model->getAllBerita()->result();
		$data['detail_berita'] = $this->berita_model->seeMoreBerita($id)->result();
		$data['latest_news'] = $this->berita_model->latestPost()->result();

		$category = 1; //get data Header 1
		$data_header_1['data_content_header_1'] = $this->admin_model->content($category);

		$category = 2; //get data Header 2
		$data_header_2['data_content_header_2'] = $this->admin_model->content($category);

		$category = 3; //get data footer
		$data_footer['data_content_footer'] = $this->admin_model->content($category);

		// $category = 12; //get data Email
		// $data['data_content_email'] = $this->admin_model->content($category);

		//Set all data Header and Content to data_header
		$data_header['data_content'] = $data['data_content'];
		$data_header['data_header_1'] = $data_header_1['data_content_header_1'];
		$data_header['data_header_2'] = $data_header_2['data_content_header_2'];

		$this->load->view('admin/templates/header_admin', $data_header);
		$this->load->view('admin/berita/detail_berita', $data);
		$this->load->view('admin/templates/footer_admin', $data_footer);
	}

	public function editBerita($id){
		if (!$this->session->has_userdata('logged_in')) {
			redirect(base_url('beranda'));
		}

		$category = 13; //cek db
		$data['data_content'] = $this->admin_model->content($category);
		$data['edit_berita'] = $this->berita_model->getEditBerita($id)->result();

		$category = 1; //get data Header 1
		$data_header_1['data_content_header_1'] = $this->admin_model->content($category);

		$category = 2; //get data Header 2
		$data_header_2['data_content_header_2'] = $this->admin_model->content($category);

		$category = 3; //get data footer
		$data_footer['data_content_footer'] = $this->admin_model->content($category);

		// $category = 12; //get data Email
		// $data['data_content_email'] = $this->admin_model->content($category);

		//Set all data Header and Content to data_header
		$data_header['data_content'] = $data['data_content'];
		$data_header['data_header_1'] = $data_header_1['data_content_header_1'];
		$data_header['data_header_2'] = $data_header_2['data_content_header_2'];

		$this->load->view('admin/templates/header_admin', $data_header);
		$this->load->view('admin/berita/edit_berita', $data);
		$this->load->view('admin/templates/footer_admin', $data_footer);
	}

	public function doEditBerita($id){
		
        date_default_timezone_set('Asia/Jakarta');
		$judul_berita = $_POST['judul_berita'];
		$isi_berita = $_POST['isi_berita'];
		$foto = $this->do_upload();
		$penulis_id = $this->session->userdata('username');
		$tanggal_publikasi = $_POST['tanggal_publikasi'];
		$tanggal_update = date('Y-m-d H:i');
		$data = array(
			'news' => $isi_berita,
			'penulis_id' => $penulis_id,
			'judul' => $judul_berita,
			'foto' => $foto,
			'tanggal_publikasi' => $tanggal_publikasi,
			'tanggal_update' => $tanggal_update
		);
		
		$result = $this->berita_model->doEditBerita('news', $data, $id);

		redirect('admin/berita');
 
	}

	public function hapusBerita($id){
		$this->berita_model->hapusBerita('news', $id);
		redirect(base_url('admin/berita'));
	}
}
