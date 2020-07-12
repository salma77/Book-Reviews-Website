<!DOCTYPE html>
<html>
<head>
    
    
    <!-- ******************** BOOTSTAP ****************** -->
    
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
        body{
            background-image: url(bg-mobile-fallback.jpg);
            
        }
    
    
    </style>
    </head>
<body>
    <!-- ******************** NAVBAR ********************** -->


<nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-fixed-top">
  <a class="navbar-brand" href="#">
    <img src="images.jpg" width="40" height="40" alt="">
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
        <a class="nav-link" href="#" style="font-weight: bold;">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="font-weight: bold;">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" style="font-weight: bold;">Disabled</a>
      </li>
    </ul>
  </div>
</nav>



<?php


function clear($string){
    $v1=htmlspecialchars($string);
    $v2=stripslashes($v1);
    $v3=trim($v2);
    $v4=str_replace("''","",$v3);
    return $v4;
             
}

    
$post_id= $_GET["Data"];


$con = mysqli_connect("localhost","root","","pixels");
if (!$con){
             echo "Failed";
         }
else {
    $query = "SELECT post,title,Time,post_id FROM profile WHERE post_id=$post_id";
             $result=$con->query($query);
             if($result->num_rows >0){
                 
                 while ($row=$result->fetch_assoc())
                 {
                     $post=$row['post'];
                     $title = $row['title'];
                     $Time = $row['Time'];
                     $post = clear($post);
                     $title = clear($title);
                     $Time = clear($Time);


                     $p1 =<<<DELIMITER
                                 <br><div style="width:50%; position:relative;left:25%; word-wrap: break-word;" class="alert alert-dark" role="alert">
                                 <h4 class="alert-heading">
DELIMITER;
                             $p2 =<<<DELIMITER
                                 </h4>
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