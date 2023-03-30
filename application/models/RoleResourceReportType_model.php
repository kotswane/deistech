<?php
	class RoleResourceReportType_model extends CI_Model {
		
		public function create($data){	
			if($this->getByReportTypeIdReportIdRoleId($data['roleid'],$data['reportid'],$data['reporttypeid'])>0){
				return false;
			}
			$this->db->insert('roleresourcereporttype',$data);
			return (($this->db->insert_id()>0)?true:false);
		}
		
		public function get(){
			$query = $this->db->get('roleresourcereporttype');
			return $query->result();
		}
		
		public function update($data,$id){
			$this->db->where('id', $id);
			$this->db->update('roleresourcereporttype', $data); 
			return (($this->db->affected_rows()>0)?true:false);
		}
		
		public function getById($id){
			$query = $this->db->get_where('roleresourcereporttype', array('id' => $id));
            return $query->result();
		}	

		public function getByRoleId($roleId){
			$query = $this->db->get_where('roleresourcereporttype', array('roleId' => $roleId));
            return $query->result();
		}
		
		public function remove($id){
			$this->db->delete('roleresourcereporttype', array('id' => $id));
            return $this->db->affected_rows();
		}
		
		public function getByReportId($reportId){
			$query = $this->db->get_where('roleresourcereporttype', array('reportid' => $reportId));
            return $query->result();
		}
		
		public function getByReportTypeId($reportTypeId){
			$query = $this->db->get_where('roleresourcereporttype', array('reporttypeid' => $reportTypeId));
            return $query->result();
		}
		
		public function getByReportTypeIdAndReportId($reportTypeId,$reportId){
			$query = $this->db->get_where('roleresourcereporttype', array('reporttypeid' => $reportTypeId,'reportid' => $reportId));
            return $query->result();
		}		
		
		public function getByReportTypeIdReportIdRoleId($roleid,$reportid,$reporttypeid){
			
			$query = $this->db->get_where('roleresourcereporttype', array('roleid' => $roleid,'reportid' => $reportid,'reporttypeid' => $reporttypeid));
            $count = $query->num_rows();
			return $count;
		}	

		public function getReportIdRoleId($roleid,$reportid){
			
			$query = $this->db->get_where('roleresourcereporttype', array('roleid' => $roleid,'reportid' => $reportid));
            $count = $query->num_rows();
			return $count;
		}
		
		
		public function getByReportTypeIdReportIdRoleIdRows($reportid,$roleid){
			
			$sql = "SELECT * FROM `roleresourcereporttype` WHERE reportid IN(".$reportid.") AND roleid=".$roleid.";";
			$query=$this->db->query($sql);
			return $query->result();
		}
	}
?>