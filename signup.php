<?php
$alert = false;
$datainerror = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'components/db_connect.php';

    // Validate input fields
    $name = trim($_POST["name"]);
    $name = str_replace("<", "&lt;", $name);
    $name = str_replace(">", "&gt;", $name);
  
    $username = trim($_POST["username"]);
    $username = str_replace("<", "&lt;", $username);
    $username = str_replace(">", "&gt;", $username);
    $password = $_POST["password"];
    $password = $_POST["password"];    
    // $password = str_replace("<", "&gt;", $password);
    // $password = str_replace(">", "&lt;", $password);
    $cpassword = $_POST["cpassword"];
    $cpassword = $_POST["cpassword"];    
    // $cpassword = str_replace("<", "&gt;", $cpassword);
    // $cpassword = str_replace(">", "&lt;", $cpassword);

    if (empty($name) || empty($username) || empty($password) || empty($cpassword)) {
        $datainerror = "All fields are required.";
    } else {
        // Check if passwords match
        if ($password !== $cpassword) {
            $datainerror = "Both Passwords do not match...";
        } else {
            // Checking if username already exists
            $existSql = "SELECT * FROM sign WHERE username='$username'";
            $result = mysqli_query($conn, $existSql);
            $numExistRows = mysqli_num_rows($result);

            if ($numExistRows > 0) {
                $datainerror = "Username Already Exists. Please try another username.";
            } else {
                // Hash the password
                $hash = password_hash($password, PASSWORD_DEFAULT);
                // Insert user data into the database
                $sql = "INSERT INTO `sign` (`name`, `username`, `password`, `time`) VALUES ('$name', '$username', '$hash', current_timestamp())";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    $alert = true;
                    header("location:login.php");
                } else {
                    $datainerror = "An error occurred. Please try again later.";
                }
            }
        }
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>I portal Sign-Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
          crossorigin="anonymous">
    <style>
        /* Set background of body */
        body {
            background-image: url('components/signup-bg.jpg');
            background-size: cover;
            background-position: center;
        }

        .card-bg {
            background-image: url('components/card-bg.jpg');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body>
<?php require 'components/_nav.php' ?>

<?php if ($alert): ?>
    <div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Successfully!</strong> Your account has been created. Now click on login to log in to your Account....
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>×</span>
        </button>
    </div>
<?php endif; ?>

<?php if ($datainerror): ?>
    <div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>Error!</strong> <?= $datainerror ?>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>×</span>
        </button>
    </div>
<?php endif; ?>

<div class="container d-flex justify-content-center ">
    <div class="card border-success mb-3 card text-center mt-5 card-bg" style="max-width: 25rem;">
        <div class="card-header bg-transparent border-success">Create Your Account</div>
        <div class="card-body text-success">
            <h5 class="card-title">Enter Details</h5>
            <form action="/login-form/signup.php" method="post">
                <div class="mb-3">
                    <label for="signusername" class="form-label">Enter Your Name</label>
                    <input type="text" maxlength="50" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="signusername" class="form-label">Enter your Username</label>
                    <input type="text" maxlength="50" class="form-control" id="username" name="username">
                </div>
                <div class="mb-3">
                    <label for="InputPassword1" class="form-label"> Create Password</label><br>
                    <input type="password" maxlength="50" class="Password" id="password" name="password">
                </div>
                <div class="mb-3">
                    <label for="InputPassword1" class="form-label"> Confirm Password</label><br>
                    <input type="password" maxlength="50" class="Password" id="cpassword" name="cpassword">
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
