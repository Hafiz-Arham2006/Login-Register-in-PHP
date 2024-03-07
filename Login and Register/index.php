<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>WELCOME <span><?php  echo $_SESSION['user'] ?></span></h1>
<a href="logout.php"><button>Logout</button></a>


</body>
</html>