<?php

$con = mysqli_connect("localhost","root","","pixels");
if($con){
    if(isset($_POST["delete_post"])){
        $post_id = $_POST["id"];
        echo $post_id;
        $query = "DELETE FROM profile WHERE post_id='$post_id'";
        if ($con->query($query) === TRUE) {
           header("location:profile.php");
        } else {
            echo "Error deleting record: " . $conn->error;
        }

    }

    if(isset($_POST["edit_post"])){
        $post_id = $_POST["id"];
        $form =<<<DELIMITER
            <form  action="edit.php" method="post" >
       
        
            <div style="background: #eceeee; border: 1px solid #42464b; border-radius: 6px; height: 307px; margin: 121px auto 0; width: 50%;">
            
            <p style= "font-size: 20px;color: #696969; text-align:center; font-weight:bold;">Edit Post<p>
            <input type="text"name="title" size="30" placeholder="Title"style= " background: url('http://i.minus.com/ibhqW9Buanohx2.png') center left no-repeat, linear-gradient(#d6d7d7, #dee0e0); border: 1px solid #a1a3a3; border-radius: 4px; box-shadow: 0 1px #fff; box-sizing: border-box; color: #696969; height: 39px; margin: 0 0 0 29px; padding-left: 37px; transition: box-shadow 0.3s; width: 43%;" required>  <br>
         
            <textarea class="form-control" name="post" rows="4" style= "background: url('http://i.minus.com/ibhqW9Buanohx2.png') center left no-repeat, linear-gradient(#d6d7d7, #dee0e0); border: 1px solid #a1a3a3; border-radius: 4px; box-shadow: 0 1px #fff; box-sizing: border-box; color: #696969; height: 136px; margin: 13px 0 0 29px; padding-left: 37px; transition: box-shadow 0.3s; width: 88%;" placeholder="Write a post" required></textarea>
            
            
            <input type="hidden" name="id" value="$post_id">
        
            
            <button type="submit" id="submit" style= "background-color: #37a69b; background-image: linear-gradient(#3db0a6,#319d91); border: 1px solid #256f67; border-radius: 4px; box-shadow: inset 0 1px rgba(255,255,255,0.3); box-sizing: border-box; color: #f8f8f8; font-weight: 700; height: 39px; margin: 12px 0 0 29px; text-shadow: 0 -1px 0 #177c6a; width: 240px;">Edit</button> <br>
    
            </div>
            </form>
DELIMITER;
        echo $form;
    }
}
else{
    echo "ERROR";
}
       ?>