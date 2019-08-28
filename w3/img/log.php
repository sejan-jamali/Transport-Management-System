<!DOCTYPE html>
<html>
<head>
  <title>static</title>
  <link rel="stylesheet" type="text/css" href="st.css">
</head>
<body>
<section id="login">
    <div class="container">
      <div class="row">
          <div class="col-xs-12">
              <div class="form-wrap">
                <h1>Login Form</h1>
                    <form action="login.php">
  <div class="imgcontainer">
    <img src="logpic.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
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