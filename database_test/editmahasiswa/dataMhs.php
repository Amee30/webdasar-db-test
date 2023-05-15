<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Css File -->
    <link rel="stylesheet" href="style.css">

    <title>Data Mahasiswa</title>
</head>
<body>
<?php
session_start();
global $getUser;
if (!isset($_SESSION['usertb'])) {
    header("location:../editMahasiswa/loginID.php");
}
?>
<div class="container">
<h2>Table Data Mahasiswa</h2>
    <h3>User : <?php echo $_SESSION['usertb'] ?></h3>
<table class="table">
    <tr>
        <td>No</td>
        <td>Nama</td>
        <td>NIM</td>
        <td>Alamat</td>
    </tr>

    <?php
        include '../koneksi.php';
        global $koneksi;
        $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
        while ($result = mysqli_fetch_array($data)){
    ?>
    <tr>
        <td><?php echo $result['id']; ?></td>
        <td><?php echo $result['nama']; ?></td>
        <td><?php echo $result['nim']; ?></td>
        <td><?php echo $result['alamat']; ?></td>
    </tr>

    <?php
    }
    ?>
</table>
<br>
<form action="addMahasiswa.html">
    <div class="button">
        <button type="submit" class="btn btn-primary mb-3">Tambah Mahasiswa</button>
    </div>
</form>
    <div class="dataMhsButton">
    <form action="remMahasiswa.html">
            <button type="submit" class="btn btn-primary mb-3">Hapus Mahasiswa</button>
    </form>
    </div>
    <div class="dataMhsButton2">
        <form action="editMahasiswaMenu.html">
            <button type="submit" class="btn btn-primary mb-3">Edit Mahasiswa</button>
        </form>
    </div>
    <div class="dataMhsButton3">
        <form action="../editAksi/logoutAksi.php">
            <button type="submit" class="btn btn-primary mb-3">Log Out</button>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</body>
</html>
