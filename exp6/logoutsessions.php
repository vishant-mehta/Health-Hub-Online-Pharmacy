
<html>
        <head>
            <title>Logout</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        </head>
        <body>
            <br><br>
            <?php
session_start();
if(isset($_POST["logout"])){
session_unset();
session_destroy();
setcookie("email", "", time() - 3600,'/');

}

?>
        <div class="container-fluid">
            <div class="alert alert-info">
                <strong>Success!</strong> You have Successfully Logged out!
            </div>
        </div>
        </body>
        </html>
        
      


