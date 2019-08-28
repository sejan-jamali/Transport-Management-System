<!DOCTYPE html>
<html>
<head>
	<title>list</title>
	<link rel="stylesheet" type="text/css" href="bootsrap.css">
</head>
<body>
	<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
          <h1>Drivers Details</h1>
          <table class="table table-bordered table-striprd">
            <thead>
              <tr>
                <th width="20">SI</th>
                <th>Id</th>
                <th>Name</th>
                <th>Phone No.</th>
                <th width="220">Action</th>
              </tr>
            </thead>
           <tbody>
             <?php
                include('dbconection.php');
				        $q="SELECT d_name FROM `driver`";
				        $qq="SELECT d_phone_no FROM driver"
				        
				        $run=mysqli_query($con,$q);

				        $no=1;
				        while($row=mysqli_fetch_array($run)){
                ?>
                   <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row['d_id'] ?></td>
                    <td><?php echo $row['d_name'] ?></td>
                    <td><?php echo $row['d_phone_no'] ?></td>
                    <td>
                      <a href="driverUpdate.php?id=<?php echo $row['d_id'] ?>" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Update</a>
                      <a onclick="return confirm('Are Yur Sure?To delete!')" href="driverDelete.php?id=<?php echo $row['d_id'] ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Delete</a>
                    </td>
                   </tr>
                <?php
                  }
                ?>
           </tbody>
      </table>
</div>
</div>
</div>

</body>
</html>