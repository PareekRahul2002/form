<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "surveyform");

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

  
      $query="INSERT INTO `survey`(`name`,`email`, `phone`,`age`,`latitude`,`longitude`,`ans1`,`ans2`,`ans3`,`ans4`,`ans5`,`ans6`,`ans7`,`ans8`,`ans9`,`ans10`,`ans11`,`ans12`,`ans13`,`ans14`,`ans15`,`ans16`,`ans17`,`ans18`) VALUES ('$_GET[name]','$_GET[email]','$_GET[phone]','$_GET[age]','$_GET[latitude]','$_GET[longitude]','$_GET[ans1]','$_GET[ans2]','$_GET[ans3]','$_GET[ans4]','$_GET[ans5]','$_GET[ans6]','$_GET[ans7]','$_GET[ans8]','$_GET[ans9]','$_GET[ans10]','$_GET[ans11]','$_GET[ans12]','$_GET[ans13]','$_GET[ans14]','$_GET[ans15]','$_GET[ans16]','$_GET[ans17]','$_GET[ans18]' )";
      if(mysqli_query($conn,$query) )
      {
        #if data inserted successfully
        echo"
          <script>
            alert('Form Submited Successfully');
            window.location.href='thankyou';
          </script>
        ";
      }
      else
      {
        #if data cannot be inserted
        echo"
          <script>
            alert('Sorry Server is Down');
            window.location.href='index';
          </script>
        ";        
      }


?>









