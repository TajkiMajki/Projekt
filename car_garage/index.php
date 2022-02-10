<?php
require("db.php");
include("auth.php");
$email=$_SESSION['email']; //include auth.php file on all secure pages ?>
<!doctype html>
<html lang="en">

<head>
    <link href="//db.onlinewebfonts.com/c/465b1cbe35b5ca0de556720c955abece?family=AbolitionW00-Regular" rel="stylesheet"
        type="text/css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="css/fixed.css">
    <link rel="stylesheet" href="css/background.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>



<body data-aos-easing="ease-out-back" data-aos-duration="1500" data-aos-delay="0">
    <div class="se-pre-con"></div>

    <nav class="navbar navbar-expand-md navbar-dark position-sticky-top fixed-top">
        <div class="canvas-area">
            <div class="head1">
                <a class="navbar-logo" href="#"><img src="img/logo.png"
                        style="height:35px; width: 214px;padding-top:1px"> </a></div>
            <div class="flot">
                <button class="navbar-toggler" type="button " style="float: right" data-toggle="collapse"
                    data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon "></span>
                </button>
            </div>

            <div class="collapse navbar-collapse text-right" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="menu.php">Parts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="visits.php">Book a visit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user.php">
                            <p><?php
            $query1="select name from customer where email='$email'"; 
            $nameg = mysqli_query($con,$query1);
            while ($row = mysqli_fetch_assoc($nameg)) {
                echo $row['name']."<br>";
            }?></p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>

    <section id="section2" class="demo">
        <h1
            style="font-family:'AbolitionW00-Regular';font-weight:normal;font-size:85px;padding-top:40px;text-shadow: 2px 2px #FF0000;">
            <span class="tagline">Best garage for your classic car</span><span class="punchline"> // Panda 3 //</span></h1>
        <a href="#about"><span></span></a>
    </section>


    <div class="container" style="height:600px" id="about">
        <div class="second">
            <div class="second-head" data-aos=zoom-out>
                <h1 style="font-family:'AbolitionW00-Regular';font-size:65px;font-weight:bolder">Our Story</h>
            </div>
            <div class="row">
                <div class="col-sm-5" id="second-para" data-aos=zoom-in>
                    <p class="space">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                    laboris nisi ut aliquip ex ea commodo consequat. 
                    Duis aute irure dolor in reprehenderit in voluptate 
                    velit esse cillum dolore eu fugiat nulla pariatur. 
                    Excepteur sint occaecat cupidatat non proident, 
                    sunt in culpa qui officia deserunt mollit anim id est laborum
                    </p>
                </div>
                <div class="col-sm-6">
                    <img src="img/Aboutus.png" style="height:15%;padding-left:100px;">
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid" style="background:#DCDB1D">


        <div class="second-head" data-aos=zoom-out>
            <h1 style="font-weight:bolder;font-family:'AbolitionW00-Regular';font-size:65px">Wide range of services to
                choose from</h>
        </div>
        <div class="row" id="row2">



            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="set1">
                <div class="set-img-1">
                    <div class="set-pic-1">
                        <div class="foodwel" data-aos="fade-right">
                            <div class="foodwelh1">
                                <div class="heading1">
                                Brake Repair
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="set1">
                <div class="set-img-2">
                    <div class="set-pic-1">
                        <div class="foodwel" data-aos="fade-right">
                            <div class="foodwelh1">
                                <div class="heading1">
                                Vehicle Inspection
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="set1">
                <div class="set-img-3">
                    <div class="set-pic-1">
                        <div class="foodwel" data-aos="fade-right">
                            <div class="foodwelh1">
                                <div class="heading1">
                                Lube, Oil & Filter Change
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="set1">
                <div class="set-img-4">
                    <div class="set-pic-1">
                        <div class="foodwel" data-aos="fade-right">
                            <div class="foodwelh1">
                                <div class="heading1">
                                Engine Diagnostics and Performance
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="container-fluid" style="background:#DCDB1D;padding-bottom:30px;">
        <div class="row" id="row2">



            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="set1">
                <div class="set-img-5">
                    <div class="set-pic-1">
                        <div class="foodwel" data-aos="fade-right">
                            <div class="foodwelh1">
                                <div class="heading1">
                                Exhaust System Repair
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="set1">
                <div class="set-img-6">
                    <div class="set-pic-1">
                        <div class="foodwel" data-aos="fade-right">
                            <div class="foodwelh1">
                                <div class="heading1">
                                Tire Services
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="set1">
                <div class="set-img-7">
                    <div class="set-pic-1">
                        <div class="foodwel" data-aos="fade-right">
                            <div class="foodwelh1">
                                <div class="heading1">
                                Electrical and Electronic Systems
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="set1">
                <div class="set-img-8">
                    <div class="set-pic-1">
                        <div class="foodwel" data-aos="fade-right">
                            <div class="foodwelh1">
                                <div class="heading1">
                                And more...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>




    <footer class="footer-area foo">
        <div class="footer-widget-wrap">
            <div class="container">
                <div class="row section-gap">
                    <div class="col-lg-4  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Opening Hours</h4>
                            <ul class="hr-list">
                                <li class="d-flex justify-content-between">
                                    <span>Monday - Friday</span> <span>9:00 am - 17:00 pm</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <span>Saturday</span> <span>10:00 am - 14:00 pm</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Contact Us</h4>
                            <p>
                                Powstańców Wielkopolskich 5, 61-895 Poznań
                            </p>
                            <p class="number">
                                61  655  33   33 <br>
                                420  997  666
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Newsletter</h4>
                            <p>We only send promo offers, no spam!</p>
                            <div class="d-flex flex-row" id="mc_embed_signup">
                                <form class="navbar-form"
                                    action="https://cdn.dribbble.com/users/109480/screenshots/4520802/404-del.gif"
                                    method="get" novalidate="true">
                                    <div class="input-group add-on align-items-center d-flex">
                                        <input class="form-control" name="EMAIL" placeholder="Your Email address"
                                            required="" type="email">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/scrollbar.js"></script>


    <script>
        //text out fade
        AOS.init({
            easing: 'ease-out-back',
            duration: '1200'
        });
    </script>


    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
        ScrollReveal({
            duration: 1000
        })
    </script>
        
    <script>
        //main text out fade
        ScrollReveal().reveal('.tagline', {
            delay: 500
        })
        ScrollReveal().reveal('.punchline', {
            delay: 3000
        })
    </script>

    <script>
        // footer scroll fade
        window.sr = ScrollReveal({
            reset: true
        });

        sr.reveal('.foo', {
            viewFactor: 0.3
        });

    </script>
    <script>
        $(window).load(function () {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>


</body>
</html>