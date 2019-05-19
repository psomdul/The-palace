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
                    <li class="active">
                        <a href="./Admin.Room.php">
                            <i class="now-ui-icons design_app" style="color:black"></i>
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
                                <h5 class="title">Rooms</h5>
                                <button type="button" class="btn btn-outline-success btn-lg" data-toggle="modal"
                                    data-target="#myModal">เพิ่มห้องพัก</button>
                                <button type="button" class="btn btn-outline-warning btn-lg" data-toggle="modal"
                                    data-target="#myModal5">ลบห้องพัก</button>
                            </div>
                            <div class="card-body all-icons">
                                <div class="row">
                                    <table class="table table-stripe">
                                        <tr>
                                            <thead>
                                                <th scope="col">หมายเลขห้อง</th>
                                                <th scope="col">Id.ลูกค้า</th>



                                                <th scope="col">สถานะทำความสะอาด</th>

                                                <th scope="col">เปลี่ยนแปลงสถานะห้องพัก</th>




                                                <?php
                  $query = "SELECT r.Idroom ,r.IdUser, c.namecleaning  FROM room r 
                  INNER JOIN status_reserver s ON s.StatusId = r.Status 
                 
                  INNER JOIN cleaning_status c ON c.status_update_clean = r.status_update_clean
                  ORDER BY Idroom";
                  $rs = $conn->query($query);
                 
                  if ($rs->num_rows > 0) {
                    while($row = $rs->fetch_assoc()) {
                      
                  echo  "<tbody id=\"myTable\">".
                        "<tr class=\"table-active\">".
                        "<td scope=\"col\">".$row["Idroom"]."</td>";
                        if(isset($row["IdUser"])){
                        echo "<td>".$row["IdUser"]."</td>";
                        }else {
                        echo "<td scope=\"col\">ห้องว่าง</td>";
                        }
                            
                        
                        
                      echo  "<td>".$row["namecleaning"]."</td>".
                        
                        "<td>"."<button type=\"button\" class=\"btn btn-primary\" id=\"text\" data-toggle=\"modal\" data-target=\"#myModal3\" onClick=\"openModalChangeStatus('".$row["Idroom"]."');\">Change</button>". "</td>".
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
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul>
                            <li>
                                <a href="https://www.creative-tim.com">
                                    Creative Tim
                                </a>
                            </li>
                            <li>
                                <a href="http://presentation.creative-tim.com">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="http://blog.creative-tim.com">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright" id="copyright">
                        &copy;
                        <script>
                        document.getElementById('copyright').appendChild(document.createTextNode(new Date()
                            .getFullYear()))
                        </script>, Designed by
                        <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
                        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- Modal เพิ่มพนักงาน -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->

            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">เพิ่มห้องพัก</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form onsubmit="addroom();">

                        <div class="form-group" style="width:">
                            <label for="exampleInputEmail1">ห้องพักที่</label>
                            <input type="text" name="idroom" id="idroom" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">ประเภทห้องพัก</label>
                            <select class="form-control" name="type" id="type">
                                <option value="1">Standard</option>
                                <option value="2">Superior</option>
                                <option value="3">Deluxe</option>
                                <option value="4">Suite</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">รายละเอียด</label>
                            <input type="text" name="detail" id="detail" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">จำนวนคนสูงสุด</label>
                            <input type="text" name="guest" id="guest" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">ขนาดห้องพัก</label>
                            <input type="text" name="size" id="size" class="form-control">
                        </div>



                        Picture: <input type="file" name="img" id="img"><br><br>



                        <button type="button" onclick="addroom();" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>

        </div>
    </div>
    <!-- </div>
    </div> -->
    <!-- modalchangestatus -->
    <div class="modal fade" id="myModal3" role="dialog">
        <div class="modal-dialog">

            //
            <!-- Modal content-->

            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">สถานะ</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form >
                        <div class="form-group">

                            <div class="form-group">
                                <label for="sel1">Select list:</label>
                                <select class="form-control" id="chagestatus" name="chagestatus">
                                    <option value="0">Available</option>
                                    <option value="1">Fix</option>
                                </select>

                                <input id="h-change-status" class="form-control" type="hidden">

                            </div>
                            <button type="button" class="btn btn-success" onclick="changestatusroom();">Change</button>

                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>
    <!-- modalchangestatus -->
    <!--   Core JS Files   -->

    <div id="myModal5" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">ลบห้องพัก</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form onsubmit="deleteroom();">
                        <div class="form-group">
                            <label>Id.ห้อง </label>
                            <input type="text" name="d-idroom" id="d-idroom" class="form-control">

                            <!-- <input list="browsers" name="browser">
                            <datalist id="browsers">
                                
                                <option value="<?php echo $row["Id"] ?>">
                                
                            </datalist> -->

                    </form>
                </div>
                <button type="button" onclick="deleteroom();" class="btn btn-primary" modal>ยืนยัน</button>
                </form>
            </div>

        </div>

    </div>
    </div>


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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

    <script>
    let changestatusroom;
    let openModalChangeStatus;

    $(document).ready(function() {

        changestatusroom = function(params) {
            let chagestatus = $("#chagestatus").val();
            let idroom = $("#h-change-status").val();
            const swalWithBootstrapButtons = Swal.mixin({
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
            })

            swalWithBootstrapButtons.fire({
                title: 'ยืนยันการเปลี่ยนสถานะห้องพัก?',
                text: "",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'ยืนยัน',
                cancelButtonText: 'ยกเลิก',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    swalWithBootstrapButtons.fire(
                        'เปลี่ยนสถานะสำเร็จแล้ว',
                        'Update Successful.',
                        'success'

                    ).then((result) => {
                        $.post("updatestatusroom.php", {
                                chagestatus: chagestatus,
                                idroom: idroom
                            },
                            function(data, status) {
                                console.log(JSON.stringify(data) + " " + status);
                                if (data.status) {
                                    location.reload();
                                }
                            }
                        );
                    })
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your imaginary file is safe :)',
                        'error'
                    )
                }
            })

        }

        openModalChangeStatus = function(idroom) {
            console.log(idroom);

            $('#h-change-status').val(idroom)
        }
    });
    </script>
    <script>
    let addroom;

    $(document).ready(function() {
        addroom = function(params) {
            let idroom = $("#idroom").val();
            let type = $("#type").val();
            let detail = $("#detail").val();
            let guest = $("#guest").val();
            let size = $("#size").val();
            let img = document.getElementById('img').files[0];
            console.log(img)

            const formData = new FormData();
            formData.append("img", img)
            formData.append("idroom", idroom)
            formData.append("type", type)
            formData.append("detail", detail)
            formData.append("guest", guest)
            formData.append("size", size)

            $.ajax({
                url: 'AddRoom.php',
                type: 'post',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log(response);
                    Swal.fire({
                        type: 'success',
                        title: 'Your work has been saved',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(() => {
                        location.reload();
                    })

                },
            })
        }
    });
    </script>
    <script>
    let deleteroom;


    $(document).ready(function() {

        deleteroom = function(params) {
            let idroom = $("#d-idroom").val();
            console.log('idroom ' + idroom);

            const swalWithBootstrapButtons = Swal.mixin({
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
            })

            swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    swalWithBootstrapButtons.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'

                    ).then((result) => {
                        $.post("DeleteRoom.php", {
                                idroom: idroom
                            },
                            function(data, status) {
                                console.log(JSON.stringify(data) + " " + status);
                                if (data.status) {
                                    location.reload();
                                }
                            }
                        );
                    })
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your imaginary file is safe :)',
                        'error'
                    )
                }
            })

        }
    });
    </script>
</body>

</html>
<?php }?>