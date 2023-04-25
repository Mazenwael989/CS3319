<?php
   include 'connecttodb.php';
?>
<?php
//List all information and have user enter it.
   $licenseNumber= $_POST["licensenum"];
   $firstName = $_POST["firstname"];
   $lastName =$_POST["lastname"];
   $speciality = $_POST["speciality"];		
   $licenseDate =$_POST["licensedate"];
   $hosCode =$_POST["hos"];
   $birthDate = $_POST["Birthdate"];
//Create an if statement incase some information is not selected and created a query to insert and choose a new doctor
   if ($speciality != "" && lastname != null){
   $query = "INSERT INTO doctor (firstname, lastname, licensedate, licensenum, birthdate, speciality, hosworksat) VALUES ('" . $firstName . "', '" . $lastName . "', '" . $licenseDate . "', '" . $licenseNumber . "', '" . $birthDate . "', '" . $speciality . "', '" . $hosCode . "');" ;
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed due to an error check your licenscenum or other info" . mysqli_error($connection));
    }
   echo "Your doctor was added!";
   mysqli_close($connection);
   }
?>
