<?php
  
  session_start();
  if(isset($_SESSION['aid'])){
    echo "";
  }
  else{
    header('location:log.php');
  }

?>

<!DOCTYPE html>
<html>
<head>
  <title>Buses</title>
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
<!--//end-animate-->


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


<div class="bus-btm">
  <div class="container">
    <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">See Your Ticket</h1>
    <form action="#" method="post">
    <div class="ban-top">
      <div class="bnr-left">
        <label class="inputLabel">Date</label>
        <input type="date" name="date" required>
      </div>
      
      <div class="form-group" style="padding-top: 9%;">
        <button type="submit" name="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save" aria-hidden="true"></span>Done</button>
      </div>
    </div>
    </form>
  </div>
</div>
  
    
  </div>
</div>

<!-- Table -->

  <table class="table table-bordered table-striprd">
            <thead>
              <tr>
                <th width="20">U_id</th>
                <th>S_id</th>
                <th>Starting Point</th>
                <th>Ending Point</th>
                <th>Starting Time</th>
                <th>Seat No.</th>
                <th>Date</th>
                <th>Amount</th>
                <th>Payment</th>
                <th>Status</th>
              </tr>
            </thead>
           <tbody>

          <?php
            include('dbconection.php');
            if(isset($_POST['submit'])){
                      $date_t=$_POST['date'];

                      $id=$_SESSION['aid'];
                      $q1="SELECT * FROM `ticket` WHERE `u_id`='$id'";
                      $run1=mysqli_query($con,$q1);
                      $amo=0;
                      $uid=0;
                      $sid=0;
                      $seat='';
                      while($row1=mysqli_fetch_array($run1)){
                        if($row1['date']==$date_t){
                          $uid=$row1['u_id'];
                          $sid=$row1['s_id'];
                          $start=$row1['starting_point'];
                          $end=$row1['ending_point'];
                          $startingtime=$row1['starting_time'];
                          $seat=$seat.$row1['seat_no'].',';
                          $date=$row1['date'];
                          $amo=$amo+$row1['amount'];
                          $payment=$row1['t_payment'];
                          $pstatus=$row1['payment_status'];
                        }
                      }
                      ?>
                      <tr>
                      <td><?php echo $uid ?></td>
                      <td><?php echo $sid ?></td>
                      <td><?php echo $start ?></td>
                      <td><?php echo $end ?></td>
                      <td><?php echo $startingtime ?></td>
                      <td><?php echo $seat ?></td>
                      <td><?php echo $date ?></td>
                      <td><?php echo $amo ?></td>
                      <td><?php echo $payment ?></td>
                      <td><?php echo $pstatus ?></td>
                     </tr>
                     <?php
                    }
                //}
          ?>

           </tbody>
  </table>
  






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
                        <div class="footer-social text-center">
                            <ul>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
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