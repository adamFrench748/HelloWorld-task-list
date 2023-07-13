<?php
require 'core/connect/database.php';
require 'core/classes/functions.php';
$functions=new Functions($db);
$post_task_ID = $_GET['task'];
// edit task page
$task_info = $functions->get_task_info($post_task_ID);
$post_task = $task_info['message'];
	if (isset($_GET['success']) && empty($_GET['success'])){
	        echo '<p class="form-msg-success">Task has been updated! Redirecting back to <strong>Home</strong> page.</p>';
					header('Refresh: 1; URL=https://markstefani50.com/task/home.php');
					exit();
	    } else {
            if(empty($_POST) === false) {
				if(empty($errors) === true) {
					$update_task_info = htmlentities(trim($_POST['DisplayNotes']));
					$functions->update_task($update_task_info,$post_task_ID); 
					header('Location: edit-task.php?task='.$post_task_ID.'&success');
					exit();
				} else if (empty($errors) === false) {
					echo '<p>' . implode('</p><p>', $errors) . '</p>';	
				}	
            }
		}			
// content goes here ?>
<a href="home.php">Return Home</a>
<form action="" method="post" enctype="multipart/form-data">
<p class="form-field-title"><textarea name="DisplayNotes" rows="3"><?php echo $post_task;?></textarea><br>Task</p>
<input class="btn-form-end" type="submit" value="Update Task">
</form>
