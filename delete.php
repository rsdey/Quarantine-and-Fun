<?php 

include 'dbconn.php';

$id = $_GET['id'];


$deletequery = "delete from user where id= $id";
$query = mysqli_query($con, $deletequery);

if($query)
{

 	?>
 	<script>alert('Deleted successfully');
 	location.replace("admin/members.php");
 	</script>

 	<?php 
 	

}else{
	?>
 	<script>alert('Deletion unsuccessful');
 	location.replace("admin/members.php");
 	</script>

 	<?php
 	
}



 ?>

