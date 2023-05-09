
<?php
    include '../koneksi.php';
    global $koneksi;
    $getID = $_POST['idTarget2'];
    $getIDTarget = $_POST['idTarget'];

    mysqli_query($koneksi, "UPDATE mahasiswa SET id = '$getID' WHERE id = '$getIDTarget'");
    header("location:../dataMhs.php");

