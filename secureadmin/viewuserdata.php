<?php
require('coneqtion.php');

session_start();
if(!isset($_SESSION['admin_id']))
{
header("location: adminmainlogin.php");
}
define('DIRECT',false);
include('nav.php');
 
$result = mysqli_query($con,"SELECT * FROM survey WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);

?>

<div class="container mt-5">

<br>
    <a href="filteruser.php" class="text-white btn btn-secondary">Back </a ></div>
    <div class="container mt-5"><H1><?php echo $row["name"]?> Details</H1></div>
     <br>
<div class="container">
<dl class="row"> 
 

  <dt class="col-sm-3">Email Id</dt>
  <dd class="col-sm-9"><?php echo $row["email"]; ?></dd>

  <dt class="col-sm-3">Contact Number</dt>
  <dd class="col-sm-9"><?php echo $row["phone"]; ?></dd>    
  
  <dt class="col-sm-3">Age</dt>
  <dd class="col-sm-9"><?php echo $row["age"]; ?></dd>
  <dt class="col-sm-3">property owner name</dt>
  <dd class="col-sm-9"><?php echo $row["ans1"]; ?></dd>
  <dt class="col-sm-3">Shop Owner Name</dt>
  <dd class="col-sm-9"><?php echo $row["ans2"]; ?></dd>
  <dt class="col-sm-3">Father Name/ Husband Name</dt>
  <dd class="col-sm-9"><?php echo $row["ans3"]; ?></dd>
  <dt class="col-sm-3">Gender</dt>
  <dd class="col-sm-9"><?php echo $row["ans4"]; ?></dd>
  <dt class="col-sm-3">Qualification</dt>
  <dd class="col-sm-9"><?php echo $row["ans5"]; ?></dd>
  <dt class="col-sm-3">Occupation</dt>
  <dd class="col-sm-9"><?php echo $row["ans6"]; ?></dd>
  <dt class="col-sm-3">Email</dt>
  <dd class="col-sm-9"><?php echo $row["ans7"]; ?></dd>
  <dt class="col-sm-3">Phone number</dt>
  <dd class="col-sm-9"><?php echo $row["ans8"]; ?></dd>
  <dt class="col-sm-3">Shop/Trade Name</dt>
  <dd class="col-sm-9"><?php echo $row["ans9"]; ?></dd>
  <dt class="col-sm-3">Shop/Trade Address</dt>
  <dd class="col-sm-9"><?php echo $row["ans10"]; ?></dd>
  
  
  <dt class="col-sm-3">Business Category
    </dt>
    <dd class="col-sm-9"><?php echo $row["ans11"]; ?></dd>
    <dt class="col-sm-3">Since</dt>
    <dd class="col-sm-9"><?php echo $row["ans12"]; ?></dd>
    <dt class="col-sm-3">How Many Employees</dt>
    <dd class="col-sm-9"><?php echo $row["ans13"]; ?></dd>
    <dt class="col-sm-3">Size of Shop in Sq.ft
      </dt>
      <dd class="col-sm-9"><?php echo $row["ans14"]; ?></dd>
      <dt class="col-sm-3">Zone</dt>
      <dd class="col-sm-9"><?php echo $row["ans15"]; ?></dd>
      <dt class="col-sm-3">Ward No. 1- 90
        <dd class="col-sm-9"><?php echo $row["ans16"]; ?></dd>
      </dt>
      <dt class="col-sm-3">License available( existing licence)
        </dt>
        <dd class="col-sm-9"><?php echo $row["ans17"]; ?></dd>
        <dt class="col-sm-3">FSE Code</dt>
        <dd class="col-sm-9"><?php echo $row["ans18"]; ?></dd>  
        <dt class="col-sm-3">Location </dt>
        <dd class="col-sm-9"><iframe src='https://www.google.com/maps?q=<?php echo $row["latitude"]; ?>,<?php echo $row["longitude"]; ?>&hl=es;z=14&output=embed' frameborder="0"></iframe></dd>  
      </dl>
    </div>
  
    
<?php include('endnav.php'); ?>