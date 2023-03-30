<?php
	class Province_model extends CI_Model {
		
		public function list_provinces()
        {
                $query = $this->db->get('province');
                return $query->result();
        }
	}
?>