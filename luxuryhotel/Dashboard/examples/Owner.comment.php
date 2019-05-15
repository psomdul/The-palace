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
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="blue">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
          <i class='fas fa-user-secret' style='font-size:24px; margin-left: 10px'><label style="margin-left:20px"> Palace Hotel</label></i>
          
        
        
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li >
          <a href="./Owner.statistic.php">
              <i class="now-ui-icons design_app" ></i>
              <p style="font-size:16px">Statistic</p>
            </a>
          </li>
          <li class="active ">
            <a href="./Owner.comment.php">
              <i class="now-ui-icons education_atom"  style="color:black"></i>
              <p style="font-size:16px">Comment</p>
            </a>
          </li>
          <li >
            <a href="./Owner.employee.php">
              <i class="now-ui-icons location_map-big" ></i>
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
            <a class="navbar-brand" href="#pablo">Comment</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
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
      <div class="panel-header panel-header-sm">
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="title">Comment</h5>
                                
                            </div>
                            <div class="card-body all-icons">
                                <div class="row">
                                    <table class="table table-striped" style="width: 100%">
                                        <tr>
                                            <thead>
                                                <th scope="col" style="text-align:center;">Emailลูกค้า</th>
                                                <th scope="col" style="text-align:center;">ความพึงพอใจของลูกค้า</th>
                                                <th scope="col" style="text-align:center;">ความคิดเห็นเพิ่มเติม</th>
                                                




                                                <?php
                  $query = "SELECT * FROM comment c INNER JOIN user u ON u.Email = c.email INNER JOIN scorecomment s ON s.idscore = c.score";
                  $rs = $conn->query($query);
                 
                  if ($rs->num_rows > 0) {
                    while($row = $rs->fetch_assoc()) {
                      
                  echo  "<tbody id=\"myTable\">".
                        "<tr class=\"table-danger\">".
                        "<td scope=\"col\" style=\"text-align:center\">". "<div class=\"span4 proj-div \" style=\"text-align:center; cursor: pointer;\"    data-toggle=\"modal\" data-target=\"#GSCCModal\" onClick=\"test4('".$row["IdUser"]."','".$row["Name"]."','".$row["phone"]."' ,'".$row["Email"]."')\">".$row["email"]."</div>"."</td>".
                        "<td style=\"text-align:center\">".$row["namescore"]."</td>".
                        "<td style=\"text-align:center\">".$row["comment"]."</td>";
                        
                    
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

                                                        <div class="form-group">
                                                            <label>ID ลูกค้า</label><br>
                                                            <input type="text" id="id999"
                                                                style="background-color:#F8F8FF; font-weight: bold;"
                                                                disabled>

                                                        </div>
                                                        <div class="form-group">
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

            </footer>
        </div>
    </div>
    <!-- Modal เพิ่มพนักงาน -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">เพิ่มพนักงาน</h4>
                </div>
                <div class="modal-body">
                    <form onsubmit="kuyiherejab();">

                        <div class="form-group">
                            <label for="exampleInputEmail1">First Name</label>
                            <input type="text" name="fname" id="fname" class="form-control" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Last Name</label>
                            <input type="text" name="lname" id="lname" class="form-control" placeholder="Last name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">IdCard</label>
                            <input type="text" name="idcard" id="idcard" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Address</label>
                            <input type="text" name="address" id="address" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Username</label>
                            <input type="text" name="User" id="User" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="text" name="Password" id="Password" class="form-control">
                        </div>

                        <button type="button" onclick="kuyiherejab();" class="btn btn-primary">Submit</button>
                    </form>
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
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
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
  <script>
     function test4(status, Name, Phone, Email) {
            console.log(status, Name, Phone, Email + ' 555');
            // $('#id999').append(status);
            $('#id999').val(status);
            $('#Name').val(Name);
            $('#phone').val(Phone);
            $('#email').val(Email);
        }

  </script>
</body>

</html>
<?php }?>