<?php include 'nav.php';
session_start();
?>


<body>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-8">
                
<form id="regForm" action="geolocation.php">
                    <h1 id="register"><strong>Personal Details</strong></h1>
                    <div class="all-steps" id="all-steps">
                        <span class="step active" ><i class="fa fa-user"></i></span>
                        <span class="step"><i class="fa fa-map-marker"></i></span> 
                        <span class="step"><i class="fa fa-mobile-phone"></i></span>
                    </div>

                    <div class="tab">
                        <h6>Full Name:-</h6>
                        <p>
                            <input placeholder="Full Name..."  name="name">
                        </p>
                        <h6>Email:-</h6>
                        <p>
                            <input placeholder="Email..."  name="email">
                        </p>
                        <h6>Contact No:-</h6>
                        <p>
                            <input placeholder="Contact No..."  name="phone">
                        </p>
                        <h6>Age:-</h6>
                        <p>
                            <input placeholder="Age..."  name="age">
                        </p>
                        

                    </div> 
                    <div style="overflow:auto;" id="nextprevious">
                        <div style="float:right;"> 
                            <button type="submit" ><i class="fa fa-angle-double-right"></i></button>
                        </div>
                    </div>
                </form>


                <?php include 'footer.php';?>