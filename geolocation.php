<?php include 'nav.php';
session_start();
?>

<script>
    function getLocation() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, errorMessage);
      } else {
        alert("Geolocation is not supported by this browser.");
      }
    }

    function showPosition(position) {
      document.getElementById("latitude").value = position.coords.latitude;
      document.getElementById("longitude").value = position.coords.longitude;
      document.getElementById("submit-btn").removeAttribute("disabled");
    }

    function errorMessage() {
      alert("Geolocation is required for this form. Please enable it and try again.");
    }
    
  </script>
<body onload="getLocation()">
    <div class="container mt-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-8">
                
<form id="regForm" action="surveyform.php">
                    <h1 id="register"><strong>Access To Location Form</strong></h1>
                    <div class="all-steps" id="all-steps">
                        <span class="step " ><i class="fa fa-user"></i></span>
                        <span class="step active"><i class="fa fa-map-marker"></i></span> 
                        <span class="step"><i class="fa fa-mobile-phone"></i></span>
                    </div>

                    <div class="tab"> 
                    <input type="hidden" name="name" value="<?php echo $_GET['name'] ?>">  
                    <input type="hidden" name="email" value="<?php echo $_GET['email'] ?>">  
                    <input type="hidden" name="phone" value="<?php echo $_GET['phone'] ?>">  
                    <input type="hidden" name="age" value="<?php echo $_GET['age'] ?>">  
                    <input type="hidden" id="latitude" name="latitude">
                    <input type="hidden" id="longitude" name="longitude"> 
                    </div> 
                    <div style="overflow:auto;" id="nextprevious">
                        <div style="float:right;"> 
                            <button type="submit" ><i class="fa fa-angle-double-right"></i></button>
                        </div>
                    </div>
                </form>


                <?php include 'footer.php';?>