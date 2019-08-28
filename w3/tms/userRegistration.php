<?php
  
  session_start();
  if(isset($_SESSION['uid'])){
    echo "";
  }
  else{
    header('location:../log.php');
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User Registration</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
      	<h1>User Registration Form<a href="login.php" class="btn btn-info pull-right"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>Back</a></h1>
          <br>
          <form action="#" method="POST" class="post">

              <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Enter Your Name" required>
              </div>

              <div class="form-group">
                <label for="password">Your Password</label>
                <input type="password" id="password" name="pass" class="form-control" placeholder="Enter Your Password" required>
              </div>

              <div class="form-group">
                <label for="phone">Your Phone</label>
                <input type="number" id="phone" name="phone" class="form-control" placeholder="Enter Your Phone" required>
              </div>

      <button type="submit" name="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save" aria-hidden="true"></span>Create Profile</button>
    </form>
<?php
include 'footer.php';
?>






<?php
	include 'dbconection.php';

	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$pass=$_POST['pass'];
		$phone=$_POST['phone'];

		$q="INSERT INTO `user`(`u_name`, `u_password`, `u_phone_no`) VALUES ('$name','$pass','$phone')";

		//$r=mysqli_query($con,$q);
		$run=mysqli_query($con,$q);

		if($run==true){
			?>
			<script>
				alert('Data insert successfully.');
				window.open('login.php','_self');
			</script>
			<?php
		}
		else{
			?>
			<script>
				alert('Data insert fail.');
				window.open('userRegistration.php','_self');
			</script>
			<?php
		}

	}

?>
