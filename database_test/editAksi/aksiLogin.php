<?php
include "../koneksi2.php";

global $koneksi2;
$getUser = $_POST['user'];
$getPass = $_POST['pass'];

$data = mysqli_query($koneksi2, "SELECT * FROM userquery WHERE usertb ='$getUser' AND passtb ='$getPass'");
$check = mysqli_num_rows($data);
if ($check > 0) {
    session_start();
    $_SESSION['usertb'] = $getUser;
    header("location:../editmahasiswa/loginID.php?pesan=berhasil");
}
else{
    header("location:../editmahasiswa/loginID.php?pesan=gagal");
}
