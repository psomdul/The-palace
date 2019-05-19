<?php
  include('connectdb.php');
?>
<!doctype html>
<html lang="en">

<head>
    <!-- login bootstrap -->

    <link rel="icon" type="image/png" href="images/icons/favicon.ico">
    </link>

    <!-- =============================================================================================== -->

    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    </link>

    <!-- =============================================================================================== -->

    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    </link>

    <!-- =============================================================================================== -->

    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    </link>

    <!-- =============================================================================================== -->

    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    </link>

    <!-- =============================================================================================== -->

    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    </link>

    <!-- =============================================================================================== -->

    <link rel="stylesheet" type="text/css" href="css/util.css">
    </link>

    <link rel="stylesheet" type="text/css" href="css/main.css">
    </link>

    <!-- login bootstrap -->

    <title>Rooms</title>

    <meta charset="utf-8">
    </meta>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </meta>

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Rubik:300,400,700"
        rel="stylesheet">
    </link>

    <link rel="stylesheet" href="css/bootstrap.css">
    </link>

    <link rel="stylesheet" href="css/animate.css">
    </link>

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    </link>

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    </link>

    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    </link>

    <link rel="stylesheet" href="css/magnific-popup.css">
    </link>

    <!-- Theme Style -->

    <link rel="stylesheet" href="css/style.css">
    </link>
</head>

<body>
    <header role="banner">
        <nav class="navbar navbar-expand-md navbar-dark bg-light">
            <div class="container">
                <a class="navbar-brand" href="index-1.php">PalaceCapsule</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05"
                    aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
                    <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index-1.php">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="rooms.php" id="dropdown04" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Rooms</a>

                            <div class="dropdown-menu" aria-labelledby="dropdown04">
                                <a class="dropdown-item" href="rooms.php">Standard Room</a>

                                <a class="dropdown-item" href="rooms.php">Superior Room</a>

                                <a class="dropdown-item" href="rooms.php">Deluxe Room</a>

                                <a class="dropdown-item" href="rooms.php">Suite</a>

                                <a class="dropdown-item" href="rooms.php">Sweet</a>
                            </div>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contact1.php">Contact</a>
                        </li>
                        <li class="nav-item cta">
                            <a class="nav-link" href="booking.php"
                                style="border: 3px solid #ccc; padding: 10px 15px; margin-top: 13%">
                                Book now

                            </a>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- END header -->

    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5"
        style="background-image: url(images/DEPT-TheMIST-15.jpg);">
        <div class="container">
            <div class="row align-items-center site-hero-inner justify-content-center">
                <div class="col-md-12 text-center">
                    <div class="mb-5 element-animate">
                        <h1>Our Rooms</h1>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- END section -->

    <section class="site-section">
        <div class="container">
            <center>
                <div style="width: 280px;
	height: 74px;
	border: solid 3px #393939;
	font-size: 43.32px;
	font-weight: 600;
	color: #393939;
	line-height: 68px;
  text-align: center;
  margin-bottom: 50px">
                    The Palace
                </div>
            </center>
            <div class="row">
                <?PHP
        //   $query = "SELECT * FROM room r ".
        //   "INNER JOIN type_room tr ON tr.IdType = r.Type ".
        //   "WHERE r.Idroom = '1010' or r.Idroom = '2010' or r.Idroom = '3010' or r.Idroom = '9001' ".
        //   "ORDER BY Idroom ASC";
            $query = "SELECT * FROM `type_room` ORDER BY IdType ASC";
          $rs = $conn->query($query);

          if ($rs->num_rows > 0) {
              
            // output data of each row
            $count = 0;

            while($row = $rs->fetch_assoc()) {
                
                $query1 = "SELECT * FROM room INNER JOIN type_room ON type_room.IdType = room.Type  INNER JOIN status_reserver s ON s.StatusId =  Status
                WHERE room.Type = '".$row["IdType"]."'  LIMIT 0,1";
                
                
                 $rs1 = $conn->query($query1);
                 
                 if ($rs1->num_rows > 0) {

                     

                    $row1 = $rs1->fetch_assoc();
                        echo "<div class=\"col-md-4 mb-4\" >".
                        "<div class=\"media d-block room mb-0\">".
                          "<figure>".
                            "<img src=\"images/".$row1["picture"]."\"". " " ."alt=\"Generic placeholder image\" class=\"img-fluid\" 
            style=\": width: 420px;
            height: 250px;\">".
              
            
                            
                          "</figure>".

                          "<div class=\"media-body\" style=\"padding: 30px;\">".
                            "<h3 class=\"mt-0\">".
                              "<a href=\"#\">".$row1["NameType"]."</a>".
                            "</h3>".
                            "<h3 class=\"mt-0\">".
                              "<a href=\"#\">Price: ".$row1["Price"]." Bath/Night</a>".
                            "</h3>".
                            "<ul class=\"room-specs\">".
                              "<li>".
                                "<span class=\"ion-ios-people-outline\"></span>".
                                $row1["Amountguest"]." guest".
                              "</li>".
              
                              "<li>".
                                "<span class=\"ion-ios-crop\"></span>".
                                $row1["Roomsize"] ."ft".
              
                                "<sup>2</sup>".
                              "</li>".
                            "</ul>".
              
                            "<p>". $row1["Detail"]."</p>".
              
                            
                          "</div>".
                          
                        "</div>".
                      "</div>";
                    

                 }
                 else {
                    $count = $count+1;
                    // show room full
                 }
                
            }
            if ($count == $rs->num_rows ) echo '<input type="hidden" id="isRoomFull" value="true">';
        } 
        ?>

            </div>
        </div>
    </section>



    <!-- END section -->



    <script>
    document.write(new Date().getFullYear());
    </script>

    All rights reserved | This template is made with

    <i class="fa fa-heart-o" aria-hidden="true"></i>

    by

    <a href="https://colorlib.com" target="_blank">Colorlib</a>

    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    </div>
    </div>
    </div>
    </footer>

    <!-- END footer -->
    <!-- loader -->

    <div id="loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"></circle>

            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#f4b214">
            </circle>
        </svg>
    </div>
    <!-- Modal -->

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered-lg" role="document">
            <div class="modal-content modal-lg">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">login</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="limiter">
                        <div class="container-login100">
                            <div class="wrap-login100">
                                <div class="login100-pic js-tilt" data-tilt="data-tilt">
                                    <img src="images/img-01.png" alt="IMG">
                                </div>

                                <form class="login100-form validate-form">
                                    <span class="login100-form-title">Member Login</span>

                                    <div class="wrap-input100 validate-input"
                                        data-validate="Valid email is required: ex@abc.xyz">
                                        <input class="input100" type="text" name="email" placeholder="Email"></input>

                                        <span class="focus-input100"></span>

                                        <span class="symbol-input100">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                        </span>
                                    </div>

                                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                                        <input class="input100" type="password" name="pass"
                                            placeholder="Password"></input>

                                        <span class="focus-input100"></span>

                                        <span class="symbol-input100">
                                            <i class="fa fa-lock" aria-hidden="true"></i>
                                        </span>
                                    </div>

                                    <div class="container-login100-form-btn">
                                        <button class="login100-form-btn">Login</button>
                                    </div>

                                    <div class="text-center p-t-12">
                                        <span class="txt1">Forgot</span>

                                        <a class="txt2" href="#">Username / Password?</a>
                                    </div>

                                    <div class="text-center p-t-136">
                                        <a class="txt2" href="#">
                                            Create your Account

                                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script>
    let fullroom;
    $(document).ready(function() {
        fullroom = function() {
            console.log('260');
            Swal.fire({
                type: 'warning',
                title: 'Room is Unavailable',

                footer: '<a href="contact1.php">Please Contact Us</a>'
            })
        }
        let isFull = $('#isRoomFull').val();
        console.log("isFull");
        console.log(isFull);
        console.log("isFull");
        if (isFull == "true") {
            fullroom();
        }
    });
    </script>
</body>

</html>