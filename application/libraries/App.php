<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App
{
	protected $ci;

	public function __construct()
	{
        $this->ci =& get_instance();
	}

	public function get_datatable($table,$var=[]) {
		$data = array();
		if(!empty($var)) {
			foreach ($var as $key => $value) {
				$$key = $value;
			}
		}

		include_once $table;

		$output = array(
			"draw" => $this->ci->input->post('draw'),
			"recordsTotal" => count_all($table),
			"recordsFiltered" => count_all($table),
			"data" => $data,
		);
		echo json_encode($output);
	}

}

/* End of file App.php */
/* Location: ./application/libraries/App.php */
