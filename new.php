<!-- Step 1: (2 points) Include your header here -->

<?php include "_header.php"?>

<!-- Step 2: (1 points) Create a link back to home.php -->
<!-- CREATE YOUR LINK BELOW THIS LINE -->
<nav>
  <a href="index.php">Home</a>
</nav>
<br><br>
<!-- Step 3: (15 points) Create a form that has a field for the following columns -->
<!-- first_name, last_name, date_of_birth,  alias, active -->
<!-- Ensure you don't forget the name attribute for each field -->

<!-- Step 4: (4 points) Add the action and method attributes -->
<!-- Ensure you use the correct HTTP method and point the action at the correct processing page -->
<!-- CREATE YOUR FORM BELOW THIS LINE -->

<form class="" action="insert.php" method="post">

  <input type="text" name="fName" value="" placeholder="First Name">
  <br>
  <input type="text" name="lName" value="" placeholder="Last Name">
  <br>
  <input type="date" name="dob" value="" placeholder="Date Of Birth">
  <br>
  <input type="submit" name="add" value="Add">

</form>


<!-- Step 5: (2 points) Include your footer here -->

<?php include "_footer.php"?>


<!-- TOTAL POINTS POSSIBLE: 24 -->
