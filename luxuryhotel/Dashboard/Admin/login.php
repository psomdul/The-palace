<?php session_start(); 
if($_SESSION["Userlevel"] == '1'){
  header("location: Owner.statistic.php");
}
else if($_SESSION["Userlevel"] == '2'){
  header("location: Admin.Room.php");
}
else if($_SESSION["Userlevel"] == '3'){
  header("location: Housekeeper.php");
}else{





?>
<!doctype html>
<html>
<title>Login</title>
<head>
<style> 
body {
  
}
</style>
</head>
<body>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div id="fullscreen_bg" class="fullscreen_bg">

<div class="container">

	<form class="form-signin" name="form1" method="post" action="Checklogin.php">
  
		<h1 class="form-signin-heading text-muted">Sign In</h1>
		<input type="text" class="form-control" placeholder="User name" required="" autofocus="" name="username">
		<input type="password" class="form-control" placeholder="Password" name="password" maxlength="16" required>
		<button class="btn btn-lg btn-primary btn-block" type="submit" value="login" name="submit">
			Sign In
		</button>
	</form>

</div>
</body>
<style>
      body {
    padding-top: 40px;
    padding-bottom: 40px;
    background-color: #eee;
  }
  .fullscreen_bg {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-size: cover;
    background-position: 50% 50%;
    background-image: 
    url("../assets/img/bg-01.jpg")
  }
  .form-signin {
    max-width: 280px;
    padding: 15px;
    margin: 0 auto;
  }
  .form-signin .form-signin-heading, .form-signin {
    margin-bottom: 10px;
    margin-top: 50๔ฆ;
  }
  .form-signin .form-control {
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
  }
  .form-signin .form-control:focus {
    z-index: 2;
  }
  .form-signin input[type="text"] {
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
    border-top-style: solid;
    border-right-style: solid;
    border-bottom-style: none;
    border-left-style: solid;
    border-color: #000;
  }
  .form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-top-style: none;
    border-right-style: solid;
    border-bottom-style: solid;
    border-left-style: solid;
    border-color: #000;
  }
  .form-signin-heading {
    color: #fff;
    text-align: center;
    text-shadow: 0 2px 2px rgba(0,0,0,0.5);
  }
</style>
</html>
<?php } ?>