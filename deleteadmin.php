<?php 

include 'dbconn.php';

$id = $_GET['id'];


$deletequery = "delete from admin where id= $id";
$query = mysqli_query($con, $deletequery);

if($query)
{

 	?>
 	<script>alert('Deleted successfully');
 	location.replace("admin/viewadmin.php");
 	</script>

 	<?php 
 	

}else{
	?>
 	<script>alert('Deletion unsuccessful');
 	location.replace("admin/viewadmin.php");
 	</script>

 	<?php
 	
}



 ?>

