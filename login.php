<?php
session_start();
include '../connect.php';

$nis = $_POST['NIS'];
$password = $_POST['password'];

if($nis == "" || $password == "")
{
  header("location: form-login.php");
}

else {
$query = "SELECT * FROM tb_siswa WHERE nis = '$nis' AND password = '$password'";
$result = mysqli_query($connect, $query);

$num = mysqli_num_rows($result);
}

if($num == 1){
  header("location: add_data.php");
  $_SESSION['userid'] = $nis;
}
else{
  header("location: form-login.php");
}


 ?>
