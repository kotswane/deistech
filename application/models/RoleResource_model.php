<?php
	class RoleResource_model extends CI_Model {
		
		public function create($data){

			$response = $this->getByRoleIdAndResourceId($data);
			
			
            if($response > 0)
			{
				return false;
			}	
		
			$this->db->insert('roleresource',$data);
			return (($this->db->insert_id()>0)?true:false);
		}
		
		public function get(){
			$query = $this->db->get('roleresource');
			return $query->result();
		}
		
		
		public function getRoleResourceInList($list){
			
			$sql = "SELECT * FROM `roleresource` WHERE roleid IN(".$list.");";
			$query=$this->db->query($sql);
			return $query->result();
		}
		
		public function update($data,$id){
			$this->db->where('id', $id);
			$this->db->update('roleresource', $data); 
			return (($this->db->affected_rows()>0)?true:false);
		}
		
		public function getById($id){
			$query = $this->db->get_where('roleresource', array('id' => $id));
            return $query->result();
		}	

		public function getByRoleId($roleId){
			$query = $this->db->get_where('roleresource', array('roleid' => $roleId));
            return $query->result();
		}
		
		public function getByRoleIdAndResourceId($data){

			$query = $this->db->get_where('roleresource', array('roleid' => $data['roleid'],'resourceid'=>$data['resourceid']));
			$count = $query->num_rows();
			return $count;
		}
	
		public function remove($id){
			$this->db->delete('roleresource', array('id' => $id));
            return $this->db->affected_rows();
		}	
		
		
	}
?>