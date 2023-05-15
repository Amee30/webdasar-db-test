<?php
session_start();
session_destroy();
header("location:../editmahasiswa/loginID.php");
