<?php

  include('connectdb.php');
  session_start();
  
?>
<?php 

if ($_SESSION["Userlevel"] != '3'){  //check session
    session_destroy();
	  Header("Location: login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 

}else{?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>
        Palace Hotel
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
            //เอาจำนวนที่ยังไม่ได้อ่าน
            $.ajax({
                url: "fetchhouse.php",
                method: "POST",
                // data:{view:view},
                dataType: "json",
                success: function(data) {
                    console.log(data);
                    if (data.num > 0) {
                        //เอาจำนวนที่ได้ไปใส่ไว้ใน html
                        $('#cleaning').html(data.num);
                    } else {
                        $('#cleaning').html('');
                    }
                }
            });
        }

        load_unseen_notification();

        $('#a-cleaning').click(function(e) {
            console.log('57');
            //ไม่ให้ อีเวรทำงานเปลี่ยนหน้าเพจทำงาน
            e.preventDefault();
            //อัพเดท status การอ่านข้อความ
            $.ajax({
                url: "updatecleaning.php",
                method: "POST",
                dataType: "json",
                success: function(data) {
                    console.log(data);
                    window.location.href = "./Housekeeper.php";
                }
            });
        })

        // setInterval(function() {
        //     load_unseen_notification();;
        // }, 1000);

    });
    </script>
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
                        <a href="./Housekeeper.php" id="a-cleaning">
                            <i class="now-ui-icons design_app"></i>
                            <p style="font-size:16px">Cleaning <span class="badge badge-success" id="cleaning"></span>
                            </p>
                        </a>
                    </li>
                    <hr width="100%"
                        style="border-width: 3px; border-radius: 30px; margin-bottom: 25px; margin-top: 530px;"
                        color="blue">
                    <li>
                        <a href="./Admin.Reservation.php">
                            <i class="now-ui-icons design_app"></i>
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
                        <a class="navbar-brand" href="#pablo">Cleaning</a>
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
                                <input type="text" value="" class="form-control" placeholder="Search...">
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
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink" style="width:150px">
                                    <h5 style="text-align:center">Profile</h5>

                                    <div class="card55">
                                        <img src="<?php echo "../assets/img/".$_SESSION["img"]?> " alt="John"
                                            style="width:50%;height:100%;">
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
                        <div class="card ">
                            <div class="card-header ">
                                <h3>Cleaning</h3>
                            </div>

                            <div class="card-body all-icons">
                                <div class="row">
                                    <table class="table-primary" style="width: 100%">
                                        <tr>
                                            <thead>
                                                <th scope="col">ห้องที่</th>
                                                <th scope="col">สถานะห้องพัก</th>
                                                <th scope="col">Cleaning</th>
                                                <th scope="col">
                                                    <!-- <label> -->
                                                    <!-- <input type="checkbox" onclick="checkAll(this)"/>
                                                </label>Check-all</th> -->

                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="defaultIndeterminate0" onclick="checkAll(this)">
                                                        <label class="custom-control-label"
                                                            for="defaultIndeterminate0">Check-all</label>
                                                    </div>

                                            </thead>
                                            <tbody id="myTable">
                                                <?php
                  $query = "SELECT * FROM room r INNER JOIN cleaning_status c ON  c.status_update_clean = r.status_update_clean
                  WHERE r.Status = '1'";
                  $rs = $conn->query($query);
                  

                 $box = 1;
                  
                  if ($rs->num_rows > 0) {
                    while($row = $rs->fetch_assoc()) {
                      
                  echo  
                        "<tr id=\"$box\">".
                        "<td scope=\"col\" td id=\"id_room$box\">".$row["Idroom"]."</td>".
                        "<td>".$row["namecleaning"]."</td>".
                        "<td>"."<button type=\"button\" class=\"btn btn-success btn-sm\" id=\"cleaning\" onClick=\"test('".$row["Idroom"]."')\">Finish</button>"."</td>".
                        
                        // "<td>"."<label><input type=\"checkbox\" value=".$row["Idroom"]." id=\"$box\" style=\"border:1px solid red\"></label>"."</td>".
                        "<td>"."<div class=\"custom-control custom-checkbox\">".
                       "<input type=\"checkbox\" class=\"custom-control-input\" name=\"status\" id=\"defaultIndeterminate$box\" value=".$row["Idroom"].">".
                        "<label class=\"custom-control-label\" for=\"defaultIndeterminate$box\" value=".$row["Idroom"]."></label>".
                      "</div>"."</td>".
                        
                      "</tr>";
                      
                    $box++;
                    }

                  }
                  ?>


                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><button type="button"
                                                            onClick="ChangeStatusAll();">Accept</button></td>
                                                </tr>
                                            </tbody>
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
    function test(id_room) {
        console.log(id_room);
        Swal.fire({
            title: 'ทำความสะอาดเรียบร้อย?',

            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ใช่'
        }).then((result) => {
            if (result.value) {
                $.get('cleaning.php?id_room=' + id_room, function(data, status) {
                    console.log('data: ' + JSON.stringify(data) + ' status : ' + status);
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
                        alert('Error')
                    }
                })

            }
        })
    }

    function checkAll(o) {
        var boxes = document.getElementsByTagName("input");
        for (var x = 0; x < boxes.length; x++) {
            var obj = boxes[x];
            if (obj.type == "checkbox") {
                if (obj.name != "check") {
                    obj.checked = o.checked;
                }
            }
        }
    }

    function ChangeStatusAll() {
        let boxes = document.getElementsByTagName("input")
        let arr = [];
        for (var x = 0; x < boxes.length; x++) {
            let val = boxes[x];
            if (val.name == 'status') {
                if (val.checked) {
                    arr.push(val.value)
                }
            }

        }

        console.log(arr);
        for (let i = 0; i < arr.length; i++) {
            $.get('cleaning.php?id_room=' + arr[i], function(data, status) {
                console.log('data: ' + JSON.stringify(data) + ' status : ' + status);
                if (data.status) {
                    Swal.fire({
                        title: 'succuss',
                        type: 'success',
                        toast: true,
                        timer: 1500,
                        position: 'top-right',
                        showConfirmButton: false,
                    })
                    console.log(i);

                    if (i + 1 == arr.length) {
                        console.log('416');

                        location.reload();
                    }


                } else {
                    alert('Error')
                }
            })
        }

    }
    </script>
</body>

</html>
<?php }?>