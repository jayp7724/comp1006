<?php

  // Step 1: (12) Using either MySQLi or PDO
  //    Create a connection to your MySQL DB and store it in a variable named $conn
  // CREATE YOUR CONNECTION BELOW THE LINE
  define("DBNAME", "project01");
  define("DBUSER", "root");
  define("DBPASS", "");


  try{
  $conn = new PDO('mysql:host=localhost;dbname='.DBNAME,DBUSER,DBPASS);

  $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

  }catch(PDOException $e){
  echo $e->getMessage();

  }

  // TOTAL POINTS POSSIBLE: 6

?>
