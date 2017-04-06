<?php
session_start();//session starts here

?>



<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
<link rel="stylesheet" type="text/css" href="Zoo.css">
    <title>Login</title>
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

<li class="last">
<a href="registration.php">Registration</a>
</li>

<li class="last">
<a href="login.php">Login</a>
</li>


</ul>




<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Sign In</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="login.php">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="Name" name="name" type="name" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">
                            </div>


                                <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >

                            <!-- Change this to a button or input when using this as a form -->
                          <!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</body>

</html>

<?php






include("database/db_conection.php");

if(isset($_POST['login']))
{
    $user_name=$_POST['name'];
    $user_pass=$_POST['pass'];

    $check_user="select * from users WHERE user_name='$user_name'AND user_pass='$user_pass'";

    $run=mysqli_query($dbcon,$check_user);

    if(mysqli_num_rows($run))
    {
       
        echo "<script>window.open('welcome.php','_self')</script>";

        $_SESSION['name']=$user_name;//here session is used and value of $user_email store in $_SESSION.

    }
    else
    {
        echo "<script>alert('Name or password is incorrect!')</script>";
    }
}
?>