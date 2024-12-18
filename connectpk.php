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


  if(isset($_POST['phieukham'])){
            $stt = $_POST['stt'];
            $idbn = $_POST['idbn'];
            $ngaykham = $_POST['ngaykham'];
            $trieuchung = $_POST['trieuchung'];
            
          
          

         if($conn ->query(
                           "INSERT INTO phieukham (stt, idbn, ngaykham, trieuchung, view) VALUES ('$stt', '$idbn', '$ngaykham', '$trieuchung', '0')"
                         )
            )
                    {
                         echo "<script>alert('Thêm thành công');</script>";
                    } else {
                            echo "<script>alert('Thêm không thành công');</script>";
                }
               
                }
                 header("Location:/mit/dspkham.php");
              mysqli_close($conn);  

?>

 