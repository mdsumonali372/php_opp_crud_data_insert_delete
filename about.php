<?php 

include('user.php');

$ttt  = NEW User();


if(isset($_POST['submit'])){
    $ttt->information1($_POST);
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opp crud</title>
</head>
<body>
    <form action="" method="POST">


    <input type="text" name="userinfo" placeholder="Address"> <br> <br>

    <input type="email" name="uemail" placeholder="email">  <br> <br>
    <input type="password" name="psw" placeholder="password">  <br> <br>

    <input type="submit" name="submit" value="Submit">







    </form>
</body>
</html>