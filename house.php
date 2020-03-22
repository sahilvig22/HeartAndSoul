<?php
	session_start();
	error_reporting(0);
	if($_SESSION['username']=='user'){
		?>
		
		<html>
		<head>
			<title>House Gift Cards</title>
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



	<P class= "mom" size="40">HOUSE</p>

		<div class="hanging">
			<div class="hang1">


				<img src="Images/hang1.gif" >
				<img src="Images/hang2.gif" >

			</div>
		</div>
		
		<br><br><br><br><br><br>
		<div class="showcase" style="margin-top: -90px; margin-left: 25px;">
			<h1 style="margin:5px 5px; padding: 5px 5px; letter-spacing: 0.2em;">Gift Cards For House</h1>
			<p style="margin:5px 5px; padding:0px 5px 15px 5px;font-size: 20px;">For families who enjoy the outdoors, 
                    Get a gift card to a sporting cards store like <strong> "Heart and Soul" </strong> . The cards bring families closer. As the 
                    name of our web site suggests, at <strong> "Heart and Soul" </strong>we don't just sell cards, we deliver emotions to your 
                    loved ones. So grab a card of your choice and get one step closer to expressing your emotions. We have
                    a variety of cards our customers can choose from.</p>

			<div class=sub-grid4 style="background-image:url(images/abstract.jpg); background-size:cover;margin-top: 0px;">

				<?php 
				include 'connection.php';

				$query = "SELECT * FROM products WHERE category='House'";
				$data = mysqli_query($conn, $query);
				$total = mysqli_num_rows($data);

				?>


				<table style="margin-left: 50px;font-family: timesnewroman; color: green; border: 2px solid black;">
					<tr style="border: 2px solid black;">
						<th style="font-size: 25px;">Image</th>
						<th style="font-size: 25px;">Title</th>
						<th style="font-size: 25px;">Description</th>
						<th style="font-size: 25px;">Price</th>

						<!-- <th style="font-size: 25px;">Contact</th> -->

					</tr>

					<?php
					while ($result = mysqli_fetch_assoc($data)) {
						?><tr style='border: 1px dotted black;'>


							<td> 
					<img style="height: 300px; width: 300px; margin: 10px; padding:10px;" src="<?php echo $result['image'];?> "> </td>
								<td><div style='margin:20px;font-size:25px;color:black'> <?php echo $result['title']; ?> </div></td>
								<td><div style='margin:20px;font-size:25px;color:black'> <?php echo $result['description']; ?> </div></td>
								<td><div style='margin:20px;font-size:25px;color:black'> ₹<?php echo $result['price']; ?> </div></td>


							</tr>

						<?php } 	 ?>
					</table>
				</div>

			</div>




			<br>
			<ul id="wire">

				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>


			<div class="footer"> Made By Sahil Vig &copy; 2018 </div> 

		</body>
		</html>

		<?php
	}

	else{
		  ?> 
            <html>
    <head>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico" >
      <title>ACCESS DENIED</title>
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


