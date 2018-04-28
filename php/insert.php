<?php  
require_once 'config.php';
$sql = "INSERT INTO fruit_survey(first_name, last_name, fav_fruit, fruit_use) VALUES('".$_POST["first_name"]."', '".$_POST["last_name"]."', '".$_POST["fav_fruit"]."', '".$_POST["fruit_use"]."')";  
if(mysqli_query($link, $sql))  
{  
     echo 'Data Inserted';  
}  
 ?>