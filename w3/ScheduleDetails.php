<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Schedule Details</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
          <h1>Schedule Details<a href="bus.php" class="btn btn-info pull-right"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>BACK</a></h1>
          <table class="table table-bordered table-striprd">
            <thead>
              <tr>
                <th width="20">SI</th>
                <th>Starting Point</th>
                <th>Ending Point</th>
                <th>Starting Time</th>
                <th>Date</th>
                <th>Bus No.</th>
              </tr>
            </thead>
           <tbody>
             <?php
                include('dbconection.php');
				        $q="SELECT * FROM `schedule`";
				        $run=mysqli_query($con,$q);

				        $no=1;
				        while($row=mysqli_fetch_array($run)){
                ?>
                   <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row['starting_point'] ?></td>
                    <td><?php echo $row['ending_point'] ?></td>
                    <td><?php echo $row['starting_time'] ?></td>
                    <td><?php echo $row['s_date'] ?></td>
                    <td><?php echo $row['bus_no'] ?></td>
                   </tr>
                <?php
                  }
                ?>
           </tbody>
      </table>
<?php
include 'footer.php';
?>