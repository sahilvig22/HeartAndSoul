<?php 
session_start();
error_reporting(0);
if($_SESSION['username'] == 'admin'){ 
	?>

	<html>
	<head>
		<title></title>
	</head>
	<body>
		<table>
			<tr>
				<td>
					<?php include "adminloggedinheader.php"; 

					?>
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
		<div class="showcase" style="margin-top: -170px;">	

			<h2 style="margin-bottom: 50px;"><center>Upload A Product</center></h2>

			<form method="POST" enctype="multipart/form-data" style="font-family: timesnewroman; margin-left: 40%; font-size: 22px;">	

				<label>	Select Category: </label>

				<select name="category" >
					<option value="Mom">Mom</option>
					<option value="Dad">Dad</option>
					<option value="House">House</option>
					<option value="Lover">Lover</option>
					<option value="Teacher">Teacher</option>
				</select>
				<br><br>

				<label>	Enter Title:</label>
				<input type="text" name="title" placeholder="Enter title of the card">
				<br><br>	

				<label>	Enter Description:</label><br>	
				<textarea rows="3" cols="30" name="description" placeholder="Enter the card's description"></textarea>
				<br><br>	

				<label>	Enter Price:</label>
				<input type="text" name="price" placeholder="Enter card's price">
				<br><br>	

				<label>	Select Image:</label>
				<input type="file" name="image">
				<br><br>	
				<input type="submit" name="submit">
				
			</form>

		</div>
		
		<?php 
		include 'connection.php';
		if($_POST['submit'])

		{
			
			$filename = $_FILES["image"]["name"]; //new
			$tmpname = $_FILES["image"]["tmp_name"]; //new
			$folder = "upload/".$filename; //new
			//echo $folder;
			move_uploaded_file($tmpname, $folder);
			$category = $_POST['category'];
			$title = $_POST['title'];
			$description = $_POST['description'];
			$price = $_POST['price'];
			//$image = $_POST['image'];



			if($category!="" && $title!="" && $description!="" && $price!="" && $folder!="")
			{
				$query = "INSERT INTO products VALUES ('$category','$title','$description','$price','$folder')";

				$data = mysqli_query($conn, $query);

				if($data){
					?> <p style="color: green; font-size: 20px;">Uploaded Successfully</p> <?php
				}

				else{
					?> <p style="color: red;"> "Query not working"</p> <?php
				}
			}


			else{

				?> <p style="color: red; font-size: 20px;">All Fields Are Mandatory</p> <?php
			}

        /* if($Data)
         {
          echo "Data added Successfully";
         }

         else
         {
          echo "Data not added";
      }*/

  } 


  ?>
  <div class="footer"> Made By Sahil Vig &copy; 2018 </div> 
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

	</body>
	</html>

	<?php
}
?>