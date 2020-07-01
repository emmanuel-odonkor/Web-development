<?php

//include the database class
require('../settings/db_class.php');

/**
 * 
 *@author Emmanuel Odonkor Teye-Kofi
 */
class task_class extends db_connection
{

	//method for insert / adding  a task
	public function addtask_mthd($a, $b, $c, $d){
		//write the query
		$sql = "INSERT INTO `task`(`username`,`task_name`, `date`,`time`) VALUES('$a', '$b', '$c','$d')";

		//run the query
		return $this->db_query($sql);
	}

	//a method to delete a task 
	public function delete_task_mthd($a){
		//write a query
		$sql = "DELETE FROM `task` WHERE `task_id` = '$a'";

		//return the executed query
		return $this->db_query($sql);
	}

	//a method for viewing all tasks
	public function viewall_task_mthd($a){
		//write a query
		$sql = "SELECT * FROM `task` WHERE `username` = '$a' order by `date` ";

		//return the executed query
		return $this->db_query($sql);
	}

    //a method for updating tasks
	public function update_task_mthd($a,$b,$c,$d){
		//write a query
		$sql = "UPDATE `task` SET `task_name` = '$a' , `date`='$b' , `time`='$c' WHERE `task_id`= '$d'";

		//return the executed query
		return $this->db_query($sql);
	}
    
    //method for getting task details based on the given task_id
	public function getTaskById($id){
        
        //wrting of query
		$sql = "SELECT * FROM `task` WHERE `task_id`='$id'";

		//run the sql execution

		return $this->db_query($sql);



	}

}

?>