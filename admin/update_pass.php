<?php

$link = mysqli_connect("localhost", "root", "", "register");
//$new_password= $_POST["npass"];
$confirm_password = $_POST["cpass"];


$query = "UPDATE user SET password ='$confirm_password' WHERE email=username";
//var_dump($query);
//exit();

$sql = mysqli_query($link, $query);

$rows = mysqli_fetch_array($sql);

if ($link == true) {


header('location: change_pass.php?msg2=Password Update Successful');

}
else{

	echo"Update failed";
}

?>