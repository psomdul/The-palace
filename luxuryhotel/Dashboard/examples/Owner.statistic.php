<?php

  include('connectdb.php');
  session_start();
  
?>
<?php 

if ($_SESSION["Userlevel"] != '1'){  //check session
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="blue">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
            <div class="logo">
                <i class='fas fa-user-secret' style='font-size:24px; margin-left: 10px'><label style="margin-left:20px">
                        Palace Hotel</label></i>



            </div>
            <div class="sidebar-wrapper" id="sidebar-wrapper">
                <ul class="nav">
                    <li class="active ">
                        <a href="./Owner.statistic.php">
                            <i class="now-ui-icons design_app" style="color:black"></i>
                            <p style="font-size:16px">Statistic</p>
                        </a>
                    </li>
                    <li>
                        <a href="./Owner.comment.php">
                            <i class="now-ui-icons education_atom"></i>
                            <p style="font-size:16px">Comment</p>
                        </a>
                    </li>
                    <li>
                        <a href="./Owner.employee.php">
                            <i class="now-ui-icons location_map-big"></i>
                            <p style="font-size:16px">employee</p>
                        </a>
                    </li>
                    <hr width="83%" style="border-width: 4px; border-radius: 30px; margin-top: 355px" color="white">
                    <li>
                        <a href="./Owner.faq.php">
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
                        <a class="navbar-brand" href="#pablo" style="margin-top:10%">รายได้ประจำปี</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation"
                        style="margin-left:82%;margin-bottom:1%;">

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
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="logout.php">Log out</a>

                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <!-- <div class="panel-header panel-header-lg">
                <canvas id="bigDashboardChart"></canvas>
            </div> -->
            <div class="panel-header panel-header-sm">
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-lg-4">

                        <div class="container">

                            <form>

                                <div class="form-group" style="margin-top:5%;">
                                    <!-- <select onchange="changeyear()" id="year">
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                        </select> -->
                                   
                                    <h5 >รายได้ประจำปี</h5>
                                    <h3>เลือกปีที่ต้องการทราบ</h3>
                                    <select onchange="changeyear()" id="year" class="form-control" style="height:40px;">
                                        <option>เลือกปีที่ต้องการ</option>
                                        <?php $year=2017;
                                            for($a=0; $a<13; $a++){
                                                $result = $year+$a;
                                              echo  " <option value=\"$result\">$result</option>";
                                            }
                                          
                                            ?>
                                    </select>
                                    <h5>รายได้ต่อปีทั้งหมด</h5><input type="text" id="yearincome"> บาท

                                    <canvas id="myChart"></canvas>
                                    <script>

                                    </script>




                                    </table>
                                </div>
                        </div>
                    </div>
                </div>

            </div>
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
    <script>
    let changeyear;
    var label = [];
    var price = [];
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [],
            datasets: [{
                label: '# of Votes',
                data: [],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 51, 204, 0.2)',
                    'rgba(34, 139, 34, 0.2)',
                    'rgba(51, 0, 102, 0.2)',
                    'rgba(119, 136, 153, 0.2)',
                    'rgba(70, 130, 180, 0.2)',
                    'rgba(153, 102, 5, 0.2)'

                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255, 51, 204, 1)',
                    'rgba(34, 139, 34, 1)',
                    'rgba(51, 0, 102, 1)',
                    'rgba(119, 136, 153, 1)',
                    'rgba(70, 130, 180, 1)',
                    'rgba(153, 102, 5, 1)'
                ],
                borderWidth: 3
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            legend: {
                display: false
            },
            tooltips: {
                callbacks: {
                    label: function(tooltipItem) {
                        return tooltipItem.yLabel;
                    }
                }
            },
            elements: {
                point: {
                    pointStyle: 'line'
                }
            }
        }
    });
    $(document).ready(function() {
        changeyear = function() {
            removeData(myChart)
            let year = $("#year").val();
            $.get('incomeyear.php?year=' + year,
                function(data, status) {
                    console.log('data: ' + JSON.stringify(data));
                    let d = JSON.parse(data);
                    console.log(d);
                    let income = []
                    d.forEach(element => {
                        income.push(element[1])
                    });
                    $('#yearincome').val(income);
                    // if (data.status) {
                    //     Swal.fire({
                    //         title: 'succuss',
                    //         type: 'success',
                    //         toast: true,
                    //         timer: 1500,
                    //         position: 'top-right',
                    //         showConfirmButton: false,
                    //     }).then(result => {
                    //         location.reload();
                    //     })

                    // } else {
                    //     console.log(data.status);

                    //     alert('Error')
                    // }
                })

            let chart = year + '-'
            label = [];
            price = [];
            $.get('chartjs.php?year=' + chart, function(data, status) {

                console.log(data);

                let arr = JSON.parse(data);
                console.log(arr);
                label = [];
                price = [];
                arr.forEach(element => {
                    label.push(element[0])
                    price.push(element[1])
                });
                // console.log(label);

                // var ctx = document.getElementById('myChart').getContext('2d');
                // var ctx = document.getElementById('myChart')

                addData(myChart, label, price)

            });

        }

        function removeData(chart) {
            console.log(chart.data.labels);

            chart.data.labels = [];
            chart.data.datasets.forEach((dataset) => {
                dataset.data = [];
            });
            chart.update();
        }

        function addData(chart, label, data) {
            console.log(label);
            console.log(data);

            chart.data.labels = label;
            chart.data.datasets.forEach((dataset) => {
                dataset.data = data
            });
            chart.update();
        }

        console.log('พีน่ารัก');
        changeyear();


        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();
    });
    </script>
</body>

</html>
<?php }?>