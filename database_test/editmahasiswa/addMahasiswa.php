<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
<div class="container">
<h2>Tambah Mahasiswa</h2>
<form method="post" action="../editAksi/tambahaksi.php">
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td>Nim</td>
            <td><input type="number" name="nim" required></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea name="alamat" rows="3" required></textarea></td>
        </tr>
    </table>
    <br>
        <button type="submit" class="btn btn-primary mb-3">Tambah Mahasiswa</button>
</form>
    <form action="dataMhs.php">
        <button type="submit" class="btn btn-primary mb-3">Balik Ke DataMahasiswa</button>
        <p>Jika Tidak Ingin Melakukan Perubahan</p>
</div>
</body>
</html>
