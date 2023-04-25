//Select distinct to choose the spcialiy from doctor databse
<?php		
		$query = "SELECT DISTINCT speciality FROM doctor;";
//if statement incase query fails
$result = mysqli_query($connection, $query);
if (!$result) {
        die("query failed");
}
// to create a list for choosing an option
echo '<select name="speciality" id="speciality"> <option value="none">Select</option>';
		
//While loop to select option and keep it running
while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value='" . $row["speciality"] . "'>" . $row["speciality"] . "</option>";
}
//select for drop down menu
echo "</select> <br><br>";

mysqli_free_result($result);
//If statement incase speciality is not chosen or is null
$speciality = $_POST["speciality"];
if ($speciality != "none" && $speciality != null)  {
//Selectin from doctor query. where the speciality is choosen
 $query2 = "SELECT * FROM doctor WHERE speciality = '" . $speciality . "';";
//incase query failed
$result2 = mysqli_query($connection, $query2);
if (!$result2) {
        die("query failed due to an error choose another speciality or try again");
}

echo "<table> <tr> <th>First Name</th> <th>Last Name</th> <th>License Number</th> <th>Birth Date</th> <th>Specialty</th> <th>Works at</th> </tr>";

while ($row = mysqli_fetch_assoc($result2)) {
//Print all information from database in order
        echo "<tr>" . "<td>" . $row["firstname"] . "</td>" . "<td>" . $row["lastname"] . "</td>" . "<td>" . $row["licensenum"] . "</td>" . "<td>" . $row["birthdate"] . "</td>" . "<td>" . $row["speciality"] . "</td>" . "<td>" . $row["hosworksat"] . "</td>" . "</tr>";
}

echo "</table>";

mysqli_free_result($result2);
mysqli_close($connection);

}

?>


