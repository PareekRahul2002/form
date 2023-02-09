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
<div class="container mt-4">
  <h1>
    Count
  </h1>
</div>
<?php 

?>

<?php
$result = mysqli_query($con,"SELECT * FROM  survey  ORDER BY id "); 
$i=0;
while($row = mysqli_fetch_assoc($result)) { 
  $i++;
}



?>
<section>
  <div class="container mt-4">
    
    <div class="container">
    <div class="row row-cols-1 row-cols-md-4">
      <div class="col mb-4">
        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Total Surveys</h5>
            <br>
            <h1><?php echo  $i ; ?></h1>
          </div>
        </div>
      </div>
       
      
    </div></div>

  </div>
</section>
<?php include('endnav.php'); ?>