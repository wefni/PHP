<?php

  $servername = "localhost";
  $dBUsername = "root";             //Deklarájjuk itt is a valtozokat a "$" jel segítségével, az idézőjelben levo dolgoknak adottnak kell, hogy legyenek
  $dBPassword = "";                 //A servername az, amirol hostolod(jelen esetben sajat geprol szoval localhost), a username az root,
  $dBName ="php";                   // passwordhoz nem irunk semmit, a dBname pedig az amit XAMPP-ban elinditott mySQL adatbazis localhost/myphpadmin
                                    //oldalon letrehozott tábla

  $conn = mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);  //Csatlakoztatjuk a valtozokat azaz hozzárendeljuk oket az adatbazishoz

  if (!$conn) {
    die("Connection failed: ".mysqli.connect_error());      //Hiba kereses
  }
