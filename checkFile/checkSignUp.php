<?php
session_start();
try {
    $link = mysqli_connect("localhost", "root", "", "hostsite");
} catch (Exception $exception) {
    echo $exception;
}
$email=$_POST['email'];
$query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($link, $query);
if (mysqli_num_rows($result) > 0)
{
$_SESSION['failSignUp']=true;
header("Location: http://localhost/hostSite/signup.php");
}
else
{
$date=date("Y-m-d");
$password=$_POST['password'];
$phoneNumber=$_POST['phoneNumber'];
$_SESSION['email']=$_POST['email'];
$_SESSION['active']=true;
$_SESSION['firstLogin']=true;
$query="INSERT INTO users (email,phoneNumber,password,registerDate) VALUES ('$email','$phoneNumber','$password','$date')";
mysqli_query($link,$query);
header("Location: http://localhost/hostSite");
}
?>