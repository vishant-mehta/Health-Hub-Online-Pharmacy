<?php
session_start();
if(isset($_POST["check_list"]))
{
    $_SESSION["products"] = $_POST["check_list"];
    header("location:http://localhost/WP2/mini/exp6/cart.php");
}



?>
<html>
<head>
	<title>Homepage</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<h1 align="center">Healthub</h1>
	<HR SIZE="7" COLOR="black">
  <font size=5>
  <marquee direction="right">Welcome to Health Hub, The Online Pharmacy.</marquee>
<?php 
echo "<b><br>User with Email ID ".$_COOKIE["email"]." has logged in.</b><br><br>"; 
?>

  </font>
  
  <b><font size="5">Browse medicines and health products</font></b></p>
<br>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	 <div class="col-sm-6">
	<div class="row">
		<div class="col-sm-6"><label for="A">Crocin Advance</label></div><input type="checkbox" value="Crocin Advance" name="check_list[]">
	</div>
	<div class="row">
		<div class="col-sm-6"><label for="B"> Metacin</label></div><input type="checkbox" value="Metacin" name="check_list[]">
	</div>
	<div class="row">
		<div class="col-sm-6"><label for="C"> Vicks Vaporub - 50ml</label></div><input type="checkbox" value="Vicks Vaporub - 50ml" name="check_list[]">
	</div>
	<div class="row">
		<div class="col-sm-6"><label for="D"> BIO-OIL 60ML LIQUID</label></div><input type="checkbox" value=" BIO-OIL 60ML LIQUID" name="check_list[]">
	</div>
	<div class="row">
		<div class="col-sm-6"><label for="D">LIFEBUOY HAND SANITIZER 190ML</label></div><input type="checkbox" value="LIFEBUOY HAND SANITIZER 190ML" name="check_list[]">
	</div>
	<br><br>
	<div class="row">
        <div class="col-sm-3"></div>
        <input class="btn btn-success" type="submit" value="Add to Cart">
        </div>
	</div>

</form>
</body>
</html>
