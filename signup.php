
<?php
$alert=false;
$datainerror=false;
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
include 'components/db_connect.php';

$name =$_POST["name"];
$username =$_POST["username"];
$password =$_POST["password"];
$cpassword =$_POST["cpassword"];

//checking username is exist or not
$existSql = "SELECT * FROM sign WHERE username='$username'";
$result =mysqli_query($conn , $existSql);
$numExistRows = mysqli_num_rows($result);
if($numExistRows > 0){
$datainerror ="Username Already Exists Please try by another username";
}
else{
 $sql = " INSERT INTO `sign` ( `name`, `username`, `password`, `cpassword`, `time`) VALUES ('$name', '$username', '$password', '$cpassword', current_timestamp())";
  $result =mysqli_query($conn , $sql);
  if($result){
    // echo "Success";
    $alert=true;

}
else{
  $datainerror="Both Password does not match...";
}
}
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>I portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
  /* Set background of body */
body {
  background-image: url('components/signup-bg.jpg'); /* Using forward slashes */
  background-size: cover;
  background-position: center;
  /* display: flex; /* Set display to flex */
  /* justify-content: center; Center horizontally */
  /* align-items: center; */
  /* height: 100vh;  */ 
  /* Optionally, you can add more styles like background color, etc. */
}

.card-bg {
      background-image: url('components/card-bg.jpg'); /* Change path to your card background image */
      background-size: cover;
      background-position: center;
      /* Optionally, you can add more styles like background color, etc. */
    }
    </style>
  </head>
  <body>
  <?php
    require 'components/_nav.php'
    ?>
    <?php
    if($alert){
      echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
      <strong>Successfully!</strong> Your accout have been created.... Now click on login to log In
      to  your Account....
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>×</span>
      </button>
    </div>";
    }
    if($datainerror){
      echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
      <strong>Error!</strong>'.$datainerror.'
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>×</span>
      </button>
    </div>";
    }
    ?>


    <div class="container d-flex justify-content-center ">
<div class="card border-success mb-3 card text-center mt-5 card-bg" style="max-width: 25rem;">
  <div class="card-header bg-transparent border-success">Create Your Account</div>
  <div class="card-body text-success">
    <h5 class="card-title">Enter Details</h5>
    <form action="/login-form/signup.php" method="post">
  <div class="mb-3">
    <label for="signusername" class="form-label">Enter Your Name</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="signusername" class="form-label">Enter your Username</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="InputPassword1" class="form-label"> Create Password</label><br>
    <input type="password" class="Password" id="password" name = "password">
  </div>
  <div class="mb-3">
    <label for="InputPassword1" class="form-label"> Confirm Password</label><br>
    <input type="password" class="Password" id="cpassword" name = "cpassword">
    <div id="emailHelp" class="form-text">The create password and confirm password must be same</div>
  </div>
  <button type="submit" class="btn btn-primary">Create Account</button>
</form>
  </div>
</div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  </body>
</html>