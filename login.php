

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
    <input type="password" class="Password" id="Password" name = "password">
  </div>
  <div class="mb-3">
    <label for="InputPassword1" class="form-label"> Confirm Password</label><br>
    <input type="password" class="Password" id="cpassword" name = "cpassword">
    <div id="emailHelp" class="form-text">The Password and confirm password must be same.</div>
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