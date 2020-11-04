<?php

$ID = $_GET["id"];

require_once('../dbcon.php');

$query = "DELETE FROM care WHERE id= $ID";

$sql = mysqli_query($link, $query);

if ($sql==true){
    
    header('Location: caller_list.php?msg= Successfully Deleted');

} else {
    echo "Error deleting record: " . mysqli_error($link);
}

mysqli_close($link);

?>