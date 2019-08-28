<?php
  
  session_start();
  if(isset($_SESSION['aid'])){
    include('dbconection.php');
    $id=$_GET['id'];
    $uid=$_SESSION['aid'];
    //echo $id." User id:".$uid;
    $q1="SELECT * FROM `bus` WHERE `b_id`='$id'";
    $run=mysqli_query($con,$q1);
    $data=mysqli_fetch_assoc($run);
  }
  else{
    header('location:log.php');
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hired Bus</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="slide/css/style.css" rel="stylesheet">
    <link href="slide/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="rg.css">
    
    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="slide/css/color/green.css">
    
    
    
    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="slide/css/color/green.css" title="green">
    <link rel="stylesheet" type="text/css" href="slide/css/color/light-red.css" title="light-red">
    <link rel="stylesheet" type="text/css" href="slide/css/color/blue.css" title="blue">
    <link rel="stylesheet" type="text/css" href="slide/css/color/light-blue.css" title="light-blue">
    <link rel="stylesheet" type="text/css" href="slide/css/color/yellow.css" title="yellow">
    <link rel="stylesheet" type="text/css" href="slide/css/color/light-green.css" title="light-green">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="slide/css/my1.css">
    



  <link rel="stylesheet" type="text/css" href="bootstrap.css">
  <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
  <script src="js/jquery-1.12.0.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<!--animate-->
  <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
  <script src="js/wow.min.js"></script>
  <script>
     new WOW().init();
  </script>
</head>

<body>
  <nav class="navbar navbar-dark bg-primary">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
        <li><a href="page1copy.php">Home</a></li>
         <li><a href="account.php">Account</a></li>
        <li><a href="statusTicket.php">Ticket Status</a></li>
        <li><a href="statusHire.php">Hired Status</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="u_logout.php">Logout</a></li>
      </ul>
      
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1>Hired Bus<a href="account.php" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>Back</a></h1>
          <br>
          <form action="#" method="post" class="post">
              

              <div class="form-group">
                <label for="id">Starting Point</label>
                <input type="text" id="spoint" name="spoint" class="form-control" required>
              </div>

              <div class="form-group">
                <label for="id">Ending Point</label>
                <input type="text" id="epoint" name="epoint" class="form-control" required>
              </div>

              <div class="form-group">
                <label for="id">Starting time</label>
                <input type="time" id="stime" name="stime" class="form-control" required>
              </div>

              <div class="form-group">
                <label for="id">Date</label>
                <input type="date" id="stime" name="hdate" class="form-control" required>
              </div>     

              <div class="form-group">
                <label for="id">Payment</label>
                <select name="hpay" class="form-control">
                  <option value="Hand to Hand">Hand to Hand</option>
                  <option value="BKash">BKash</option>
                </select>
              </div>

              <div class="form-group">
                <div class="row">
                  <div class="col-sm-12">
                    <label for="id">Bkash No.</label><br>
                  </div>
                </div>
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
                            <div class="col-sm-8" class="radio-inline" style="padding-top: 1.5%;">
                                    <input type="number" name="digit" class="form-control" placeholder="Enter another 8 digits" required>
                            </div>
                </div>
              </div>

      <button type="submit" name="submit" class="btn btn-primary"><span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span>Confirm</button>
    </form>
  </div>
</div>

  
<?php
include 'footer.php';
?>

<?php
    include('dbconection.php');
    if(isset($_POST['submit'])){
      
      $uid=$_SESSION['aid'];
      $bid=$_GET['id'];
      $hsp=$_POST['spoint'];
      $hep=$_POST['epoint'];
      $hst=$_POST['stime'];
      $hd=$_POST['hdate'];
      $amount=500;
      $hbno=$data['b_no'];
      $hpay=$_POST['hpay'];
      //$hbkashno=$_POST['bkno'];
      $hstatus="Pending";

      $select=$_POST['select'];
      $digit=$_POST['digit'];

      $phone="$select"."$digit";
      $hbkashno=$phone;


     // echo $uid." ".$bid." ".$hep." ".$hst." ".$hd." ".$amount." ".$hbno." ".$hpay." ".$hbkashno;

      $q="INSERT INTO `hired_bus`(`u_id`, `b_id`, `h_starting_point`, `h_ending_point`, `h_startting_time`, `h_bus_no`, `h_date`, `amount`, `h_payment`, `h_bkash_no`, `h_payment_status`) VALUES ('$uid','$bid','$hsp','$hep','$hst','$hbno','$hd','$amount','$hpay','$hbkashno','$hstatus')";


      $urun=mysqli_query($con,$q);
      if($urun==true){
        ?>
        <script>
          alert('Request Successful.');
          window.open('account.php','_self');
        </script>
        <?php
      }
      else{
        echo "Why problem";

      }
      

    }

?>


<section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h3>Contact With Us</h3>
                        <p class="white-text">Thanks for using our service</p>
                    </div>
                </div>
            </div>
            
        <footer class="style-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <span class="copyright">Copyright &copy; <a href="">Lite Coder</a>Future</span>
                    </div>
                    
                    <div class="col-md-4 col-xs-12">
                        <div class="footer-link">
                            <ul class="pull-right">
                                <li><a href="#">Privacy Policy</a>
                                </li>
                                <li><a href="#">Terms of Use</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>

<!-- <div id="loader">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
 -->






</body>
</html>