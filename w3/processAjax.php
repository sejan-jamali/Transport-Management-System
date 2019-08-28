<?php

	include('dbconection.php');
	//echo "This is the php page <br>";

	if(isset($_REQUEST['v'])){
		$v1=$_GET['v'];
		$q="SELECT * FROM `user`";
		$run=mysqli_query($con,$q);
	
		$q="SELECT * FROM `user` WHERE `Email`='$v1'";
		$run=mysqli_query($con,$q);

		$row=mysqli_num_rows($run);
		if($row>=1){
			echo "<div style='color: red;'>It is used, Give a Valid one.</div>";
		}
		else{
			echo "";
		}
		
	}

	/*while($row=mysqli_fetch_array($run)){
		//echo $row['Email']."<br>";
		if(isset($_REQUEST['v'])){
			if($v1==$row['Email']){
				echo "<div style='color:red;'>This one is used, Type a valid one</div>";
			}
		}
	}*/

	/*
	$c[]="Bangladesh";
	$c[]="Pakistan";
	$c[]='ban';

	$v1=$_GET['v'];
	//echo $v1." is Typed<br>";
	foreach($c as $cu){
		//echo $cu."<br>";
		if(isset($_REQUEST['v'])){
			if($v1==$cu){
				echo $v1." is Typed<br>";
			}
		}
	}*/
?>