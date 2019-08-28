<?php
	if(isset($_POST['submit'])){
		include 'tms_dbconection.php';
		date_default_timezone_set('Asia/Dhaka');
		$time=$_POST['time'];
		$t1=date('H:i:s');
		$t2=date('h:i:s a');
		$t3=date('H:i');

		echo $time.'<br>'.$t1.'<br>'.$t2.'<br>'.$t3.'<br>';
		$id=1;
		$q1="SELECT * FROM `schedule` WHERE `s_id`='$id'";
    	
    	$r=mysqli_query($con,$q1);
    	$da=mysqli_fetch_assoc($r);
		$d=$da['starting_time'];
		echo $d."<br>";

		if($t3>=$d){
			echo "Bus Left";
		}
		else
			echo "Bus in Position";
	}
?>