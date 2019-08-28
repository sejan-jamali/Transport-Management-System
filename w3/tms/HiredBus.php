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
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hired Bus</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1>Hired Bus<a href="#.php" class="btn btn-info pull-right"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>Back</a></h1>
          <br>
          <form action="#" method="post" class="post">
              
              <div class="form-group">
                <label for="id">User Id</label>
                <input type="number" id="uid" name="uid" class="form-control" required>
              </div>

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
                <label for="id">Bus No.</label>
                <input type="text" id="stime" name="bno" class="form-control" required>
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
                <label for="id">Bkash No.</label>
                <input type="number" id="bkno" name="bkno" class="form-control" placeholder="Enter BKash Number">
              </div>

      <button type="submit" name="submit" class="btn btn-primary"><span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span>Confirm</button>
    </form>
<?php
include 'footer.php';
?>

<?php
    include('dbconection.php');
    if(isset($_POST['submit'])){
      
      $uid=$_POST['uid'];
      $hsp=$_POST['spoint'];
      $hep=$_POST['epoint'];
      $hst=$_POST['stime'];
      $hd=$_POST['hdate'];
      $amount=500;
      $hbno=$_POST['bno'];
      $hpay=$_POST['hpay'];
      $hbkashno=$_POST['bkno'];
      $hstatus="Pending";

      //echo $uid." ".$hsp." ".$hep." ".$hst." ".$hd." ".$amount." ".$hbno." ".$hpay." ".$hbkashno;

      $q="INSERT INTO `hired_bus`(`u_id`, `h_starting_point`, `h_ending_point`, `h_startting_time`, `h_bus_no`, `h_date`, `amount`, `h_payment`, `h_bkash_no`, `h_payment_status`) VALUES ('$uid','$hsp','$hep','$hst','$hbno','$hd','$amount','$hpay','$hbkashno','$hstatus')";

      $urun=mysqli_query($con,$q);
      if($urun==true){
        ?>
        <script>
          alert('Request Successful.');
          window.open('hiredDetails.php','_self');
        </script>
        <?php
      }
      else{
        echo "Why problem";

      }
      

    }

?>