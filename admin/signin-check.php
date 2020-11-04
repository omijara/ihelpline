<?php

session_start();
$username = $_POST['uname'];
$password = $_POST['pword'];

require_once('../dbcon.php');

$sql = "SELECT *FROM user WHERE (username = '$username' and password = '$password') OR (email = '$username' and password = '$password')";

$result = mysqli_query($link, $sql);

$data_row = mysqli_fetch_array($result);



//$row = mysqli_num_rows($result);



if(mysqli_num_rows($result)==1){


	
     // if(!$row == 0) {

        // $_SESSION['login_user'] = $username;

         //echo "Login Success";
   
if( ($username ==  $data_row['username'] && $password == $data_row['password']) || ($username ==  $data_row['email'] && $password == $data_row['password']) )
{
        $_SESSION['id'] = $data_row[0]; 
        $_SESSION['fname'] = $data_row['first_name'];
        $_SESSION['lname'] = $data_row['last_name'];
        $_SESSION['username'] = $data_row['username'];
        $_SESSION['email'] =  $data_row['email'];
        $_SESSION['image'] =  $data_row['image'];

  header("location: index.php");
}



else
{
$msg ="Username or Password is invalid";
header("location: sign-in.php?msg=".$msg);

}


}
else{

$msg ="Username or Password is invalid";
header("location: sign-in.php?msg=".$msg);
}


        
       // 
         
         
//if ($rows['username'] == $username and $rows['password'] == $password) {



?>
