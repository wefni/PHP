<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title></title>
  </head>
  <body>

    <header>

      <nav>

        <ul id="ul">
          <li><a href="index.php">Home</li>
          <li><a href="#">Portfolio</li>
          <li><a href="#">About me</li>
          <li><a href="#">Contact</li>
        </ul>

        <div class="fent">

          <form action="includes/login.inc.php" method="post">
            <input type="text" name="mailuid" placeholder="Username/E-mail...">
            <input type="password" name="pwd" placeholder="Password...">
            <button type="submit" name="login-submit">Login</button>
            </form>
            <a href="signup.php">Signup</a>
            <form action="includes/logout.inc.php" method="post">
              <button type="submit" name="logout-submit">Logout</button>
              </form>
        </div>

      </nav>
    </header>
  </body>
</html>
