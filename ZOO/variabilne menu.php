<body>

    <?php
    if (isset($_SESSION['name']))
    {   
    ?>
    <center>
    <nav>
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
    <ul class="search_bar">
    <form method="post" action="search.php">
    <input type="text" name="searchterm" placeholder="search..." required><input type="button" value="search" name="Search">
    </form>
    </ul>
  </body>
</html>
<?php
}
else
{
?>
    <center>
    <nav>
    <ul class="horizontal_menu">

      <li>

        <a href="Homepage.php" title="Back to the home page">HOME</a>
      </li>
      <li>
        <a href="Products.php" title="Check out the products in stock">PRODUCTS</a>

      </li>
        <li>
        <a href="aboutus.php" title="About the company">ABOUT US</a>
      </li>
        <li>
        <a href="contactus.php" title="Contact information for the company">CONTACT US</a>
      </li>


      <li>
     <a href="loginform.php" title="Log into your existing account">LOG IN</a>
     </li>
     <li>
     <a href="registrationform.php" title="Register a new account">REGISTER</a>
     </li>
     </center>
    </nav>
    </ul>
    <ul class="search_bar">
    <form method="post" action="search.php">
    <input type="text" name="searchterm" placeholder="search..." required><input type="button" value="search" name="Search">
    </form>
    </ul>
  </body>
</html>
<?php
}
?>