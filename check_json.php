<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$_POST['id'] = date('ymdhms');

$row = $_POST;
$rows = file_get_contents("Data_Json/members.json");
$rows = (array)json_decode($rows);
array_push($rows,$row);

$rows = json_encode($rows);


file_put_contents('Data_Json/members.json', $rows);

header("location: success.php");

}
?>