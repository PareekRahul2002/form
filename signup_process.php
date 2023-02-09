<!DOCTYPE html>
<html>
<head>
  <title>Sign Up Process Page</title>
</head>
<body>
  <h2>Sign Up Process</h2>
  <?php
    $username = $_POST["username"];
    $email = $_POST["email"];
    $latitude = $_POST["latitude"];
    $longitude = $_POST["longitude"];
  ?>
  <p>Username: <?php echo $username; ?></p>
  <p>Email: <?php echo $email; ?></p>
  <p>Latitude: <?php echo $latitude; ?></p>
  <p>Longitude: <?php echo $longitude; ?></p>
  <p>Thank you for signing up!</p>
</body>
</html>
