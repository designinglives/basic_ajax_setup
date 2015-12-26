<?php
	class M_test extends CI_Model {
		function __construct() {
			// Call the Model constructor
			parent::__construct();
		}
	   
		function get_all_entries($id = false) {
			if($id) {
				$this->db->where('id', $id);
			}
			
			$query = $this->db->get('test_table');
			return $query->result();
		}
}
