<?php
require 'core/connect/database.php';
require 'core/classes/functions.php';
$functions=new Functions($db);
$post_task = $_GET["task"];
$task_status = 2;
$submit_form = $functions->complete_task($task_status,$post_task);
header("Location: home.php");
?>
