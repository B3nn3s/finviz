<html>
<head>





<link rel="stylesheet" type="text/css" href="Zoo.css">






<title>
Zoo stranka
</title>

</head>


<body>

 <?php
session_start();

 if ($_SESSION['name'] == 'hu') {  echo "nieco zobraz "; } ;



echo "Welcome " . $_SESSION["name"];








?>
       
     




<p>nieco nezobraz</p>


<p>nieco nezobraz</p>







</body>


</html>
