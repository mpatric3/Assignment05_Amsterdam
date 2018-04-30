<?php  
require_once 'config.php';
$sql = "INSERT INTO fruit_survey(first_name, last_name, new_fruit) VALUES('".$_POST["first_name"]."', '".$_POST["last_name"]."', '".$_POST["new_fruit"]."')";  
if(mysqli_query($link, $sql))  
{  
     echo 'Data Inserted';  
}  
 ?>