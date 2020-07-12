<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    
    
    <!-- ******************** BOOTSTAP ****************** -->
    
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="jquery-3.3.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
        body{
            background-image: url(Background%20img.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }
    
    
    </style>
    </head>
<body>
    <!-- ******************** NAVBAR ********************** -->


<nav class="navbar navbar-expand-md navbar-dark  navbar-fixed-top">
  <a class="navbar-brand" href="#">
    <img src="images.jpg" width="40" height="40" alt="" class="rounded-circle">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#" style="font-weight: bold;">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login_admin.php" style="font-weight: bold;">Admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" style="font-weight: bold;">About Us</a>
      </li>
    </ul>
  </div>
</nav>
    
    
    <div style="background-color:#eceeee; border: 1px solid #42464b; border-radius: 6px; height: auto;  width: 50%; position:relative; top:10%;left:25%">
        
        <p style= "font-size: 16px;color: #036564; text-align:center; font-weight:bold;">User Info</p>
            
        <p style= "font-size: 16px;color: #036564; text-align:left;font-weight:bold;">User Name: <?php if(isset($_SESSION['name'])){ echo $_SESSION['name'];} ?></p>
        
        
        <p style= "font-size: 16px;color: #036564; text-align:left;font-weight:bold;">Email: <?php echo $_SESSION['email']; ?></p>
        
        
        <p style= "font-size: 16px;color: #036564; text-align:left;font-weight:bold;">phone: <?php echo $_SESSION['phone']; ?></p>
        
    </div>
    
    
     <form  action="request.php" method="post" >
       
        
        <div style="background: #eceeee; border: 1px solid #42464b; border-radius: 6px; height: 307px; margin: 121px auto 0; width: 50%;">
            
        <p style= "font-size: 20px;color: #696969; text-align:center; font-weight:bold;">Create Post<p>
        <input type="text"name="title" size="30" placeholder="Title"style= " background: url('http://i.minus.com/ibhqW9Buanohx2.png') center left no-repeat, linear-gradient(#d6d7d7, #dee0e0); border: 1px solid #a1a3a3; border-radius: 4px; box-shadow: 0 1px #fff; box-sizing: border-box; color: #696969; height: 39px; margin: 0 0 0 29px; padding-left: 37px; transition: box-shadow 0.3s; width: 43%;" required>  <br>
        
         <textarea class="form-control" name="post" rows="4" style= "background: url('http://i.minus.com/ibhqW9Buanohx2.png') center left no-repeat, linear-gradient(#d6d7d7, #dee0e0); border: 1px solid #a1a3a3; border-radius: 4px; box-shadow: 0 1px #fff; box-sizing: border-box; color: #696969; height: 136px; margin: 13px 0 0 29px; padding-left: 37px; transition: box-shadow 0.3s; width: 88%;" placeholder="Write a post" required></textarea>
        
            
            <button type="submit" id="submit" style= "background-color: #37a69b; background-image: linear-gradient(#3db0a6,#319d91); border: 1px solid #256f67; border-radius: 4px; box-shadow: inset 0 1px rgba(255,255,255,0.3); box-sizing: border-box; color: #f8f8f8; font-weight: 700; height: 39px; margin: 12px 0 0 29px; text-shadow: 0 -1px 0 #177c6a; width: 240px;">Post</button> <br>
    
            </div>
    </form>
           
    
   
    <?php 
          function clear($string){
             $v1=htmlspecialchars($string);
             $v2=stripslashes($v1);
             $v3=trim($v2);
             $v4=str_replace("''","",$v3);
             return $v4;
             
         }
         
         
         
         $con = mysqli_connect("localhost","root","","pixels");
         if (!$con){
             echo "Failed";
         }
         else {
             $id = $_SESSION['id'];
             $query = "SELECT post,title,Time,post_id FROM profile WHERE id='$id' ORDER BY post_id desc";
             $result=$con->query($query);
             if($result->num_rows >0)
             {
                 while ($row=$result->fetch_assoc())
                 {
                     
                     $post=$row['post'];
                     $title = $row['title'];
                     $Time = $row['Time'];
                     $post = clear($post);
                     $title = clear($title);
                     $Time = clear($Time);
                     $post_id=$row['post_id'];
                   
                     
                     if (strlen($post)<20){
                         $p1 =<<<DELIMITER
                             <br><div style="width:50%; position:relative;left:25%; word-wrap: break-word;" class="alert alert-dark" role="alert">
                             <h4 class="alert-heading">
DELIMITER;
                         $p2 =<<<DELIMITER
                             </h4>
                             <p id="post">
                             <form action="post.php" method="post">
                             <input type="hidden" name="id" value="$post_id">
                             <input type="submit" name="delete_post" value="Delete post">
                             <input type="submit" name="edit_post" value="Edit post">
                             </form>
                             <p>
DELIMITER;
                         $p3 =<<<DELIMITER
                             </p>
                             <hr>
                             <p class="mb-0">
DELIMITER;
                         $p4 =<<<DELIMITER
                             </p>
                             </div>
DELIMITER;

                
                         echo $p1 . $title . $p2 . $post . $p3 . $Time . $p4;
                     }
                     else{
                         $post = substr($post,0,200);
                         
                         $p1 =<<<DELIMITER
                             <br><div style="width:50%; position:relative;left:25%; word-wrap: break-word;" class="alert alert-dark" role="alert">
                             <h4 class="alert-heading">
DELIMITER;
                         $p2 =<<<DELIMITER
                             </h4>
                             <p id="post">
                             <form action="post.php" method="post">
                             <input type="hidden" name="id" value="$post_id">
                             <input type="submit" name="delete_post" value="Delete post">
                             <input type="submit" name="edit_post" value="Edit post">
                             </form>
                             <p>
DELIMITER;
                         $p3 =<<<DELIMITER
                             </p>
                             <hr>
                             <p class="mb-0">
DELIMITER;
                         $p4 =<<<DELIMITER
                             </p>
                             </div>
DELIMITER;
                         $see_more=<<<DELIMITER
                             <a href="show.php?Data='$post_id'">....see more</a>
DELIMITER;
                
                         echo $p1 . $title . $p2 . $post."  ".$see_more. $p3 . $Time . $p4;
                         
                     }
                 }
             }
        else 
        {
            echo"NO POSTS";
        }
        $con->close(); 
    }
         
        
    
    ?>
    
    
    </body>

</html>