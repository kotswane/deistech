<?php
	class RoleResourceReport_model extends CI_Model {
		
		public function create($data){	
			if(count($this->getByReportIdAndRoleId($data['reportId'],$data['roleId']))>0){
				return false;
			}		
			$this->db->insert('roleresourcereport',$data);
			return (($this->db->insert_id()>0)?true:false);
		}
		
		public function get(){
			$query = $this->db->get('roleresourcereport');
			return $query->result();
		}
		
		public function update($data,$id){
			$this->db->where('id', $id);
			$this->db->update('roleresourcereport', $data); 
			return (($this->db->affected_rows()>0)?true:false);
		}
		
		public function getById($id){
			$query = $this->db->get_where('roleresourcereport', array('id' => $id));
            return $query->result();
		}	

		public function getByRoleId($roleId){
			$query = $this->db->get_where('roleresourcereport', array('roleId' => $roleId);
            return $query->result();
		}
		
		public function getByReportId($reportId){
			$query = $this->db->get_where('roleresourcereport', array('reportId' => $reportId);
            return $query->result();
		}
		
		public function getByReportIdAndRoleId($reportId,$roleId){
			$query = $this->db->get_where('roleresourcereport', array('reportId' => $reportId,'roleId'=>$roleId);
            return $query->result();
		}
		
	}
?>