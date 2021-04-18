<?php
  session_start();

  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  include "_connect.php";

  // Step 2: (17 points) Insert the new 'supers' row into the database
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
if(!empty($_POST['fName']) && !empty($_POST['lName']) && !empty($_POST['dob'])){

  $stmt = $conn->prepare("INSERT INTO supers VALUES(NULL,:fName,:lName,:dob,NULL,NULL,NULL,NOW(),NOW())");
	$stmt->bindParam(":fName",$_POST['fName']);
  $stmt->bindParam(":lName",$_POST['lName']);
  $stmt->bindParam(":dob",$_POST['dob']);
  if($stmt->execute()){
  $message = true;
  }
}



  // Step 3: (16 points) Perform basic error handling and redirect the user with a success or error message
  // Ensure you store the messages into the $_SESSION
  // Ensure you exit after your redirect
  // CREATE YOUR ERROR HANDLING BELOW THIS LINE
if($message){
  $_SESSION['message'] = "User Successfully Added";
  header("Location:notification.php");
}else{
    $_SESSION['message'] = "Sorry an error occur, try adding again";
    header("Location:notification.php");
}



  // TOTAL POINTS POSSIBLE: 35
?>
