
<!-- THIS FILE IS FOR TEST  PURPOSES -->
<?php
session_start();

include('connection.php');
error_reporting(0);
?>

<style type="text/css">
    p{
        font-family: Times New Roman;
        font-size: 20px;
    }
</style>
<!DOCTYPE html>
<html>
<head>
	<title>Log-in2 - Heart & Soul</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	 <table>
        <tr>
            <td>
                <?php include "header.php"; ?>
            </td>
        </tr>
    </table>

    <p class= "mom" size="40">Log-in</p>

    <div class="hanging">
        <div class="hang1">


            <img src="Images/hang1.gif" >
            <img src="Images/hang2.gif" >

        </div>
    </div>

	<!-- <form id="frm" action="login1.php" method="post" class="loginform" style="background-image:url(images/abstract.jpg); background-size:cover;"> -->

<form method="GET" action="" class="loginform" style="background-image:url(images/abstract.jpg); background-size:cover;">
		<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Login as:</label>
		&nbsp;&nbsp;
	<input type="radio" name="rdologin" id="rdodoctor" value="admin"/>&nbsp;&nbsp;Admin
    <input type="radio" name="rdologin" id="rdopatient" value="user"/>&nbsp;&nbsp;User
<br>   

		<label class="loginlabel">E-mail: </label>
		<input type="email" name="loginemail" id="loginemail" autocomplete="on"><br>

		<label class="loginlabel">Password: </label>
		<input type="Password" name="loginpassword" id="loginpassword"><br>

		<input type="submit" name="btnlogin" id="btnlogin" value="Log-in" class="loginbutton"><br>

		<label class="loginlabel">New User?</label> 
		<a href="signup.php" class="loginrefer" style="text-decoration: none;">Sign-Up</a><br><br>
	</form>
<br><br>

</body>
</html>


<?php
    
    if ($_GET['btnlogin']) {


         $loginas = $_GET['rdologin']; //email id
         if ($loginas == '') {       
         ?> <p style="color: red;"> "Please, Select  'Login as'  field.!!"</p> <?php 
          }

          $email = $_GET['loginemail']; //email id

         if ($email == '') {
         ?> <p style="color: red;"> "Email id field cannot be left blank.!!"</p> <?php 
         }

         $password = $_GET['loginpassword']; //password
         if ($password == '') {
          ?> <p style="color: red;"> "Password field cannot be left blank.!!"</p> <?php 
          // exit();
         }   

          if ($loginas == "admin") {

            $encodedPassword = base64_encode($password);
            
            $query = "SELECT * FROM admin_login WHERE email = '$email' && password = $encodedPassword ";

            $data = mysqli_query($conn,$query);
            $total = mysqli_num_rows($data);
            

           if($total != 0)
           { $_SESSION['username'] = "admin";

             ?> <p style="color: green;"> "LOGIN SUCCESSFUL"</p> <?php
            echo "<meta http-equiv=\"refresh\" content=\"0;URL=adminloggedin.php\">";


           }                                             
           else
           {
              
             ?> <p style="color: red;"> "LOGIN UNSUCCESSFULL, TRY AGAIN!""</p> <?php
           }

            //login for doctor
            // $query = "SELECT * from admin_login WHERE email='$email' and password = '$password'";
             
            }  else if ($loginas == "user") {

            // $encodedPassword = "SELECT password FROM registration WHERE email = '$email' ";  
              
            $encodedPassword = base64_encode($password);

             //echo $encodedPassword;
            // $decodedPassword = base64_decode($encodedPassword);
             // echo $decodedPassword;


            $query = "SELECT * FROM registration WHERE email = '$email'  && password = '$encodedPassword' ";

            $data = mysqli_query($conn,$query);
            $total = mysqli_num_rows($data);
            

           if($total != 0)
           { 
             $_SESSION['username'] = "user";
             ?> <p style="color: green;"> "LOGIN SUCCESSFUL"</p> <?php
            echo "<meta http-equiv=\"refresh\" content=\"0;URL=userloggedin.php\">";


           }                                             
           else
           {
             ?> <p style="color: red;"> "LOGIN UNSUCCESSFULL, TRY AGAIN!""</p> <?php
           }
        }




    }


?>



            