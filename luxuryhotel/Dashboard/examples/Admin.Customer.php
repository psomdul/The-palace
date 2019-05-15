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
            console.log('29');

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

        load_unseen_notification();

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
            load_unseen_notification();;
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                    <li>
                        <a href="./Admin.Reservation.php" id="a-reservation">
                            <i class="now-ui-icons design_app"></i>
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
                    <li class="active">
                        <a href="./Admin.Customer.php">
                            <i class="now-ui-icons users_single-02" style="color:black"></i>
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
                    <hr width="83%" style="border-width: 4px; border-radius: 30px;" color="white">
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
                        <a class="navbar-brand" href="#pablo">Customer</a>
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
                                <h5 class="title">Customer</h5>
                            </div>
                            <div class="card-body all-icons">
                                <div class="row">
                                    <table class="table table-striped" style="width: 100%">
                                        <tr>
                                            <thead class="text-primary">
                                                <th scope="col">รหัสสมาชิก</th>
                                                <th scope="col">ชื่อ</th>
                                                <th scope="col">นามสกุล</th>
                                                <th scope="col">เบอร์โทรศัพท์</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Detail of Customer</th>
                                                <th scope="col">แก้ไขข้อมูล</th>

                                                <?php
                  $query = "SELECT * FROM user u ";
                  $rs = $conn->query($query);
                 
                  if ($rs->num_rows > 0) {
                    while($row = $rs->fetch_assoc()) {
                      
                  echo  "<tbody id=\"myTable\">".
                        "<tr class=\"table-warning\">".
                        "<td scope=\"col\">".$row["IdUser"]."</td>".
                        "<td>".$row["Name"]."</td>".
                        "<td>".$row["Sname"]."</td>".
                        "<td>".$row["phone"]."</td>".
                        "<td>".$row["Email"]."</td>".
                        "<td>".$row["Detail"]."</td>".
                        "<td>"."<button type=\"button\" style=\"position:relative; left:25px;\" class=\"btn btn-info\" id=\"text\" data-toggle=\"modal\" data-target=\"#myModal2\" onClick=\"test('".$row["IdUser"]."','".$row["Name"]."','".$row["Sname"]."' ,'".$row["phone"]."','".$row["Email"]."','".$row["Detail"]."')\">"."<i class=\"far fa-comment-alt\" ></i></button>". "</td>".
                      "</tr>".
                      "</tbody>";
                    
                    }
                  }
                  ?>

                                            </thead>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal edit -->
            <div class="modal fade" id="myModal2" role="dialog">
                <div class="modal-dialog">

                    //
                    <!-- Modal content-->

                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">แก้ไขข้อมูล</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <form>
                            <div class="modal-body">
                                <div class="container">

                                    <div class="row">
                                        <div class="col-3" >
                                            <label >ID ลูกค้า</label>
                                        </div>
                                        <div class="col">
                                            <input type="text" id="id"
                                                style="background-color:#F8F8FF; font-weight: bold;" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3" >
                                            <label>ชื่อลูกค้า</label>
                                        </div>
                                        <div class="col">
                                            <input type="text" id="name"
                                                style="background-color:#F8F8FF; font-weight: bold;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3" >
                                            <label>นามสกุลลูกค้า</label>
                                        </div>
                                        <div class="col">
                                            <input type="text" id="sname"
                                                style="background-color:#F8F8FF ; font-weight: bold; ">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <label>เบอร์โทรศัพท์ลูกค้า</label>
                                        </div>
                                        <div class="col">
                                            <input type="text" id="phone"
                                                style="background-color:#F8F8FF  ; font-weight: bold;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3" >
                                            <label>Emailลูกค้า</label>
                                        </div>
                                        <div class="col">
                                            <input type="text" id="email" name="email"
                                                style="background-color:#F8F8FF  ; font-weight: bold;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3" >
                                            <label>รายละเอียดเพิ่มเติม</label>
                                        </div>
                                        <div class="col">
                                            <textarea id="detail" rows="5"
                                                style="background-color:#F8F8FF  ;font-weight: bold;"></textarea>
                                        </div>
                                    </div>

                                    <!-- <div class="form-group">
                                            <label>ID ลูกค้า</label><br>
                                            <input type="text" id="id"
                                                style="background-color:#F8F8FF; font-weight: bold;" readonly>

                                        </div> -->
                                    <!-- <div class="form-group">
                                                    <label>ชื่อลูกค้า</label>
                                                    <input type="text" id="name"
                                                        style="background-color:#F8F8FF; margin-left:77px; font-weight: bold;">

                                                </div> -->

                                    <!-- <div class="form-group">
                                                    <label>นามสกุลลูกค้า</label>
                                                    <input type="text" id="sname"
                                                        style="background-color:#F8F8FF ; margin-left:45px;font-weight: bold; ">

                                                </div> -->
                                    <!-- <div class="form-group">
                                                    <label>เบอร์โทรศัพท์ลูกค้า</label>
                                                    <input type="text" id="phone"
                                                        style="background-color:#F8F8FF  ; margin-left:15px;font-weight: bold;">

                                                </div> -->
                                    <!-- <div class="form-group">
                                                            <label>Emailลูกค้า</label>
                                                            <input type="text" id="email" name="email"
                                                                style="background-color:#F8F8FF  ; margin-left:54px;font-weight: bold;">

                                                        </div>
                                                        <div class="form-group">
                                                            <label>รายละเอียดเพิ่มเติม</label>
                                                            <textarea id="detail" rows="5"
                                                                style="background-color:#F8F8FF  ; margin-left:15px;font-weight: bold;"></textarea>

                                                        </div> -->
                                    <button type="button" class="btn btn-success"
                                        onclick="test1();">ยืนยันการแก้ไข</button>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
                <!-- modal edit -->

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
        function test(IdUser, Name, Sname, phone, Email, Detail) {
            console.log(IdUser, Name, Sname, phone, Email, Detail + ' 555');
            // $('#id999').append(status);
            // $('#id').val(IdUser);
            // $('#name').val(Name);
            // $('#sname').val(Sname);
            // $('#email').val(Email);
            $('#id').val(IdUser);
            $('#name').val(Name);
            $('#sname').val(Sname);
            $('#phone').val(phone);
            $('#email').val(Email);
            $('#detail').val(Detail);
        }

        function test1() {
            let email = $('#email').val();
            let id = $('#id').val();
            let name = $('#name').val();
            let sname = $('#sname').val();
            let phone = $('#phone').val();
            let detail = $('#detail').val();
            console.log(id, name, sname, phone, email, detail + ' 555');
            Swal.fire({
                title: 'ตรวจสอบข้อมูลถูกต้อง?',
                text: "หากต้องการแก้ไขเพิ่มเติมสามารถกดที่ปุ่มแก้ไขได้อีกครั้ง",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Success!'
            }).then((result) => {
                if (result.value) {
                    $.get('editCustommer.php?idUser=' + id + '&name=' + name + '&sname=' + sname + '&phone=' +
                        phone + '&email=' + email + '&detail=' + detail,
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