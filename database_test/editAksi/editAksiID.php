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
    $getID = $_POST['idTarget2'];
    $getIDTarget = $_POST['idTarget'];

    mysqli_query($koneksi, "UPDATE mahasiswa SET id = '$getID' WHERE id = '$getIDTarget'");
    header("location:../dataMhs.php");
?>
</body>
</html>
