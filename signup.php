<?php

		require "header.php";

 ?>


 		<main>
      <div class="wrapper-main">
        <section>
          <h1>Sign up</h1>
          <form action="includes/signup.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username">
            <input type="text" name="mail" placeholder="E-mail">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwd-repeat" placeholder="Password again">
            <button type="submit" name="signup-submit">Sign up!</button>
          </form>
        </section>

      </div>

		</main>


<?php

		require "footer.php";

 ?>
