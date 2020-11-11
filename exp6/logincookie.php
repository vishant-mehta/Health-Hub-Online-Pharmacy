  <?php

  if(!empty($_POST["remember"])) {
  	setcookie ("email",$_POST["email"],time()+ 3600);
  	setcookie ("password",$_POST["password"],time()+ 3600);
  	header("location:http://localhost/WP2/mini/exp6/homepage.php");
  } 
  ?>
<html>
<body>
<head>
	  <link rel="stylesheet" href="logincss.css">
</head>
		<font face="Calibri">
			<div class="mainbody">
			<div align="center"><form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" style="border: 3px solid black; width: 400px; box-shadow: 10px 15px #D5DBD7;">
				<h1>LOGIN</h1>
				<h2>Enter your Login Credentials</h2><br>
				<div class="container">
					Email ID: <br><input name="email" type="text" value="<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"]; } ?>"><br><br>
					Password: <br><input name="password" type="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>"><br><br>
				  <input type="checkbox" name="remember" /> Remember me<br><br><br>
			    <button type="submit">Login</button><br><br>
			</form></div></div></div>
		</font>
</body>
</html>
