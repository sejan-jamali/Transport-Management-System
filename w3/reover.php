<?php
if(isset($_POST['submit'])){
	$email=$_POST['email'];
	include ('dbconection.php');
	mysql_select_db("user",$con);

	$echk=mysql_query("select * from user where Email='".$email."'");
	$count=mysql_num_rows($echk);
	if($count!=0){
		$random=rand(72891, 92729);
		$new=$random;
		$ep=$new;
		$new=md5($new);
		mysql_query("update user set password='".$new."'where Email='".$email."'");
		$subject="log info";
		$message="Your id information.";
	}
	else{
		echo "Ok";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>recover</title>
</head>
<body>
	<form method="post">
		Your mail:<br><input type="email" name="email" size="30">
		<input type="submit" name="submit">
	</form>


</body>
</html>