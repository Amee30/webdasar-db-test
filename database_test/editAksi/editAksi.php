<?php
    include '../koneksi.php';
    global $koneksi;
    $getID = $_POST['id'];
    $getName = $_POST['nama'];
    $getNim = $_POST['nim'];
    $getAddress = $_POST['alamat'];
    $getIDTarget = $_POST['id2'];

    mysqli_query($koneksi, "UPDATE mahasiswa SET id = '$getID', nama = '$getName', nim = '$getNim', alamat = '$getAddress' WHERE id = '$getIDTarget'");
    header("location:../dataMhs.php");

