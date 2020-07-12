<?php
session_start();






session_unset(); 
session_destroy(); 


?>

<!DOCTYPE html>

<html>
<head>

<title>Admin LogIN</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="jquery-3.3.1.min.js"></script>
<script src="plugin.js"></script>

</head>

<body style="background-image: url('signup.jpg');background-repeat: no-repeat;background-position: center;background-attachment: fixed; background-size:cover;">
    <form  action="admin.php" method="post" >
       
        
        <div style="background: #eceeee; border: 1px solid #42464b; border-radius: 6px; height: 283px; margin: 121px auto 0; width: 298px;">
            
        <p style= "font-size: 20px;color: #696969; text-align:center; font-weight:bold;">username<p>
        <input type="text"name="username" size="30" placeholder="username"style= " background: url('http://i.minus.com/ibhqW9Buanohx2.png') center left no-repeat, linear-gradient(#d6d7d7, #dee0e0); border: 1px solid #a1a3a3; border-radius: 4px; box-shadow: 0 1px #fff; box-sizing: border-box; color: #696969; height: 39px; margin: 0 0 0 29px; padding-left: 37px; transition: box-shadow 0.3s; width: 240px;">  <br>
        
        <p style= "font-size: 20px;color: #696969; text-align:center; font-weight:bold;">Password<p>
        <input style= "background: url('http://i.minus.com/ibhqW9Buanohx2.png') center left no-repeat, linear-gradient(#d6d7d7, #dee0e0); border: 1px solid #a1a3a3; border-radius: 4px; box-shadow: 0 1px #fff; box-sizing: border-box; color: #696969; height: 39px; margin: 0 0 0 29px; padding-left: 37px; transition: box-shadow 0.3s; width: 240px;" type="password" size="30" name="password" placeholder="Password"><br>
        
            
        <input type="submit" id="submit" style= "background-color: #37a69b; background-image: linear-gradient(#3db0a6,#319d91); border: 1px solid #256f67; border-radius: 4px; box-shadow: inset 0 1px rgba(255,255,255,0.3); box-sizing: border-box; color: #f8f8f8; font-weight: 700; height: 39px; margin: 12px 0 0 29px; text-shadow: 0 -1px 0 #177c6a; width: 240px;"> <br>
    
            </div>
           
    </form>

</body>
</html>