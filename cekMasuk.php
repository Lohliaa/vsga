<?php
include('koneksi/koneksi.php');
$email=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT  * from users where email='".$email."' AND password='".$password."' ";
$result = $koneksi->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      header('Location:index.php?username:'.$row["username"]);
    }
    
  } else {
    echo "Email atau password salah";
  }
  $koneksi->close();
// if(($email=="saya@gmail.com")&&($password=="qwerty")){
//  echo'Anda berhasil masuk';
// }else{
//     echo 'Email atau password Anda salah';
// }
?>