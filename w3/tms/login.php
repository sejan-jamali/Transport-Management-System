<?php
	
	session_start();
	if(isset($_SESSION['uid'])){
		header('location:admin_dashbord.php');
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="bootstrap/css/design.css">
</head>
<body>
	<div class="loginbox">
		<img src="image/user.png" class="picture">
		<h2 class="here">Log in here</h2>
		<form action='login.php' method='post'>
			<p>Name</p>
			<input type="text" name="name" placeholder="Enter name" required>
			<p>Password</p>
			<input type="password" name="password" placeholder="******" required>
			<input type="submit" name="submit" value="Sign In">
			<a class="forget" href="#">User Login</a><br>
			<a class="forget" href="userRegistration.php">User Registration</a>
		</form>
	</div>
</body>
</html>

<?php
	include('dbconection.php');

	if(isset($_POST['submit'])){
		
		$name = $_POST['name'];
		$password = $_POST['password'];

		$qry = "SELECT * FROM `admin` WHERE a_name = '$name' AND a_password = '$password'";

		$run=mysqli_query($con,$qry);
		$row=mysqli_num_rows($run);

		if($row<1){

			?>
			<script>
				alert("wrong pass & name");
				window.open('login.php','_self');
			</script>
			<?php
			echo $name." ".$password;

		}
		else{
			$data=mysqli_fetch_assoc($run);
			$id=$data['a_id'];

			$_SESSION['uid']=$id;
			header('location:admin_dashbord.php');
		}

	}

?>