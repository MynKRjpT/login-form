<?php
$login = false;
$showlogerror = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'components/db_connect.php';

    $username =$_POST["username"];
    $username = str_replace(">", "&gt;", $username);
    $username = str_replace("<", "&lt;", $username);
    $password = $_POST["password"];
    // $password = str_replace("<", "&gt;", $password);
    // $password = str_replace(">", "&lt;", $password);

    $sql = "SELECT * FROM sign WHERE username='$username'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // Check if any rows were returned
        $num = mysqli_num_rows($result);
        if ($num == 1) {
            $row = mysqli_fetch_assoc($result); // Fetch the row
            if (password_verify($password, $row['password'])) {
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                header("Location: welcome.php");
                exit; // Make sure to exit after header redirection
            } else {
                $showlogerror = "The password you have entered is incorrect.";
            }
        } else {
            $showlogerror = "The username you have entered does not exist. Please enter a valid username.";
        }
    } else {
        $showlogerror = "An error occurred while retrieving user data.";
    }
}
?>


<!doctype html>
<html lang="en">

<!-- ... (rest of your HTML code) ... -->

</html>

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
  background-image: url('components/login-bg.jpg'); /* Using forward slashes */
  background-size: cover;
  background-position: center;
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
    if($login){
      echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
      <strong>Successfully!</strong> Your account have been login....
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>×</span>
      </button>
    </div>";
    }
    if($showlogerror){
      echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
      <strong>Error!</strong>'.$showlogerror.'
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>×</span>
      </button>
    </div>";
    }
    ?>


    <div class="container d-flex justify-content-center ">
<div class="card border-success mb-3 card text-center mt-5 card-bg" style="max-width: 25rem;">
  <div class="card-header bg-transparent border-success">Login Your Account</div>
  <div class="card-body text-success">
    <h5 class="card-title">Enter Your details</h5>
    <form action="/login-form/login.php" method="post">
  <div class="mb-3">
    <label for="useranme" class="form-label">Enter Your Username</label>
    <input type="username" class="form-control" id="username" name ="username" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="InputPassword1" class="form-label">Password</label><br>
    <input type="password" class="Password" id="password" name = "password">
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>
  </div>
</div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  </body>
</html>