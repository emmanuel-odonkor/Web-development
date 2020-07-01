<?php

//call on the taskclass
require('../classes/taskclass.php');

//controller function to add a task
function addtaskctrl($a, $b, $c, $d){
	//create a new instance of the class
	$insertp = new task_class;

	//run the insert method
	$checkinsert = $insertp->addtask_mthd($a, $b, $c, $d);

	if ($checkinsert) {
		return $checkinsert;
	}else{
		return false;
	}

	//return result
}

//controller function to delete a task
function deletetaskctrl($a){
	//create a new instance of the class
	$deletep = new task_class;

	//run the delete method
	$checkdelete = $deletep->delete_task_mthd($a);

	if ($checkdelete) {
		return $checkdelete;
	}else{
		return false;
	}

	//return result
}

//controller function to view all tasks
function viewalltaskctrl($a){
	//create an instance of the task class
	$displayc = new task_class();

	//run the view all method in the class
	$tasklist = $displayc->viewall_task_mthd($a);

	if ($tasklist) {
		//array
		$db_tasklist = array();
			while ($record = $displayc->db_fetch()) {
				# code...
				$db_tasklist[] = $record;
			}
			//return the array
		return $db_tasklist;
	}else{
		return false;
	}
}

//controller function to update a task
function updatetaskctrl($a,$b,$c,$d){
	//create a new instance of the class
	$updatep = new task_class;

	//run the update method
	$checkupdate = $updatep->update_task_mthd($a,$b,$c,$d);

	if ($checkupdate) {
		return $checkupdate;
	}else{
		return false;
	}

	//return result
}
 //function to help get task data depending on a given task_id
function getTask($a){
	$task = new task_class();
	$checktask = $task->getTaskById($a);
	if ($checktask){
		//create an array
		$Task = array();
		//loop through the fetch and add each to the array
			while ($record = $task->db_fetch()) {
				//passing each record to the array
				$Task[] = $record;
			}
		//return the array
		return $Task;
}
}

?>