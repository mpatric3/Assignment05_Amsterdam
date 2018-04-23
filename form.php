<?php
	// Create a database connection
	$dbhost = "66.147.242.186";
	$dbuser = "urcscon3_mpatric";
	$dbpass = "coffee1N";
	$dbname = "urcscon3_mpatric3";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// Test connection
	//if (!$connection) {
	//	die("connection failed");
	//}
	//echo "success!";

	$name = Trim(stripslashes($_POST['name']));
	$email = Trim(stripslashes($_POST['email']));
	
	
	// Perform database query
	$query  = "INSERT INTO myTable (name, email) VALUES ('$name', '$email')";
	$result = mysqli_query($connection, $query);

?>

<?php include "inc/html-top.inc";?>

<body>

    <div>
		<h1>Thank you!</h1>
		<p>Thank you for signing up, <?php echo $_POST["name"]; ?>!</p>
		<p>We wish you all the best in your fruit endeavors</p>
		<p>Please read more about fruit! </p>
	    	<a href="index.php">
	        	<img src="images/fruit.jpg" alt="Fruit pic">
	        </a>
     </div>

</body>
</html>

<?php
	mysqli_close($connection);
?>