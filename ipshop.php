<?php
session_start();
if(!isset($_SESSION['loggedin']) || ($_SESSION['loggedin']!=true)){
header("location:ipshop.php");
exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IP-Store-Spend Less. Smile More</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="ipshop.css" />

<body>
    <header>
        <div class="navbar">
            <div class="nav-logo border">
                <div class="logo"></div>
            </div>
            <div class="nav-address border">
                <p class="add1">Deliver to</p>
                <div class="add-icon">
                    <i class="fa-solid fa-location-crosshairs"></i>
                    <p class="add2">India</p>
                </div>
            </div>
            <div class="nav-search">
                <select class="search-select">
                    <option>All</option>
                </select>
                <input type="text" placeholder="Search on IP-Store-Buy" class="nav-input" />
                <div class="search-icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>
            <div class="nav-signin border">
                <p><span>Hello <?php echo $_SESSION['username']?> </span></p>
                <p class="nav-sec">Account & Lists</p>
            </div>
            <div class="nav-signin border">
                <p><span>Return</span></p>
                <p class="nav-sec">& Orders</p>
            </div>
            <div class="nav-cart border">
                <i class="fa-solid fa-cart-shopping"></i>
                Cart
            </div>
            <div class="nav-signin border">
                <form method="post" action="/login-form/logout.php">
                    <p><span>  <button class="btn btn-red-sm" aria-current="page" name="logout_button"
                    href="/login-form/logout.php">Logout</button></span></p>
                    <p class="nav-sec"><button class="btn btn-red-sm" aria-current="page" name="logout_button"
                    href="/login-form/logout.php"><?php echo $_SESSION['username']?></button></p>
                </form>
            </div>
        </div>
        <div class="panel border">
            <div class="panel-all">
                <i class="fa-solid fa-bars"></i>
            </div>
            <div class="panel-option">
                <p>All</p>
                <p>Today's Deals</p>
                <p>Registry</p>
                <p>Customer Service</p>
                <p>Gift Cards</p>
                <p>Sell</p>
            </div>
            <div class="panel-deal">
                <p>Shop Deals in Electronics</p>
            </div>
        </div>
    </header>
    <div class="main-section">
        <div class="main-msg">
            <p>
                Holiday gift guides Next slide You are on IP-Store.com. You can also
                shop on IP-Store India for millions of products with fast local
                delivery.
            </p>
            <!-- <a href="https://www.IP-Store.in/">Click here to go to IP-Store.in</a> -->
        </div>
    </div>
    <div class="shop-section">
        <div class="box1 box">
            <div class="box-content">
                <h2>Clothes & Fashion</h2>
                <div class="box-img" style="background-image: url('shop_img/box1_image.jpg')"></div>
                <p>See more</p>
            </div>
        </div>
        <div class="box2 box">
            <div class="box-content">
                <h2>Health & Personal Care</h2>
                <div class="box-img" style="background-image: url('shop_img/box2_image.jpg')"></div>
                <p>See more</p>
            </div>
        </div>
        <div class="box3 box">
            <div class="box-content">
                <h2>Upgrade your Furniture</h2>
                <div class="box-img" style="background-image: url('shop_img/box3_image.jpg')"></div>
                <p>See more</p>
            </div>
        </div>
        <div class="box4 box">
            <div class="box-content">
                <h2>Mobiles & Electronics</h2>
                <div class="box-img" style="background-image: url('shop_img/box4_image.jpg')"></div>
                <p>See more</p>
            </div>
        </div>
        <div class="box1 box">
            <div class="box-content">
                <h2>Deals on Beauty Products</h2>
                <div class="box-img" style="background-image: url('shop_img/box5_image.jpg')"></div>
                <p>See more</p>
            </div>
        </div>
        <div class="box2 box">
            <div class="box-content">
                <h2>Animal Care</h2>
                <div class="box-img" style="background-image: url('shop_img/box6_image.jpg')"></div>
                <p>See more</p>
            </div>
        </div>
        <div class="box3 box">
            <div class="box-content">
                <h2>Top Deals on toys</h2>
                <div class="box-img" style="background-image: url('shop_img/box7_image.jpg')"></div>
                <p>See more</p>
            </div>
        </div>
        <div class="box4 box">
            <div class="box-content">
                <h2>Women Clothing & Jewellery</h2>
                <div class="box-img" style="background-image: url('shop_img/box8_image.jpg')"></div>
                <p>See more</p>
            </div>
        </div>
    </div>
    <footer>
        <div class="foot-panel1">Back to Top</div>
        <div class="foot-panel2">
            <ul>
                <p>Get to Know Us</p>
                <a href="">Blog</a>
                <a href="">About IP-Store</a>
                <a href="">Investor Relations</a>
                <a href="">Become an Affiliate</a>
                <a href="">IP-Store Science</a>
            </ul>
            <ul>
                <p>
                    Make Money with Us</p>
                <a href="">Sell products on IP-Store</a>
                <a href="">Sell on IP-Store Business</a>
                <a href="">Sell apps on IP-Store</a>
                <a href=""> Advertise Your Products</a>
                <a href="">Host an IP-Store Hub</a>
            </ul>
        </div>
    </footer>
</body>

</html>