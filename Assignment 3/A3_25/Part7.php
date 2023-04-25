//This code runs to show all information in hospital

<?php
//Run this query to choose hospital code and have infoprmation be displayed from hospital table	
		$query = "SELECT DISTINCT hoscode FROM hospital;";

$result = mysqli_query($connection, $query);
if (!$result) {
        die("query failed try again or refresh");
}
		
echo '<select name="hoscode" id="hoscode"> <option value="none">Select</option>';
		
//While loop to have sleection option open
while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value='" . $row["hoscode"] . "'>" . $row["hoscode"] . "</option>";
}

echo "</select> <br><br>";

mysqli_free_result($result);
//If statement and assigning of hos code to have error handing and printing info depending on user seleciton
$hoscode = $_POST["hoscode"];
if ($hoscode != "none" && $hoscode != null)  {
// query 2 sleecting infromation from hospital table and joins in hosputal code selected by user
 $query2 = "SELECT hosname, firstname, lastname, headdocstartdate, city, prov, numofbed, headdoc FROM hospital INNER JOIN doctor ON hoscode = hosworksat WHERE hoscode = '" . $hoscode . "';";
		
$result2 = mysqli_query($connection, $query2);
if (!$result2) {
        die("query failed");
}

echo "<table> <tr> <th>Name</th> <th>Province</th> <th>City</th> <th>Numberofbeds</th> <th>firstname</th> <th>lastname</th> <th>Headdoc ID</th> </tr>";

while ($row = mysqli_fetch_assoc($result2)) {
//Printing informaiton from database tables
        echo "<tr>" . "<td>" . $row["hosname"] . "</td>" . "<td>" . $row["prov"] . "</td>" . "<td>" . $row["city"] . "</td>" . "<td>" . $row["numofbed"] . "</td>" . "<td>" . $row["firstname"] . "</td>" . "<td>" . $row["lastname"] . "</td>" ."<td>" . $row["headdoc"] . "</td>". "</tr>";
}

echo "</table>";

mysqli_free_result($result2);
mysqli_close($connection);

}

?>


