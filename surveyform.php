<?php
session_start();
if($_GET['latitude']=="" && $_GET['latitude']==""){
    header("location: index.php");
}
else{

    ?>



<?php include 'nav.php';?>

<body>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-8">
                
<form id="regForm" action="submitform.php">
                    <h1 id="register"><strong>Survey Form</strong></h1>
                    <div class="all-steps" id="all-steps">
                        <span class="step " ><i class="fa fa-user"></i></span>
                        <span class="step"><i class="fa fa-map-marker"></i></span> 
                        <span class="step active"><i class="fa fa-mobile-phone"></i></span>
                    </div>

                    <div class="tab">
                    <input type="hidden" name="name" value="<?php echo $_GET['name'] ?>">  
                    <input type="hidden" name="email" value="<?php echo $_GET['email'] ?>">  
                    <input type="hidden" name="phone" value="<?php echo $_GET['phone'] ?>">  
                    <input type="hidden" name="age" value="<?php echo $_GET['age'] ?>">  
                    <input type="hidden" name="latitude" value="<?php echo $_GET['latitude'] ?>">  
                    <input type="hidden" name="longitude" value="<?php echo $_GET['longitude'] ?>">   
                        <h6>1. Property owner name</h6>
                        <p>
                            <input placeholder="Your Answer" required name="ans1">
                        </p>
                        <h6>2. Shop Owner Name?</h6>
                        <p>
                            <input placeholder="Your Answer" required name="ans2">
                        </p>
                        <h6>3. Father Name/ Husband Name?</h6>
                        <p>
                            <input placeholder="Your Answer" required name="ans3">
                        </p>
                        <h6>4. Gender</h6>
                        <p>
                        <fieldset> 
                            <div>
                                <input type="radio" style="width: 10px;padding: 5px;"  name="ans4" value="male" />
                                <label for="Choice1">Male</label>
                                <br>
                                <input type="radio" style="width: 10px;padding: 5px;"  name="ans4" value="female" />
                                <label for="Choice2">Female</label>
                                <br>
                                <input type="radio" style="width: 10px;padding: 5px;"  name="ans4" value="Prefer not to say" />
                                <label for="Choice3">Prefer not to say</label>
                            </div> 
                        </fieldset>
                    </p>
                    <!--  -->
                    <h6>5. Qualification?</h6>
                    <p>
                    <select name="ans5" >
                        <optgroup label="Select">
                            <option value="10th">10th</option>
                            <option value="12th">12th</option> 
                            <option value="Graduate">Graduate</option>
                            <option value="PG">Post Graduate</option>
                            <option value="other">Other</option>
                        </optgroup>
                    </select> 
                </p>
                <!--  -->
                <h6>6. Occupation?</h6>
                <p>
                    <select name="ans6" >
                        <optgroup label="Select">
                            <option value="10th">Job</option>
                            <option value="12th">Business</option> 
                            <option value="Graduate">Student</option>
                            <option value="PG">House Wife</option>
                            <option value="other">Self Employed</option>
                            <option value="other">Other</option>
                        </optgroup>
                    </select> 
                </p>
                <h6>7. Email:-</h6>
                <p>
                    <input type="email" placeholder="Email..."  name="ans7">
                </p>
                <h6>8. Contact No:-</h6>
                <p>
                    <input type="number" placeholder="Contact No..."  name="ans8">
                </p>
                <h6>9.Shop/Trade Name:-</h6>
                <p>
                    <input placeholder="Answer..."  name="ans9">
                </p>
                <h6>10.Shop/Trade Address:-</h6>
                <p>
                    <input placeholder="Answer..."  name="ans10">
                </p>
                <h6>11. Business Category?</h6>
                <p>
                    <input placeholder="Answer..."  name="ans11">
                </p>
                <h6>12. Since?</h6>
                <p>
                    <input placeholder="Answer..."  name="ans12">
                </p>
                <h6>13. How Many Employees ?</h6>
                <p>
                    <input placeholder="Answer..."  name="ans13">
                </p>
                <h6>14. Size of Shop in Sq.ft?</h6>
                <p>
                    <input placeholder="Answer..."  name="ans14">
                </p>
                <h6>15. Zone?</h6>
                <p>
                    <select name="ans15" >
                        <optgroup label="Select">
                            <option value="1">1</option>
                            <option value="2">2</option> 
                            <option value="3">3</option>
                            <option value="4">4</option> 
                        </optgroup>
                    </select> 
                </p>
                <h6>16.Ward No. 1- 90?</h6>
                <p>
                    <input placeholder="Answer..."  name="ans16">
                </p>
                <h6>17. License available( existing licence)</h6>
                <p>
                    <fieldset> 
                        <div>
                            <input type="radio" style="width: 10px;padding: 5px;"  name="ans17" value="Yes" />
                            <label for="Choice1">Yes</label>
                            <br>
                            <input type="radio" style="width: 10px;padding: 5px;"  name="ans17" value="No" />
                            <label for="Choice2">No</label> 
                        </div> 
                    </fieldset>
                </p>
                <h6>18.FSE Code?</h6>
                <p>
                    <input placeholder="Answer..."  name="ans18">
                </p>
                

                    </div> 
                    <div style="overflow:auto;" id="nextprevious">
                        <div style="float:right;"> 
                            <button type="submitform" name="submit" >Submit <i class="fa fa-angle-double-right"></i></button>
                        </div>
                    </div>
                </form>


                <?php include 'footer.php';?>


    <?php
}
?>
