<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: index.php");
  exit;
}
?>
  
            <nav>
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="development.php">Development of Fruit</a>
                </li>
                <li>
                    <a href="uses.php">Uses for Fruit</a>
                </li>
            </ul>

            </nav>
     
<h1>Welcome to the Admin Page!</h1>

<p>Below you can view and edit the responses to the user survey<p>


<script>  
 
</script>