<?php session_start();

?>
<!DOCTYPE html>

<html>
<head>

    
<!-- ******************** BOOTSTAP ****************** -->
    
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Pacifico|Permanent+Marker" rel="stylesheet">
   <script src="jquery-3.3.1.min.js"></script> 
    <script>
        
    $(document).ready(function () {
        
    $("#sup").click(function () {
        alert("fff");
var flag = 0;
      if((($("#email").val()).includes("@gmail"||"@yahoo")) && (($("#ph").val()).length==11) && (($("#password2").val()).length>=6) && ($("#ph").isNumeric){

          flag = 1;
               return
        } 
else if(flag==0){
    
          alert("Invalid entry");

          event.preventDefault();
}


        })
    
    })

    
    
    </script>
    
    
    
    <style>
        body{
            background-image: url(background-canvas-close-up-1020320.jpg);
        }
    </style>
   
    <script>
    
   $(document).ready(function(){
       $("#con").mouseenter(function(){
           $("#contact_us").slideDown("slow");
       });
       $("#con").click(function(){
            $("#contact_us").slideUp("slow");
       });
       $("#contact_us").click(function(){
           event.stopPropagation();
       });
   });
    
    </script>
    <style>
        html {
            height: 100%;
        }
        body {
            min-height: 100%;
            background-image: url(header.jpg);
            background-repeat: round;
            background-size: cover;
}
    
    </style>
    
    
</head>

<body style="height:100%;">
    
   <?php include("navbar.php") ?>
    
    <div style="width:43%;height:87%;position:relative;left:25%;text-align:center;" >
        <br>
        <h3 style="font-family: 'Permanent Marker', cursive; font-size:50px;color:white;">AYS</h3>
        <p style="font-family: 'Pacifico', cursive; font-size:25px;color:white;">see what's happening now</p>
        <p style="font-family: 'Pacifico', cursive; font-size:25px;color:white;">Join AYS Family</p>
        <p style="font-family: 'Pacifico', cursive; font-size:25px;color:white;">The Rhythm is yours</p>

        <div class="row">
            <div class="col-md-6" style="position:relative; top:10px;">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#signin" style="padding-left: 54px; padding-right: 56px; border-radius: 50px; color:white;font-weight:bold;background-color:#ee4b28;">
                    Sign In
                </button>
            </div>
            <div class="col-md-6" style="position:relative; top:10px;">
                <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#signup" style="background-color:#ee4b28;padding-left: 50px; padding-right: 50px; border-radius: 50px; color:white;font-weight:bold;">
                    Sign Up
                </button>
            </div>
        </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalCenterTitle">Sign In Form</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                       <form id="signinform" action="userprofile-signin.php" method="post">
                                <!--    <label>Username:</label>-->
                           <input type="text" name="username1" id="username1" placeholder="Username" required>
                                <br><br>
                           

                                <!--    <label>Password:</label>-->
                           <input type="password" name="password1" id="password1" placeholder="Password" required><br><br>

                                
                           
    
                            
                                <div class="modal-footer">
                                    <input type="submit" id="signin" class="btn btn-info" value="Sign In">
                       
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
        
            <span style="width:100px;"> <?php  if(isset($_SESSION['error'])){echo $_SESSION['error']; unset($_SESSION['error']);} ?></span>
    
<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modaltitle"id="exampleModalCenterTitle">Sign Up Form</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="signupform" action="userprofile-signup.php" method="post">
                    <div id="inputs">
                        <!--    <label>Username:</label>-->
                        <input type="text" name="username2" id="username2" placeholder="Username" required><br><br>
        
                                <!--    <label>Password:</label>    -->
                                <input type="password" name="password2" id="password2" placeholder="Password" required><br><br>
                                <!--    <label>E-mail:</label>-->
                                <input type="email" name="email" id="email" placeholder="name@yahoo.com,name@gmail.com"><br><br>
                                <!--    <label>Phone:</label>-->
                                <input type="text" name="ph" id="phone" placeholder="Phone Number"><br><br>
                            </div>
                            
                            <div class="modal-footer">
                                <input type="submit" id="sup" class="btn btn-info" value="Sign Up">
                         
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
            
<form action ="contactus.php"method="post" style="position:fixed; bottom:0px; left:22%; width:50%;">
 <button id="con" href="#contact_us"class="btn btn-block" style="font-weight:bold;background-color:#ee4b28; color:white;"  >Contact Us</button>
<div id="contact_us" class="container-fluid bg-grey" class="footer" style="background-color:white; display:none;">
	<br>
<h4 class="text-center">CONTACT</h4>
  <div class="row">
    <div class="col-md-6">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> EGYPT, EG</p>
      <p><span class="glyphicon glyphicon-phone"></span> +01111111</p>
      <p><span class="glyphicon glyphicon-envelope"></span> myemail@project.com</p>
    </div>
	    <div class="row">
	        <div class="col-sm-4 form-group ">
	          <input class="form-control form-control-sm" id="name" name="name" placeholder="Name" type="text" required>
	        </div>
	        <div class="col-sm-4 form-group">
	          <input class="form-control form-control-sm" id="email" name="email" placeholder="Email" type="email" required>
	        </div>
	        <div class="col-sm-4 form-group">
	          <input class="form-control form-control-sm" id ="phone" name="phone"placeholder="phone" type="tel"pattern="[0-9]{11}" required>
	           
	       </div>
	       
	       
	    </div>   
        <textarea class="form-control form-control-sm" id="comments" name="comments" placeholder="Comment" rows="3"></textarea><br>
    <div class="row">
        
        <div class="col-sm-4 form-group">
          <button class="btn btn-default pull-left" type="submit">Send</button>
        </div>
      </div>  

</div>
</div>
</form>






						

</body>
</html>

<?php session_destroy();
session_unset();?>