<?php 
class Functions{
	private $db;
	
	public function __construct($database) {
	    $this->db = $database;
	}
	public function get_all_tasks($task_status) { 
		$query = $this->db->prepare("SELECT * FROM `form_tasks` where `status` <> ?");
		$query->bindValue(1, $task_status);
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
		return $query->fetchAll();
	}
	
	public function get_task_info($task_ID) {
		$query = $this->db->prepare("SELECT * FROM `form_tasks` WHERE `ID`= ?");
		$query->bindValue(1, $task_ID);
		try{
			$query->execute();
			return $query->fetch();
		} catch(PDOException $e){
			die($e->getMessage());
		}
	}

	public function insert_new_task($post_task){
		$post_status = 1;
		try{
			$query = $this->db->prepare("INSERT INTO `form_tasks` (`message`,`status`) VALUES (?,?) ");
			$query->bindValue(1, $post_task);
			$query->bindValue(2, $post_status);
			$query->execute();
		} catch(PDOException $e){
			die($e->getMessage());
		}
	}
	
	public function update_task($update_task_info,$post_task_ID){
		$query = $this->db->prepare("UPDATE `form_tasks` SET `message` = ? WHERE `ID`= ?");
		$query->bindValue(1, $update_task_info);
		$query->bindValue(2, $post_task_ID);
		try{
			$query->execute();
		} catch(PDOException $e){
			die($e->getMessage());
		}
	}	

	public function complete_task($task_status,$post_task_ID){
		$query = $this->db->prepare("UPDATE `form_tasks` SET `status` = ? WHERE `ID`= ?");
		$query->bindValue(1, $task_status);
		$query->bindValue(2, $post_task_ID);
		try{
			$query->execute();
		} catch(PDOException $e){
			die($e->getMessage());
		}
	}	

	public function delete_task($task_status,$post_task_ID){
		$query = $this->db->prepare("UPDATE `form_tasks` SET `status` = ? WHERE `ID`= ?");
		$query->bindValue(1, $task_status);
		$query->bindValue(2, $post_task_ID);
		try{
			$query->execute();
		} catch(PDOException $e){
			die($e->getMessage());
		}
	}	

}