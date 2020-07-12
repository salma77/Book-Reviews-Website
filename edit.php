<?php


function clear($string){
    $v1=htmlspecialchars($string);
    $v2=stripslashes($v1);
    $v3=trim($v2);
    $v4=str_replace("'","''",$v3);
    return $v4;
             
}

$con = mysqli_connect("localhost","root","","pixels");

if (!$con){
    
    echo "Error";
}
else{
    
    $title=$_POST['title'];
    $post=$_POST['post'];
    $id=$_POST['id'];
    $title=clear($title);
    $post=clear($post);
    
    $query="UPDATE profile SET post='$post',title='$title' WHERE post_id='$id'";
    if ($con->query($query) === TRUE) {
        header("location:profile.php");
    }
    else {
        echo "Error deleting record: " . $conn->error;
    }
}





?>