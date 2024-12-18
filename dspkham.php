
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
<?php

$SERVER = 'localhost';
$user = 'root';
$pass = '';
$database = 'teeth';

$conn = mysqli_connect($SERVER, $user, $pass, $database);

$sql = "select * from phieukham ";


$recordset = mysqli_query($conn, $sql);
?>

<table class="w3-center w3-text-black" style= "background-color: white; margin-left: 100px; width: 80%; height: 300px;" border="3">
  <tr style="background-color: skyblue;"> 
    <th>STT</th>
    <th>Mã BN</th>
    <th>Ngày khám</th>
    <th>Triệu chứng</th>
    <th>Kê toa</th>
    <th>Cập nhật</th>
    <th>Xóa</th>
  </tr>

  <?php
  while($row = mysqli_fetch_assoc($recordset)) {
  ?>
    <tr>
      <td><?php echo $row['stt']; ?></td>
      <td><?php echo $row['idbn']; ?></td>
      <td><?php echo $row['ngaykham']; ?></td>
      <td><?php echo $row['trieuchung']; ?></td>
      <td><strong><a style="color: forestgreen;" href="kt.php?id=<?php echo $row['stt']; ?>">Kê toa</a></strong></td>
      <td><strong><a style="color: darkblue;" href="uppk.php?id=<?php echo $row['stt']; ?>">Cập nhật</a></strong></td>
      <td><strong><a style="color: darkred;" href="delete.php?id=<?php echo $row['stt']; ?>"onClick="return confirm('Bạn có thật sự muốn xóa?');">Xóa</a></strong></td>
    </tr>

  <?php
  }
  ?>
</table> 

  <?php
  mysqli_close($conn);
  ?>

  </body>
</html>
