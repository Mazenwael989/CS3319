<?php

$deletedoctor = $_POST["licensenum"];

if ($deletedoctor != "" && $deletedoctor != null) {
//Delete the doctor query from using licensenum
$query = 'DELETE FROM doctor WHERE licensenum = "'.$deletedoctor.'";';

if (!mysqli_query($connection, $query)) {
        die("Error has occurred, DELETE FAILED, TRY AGAIN OR RETURN TO part1page TO CHECK License number" . mysqli_error($connection));
    }
   echo 'doctor with license number '.$deletedoctor.' was deleted, go back to part 1 to check things out';
   mysqli_close($connection);
   }
   ?>



