<tr>
    <td>
      <label class="container">1
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           //echo $n."   ".$pp;
           $j=0;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com=='1'){
          echo "<input type='checkbox' name='st[]' value='1' disabled>";
          $j=1;
          break;
        }
                 
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='1'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td>

    <td>
      <label class="container">2
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           $j=0;
           //echo $n."   ".$pp;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com=='2'){
          echo "<input type='checkbox' name='st[]' value='2' disabled>";
          $j=1;
          break;
        }      
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='2'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td>

<td></td>
<td></td>
<td></td>
<td>
      <label class="container">3
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
          $j=0;
           //echo $n."   ".$pp;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com=='3'){
          echo "<input type='checkbox' name='st[]' value='3' disabled>";
          $j=1;
          break;
        }
       }
        if($j == 0){
          echo "<input type='checkbox' name='st[]' value='3'>";
          echo "<span class='checkmark'></span>";
        }
           
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td>
    <td>
      <label class="container">4
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           //echo $n."   ".$pp;
           $i=0;
           $j=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com=='4'){
          echo "<input type='checkbox' name='st[]' value='4' disabled>";
          $j=1;
          break;
        }
                 
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='4'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td>
    
  </tr>
  <tr>
    <td>
      <label class="container">5
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           //echo $n."   ".$pp;
           $j=0;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com=='5'){
          echo "<input type='checkbox' name='st[]' value='5' disabled>";
          $j=1;
          break;
        }
                 
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='5'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td>
    <td>
      <label class="container">6
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           //echo $n."   ".$pp;
           $j=0;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com=='6'){
          echo "<input type='checkbox' name='st[]' value='6' disabled>";
          $j=1;
          break;
        }
                 
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='6'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td>
<td></td>
<td></td>
<td></td>
<td>
      <label class="container">7
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           //echo $n."   ".$pp;
           $j=0;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com=='7'){
          echo "<input type='checkbox' name='st[]' value='7' disabled>";
          $j=1;
          break;
        }
                 
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='7'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td>
    <td>
      <label class="container">8
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           //echo $n."   ".$pp;
           $j=0;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com=='8'){
          echo "<input type='checkbox' name='st[]' value='8' disabled>";
          $j=1;
          break;
        }
                 
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='8'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td>
  </tr>
  <tr>
    <td>
      <label class="container">3A
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           //echo $n."   ".$pp;
           $j=0;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com=='3A'){
          echo "<input type='checkbox' name='st[]' value='3A' disabled>";
          $j=1;
          break;
        }
                 
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='3A'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td>
    <td>
      <label class="container">3B
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           //echo $n."   ".$pp;
           $j=0;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com=='3B'){
          echo "<input type='checkbox' name='st[]' value='3B' disabled>";
          $j=1;
          break;
        }
                 
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='3B'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td>
    <td></td>
<td></td>
<td></td>
<td>
      <label class="container">3C
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           //echo $n."   ".$pp;
           $j=0;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com=='3C'){
          echo "<input type='checkbox' name='st[]' value='3C' disabled>";
          $j=1;
          break;
        }
                 
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='3C'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td>
    <td>
      <label class="container">3D
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           //echo $n."   ".$pp;
           $j=0;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com=='3D'){
          echo "<input type='checkbox' name='st[]' value='3D' disabled>";
          $j=1;
          break;
        }
                 
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='3D'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td>
  </tr>
  <tr>
    <td>
      <label class="container">4A
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           //echo $n."   ".$pp;
           $j=0;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com=='4A'){
          echo "<input type='checkbox' name='st[]' value='4A' disabled>";
          $j=1;
          break;
        }
                 
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='4A'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td>
    <td>
      <label class="container">4B
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           //echo $n."   ".$pp;
           $j=0;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com=='4B'){
          echo "<input type='checkbox' name='st[]' value='4B' disabled>";
          $j=1;
          break;
        }
                 
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='4B'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td>
    <td></td>
<td></td>
<td></td>
<td>
      <label class="container">4C
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           //echo $n."   ".$pp;
           $j=0;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com=='4C'){
          echo "<input type='checkbox' name='st[]' value='4C' disabled>";
          $j=1;
          break;
        }
                 
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='4C'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td>
    <td>
      <label class="container">4D
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           //echo $n."   ".$pp;
           $j=0;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com=='4D'){
          echo "<input type='checkbox' name='st[]' value='4D' disabled>";
          $j=1;
          break;
        }
                 
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='4D'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td>
  </tr>
  <tr>
    <td>
      <label class="container">5A
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           //echo $n."   ".$pp;
           $j=0;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com=='5A'){
          echo "<input type='checkbox' name='st[]' value='5A' disabled>";
          $j=1;
          break;
        }
                 
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='5A'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td>
    <td>
      <label class="container">5B
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           //echo $n."   ".$pp;
           $j=0;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com=='5B'){
          echo "<input type='checkbox' name='st[]' value='5B' disabled>";
          $j=1;
          break;
        }
                 
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='5B'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td>
    <td></td>
<td></td>
<td></td>
<td>
      <label class="container">5C
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           //echo $n."   ".$pp;
           $j=0;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com=='5C'){
          echo "<input type='checkbox' name='st[]' value='5C' disabled>";
          $j=1;
          break;
        }
                 
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='5C'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td>
    <td>
      <label class="container">5D
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           //echo $n."   ".$pp;
           $j=0;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com=='5D'){
          echo "<input type='checkbox' name='st[]' value='5D' disabled>";
          $j=1;
          break;
        }
                 
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='5D'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td>
  </tr>
  <tr>
    <td>
      <label class="container">6A
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           //echo $n."   ".$pp;
           $j=0;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com=='6A'){
          echo "<input type='checkbox' name='st[]' value='6A' disabled>";
          $j=1;
          break;
        }
                 
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='6A'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td>

    <td>
      <label class="container">6B
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           //echo $n."   ".$pp;
           $j=0;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com=='6B'){
          echo "<input type='checkbox' name='st[]' value='6B' disabled>";
          $j=1;
          break;
        }
                 
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='6B'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td>

<td></td>
<td></td>
<td></td>
<td>
      <label class="container">6C
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           //echo $n."   ".$pp;
           $j=0;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com=='6C'){
          echo "<input type='checkbox' name='st[]' value='6C' disabled>";
          $j=1;
          break;
        }
                 
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='6C'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td>
    <td>
      <label class="container">6D
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           //echo $n."   ".$pp;
           $j=0;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com=='6D'){
          echo "<input type='checkbox' name='st[]' value='6D' disabled>";
          $j=1;
          break;
        }
                 
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='6D'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
    </label>
    
  </td>
    
  </tr>
  <tr>
    <td>
      <label class="container">7A
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           //echo $n."   ".$pp;
           $j=0;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com=='7A'){
          echo "<input type='checkbox' name='st[]' value='7A' disabled>";
          $j=1;
          break;
        }
                 
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='7A'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td>
    <td>
      <label class="container">7B
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           //echo $n."   ".$pp;
           $j=0;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com=='7B'){
          echo "<input type='checkbox' name='st[]' value='7B' disabled>";
          $j=1;
          break;
        }
                 
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='7B'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td>
<td></td>
<td></td>
<td></td>
<td>
      <label class="container">7C
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           //echo $n."   ".$pp;
           $j=0;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com=='7C'){
          echo "<input type='checkbox' name='st[]' value='7C' disabled>";
          $j=1;
          break;
        }
                 
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='7C'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td>
    <td>
      <label class="container">7D
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           //echo $n."   ".$pp;
           $j=0;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com=='7D'){
          echo "<input type='checkbox' name='st[]' value='7D' disabled>";
          $j=1;
          break;
        }
                 
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='7D'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td>
  </tr>
  <tr>
    <td>
      <label class="container">8A
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           //echo $n."   ".$pp;
           $j=0;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com=='8A'){
          echo "<input type='checkbox' name='st[]' value='8A' disabled>";
          $j=1;
          break;
        }
                 
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='8A'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td>
    <td>
      <label class="container">8B
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           //echo $n."   ".$pp;
           $j=0;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com=='8B'){
          echo "<input type='checkbox' name='st[]' value='8B' disabled>";
          $j=1;
          break;
        }
                 
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='8B'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td>
    <td></td>
<td></td>
<td></td>
<td>
      <label class="container">8C
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           //echo $n."   ".$pp;
           $j=0;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com=='8C'){
          echo "<input type='checkbox' name='st[]' value='8C' disabled>";
          $j=1;
          break;
        }
                 
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='8C'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td>
    <td>
      <label class="container">8D
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           //echo $n."   ".$pp;
           $j=0;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com=='8D'){
          echo "<input type='checkbox' name='st[]' value='8D' disabled>";
          $j=1;
          break;
        }
                 
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='8D'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td>
  </tr>
  <tr>
    <td>
      <label class="container">9A
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           //echo $n."   ".$pp;
           $j=0;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com=='9A'){
          echo "<input type='checkbox' name='st[]' value='9A' disabled>";
          $j=1;
          break;
        }
                 
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='9A'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td>
    <td>
      <label class="container">9B
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           //echo $n."   ".$pp;
           $j=0;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com=='9B'){
          echo "<input type='checkbox' name='st[]' value='9B' disabled>";
          $j=1;
          break;
        }
                 
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='9B'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td>
    <td></td>
<td></td>
<td></td>
<td>
      <label class="container">9C
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           //echo $n."   ".$pp;
           $j=0;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com=='9C'){
          echo "<input type='checkbox' name='st[]' value='9C' disabled>";
          $j=1;
          break;
        }
                 
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='9C'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td>
    <td>
      <label class="container">9D
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           //echo $n."   ".$pp;
           $j=0;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com=='9D'){
          echo "<input type='checkbox' name='st[]' value='9D' disabled>";
          $j=1;
          break;
        }
                 
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='9D'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td>
  </tr>
  <tr>
    <td>
      <label class="container">10A
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           //echo $n."   ".$pp;
           $j=0;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com=='10A'){
          echo "<input type='checkbox' name='st[]' value='10A' disabled>";
          $j=1;
          break;
        }
                 
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='10A'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td>
    <td>
      <label class="container">10B
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           //echo $n."   ".$pp;
           $j=0;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com=='10B'){
          echo "<input type='checkbox' name='st[]' value='10B' disabled>";
          $j=1;
          break;
        }
                 
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='10B'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td>
    <td></td>
<td></td>
<td></td>
<td>
      <label class="container">10C
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           //echo $n."   ".$pp;
           $j=0;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com=='10C'){
          echo "<input type='checkbox' name='st[]' value='10C' disabled>";
          $j=1;
          break;
        }
                 
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='10C'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td>
    <td>
      <label class="container">10D
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           //echo $n."   ".$pp;
           $j=0;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com=='10D'){
          echo "<input type='checkbox' name='st[]' value='10D' disabled>";
          $j=1;
          break;
        }
                 
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='10D'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td>
  </tr>
  
  <tr>
    <td>
      <label class="container">11
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           //echo $n."   ".$pp;
           $j=0;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com==11){
          echo "<input type='checkbox' name='st[]' value='11' disabled>";
          $j=1;
          break;
        }
                 
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='11'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td>
    <td>
      <label class="container">22
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           //echo $n."   ".$pp;
           $j=0;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com==22){
          echo "<input type='checkbox' name='st[]' value='22' disabled>";
          $j=1;
          break;
        }
                 
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='22'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td>
<td>
      <label class="container">33
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           //echo $n."   ".$pp;
           $j=0;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com==33){
          echo "<input type='checkbox' name='st[]' value='33' disabled>";
          $j=1;
          break;
        }
                 
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='33'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td>
<td>
      <label class="container">44
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           //echo $n."   ".$pp;
           $j=0;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com==44){
          echo "<input type='checkbox' name='st[]' value='44' disabled>";
          $j=1;
          break;
        }
                 
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='44'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td><td>
      <label class="container">55
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           //echo $n."   ".$pp;
           $j=0;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com==55){
          echo "<input type='checkbox' name='st[]' value='55' disabled>";
          $j=1;
          break;
        }
                 
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='55'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td>
<td>
      <label class="container">66
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           //echo $n."   ".$pp;
           $j=0;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com==66){
          echo "<input type='checkbox' name='st[]' value='66' disabled>";
          $j=1;
          break;
        }
                 
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='66'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td>
<td>
      <label class="container">77
      <?php
           $run=mysqli_query($con,$q);
           $pp=mysqli_num_rows($run);
           //echo $n."   ".$pp;
           $j=0;
           $i=0;
           while($row=mysqli_fetch_array($run)){
            $com=$row['seat_no'];
        ?>
      <?php
        $i++;
        //echo $i; 
        if($com==77){
          echo "<input type='checkbox' name='st[]' value='77' disabled>";
          $j=1;
          break;
        }
                 
       }
        if($j==0){
          echo "<input type='checkbox' name='st[]' value='77'>";
          echo "<span class='checkmark'></span>";
        }
        ?>
      <!--input type="checkbox" name="st[]" value="1"-->
    </label>
    
  </td>
    
  </tr>