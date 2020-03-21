<?php

ob_start(); //start obeject
session_start(); //start sessiong

// include'connection/dbconfig.php';
include('connection.php');


//click on submit button
if (isset($_POST['btnlogin'])) {

    //variable and validation
    $error_msg = '';
    $row_effected = 0;
    $status = false;


    $loginas = $_POST['rdologin']; //email id
    if ($loginas == '') {
        $error_msg="Please, Select login as field.!!";
                
    }

    $email = $_POST['loginemail']; //email id

    if ($email == '') {
        $error_msg="Email id field cannot be left blank.!!";
    }

    $password = $_POST['loginpassword']; //password

    if ($password == '') {
        $error_msg="Password field cannot be left blank.!!";
    }

    //query for login
    if ($error_msg == '') {

        if ($loginas == "admin") {

            //login for doctor
            $query = "select id,name from admin_login where username='$email' and password = '$password'";
            $result = mysql_query($query);
            while ($row = mysql_fetch_array($result)) {
                $name = $row ['id'];
                if ($name != '') {
                    $_SESSION['USERID'] = $name; //patienthome
                    $_SESSION['ADMIN'] = $row ['name'];
                    header("location:userlist.php");
                } else {
                    $_SESSION['MSG'] = "Email id and password are wrong.!!"; //patienthome
                    header("location:Login.php");
                }
            }
        } else if ($loginas == "user") {

            //login for patient
            $query = "select name from regestration where email='$email' and password = '$password'";
            $result = mysql_query($query);
            while ($row = mysql_fetch_array($result)) {
                $name = $row ['name'];
                if ($name != '') {
                    $_SESSION['USERID'] = $name; //patienthome
                    $_SESSION['NAME'] = $row ['name'];
                    // header("location:Welcome.php");
                    header("location:welcome.php");

                } else {
                    $_SESSION['MSG'] = "Email id and password are wrong.!!"; //patienthome
                    header("location:Login.php");
                }
            }
        }
    } else {
        $_SESSION['MSG'] = $error_msg; //set message in session

        
        header("location:Login.php");
    }
}
?>
