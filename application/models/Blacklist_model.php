<?php
	class Blacklist_model extends CI_Model {
		
		public function getAll()
        {
                $query = $this->db->get('blacklist');
                return $query->result();
        }
		
		public function getAllByFilter($filter,$search)
        {

			if($filter == "registrationno"){
				$search = substr($search,1,strlen($search));
				$query = $this->db->get_where('blacklist', array('registrationno' => $search));
				return $query->result();
			}else if($filter == "name"){
				$query = $this->db->get_where('blacklist', array('supplier' => $search));
				 return $query->result();
			}
			
        }
		
		
	}
?>