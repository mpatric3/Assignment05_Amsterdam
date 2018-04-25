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
	    <?php include "inc/header.inc"; ?>
	    <?php include "inc/nav.inc"; ?>

    <div>
		<h1>Thank you!</h1>
		<p>Thank you for answering our survey!></p>
		<p>Your feedback helps us improve the site to cater to your interests!</p>
		<p>Enjoy, and we hope you learned something about fruit! </p>
     </div>

</body>
</html>

<?php
	mysqli_close($connection);
?>