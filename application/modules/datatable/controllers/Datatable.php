<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datatable extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if ($this->input->is_ajax_request()) {
			$this->app->get_datatable(APPPATH.'modules/datatable/views/table.php',['rowid'=>1]);	
		} else {
			$this->load->view('index');
		}
	}
}

/* End of file Datatable.php */
/* Location: ./application/modules/datatable/controllers/Datatable.php */