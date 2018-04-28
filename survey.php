<?php include "inc/html-top.inc";?>
<body>
   <?php include "inc/header.inc"; ?>
   <?php include "inc/nav.inc"; ?>
   <div class= "container" style="z-index: 1;">

   	<form method="POST" action="thanks.php">
      <div>
         <h2>First Name</h2>
      </div>
      <input type="text" name="first_name" required>
      <div>
         <h2>Last Name</h2>
      </div>
      <input type="text" name="last_name" required>
      <div>
         <h2>What fruit would you like to learn more about?</h2>
      </div>
      <input type="text" name="new_fruit" required> </br></br>
      <input type="submit" id="submitButton"
         name="submitClick" value="Submit">
      </form>
      <?php include "inc/footer.inc"; ?>
   </div>
   <!--.container -->
   <?php include "inc/scripts.inc"; ?>
</body>
</html>