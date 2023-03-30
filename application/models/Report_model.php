<?php
	class Report_model extends CI_Model {
		
		public function list_reports()
        {
                //$query = $this->db->get('report');
				$query = $this->db->get_where('report', array('active' => 1));
                return $query->result();
        }
		
		public function getReportById($list){
			$sql = "SELECT * FROM `report` WHERE report_id IN(".$list.");";
			$query=$this->db->query($sql);
			return $query->result();
		}
	}
?>