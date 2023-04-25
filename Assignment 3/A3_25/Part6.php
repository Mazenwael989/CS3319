//Use this to show patients treated by doctor licensenum

<?php
		//This query to select licensenum and be show in dropdown		
		$query = "SELECT DISTINCT licensenum FROM doctor;";

//Incase an error occurs with query
$result = mysqli_query($connection, $query);
if (!$result) {
        die("query failed please try again");
}
//print statement to have the drop down menu to select options
echo '<select name="licensenum" id="licensecum"> <option value="none">Select</option>';
		

while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value='" . $row["licensenum"] . "'>" . $row["licensenum"] . "</option>";
}

echo "</select> <br><br>";

mysqli_free_result($result);
//Start using licenseum num after its fetched and selected and run query below to print information
$licensenum = $_POST["licensenum"];
//If statement incase any issues occur with code
if ($licensenum != "none" && $licensenum != null)  {
//Query 2 for selecting infromation from looksafter tabel and depending on patient information and doctor license number
 $query2 = "SELECT DISTINCT patient.firstname, patient.lastname, looksafter.ohipnum FROM patient, doctor, looksafter WHERE '".$licensenum."' = looksafter.licensenum AND looksafter.ohipnum = patient.ohipnum";
		
$result2 = mysqli_query($connection, $query2);
if (!$result2) {
        die("query failed");
}

echo "<table> <tr> <th>First Name</th> <th>Last Name</th> <th>Ohip Number</th> </tr>";

while ($row = mysqli_fetch_assoc($result2)) {

        echo "<tr>" . "<td>" . $row["firstname"] . "</td>" . "<td>" . $row["lastname"] . "</td>" . "<td>" . $row["ohipnum"] . "</td>" . "</tr>";
}

echo "</table>";

mysqli_free_result($result2);
mysqli_close($connection);

}

?>


