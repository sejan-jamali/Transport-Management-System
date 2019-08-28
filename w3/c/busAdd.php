<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bus Add</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
      	<h1>Bus Add<a href="busDetails.php" class="btn btn-info pull-right"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>Back</a></h1>
          <br>
          <form action="#" method="POST" class="post">

              <div class="form-group">
                <label for="no">Bus No.</label>
                <input type="text" id="no" name="b_no" class="form-control" placeholder="Enter Bus No." required>
              </div>

              <div class="form-group">
                <label for="no">Bus Seat Number</label>
                <input type="number" id="no" name="seat_no" class="form-control" placeholder="Enter Bus Seat Number" required>
              </div>

              <div class="form-group">
                <label for="type">Bus Type</label>
                <input type="text" id="type" name="b_type" class="form-control" placeholder="Enter Bus Type" required>
              </div>

      <button type="submit" name="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save" aria-hidden="true"></span>Create Profile</button>
    </form>
<?php
include 'footer.php';
?>






<?php
	include 'dbconection.php';

	if(isset($_POST['submit'])){
		$b_no=$_POST['b_no'];
		$seat_no=$_POST['seat_no'];
		$b_type=$_POST['b_type'];

		$q="INSERT INTO `bus`(`b_no`, `b_seat_number`, `b_type`) VALUES ('$b_no','$seat_no','$b_type')";

		//$r=mysqli_query($con,$q);
		$run=mysqli_query($con,$q);

		if($run==true){
			?>
			<script>
				alert('Data insert successfully.');
				window.open('busDetails.php','_self');
			</script>
			<?php
		}
		else{
			?>
			<script>
				alert('Data insert fail.');
				window.open('busAdd.php','_self');
			</script>
			<?php
		}

	}

?>
