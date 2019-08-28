<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Details</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
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

      <div class="col-md-4">
        <table class="table table-bordered table-striprd">
            <thead>
              <tr>
                <th>Super. Id</th>
                <th>Super. Name</th>
            </thead>
            <tbody>
             <?php
                while($row2=mysqli_fetch_array($run2)){
                ?>
                   <tr>
                    <td><?php echo $row2['su_id'] ?></td>
                    <td><?php echo $row2['su_name'] ?></td>
                   </tr>
                <?php
                  }
                ?>
           </tbody>
        </table>
      </div>

      <div class="col-md-4">
        <table class="table table-bordered table-striprd">
            <thead>
              <tr>
                <th>Bus No.</th>
                <th>Bus type</th>
            </thead>
             <tbody>
             <?php
                while($row3=mysqli_fetch_array($run3)){
                ?>
                   <tr>
                    <td><?php echo $row3['b_no'] ?></td>
                    <td><?php echo $row3['b_type'] ?></td>
                   </tr>
                <?php
                  }
                ?>
           </tbody>
        </table>
      </div> 

    </div>

   
  </div>

  <script src="js/jquery-3.2.1.min.js"></script>
  <script type="js/bootstrap.min.js"></script>
</body>
</html>