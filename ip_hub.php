<?php
session_start();
if(!isset($_SESSION['loggedin']) || ($_SESSION['loggedin']!=true)){
header("location:ip_hub.php");
exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ip Hub <?php echo $_SESSION['username']?>– Watch TV Shows Online, Watch Movies Online</title>
    <link rel="stylesheet" href="hub.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" -->
    <!-- integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">  -->
</head>

<body>
    <div class="main">
        <div class="box"></div>
        <div class="hero">
            <span>Welcome <?php echo $_SESSION['username']?> to IP-Hub</span>
            <span>Enjoy big movies, hit series and more from ₹ 149.</span>
            <span>Join today. Cancel anytime.</span>
            <span>Ready to watch?</span>
            <div class="hero-buttons">
                <input type="text" placeholder="Search">
                <button class="btn btn-red">Get Started &gt;</button>
            </div>
            <form method="post" action="/login-form/logout.php">
            <div class="hero-buttons">
                <button class="btn btn-red-sm" aria-current="page" name="logout_button"
                    href="/login-form/logout.php">Logout <?php echo $_SESSION['username']?> Yout IP-Hub</button>
            </div>
            </form>
        </div>
    </div>

    <section class="first">
        <div>
            <span>Enjoy on your TV</span>
            <span>Watch on smart TVs, PlayStation, Xbox, Chromecast, Apple TV, Blu-ray players and more.</span>
        </div>

        <div class="secImg">
            <img src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/tv.png" alt="">
            <video src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/video-tv-in-0819.m4v"
                autoplay loop muted></video>
        </div>
    </section>

    <section class="first second">
        <div class="secImg">
            <img src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/mobile-0819.jpg" alt="">
        </div>
        <div>
            <span>Download your shows to watch offline</span>
            <span>Save your favourites easily and always have something to watch.</span>
        </div>
    </section>

    <section class="first third">
        <div>
            <span>Watch everywhere</span>
            <span>Stream unlimited movies and TV shows on your phone, tablet, laptop, and TV.</span>
        </div>
        <div class="secImg">
            <img src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/tv.png" alt="">
            <video src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/video-devices-in.m4v"
                autoplay loop muted></video>
        </div>
    </section>

    <section class="first second">
        <div class="secImg">
            <img src="https://occ-0-2849-3646.1.nflxso.net/dnm/api/v6/19OhWN2dO19C9txTON9tvTFtefw/AAAABVr8nYuAg0xDpXDv0VI9HUoH7r2aGp4TKRCsKNQrMwxzTtr-NlwOHeS8bCI2oeZddmu3nMYr3j9MjYhHyjBASb1FaOGYZNYvPBCL.png?r=54d"
                alt="">
        </div>
        <div>
            <span>Create profiles for kids</span>
            <span>Send children on adventures with their favourite characters in a space made just for them—free with
                your membership.</span>
        </div>
    </section>

    <section class="faq">
        <h2>Frequently Asked Questions</h2>
        <div class="faqbox">
            <span>What is IP-Hub</span>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="white" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 4V20" stroke="#141B34" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M4 12H20" stroke="#141B34" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </div>
        <div class="faqbox">
            <span>How much does IP-Hub cost?</span>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="white" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 4V20" stroke="#141B34" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M4 12H20" stroke="#141B34" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </div>
        <div class="faqbox">
            <span>What can I watch on IP-Hub?</span>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="white" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 4V20" stroke="#141B34" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M4 12H20" stroke="#141B34" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </div>
        <div class="faqbox">
            <span>Where can I watch?</span>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="white" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 4V20" stroke="#141B34" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M4 12H20" stroke="#141B34" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </div>
    </section>

    <footer>
        <div class="questions">
            Questions? Call 000-800-919-1694
        </div>
        <div class="footer">
            <div class="footer-item">
                <a href="faq">Investor Relations</a>
                <a href="faq">Jobs</a>
                <a href="faq">Ways to Watch</a>
                <a href="faq">Terms of Use</a>
            </div>

            <div class="footer-item">
                <a href="faq">Help Centre</a>
                <a href="faq">Account</a>
                <a href="faq">Speed Test</a>
                <a href="faq">Legal Notices</a>
            </div>
            <div class="footer-item">
                <a href="faq">Media Centre</a>
                <a href="faq">Privacy</a>
                <a href="faq">Cookie Preferences</a>
                <a href="faq">Corporate</a>
            </div>

            <div class="footer-item">
                <a href="faq">Contact Us</a>
                <a href="faq">Speed Test</a>
                <a href="faq">Legal Notices</a>
                <a href="faq">Only on IP-Hub</a>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>