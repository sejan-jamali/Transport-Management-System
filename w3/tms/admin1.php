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
  <title>TMS Admin</title>
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

   <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="bower_components/fullcalendar/dist/fullcalendar.min.css">
  <link rel="stylesheet" href="bower_components/fullcalendar/dist/fullcalendar.print.min.css" media="print">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  
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
        <li class="header">Settings</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="admin1.php"><i class="fa fa-link"></i> <span>Home</span></a></li>
        <li><a href="TicketDetails.php"><i class="fa fa-link"></i> <span>Ticket Status</span></a></li>
        <li><a href="HiredDetails.php"><i class="fa fa-link"></i> <span>Request for Hiring</span></a></li>
        <li><a href="ScheduleDetails.php"><i class="fa fa-link"></i> <span>Schedule</span></a></li>
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

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
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
          <li class="pull-left header"><i class="fa fa-address-card"></i>Quick Submission</li>
            <div class="container">
                <div class="row">

                    <div class="col-md-4">
                     
                     <form action="#" method="post">
                         <div class="ban-top">
                            <div class="bnr-left">
                                <label class="inputLabel">User Id</label>
                                      <input type="text" name="uuid" placeholder="Enetr User Id" class="form-control" required>
                            </div>
                           <div class="bnr-left">
                             <label class="inputLabel">Schedule Id </label>
                             <input type="text" name="ssid" placeholder="Enter Schedule Id" class="form-control" required>
                           </div>
                           <div class="clearfix"></div>
                     </div>
                     <div class="ban-bottom">
                       <div class="bnr-right">
                         <label class="inputLabel">Amount</label>
                         <input type="number" name="utk" name="Amounttaka" placeholder="Enetr amount" class="form-control" required>
                       </div>
                          <div class="form-group" style="padding-top: 9%;">
                         <button type="submit" name="usubmit" class="btn btn-primary"><span class="glyphicon glyphicon-save" aria-hidden="true"></span>                 Done</button>
                       </div>
                     </form>

                     <?php
                          include('dbconection.php');
                          if(isset($_POST['usubmit'])){
                            $id=$_POST['uuid'];
                            $sid=$_POST['ssid'];
                            $tk=$_POST['utk'];

                            $q="SELECT * FROM `ticket` WHERE `u_id`='$id' AND `s_id`='$sid'";
                            $run=mysqli_query($con,$q);
                            $num=mysqli_num_rows($run);
                            $row1=mysqli_fetch_assoc($run);
                            $run=mysqli_query($con,$q);
                            $a1=$row1['amount'];
                            $div=$tk/$a1;
                            echo $num.'  '.$div.'<br>';
                            if($num==$div){
                              while($row=mysqli_fetch_array($run)){
                                $ps=$row['payment_status'];
                                $sno=$row['seat_no'];
                                //echo $ps." ".$sno.'<br>';
                                $qu="UPDATE `ticket` SET `payment_status`='Confirmed' WHERE `seat_no`='$sno'";
                                $urun=mysqli_query($con,$qu);
                              }
                            }
                            

                            //$q="UPDATE `ticket` SET `payment_status`='$pstatus' WHERE `t_id`='$id'";

                            //$urun=mysqli_query($con,$qu);
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
                                window.open('admin1.php','_self');
                              </script>
                              <?php
                            }

                        }                       

                    ?>

                    </div>
              </div>
            </div>
        </div>
      </section>

      <section class="col-lg-5 connectedSortable">
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

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>