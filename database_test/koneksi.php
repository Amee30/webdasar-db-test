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
        $db_host = "localhost";
        $db_user = "root";
        $db_pass = "";
        $db_name = "akademik";

        $koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if (mysqli_connect_errno()) {
        echo ("Database Not Connected");
    }else{
        echo ("Database Connected");
    }
    ?>
</body>
</html>
