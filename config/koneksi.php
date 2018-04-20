<?php

    $host   = "localhost";
    $db     = "db_helpdesk";
    $user   = "root";
    $pass   = "";

    $koneksi    = mysqli_connect($host,$user,$pass);
    $db_select  = mysqli_select_db($koneksi,$db);

    /* cek koneksi
    if ($koneksi) {
        echo "koneksi sukses";
    } else {
        echo "koneksi gagal";
    }
    */


?>
