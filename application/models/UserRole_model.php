<?php
	class UserRole_model extends CI_Model {
		
		public function create($data){	
			$query = $this->db->get_where('userrole', array('userid' => $data['userid']));
            if ($query->num_rows() > 0)
			{
				return 0;
			}		
			$this->db->insert('userrole',$data);
			return (($this->db->insert_id()>0)?$this->db->insert_id():0);
		}
		
		public function get(){
			$query = $this->db->get('userrole');
			return $query->result();
		}
		
		public function update($data,$id){

			$this->db->where('userid', $id);
			$this->db->update('userrole', $data); 
			if($this->db->affected_rows() > 0){
				return 1;
			} else {
				return 0;
			}
		}
		
		public function getById($id){
			$query = $this->db->get_where('userrole', array('id' => $id));
            return $query->result();
		}	

		public function getByUserId($id){
			$query = $this->db->get_where('userrole', array('userId' => $id));
            return $query->result();
		}		
		
		public function getByRoleId($id){
			$query = $this->db->get_where('userrole', array('roleId' => $id));
            return $query->result();
		}
		
		public function getJoint(){
			$sql = "select ur.*,u.name,u.username,u.surname,r.name as rolename from users u join userrole ur on u.id=ur.userid join role r on r.id=ur.roleid;";
			$query=$this->db->query($sql);
			return $query->result();
		}
		
	}
?>