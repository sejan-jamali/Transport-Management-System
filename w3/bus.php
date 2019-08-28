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
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
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

<!--div class="banner">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">Buy a Ticket or Hire a bus</h1>
	</div>
</div-->

<div class="bus-btm">
	<div class="container">
		<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Fill Up The Form</h1>
    <form action="#" method="post">
		<div class="ban-top">
			<div class="bnr-left">
				<label class="inputLabel">From</label>
				<input type="text" name="sp" placeholder="start point" required>
			</div>
			<div class="bnr-left">
				<label class="inputLabel">To</label>
				<input type="text" name="ep" placeholder="ending point" required>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="ban-bottom">
			<div class="bnr-right">
				<label class="inputLabel">Date of Journey</label>
				<input type="date" id="stime" name="date" class="form-control" required>
			</div>
			<div class="bnr-right" style="padding-left: 4%;">
				<label class="inputLabel">Date of Return<span class="opt">&nbsp;(Optional)</span></label>
				<input type="date" id="stime" name="datee" class="form-control">
			</div>
			<div class="form-group" style="padding-top: 9%;">
				<button type="submit" name="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save" aria-hidden="true"></span>Done</button>
			</div>
    </form>
  </div>
</div>
	
		
	</div>
</div>

<!--here -->
<?php
	include('dbconection.php');
	/*if(isset($_POST['submit'])){
		$d=$_POST['date'];
		$q="SELECT * FROM `schedule` WHERE `s_date`='$d'";
	//}

	//$da=date("Y-m-d");
	//$q="SELECT * FROM `schedule` WHERE `s_date`='$da'";
	//$q="SELECT * FROM `schedule`";
	$run=mysqli_query($con,$q);

	$no=1;
	while($row=mysqli_fetch_array($run)){*/
		if(isset($_POST['submit'])){
						$d=$_POST['date'];
						$sp=$_POST['sp'];
						$ep=$_POST['ep'];
						//echo $d;

						$q="SELECT * FROM `schedule` WHERE `s_date`='$d' AND `starting_point`='$sp'";
				        //$q="SELECT * FROM `schedule`";
				        $run=mysqli_query($con,$q);

				        $no=1;
				        while($row=mysqli_fetch_array($run)){
				        	$r=$row['ending_point'];
				        	if($r==$ep){
?>

<div class="bus-midd wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">
	<div class="container">
	<!--- ul-first  ---->
	
		<ul class="first">
			<li class="trav">
				<div class="bus-ic">
					<img src="images/bus.png" class="img-responsive" alt="">
				</div>
				<div class="bus-txt">
					<h4><?php echo $row['starting_point'] ?></h4>
					<p>A/C Sleeper </p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="dept">
				<div class="bus-ic1">
					<i class="fa fa-clock-o"></i>
				</div>
				<div class="bus-txt1">
					<h4><?php echo $row['starting_time'] ?></h4>
					<p>Duration</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="arriv">
				<div class="bus-txt2">
					<h4><?php echo $row['ending_point'] ?></h4>
					<p>10:00 Hrs</p>
				</div>
			</li>
			<li class="seat">
				<div class="bus-ic3">
					<img src="images/seat.png" class="img-responsive" alt="">
				</div>
				<div class="bus-txt3">
					<h4><?php echo $row['s_date'] ?></h4>
					<h5>Bus No.:<br>
						<?php echo $row['bus_no'] ?>
					</h5>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="fare">
				<div class="bus-txt4">
					<h5><?php echo $row['rate_per_ticket'] ?></h4>
					<a href="s.php?id=<?php echo $row['s_id'] ?>"" class="view">Buy Ticket</a>
						

				</div>
			</li>
				<div class="clearfix"></div>
		</ul>
    </div>
</div>
<?php
		}
   }
}
   else{
	//$q="SELECT * FROM `schedule`";
	$da=date("Y-m-d");
    $q="SELECT * FROM `schedule` WHERE `s_date`='$da'";
    $run=mysqli_query($con,$q);
	$no=1;
	
	while($row=mysqli_fetch_array($run)){


	?>

<div class="bus-midd wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">
	<div class="container">
	<!--- ul-first  ---->
	
		<ul class="first">
			<li class="trav">
				<div class="bus-ic">
					<img src="images/bus.png" class="img-responsive" alt="">
				</div>
				<div class="bus-txt">
					<h4><?php echo $row['starting_point'] ?></h4>
					<p>A/C Sleeper </p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="dept">
				<div class="bus-ic1">
					<i class="fa fa-clock-o"></i>
				</div>
				<div class="bus-txt1">
					<h4><?php echo $row['starting_time'] ?></h4>
					<p>Duration</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="arriv">
				<div class="bus-txt2">
					<h4><?php echo $row['ending_point'] ?></h4>
					<p>10:00 Hrs</p>
				</div>
			</li>
			<li class="seat">
				<div class="bus-ic3">
					<img src="images/seat.png" class="img-responsive" alt="">
				</div>
				<div class="bus-txt3">
					<h4><?php echo $row['s_date'] ?></h4>
					<h5>Bus No.:<br>
						<?php echo $row['bus_no'] ?>
					</h5>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="fare">
				<div class="bus-txt4">
					<h5><?php echo $row['rate_per_ticket'] ?></h4>
					<a href="s.php?id=<?php echo $row['s_id'] ?>"" class="view" style='color: #ffffff;'>Buy Ticket</a>
						

				</div>
			</li>
				<div class="clearfix"></div>
		</ul>
    </div>
</div>



	<?php

   }
}
?>

<!--
<div class="bus-midd wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">
	<div class="container">
	
		<ul class="first">
			<li class="trav">
				<div class="bus-ic">
					<img src="images/bus.png" class="img-responsive" alt="">
				</div>
				<div class="bus-txt">
					<h4>Hanif</h4>
					<p>-</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="dept">
				<div class="bus-ic1">
					<i class="fa fa-clock-o"></i>
				</div>
				<div class="bus-txt1">
					<h4><a href="#">08:10 PM</a></h4>
					<p>Duration</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="arriv">
				<div class="bus-txt2">
					<h4><a href="#">6:10 AM</a></h4>
					<p>10:00 Hrs</p>
				</div>
			</li>
			<li class="seat">
				<div class="bus-ic3">
					<img src="images/seat.png" class="img-responsive" alt="">
				</div>
				<div class="bus-txt3">
					<h4>4 seats</h4>
					<p>Window 4</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="fare">
				<div class="bus-txt4">
					<h5>BDT 900</h4>
					<a href="s.php" class="view">View Seats</a>
						

				</div>
			</li>
				<div class="clearfix"></div>
		</ul>

</div>
</div>


<div class="bus-midd wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">
	<div class="container">
	
		<ul class="first">
			<li class="trav">
				<div class="bus-ic">
					<img src="images/bus.png" class="img-responsive" alt="">
				</div>
				<div class="bus-txt">
					<h4>Shamoly</h4>
					<!--- <p>A/C Sleeper (1+1)</p> 
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="dept">
				<div class="bus-ic1">
					<i class="fa fa-clock-o"></i>
				</div>
				<div class="bus-txt1">
					<h4><a href="#">08:10 PM</a></h4>
					<p>Duration</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="arriv">
				<div class="bus-txt2">
					<h4><a href="#">6:10 AM</a></h4>
					<p>10:00 Hrs</p>
				</div>
			</li>
			<li class="seat">
				<div class="bus-ic3">
					<img src="images/seat.png" class="img-responsive" alt="">
				</div>
				<div class="bus-txt3">
					<h4>4 seats</h4>
					<p>Window 4</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="fare">
				<div class="bus-txt4">
					<h5>BDT 900</h4>
					<a href="s.php" class="view">View Seats</a>
						

				</div>
			</li>
				<div class="clearfix"></div>
		</ul>
</div>
</div>

<div class="bus-midd wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">
	<div class="container">
	
		<ul class="first">
			<li class="trav">
				<div class="bus-ic">
					<img src="images/bus.png" class="img-responsive" alt="">
				</div>
				<div class="bus-txt">
					<h4>Shohagh Paribahan</h4>
					<!-- <p>A/C Sleeper (1+1)</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="dept">
				<div class="bus-ic1">
					<i class="fa fa-clock-o"></i>
				</div>
				<div class="bus-txt1">
					<h4><a href="#">08:10 PM</a></h4>
					<p>Duration</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="arriv">
				<div class="bus-txt2">
					<h4><a href="#">6:10 AM</a></h4>
					<p>10:00 Hrs</p>
				</div>
			</li>
			<li class="seat">
				<div class="bus-ic3">
					<img src="images/seat.png" class="img-responsive" alt="">
				</div>
				<div class="bus-txt3">
					<h4>4 seats</h4>
					<p>Window 4</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="fare">
				<div class="bus-txt4">
					<h5>BDT 900</h4>
					<a href="s.php" class="view">View Seats</a>
						

				</div>
			</li>
				<div class="clearfix"></div>
		</ul>
</div>
</div>


<div class="bus-midd wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">
	<div class="container">
	<!--- ul-first  
	
		<ul class="first">
			<li class="trav">
				<div class="bus-ic">
					<img src="images/bus.png" class="img-responsive" alt="">
				</div>
				<div class="bus-txt">
					<h4>Soudia Coach Service</h4>
					<p>A/C Sleeper (1+1)</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="dept">
				<div class="bus-ic1">
					<i class="fa fa-clock-o"></i>
				</div>
				<div class="bus-txt1">
					<h4><a href="#">08:10 PM</a></h4>
					<p>Duration</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="arriv">
				<div class="bus-txt2">
					<h4><a href="#">6:10 AM</a></h4>
					<p>10:00 Hrs</p>
				</div>
			</li>
			<li class="seat">
				<div class="bus-ic3">
					<img src="images/seat.png" class="img-responsive" alt="">
				</div>
				<div class="bus-txt3">
					<h4>4 seats</h4>
					<p>Window 4</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="fare">
				<div class="bus-txt4">
					<h5>BDT 900</h4>
					<a href="s.php" class="view">View Seats</a>
						

				</div>
			</li>
				<div class="clearfix"></div>
		</ul>
</div>
</div>


<div class="bus-midd wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">
	<div class="container">
	<!--- ul-first  
	
		<ul class="first">
			<li class="trav">
				<div class="bus-ic">
					<img src="images/bus.png" class="img-responsive" alt="">
				</div>
				<div class="bus-txt">
					<h4>Star Line Special Ltd</h4>
					<p>A/C Sleeper (1+1)</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="dept">
				<div class="bus-ic1">
					<i class="fa fa-clock-o"></i>
				</div>
				<div class="bus-txt1">
					<h4><a href="#">08:10 PM</a></h4>
					<p>Duration</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="arriv">
				<div class="bus-txt2">
					<h4><a href="#">6:10 AM</a></h4>
					<p>10:00 Hrs</p>
				</div>
			</li>
			<li class="seat">
				<div class="bus-ic3">
					<img src="images/seat.png" class="img-responsive" alt="">
				</div>
				<div class="bus-txt3">
					<h4>4 seats</h4>
					<p>Window 4</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="fare">
				<div class="bus-txt4">
					<h5>BDT 900</h4>
					<a href="s.php" class="view">View Seats</a>
						

				</div>
			</li>
				<div class="clearfix"></div>
		</ul>

</div>
</div>
<div class="bus-midd wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">
	<div class="container">
	<!--- ul-first  
	
		<ul class="first">
			<li class="trav">
				<div class="bus-ic">
					<img src="images/bus.png" class="img-responsive" alt="">
				</div>
				<div class="bus-txt">
					<h4>Protinidhi Paribahan</h4>
					<!-- <p>A/C Sleeper (1+1)</p> 
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="dept">
				<div class="bus-ic1">
					<i class="fa fa-clock-o"></i>
				</div>
				<div class="bus-txt1">
					<h4><a href="#">08:10 PM</a></h4>
					<p>Duration</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="arriv">
				<div class="bus-txt2">
					<h4><a href="#">6:10 AM</a></h4>
					<p>10:00 Hrs</p>
				</div>
			</li>
			<li class="seat">
				<div class="bus-ic3">
					<img src="images/seat.png" class="img-responsive" alt="">
				</div>
				<div class="bus-txt3">
					<h4>4 seats</h4>
					<p>Window 4</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="fare">
				<div class="bus-txt4">
					<h5>BDT 900</h4>
					<a href="s.php" class="view">View Seats</a>
						

				</div>
			</li>
				<div class="clearfix"></div>
		</ul>
</div>
</div>


<div class="bus-midd wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">
	<div class="container">
	<!--- ul-first  
	
		<ul class="first">
			<li class="trav">
				<div class="bus-ic">
					<img src="images/bus.png" class="img-responsive" alt="">
				</div>
				<div class="bus-txt">
					<h4>Tisha Group</h4>
					<p>A/C Sleeper (1+1)</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="dept">
				<div class="bus-ic1">
					<i class="fa fa-clock-o"></i>
				</div>
				<div class="bus-txt1">
					<h4><a href="#">08:10 PM</a></h4>
					<p>Duration</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="arriv">
				<div class="bus-txt2">
					<h4><a href="#">6:10 AM</a></h4>
					<p>10:00 Hrs</p>
				</div>
			</li>
			<li class="seat">
				<div class="bus-ic3">
					<img src="images/seat.png" class="img-responsive" alt="">
				</div>
				<div class="bus-txt3">
					<h4>4 seats</h4>
					<p>Window 4</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="fare">
				<div class="bus-txt4">
					<h5>BDT 900</h4>
					<a href="s.php" class="view">View Seats</a>
						

				</div>
			</li>
				<div class="clearfix"></div>
		</ul>
</div>
</div> -->


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