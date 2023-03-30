<?php
	class SearchHistory_model extends CI_Model {
		
		public function create($data){
			$this->db->reconnect();
			//$this->db->query("SET GLOBAL max_allowed_packet=1073741824;");
			$this->db->insert('search_history',$data);
			return (($this->db->insert_id()>0)?true:false);
		}
		
		public function getOverViewReportLastSevenDays($userId){
			$sql = "SELECT reportname as Report, count(*) as 'Total' FROM search_history WHERE userId='".$userId."' and created >=DATE(NOW()) - INTERVAL 7 DAY GROUP BY reportname;";
			$query=$this->db->query($sql);
			return $query->result();
		}
		
		public function getDetailedReportLastSevenDays($userId){
			$sql = "SELECT reportname as Report,reporttype as 'Type',count(*) as Total FROM search_history WHERE userId='".$userId."' and created >=DATE(NOW()) - INTERVAL 7 DAY GROUP BY reportname,reporttype;";
			$query=$this->db->query($sql);
			return $query->result();
		}
		
		public function getTotalLastSevenDays($userId){
			$sql = "SELECT count(*) as Total FROM search_history WHERE userId='".$userId."' and created >=DATE(NOW()) - INTERVAL 7 DAY;";
			$query=$this->db->query($sql);
			return $query->result();
		}
		
		public function getOverViewReportDateRange($userId,$startDate,$endDate){
			$sql = "SELECT reportname as Report, count(*) as 'Total' FROM search_history WHERE userId='".$userId."' AND created BETWEEN '".$startDate."' AND '".$endDate."' GROUP BY reportname;";
			$query=$this->db->query($sql);
			return $query->result();
		}
		
		public function getDetailedReportDateRange($userId,$startDate,$endDate){
			$sql = "SELECT reportname as Report,reporttype as 'Type',count(*) as Total FROM search_history WHERE userId='".$userId."' AND created BETWEEN '".$startDate."' AND '".$endDate."' GROUP BY reportname,reporttype;";
			$query=$this->db->query($sql);
			return $query->result();
		}
		
		public function getTotalDateRange($userId,$startDate,$endDate){
			$sql = "SELECT count(*) as Total FROM search_history WHERE userId='".$userId."' AND created BETWEEN '".$startDate."' AND '".$endDate."';";
			$query=$this->db->query($sql);
			return $query->result();
		}
		
		public function findByUser($userId)
        {
                $query = $this->db->get_where('search_history', array('userId' => $userId));
				return $query->result();
        }
		
		public function getTotalByUser($userId,$startDate="",$endDate="")
        {
			$sql = "SELECT * FROM search_history WHERE userId='".$userId."' AND created BETWEEN '".$startDate."' AND '".$endDate."';";
			if(($startDate == "") && ($endDate == "")){
				$sql = "SELECT * FROM search_history WHERE userId='".$userId."' AND created >=DATE(NOW()) - INTERVAL 7 DAY;";
			}
			$query=$this->db->query($sql);
			return $query->result();
        }
		
		public function findById($id)
        {
                $query = $this->db->get_where('search_history', array('id' => $id));
				return $query->result();
        }
		
		public function getTotalByClient($clientId,$startDate="",$endDate=""){
			$sql = "select u.id, u.username as user,s.reportname as report, count(s.reportname) as totalCount from users u inner join search_history s on u.id=s.userId AND u.clientId='".$clientId."' AND s.created BETWEEN '".$startDate."' AND '".$endDate."' group by s.reportname,u.username,u.id;";
			if(($startDate == "") && ($endDate == "")){
				$sql = "select u.id, u.username as user,s.reportname as report, count(s.reportname) as totalCount from users u inner join search_history s on u.id=s.userId AND u.clientId='".$clientId."' AND s.created >=DATE(NOW()) - INTERVAL 7 DAY GROUP BY s.reportname,u.username, u.id;";		
			}
			//print_r($sql);
			$query=$this->db->query($sql);
			return $query->result();
		}
	}
?>