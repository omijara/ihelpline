<?php

$ID= $_GET["id"];
$name= $_POST['name'];
$birth_date= $_POST['dob'];
$phone = $_POST['number'];
$result = $_POST['result'];

require_once('../dbcon.php');

$query = "UPDATE care SET name ='$name', age = '$age', mobile = '$number', paddress = '$address' WHERE id= '$ID'";

$sql = mysqli_query($link, $query);


if ($link == true) {


header('location: caller_list.php?msg0=Update Done');

}
else{

	echo"Update failed";
}

?>