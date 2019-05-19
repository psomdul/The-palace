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
        <title>Confirm Reservation</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Rubik:300,400,700"
            rel="stylesheet">

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">

        <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">

        <!-- Theme Style -->
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>

        <header role="banner">

            <nav class="navbar navbar-expand-md navbar-dark bg-light">
                <div class="container">
                    <a class="navbar-brand" href="index-1.php">Palace Capsule</a>
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
                                <a class="nav-link dropdown-toggle" href="rooms.php" id="dropdown04"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Rooms</a>

                                <div class="dropdown-menu" aria-labelledby="dropdown04">
                                    <a class="dropdown-item" href="rooms.php">Standard Room</a>

                                    <a class="dropdown-item" href="rooms.php">Superior Room</a>

                                    <a class="dropdown-item" href="rooms.php">Deluxe Room</a>

                                    <a class="dropdown-item" href="rooms.php">Suite</a>

                                    
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
            style="background-image: url(images/themist6.jpg);">
            <div class="container">
                <div class="row align-items-center site-hero-inner justify-content-center">
                    <div class="col-md-12 text-center">

                        <div class="mb-5 element-animate">
                            <h1>Thank you for Reservation</h1>

                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- END section -->


        <!-- loader -->
        <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
                <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
                <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                    stroke="#f4b214" /></svg></div>

        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/jquery-migrate-3.0.0.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>

        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/magnific-popup-options.js"></script>
        <script src="sweetalert2.all.min.js"></script>
        <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
        <script src="sweetalert2.min.js"></script>
        <link rel="stylesheet" href="sweetalert2.min.css">
        <script src="js/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script>
        let fullroom;
        $(document).ready(function() {
            console.log('9');
            fullroom = function() {
                console.log('260');
                Swal.fire(
  'ยืนยันการจองสำเร็จ',
  'โปรดติดต่อเบอร์ xxx-xxx-xxx ถ้ามีปัญหา',
  'success'
)
            }

            fullroom();
        });
        </script>
    </body>

    </html>