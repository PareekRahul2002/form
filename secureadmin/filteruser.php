<?php
require('coneqtion.php');

session_start();
if(!isset($_SESSION['admin_id']))
{
header("location: adminmainlogin.php");
}
define('DIRECT',false);
include('nav.php');

?>
<div class="container mt-5"><H1>Customer Details Page</H1></div>

<div class="container">
<form  method="POST">
<label for="from">From</label>
<input type="text" id="from" name="from" required>
<label for="to">to</label>
<input type="text" id="to" name="to" required>
 <input type="submit" name="submit" value="Filter" >
</form>
<br>
<br>

<div class="container">
  <?php 
  $sub_sqli="";
  $from=$to="";
if(isset($_POST['submit'])){
 $from=$_POST['from'];
 $fromArr=explode("/",$from);
 $from=$fromArr['2'].'-'.$fromArr['1'].'-'.$fromArr['0'];

 $to=$_POST['to'];
 $toArr=explode("/",$to);
 $to=$toArr['2'].'-'.$toArr['1'].'-'.$toArr['0'];

 $sub_sqli="WHERE dateofjoining >= '$from' && dateofjoining <= '$to'";
}
$result = mysqli_query($con,"SELECT * FROM  survey $sub_sqli ORDER BY id ");
?>
  <?php
if (mysqli_num_rows($result) > 0) {
?>
  <table class='table table-bordered table-striped'>
  <thead>
    <tr class="shadow p-3 mb-5 bg-body rounded">
      <th scope="col">Ref.No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact No</th> 
      <th scope="col">Age</th> 
      <th scope="col">View</th>
    </tr>
  </thead>
    <?php
$i=0;
while($row = mysqli_fetch_assoc($result)) {
?>
    <tr>
      <td >
        <?php echo $row["id"]; ?>
      </td>
      <td>
        <?php echo $row["name"]; ?>
      </td>
      <td>
        <?php echo $row["email"]; ?>
      </td>
      <td>
        <?php echo $row["phone"]; ?>
      </td> 
      <td>
      <?php echo $row["age"]; ?>
      </td>  
      <td>
        <a  class="btn btn-primary" href="viewuserdata.php?id=<?php echo $row["id"]; ?>">View</a>
      </td>
    </tr>
    <?php
$i++;
}


?><?php
echo "<h1>Total Forms ", $i ,"</h1>"; 
?>
  </table>
  <?php
}
else{
echo "No result found";
}
?>
</div>
<br>
<br>

<?php include('endnav.php'); ?>