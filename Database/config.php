<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $db_name = "aplikasi_pengelola_keuangan";

    $check_connection_status = mysqli_connect($server, $username, $password, $db_name);

    if(!$check_connection_status) mysqli_connect_error();
?>