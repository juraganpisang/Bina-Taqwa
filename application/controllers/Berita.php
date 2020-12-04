<?php
defined('BASEPATH') or exit('No direct script access allowed');

class berita extends CI_Controller
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
	function __construct()
	{
		parent::__construct();
		$this->load->model('berita_model');
	}

	public function index($rowno = 0)
	{
		$category = 1; //get data header 1
		$data_header_1['data_content_header_1'] = $this->admin_model->content($category);

		$category = 2; //get data header 2
		$data_header_2['data_content_header_2'] = $this->admin_model->content($category);

		$category = 3; //get data footer
		$data_footer['data_content_footer'] = $this->admin_model->content($category);

		$data_header['data_header_1'] = $data_header_1['data_content_header_1'];
		$data_header['data_header_2'] = $data_header_2['data_content_header_2'];

		// $data['list_berita'] = $this->berita_model->getAllBerita()->result();
		$data['latest_news'] = $this->berita_model->latestPost()->result();


		// Search text
		$search_text = "";
		if ($this->input->post('submit') != NULL) {
			$search_text = $this->input->post('search');
			$this->session->set_userdata(array("search" => $search_text));
		} else {
			if ($this->session->userdata('search') != NULL) {
				$search_text = $this->session->userdata('search');
			}
		}

		// Row per page
		$rowperpage = 5;

		// Row position
		if ($rowno != 0) {
			$rowno = ($rowno - 1) * $rowperpage;
		}

		// All records count
		$allcount = $this->berita_model->getrecordCount($search_text);

		// Get records
		$users_record = $this->berita_model->getData($rowno, $rowperpage, $search_text);

		// Pagination Configuration
		$config['base_url'] = base_url() . 'berita/index';
		$config['use_page_numbers'] = TRUE;
		$config['total_rows'] = $allcount;
		$config['per_page'] = $rowperpage;
		// custom paging configuration
		$config['first_link']       = 'First';
		$config['last_link']        = 'Last';
		$config['next_link']        = 'Next';
		$config['prev_link']        = 'Prev';
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item" style="list-style-type: none;"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active" style="list-style-type: none;"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']    = '<li class="page-item" style="list-style-type: none;"><span class="page-link">';
		$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item" style="list-style-type: none;"><span class="page-link">';
		$config['prev_tagl_close']  = '</span>Next</li>';
		$config['first_tag_open']   = '<li class="page-item" style="list-style-type: none;"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item" style="list-style-type: none;"><span class="page-link">';
		$config['last_tagl_close']  = '</span></li>';
		// Initialize
		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();
		$data['result'] = $users_record;
		$data['row'] = $rowno;
		$data['search'] = $search_text;

		$this->load->view('templates/header', $data_header);
		$this->load->view('berita/index', $data);
		$this->load->view('templates/footer', $data_footer);
	}

	public function clear()
	{
		unset($_SESSION['search']);
		redirect('berita');
	}
	public function detail_berita($id)
	{
		$category = 1; //get data header 1
		$data_header_1['data_content_header_1'] = $this->admin_model->content($category);

		$category = 2; //get data header 2
		$data_header_2['data_content_header_2'] = $this->admin_model->content($category);

		$category = 3; //get data footer
		$data_footer['data_content_footer'] = $this->admin_model->content($category);

		$data_header['data_header_1'] = $data_header_1['data_content_header_1'];
		$data_header['data_header_2'] = $data_header_2['data_content_header_2'];

		$this->db->set('jumlah_view', '`jumlah_view`+ 1', FALSE);
		$this->db->where('id_news', $id);
		$this->db->update('news');

		$data['detail_berita'] = $this->berita_model->seeMoreBerita($id)->result();
		$data['latest_news'] = $this->berita_model->latestPost()->result();

		$this->load->view('templates/header', $data_header);
		$this->load->view('berita/detail', $data);
		$this->load->view('templates/footer', $data_footer);
	}
}
