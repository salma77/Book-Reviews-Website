<?php 
echo $_POST['ph'];
if(isset ($_POST['username2']) && isset ($_POST['password2']) && isset ($_POST['email']) && isset($_POST['ph'])){

    
    $name=$_POST['username2'];
    $email=$_POST['email'];
    $pass=$_POST['password2'];
    $phone=$_POST['ph'];
    


    $con=mysqli_connect("localhost", "root", "", "pixels");
    if($con){
            
        $query="INSERT INTO homedb (username, email, password,phone) VALUES ('$name', '$email', '$pass','$phone')";
    
        $res=mysqli_query($con, $query);
        
        
        session_start();
        $user ="SELECT username,email,phone,id from homedb WHERE username = '$name' and password = '$pass'";
        $query1 = mysqli_query($con,$user);
        $row=mysqli_fetch_assoc($query1);
        $_SESSION['name']=$row['username'];
        $_SESSION['email']=$row['email'];
        $_SESSION['phone']=$row['phone'];
        $_SESSION['id']=$row['id'];
        header("location:profile.php");

    
        }
        else{
            echo "ERROR IN CONNECTION WITH DB";
        }
        
}



?>