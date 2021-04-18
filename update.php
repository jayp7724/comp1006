<?php
  session_start();
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE

  include "_connect.php";

  // Step 2: (20 points) Update the existing 'supers' row in the database
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
if(!empty($_POST['fName']) && !empty($_POST['lName']) && !empty($_POST['dob'])){
  $stmt = $conn->prepare("UPDATE supers SET first_name=:fName, last_name=:lName, date_of_birth=:dob, updated_at= NOW() WHERE id=:id");
  $stmt->bindParam(":fName",$_POST['fName']);
  $stmt->bindParam(":lName",$_POST['lName']);
  $stmt->bindParam(":dob",$_POST['dob']);
  $stmt->bindParam(":id",$_GET['id']);
  if($stmt->execute()){
  $message = true;
  }
}

  // Step 3: (16 points) Perform basic error handling and redirect the user with a success or error message
  // Ensure you store the messages into the $_SESSION
  // Ensure you exit after your redirect
  // CREATE YOUR ERROR HANDLING BELOW THIS LINE

  if($message){
    $_SESSION['message'] = "User Successfully Updated";
    header("Location:notification.php");
  }else{
      $_SESSION['message'] = "Sorry an error occur, try updating again";
      header("Location:notification.php");
  }

  // TOTAL POINTS POSSIBLE: 38
?>
