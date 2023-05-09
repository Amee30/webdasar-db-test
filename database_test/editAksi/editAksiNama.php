<?php
    include "../koneksi.php";
    global $koneksi;
    $getName = $_POST['name'];
    $getIDTarget = $_POST['idTarget'];

    mysqli_query($koneksi, "UPDATE mahasiswa SET nama = '$getName' WHERE id = '$getIDTarget'");
    header("location:../dataMhs.php");

