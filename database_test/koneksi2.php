<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "userdata";

$koneksi2 = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_errno()) {
    echo("Database Not Connected");
} else {
    echo("Database Connected");
}


