<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
<link rel="stylesheet" type="text/css" href="Zoo.css">
    <title>Registration</title>
</head>
<style>
    .login-panel {
        margin-top: 150px;

</style>
<body>

<ul>

<li>
<a href="Index.html">Home</a>
</li>


<li>
<a href="About-Us.html">About Us</a>
</li>

<li>
<a href="Contact-Us.html">Contact Us</a>
</li>

<li>
<a href="Animal-Information.html">Animal Info</a>
</li>


<li>
<a href="Birds-Information.html">Birds Info</a>
</li>


<li>
<a href="Timings.html">Timings</a>
</li>



<li>
<a href="Future-events.html">Future events</a>
</li>





<?php
                    session_start();

                    if (isset($_SESSION['name']))
                    {
                ?>
                <li onclick="document.getElementById('content_box').src='login.php'">Log In</li>
                <?php 
                    } else {
                ?>
                <li onclick="document.getElementById('content_box').src='welcome">$_SESSION['name']</li> 
                <?php    
                    }
                ?>







<li>
<a href="login.php">Login</a>
</li>


</ul>



</body>

</html>





<html>
<head>

    <title>
        Registration
    </title>
</head>

<body>





<?php



 
if (isset($_SESSION['name'])){
            echo '<span style="color: yellow; font-size: 20px;">Welcome ' . $_SESSION['name'] .  '</span>';
        }
?>


<h1><center><a href="logout.php">Logout here</a> </center></h1>


