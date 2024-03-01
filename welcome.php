<?php
session_start();
if(!isset($_SESSION['loggedin']) || ($_SESSION['loggedin']!=true)){
header("location:signup.php");
exit;
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome <?php echo $_SESSION['username']?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
    body {
        background-image: url('components/wlcm-bg.jpg');
        /* Using forward slashes */
        background-size: cover;
        background-position: center;
        /* display: flex; /* Set display to flex */
        /* justify-content: center; Center horizontally */
        /* align-items: center; */
        /* height: 100vh;  */
        /* Optionally, you can add more styles like background color, etc. */
    }

    .card-bg {
        background-image: url('components/card-bg.jpg');
        /* Change path to your card background image */
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

// Check if the button has been clicked
if(isset($_POST['open_iphub'])) {
    // Redirect to the desired URL
    header("Location: ip_hub.php");
    exit; // Ensure that no other code is executed after redirection
}
if(isset($_POST['open_ipstore'])) {
    // Redirect to the desired URL
    header("Location: ipshop.php");
    exit; // Ensure that no other code is executed after redirection
}
?>

    <div class="container d-flex justify-content-center ">
        <div class="card border-success mb-3 card text-center mt-5 card-bg" style="max-width: 25rem;">
            <div class="card-header bg-transparent border-success"> <strong>Hii <?php echo $_SESSION['username']?>
                    Welcome to our i-Portal</strong></div>
            <div class="card-body text-success">
                <blockquote class="blockquote mb-0">
                    <p> <strong><?php echo $_SESSION['username']?> Your Account  Login Succesfully...</strong> </p>
                    <form method="post" action="/login-form/welcome.php">
                        <p><button type="submit" name="open_iphub" class="btn btn-primary">Go to IP-Hub Movies</button>
                        </p>
                        <p><button type="submit" name="open_ipstore" class="btn btn-primary">Go to IP-Hub Store</button>
                        </p>
                    </form>
                    <footer class="blockquote-footer">This project is created by- <cite title="Source Title">Mayank
                            Rajput</cite></footer>
                </blockquote>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>