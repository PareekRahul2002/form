<?php 
    require("coneqtion.php")
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style/css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
<title>Admin Login</title>
<style>
  
.contact-clean {
  background: #ecdbf6;
  padding: 80px 0;
}

.contact-clean form {
  max-width: 480px;
  width: 90%;
  margin: 0 auto;
  background-color: #ffffff;
  padding: 40px;
  border-radius: 4px;
  color: #505e6c;
  box-shadow: 1px 1px 5px rgba(0,0,0,0.1);
}

</style>
</head>
<body>
        <section class="contact-clean">
            
  <br>
            <br>
            <br>
            <form method="POST">
                <h2 class="text-center" style="
    font-size: -webkit-xxx-large;
    font-weight: bold;
">Admin Login</h2>
                <br>
                <br>
                <div class="mb-3"><input class="form-control" type="text" placeholder="admin name" name="ad_name" /></div>
                <div class="mb-3"><input class="form-control" type="password" placeholder="password" name="ad_pass"/></div>
                <div class="mb-3" style="text-align: center;"><button class="btn btn-primary" name="signin" class="btn btn-dark" type="submit">Login </button></div>
            </form>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </section>
<?php
    if(isset($_POST['signin']))
    {
        $query="SELECT * FROM `supersecureadmin1234` WHERE `admn_unm`='$_POST[ad_name]' AND  `admn_pwd`='$_POST[ad_pass]'";
        $result=mysqli_query($con , $query);
        if(mysqli_num_rows($result)==1){
            session_start();
            $_SESSION['admin_id']=$_POST['ad_name'];
            header("location: index.php");
        }
        else{
            echo"<script>alert('Incorrect username or password');</script>";
        }

    }
?>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>