<?php
//error_reporting(0);

$name= $_POST['name'];
$age= $_POST['age'];
$number = $_POST['mnum'];
$address = $_POST['paddress'];
$captchaResult = $_POST["captchaResult"];
$firstNumber = $_POST["firstNumber"];
$secondNumber = $_POST["secondNumber"];



require_once('dbcon.php');

$query  = "INSERT INTO care(name,age,mobile,paddress)VALUES('$name', '$age','$number', '$address')";

$sql = mysqli_query($link, $query);


if ($_SERVER["REQUEST_METHOD"] == "POST") {


if (!$link==false) {


header("location: success.php");


}
else{

	echo"conect failed";
	exit;
}

}
?>