<?php
session_start();
error_reporting(0);
if($_SESSION['username']=='admin'){
	?>

	<html>
	<head>
		<title>H&S - Admin Logged In </title>

	</head>
	<body>



		<table>
			<tr>
				<td>
					<?php include "adminloggedinheader.php"; ?>
				</td>
			</tr>
		</table>

		<form method="POST">
			<input type="submit" name="btnlogout" id="btnlogout" value="Log-Out" style="margin-top: -320px; margin-left: 900px; font-size:25px;" class="nav-neon , navbarhover">  
		</form>

		<?php 
		if ($_POST['btnlogout']) {
			unset($_SESSION['username']);
			session_destroy();
			header("location: login.php");
		}
		?>

		<?php 
		include 'connection.php';
		$query = "SELECT * FROM REGISTRATION";
		$data = mysqli_query($conn, $query);
		$total = mysqli_num_rows($data);
				// echo "$total";


				// echo "$result";

		?> 
		<div class="showcase" style="margin-top: -170px;"> 
			<!-- THE DIV ABOVE IS IN CASE YOU NEED TO PUT A BACKGROUND IMAGE -->
			<table style="margin-left: 80px; margin-top: 0px;font-family: timesnewroman; color: green; border: 2px solid black;">
				<tr style="border: 2px solid black;">
					<th style="font-size: 25px;">Name</th>
					<th style="font-size: 25px;">D-O-B</th>
					<th style="font-size: 25px;">Gender</th>
					<th style="font-size: 25px;">Phone</th>
					<th style="font-size: 25px;">Address</th>
					<!-- <th style="font-size: 25px;">Contact</th> -->
					<th style="font-size: 25px;">Email</th>
				</tr>


				<?php
				while ($result = mysqli_fetch_assoc($data)) {
					echo "<tr style='border: 2px solid black;'>
					<td><div style='margin:20px;font-size:25px;color:black'>".$result['name']."</div></td>
					<td><div style='margin:20px;font-size:25px;color:black'>".$result['dob']."</div></td>
					<td><div style='margin:20px;font-size:25px;color:black'>".$result['gender']."</div></td>
					<td><div style='margin:20px;font-size:25px;color:black'>".$result['phone']."</div></td>
					<td><div style='margin:20px;font-size:25px;color:black'>".$result['address']."</div></td>

					<td><div style='margin:20px;font-size:25px;color:black'>".$result['email']."</div></td>
					</tr>";

				}?> </div>		 
			</table>

		</div>
	</body>
	</html>

	<?php
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

		<p style="color: red; font-size:45px;margin-left: 400px; margin-top: 0px;">Oops! You Are Not Logged In!</p>
		<br><br>
		<div class="footer"> Made By Sahil Vig &copy; 2018 </div> 
		
	</body>
	</html>

	<?php
}

?>