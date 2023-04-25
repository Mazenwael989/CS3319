<!DOCTYPE html>
//EVERY PHP PAGE WILL DISPLAY INFORMATION FOR PHP FILES
<html>
<head>
<meta charset="utf-8">
//Title for page
<title>CS3319 Assignment 3</title>
</head>

<body>
<?php
include "connecttodb.php";
?>
//HEADER FOR WELCOMING 
<h1>Welcome To Part 1 Ordering, Showing Doctors</h1>

<form action="" method="post">
<input type="radio" id="obyLastName" value="lastname" name="oby">
  <label for="obyLastName">Last Name</label><br>

<input type="radio" id="obyBirthDate" value="birthdate" name="oby">
  <label for="obyBirthDate">Birth Date</label><br>

<br>
<span>Ascending or Descending?</span>
<br>
//Select Order by toggle
<input type="radio" id="Ascending" value="ASC" name="oIN" checked >
  <label for="Ascending">Ascending</label><br>
//Select Order by toggle for descending
<input type="radio" id="Descending" value="DESC" name="oIN">
  <label for="Descending">Descending</label><br>
<br>

<br>
//Submit button
<input type="submit" value="Get Doctor Info">
<br>

<table>
<?php
        include "connecttodb.php";
        include "part1.php";
?>
</table>

</form>



</body>
</html>