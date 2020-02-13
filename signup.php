<?php

		require "header.php";       //Ismételten beimportalja a headerben lévő dolgokat

 ?>


 		<main>
      <div class="wrapper-main">
        <section>
          <h1>Sign up</h1>
          <form action="includes/signup.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username">
            <input type="text" name="mail" placeholder="E-mail">    <?php // TODO: Nem todo de nem tudok valamiért commentelni, csak így xddd ?>
            <input type="password" name="pwd" placeholder="Password"> <?php // TODO:  A form fasz tudja mit csinal, az input meg egyértelmű?>
            <input type="password" name="pwd-again" placeholder="Password again">
            <button type="submit" name="signup-submit">Sign up!</button>
          </form>
        </section>

      </div>

		</main>


<?php

		require "footer.php";   //Ismételten beimportalja a headerben lévő dolgokat

 ?>
