<?php
	include ("dbconection.php");
	$id=$_GET['id'];
	$q="DELETE FROM `ticket` WHERE `ticket`.`t_id` = '$id';";

	$run=mysqli_query($con,$q);

	if($run==true){
		?>
		<script>
			alert('Data Delete Successful.');
			window.open('TicketDetails.php','_self');
		</script>
		<?php
	}
	else{
		?>
		<script>
			alert('Data Delete fail.');
			window.open('TicketDetails.php','_self');
		</script>
		<?php
	}

?>