<?php

if(isset($_POST['username1']) && isset($_POST['password1'])){
    //this condition is done to ensure $_POST works
    //if this condition isn't established==> error==> undefined index
    
$name= $_POST['username1'];
$pass= $_POST['password1'];

$connect=mysqli_connect("localhost", "root", "", "pixels");
    
$query="SELECT * from homedb WHERE username = '$name' and password = '$pass'";
    
    if($connect){  
        
        $result=mysqli_query($connect, $query);
        if(mysqli_num_rows($result) == 1){ //num_rows returns the number of rows in $result
         
            
            session_start();

            $name=$_POST['username1'];
            session_destroy();
            session_unset();
            $flag=1;
                   
        }
        else{
            $flag=0;
                    
        }
            
        
        
         
        if($flag){
            session_start();
            $user ="SELECT username,email,phone,id from homedb WHERE username = '$name' and password = '$pass'";
            $query = mysqli_query($connect,$user);
            $row=mysqli_fetch_assoc($query);
            $_SESSION['name']=$row['username'];
            $_SESSION['email']=$row['email'];
            $_SESSION['phone']=$row['phone'];
            $_SESSION['id']=$row['id'];
            header('location:profile.php');
        }
        else{
            session_start();
            $_SESSION['error']=<<<DELIMITER
                <div style="text-align:center;" class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Wrong username/password</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
DELIMITER;
            header('location:signup.php');
        }
         
    
        
    }
    else{
    echo "ERROR";
    }

}
?>

<?php

  
?>