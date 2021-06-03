<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>IdeaPress</title>

    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>

</head>

<body class="campaign-detail">
    <div id="wrapper">
        <header id="header" class="site-header">
            <div class="container">
                <div class="site-brand">
                    <a href="index.html"><img src="images/assets/logo.png" alt="" /></a>
                </div>
                <div class="right-header">
                    <nav class="main-menu">
                        <button class="c-hamburger c-hamburger--htx">
                            <span></span>
                        </button>
                        <ul>
                            <li>
                                <a href="#">Home<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">Home v1</a></li>
                                    <li><a href="index_2.html">Home v2</a></li>
                                    <li><a href="index_3.html">Home v3</a></li>
                                    <li><a href="index_gradient.html">Home Gradient</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Explore<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="explore_layout_one.html">Explore Layout One</a>
                                    </li>
                                    <li>
                                        <a href="explore_layout_two.html">Explore Layout Two</a>
                                    </li>
                                    <li>
                                        <a href="explore_layout_three.html">Explore Layout Three</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Start a Campaigns<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="create_a_campaign.html">Create a campaign</a>
                                    </li>
                                    <li>
                                        <a href="update_a_campaign.html">Update a campaign</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Pages<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="coming_soon.html">Coming Soon</a></li>
                                    <li><a href="about_us.html">About Us</a></li>
                                    <li><a href="404.html">404</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="faq.html">Faq</a></li>
                                    <li><a href="campaign_detail.php">Campaign details</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Blog<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="blog_grid.html">Blog Grid</a></li>
                                    <li><a href="blog_list.html">Blog List</a></li>
                                    <li>
                                        <a href="blog_list_sidebar.html">Blog Grid Sidebar</a>
                                    </li>
                                    <li><a href="blog_details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Shop<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="shop-grid.html">Shop Grid</a></li>
                                    <li><a href="shop-details.html">Shop Details</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                </ul>
                            </li>
                            <li><a href="contact_us.html">Contact</a></li>
                            <li>
                                <a href="#">Account<i class="fa fa-caret-down" aria-hidden="true"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="dashboard.html">Dashboard</a></li>
                                    <li><a href="profile.html">Profile</a></li>
                                    <li>
                                        <a href="account_my_campaigns.html">My Campaigns</a>
                                    </li>
                                    <li>
                                        <a href="account_pledges_received.html">Pledges Received</a>
                                    </li>
                                    <li>
                                        <a href="account_backed_campaigns.html">Backed Campaigns</a>
                                    </li>
                                    <li><a href="account_rewards.html">Rewards</a></li>
                                    <li><a href="account_payments.html">Payments</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <div class="search-icon">
                        <a href="#" class="ion-ios-search-strong"></a>
                        <div class="form-search"></div>
                        <form action="#" method="POST" id="searchForm">
                            <input type="text" value="" name="search" placeholder="Search..." />
                            <button type="submit" value="">
                                <span class="ion-ios-search-strong"></span>
                            </button>
                        </form>
                    </div>
                    <div class="login login-button">
                        <a href="login.html" class="btn-primary">Login</a>
                    </div>
                </div>
            </div>
        </header>

        <?php
        if (isset($_POST['submit'])) {

            $amount = $_POST['amount'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];

            $sql = "INSERT INTO user_donation_details (Amount, Name, Email, Phone)
						VALUES ('$amount', '$name', '$email', '$phone')";

            $s = "select * from user_donation_details where email = '$email'";
            $results = mysqli_query($conn, $s);

            $num = mysqli_num_rows($results);
            // echo $num;
            if ($num > 0) {
                echo "user already donated before.. do you want to donate again";
            } else {
                $sql = "INSERT INTO user_donation_details (Amount, Name, Email, Phone)
						VALUES ('$amount', '$name', '$email', '$phone')";
                if ($conn->query($sql)) {
                    // header('location:campaign_details.php');
                    echo "<div class='alert alert-success' style='font-size:16px;'>The payment was sucessfully completed.</div>";
                } else {
                    echo "<div class='alert alert-danger' style='font-size:16px;'>failed</div>";
                }
            }
        }
        ?>
        <main id="main" class="site-main">
            <!-- <div class="page-title background-campaign">
                <div class="container">
                    <h1>The Oreous Pillow</h1>
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Home</a><span>/</span></li>
                            <li>The Oreous Pillow</li>
                        </ul>
                    </div>
                </div> 
    </div>-->
        </main>
        <footer id="footer" class="site-footer">
            <div class="footer-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-sm-4 col-4">
                            <div class="footer-menu-item">
                                <h3>Our company</h3>
                                <ul>
                                    <li><a href="#">What is Startup Idea</a></li>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">How It Works</a></li>
                                    <li><a href="#">What Is This</a></li>
                                    <li><a href="#">Jobs</a></li>
                                    <li><a href="#">Press</a></li>
                                    <li><a href="#">Starts</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-4 col-4">
                            <div class="footer-menu-item">
                                <h3>Campaign</h3>
                                <ul>
                                    <li><a href="#">Start Your Campaign</a></li>
                                    <li><a href="#">Pricing Campaign</a></li>
                                    <li><a href="#">Campaign Support</a></li>
                                    <li><a href="#">Trust &amp; Safety</a></li>
                                    <li><a href="#">Support</a></li>
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-4 col-4">
                            <div class="footer-menu-item">
                                <h3>Explore</h3>
                                <ul>
                                    <li><a href="#">Design &amp; Art</a></li>
                                    <li><a href="#">Crafts</a></li>
                                    <li><a href="#">Film &amp; Video</a></li>
                                    <li><a href="#">Food</a></li>
                                    <li><a href="#">Book</a></li>
                                    <li><a href="#">Games</a></li>
                                    <li><a href="#">Technology</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-12 col-12">
                            <div class="footer-menu-item newsletter">
                                <h3>Newsletter</h3>
                                <div class="newsletter-description">
                                    Private, secure, spam-free
                                </div>
                                <form action="https://template.themeburst.com/ideapress/s" method="POST" id="newsletterForm">
                                    <input type="text" value="" name="s" placeholder="Enter your email..." />
                                    <button type="submit" value="">
                                        <span class="ion-android-drafts"></span>
                                    </button>
                                </form>
                                <div class="follow">
                                    <h3>Follow us</h3>
                                    <ul>
                                        <li class="facebook">
                                            <a target="_Blank" href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </li>
                                        <li class="twitter">
                                            <a target="_Blank" href="https://www.twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        </li>
                                        <li class="instagram">
                                            <a target="_Blank" href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </li>
                                        <li class="google">
                                            <a target="_Blank" href="https://www.google.com/"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        </li>
                                        <li class="youtube">
                                            <a target="_Blank" href="https://www.youtube.com/"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-top">
                        <p class="payment-img">
                            <img src="images/assets/payment-methods.png" alt="" />
                        </p>
                        <div class="footer-top-right">
                            <div class="dropdow field-select">
                                <select name="s">
                                    <option value="">$ US Dollar (USD)</option>
                                    <option value="">£ Pound Sterling (GBP)</option>
                                    <option value="">€ Euro (EUR)</option>
                                </select>
                            </div>
                            <div class="dropdow field-select">
                                <select name="s">
                                    <option value="">English</option>
                                    <option value="">Greek (Ελληνικά)</option>
                                    <option value="">Deutsch (German)</option>
                                    <option value="">العربية (Arabic)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    <p class="copyright">2018 by ideapress. All Rights Reserved.</p>
                    <a href="#" class="back-top">Back to top<span class="ion-android-arrow-up"></span></a>
                </div>
            </div>
        </footer>
    </div>

    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="libs/popper/popper.js"></script>
    <script src="libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="libs/owl-carousel/owl.carousel.min.js"></script>
    <script src="libs/owl-carousel/carousel.min.js"></script>
    <script src="libs/jquery.countdown/jquery.countdown.min.js"></script>
    <script src="libs/wow/wow.min.js"></script>
    <script src="libs/isotope/isotope.pkgd.min.js"></script>
    <script src="libs/bxslider/jquery.bxslider.min.js"></script>
    <script src="libs/magicsuggest/magicsuggest-min.js"></script>
    <script src="libs/quilljs/js/quill.core.js"></script>
    <script src="libs/quilljs/js/quill.js"></script>

    <script src="js/main.js"></script>
    <script>
        function validate(evt) {
            var theEvent = evt || window.event;
            var key = theEvent.keyCode || theEvent.which;
            key = String.fromCharCode(key);
            var regex = /[0-9]|\./;
            if (!regex.test(key)) {
                theEvent.returnValue = false;
                if (theEvent.preventDefault) theEvent.preventDefault();
            }
        }
    </script>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>