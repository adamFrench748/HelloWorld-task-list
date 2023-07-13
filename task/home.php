<?php
require 'core/connect/database.php';
require 'core/classes/functions.php';
$functions=new Functions($db);
$page_title="Tasks - Hello World";
$H1_title = "Tasks";
$task_status = 0; // all tasks except deleted
$tasks = $functions->get_all_tasks($task_status);
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<style>
table {
  border-collapse: collapse;
}
table, th, td {
  border: 1px solid black;
}
tr:nth-child(even) {background-color: #f2f2f2;}
tr:hover {background-color: #f7f7f7;}
th, td {
  padding: 5px;
  text-align: center;
}
a.button {
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;
    text-decoration: none;
    color: initial;
}
</style>
</head>
		<h1><?php echo $H1_title;?></h1>
			<a href="new-task.php" title="Create New Task">Create New Task</a>
				<table>							
					<tbody>	
						<tr>	
							<th>Task ID</th>
							<th>Create Date</th>
							<th>Task Notes</th>				
							<th>Status</th>
							<th>Mark Complete</th>
							<th>Delete</th>
							
						</tr>	
					<?php	foreach($tasks as $task){
							$task_ID = $task['ID'];
							$task_date = $task['date_submitted'];
							$task_notes = $task['message'];
							$task_status = $task['status'];
							if($task_status==2){
							echo "<tr>";
							echo "<td><strong><span style='color:black'>".$task_ID."</span></strong></td>";
							echo "<td><strong><span style='color:black'>".$task_date."</span></strong></td>";
							echo "<td><strong><strike><span style='color:black'>".$task_notes."</span></strike></strong></td>";
							echo "<td></td>";
							echo "<td></td>";
							echo "<td><strong><span style='color:black'><a class='button' href='delete-task.php?task=".$task_ID."'>Click to DELETE</a></span></strong></td>";
							echo "</tr>";	
							} else {
							echo "<tr>";
							echo "<td><strong><span style='color:black'>".$task_ID."</span></strong></td>";
							echo "<td><strong><span style='color:black'>".$task_date."</span></strong></td>";
							echo "<td><strong><span style='color:black'>".$task_notes."</span></strong></td>";
							echo "<td><strong><span style='color:black'><a class='button' href='edit-task.php?task=".$task_ID."'>Click to EDIT</a></span></strong></td>";
							echo "<td><strong><span style='color:black'><a class='button' href='complete-task.php?task=".$task_ID."'>Click to Mark COMPLETE</a></span></strong></td>";
							echo "<td><strong><span style='color:black'><a class='button' href='delete-task.php?task=".$task_ID."'>Click to DELETE</a></span></strong></td>";
							echo "</tr>";
							}
							}
					?>
				</tbody>
			</table>
<?php // end of content ?>
</html>