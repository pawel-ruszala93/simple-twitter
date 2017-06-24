<?php
require_once '../config.php';
require_once '../src/class/User.php';
require_once '../src/functions/login.php';
require_once '../src/functions/signup.php';

session_start();
//var_dump($_POST);
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>PHPipper</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    </head>
    <body>
        <div>
           
          <?php 
          
          if($_SERVER['REQUEST_METHOD'] === "POST"){
              switch ($_POST['button']){
                  case 'login':
                      login($conn);
                      break;
                  case 'signup':
                      signup($conn);
                      break;
                  default :
                      echo "Coś poszło nie tak";
              }
          }
          
          ?>
        </div>
    </body>
</html>