<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
</head>
<body>
<?php
    include '../koneksi.php';
    global $koneksi;
    $getName = $_POST['nama'];
    $getNim = $_POST['nim'];
    $getAddress = $_POST['alamat'];

    mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES('', '$getName', '$getNim', '$getAddress')");
    header("location:../dataMhs.php");
?>
</body>
</html>
