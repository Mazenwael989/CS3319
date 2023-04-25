<?php
    include 'connecttodb.php';
    //Creating information for doctor number and patient number to connect them with query
   $doctorNumber= $_POST["doctorNumber"];
   $patientNumber = $_POST["patientNumber"];
   
//Inserting into the looksaster table using licsnesenum and ohipnum
   $query = "INSERT INTO looksafter (licensenum, ohipnum) VALUES ('" . $doctorNumber . "', '" . $patientNumber . "');" ;
//If statement incase failing to accept treatement 
if (!mysqli_query($connection, $query)) {
        die("Error: insert failed due to duplication of key...................... PLEASE RETURN TO PAGE ASSIGN ANOTHER PATIENT" . mysqli_error($connection));
    }
    //print statement if acceptance is successful
  echo  "patient with OHIP Number: " . $patientNumber . " was assigned to doctor with license number: " . $doctorNumber . ".";
   mysqli_close($connection);
?>
