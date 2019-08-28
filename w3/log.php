<?php
  
  session_start();
  if(isset($_SESSION['uid'])){
    header('location:tms/admin1.php');
  }
  if(isset($_SESSION['aid'])){
    header('location:account.php');
  }


?>

<!DOCTYPE html>
<html>
<head>
	<title>static</title>
	<link rel="stylesheet" type="text/css" href="log.css">
  <link rel="stylesheet" href="w32.css">
<link rel="stylesheet" href="w3.css">

  <style style="text/css">
.example5 {
 height: 50px;  
 overflow: hidden;
 position: relative;
}
.example5 h1 {
 position: absolute;
 width: 100%;
 height: 100%;
 margin: 0;
 line-height: 50px;
 text-align: left;
 /* Apply animation to this element */  
 -moz-animation: example5 5s linear infinite alternate;
 -webkit-animation: example5 5s linear infinite alternate;
 animation: example5 5s linear infinite alternate;
}
/* Move it (define the animation) */
@-moz-keyframes example5 {
 0%   { -moz-transform: translateX(70%); }
 100% { -moz-transform: translateX(0%); }
}
@-webkit-keyframes example5 {
 0%   { -webkit-transform: translateX(70%); }
 100% { -webkit-transform: translateX(0%); }
}
@keyframes example5 {
 0%   { 
 -moz-transform: translateX(70%); /* Firefox bug fix */
 -webkit-transform: translateX(70%); /* Firefox bug fix */
 transform: translateX(70%);        
 }
 100% { 
 -moz-transform: translateX(0%); /* Firefox bug fix */
 -webkit-transform: translateX(0%); /* Firefox bug fix */
 transform: translateX(0%); 
 }
}
</style>
</head>
<body>
  <div class="w3-bar w3-cyan">
  <a href="page1copy.php" class="w3-bar-item w3-button">Home</a>
</div>
<section id="login">
    <div class="container">
    	<div class="row">
    	    <div class="col-xs-12">
        	    <div class="form-wrap">
                <div class="example5">
              <h1>Please! Log In</h1>
              </div>
                <h1>Login Form</h1>
                    <form action="#" method="post">
  <div class="imgcontainer">
    <img src="logpic.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="name" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit" name="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:rgb(7, 123, 127);">
    <p>Forget <a href="#" class="psw">Password</a></p>
  </div>
</form>
                    <hr>
        	    </div>
    		</div> <!-- /.col-xs-12 -->
    	</div> <!-- /.row -->
    </div> <!-- /.container -->
</section>


</body>
</html>

<?php
  include('dbconection.php');

  if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $password = $_POST['password'];

    $qry = "SELECT * FROM `admin` WHERE a_name = '$name' AND a_password = '$password'";
    $qry1 = "SELECT * FROM `user` WHERE u_name='$name' AND u_password = '$password'";


    $run=mysqli_query($con,$qry);
    $run1=mysqli_query($con,$qry1);

    $row=mysqli_num_rows($run);
    $row1=mysqli_num_rows($run1);

    if($row>=1){
      $data=mysqli_fetch_assoc($run);
      $id=$data['a_id'];

      $_SESSION['uid']=$id;
      header('location:tms/admin1.php');      
    }

    else if($row1>=1){
      $data=mysqli_fetch_assoc($run1);
      $id=$data['u_id'];

      $_SESSION['aid']=$id;
      header('location:account.php');
    }

    else{
      ?>
      <script>
        alert("wrong pass & name");
        window.open('log.php','_self');
      </script>
      <?php
      echo $name." ".$password;
    }

  }

?>