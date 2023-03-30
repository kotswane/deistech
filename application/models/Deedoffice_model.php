<?php
	class Deedoffice_model extends CI_Model {
		
		public function list_deedoffice()
        {
                $query = $this->db->get('deedoffice');
                return $query->result();
        }
	}
?>