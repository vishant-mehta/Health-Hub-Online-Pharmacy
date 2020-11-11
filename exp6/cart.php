<?php 
session_start();
?>


<html>
<head>
    <title>Cart</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="dasboard.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <h1 align="center">Healthub</h1>
    <HR SIZE="7" COLOR="black">
  <font size=5>
  <marquee direction="right">Welcome to Health Hub, The Online Pharmacy.</marquee>
  <br>

  <?php 
echo "<b><br>User with Email ID ".$_COOKIE["email"]." has logged in.</b><br><br>"; 
?>

    <div class="container-fluid">
    	<h1>Products in Cart</h1>
    	<?php
    	if (isset($_SESSION['products']))
		{
		foreach($_SESSION['products'] as $selected)
		{
		echo "<h4>".$selected."</h4>";
		echo "<br>";
		}
		}
		?>

        <form action="logoutsessions.php" method="post">
        
        <input class="btn btn-success" type="submit" value="Logout" name="logout">
    </form>
   
    

</body>
<html>