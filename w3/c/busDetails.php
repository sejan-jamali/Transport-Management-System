<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bus Details</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
          <h1>Bus Details<a href="busAdd.php" class="btn btn-info pull-right"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>Bus Add</a></h1>
          <table class="table table-bordered table-striprd">
            <thead>
              <tr>
                <th width="20">SI</th>
                <th>Id</th>
                <th>Bus No.</th>
                <th>Bus Seat Number</th>
                <th>Bus type</th>
                <th width="220">Action</th>
              </tr>
            </thead>
           <tbody>
             <?php
                include('dbconection.php');
				        $q="SELECT * FROM `bus`";
				        $run=mysqli_query($con,$q);

				        $no=1;
				        while($row=mysqli_fetch_array($run)){
                ?>
                   <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row['b_id'] ?></td>
                    <td><?php echo $row['b_no'] ?></td>
                    <td><?php echo $row['b_seat_number'] ?></td>
                    <td><?php echo $row['b_type'] ?></td>
                    <td>
                      <a href="busUpdate.php?id=<?php echo $row['b_id'] ?>" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Update</a>
                      <a onclick="return confirm('Are Yur Sure?To delete!')" href="busDelete.php?id=<?php echo $row['b_id'] ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Delete</a>
                    </td>
                   </tr>
                <?php
                  }
                ?>
           </tbody>
      </table>
<?php
include 'footer.php';
?>