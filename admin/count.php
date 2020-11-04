<?php
// Make a MySQL Connection
require_once('../dbcon.php');

$query = "SELECT * FROM user";


$sql = mysqli_query($link, $query);

$count = mysqli_num_rows($sql);


echo $count;

?>