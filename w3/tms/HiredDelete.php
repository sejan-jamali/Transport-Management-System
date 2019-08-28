<?php
	include ("dbconection.php");
	$id=$_GET['id'];
	$q="DELETE FROM `hired_bus` WHERE `hired_bus`.`h_id` = '$id';";

	$run=mysqli_query($con,$q);

	if($run==true){
		?>
		<script>
			alert('Data Delete Successful.');
			window.open('HIredDetails.php','_self');
		</script>
		<?php
	}
	else{
		?>
		<script>
			alert('Data Delete fail.');
			window.open('HiredDetails.php','_self');
		</script>
		<?php
	}

?>