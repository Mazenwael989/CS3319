<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
<title>CS3319 Assignment 3</title>
</head>

<body>

<h1>Welcome to Part 5</h1>
<form action="part5.php" method="post">
<ol>

<?php
   include 'connecttodb.php';
   echo 'Select Doctor:';
   $query = 'SELECT * FROM doctor';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo '<input type="radio" name="doctorNumber" value="';
        echo $row["licensenum"];
        echo '">' . $row["firstname"] . " " . $row["lastname"] . "<br>";
     }
     mysqli_free_result($result);
     mysqli_close($connection);

?>
</ol>
<ol>
<?php
    include 'connecttodb.php';
   echo 'Select Patient:';
   $query = 'SELECT * FROM patient';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo '<input type="radio" name="patientNumber" value="';
        echo $row["ohipnum"];
        echo '">' . $row["firstname"] . " " . $row["lastname"] . "<br>";
     }
     mysqli_free_result($result);
     mysqli_close($connection);

?>
</ol>
<input type="submit" value="Accept Treatment">
<br>
<br>
<br>
<br>
<br>
'PLEASE IGNORE MESSAGE BELOW';
<br>
<br>
<br>
</form>

<p>
<table>
<?php
        include "connecttodb.php";
        include "part5.php";
?>
</table>




</body>
</html>
