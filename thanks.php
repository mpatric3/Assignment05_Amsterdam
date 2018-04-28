<?php
	require_once 'php/config.php';

	$first_name = Trim(stripslashes($_POST['first_name']));
	$last_name = Trim(stripslashes($_POST['last_name']));
	$fav_fruit = Trim(stripslashes($_POST['fav_fruit']));
	$fruit_use = Trim(stripslashes($_POST['fruit_use']));
	
	
	// Perform database query
	$query  = "INSERT INTO fruit_survey (first_name, last_name, fav_fruit, fruit_use) VALUES ('$first_name', '$last_name', '$fav_fruit', '$fruit_use')";
	$result = mysqli_query($link, $query);

?>

<?php include "inc/html-top.inc";?>
<body>
	    <?php include "inc/header.inc"; ?>
	    <?php include "inc/nav.inc"; ?>

    <div>
		<h1>Thank you!</h1>
		<p>Thank you for answering our survey!</p>
		<p>Your feedback helps us improve the site to cater to your interests!</p>
		<p>Enjoy, and we hope you learned something about fruit! </p>
     </div>

</body>
</html>

<?php
	mysqli_close($link);
?>