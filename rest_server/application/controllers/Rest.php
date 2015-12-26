<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rest extends CI_Controller {

	/**
	* Default rest controller.
	*
	*/
	public function getData() {
		header('Content-Type: application/json');
		
		$this->load->model('m_test');
		
		$items = $this->m_test->get_all_entries($this->uri->segment(3));
		
		echo json_encode($items);
	}
	
	public function postData() {
		print_r($_POST);
	}
}
