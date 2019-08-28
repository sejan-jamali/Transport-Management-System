<?php
  include('dbconection.php');
  $id=$_GET['id'];
  $q="SELECT * FROM `ticket` WHERE `t_id`='$id'";
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
  <title>Ticket Details Update</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1>Ticket Details Update<a href="userdetail.php" class="btn btn-info pull-right"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>Back</a></h1>
          <br>
          <form action="#" method="post" class="post">

              <div class="form-group">
                <label for="id">Ticket Id</label>
                <input type="text" id="name" value="<?php echo $data['t_id'] ?>" name="id" class="form-control" placeholder="Enter Your Name" required>
              </div>

              <div class="form-group">
                <label for="id">Ticket Payment</label>
                <input type="text" id="name" value="<?php echo $data['t_payment'] ?>" name="id" class="form-control" placeholder="Enter Your Name" required>
              </div>

              <div class="form-group">
                <label for="name">Payment Status</label>
                <select class="form-control" name="pstatus">
                  <option value="Pending">Pending</option>
                  <option value="Confirmed">Confirmed</option>
                </select>
              </div>          

      <button type="submit" name="submit" class="btn btn-primary"><span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span>Confirm</button>
    </form>
<?php
include 'footer.php';
?>

<?php
    if(isset($_POST['submit'])){
      $id=$_GET['id'];
      $pstatus=$_POST['pstatus'];

      $q="UPDATE `ticket` SET `payment_status`='$pstatus' WHERE `t_id`='$id'";

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
          window.open('TicketUpdate.php','_self');
        </script>
        <?php
      }

    }

?>