<?php
defined('BASEPATH') or exit('No direct script access allowed');

class beranda extends CI_Controller
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
	public function index()
	{
		$category = 1; //get data header 1
		$data_header_1['data_content_header_1'] = $this->admin_model->content($category);

		$category = 2; //get data header 2
		$data_header_2['data_content_header_2'] = $this->admin_model->content($category);

		$category = 3; //get data footer
		$data_footer['data_content_footer'] = $this->admin_model->content($category);		

		$data_header['data_header_1'] = $data_header_1['data_content_header_1'];
		$data_header['data_header_2'] = $data_header_2['data_content_header_2'];

		$data['popular_post'] = $this->berita_model->popularPost()->result();

		$this->load->view('templates/header', $data_header);
		$this->load->view('beranda/index', $data);
		$this->load->view('templates/footer', $data_footer);
	}
}
