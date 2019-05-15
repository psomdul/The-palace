<?php
  include('connectdb.php');
  $email = $_GET["email"];
?>
<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    .col-md-4.mb-4:hover div.overlap-text {
        display: block;

    }

    div.overlap-text {
        display: none;
    }
    </style>

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

    <title>Feed back</title>

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
                            <a class="nav-link dropdown-toggle" href="rooms1.php" id="dropdown04" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Rooms</a>

                            <div class="dropdown-menu" aria-labelledby="dropdown04">
                                <a class="dropdown-item" href="rooms1.php">Standard Room</a>

                                <a class="dropdown-item" href="rooms1.php">Superior Room</a>

                                <a class="dropdown-item" href="rooms1.php">Deluxe Room</a>

                                <a class="dropdown-item" href="rooms1.php">Suite</a>

                                
                            </div>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="about1.php">About</a>
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
                        <h1>ให้คะแนนความพึงพอใจในการเข้าพักในโรงแรมของเรา</h1>

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
                <form style="margin-left:30%">
                    <div class="form-group">
                        <label for="exampleInputEmail1">
                            <h3>Emailของท่าน</h3>
                        </label>
                        <input type="text" class="form-control" id="email" name="email" readonly
                            value="<?php echo $email?>">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">
                            <h3>ให้คะแนนความพึงพอใจ</h3>
                        </label><br>
                        <div class="form-group">
                            <select class="form-control" id="score">
                                <option value="1">มากที่สุด</option>
                                <option value="2">มาก</option>
                                <option value="3">พอใจ</option>
                                <option value="4">น้อย</option>
                                <option value="5">น้อยมาก</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">
                            <h3>ความคิดเห็นเพิ่มเติม</h3>
                        </label>
                        <textarea rows="4" cols="50" class="form-control" id="commentd" name="commentd"
                        > </textarea>

                    </div>

                    <button type="button" onclick="Uploadpaymentimg();" class="btn btn-primary">Submit</button>
                </form>
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


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script>
    let Uploadpaymentimg;


    $(document).ready(function() {
        Uploadpaymentimg = function() {
            let email = $("#email").val();
            let score =  $('#score').val();
            let commentd = $('#commentd').val();
            console.log(email,score,commentd + '555');
            const formData = new FormData();
            formData.append('email', email);
            formData.append('score', score);
            formData.append('commentd', commentd);
            // console.log($.ajax);

            $.ajax({
                url: 'upcomment.php',
                data: formData,
                type: 'POST',
                dataType: 'json',
                contentType: false,
                processData: false,
                success: function(data) {
                    console.log(data);
                    console.log('297');
                    Swal.fire({
                        type: 'success',
                        title: 'ยืนยันการชำระเงินสำเร็จ',
                        html: '<a href="index-1.php">กดที่นี้เพื่อกลับไปหน้าหลักของเว็ปไซต์</a>',
                        showConfirmButton: false,
                    })

                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    alert(errorThrown);
                    console.log(textStatus);
                    console.log(XMLHttpRequest);


                }
            })
        }


    })

    // fullroom = function() {
    //         console.log('260');
    //         Swal.fire({
    //             type: 'warning',
    //             title: 'Room is Unavailable',
    //             footer: '<a href="contact1.php">Please Contact Us</a>'
    //         })
    //     }
    //     let isFull = $('#isRoomFull').val();
    //     console.log("isFull");
    //     console.log(isFull);
    //     console.log("isFull");
    //     if (isFull == "true") {
    //         fullroom();
    //     }
    </script>
</body>

</html>