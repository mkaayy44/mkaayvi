<?php
session_start();
$con=mysqli_connect("localhost","root","","users");

$email=$_POST['txt_email'];
$password=$_POST['txt_password'];

$sql="SELECT * FROM users WHERE db_email='$email' AND db_password='$password'";
$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0){
   $_SESSION['user']=$email; 
   header("location:login.html");
}
else
   header("location:login.html");
?>