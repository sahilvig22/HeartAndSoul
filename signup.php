<?php
include('connection.php');
error_reporting(0);
?>


<html>
<head>
	<title>Sign-Up - Heart & Soul</title>
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

	<p class= "mom" size="40">Sign-Up</p>

	<div class="hanging">
		<div class="hang1">


			<img src="Images/hang1.gif" >
			<img src="Images/hang2.gif" >

		</div>
	</div>

	<form method="POST" class="loginform" style="background-image:url(images/abstract.jpg); background-size:cover;">

		<label class="loginlabel">Name: </label> <input type="text" name="name" placeholder="Enter Full Name"  autocomplete="off"/><br>

		<label class="loginlabel">D-O-B: </label> <input type="date" name="dob"/><br>

		<!-- <label class="loginlabel">Gender: </label> <input type="text" name="gender"/><br> -->
		<label class="loginlabel">Gender: </label> <br>
		<input type="radio" name="gender" value="male"  class="loginlabel" style="margin-left: 200px;"> Male<br>
		<input type="radio" name="gender" value="female"  class="loginlabel" style="margin-left: 200px;"> Female<br>
		<input type="radio" name="gender" value="other"  class="loginlabel" style="margin-left: 200px;"> Other <br>

		<label class="loginlabel">Phone: </label> <input type="number" maxlength="10" name="phone" placeholder="10 Digit Mobile Number"  autocomplete="off" style="width: 110px;"><br>

		<label class="loginlabel">Address: </label> <input type="text" name="address" placeholder="Enter Residential Address" autocomplete="off" /><br>

		<label class="loginlabel">E-mail: </label> <input type="email" name="signupemail" placeholder="Enter E-mail Address" autocomplete="off" /><br>

		<label class="loginlabel">Password: </label> <input type="password" name="password" placeholder="Enter Password" /><br>

		<label class="loginlabel">Confirm Password: </label> <input type="password" name="confirmedpassword"placeholder="Confirm Password"><br> 

		<input type="submit" name="signup" value="Sign-Up" class="loginbutton"/><br>

		<label class="loginlabel">Already Registered?</label> 
		<a href="login.php" class="loginrefer" style="text-decoration: none;">Log-in</a><br><br>
	</form>
</body>
</html>


<?php
if($_POST['signup'])
{	
	$name = $_POST['name'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];

	$email = $_POST['signupemail'];
	$password = $_POST['password'];
	$confirmedpassword = $_POST['confirmedpassword'];
	
	$encodedPassword = base64_encode($password);

	if($name!="" && $dob!="" && $gender!="" && $phone!="" && $address!="" && $email!="" && $password!="" && $confirmedpassword!="")
	{
		if($password == $confirmedpassword)
		{
			$query = "INSERT INTO registration VALUES ('$name','$dob','$gender','$phone','$address','$email','$encodedPassword','','','')";
			$data = mysqli_query($conn, $query);

			if($data)
			{
				?> <p style="color: green;"> &nbsp;&nbsp;&nbsp;"REGISTERED! Welcome to Heart & Soul"</p> <?php
			}

			else{
				?> <p style="color: red;"> &nbsp;&nbsp;&nbsp;"Kindly sign up with a different mail account!"</p> <?php
			}

		}

		else{
			?> <p style="color: red;"> &nbsp;&nbsp;&nbsp;"Passwords do not match! Try again!"</p> <?php
		}	

		
	}

	else 
	{
		
		?> <p style="color: red;"> &nbsp;&nbsp;&nbsp;"Oops! All fields are mandatory!"</p> <?php
	}
}
?>
<div class="footer"> Made By Sahil Vig &copy; 2018 </div> 

