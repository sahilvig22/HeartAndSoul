<?php 
session_start();
error_reporting(0);
include 'connection.php';
if($_SESSION['username'] == 'user'){
	?>

	<html>
	<head>
		<title></title>
	</head>
	<body>


		<table>
			<tr>
				<td>
					<?php include "userloggedinheader.php"; ?>
				</td>
			</tr>
		</table>


		<form method="POST">
			<input type="submit" name="btnlogout" id="btnlogout" value="Log-Out" style="margin-top: -325px; margin-left: 630px; font-size:25px;" class="nav-neon , navbarhover">  
		</form>

		<?php 
		if ($_POST['btnlogout']) {
			unset($_SESSION['username']);
			session_destroy();
			header("location: login.php");
		}
		?>


		<form method="POST" class="loginform" style="background-image:url(images/abstract.jpg); background-size:cover; font-size: 17px; margin-top: -200px; font-family: timesnewroman;">

			<label class="loginlabel">E-mail: </label> <input type="email" name="email" autocomplete="off" placeholder="Enter E-mail" style="margin: 15px;" /><br>

			<label class="loginlabel">Name: </label> <input type="text" name="name" autocomplete="off" placeholder="Enter Full Name" style="margin: 15px;" /><br>

			<label class="loginlabel">Enquiry: </label> <br>
			<textarea placeholder="Enter your query here" rows="4" cols="50" name="enquiry"  autocomplete="off" maxlength="500" style="margin-left: 170px; margin-top: -20px;"></textarea><br>

			<label class="loginlabel">Phone: </label> <input type="number" maxlength="10" autocomplete="off" name="phoneno" placeholder="10 Digit Mobile Number"  style="width: 200px;margin: 15px;"><br>


			<input type="submit" name="enquire" value="Submit Enquiry" class="loginbutton" style="margin-left: 150px; margin-bottom: 70px;"/><br>


		</form>

		
		
	</body>

	</html>


	<?php	

	if($_POST['enquire'])
	{	
		$email = $_POST['email'];
		$name = $_POST['name'];
		$enquiry = $_POST['enquiry'];
		$phoneno = $_POST['phoneno'];

		if($name!="" && $email!="" && $enquiry!="" && $phoneno!="")
		{

			$query = "INSERT INTO review VALUES ('$email','$name','$enquiry','$phoneno')";
			$data = mysqli_query($conn, $query);

			if($data)
			{
				?> <p style="color: green;">&nbsp;&nbsp;&nbsp;"Your Query has been submitted."</p> <?php
			}

			else{
				?> <p style="color: red;"> &nbsp;&nbsp;&nbsp;"Query not working"</p> <?php
			}

		}

		else 
		{

			?>  <p style="color: red;"> &nbsp;&nbsp;&nbsp;"Oops! All fields are mandatory!"</p> <?php
		}
	}

	?> <div class="footer"> Made By Sahil Vig &copy; 2018 </div> <?php

}

else{
	?> 
	<html>
	<head>
		<title>ACCESS DENIED</title>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico" >
	</head>

	<body style="font-family: 'Pacifico', cursive;">

		<table>
			<tr>
				<td>
					<?php include "header.php"; ?>
				</td>
			</tr>
		</table>

		<p style="color: red; font-size:45px;margin-left: 400px; margin-top: 0px;">&nbsp;&nbsp;&nbsp;Oops! You Are Not Logged In!</p>
		<br><br>

	</body>
	</html>

	<?php
}
?>