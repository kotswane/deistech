<?php
	class Auditlog_model extends CI_Model {
		
		public function save($data)
        {
                $this->db->insert('auditlog',$data);
				return $this->db->insert_id();
        }
		
		public function findByUser($userId)
        {
                $query = $this->db->get_where('auditlog', array('auditlog_userId' => $userId));
				return $query->result();
        }
	}
?>