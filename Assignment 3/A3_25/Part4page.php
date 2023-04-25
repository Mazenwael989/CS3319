<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
<title>CS3319 Assignment 3</title>
</head>

<body>
<?php
include "connecttodb.php";
?>

<h1>Welcome</h1>

<form action ="" method = "post">
Please Enter Doctor's License Number: <input type="text" name="licensenum"><br>
<?php
        include "connecttodb.php";
        include "part4.php";
?>

<br>
<input type="submit" value="Delete Doctor">
<br>
</form>




<form action = "" method = "post">
Are you sure you want to remove the doctor: <input type = "text" name = "licensenum"><br>
<?php
	include "connecttodb.php";
	include "part4.php";
?>



<p>

</form>


</body>
</html>