<?php
$con=mysqli_connect("localhost","root","","users");

$fname = $_POST["txt_fname"];
$lname = $_POST["txt_lname"];
$email = $_POST["txt_email"];
$password = $_POST["txt_password"];
$phone = $_POST["txt_phone"];

$con = new mysqli($fname, $lname, $email, $password, $phone);

if(empty($fname) || empty($lname) || empty($email) || empty($password) || empty($phone))
    header("location:createacc.html?");

else{

$sql="INSERT INTO users(db_fname,db_lname,db_email,db_password,db_phone) VALUES ('$fname','$lname','$email','$password','$phone')";

mysqli_query($con,$sql);

header("location:createacc.html?");
}
?>