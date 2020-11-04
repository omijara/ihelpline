<?php

session_start();
$username = $_POST['uname'];
$password = $_POST['pword'];



if ($_SERVER["REQUEST_METHOD"] == "POST") {

$_POST['id'] = date('ymdhms');

$row = $_POST;
$rows = file_get_contents("../Data_Json/members.json");
$rows = (array)json_decode($rows);
array_push($rows,$row);

$rows = json_encode($rows);


file_put_contents('../Data_Json/members.json', $rows);

header("location: success.php");

}


//$row = mysqli_num_rows($result);



if(mysqli_num_rows($result)==1){


	
     // if(!$row == 0) {

        // $_SESSION['login_user'] = $username;

         //echo "Login Success";
   
if( ($username ==  $data_row['username'] && $password == $data_row['password']) || ($username ==  $data_row['email'] && $password == $data_row['password']) )
{

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


  
        
       // $_SESSION['id'] = $data_row[0]; 
         
         
//if ($rows['username'] == $username and $rows['password'] == $password) {



?>
