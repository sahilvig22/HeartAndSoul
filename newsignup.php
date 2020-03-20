<html>
    <head>
        <title>New Sign Up</title>
    </head>
    
    <body>
        <form method="GET">
            <input type="text" name="email">
            <input type="text" name="password">
           
            <input type="submit" name="signup">
            
        </form>
    </body>
</html>

<?php
   include('connection.php');
   error_reporting(0);

    if($_GET['signup'])
    {
      $email= $_GET['email'];
      $password= $_GET['password'];
      
    
      
      $query = "INSERT INTO LOGIN3 VALUES ('$email','$password')";

     

      $data = mysqli_query($conn, $query);

      if($data)
				{
					?> <p style="color: green;"> "REGISTERED! Welcome to Heart & Soul"</p> <?php
				}

				else{
					?> <p style="color: red;"> "Query not working"</p> <?php
				}
        
    }
?>