<?php

include ('database_connection.php');

$citystate = $_POST['citystate'];
$serviceprovider = $_POST['serviceprovider'];
$accept = $_POST['accept'];
if (isset($_POST['formsubmitted'])) {
    $error = array(); //Declare An Array to store any error message 

    if (isset($_POST['checkbox'])) {
        $mumbai = (in_array("mumbai", $_POST['checkbox']) ? 1 : 0);
        $pune = (in_array("pune", $_POST['checkbox']) ? 1 : 0);
        $banglore = (in_array("banglore", $_POST['checkbox']) ? 1 : 0);
        $mysore = (in_array("mysore", $_POST['checkbox']) ? 1 : 0);
    }

    if ($mumbai + $pune + $banglore + $mysore == 0) {
        $error[] = 'Please check atleast one SMS center';
    }

    if ($accept != 1) {
        $error[] = 'Please check terms ';
    }

    if (empty($_POST['mobileno'])) {//if no name has been supplied 
        $error[] = 'Please Enter a Mobile Number '; //add to array "error"
    }
    if (empty($_POST['mobileno'])) {//if no name has been supplied 
        $error[] = 'Please Enter a Mobile Number '; //add to array "error"
    } else {

        $mobile = $_POST['mobileno']; //else assign it a variable

        /* if( preg_match("^[0-9]{10}", $mobile) ){

          }

          else {

          $error[] = 'Your Mobile No is invalid  ';
          } */
    }
    if (empty($_POST['fname'])) {//if no name has been supplied 
        $error[] = 'Please Enter a First name '; //add to array "error"
    } else {
        $fname = $_POST['fname']; //else assign it a variable
    }

    if (empty($_POST['lname'])) {//if no name has been supplied 
        $error[] = 'Please Enter a Last name '; //add to array "error"
    } else {
        $lname = $_POST['lname']; //else assign it a variable
    }
    if (empty($_POST['email'])) {
        $error[] = 'Please Enter your Email ';
    } else {
        if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST['email'])) {
            //regular expression for email validation
            $email = $_POST['email'];
        } else {
            $error[] = 'Your EMail Address is invalid  ';
        }
    }


    if (empty($_POST['passwd1'])) {
        $error[] = 'Please Enter Your Password ';
    } else {
        $password = $_POST['passwd1'];
    }
    if (empty($_POST['passwd2'])) {
        $error[] = 'Please Verify Your Password ';
    } else {
        $password = $_POST['passwd2'];
    }
    if ($_POST["passwd1"] != $_POST["passwd2"]) {
        $error[] = 'Password does not match';
    }

    if (empty($error)) { //send to Database if there's no error ' //If everything's OK...
        // Make sure the mobile no is available:
        $query_verify_mobileno = "SELECT * FROM userdtls WHERE mobileno = '$mobile'";
        $result_verify_mobileno = mysqli_query($dbc, $query_verify_mobileno);
        if (!$result_verify_mobileno) {//if the Query Failed ,similar to if($result_verify_mobileno==false)
            echo ' Database Error Occured ';
        }

        if (mysqli_num_rows($result_verify_mobileno) == 0) { // IF no previous user is using this number .
            // Create a unique  activation code:
            //$activation = md5(uniqid(rand(), true));
            $query_insert_user = "INSERT INTO userdtls ( mobileno, serviceprovider, pass,  fname, lname, email, citystate, MUM, PUN, BNG, MYS ) VALUES ( '" . $mobile . "', '" . $serviceprovider . "', '" . $password . "', '" . $fname . "', '" . $lname . "', '" . $email . "', '" . $citystate . "','" . $mumbai . "', '" . $pune . "', '" . $banglore . "', '" . $mysore . "'  )";
        }
    }
}