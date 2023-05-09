
<?php
    include '../koneksi.php';
    global $koneksi;
    $getNim = $_POST['nim'];
    $getIDTarget = $_POST['idTarget'];

    mysqli_query($koneksi, "UPDATE mahasiswa SET nim = '$getNim' WHERE id = '$getIDTarget'");
    header("location:../dataMhs.php");

