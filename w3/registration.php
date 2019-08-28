<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
  <link rel="stylesheet" type="text/css" href="rg.css">
</head>
<body>
	
<section id="reg">
  <div class="container">
            <form action="#" method="POST" class="form-horizontal post" role="form">
                <h2>Registration Form</h2>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Full Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" name="name" placeholder="Full Name" class="form-control" autofocus required>
                        <span class="help-block">Last Name, First Name, eg.: IIUC STUDENT</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" id="user1" name="email" placeholder="Email" onkeyup="chng(this.value)" class="form-control" required>
                        <span id="demo"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" id="password" name="pass" placeholder="Password" class="form-control" required>
                    </div>
                </div>
                
                <!--- change -->
                <div class="form-group">
                    <label class="control-label col-sm-3">Phone No.</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <select id="company" name="select" class="form-control" required>
                                    <option value="+88018">+88018</option>
                                    <option value="+88019">+88019</option>
                                    <option value="+88016">+88016</option>
                                    <option value="+88011">+88011</option>
                                    <option value="+88015">+88015</option>
                                    <option value="+88017">+88017</option>
                                </select>
                            </div>
                            <div class="col-sm-8" class="radio-inline">
                                    <input type="number" name="digit" class="form-control" placeholder="Enter another 8 digits" required>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
                <!---<div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">I accept <a href="#">terms</a>
                            </label>
                        </div>
                    </div>
                </div>/.form-group -->
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                </div>
            </form> <!-- /form -->
        </div> <!-- ./container -->
</section>

<script type="text/javascript">
        function chng(user1){
            //var user=document.getElementById("user").value;
            var x=new XMLHttpRequest();
            x.onreadystatechange=function(){
                if(this.readyState==4 && this.status==200){
                    document.getElementById("demo").innerHTML=this.responseText;
                }
            }
            x.open("GET","processAjax.php?v="+user1,true);
            x.send();
        }
</script>

  
</body>
</html>


<?php
    include 'dbconection.php';

    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $select=$_POST['select'];
        $digit=$_POST['digit'];

        $phone="$select"."$digit";
        echo $name." ".$email." ".$pass." ".$phone;

        $q="INSERT INTO `user`(`u_name`, `Email`, `u_password`, `u_phone_no`) VALUES ('$name','$email','$pass','$phone')";

        //$r=mysqli_query($con,$q);
        $run=mysqli_query($con,$q);

        if($run==true){
            ?>
            <script>
                alert('Data insert successfully.');
                window.open('page1copy.php','_self');
            </script>
            <?php
        }
        else{
            ?>
            <script>
                alert('Data insert fail.');
                window.open('registration.php','_self');
            </script>
            <?php
        }

    }

?>
