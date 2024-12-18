<!DOCTYPE html>
<html>
<head>
<title>protectyourteeth</title>
  
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Phiếu khám bệnh</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="./images/iconnn.png" type="image/x-icon/">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<script src="https://code.jquery.com/jquery-latest.js"></script>
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
    <a href=" dspkham.php" onclick="close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-file-powerpoint-o fa-fw w3-margin-right"></i>Danh sách phiếu khám</a>
    <a href=" dskt.php" onclick="close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-medkit fa-fw w3-margin-right"></i>Danh sách toa thuốc</a>
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
</head>
<body>

<div class="w3-container w3-padding-large w3-white">
    <h4 class="w3-center" style="font-size: 25pt; margin-bottom:-45px;" id="pkham"><b>Phiếu khám bệnh</b></h4>
<form action="connectpk.php" method="post">
<b><label>STT: </label></b> <input type="stt" size="5" name="stt">
<b><label>Mã bệnh nhân: </label></b> <input type="idbn" size="5" name="idbn">
    <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px"></div>
    
    <hr class="w3-opacity">
    <!-- <form action="/action_page.php" target="_blank"> -->
      <div class="w3-section">
        <label><b>Ngày khám</b></label>
        <input type="ngaykham" style="block-size: 40px;" class="w3-input w3-border" required="" name="ngaykham">
      </div>
      <div class="w3-section">
        <label><b>Triệu chứng:</b></label>
        <input type="trieuchung" style="block-size: 40px;" class="w3-input w3-border"  required="" name="trieuchung">
      </div>
      
      <div class="clearfix"></div>
      <button type="submit" name="phieukham" class="w3-button w3-black w3-margin-bottom"><i style="color: lightblue;" class="fa fa-paper-plane w3-margin-right"></i>Tạo phiếu khám</button>
    </form>
  </div></p>


<?php
$SERVER = 'localhost';
$user = 'root';
$pass = '';
$database = 'teeth';

$conn = mysqli_connect($SERVER, $user, $pass, $database);

$id = $_GET['id'];


$sql = "select * from thebn where id = $id";

$recordset = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($recordset);
?>


<form name="form1" method="post" action="capnhat2.php">
  <table class="w3-center w3-text-black" style= "background-color: white; width: 50%; height: 300px;" border="3">
    
      
      <!-- <td width="126"></td>
      <td width="358">
        <input type="id" name="id" value="<?php echo $row['id']; ?>" readonly size="40">
      </td>
    </tr> -->

    <tr style="background-color: skyblue;">
    <td><strong>Mã bệnh nhân:</strong></td>
    <td><input type="tenbn" name="id" value="<?php echo $row['id']; ?>" readonly size="40"></td>
    </tr>

    <tr style="background-color: skyblue;">
    <td><strong>Tên bệnh nhân:</strong></td>
    <td><input type="tenbn" name="tenbn" value="<?php echo $row['tenbn']; ?>" size="40"></td>
    </tr>

     <tr style="background-color: skyblue;">
    <td><strong>Giới tính:</strong></td>
    <td><input type="gioitinh" name="gioitinh" value="<?php echo $row['gioitinh']; ?>" size="40"></td>
    </tr>

     <tr style="background-color: skyblue;">
    <td><strong>Ngày sinh:</strong></td>
    <td><input type="ngaysinh" name="ngaysinh" value="<?php echo $row['ngaysinh']; ?>" size="40"></td>
    </tr>

     <tr style="background-color: skyblue;">
    <td><strong>Sđt:</strong></td>
    <td><input type="sdt" name="sdt" value="<?php echo $row['sdt']; ?>" size="40"></td>
    </tr>
  </table>
</form>

  </body>
</html>
