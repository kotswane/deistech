<?php
	class Dashboard_model extends CI_Model {
		
		public function getReportById($userId){
			$sql = "SELECT * FROM `report` WHERE report_id IN(".$list.");";
			$query=$this->db->query($sql);
			return $query->result();
		}
		
		public function getOverViewReportLastSevenDays($userId){
			$sql = "SELECT auditlog_reportname as Report, count(*) as 'Total' FROM auditlog WHERE auditlog_userId='".$userId."' and auditlog_datetime >=DATE(NOW()) - INTERVAL 7 DAY GROUP BY auditlog_reportname;;";
			$query=$this->db->query($sql);
			return $query->result();
		}
		
		public function getDetailedReportLastSevenDays($userId){
			$sql = "SELECT auditlog_reportname as Report,auditlog_reporttype as 'Type',count(*) as Total FROM auditlog WHERE auditlog_userId='".$userId."' and auditlog_datetime >=DATE(NOW()) - INTERVAL 7 DAY GROUP BY auditlog_reportname,auditlog_reporttype;";
			$query=$this->db->query($sql);
			return $query->result();
		}
		
		public function getTotalLastSevenDays($userId){
			$sql = "SELECT count(*) as Total FROM auditlog WHERE auditlog_userId='".$userId."' and auditlog_datetime >=DATE(NOW()) - INTERVAL 7 DAY;";
			$query=$this->db->query($sql);
			return $query->result();
		}
	}
?>