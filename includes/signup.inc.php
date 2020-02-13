<?php

  if (isset($_POST['signup-submit'])) {   //Megézzük, hogy a submit gombbal jutott-e a felhasználó az oldalra!

    require 'dbh.inc.php';        //Beimportaljuk az adatbazist ahonnan vesszuk az adatokat

    $username = $_POST['uid'];
    $email = $_POST['mail'];                //Deklarájjuk a változókat a "$" jel segítségével, majd hozzárendeljuk mindegyiket a megfelelő name-hez amit korában megadtunk az input tageknél(lásd header.php)
    $password = $_POST['pwd'];
    $passwordAgain = $_POST['pwd-again'];


    //Megnézzük, hogy nem üres(ek)-e a mező(k) az adat(ok) megadásánál
    if (empty($username) || empty($email) || empty($password) || empty($passwordAgain)) {
      header("Location: ../signup.php?error=emptyfields&uid=".$username."&email=".$email);
      exit();
    }

    else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username)){
      header("Location: ../signup.php?error=invaliduiduid");
      exit();

    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      header("Location: ../signup.php?error=invalidmail&uid=".$username);
      exit();

    }
    else if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
      header("Location: ../signup.php?error=invaliduid&mail=".$email);
      exit();

    }
    //Megnézzük, hogy az elsőnek beírt jelszó megegyezik-e a masodiknak beírt jelszóval
    else if($password !== $passwordAgain){
      header("Location: ../signup.php?error=passwordcheckuid=".$username."&email=".$email);
      exit();

    }
    else {
      //Itt megnézzük, hogy ami felhasználónevet szeretne választani a felhasználó, az foglalt-e, a többit meg a fasz se tudja mert angolul volt!
      $sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
      $stmt = mysqli_stmt_init($conn);

      if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("Location: ../signup.php?error=sqlerror");
        exit();
      }
      else{

          mysqli_stmt_bind_param($stmt,"s",$username);
          mysqli_stmt_execute($stmt);
          mysqli_stmt_store_result($stmt);
          $resultCheck = mysqli_stmt_num_rows($stmt);

          if ($resultCheck > 0) {
            header("Location: ../signup.php?error=usertaken&email=".$email);
            exit();
          }
          else {
            $sql = "INSERT INTO users (uidUsers,emailUsers,pwdUsers) VALUES (?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt,$sql)) {
              header("Location: ../signup.php?error=sqlerror");
              exit();
            }else {
              $hashedPwd = password_hash($password,PASSWORD_DEFAULT);
              mysqli_stmt_bind_param($stmt,"sss",$username,$email,$hashedPwd);
              mysqli_stmt_execute($stmt);
              header("Location: ../signup.php?signup=success");
              exit();

            }

          }
      }

    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
  }
  //Ha nem a submit gombbal jott ide, akkor menjen a signup pagre!
  else{
    header("Location: ../signup.php");
    exit();

  }
