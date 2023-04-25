
<?php
        $orderBy = $_POST["oby"];
		$orderIn = $_POST["oIN"]; 
        $query = "SELECT * FROM doctor";
		//If statement for displaying order by lastname
		if ($orderBy == 'lastname') {
			$query = $query . " ORDER BY " . "lastname " . $orderIn;
		}
		//Order by birthdate
		else {
			$query = $query . " ORDER BY " . "birthdate " . $orderIn;
		}
		
		$query = $query . ";";
		
//if statement if result is not working display message
$result = mysqli_query($connection, $query);
if (!$result) {
        die("query failed");
}
//Echo statement to print information for doctors
echo "<tr> <th>First Name</th> <th>Last Name</th> <th>License Number</th> <th>Birth Date</th> <th>Specialty</th> <th>Works at</th> </tr>";

while ($row = mysqli_fetch_assoc($result)) {
//grab information from database and display it
        echo "<tr>" . "<td>" . $row["firstname"] . "</td>" . "<td>" . $row["lastname"] . "</td>" . "<td>" . $row["licensenum"] . "</td>" . "<td>" . $row["birthdate"] . "</td>" . "<td>" . $row["speciality"] . "</td>" . "<td>" . $row["hosworksat"] . "</td>" . "</tr>";
}

echo "</ul>";

mysqli_free_result($result);
mysqli_close($connection);

?>


