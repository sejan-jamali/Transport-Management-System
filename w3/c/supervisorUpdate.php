<?php
    include('dbconection.php');
    $id=$_GET['id'];
    $q="SELECT * FROM `supervisor` WHERE `su_id`='$id'";
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
  <title>Supervisor Update</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1>Supervisor Update<a href="supervisorDetails.php" class="btn btn-info pull-right"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>Back</a></h1>
          <br>
          <form action="supervisorUpdate.php" method="post" class="post">

              <div class="form-group">
                <label for="id">Id</label>
                <input type="text" id="name" value="<?php echo $data['su_id'] ?>" name="id" class="form-control" placeholder="Enter Your Name" required>
              </div>

              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" value="<?php echo $data['su_name'] ?>" name="name" class="form-control" placeholder="Enter Your Name" required>
              </div>

              <div class="form-group">
                <label for="phone">Phone No.</label>
                <input type="number" id="phone" value="<?php echo $data['su_phone_no'] ?>" name="phone" class="form-control" placeholder="Enter Your Phone" required>
              </div>             

      <button type="submit" name="submit" class="btn btn-primary"><span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span>Update Profile</button>
    </form>
<?php
include 'footer.php';
?>

<?php
    if(isset($_POST['submit'])){
      $suid=$_POST['id'];
      $suname=$_POST['name'];
      $suphone=$_POST['phone'];
      //echo $uid." ".$uname;
      
      $q="UPDATE `supervisor` SET `su_name`='$suname',`su_phone_no`='$suphone' WHERE `su_id`='$suid'";

      $urun=mysqli_query($con,$q);
      if($urun==true){
        ?>
        <script>
          alert('Update Successful.');
          window.open('supervisorDetails.php','_self');
        </script>
        <?php
      }
      else{
        ?>
        <script>
          alert('Update fail.');
          window.open('supervisorUpdate.php','_self');
        </script>
        <?php
      }

    }

?>