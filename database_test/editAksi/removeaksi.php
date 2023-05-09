<?php
    include '../koneksi.php';
    global $koneksi;
    $getID = $_POST['id'];

    mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id = '$getID'");
    header("location:../dataMhs.php");