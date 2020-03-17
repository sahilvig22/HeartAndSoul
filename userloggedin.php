<?php
session_start();
include('connection.php');
error_reporting(0);

if($_SESSION['username']=='user'){
  ?>

  <head>
    <title>H&S - User Logged In</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/purchaseimages.css">
    <link href="dist/css/bootstrap.css" rel="stylesheet">
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



  <P class= "mom" size="40">Purchase</p>

    <div class="hanging">
      <div class="hang1">


        <img src="Images/hang1.gif" >
        <img src="Images/hang2.gif" >

      </div>
    </div>
    <br><br>

    


    <div class="page-header">
      <div style="color:#1d4771; font-family:monotype corsiva; font-size:30px;"><b>Select the item to purchase</b></div>
    </div>

    

    <div class="purchaselabels">
     <label>Select a card:</label> 
   </div>
   

   <div class="purchaseselect">
    
    <select name="cardselected" form="send">
     
     
     <option value="Mom1">Mom1</option>
     <option value="Mom2">Mom2</option>
     <option value="Mom3">Mom3</option>
     <option value="Mom4">Mom4</option>
     <option value="Mom5">Mom5</option>
     <option value="Mom6">Mom6</option>
     <option value="Dad1">Dad1</option>
     <option value="Dad2">Dad2</option>
     <option value="Dad3">Dad3</option>
     <option value="Dad4">Dad4</option>
     <option value="Dad5">Dad5</option>
     <option value="Dad6">Dad6</option>
     <option value="House1">House1</option>
     <option value="House2">House2</option>
     <option value="House3">House3</option>
     <option value="House4">House4</option>
     <option value="House5">House5</option>
     <option value="House6">House6</option>
     <option value="Lover1">Lover1</option>
     <option value="Lover2">Lover2</option>
     <option value="Lover3">Lover3</option>
     <option value="Lover4">Lover4</option>
     <option value="Lover5">Lover5</option>
     <option value="Lover6">Lover6</option>
     <option value="Teacher1">Teacher1</option>
     <option value="Teacher2">Teacher2</option>
     <option value="Teacher3">Teacher3</option>
     <option value="Teacher4">Teacher4</option>
     <option value="Teacher5">Teacher5</option>
     <option value="Lover6">Teacher6</option>
     
     
     
   </select>


   


 </div>
 <br><br>

 <div class="diss">
  <p class="imagechange1">Mom1</p>
  <p class="imagechange2">Mom2</p>
  <p class="imagechange3">Mom3</p>
  <p class="imagechange4">Mom4</p>
  <p class="imagechange5">Mom5</p>
  <p class="imagechange6">Mom6</p>
  
</div>

<div class="diss">
  
  <p class="imagechange7">Dad1</p>
  <p class="imagechange8">Dad2</p>
  <p class="imagechange9">Dad3</p>
  <p class="imagechange10">Dad4</p>
  <p class="imagechange11">Dad5</p>
  <p class="imagechange12">Dad6</p>
  
</div>
<div class="diss">
  
  <p class="imagechange13">House1</p>
  <p class="imagechange14">House2</p>
  <p class="imagechange15">House3</p>
  <p class="imagechange16">House4</p>
  <p class="imagechange17">House5</p>
  <p class="imagechange18">House6</p>
  
</div>
<div class="diss">
  
  <p class="imagechange19">Lover1</p>
  <p class="imagechange20">Lover2</p>
  <p class="imagechange21">Lover3</p>
  <p class="imagechange22">Lover4</p>
  <p class="imagechange23">Lover5</p>
  <p class="imagechange24">Lover6</p>
  
  
</div>
<div class="diss">
  
  <p class="imagechange25">Teacher1</p>
  <p class="imagechange26">Teacher2</p>
  <p class="imagechange27">Teacher3</p>
  <p class="imagechange28">Teacher4</p>
  <p class="imagechange29">Teacher5</p>
  <p class="imagechange30">Teacher6</p>
</div>


<!-- 
<div class="purchaselabels">
 <label>Price per card: 250/- bucks only</label> 
</div> -->

<div class="purchaselabels">
 <label>Select delivery mode:</label> 
</div>



<select name="deliverymode" form="send" style="margin-left: 260px; margin-top: -32px;">
  <option value="Normal">Normal - 4/5 days, Free</option>
  <option value="Speed">Speed - 2/3 days, 50bucks</option>
  <option value="Ultra">Ultra - 1 days, 100bucks</option>
</select>

<form action="#" method="get" id="send"> 

 <div class="purchaselabels">
  <label>Registered Email: </label>
  <input type="email" name="email" autocomplete="off" placeholder="Enter registered e-mail"><br><br>
</div>



<!-- <div class="purchaselabels">
 <label>First name: </label>
 <input type="text" name="fname" autocomplete="off" placeholder="Enter first name"><br><br>
</div>


<div class="purchaselabels">
 <label>Last name: </label>

 <input type="text" name="lname" autocomplete="off" placeholder="Enter last name"><br><br>
</div> -->


<div class="purchaselabels">
 <label>Any special message to be printed on the wrapper: </label><br><br>

 <textarea name="message" rows="6" cols="50" placeholder="Not Mandatory"></textarea><br><br>
</div>

<div class="purchase-button" >
  <input type="submit" name="submit" value="Buy Card"/>
  <br><br>
</div>

</form>



<?php


if(isset($_GET['submit']))
  
{

 $message = $_GET['message'];
 $email = $_GET['email'];
 $cardselected = $_GET['cardselected']; 
 $deliverymode = $_GET['deliverymode']; 

 if($email!="")
 {
  $query = "UPDATE registration SET message='$message', cardselected='$cardselected', deliverymode='$deliverymode' WHERE email='$email' ";

  $data = mysqli_query($conn, $query);

  if($data){
    ?> <p style="color: green; font-size: 20px;">&nbsp;&nbsp;&nbsp;Ordered Successfully</p> <?php
  }
}


else{
  
  ?> <p style="color: red; font-size: 20px;">&nbsp;&nbsp;&nbsp;All Fields Are Mandatory</p> <?php
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


    <?php

  }
  
  else{
    
    ?> 

    <!DOCTYPE html>
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
      


      <p style="color: red; font-size:45px;margin-left: 400px; margin-top: 0px;">&nbsp;&nbsp;&nbsp;Oops! You Are Not Logged In!</p>
      <br><br>
      

    </body>
    </html>
    
    <?php
  }
      // }
  ?>
