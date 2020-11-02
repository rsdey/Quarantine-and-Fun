<?php 

$server = "localhost";
$user = "root";
$password = "rd06";
$db = "QandF";

$con = mysqli_connect($server,$user,$password,$db);


if($con)
{

 	?>
 	<script>console.log('DB Connection successful')</script>
 	<?php 

}else{
	?>
 	<script>console.log('DB Connection not successful');</script>
 	<?php
}


?>