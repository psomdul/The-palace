<?php
  include('connectdb.php');
?>
<!doctype html>
<html lang="en">

<head>
<style>
   .col-md-4.mb-4:hover div.overlap-text{
    display: block;
        
}
div.overlap-text{
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

    <title>Booking</title>

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

    <link rel="stylesheet" media="all" type="text/css" href="jquerydatepicker/jquery-ui.css" />
		<link rel="stylesheet" media="all" type="text/css" href="jquerydatepicker/jquery-ui-timepicker-addon.css" />

		<script type="text/javascript" src="jquerydatepicker/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="jquerydatepicker/jquery-ui.min.js"></script>

		<script type="text/javascript" src="jquerydatepicker/jquery-ui-timepicker-addon.js"></script>
		<script type="text/javascript" src="jquerydatepicker/jquery-ui-sliderAccess.js"></script>

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
            <h3 style="color:white;padding-top:250px; margin-left:290px;"><strong s>Check Date</strong></h3>
            <form action="booknow1.php" method="post">
            <div class="row">
                <div class="col" >
                    <h5 style="color:white;margin-left:150px;">Arrive date</h5>
                    <div class="row">
                        <!-- <input type="date" style="color:black;margin-left:160px; " id="arrivedate" name="arrivedate" > -->
                        <input type="text" name="arrivedate" id="arrivedate" value="" style="color:black;margin-left:160px;" autocomplete="off"/> 
                    </div>
                          <div class="col">
                              <h5 style="color:white;margin-left:135px;">Room type</h5>
                              <div class="row">       
                             <select style="margin-left:150px;width:160px;padding-left:30px;" name="typeroom">
                                <option value="1">Standard</option>
                                <option value="2">Superior</option>
                                <option value="3">Deluxe</option>
                                <option value="4">Suite</option>
                              </select>
                            </div>
                          </div>
                </div>
                <div class="col-8" >
                    <h5 style="color:white; ">Depart date</h5>
                    <div class="row">
                        <!-- <input type="date" style="color:black;margin-left:10px;" id="departdate" name="departdate" > -->
                        <input type="text" name="departdate" id="departdate" value=""  autocomplete="off"/> 
                    </div>
                </div>

                <button type="submit" class="btn btn-success" style="margin-left:300px;margin-top:2%;">Success</button>
            </div>
            </form>
           
            <!-- <div class="row" > -->

            <!-- <h3 style="color:white;margin-top:250px; margin-left:290px;"><strong s>Check Date</strong></h3>
        <div class="col-8" style="border:1px solid;">
                <h5 style="color:white;">Arrive date</h5>
                <div class="row">
                <h5 style="color:white; ">Depart date</h5>
                </div>
                <div class="row">
                <input type="date" style="color:white; " id="arrivedate" name="arrivedate">
                </div>
           <div class="col">
            <h5 style="color:white;">Type room</h5>
                          <div class="row">       
                             <select>
                                <option value="1">Standard</option>
                                <option value="2">Superior</option>
                                <option value="3">Deluxe</option>
                                <option value="4">Suite</option>
                              </select>
                            </div>
                              <div class="col">
                                <div class="row" style="width:100%">
                                <button type="button" class="btn btn-success">Success</button>
                                </div>
                              </div>   
            </div>
        </div>
                <div class="col" style="border:1px solid;">
                <h5 style="color:white; ">Depart date</h5>
                  <div class="row">
                    <input type="date" style="color:white;" id="departdate" name="departdate">
                  </div>
                </div>     -->
            <!-- </div> -->
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
              
                            "<div class=\"overlap-text\" style=\"margin-bottom:80px;\">".
                              "<span >".
                                
                                "<a href=\"#\" style=\"color:white;padding-left:115px;margin-bottom:50px;\">".$row1["NameType"]."</a>".
                                
                              "</span>".
                              
                            "</div>".
                          "</figure>".
              
                          "<div class=\"media-body\" style=\"padding: 30px;\">".
                            "<h3 class=\"mt-0\">".
                              
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
    

    <!-- <script src="js/jquery-3.2.1.min.js"></script> -->
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
    let fullroom;
    let isFull = $('#isRoomFull').val();
    var startDateTextBox = $('#arrivedate');
	var endDateTextBox = $('#departdate');

    $(document).ready(function() {
       

        endDateTextBox.datepicker({ 
            dateFormat: 'yy-mm-dd',
            numberOfMonths: 2,
            minDate: new Date(),
            onClose: function(dateText, inst) {
                if (startDateTextBox.val() != '') {
                    var testStartDate = startDateTextBox.datetimepicker('getDate');
                    var testEndDate = endDateTextBox.datetimepicker('getDate');
                    if (testStartDate > testEndDate)
                        startDateTextBox.datetimepicker('setDate', testEndDate);
                }
                else {
                    // startDateTextBox.val(dateText);
                }
            },
            onSelect: function (selectedDateTime){
                startDateTextBox.datetimepicker('option', 'maxDate', endDateTextBox.datetimepicker('getDate') );
            }
        });

        startDateTextBox.datepicker({
            dateFormat: 'yy-mm-dd',
            numberOfMonths: 2,
            minDate: new Date(),
            onClose: function(dateText, inst) {
			if (endDateTextBox.val() != '') {
				var testStartDate = startDateTextBox.datetimepicker('getDate');
				var testEndDate = endDateTextBox.datetimepicker('getDate');
				if (testStartDate > testEndDate)
					endDateTextBox.datetimepicker('setDate', testStartDate);
			}
			else {
				// endDateTextBox.val(dateText);
			}
		},
		onSelect: function (selectedDateTime){
            // $tomorrow = date('m-d-Y',strtotime(startDateTextBox.datetimepicker('getDate') . "+1 days"));
            // console.log($tomorrow);
            let d = startDateTextBox.datetimepicker('getDate')
            d.setDate(d.getDate()+1)
			endDateTextBox.datetimepicker('option', 'minDate', d);
		}
        });
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