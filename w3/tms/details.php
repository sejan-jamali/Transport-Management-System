<!DOCTYPE html>
<html>
<head>
	<title>settings</title>
	<title>AdminLTE 2 | Starter</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">

  

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body>
	<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="admin1.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>Dashboard</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="admin.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Idiot's</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Settinga</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="details.php"><i class="fa fa-link"></i> <span>Home</span></a></li>
        <li><a href="user_details.php"><i class="fa fa-link"></i> <span>User Details</span></a></li>
        <li><a href="bus_details.php"><i class="fa fa-link"></i> <span>Bus Details</span></a></li>
        <li><a href="driver_details.php"><i class="fa fa-link"></i> <span>Driver Details</span></a></li>
        <li><a href="supervisor_details.php"><i class="fa fa-link"></i> <span>Supervisor Details</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Delay</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Time Delay</a></li>
            <li><a href="#">Cancel Shedule</a></li>
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-link"></i> <span>Mailbox</span></a></li>
        <li><a href="#"><i class="fa fa-link"></i> <span>User Payment</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

	<section class="content container-fluid">
		<div class="container">
		<div class="row">

			<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>New Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Bounce Rate</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		
			
		</div>

		<div class="row">
			<section class="col-lg-7 connectedSortable">
				<div class="nav-tabs-custom">
					<li class="pull-left header"><i class="fa fa-address-book-o"></i>Available Driver</li>
						<div class="container">
     						<div class="row">

      							<div class="col-md-4">
							       <table class="table table-bordered table-striprd">
							            <thead>
							              <tr>
							                <th>Deriver Id</th>
							                <th>Deriver Name</th>
							            </thead>
							            <tbody>
							             <?php
							                include('dbconection.php');
							                $q1="SELECT * FROM `driver`";
							                $q2="SELECT * FROM `supervisor`";
							                $q3="SELECT * FROM `bus`";
							                $run1=mysqli_query($con,$q1);
							                $run2=mysqli_query($con,$q2);
							                $run3=mysqli_query($con,$q3);

							                while($row1=mysqli_fetch_array($run1)){
							                ?>
							                   <tr>
							                    <td><?php echo $row1['d_id'] ?></td>
							                    <td><?php echo $row1['d_name'] ?></td>
							                   </tr>
							                <?php
							                  }
							                ?>
							           </tbody>
							        </table>
      							</div>
							</div>
						</div>
				</div>
			</section>

			<section class="col-lg-5 connectedSortable">
				<div class="nav-tabs-custom">
					<li class="pull-left header"><i class="fa fa-address-card"></i>Available Supervisor</li>
						<div class="container">
     						<div class="row">

      							<div class="col-md-4">
							       <table class="table table-bordered table-striprd">
							            <thead>
							              <tr>
							                <th>Supervisor Id</th>
							                <th>Supervisor Name</th>
							            </thead>
							            <tbody>
							             <?php
							                include('dbconection.php');
							                $q1="SELECT * FROM `driver`";
							                $q2="SELECT * FROM `supervisor`";
							                $q3="SELECT * FROM `bus`";
							                $run1=mysqli_query($con,$q1);
							                $run2=mysqli_query($con,$q2);
							                $run3=mysqli_query($con,$q3);

							                while($row1=mysqli_fetch_array($run2)){
							                ?>
							                   <tr>
							                    <td><?php echo $row1['su_id'] ?></td>
							                    <td><?php echo $row1['su_name'] ?></td>
							                   </tr>
							                <?php
							                  }
							                ?>
							           </tbody>
							        </table>
      							</div>
							</div>
						</div>
				</div>
			</section>

			<section class="col-lg-7 connectedSortable">
				<div class="nav-tabs-custom">
					<li class="pull-left header"><i class="fa fa-bus icon"></i>Available Bus</li>
						<div class="container">
     						<div class="row">

      							<div class="col-md-4">
							       <table class="table table-bordered table-striprd">
							            <thead>
							              <tr>
							                <th>Deriver Id</th>
							                <th>Deriver Name</th>
							            </thead>
							            <tbody>
							             <?php
							                include('dbconection.php');
							                $q1="SELECT * FROM `driver`";
							                $q2="SELECT * FROM `supervisor`";
							                $q3="SELECT * FROM `bus`";
							                $run1=mysqli_query($con,$q1);
							                $run2=mysqli_query($con,$q2);
							                $run3=mysqli_query($con,$q3);

							                while($row1=mysqli_fetch_array($run3)){
							                ?>
							                   <tr>
							                    <td><?php echo $row1['b_no'] ?></td>
							                    <td><?php echo $row1['b_type'] ?></td>
							                   </tr>
							                <?php
							                  }
							                ?>
							           </tbody>
							        </table>
      							</div>
							</div>
						</div>
				</div>
			</section>



		</div>

		<div class="row">
			<div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Latest Members</h3>

                  <div class="box-tools pull-right">
                    <span class="label label-danger">8 New Members</span>
                    
                    </button>
                  </div>
                </div>
			
		</div>
	</div>

	</section>
</div>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>
  <script type="js/bootstrap.min.js"></script>
</body>
</html>