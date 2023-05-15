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
    <h2>Admin Login</h2>
    <p>Silahkan Masukan Password</p>
    <p><strong> Hanya Admin Yang Dapat Akses </strong></p>
    <form method="post" action="../editAksi/aksiLogin.php">
        Username : <input type="text" required name="user">
        <br>
        Password : <input type="password" required name="pass">
        <br> <br>
        <button type="submit" class="btn btn-primary mb-3">Log In</button>
    </form>
</div>
<?php
if (isset($_GET['pesan'])) {
    if ($_GET['pesan']== 'berhasil') {
        header("location:../editmahasiswa/dataMhs.php");

    }elseif ($_GET['pesan']=='gagal'){
        ?>
        <script>
            alert("Username/Password Salah");
            location.href = "loginID.php";
        </script>
    <?php
    }
}
    ?>
</body>
</html>
