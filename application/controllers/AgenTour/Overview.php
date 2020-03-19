<?php

class Overview extends CI_Controller {
    function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
                $this->load->helper('url');
	}

	public function index()
	{
		// load view admin/overview.php
		$data['konten'] = $this->m_data->tampil_data()->result();
		$this->load->view('overview',$data);
		
	}
}