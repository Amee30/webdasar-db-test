
<?php
    include '../koneksi.php';
    global $koneksi;
    $getAlamat = $_POST['alamat'];
    $getIDTarget = $_POST['idTarget'];

    mysqli_query($koneksi, "UPDATE mahasiswa SET alamat = '$getAlamat' WHERE id = '$getIDTarget'");
    header("location:../dataMhs.php");

