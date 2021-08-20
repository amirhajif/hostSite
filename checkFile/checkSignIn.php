<?php
session_start();
try {
    $link = mysqli_connect("localhost", "root", "", "hostsite");
} catch (Exception $exception) {
    echo $exception;
}
$email=$_POST['email'];
$password=$_POST['password'];
$query="SELECT * FROM users WHERE email='$email' AND password='$password'";
$result=mysqli_query($link,$query);
if (mysqli_num_rows($result) == 0 )
{
    $_SESSION['failSignin']=true;
    header("Location: http://localhost/hostSite/login.php");
}
else
{
    $_SESSION['active']=true;
    $_SESSION['email']=$email;
    $_SESSION['firstLogin']=true;
    header("Location: http://localhost/hostSite");
}
?>