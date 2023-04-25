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

<h2>Insert New Doctor</h2>
<form action="part3.php" method="post">
	First Name: <input type="text" name="firstname"><br>
	Last Name: <input type="text" name="lastname"> <br>
	speciality: <input type="text" name="speciality"><br>
	License Date: <input type="date" name="licensedate"><br>
	License Num: <input type="text" name="licensenum"><br>
	Birthdate: <input type="date" name="Birthdate"><br>
	Hospital: 
	<br>
		<?php
			include 'connecttodb.php';
			include 'listhospitals.php';
		?>
	<input type="submit" value="Insert Doctor"> <br>
</form>

<p>

</form>


</body>
</html>