<?php 
require('db.php');
include("auth.php");
$email=$_SESSION['email'];

$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$res_date = $_POST['res_date']; 
$car_quantity = $_REQUEST['car_quantity'];		
$res_time = $_REQUEST['res_time'];
$email = $_SESSION["email"];
$vip_id=$_REQUEST['vip_id'];
$ins_query="insert into visits (`res_date`,`car_quantity`,`res_time`,`email`,`vip_id`) values ('$res_date','$car_quantity','$res_time','$email','$vip_id')";

mysqli_query($con,$ins_query) or die(mysql_error());
$status = "Your visit has been booked</br>";
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link href="//db.onlinewebfonts.com/c/465b1cbe35b5ca0de556720c955abece?family=AbolitionW00-Regular" rel="stylesheet"
        type="text/css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/background.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body data-aos-easing="ease-out-back" data-aos-duration="1500" data-aos-delay="0">
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
                        <a class="nav-link" href="index.php">about</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="menu.php">parts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="visits.php">book a visit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">logout</a>
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

    <section id="section1" class="demo">
        <h1 style="font-family:'AbolitionW00-Regular';font-weight:bolder!important;font-size:95px;padding-top:40px;">Visit inquiry form (we'll call you to discuss details) </h1>
        <a href="#visits"><span></span></a>
    </section>




    <div class="container-fluid" id="visits">
        <form method="post" action="" name="visits">
            <h1 class="chooseres" style="">Choose a suitable date below.</h1>
            <div class="row">

                <div class="col-md-4"></div>

                <div class="col-md-4" id="blockres">

                    <input type="hidden" name="new" value="1" />
                    <input type="hidden" name="vip_id" value="" />
                    <input type="date" name="res_date" required />
                    <input type="number" name="car_quantity" placeholder="Number of cars" style="text-align:center"
                        required />
                    <input type="time" name="res_time" style="align-content:center" id="timepick" min="9:00"
                        max="17:00">
                    <label for="timepick"></label>
                    <span style="padding-top: 10px"><button>Send!</button></span>

                </div>

                <div class="col-md-4"></div>
            </div>

        </form>
        <p class="flickr"><?php echo $status; ?></p>
    </div>





    <script>
        $(function () {
            $('a[href*=#]').on('click', function (e) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: $($(this).attr('href')).offset().top
                }, 500, 'linear');
            });
        });
    </script>
</body>

</html>