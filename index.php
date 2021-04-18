<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
include "_connect.php";

  // Step 2: (5 points) Retrieve all the 'supers' rows from your database
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE

  $statement = $conn->prepare("SELECT * FROM supers");
  $statement->execute();

?>

<!-- Step 3: (2 points) Include your header here -->
<?php include "_header.php"?>

<!-- Step 4: (2 points) Create a navigation bar for home.php and new.php -->
<!-- CREATE YOUR NAVIGATION HTML BELOW THIS LINE -->
<nav>
  <a href="index.php">Home</a> || <a href="new.php">New</a>
</nav>

<!-- Step 5: (15 points) Create a table that display each row from the database -->
<!-- You only need to display the first_name, last_name, date_of_birth, -->
<!-- alias, active, and hero columns -->



<!-- Step 6: (6 points) Create action links pointing to 'edit.php' and 'delete.php' -->
<!-- Ensure there was one edit and delete link for each row -->

<!-- CREATE YOUR TABLE BELOW THIS LINE -->
<table>
  <th>First Name</th>
  <th>Last Name</th>
  <th>Date of Birth</th>
  <th>Edit</th>
  <th>Delete</th>
  <tr>
<?php while($row = $statement->fetch(PDO::FETCH_BOTH)){?>
  <td><?=$row['first_name']?></td>
  <td><?=$row['last_name']?></td>
  <td><?=$row['date_of_birth']?></td>
  <td><a href="edit.php?id=<?=$row['id']?>">Edit</a></td>
  <td><a href="delete.php?id=<?=$row['id']?>">Delete</a></td>
  <tr>
<?php }?>
</table>

<!-- Step 7: (2 points) Include your footer here -->

<?php include "_footer.php"?>

<!-- TOTAL POINTS POSSIBLE: 34 -->
