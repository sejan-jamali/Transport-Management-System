<?php
  
  session_start();
  if(isset($_SESSION['aid'])){
    include('dbconection.php');
    $id=$_GET['id'];
    $uid=$_SESSION['aid'];
    echo $id." User id:".$uid;
    $q1="SELECT * FROM `schedule` WHERE `s_id`='$id'";
    $q="SELECT * FROM `ticket` WHERE `s_id`='$id'";
    $run=mysqli_query($con,$q1);
    $data=mysqli_fetch_assoc($run);
    $bu=$data['bus_no'];
    $sdate=$data['s_date'];
    $stime=$data['starting_time'];

  }
  else{
    header('location:log.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Seat Booking</title>
	<link rel="stylesheet" type="text/css" href="st1.css">
  <link rel="stylesheet" type="text/css" href="w32.css">
</head>
<body bgcolor="#257d91">
	<form action="#" method="post" class="post">
		<div class="w3-container">
    <div class="w3-bar w3-light-#257d91">
  <a href="account.php" class="w3-bar-item w3-button">Home</a>
  <a href="bus.php" class="w3-bar-item w3-button">Back</a>
  <div class="w3-dropdown-hover">
      <button class="w3-button">Dropdown</button>
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="#" class="w3-bar-item w3-button">Layout 1</a>
        <a href="#" class="w3-bar-item w3-button">Layout 2</a>
        <a href="#" class="w3-bar-item w3-button">Layout 3</a>
      </div>
    </div>
  </div>
  <!-- <div class="w3-container">
  	<div class="w3-display-middle w3-padding"> -->

<div class="ticket" >
  <h1>Select Your Seat</h1>
<table>
<?php
  date_default_timezone_set('Asia/Dhaka');
  $da=date("Y-m-d");
  $t3=date('H:i');

  // if($sdate>$da){
  //   echo "S small";
  // }
  // else{
  //   echo "Cant compare";
  // }
  // echo "<br>";
  // if($stime>=$t3){
  //   echo "s big";
  // }
  // else{
  //   echo "small";
  // }



  if($bu=='Ka 10-12341'){
    if($sdate==$da){
      if($stime>=$t3)
        include 's5634.php';
      else
        include 'sAll.php';
    }
    else if($sdate>$da){
      include 's5634.php';
    }
    else{
      include 'sAll.php';
    }
  }

  if($bu=='Ka 10-12342'){
    if($sdate==$da){
      if($stime>=$t3)
        include 's5634.php';
      else
        include 'sAll.php';
    }
    else if($sdate>$da){
      include 's5634.php';
    }
    else{
      include 'sAll.php';
    }
  }

  else if($bu=='Cha 11-00124'){
    if($sdate==$da){
      if($stime>=$t3)
        include 's5634.php';
      else
        include 'sAll.php';
    }
    else if($sdate>$da){
      include 's5634.php';
    }
    else{
      include 'sAll.php';
    }
  }

  else if($bu=='Cha 11-00125'){
    if($sdate==$da){
      if($stime>=$t3)
        include 's5634.php';
      else
        include 'sAll.php';
    }
    else if($sdate>$da){
      include 's5634.php';
    }
    else{
      include 'sAll.php';
    }
  }



  else if($bu=='Cha 11-00123'){
    if($sdate==$da){
      if($stime>=$t3)
        include 's5678.php';
      else
        include 'sAll.php';
    }
    else if($sdate>$da){
      include 's5678.php';
    }
    else{
      include 'sAll.php';
    }
  }

else if($bu=='Ka 11-10101'){
    if($sdate==$da){
      if($stime>=$t3)
        include 's5678.php';
      else
        include 'sAll.php';
    }
    else if($sdate>$da){
      include 's5678.php';
    }
    else{
      include 'sAll.php';
    }
  }
?>


</table>


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
 
</div>
</form>


<div class="w3-third w3-margin-bottom" id="chk">
  
  <ul class="w3-ul w3-border w3-center w3-hover-shadow">
    <li class="w3-green w3-xlarge w3-padding-32">Total Cost</li>
    <li class="w3-padding-16">Selected Seat</li>
    <?php

	if(isset($_POST["submit"]))
	{

		if (!empty($_POST["st"])) 
		{
			# code...
			
			foreach ($_POST["st"] as $st) 
			{
				# code...
				echo $st.',';
			}
			
		}

	}
	

?>
<li class="w3-padding-16">Total Cost</li>
    
<?php

	if(isset($_POST["submit"]))
	{

	
		if (!empty($_POST["st"])) 
		{
			# code...
			$v=0;
			
			foreach ($_POST["st"] as $st) 
			{
				$v++;
				
				
			}
			$t=$amount=$data['rate_per_ticket'];
			$t=$v*$t;
			echo $t;
			// else
			// {

			// 	echo 'Please select at least one seat';
			// }
			}

		}
	echo "
	<li class='w3-light-grey w3-padding-24'>
	  <p>Buy Process Complete.</p>
      <a href='account.php'>Back</a>
    </li>

    ";
	

?>

  </ul>
</div>
<!-- to here -->
</div>
	
    <?php

	if(isset($_POST["submit"]))
	{
      $uid=$_SESSION['aid'];

      $sid=$data['s_id'];
      $tsp=$data['starting_point'];
      $tep=$data['ending_point'];
      $tst=$data['starting_time'];
      $td=$data['s_date'];
      $amount=$data['rate_per_ticket'];
      //$td=$data['s_date'];
      //$amount=$data['rate_per_ticket'];
      $tbno=$data['bus_no'];
      $tpay=$_POST['tpay'];
      $tbkashno=$_POST['bkno'];
      $pstatus="Pending";

      //echo $uid." ".$sid." ".$tsp." ".$tep." ".$tst." ".$td." ".$tsno." ".$_POST["ar"]." ".$amount." ".$tbno." ".$tpay." ".$tbkashno;

      foreach ($_POST['st'] as $tsno) {

        //echo $uid." ".$sid." ".$tsp." ".$tep." ".$tst." ".$td." ".$tsno." ".$amount." ".$tbno." ".$tpay." ".$tbkashno."<br>";

        $q="INSERT INTO `ticket`(`u_id`, `s_id`, `starting_point`, `ending_point`, `starting_time`, `date`, `seat_no`, `amount`, `bus_no`, `t_payment`, `t_bkash_no`, `payment_status`) VALUES ('$uid','$sid','$tsp','$tep','$tst','$td','$tsno','$amount','$tbno','$tpay','$tbkashno','$pstatus')";

        $urun=mysqli_query($con,$q);
      }

      /*$q="INSERT INTO `ticket`(`u_id`, `s_id`, `starting_point`, `ending_point`, `starting_time`, `date`, `seat_no`, `amount`, `bus_no`, `t_payment`, `t_bkash_no`, `payment_status`) VALUES ('$uid','$sid','$tsp','$tep','$tst','$td','$tsno','$amount','$tbno','$tpay','$tbkashno','$pstatus')";

      $urun=mysqli_query($con,$q);*/

      if($urun==true){
        ?>
        <script>
          alert('Update Successful.');
          window.open('account.php','_self');
        </script>
        <?php
      }
      else{
        ?>
        <script>
          alert('Update fail.');
          window.open('s.php','_self');
        </script>
        <?php
      }

	}
	

?>


  
    
</div>

<!-- </div>
 -->      
  </div>
<!-- </div>
</div> -->

	
</body>
</html
