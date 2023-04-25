<?php
//Create a list of hospitals to be used for entire assignment to list hospitals like in part 3
	$query = 'SELECT * FROM hospital';

	$result = mysqli_query($connection, $query);
//Create an if statement incase query fails
	if (!$result){
		die("database query failed");
	}
	//While loop to show all information
	while ($row = mysqli_fetch_assoc($result)){
		echo '<input type="radio" name="hos" value="'.$row["hoscode"].'">'.$row["hoscode"].' - '.$row["hosname"].'<br>';
	}

	mysqli_free_result($result);
	mysqli_close($connection);
?>
