<?php

  include('connectdb.php');
  session_start();
  
?>
<?php 

if ($_SESSION["Userlevel"] != '2'){  //check session
    session_destroy();
	  Header("Location: login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 

}else{?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });

        function load_unseen_notification() {
            // console.log('29');

            $.ajax({
                url: "fetch.php",
                method: "POST",
                // data:{view:view},
                dataType: "json",
                success: function(data) {
                    console.log(data);
                    if (data.num > 0) {
                        $('#reservation').html(data.num);
                    } else {
                        $('#reservation').html('');
                    }
                }
            });
        }

        function chackDate() {
            console.log('49');

            $.ajax({
                url: "checkdatefordelete.php",
                method: "get",
                success: function(data) {
                    console.log(data);
                    // if(data.num > 0){
                    //     $('#reservation').html(data.num);
                    // }else{
                    //     $('#reservation').html('');
                    // }
                }
            });
        }

        load_unseen_notification();

        chackDate();

        $('#a-reservation').click(function(e) {
            console.log('57');
            e.preventDefault();
            $.ajax({
                url: "update.php",
                method: "POST",
                dataType: "json",
                success: function(data) {
                    console.log(data);
                    window.location.href = "./Admin.Reservation.php";
                }
            });
        })

        setInterval(function() {
            load_unseen_notification();
        }, 1000);

    });
    </script>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Palace hotel
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="orange">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
            <div class="logo">
                <i class='far fa-address-card' style='font-size:24px; margin-left: 10px;'><label
                        style="margin-left:20px"> Palace Hotel</label></i>

            </div>
            <div class="sidebar-wrapper" id="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="" id="a-reservation">
                            <i class="now-ui-icons design_app" style="color:black"></i>
                            <p style="font-size:16px">Reservation <span class="badge badge-success"
                                    id="reservation"></span></p>
                        </a>
                    </li>
                    <li>
                        <a href="./Admin.Room.php">
                            <i class="now-ui-icons design_app"></i>
                            <p style="font-size:16px">Rooms</p>
                        </a>
                    </li>
                    <li>
                        <a href="./Admin.Customer.php">
                            <i class="now-ui-icons users_single-02"></i>
                            <p style="font-size:16px">Customer</p>
                        </a>
                    </li>
                    <li>
                        <a href="./Admin.Housekeeper.php">
                            <i class="now-ui-icons users_single-02"></i>
                            <p style="font-size:16px">Housekeeper</p>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="./Admin.Review.php">
                            <i class="now-ui-icons ui-1_bell-53"></i>
                            <p style="font-size:16px">Reviews</p>
                        </a>
                    </li> -->
                    <li style="margin-top: 237px;">
                        <a href="./Admin.Checkout.php">
                            <i class="now-ui-icons ui-1_bell-53"></i>
                            <p style="font-size:16px">Check-out</p>
                        </a>
                    </li>
                    <hr width="83%" style="border-width: 4px; border-radius: 30px; " color="white">
                    <li>
                        <a href="./Admin.FAQ.php">
                            <i class="now-ui-icons location_map-big"></i>
                            <p style="font-size:16px">FAQ</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel" id="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="#pablo">Icons</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <form>
                            <div class="input-group no-border">
                                <input id="myInput" type="text" value="" class="form-control" placeholder="Search...">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <i class="now-ui-icons ui-1_zoom-bold"></i>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <i class="now-ui-icons media-2_sound-wave"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Stats</span>
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="now-ui-icons users_single-02"></i>

                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <h5 style="text-align:center">Profile</h5>

                                    <div class="card55">
                                        <img src="<?php echo "../assets/img/".$_SESSION["img"]?> " alt="John"
                                            style="width:50%">
                                        <h5 style="blackground-color: blue;"><?php echo $_SESSION["fname"] ?></h5>
                                        <p class="title55"><?php echo $_SESSION["NamePrio"]?> </p>


                                        <style>
                                        .card55 {
                                            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                                            max-width: 300px;

                                            text-align: center;
                                            font-family: arial;

                                        }

                                        .title55 {
                                            color: grey;
                                            font-size: 18px;
                                        }
                                        </style>
                                    </div>
                                   
                                    <a class="dropdown-item" href="logout.php">Log out</a>

                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="panel-header panel-header-sm">
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="title">Reservation</h5>
                            </div>
                            <div class="card-body all-icons">
                                <div class="row">
                                    <table class="table table-striped">
                                        <tr>
                                            <thead>
                                                <th scope="col" style="text-align:center;font-size:16px">เวลาที่จอง</th>
                                                <th scope="col" style="color:#FF1493;font-size:16px">Id.ลูกค้า</th>
                                                <th scope="col" style="text-align:center;font-size:16px">สถานะห้องพัก
                                                </th>
                                                <th scope="col" style="color:#FF1493;font-size:16px">หมายเลขห้องพัก</th>
                                                <th scope="col" style="text-align:center;font-size:16px">ประเภทห้องพัก
                                                </th>
                                                <th scope="col" style="color:#FF1493;font-size:16px;text-align:center">
                                                    สถานะทำความสะอาด</th>
                                                <th scope="col" style="text-align:center;font-size:16px">วันที่เข้าพัก
                                                </th>
                                                <th scope="col" style="color:#FF1493;text-align:center;font-size:16px">
                                                    วันที่ออก</th>

                                                <th scope="col" style="color:#FF1493;text-align:center;font-size:16px">
                                                    สลิปการชำระเงิน
                                                </th>
                                                <!-- <th scope="col">สถานะการชำระเงิน</th> -->
                                                <th scope="col" style="text-align:center;font-size:16px">
                                                    ความต้องการลูกค้า</th>
                                                <th scope="col" style="color:#FF1493;text-align:center;font-size:16px">
                                                    check-in</th>



                                                <?php
                  $query = "SELECT r.currenttime , u.IdUser , s.StatusName , r.Idroom , t.NameType , r.ArriveDate , ro.guestnum , u.Name , u.phone , u.Email,
                  r.DepartDate , u.phone , ro.text , r.IdRe, cl.namecleaning, r.img , r.IdRe, u.Detail
                  FROM reservation r INNER JOIN user u ON u.IdUser = r.IdUser 
                  INNER JOIN room ro ON r.Idroom = ro.Idroom INNER JOIN type_room  t  ON t.IdType = ro.Type 
                  INNER JOIN status_reserver s ON s.StatusId = r.Status INNER JOIN cleaning_status cl ON cl.status_update_clean = ro.status_update_clean
                  WHERE ArriveDate = CURRENT_DATE AND r.Status = '4'";
                  
                  $rs = $conn->query($query);
                  $nr = mysqli_num_rows($rs);
                  
                  $itemperpage = 6;
                  $totalpage = ceil($nr/$itemperpage);
                  if(isset($_GET['page']) && !empty($_GET['page'])){
                    $page=$_GET['page'];
                }else 
                    $page=1;
                    $offset = ($page-1) * $itemperpage;
                    $sql1 = "SELECT r.currenttime , u.IdUser , s.StatusName , r.Idroom , t.NameType , r.ArriveDate , ro.guestnum , u.Name , u.phone , u.Email,
                    r.DepartDate , u.phone , ro.text , r.IdRe, cl.namecleaning, r.img , r.IdRe, u.Detail
                    FROM reservation r INNER JOIN user u ON u.IdUser = r.IdUser 
                    INNER JOIN room ro ON r.Idroom = ro.Idroom INNER JOIN type_room  t  ON t.IdType = ro.Type 
                    INNER JOIN status_reserver s ON s.StatusId = r.Status INNER JOIN cleaning_status cl ON cl.status_update_clean = ro.status_update_clean
                    WHERE ArriveDate = CURRENT_DATE AND r.Status = '4' LIMIT  $itemperpage OFFSET $offset";
                    $rs1 = $conn->query($sql1);
                    $nr1 = mysqli_num_rows($rs1);
                
                 
                  if ($rs1->num_rows > 0) {
                    while($row = $rs1->fetch_assoc()) {
                      
                  echo  "<tbody id=\"myTable\" class=\"table-primary\">".
                        "<tr>".
                        "<td scope=\"col\">".$row["currenttime"]."</td>".
                        // "<td style=\"text-align:center\">".$row["IdUser"]."</td>".
                       "<td>". "<div class=\"span4 proj-div \" style=\"text-align:center; cursor: pointer;\"    data-toggle=\"modal\" data-target=\"#GSCCModal\" onClick=\"test4('".$row["IdUser"]."','".$row["Name"]."','".$row["phone"]."' ,'".$row["Email"]."')\">".$row["IdUser"]."</div>". "</td>".
                        "<td>".$row["StatusName"]."</td>".
                        "<td id=\"id_room\" style=\"text-align:center\">".$row["Idroom"]."</td>".
                        "<td>".$row["NameType"]."</td>".
                        "<td style=\"text-align:center\">".$row["namecleaning"]."</td>".
                        "<td>".$row["ArriveDate"]."</td>".
                        "<td>".$row["DepartDate"]."</td>".               
                        
                        "<td>"."<button type=\"button\"  style=\"position:relative; left:25px;\" class=\"btn btn-info\" id=\"text\" data-toggle=\"modal\" data-target=\"#myModal8\" onClick=\"test3('".$row["img"]."','".$row["IdRe"]."')\">"."<i class=\"fas fa-money-check\" ></i></button>". "</td>";
                        // if(isset($row["img"])){
                        //    echo "<td>ชำระเงินเรียบร้อย</td>";
                        // }else{
                        //    echo "<td>ยังไม่ได้ชำระเงิน</td>";
                        // }
                        // "<td>".$row["text"]."</td>".
                       echo "<td>"."<button type=\"button\" style=\"position:relative; left:25px;\" class=\"btn btn-info\" id=\"text\" data-toggle=\"modal\" data-target=\"#myModal2\" onClick=\"test2('".$row["Detail"]."')\">"."<i class=\"far fa-comment-alt\" ></i></button>". "</td>".
                        "<td>"."<button type=\"button\" class=\"btn btn-success btn-sm\" id=\"status\" onClick=\"test('".$row["Idroom"]."','".$row["IdRe"]."','".$row["IdUser"]."')\">Accept</button>"."</td>".
                      "</tr>".
                      "</tbody>";
                    
                    }
                    
                  }
                  ?>

                                            </thead>
                                        </tr>
                                        </thead>
                                    </table>
                                    <?php 
                            echo "<div class=\'reservation\' style=\"font-size: 18px; margin-top:20px; margin-left:500px;\">";
                            for($i=1; $i<=$totalpage;$i++){
                                if($i==$page){
                                echo "<a class=\"active\"> $i </a>";
                                }
                                else {
                                echo "<a href=\"http://localhost/project/luxuryhotel/Dashboard/examples/Admin.Reservation.php?page=$i\"> $i </a>";
                            }}
                            echo "</div>";
                            ?>

                                    <div id="GSCCModal" class="modal fade" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <h4 class="modal-title" id="myModalLabel">รายละเอียดลูกค้า</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">&times; </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container">

                                                        <div class="row">
                                                            <div class="col-2" >
                                                                <label>ID ลูกค้า</label>
                                                            </div>
                                                            <div class="col">
                                                                <input type="text" id="id999"
                                                                    style="background-color:#F8F8FF; font-weight: bold;margin-left:1.7%;"
                                                                    disabled>
                                                            </div>
                                                        </div>

                                                        <!-- <div class="form-group">
                                                            <label>ID ลูกค้า</label><br>
                                                            <input type="text" id="id999"
                                                                style="background-color:#F8F8FF; font-weight: bold;"
                                                                disabled>

                                                        </div> -->
                                                        <div class="form-group" style="margin-top:1%">
                                                            <label>Name ลูกค้า</label>
                                                            <input type="text" id="Name"
                                                                style="background-color:#F8F8FF; margin-left:12px; font-weight: bold;"
                                                                disabled>

                                                        </div>

                                                        <div class="form-group">
                                                            <label>Phone ลูกค้า</label>
                                                            <input type="text" id="phone"
                                                                style="background-color:#F8F8FF ; margin-left:10px;font-weight: bold; "
                                                                disabled>

                                                        </div>
                                                        <div class="form-group">
                                                            <label>Email ลูกค้า</label>
                                                            <input type="text" id="email"
                                                                style="background-color:#F8F8FF  ; margin-left:15px;font-weight: bold;"
                                                                disabled>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="modal fade" id="myModal2" role="dialog">
        <div class="modal-dialog">

            //
            <!-- Modal content-->

            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">รายละเอียด</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">

                    <div class="form-group">

                        <div class="form-group">
                            <label for="comment">Detail:</label>
                            <textarea class="form-control" rows="5" id="comment"
                                style="background-color:white; font-weight: bold; font-size:20px;" disabled></textarea>
                        </div>



                        </form>
                    </div>

                    </form>
                </div>

            </div>

        </div>
    </div>
    <!-- show สลิป -->
    <div class="modal fade" id="myModal8" role="dialog">
        <div class="modal-dialog">

            //
            <!-- Modal content-->

            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">สลิปการโอนเงิน </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">

                    <div class="form-group">

                        <div class="form-group">

                            <img src="" id="img" hidden>
                            <label id="show" hidden>ยังไม่ได้รับสลิปโอนเงิน</label>

                        </div>


                        <?php echo "<button type=\"button\" class=\"btn btn-success\" id=\"IdRe\" 
                        onClick=\"test5('".$row["IdRe"]."')\">ยืนยันสลิปโอนเงิน</button> ";


                        ?>

                        </form>
                    </div>

                    </form>
                </div>

            </div>

        </div>
        <!--   Core JS Files   -->
        <script src="../assets/js/core/jquery.min.js"></script>
        <script src="../assets/js/core/popper.min.js"></script>
        <script src="../assets/js/core/bootstrap.min.js"></script>
        <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
        <!--  Google Maps Plugin    -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
        <!-- Chart JS -->
        <script src="../assets/js/plugins/chartjs.min.js"></script>
        <!--  Notifications Plugin    -->
        <script src="../assets/js/plugins/bootstrap-notify.js"></script>
        <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="../assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
        <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
        <script src="../assets/demo/demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script>
        let idre999;


        function test(id_room, IdRe, IdUser) {
            console.log(id_room, IdRe, IdUser);
            Swal.fire({
                title: 'Check-in?',

                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Accept'
            }).then((result) => {
                if (result.value) {
                    $.get('checkinroom.php?id_room=' + id_room + '&idRe= ' + IdRe + '&idUser=' + IdUser,
                        function(data, status) {
                            console.log('data: ' + JSON.stringify(data));
                            if (data.status && data.status2) {
                                Swal.fire({
                                    title: 'succuss',
                                    type: 'success',
                                    toast: true,
                                    timer: 1500,
                                    position: 'top-right',
                                    showConfirmButton: false,
                                }).then(result => {
                                    location.reload();
                                })

                            } else {
                                console.log(data.status);

                                alert('Error')
                            }
                        })

                }
            })
        }

        function test2(status) {
            console.log(status + ' 555');
            $('#comment').append(status);
        }

        function test3(status, IdRe) {
            console.log(status, IdRe + ' 555');
            if (status) {
                console.log('563');
                $('#img').attr("src", "images/paymentimg/" + status);
                $('#img').removeAttr('hidden');
            } else {
                console.log('566');
                $('#show').removeAttr('hidden');
            }
            // $('#img').attr("src", "images/paymentimg/" + status);
            idre999 = IdRe;
        }






        function test4(status, Name, Phone, Email) {
            console.log(status, Name, Phone, Email + ' 555');
            // $('#id999').append(status);
            $('#id999').val(status);
            $('#Name').val(Name);
            $('#phone').val(Phone);
            $('#email').val(Email);
        }

        function test5() {
            console.log(idre999, +'555');
            Swal.fire({
                title: 'ยืนยันสลิปถูกต้อง?',

                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Accept'
            }).then((result) => {
                if (result.value) {
                    $.get('confirmpayment.php?IdRe=' + idre999,
                        function(data, status) {
                            console.log('data: ' + JSON.stringify(data));
                            if (data.status) {
                                Swal.fire({
                                    title: 'succuss',
                                    type: 'success',
                                    toast: true,
                                    timer: 1500,
                                    position: 'top-right',
                                    showConfirmButton: false,
                                }).then(result => {
                                    location.reload();
                                })

                            } else {
                                console.log(data.status);

                                alert('Error')
                            }
                        })

                }
            })
        }
        </script>
</body>

</html>
<?php }?>