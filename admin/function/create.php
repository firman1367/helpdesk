<?php
    session_start();
    include ("../../config/koneksi.php");

    $aksi = $_GET['aksi'];

    if ($aksi == "add_employe") {
        $username_employe     = strtoupper($_POST['fullname']);

        mysqli_query($koneksi,("INSERT INTO tb_employe VALUES(NULL,'$username_employe')")) or die(mysql_errno("gagal"));
        header("location:../employes");
    }else if ($aksi == "add_department") {
        $name_dpt     = strtoupper($_POST['name_dpt']);

        mysqli_query($koneksi,("INSERT INTO tb_department VALUES(NULL,'$name_dpt')")) or die(mysql_errno("gagal"));
        header("location:../department");
    }else if ($aksi == "add_category") {
        $name_cty     = strtoupper($_POST['name_cty']);

        mysqli_query($koneksi,("INSERT INTO tb_category VALUES(NULL,'$name_cty')")) or die(mysql_errno("gagal"));
        header("location:../category");
    }

?>
