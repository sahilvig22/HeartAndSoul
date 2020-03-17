<?php 
session_start();
?>
<html>
    <head>
    <style>
        .userheader1 p{

    font-size: 40px;
    padding:0px 0px 0px 20px;
    margin:0px 0px 0px 10px;
    position: relative;
    text-decoration: none;
    color: maroon;
    font-size: 30px;
    margin:0px;
    padding:0px;
    animation: title1;
    animation-duration: 3s;
    animation-fill-mode: forwards;
    text-shadow:5px 5px 20px red;
    letter-spacing: 0.4em;

}


.userheader2 p{

    font-size:20px;
    position:relative;
    animation: title2;
    animation-duration: 3s;
    animation-fill-mode: forwards;
    margin-left: 30px;
    text-decoration: none;
    margin-top: 0px;
    color: maroon;
    margin-bottom: 20px;
    text-shadow:5px 5px 20px red;
    letter-spacing: 0.1em;

}
    </style>

        <title>Major Project</title>
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico" >
        <link href="dist/css/bootstrap.css" rel="stylesheet">
    </head>
    <body style="font-family: 'Pacifico', cursive;">

        

            <div class="userheader1">
                <p>Heart&Soul</p>

            </div>

            <div class="userheader2">
                <p>It's the effort-not cards...</p>
                <br> <br><br><br>
            </div>

             <script type="text/javascript">
    var currentTime = new Date();
    var m = new Array();
    m[0] = "January";
    m[1] = "February";
    m[2] = "March";
    m[3] = "April";
    m[4] = "May";
    m[5] = "June";
    m[6] = "July";
    m[7] = "August";
    m[8] = "September";
    m[9] = "October";
    m[10] = "November";
    m[11] = "December";
    var month = m[currentTime.getMonth()];
    var day = currentTime.getDate();
    var year = currentTime.getFullYear();
    var hour = currentTime.getHours();
    var minutes = currentTime.getMinutes();
    var seconds = currentTime.getSeconds();
    document.write("&nbsp; &nbsp; &nbsp;" + day + " " + month + " " + year);
    document.write("&nbsp; &nbsp; &nbsp;" + hour + ":" + minutes + ":" + seconds);
    

</script>
            


    <nav id="navbar" style="position: relative;">

        <ul>
           
            <li><a href="userloggedin.php" class="nav-neon , navbarhover" style="margin-top: 100px;">Purchase</a></li>
            <li><a href="#" class="nav-neon , navbarhover">Categories</a>
                <ul>
                    <li><a class="navbar_subitems" href="mom.php">Mom</a></li>
                    <li><a class="navbar_subitems" href="dad.php">Dad</a></li>
                    <li><a class="navbar_subitems" href="house.php">House</a></li>
                    <li><a class="navbar_subitems" href="lover.php">Lover</a></li>
                    <li><a class="navbar_subitems" href="teacher.php">Teacher</a></li>

                </ul>
            </li>  
            <li><a href="enquire.php" class="nav-neon , navbarhover" style="margin-top: 100px;">Enquire</a></li>


            <!-- <li><a href="login.php" class="nav-neon , navbarhover"><span class="glyphicon glyphicon-log-out"></span>Log-out</a></li> -->
        </ul>



    
    <marquee direction="left" scrollamount=20">
        <img src="images/ribbon.jpg" style="width:100%;height:20px;margin-top: 20px; z-index: 0;">
    </marquee>

</nav>


<div class="sociallinks">
    <ul>
        <li><a href="https://www.facebook.com/"><img src="Images/fb-logo.png"</a></li>
        <li><a href="https://twitter.com/"><img src="Images/twitter-logo.png"</a></li>
        <li><a href="https://www.snapchat.com/"><img src="Images/snap-logo.png"</a></li>
        <li><a href="https://www.linkedin.com"><img src="Images/linkedin-logo.jpg"</a></li>
        <li><a href="https://plus.google.com/discover"><img src="Images/google-logo.png"</a></li>
    </ul>

</div>
</body>
</html>
