<?php
    session_start();
    include ("../../config/koneksi.php");

    $aksi = $_GET['aksi'];

    if ($aksi == "edit_employe") {
        $id_employe             = $_POST['id_employe'];
        $username_employe       = strtoupper($_POST['fullname']);

        mysqli_query($koneksi,("UPDATE tb_employe SET username_employe = '$username_employe' WHERE id_employe = '$id_employe'")) or die(mysql_errno("gagal"));
        header("location:../employes");
    }else if ($aksi == "edit_dpt") {
        $id_dpt        = $_POST['id_dpt'];
        $name_dpt      = strtoupper($_POST['name_dpt']);

        mysqli_query($koneksi,("UPDATE tb_department SET name_dpt = '$name_dpt' WHERE id_dpt = '$id_dpt'")) or die(mysql_errno("gagal"));
        header("location:../department");
    }else if ($aksi == "edit_cty") {
        $id_cty        = $_POST['id_cty'];
        $name_cty      = strtoupper($_POST['name_cty']);

        mysqli_query($koneksi,("UPDATE tb_category SET name_cty = '$name_cty' WHERE id_cty = '$id_cty'")) or die(mysql_errno("gagal"));
        header("location:../category");
    }else if ($aksi == "edit_all_ticket") {
        $id             = $_POST['id'];
        $id_employe     = $_POST['employe'];
        $id_dpt         = $_POST['id_dpt'];
        $id_cty         = $_POST['id_cty'];
        $action         = $_POST['action'];
        $status         = $_POST['status'];
        $problem        = $_POST['problem'];

        mysqli_query($koneksi,("UPDATE tb_ticket SET id_employe = '$id_employe', id_dpt = '$id_dpt', id_cty = '$id_cty', date_updated = NOW(), action = '$action', status = '$status', problem = '$problem' WHERE id = '$id'")) or die(mysql_errno("gagal"));
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }

?>
