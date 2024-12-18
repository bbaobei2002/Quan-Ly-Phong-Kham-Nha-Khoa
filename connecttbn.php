<?php

$SERVER = 'localhost';
$user = 'root';
$pass = '';
$database = 'teeth';

$conn = mysqli_connect($SERVER, $user, $pass, $database);

$conn = new mysqli($SERVER, $user, $pass, $database);

// if ($conn) {
//     echo 'Da ket noi thanh cong';
// } else {
//     echo 'Ket noi that bai';
// }


  if(isset($_POST['thebn'])){
            $id = $_POST['id'];
            $tenbn = $_POST['tenbn'];
            $ngaysinh = $_POST['ngaysinh'];
            $gioitinh = $_POST['gioitinh'];
            $sdt = $_POST['sdt'];
          
          

         if($conn ->query(
                           "INSERT INTO thebn (tenbn, ngaysinh, gioitinh, sdt) VALUES ('$tenbn', '$ngaysinh', '$gioitinh', '$sdt')"   
                         )
            )
                    {
                         echo "<script>alert('Thêm thành công');</script>";
                    } else {
                            echo "<script>alert('Thêm không thành công');</script>";
                }
               
                }
              mysqli_close($conn);  

?>

    <!DOCTYPE html>
<html>
<head>
<title>protectyourteeth</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="phkham.css" rel='stylesheet' type='text/css' />
  <link rel="icon" href="./images/iconnn.png" type="image/x-icon/">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<script src="https://code.jquery.com/jquery-latest.js"></script>


<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="icon" href="./images/iconnn.png" type="image/x-icon/">
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>

</head>
<body>

</head>
<body class="w3-black w3-text-blue " style="max-width:1600px">


<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-animate-left" style="z-index:3;width:300px; background-color: black; id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="./images/iconnn.png" style="width:80%;" class="w3-round"><br><br>
  </div>
  <div class="w3-bar-block">
    <a href=" homepage.php " onclick="close()" class="w3-bar-item w3-button w3-padding w3-text-blue"><i class="fa fa-product-hunt fa-fw w3-margin-right"></i>PROTECT YOUR TEETH</a> 
    <a href="#bacsi" onclick="close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user-md fa-fw w3-margin-right"></i>Đội ngũ bác sĩ</a> 
    <a href="#lienhe" onclick="close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>Liên hệ</a>
    <a href=" thebn.php " onclick="close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user-circle fa-fw w3-margin-right"></i>Tạo thẻ bệnh nhân</a>
    <a href=" dsbnhan.php" onclick="close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-list-alt fa-fw w3-margin-right"></i>Danh sách thẻ bệnh nhân</a>
     <a href=" dspkham.php" onclick="close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-list-ul fa-fw w3-margin-right"></i>Danh sách phiếu khám</a>
    <a href=" ketoa.html" onclick="close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-medkit fa-fw w3-margin-right"></i>Kê toa thuốc</a>
    <a href="login.php" onclick="close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-sign-in fa-fw w3-margin-right"></i>Đăng xuất</a>
  </div>
  <div class="w3-panel w3-large">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="protectyourteeth">
   <!-- <a href="#"><img src="./images/logo.png" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a> 
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span> -->
   <div class="w3-section w3-bottombar w3-padding-10"> <!-- thanh ngang -->
    <div class="w3-container" style="margin-left: 400px">
    <h1><b>PROTECT YOUR TEETH</b></h1>
    </div>
    </div>
  </header>
  
 
  <div class="w3-container w3-padding-large" style="margin-bottom:32px"> <!-- căn lề -->
   
 
 <!-- form -->
  <div class="w3-container w3-padding-large w3-white">
    <h4 class="w3-center" style="font-size: 25pt; margin-bottom:-45px;" id="lienhe"><b>Thẻ bệnh nhân</b></h4>
    <form action="connecttbn.php" method="post">
    <!-- <b><label>STT: </label></b> <input type="stt" id="stt" name="stt" size="5">                                   
    <b><label>Ngày khám: </label></b> <input type="ngaykham" id="ngaykham" name="ngaykham" size="20"></p> -->
    <b><label>Mã bệnh nhân: </label></b> <input type="id" id="id"  size="5" name="id">
    <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px"></div>
    
    <hr class="w3-opacity">
    <!-- <form action="/action_page.php" target="_blank"> -->
      <div class="w3-section">
        <label><b>Họ và tên</b></label>
        <input type="tenbn" style="block-size: 40px;" class="w3-input w3-border" required="" name="tenbn">
      </div>
      <div class="w3-section">
        <label><b>Ngày sinh</b></label>
        <input type="ngaysinh" style="block-size: 40px;" class="w3-input w3-border"  required="" name="ngaysinh">
      </div>
      <div class="w3-section">
        <label><b>Giới tính</b></label>
        <input type="gioitinh" style="block-size: 40px;" class="w3-input w3-border"  required="" name="gioitinh">
      </div>
       <div class="w3-section">
        <label><b>Số điện thoại</b></label>
        <input type="sdt" class="w3-input w3-border"  required="" name="sdt">
      </div>
      <div class="clearfix"></div>
      <button type="submit" class="w3-button w3-black w3-margin-bottom"><i style="color: lightblue;" class="fa fa-paper-plane w3-margin-right"></i>Tạo thẻ bệnh nhân</button>
    </form>
  </div>


  

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
