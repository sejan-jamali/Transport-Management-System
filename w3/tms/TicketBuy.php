<?php
    include('dbconection.php');
    $id=$_GET['id'];
    $q="SELECT * FROM `schedule` WHERE `s_id`='$id'";
    $run=mysqli_query($con,$q);
    $data=mysqli_fetch_assoc($run);
?>
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

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
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

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="admin1.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>ADMIN</span>
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
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          
          <!-- Tasks Menu -->
          
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="admin.png" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Idiot's</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="admin.png" class="img-circle" alt="User Image">

                <p>
                  Lite Coder - Web Developer's
                  <small>Team since March. 2015</small>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
      
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
        <li><a href="admin1.php"><i class="fa fa-link"></i> <span>Home</span></a></li>
        <li><a href="TicketDetails.php"><i class="fa fa-link"></i> <span>Ticket Status</span></a></li>
        <li><a href="HiredDetails.php"><i class="fa fa-link"></i> <span>Request for Hiring</span></a></li>
        <li class="active"><a href="ScheduleDetails.php"><i class="fa fa-link"></i> <span>Schedule</span></a></li>
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
    
    <!-- Main content -->
    <section class="content container-fluid">

      <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1>Buy Ticket<a href="ScheduleDetails.php" class="btn btn-info pull-right"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>Back</a></h1>
          <br>
          <form action="#" method="post" class="post">
              <!--- <div class="form-group">
                <label for="id">Starting Point</label>
                <input type="text" id="spoint" value="<?php echo $data['starting_point'] ?>" name="spoint" class="form-control" required>
              </div>

              <div class="form-group">
                <label for="id">Ending Point</label>
                <input type="text" id="epoint" value="<?php echo $data['ending_point'] ?>" name="epoint" class="form-control" required>
              </div>

              <div class="form-group">
                <label for="id">Starting time</label>
                <input type="time" id="stime" value="<?php echo $data['starting_time'] ?>" name="stime" class="form-control" required>
              </div>

              <div class="form-group">
                <label for="id">Date</label>
                <input type="date" id="stime" value="<?php echo $data['s_date'] ?>" name="sdate" class="form-control" required>
              </div>  

              <div class="form-group">
                <label for="id">Bus No.</label>
                <input type="text" id="stime" value="<?php echo $data['bus_no'] ?>" name="bno" class="form-control" required>
              </div> -->

              <div class="form-group">
                <label for="id">Seat No.</label>
                <input type="text" id="stime" name="se_no" class="form-control" placeholder="Select a sit" required>
              </div>    

              <div class="form-group">
                <label for="id">Tick Payment</label>
                <select name="tpay" class="form-control">
                  <option value="Hand to Hand">Hand to Hand</option>
                  <option value="BKash">BKash</option>
                </select>
              </div>

              <div class="form-group">
                <label for="id">Ticket Bkash No.</label>
                <input type="number" id="bkno" name="bkno" class="form-control" placeholder="Enter BKash Number">
              </div>

      <button type="submit" name="submit" class="btn btn-primary"><span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span>Buy</button>
    </form>
<?php
include 'footer.php';
?>

<?php
    if(isset($_POST['submit'])){
      
      $sid=$data['s_id'];
      $tsp=$data['starting_point'];
      $tep=$data['ending_point'];
      $tst=$data['starting_time'];
      $td=$data['s_date'];
      $tsno=$_POST['se_no'];
      $amount=$data['rate_per_ticket'];
      $tbno=$data['bus_no'];
      $tpay=$_POST['tpay'];
      $tbkashno=$_POST['bkno'];
      $pstatus="Pending";

      //echo $sid." ".$tsp." ".$tep." ".$tst." ".$td." ".$tsno." ".$amount." ".$tbno." ".$tpay." ".$tbkashno;

      $q="INSERT INTO `ticket`(`s_id`, `starting_point`, `ending_point`, `starting_time`, `date`, `seat_no`, `amount`, `bus_no`, `t_payment`, `t_bkash_no`, `payment_status`) VALUES ('$sid','$tsp','$tep','$tst','$td','$tsno','$amount','$tbno','$tpay','$tbkashno','$pstatus')";

      $urun=mysqli_query($con,$q);
      if($urun==true){
        ?>
        <script>
          alert('Update Successful.');
          window.open('TicketDetails.php','_self');
        </script>
        <?php
      }
      else{
        ?>
        <script>
          alert('Update fail.');
          window.open('ScheduleDetails.php','_self');
        </script>
        <?php
      }

    }

?>







    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>
  <script type="js/bootstrap.min.js"></script>


</body>
</html>



  