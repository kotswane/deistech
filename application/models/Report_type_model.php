<?php
	class Report_type_model extends CI_Model {
		
		public function list_reports_type()
        {
                $query = $this->db->get('report_type');
                return $query->result();
        }
		
		public function getById($reporttypeid)
        {
			$sql = "SELECT * FROM `report_type` WHERE report_type_id IN(".$reporttypeid.");";
			$query=$this->db->query($sql);
			return $query->result();
        }
	}
?>