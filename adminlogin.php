<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>
<body>
  <div style="margin: 140px;">
<form action="adminlogin.php" method="post">
  <div class="form-group col-4">
    <label for="email">Email address:</label>
    <input type="email" name="email" class="form-control" id="email">
  </div>
  <div class="form-group col-4">
    <label for="pwd">Password:</label>
    <input type="password" name="password" class="form-control" id="pwd">
  </div>
  <div class="checkbox">
    
  </div>

  <br>
  <button type="submit" class="btn btn-success">Log in</button>
</form>

</div></body>
</html><?php
$uname  =  $_REQUEST['email'];
  $password=  $_REQUEST['password'];
  echo $uname;
 if($uname="global@gmail.com" && $password==12345){
  session_start();
  $_SESSION['sid']=session_id();
 header('Refresh: 2; URL = selectUser.php');
  exit();
}


?>