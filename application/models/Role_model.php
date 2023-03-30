<?php
	class Role_model extends CI_Model {
		
		public function create($data){	
            if($this->getByName($data['name']) > 0)
			{
				return false;
			}				
			$this->db->insert('role',$data);
			return (($this->db->insert_id()>0)?true:false);
		}
		
		public function get(){
			$query = $this->db->get('role');
			return $query->result();
		}
		
		public function update($role,$id){
			$data = [
            'name' => $role,
			];
			$this->db->where('id', $id);
			$this->db->update('role', $data); 
			return (($this->db->affected_rows()>0)?true:false);
		}
		
		public function getById($id){
			$query = $this->db->get_where('role', array('id' => $id));
            return $query->result();
		}	

		public function getByName($name){
			$query = $this->db->get_where('role', array('name' => $name));
            return $query->num_rows();
		}	

		public function getByReportId($id){
			$query = $this->db->get_where('report_type', array('report_type_report_id' => $id));
            return $query->result();
		}		
		
	}
?>