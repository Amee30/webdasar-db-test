<?php
    include '../koneksi.php';
    global $koneksi;
    $getName = $_POST['nama'];
    $getNim = $_POST['nim'];
    $getAddress = $_POST['alamat'];

    mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES('', '$getName', '$getNim', '$getAddress')");
    header("location:../dataMhs.php");

