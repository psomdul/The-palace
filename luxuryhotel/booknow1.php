<?php
  include('connectdb.php');
  $typeroom = $_POST['typeroom'];
  $arrivedate = $_POST['arrivedate'];
  $departdate = $_POST['departdate'];

  $query = "SELECT * FROM room INNER JOIN type_room ON type_room.IdType = room.Type WHERE Type = '$typeroom' ORDER BY Idroom LIMIT 1;";
    
  $rs = $conn->query($query);

  $row = $rs->fetch_assoc();

$query2 = "SELECT DISTINCT(r.Idroom) FROM room r 
LEFT JOIN reservation re ON re.Idroom = r.Idroom
WHERE r.Type = '$typeroom' AND
(
    r.Idroom NOT in
    (
        SELECT DISTINCT(Idroom) FROM reservation WHERE 
        ArriveDate BETWEEN '$arrivedate' AND '$departdate'
        OR
       '$arrivedate' BETWEEN ArriveDate AND DATE_ADD(DepartDate, INTERVAL -1 DAY)
    )
)
ORDER BY r.Idroom";
   $rs1 = $conn->query($query2);
   $numroom = $rs1->num_rows;

   
?>

<!doctype html>
<html lang="en">


<head>
    <title>Palace Hotel</title>
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
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css">

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
                            <a class="nav-link active" href="index-1.php">Home</a>
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


                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- END header -->

    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5"
        style="background-image: url(images/themist8.jpg);">
        <div class="container">
            <div class="row align-items-center site-hero-inner justify-content-center">
                <div class="col-md-12 text-center">

                    <div class="mb-5 element-animate">
                        <h1>Reservation</h1>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END section -->

    <section class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="mb-5">Reservation Form</h2>
                    <form onsubmit="reserve();">

                        <label style="">Type Room</label><label style="margin-left:208px;">Price</label>

                        <br>
                        <input name="Type" value="<?php echo $row["Type"]; ?>" style="display:none;" id="Type" />
                        <img src="images/<?php echo $row["picture"] ?>" style="display:none;" id='imgmail'>
                        <input name="Nametype" value="<?php echo $row["NameType"]; ?>" placeholder="type room"
                            style="width:47%; margin-right: 28px; height: 38px;" id="NameType" disabled>
                        <input name="Price" value="<?php echo $row["Price"]; ?>" placeholder="price"
                            style="width:47%;height: 38px;" id="Price" disabled>
                        <div class="row">
                            <div class="col-sm-6 form-group">

                                <label for="">Arrival Date</label>
                                <div style="position: relative;">
                                    <span class="fa fa-calendar icon"
                                        style="position: absolute; right: 10px; top: 10px;"></span>
                                    <input name="arrivedate" type='text' class="form-control" id='arrival_date'
                                        autocomplete="off" value="<?= $arrivedate ?>" disabled>
                                </div>
                            </div>

                            <div class="col-sm-6 form-group">

                                <label for="">Departure Date</label>
                                <div style="position: relative;">
                                    <span class="fa fa-calendar icon"
                                        style="position: absolute; right: 10px; top: 10px;"></span>
                                    <input name="departdate" type='text' class="form-control" id='departure_date'
                                        autocomplete="off" value="<?= $departdate ?>" disabled>
                                </div>
                            </div>
                            <small style="color:red">ถ้าต้องการเปลี่ยนแปลงวันที่ใหม่ โปรดกลับไปหน้าจองวันที่ หรือ <a
                                    href="booking.php">Click This</a></small>
                        </div>


                        <div class="row">
                          

                            <div class="col-md-6 form-group">
                                <label for="room">Guests</label>
                                <select name="guest" id="guest" class="form-control">
                                    <!-- <option value="1">1 Guest</option> -->
                                    <?php
                                    for($i=1; $i<=$row["Amountguest"]; $i++){
                                        echo "<option value=\"$i\">$i Guest</option>";
                                        
                                   
                                }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="room">Room</label>
                                <select name="nroom" id="nroom" class="form-control">
                                    <?php
                                        for($i = 1; $i <= $numroom; $i++){
                                           echo "<option value=\"$i\">$i</option>";
                                           
                                        }

?>
                                </select>
                            </div>
                        </div>

                        <label for="email">Email</label> <label style="margin-left: 245px;">Phone</label>
                        <div class=row>
                            <input name="email" type="email" id="email" class="form-control"
                                style="width:45%;margin-left:2.5%;margin-right:5%">

                            <input name="phone" type="number" id="phone" class="form-control" style="width:45%">
                            <small style="color:red;">ทางโรงแรมต้องการเก็บข้อมูล email
                                ของท่านเพื่อนำไปใช้ในการค้นหาความต้องการของลูกค้าในภายหลัง</small>
                        </div>
                        <label style="">First Name</label><label style="margin-left:208px;">Last Name</label>
                        <input name="fname" style="width:47%; margin-right: 28px; height: 38px;" id="fname">
                        <input name="lname" style="width:47%;height: 38px;" id="lname">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="message">Write a Note</label>
                                <textarea name="message" id="message" class="form-control " cols="30"
                                    rows="8"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <button type="button" onclick="reserve();" value="Book now" class="btn btn-primary">Book
                                    now</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <h3 class="mb-5">Featured Room</h3>
                    <div class="media d-block room mb-0">
                        <figure>
                            <img src="images/<?php echo $row["picture"]  ?>" alt="Generic placeholder image"
                                class="img-fluid" id='imgmail'>
                            <div class="overlap-text">
                                
                            </div>
                        </figure>
                        <div class="media-body">
                            <h3 class="mt-0"><a href="#"><?php echo $row["NameType"] ?></a></h3>
                            <h3 class="mt-0">
                              <a href="#">Price: <?php echo $row["Price"]?> Bath/Night</a>
                            </h3>

                            <ul class="room-specs">
                                <li><span class="ion-ios-people-outline"></span><?php echo $row["Amountguest"] ?></li>
                                <li><span class="ion-ios-crop"></span><?php echo $row["Roomsize"] ?><sup>2</sup></li>
                                <li><span class="far fa-building"></span><?php echo $numroom . " Room available"?></li>
                            </ul>

                            <p><?php echo $row["Detail"] ?></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END section -->





    <section class="section-cover" data-stellar-background-ratio="0.5"
        style="background-image: url(images/themist7.jpg);">
        <div class="container">
            <div class="row justify-content-center align-items-center intro">
                <div class="col-md-9 text-center element-animate">
                    <h1 style="color: white; background-color:rgba(0, 0, 0, 0.5);">Relax and Enjoy your Holiday</h1>

                </div>
            </div>
        </div>
    </section>
    <!-- END section -->

    <footer class="site-footer">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-4">
                    <h3>Phone Support</h3>
                    <p>24/7 Call us now.</p>
                    <p class="lead"><a href="tel://">+ 1 332 3093 323</a></p>
                </div>
                <div class="col-md-4">
                    <h3>Connect With Us</h3>
                    <p>We are socialized. Follow us</p>
                    <p>
                        <a href="#" class="pl-0 p-3"><span class="fa fa-facebook"></span></a>
                        <a href="#" class="p-3"><span class="fa fa-twitter"></span></a>
                        <a href="#" class="p-3"><span class="fa fa-instagram"></span></a>
                        <a href="#" class="p-3"><span class="fa fa-vimeo"></span></a>
                        <a href="#" class="p-3"><span class="fa fa-youtube-play"></span></a>
                    </p>
                </div>
                <div class="col-md-4">
                    <h3>Connect With Us</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, odio.</p>
                    <form action="#" class="subscribe">
                        <div class="form-group">
                            <button type="submit"><span class="ion-ios-arrow-thin-right"></span></button>
                            <input type="email" class="form-control" placeholder="Enter email">
                        </div>

                    </form>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    &copy;
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                    document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                        aria-hidden="true"></button> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
            </div>
        </div>
    </footer>
    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#f4b214" /></svg></div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js">
    < script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" >
    </script>
    </script>

    <script>
    $('#arrival_date, #departure_date').datepicker({});
    </script>



    <script src="js/main.js"></script>

    <?php 

?>
    <script>
    let reserve;
    let fullroom;
    $(document).ready(function() {

        reserve = function(params) {
            if ($("#Type").val() == "" || $("#NameType").val() == "" || $("#Price").val() == "" ||
                $("#arrival_date").val() == "" || $("#departure_date").val() == "" || $("#guest").val() ==
                "" ||
                $("#email").val() == "" || $("#phone").val() == "" || $("#fname").val() == "" ||
                $("#lname").val() == "" || $("#nroom").val() == "") {
                alert("โปรดกรอกข้อมูลให้ครบทุกช่อง");
                 } else if ($("#phone").val().length >= 0 && $("#phone").val().length < 10) {
                alert("เบอร์ต้องมีจำนวน 10 เลข");
            } else {
                let imgmail = $("#imgmail").attr('src');
                let Type = $("#Type").val();
                let NameType = $("#NameType").val();
                let Price = $("#Price").val();
                let Arrive = $("#arrival_date").val();
                let Depart = $("#departure_date").val();
                let guest = $("#guest").val();
                let email = $("#email").val();
                let phone = $("#phone").val();
                let fname = $("#fname").val();
                let lname = $("#lname").val();
                let message = $("#message").val();
                let nroom = $("#nroom").val();



                console.log(Type + Price + Arrive + Depart + guest + email + phone + fname + lname +
                    message + imgmail + NameType +
                    '335')

                Swal.queue([{
                    title: 'ยืนยันการจอง',
                    confirmButtonText: 'ยืนยัน',
                    text: 'อาจใช้เวลาในการทำการสักครู่ ' +
                        'กรุณารอสักครู่',
                    showLoaderOnConfirm: true,
                    preConfirm: () => {
                        return $.post("complete.php", {
                                Type: Type,
                                Price: Price,
                                arrivedate: Arrive,
                                departdate: Depart,
                                guest: guest,
                                email: email,
                                phone: phone,
                                fname: fname,
                                lname: lname,
                                message: message,
                                nroom: nroom,
                                imgmail: imgmail,
                                NameType: NameType
                            },
                            function(data, status) {
                                console.log(data);

                            }
                        );
                    }
                }]).then((result) => {
                    // alert('458')
                    console.log(result.value);
                    if (result.value == 'thankyou') {
                        Swal.fire({
                            type: 'success',
                            title: 'จองสำเร็จ',
                        }).then(result => {
                            if (result) {
                                console.log('358');

                                location.href = "index-1.php";

                            }
                        })

                    }

                    if (result.value == "Reserved") {
                        Swal.fire({
                            type: 'error',
                            title: 'ROOM FULL',
                        })
                    }

                    if (result.value == "err") {
                        Swal.fire({
                            type: 'error',
                            title: 'Your work has been saved',
                        }).then(result => {
                            if (result) {
                                console.log('393');
                                alert("err db")
                                // location.reload();

                            }
                        })
                    }
                    // setTimeout(() => {
                    //     if (data.status) {
                    //         location.reload();
                    //     }
                    // }, 2000);
                    // Swal.fire({

                    //     type: 'success',
                    //     title: 'Your work has been saved',
                    //     showConfirmButton: false,
                    //     timer: 1500
                    // })
                })
            }
        }
        fullroom = function() {
            console.log('260');
            Swal.fire(
                'ในช่วงเวลานี้ที่ห้องพักที่ท่านเลือกเต็มหมดแล้ว',
                'โปรดเลือกเวลาเข้าพักใหม่ หรือ เลือกห้องพักประเภทอื่น ',
                'success'

            ).then(() => {
                window.location.href = "booking.php"
            })
        }

        if (<?=$numroom ?> == 0) {
            console.log('457');

            fullroom()
        } else {
            console.log('461');
        }
    });
    </script>

</body>

</html>