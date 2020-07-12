<?php 
session_start();

/******************** FUNCTIONS **********************/

function clear($string)
{
	htmlspecialchars($string);
	stripslashes($string);
    trim($string);
}

/******************* CONNECTION ***********************/

$con = mysqli_connect("localhost","root","","pixels");
if(!$con){
    echo "FALSE";
}
else{
    $id = $_SESSION['id'];
    
    $post=$_POST['post'];
    $title=$_POST['title'];
    $post=str_replace("'","''",$post);
    $title=str_replace("'","''",$title);

    
    $x="INSERT INTO profile (post,id,title,Time) VALUES ('$post','$id','$title',CURRENT_TIMESTAMP())";
    $w=mysqli_query($con,$x);
    header("location:profile.php");
    die();
}
session_unset(); 
session_destroy(); 
    




?>