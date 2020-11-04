<?php
//error_reporting(0);
require_once('../dbcon.php');

$title = $_POST['post_title'];
$desc = $_POST['post_decription'];

$image = $FILES['img']['name'];
$image_url = "assets/img/post_image".basename($image);
move_uploaded_file($_FILES['img']['tmp_name'],$image_url);

$query = "INSERT INTO post(post_title, post_description, post_image) VALUES ('$title','$desc', '$image_url')";


$sql = mysqli_query($link, $query);



//}

if (!$link==false) {


header("location: post_list.php?msg= Post Successfully Created");
exit;

}
else{

	echo"conect failed";
	exit;
}


?>


