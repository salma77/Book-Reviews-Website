<?php
session_start();
$connection = mysqli_connect("localhost","root","","pixels");
if(!$connection)
  {
  echo"FALSE"."<br>";
  }
else 
  {

//$sql="CREATE TABLE contact_us(task_id INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY,name VARCHAR(100),email VARCHAR(100),title VARCHAR(100),comments TEXT(100))";
//$sql=mysqli_query($connection,$sql);


 function valid($name)
{
	htmlspecialchars($name);
	stripslashes($name); 
	trim( $name);
}

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['comments'];


valid($name);
valid($email);
valid($phone);
valid($message);


$x="INSERT INTO contact_us (name,email,phone,comments) VALUES ('$name','$email','$phone','$message')";
$w=mysqli_query($connection,$x);
header("location:login_admin.php");
die();
}
session_unset(); 
session_destroy(); 
?>