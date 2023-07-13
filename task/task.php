<?php
require 'core/connect/database.php';
require 'core/classes/functions.php';
$functions=new Functions($db);
$post_task = $_POST["task"];
$submit_form = $functions->insert_new_task($post_task);
header("Location: home.php");
?>
