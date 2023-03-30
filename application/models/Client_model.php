<?php
	class Client_model extends CI_Model {
		
		public function create($data){	
			if($this->getByName($data['name']) > 0)
			{
				return false;
			}	
			$this->db->insert('client',$data);
			return (($this->db->insert_id()>0)?true:false);
		}
		
		public function get(){
			$query = $this->db->get('client');
			return $query->result();
		}
		
		public function update($data,$id){
			
			$this->db->where('client_Id', $id);
			$this->db->update('client', $data); 

			return (($this->db->affected_rows()>0)?true:false);
		}
		
		public function getById($id){
			$query = $this->db->get_where('client', array('client_id' => $id));
            return $query->result();
		}	

		public function getByName($name){
			$query = $this->db->get_where('client', array('client_Name' => $name));
            return $query->num_rows();
		}		
		
	}
?>