<?php
    session_start();
    include ("../../config/koneksi.php");

    //ambil variable
    $aksi               = $_GET['aksi'];
    $id_employe         = $_GET['id_employe'];
    $id_dpt             = $_GET['id_dpt'];
    $id_ticket          = $_GET['id'];

    if ($aksi == "del_employe") {
        mysqli_query($koneksi,("DELETE FROM tb_employe WHERE id_employe = '$id_employe'")) or die(mysql_errno("gagal"));
        header("location:../employes");
    }else if ($aksi == "del_dpt") {
        mysqli_query($koneksi,("DELETE FROM tb_department WHERE id_dpt = '$id_dpt'")) or die(mysql_errno("gagal"));
        header("location:../department");
    }else if ($aksi == "del_ticket") {
        mysqli_query($koneksi,("DELETE FROM tb_ticket WHERE id = '$id_ticket'")) or die(mysql_errno("gagal"));
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
?>
