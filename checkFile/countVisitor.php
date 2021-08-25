<?php
try {
    $link = mysqli_connect("localhost", "root", "", "hostsite");
} catch (Exception $exception) {
    echo $exception;
}
$date=date("Y-m-d");
$ip=$_SERVER['REMOTE_ADDR'];
$query="SELECT * FROM visitors WHERE date='$date'";
$result=mysqli_query($link,$query);
if ($result->num_rows == 0)
{
    $query="INSERT INTO visitors (date,ip) VALUES ('$date','$ip')";
    mysqli_query($link,$query);
}
?>