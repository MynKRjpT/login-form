<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $loggedin = true;
} else {
    $loggedin = false;
}

echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="components\p-icon.jpg" height="28px" alt="logo"> i-Portal</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/login-form/welcome.php">Home</a>
        </li>';

if (!$loggedin) {
    echo '<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/login-form/login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/login-form/signup.php">Have no Account Sign Up</a>
        </li>';
}

if ($loggedin) {
    echo '<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/login-form/logout.php">Logout</a>
        </li>';
}

echo '</ul></div></div></nav>';
?>
