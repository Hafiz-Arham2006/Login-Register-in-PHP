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
<title>SIGNUP</title>
</head>
<body>
    <h1>REGISTER</h1>
<form action="<?php echo $_SERVER['PHP_SELF']  ?>" method="post">
    <input type="text" placeholder="Full Name" required name="fullname"><br><br>
    <input type="text" placeholder="User Name" required name="username"><br><br>
    <input type="email" placeholder="E-mail" required name="email"><br><br>
    <input type="password" placeholder="Password" required name="password"><br><br>
    <button type="submit" name="registerbtn">Register</button>
        <a href="login.php" class="btn btn-info">Already Registered ? Login </a>
<?php
if(isset($_POST['registerbtn'])){
$fullname=$_POST['fullname'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$conn=mysqli_connect('localhost','root','','signup');
$sql="INSERT INTO users (full_name , user_name , email , password)
VALUES ('$fullname' , '$username' , '$email' , '$password')";
$ans=mysqli_query($conn,$sql);
header('location:login.php');
}






?>
</form>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>