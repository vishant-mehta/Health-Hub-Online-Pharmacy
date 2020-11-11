<!DOCTYPE html>
<html>
<head>
  <title>Update Details</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <style>
    .error {color: #FF0000;}
  </style>
</head>
<body>
  <?php 

  $contact_number = $password = $confirm_password = $address= '';
  $contact_numberErr = $passwordErr = $confirm_passwordErr = $addressErr = '';

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

  
  //contactnumber validation
  if (preg_match("/^[1-9]{1}[0-9]{9}/", $_POST["contact_number"])) {
    $contact_number = test_input($_POST["contact_number"]);
  } elseif (empty($_POST["contact_number"])) {
    $contact_numberErr = "Contact information required";
  } else {
    $contact_numberErr = "Enter a valid phone number";
  } 

  //address validation
  if (empty($_POST["address"])) {
    $addressErr = "Address is required";
  } else {
    $address = test_input($_POST["address"]);
  }


  //password validation
  if(!empty($_POST["password"])){
  if ($_POST["password"]!=$_POST["confirm_password"]) {
    $confirm_passwordErr .=  "Passowrd and Confirm Password does not match!"."<br>";
  }
  if (strlen($_POST["password"]) < '8') {
    $passwordErr .= "Your Password Must Contain At Least 8 Characters!"."<br>";
  }
  elseif(!preg_match("#[0-9]+#",$_POST["password"])) {
    $passwordErr .= "Your Password Must Contain At Least 1 Number!"."<br>";
  }
  elseif(!preg_match("#[A-Z]+#",$_POST["password"])) {
    $passwordErr .= "Your Password Must Contain At Least 1 Uppercase Letter!"."<br>";
  }
  elseif(!preg_match("#[a-z]+#",$_POST["password"])) {
    $passwordErr .= "Your Password Must Contain At Least 1 Lowercase Letter!"."<br>";
  }
  elseif(!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $_POST["password"])) {
    $passwordErr .= "Your Password Must Contain At Least 1 Special Character!"."<br>";
  }
  }else{
  $passwordErr .= "Please Enter your password"."<br>";
  }
}
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
     }


  ?>

  <h1><center>Update Details</center></h1>
  <br><br>
  <div class="mainbody">
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="col-sm-6">
    

        <br><br>

        <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-3" required><b>Contact Number(mobile):</b></div>
    <div class="col-sm-8"><input type="text" name="contact_number" id="contact_number" placeholder="Contact number">
    <span class="error"> *<?php echo $contact_numberErr;?></span></div>
    </div>


        <br><br>

        <div class="row">
        <div class="col-sm-1"></div>
      <div class="col-sm-3"><b>Address: </b></div>
      <div class="col-sm-8"><textarea name="address" rows="4" cols="35"></textarea>
      <span class="error">* <?php echo $addressErr;?></span></div>
        </div>

      <br><br>

        <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-3"><b>Set Password:</b></div>
    <div class="col-sm-8"><input type="password" name="password" id="password" placeholder="Password">
    <span class="error">* <?php echo $passwordErr;?></span></div>
    </div>

        <br><br>

        <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-3"><b>Confirm Password:</b></div>
    <div class="col-sm-8"><input type="password" name="confirm_password" id="confirm_password" placeholder=" Enter password again">
    <span class="error">* <?php echo $confirm_passwordErr;?></span></div>
      </div>

    <br><br>

    <div class="row">
        <div class="col-sm-3"></div>
        <input class="btn btn-success" type="submit" name="">
        </div>
        </div>
  </form>


</div>

</body>
</html>
