<?php
require_once '../config.php';
require_once '../src/class/User.php';
$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

if ($conn->errorCode() != null) {
    die("Połączenie nieudane..." . $conn->errorInfo()[2] . "<br>");
}
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>PHPipper - sign up</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body class="index">
        <div class="container contIndex">
            <form action="login.php" method="POST" class="form-signin">
                <label>Email <input type="email" name="email" placeholder="email" class="form-control"></label><br>
                <label>Password <input type = "password" name="password" placeholder="password" class="form-control"></label><br>
                <label>Username <input type="username" name="username" placeholder="username" class="form-control"></label><br>
                <button type="submit" name="button" value="signup" class="btn btn-primary">Sign up</button>
            </form>
        </div>
    </body>
</html>