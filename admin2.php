<?php
session_start();





?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
table
{
	color: black;
}	
th
{
  background-color:  black; 
  color: white;
}
tr:nth-child(even)
{

	background-color: #FDFFE0;
}
tr:nth-child(odd)
{

	background-color: #FFE0F9;
}

</style>


</head>

<body>
<table class="table table-hover">
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>phone</th>
		<th>Comments</th>
	</tr>
<?php
$connection = mysqli_connect("localhost","root","","pixels");
if(!$connection)
  {
  echo"FALSE"."<br>";
  }
else 
  {
  	$flag=0;
  	$q="SELECT name,email,phone,comments FROM contact_us";
	$result=$connection->query($q);
  if($result->num_rows >0)
  {
	while ($row=$result->fetch_assoc())
	{
	  $flag=1;
	  echo "<tr><td>".$row ["name"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["comments"]."</td></tr>";	
  	}
  	echo"</table>";
   }
    else 
    {
    	echo"there is no messages.";
    }
    $connection->close(); 
}

?>

</table>	

</body>

</html>
<?php
session_unset(); 
session_destroy(); 
?>