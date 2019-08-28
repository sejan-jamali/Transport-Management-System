<?php
    include('dbconection.php');
    $id=$_GET['id'];
    $q="SELECT * FROM `bus` WHERE `b_id`='$id'";
    $run=mysqli_query($con,$q);
    $data=mysqli_fetch_assoc($run);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bus Update</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1>Bus Update<a href="busDetails.php" class="btn btn-info pull-right"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>Back</a></h1>
          <br>
          <form action="busUpdate.php" method="post" class="post">

              <div class="form-group">
                <label for="id">Id</label>
                <input type="text" id="name" value="<?php echo $data['b_id'] ?>" name="b_id" class="form-control" placeholder="Enter Your Name" required>
              </div>

              <div class="form-group">
                <label for="no">Bus No.</label>
                <input type="text" id="no" value="<?php echo $data['b_no'] ?>" name="b_no" class="form-control" placeholder="Enter Your Name" required>
              </div>

              <div class="form-group">
                <label for="no">Bus Seat Number</label>
                <input type="no" id="no" value="<?php echo $data['b_seat_number'] ?>" name="b_seat_number" class="form-control" placeholder="Enter Your Phone" required>
              </div>     

              <div class="form-group">
                <label for="no">Bus Type</label>
                <input type="text" id="no" value="<?php echo $data['b_type'] ?>" name="b_type" class="form-control" placeholder="Enter Your Name" required>
              </div>        

      <button type="submit" name="submit" class="btn btn-primary"><span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span>Update Profile</button>
    </form>
<?php
include 'footer.php';
?>

<?php
    if(isset($_POST['submit'])){
      $bid=$_POST['b_id'];
      $bno=$_POST['b_no'];
      $bseat=$_POST['b_seat_number'];
      $btype=$_POST['b_type'];
      //echo $uid." ".$uname;

      $q="UPDATE `bus` SET `b_no`='$bno',`b_seat_number`='$bseat' , `b_type`='$btype' WHERE `b_id`='$bid'";

      $urun=mysqli_query($con,$q);
      if($urun==true){
        ?>
        <script>
          alert('Update Successful.');
          window.open('busDetails.php','_self');
        </script>
        <?php
      }
      else{
        ?>
        <script>
          alert('Update fail.');
          window.open('busUpdate.php','_self');
        </script>
        <?php
      }

    }

?>