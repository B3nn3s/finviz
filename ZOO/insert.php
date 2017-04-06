<html>
<head>





<link rel="stylesheet" type="text/css" href="Zoo.css">






<title>
Zoo stranka
</title>

</head>
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
<a href="Animal-Information.html">Animal Information</a>
</li>


<li>
<a href="Birds-Information.html">Birds Information</a>
</li>


<li>
<a href="Timings.html">Timings</a>
</li>



<li>
<a href="Future-events.html">Future events</a>
</li>



</ul>


<p>
<img src="Images/Logo.PNG"  class="image1"  >
</p>

<p>
<img src="Images/Zoo.PNG"   class="image2">
</p>

</body>
 

<?php

$con = mysqli_connect('localhost', 'root','', 'hu');

$check="SELECT * FROM users2 WHERE Username = '$_POST[fname]'";
$rs = mysqli_query($con,$check);
$data = mysqli_fetch_array($rs, MYSQLI_NUM);
if($data[0] > 1) {
    echo "User Already in Exists<br/>";
}




else
{
    $newUser="INSERT INTO users2(Username, Password) values('$_POST[fname]','$_POST[lname]')";
    if (mysqli_query($con,$newUser))
    {
        echo "You are now registered<br/>";
    }
    else
    {
        echo "Error adding user in database<br/>";
    }
}












 

mysqli_close($con)

?>

</body>

</html>