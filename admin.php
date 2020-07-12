<?php
session_start();
if ($_POST['username']=="admin"&&$_POST['password']=="pixels")
{
	header("location:admin2.php");
}
else
{
header("location:admin_login.php");
}
session_unset(); 
session_destroy(); 


?>
