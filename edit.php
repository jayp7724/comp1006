<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS

  include "_connect.php";

  // Step 2: (8 points) Retrieve the 'supers' row from your database
  // Ensure you use the condition to get only the one specific row
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
  $stmt = $conn->prepare("SELECT * FROM supers WHERE id=:id");
  $stmt->bindParam(":id",$_GET['id']);
  $stmt->execute();
  $row = $stmt->fetch(PDO::FETCH_BOTH);

?>

<!-- Step 3: (2 points) Include your header here -->
<?php include "_header.php"?>
<!-- Step 4: (1 points) Create a link back to home.php -->
<!-- CREATE YOUR LINK BELOW THIS LINE -->
<a href="index.php">Home</a>

<!-- Step 5: (15 points) Create a form that has a field for the following columns -->
<!-- first_name, last_name, date_of_birth,  alias, active -->
<!-- Ensure you don't forget the name attribute for each field -->

<!-- Step 6: (4 points) Add the action and method attributes -->
<!-- Ensure you use the correct HTTP method and point the action at the correct processing page -->

<!-- Step 7: (10 points) Prepopulate the form with the values from the retrieved row -->
<!-- CREATE YOUR FORM BELOW THIS LINE -->


<form class="" action="update.php?id=<?=$row['id']?>" method="post">

  <input type="text" name="fName" value="<?=$row['first_name']?>" placeholder="First Name">
  <br>
  <input type="text" name="lName" value="<?=$row['last_name']?>" placeholder="Last Name">
  <br>
  <input type="date" name="dob" value="<?=$row['date_of_birth']?>" placeholder="Date Of Birth">
  <br>
  <input type="submit" name="add" value="Add">

</form>

<!-- Step 8: (2 points) Include your footer here -->

<?php include "_footer.php"?>

<!-- TOTAL POINTS POSSIBLE: 44 -->
