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


  if(isset($_POST['ketoa'])){
            $sttpk = $_POST['sttpk'];
            $idkt = $_POST['idkt'];
            $idbn = $_POST['idbn'];
            $chuandoan = $_POST['chuandoan'];
            $thuocdieutri = $_POST['thuocdieutri'];
            $soluong = $_POST['soluong'];
            $lieudung = $_POST['lieudung'];
            $ngaytaikham = $_POST['ngaytaikham'];
            
          
          

         if($conn ->query(
                           "INSERT INTO ketoa (sttpk, idkt, idbn, chuandoan, thuocdieutri, soluong, lieudung, ngaytaikham, view) VALUES ('$sttpk', '$idkt', '$idbn', '$chuandoan', '$thuocdieutri', '$soluong', '$lieudung', '$ngaytaikham', '0')"
                         )
            )
                    {
                         echo "<script>alert('Thêm thành công');</script>";
                    } else {
                            echo "<script>alert('Thêm không thành công');</script>";
                }
               
                }
                 header("Location:/mit/dskt.php");
              mysqli_close($conn);  

?>

 