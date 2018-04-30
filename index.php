<?php include "inc/html-top.inc";?>
<<<<<<< HEAD
	<article>
	<body>
            <?php include "inc/header.inc"; ?>
            <?php include "inc/nav.inc"; ?>

		<div class= "container" style="z-index: 1;">

		<div>
			<img class="scale" src="images/fruitpic.jpg" alt="A Nice Fruit Arrangement.">
		</div>

			<div>
				<h2>Fruit: An Overview</h2>

				<h3>Fruits and Berries</h3>
				<p>In botany, a fruit is the seed-bearing structure in flowering plants (also known as angiosperms) formed from the ovary after flowering.
				</p>

				<h3>Culinary Fruit and Botanical Fruit</h3>
				<p>
				Many common terms for seeds and fruit do not correspond to the botanical classifications. In culinary terminology, a fruit is usually any sweet-tasting plant part, especially a botanical fruit; a nut is any hard, oily, and shelled plant product; and a vegetable is any savory or less sweet plant product.[5] However, in botany, a fruit is the ripened ovary or carpel that contains seeds, a nut is a type of fruit and not a seed, and a seed is a ripened ovule.[6]
				</p>

			</div>
			</article>


			<aside>
			<div class = "survey">
                <h1>What fruit would you like to learn more about?</h1>
                    <form method = "post" action = "thanks.php">
                    </form>
            </div>


		    <div class = "login">
		        <h2>Login</h2>
		        <p>If you are an admin, please fill in your credentials to login.</p>
		        <form>
		            <p> Don't have an account? <a href="register.php">Sign up now</a>.</p>
		        </form>
		    </div>
		</aside>

			<?php include "inc/footer.inc"; ?>

		</div> <!--.container -->
		<?php include "inc/scripts.inc"; ?>
	</body>
=======
<body>
   <?php include "inc/header.inc"; ?>
   <?php include "inc/nav.inc"; ?>
   <div class= "container" style="z-index: 1;">
      <img src="images/fruitpic.jpg" alt="A Nice Fruit Arrangement.">
      <div>
         <h2>Fruit: An Overview</h2>
         <h3>Fruits and Berries</h3>
         <p>In botany, a fruit is the seed-bearing structure in flowering plants (also known as angiosperms) formed from the ovary after flowering.
         </p>
         <h3>Culinary Fruit and Botanical Fruit</h3>
         <p>
            Many common terms for seeds and fruit do not correspond to the botanical classifications. In culinary terminology, a fruit is usually any sweet-tasting plant part, especially a botanical fruit; a nut is any hard, oily, and shelled plant product; and a vegetable is any savory or less sweet plant product.[5] However, in botany, a fruit is the ripened ovary or carpel that contains seeds, a nut is a type of fruit and not a seed, and a seed is a ripened ovule.[6]
         </p>
      </div>
      <div class = "survey">
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
      </div>
      <div class="login">
         <h2>Login</h2>
         <p>If you are an admin, please fill in your credentials to <a href="login.php">login.</a></p>
         <form>
            <p> Don't have an account? <a href="register.php">Sign up now</a>.</p>
         </form>
      </div>
      <?php include "inc/footer.inc"; ?>
   </div>
   <!--.container -->
   <?php include "inc/scripts.inc"; ?>
</body>
>>>>>>> af45e4dd63ea7cab0c54357aa92c99c7fe8f9516
</html>