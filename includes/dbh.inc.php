<?php

  $servername = "localhost";

  $dBUsername = "root";
  $dBPassword = "";
  $dBName ="php";

  $conn = mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

  if (!$conn) {
    die("Connection failed: ".mysqli.connect_error());
  }
