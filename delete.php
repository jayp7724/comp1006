<?php
  session_start();

  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE

  include "_connect.php";

  // Step 2: (20 points) Delete the existing 'supers' row from the database
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE

  $stmt = $conn->prepare("DELETE FROM supers WHERE id=:id ");
  $stmt->bindParam(":id",$_GET['id']);
  if($stmt->execute()){
    $message = true;
  }

  // Step 3: (16 points) Perform basic error handling and redirect the user with a success or error message
  // Ensure you store the messages into the $_SESSION
  // Ensure you exit after your redirect
  // CREATE YOUR ERROR HANDLING BELOW THIS LINE


    if($message){
      $_SESSION['message'] = "User Successfully Deleted";
      header("Location:notification.php");
    }else{
        $_SESSION['message'] = "Sorry an error occur, try deleting again";
        header("Location:notification.php");
    }

  // TOTAL POINTS POSSIBLE: 38
?>
