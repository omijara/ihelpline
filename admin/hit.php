<?php
    require_once('dbcon.php');


    $sql = "UPDATE Counter SET visits = visits+1 WHERE id = 1";
    $link->query($sql);

    $sql = "SELECT visits FROM Counter WHERE id = 1";
    $result = $link->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $visits = $row["visits"];
        }
    } else {
        echo "no results";
    }
    
    $link->close();
?>

<!doctype html>  
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Visit counter</title>
    </head>
    <body>
        Visits: <?php echo $visits; ?>

    </body>
</html>