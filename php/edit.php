<?php  
	require_once 'config.php';
	$id = $_POST["id"];  
	$text = $_POST["text"];  
	$column_name = $_POST["column_name"];  
	$sql = "UPDATE fruit_survey SET ".$column_name."='".$text."' WHERE id='".$id."'";  
	if(mysqli_query($link, $sql))  
	{  
		echo 'Data Updated';  
	}  
 ?>