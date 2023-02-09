<?php 
if(!defined('DIRECT')){
  header('location:adminmainlogin.php');
  die();
}
?>
<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <link rel="stylesheet" href="style/css/style.css">
    <!-- Boxiocns CDN Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
   </head>
<body>

  <div class="sidebar close">
    <div class="logo-details">
      <i class='bx bx-menu' ></i>
      <span class="logo_name">Survey</span>
    </div>
    
    <ul class="nav-links">
      <li>
        <a href="index.php">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="index.php">Dashboard</a></li>
        </ul>
      </li> 

 
       
      <li>
        <a href="filteruser.php">
          <i class='bx bx-search' ></i>
          <span class="link_name">Applications</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="filteruser.php">Applications</a></li>
        </ul>
      </li>  

      <li><form  method="POST" action="logout.php">
    <div class="profile-details">
      <div class="profile-content"> 
      </div>
      
      <div class="name-job">
      <div class="profile_name">Logout</div>
      </div>
      <button class="btn" name="logout">
      <i  class='bx bx-log-out' ></i></button>
    </div></form>
      </li>
</ul>
</div>

