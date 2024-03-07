<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Login</title>
</head>
<body>
    <h1>LOGIN</h1>
<form action="<?php  echo $_SERVER['PHP_SELF']  ?>" method="post">
    <input type="text" placeholder="User Name" required name="username"><br><br>
    <input type="password" placeholder="Password" required name="password"><br><br>
    <button type="submit" name="loginbtn">LOGIN</button>
    <a href="register.php" class="btn btn-info">Register Here!</a>
    <?php
if(isset($_POST['loginbtn'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $conn=mysqli_connect('localhost','root','','signup');
    $sql="SELECT user_name , password FROM users WHERE user_name='$username' AND password='$password'";
    $ans=mysqli_query($conn,$sql);

        if(mysqli_num_rows($ans)){
            $_SESSION['user'] = $username;
            header('location:index.php');
        }


}

?>
</form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>
