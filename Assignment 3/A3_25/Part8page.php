
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>CS3319 Assignment 3</title>
</head>
<body>
<p>
<h2>Update a Hospital Name</h2>
<form action="part8.php" method="post">
        Select Hospital:<br>
        <?php
             	include'connecttodb.php';
                include'listhospitals.php';
        ?>
	<br>
	New Hospital Bed Number: <input type="text" name="newbednum"><br>
        <input type="submit" value="Update"><br>
</form>

</body>
</html>


