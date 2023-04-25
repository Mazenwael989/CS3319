
<?php
   include 'connecttodb.php';
?>
<h1>Hospital:</h1>
<ol>
//updating infoormaiton using a button, old and new was created to change and update in query
<?php
   $old= $_POST["hos"];
   $new= $_POST["newbednum"];
   $query = 'UPDATE hospital SET numofbed = "'.$new.'" WHERE hoscode ="'.$old.'" ';
   if (!mysqli_query($connection, $query)) {
        die("Error: Update failed" . mysqli_error($connection));
    }
   echo "Update Success Return to Other part 7 to see updated information!";
   mysqli_close($connection);
?>
