<?php
    session_start();
    include ("../../config/koneksi.php");

    $aksi = $_GET['aksi'];

    if ($aksi == "add_ticket") {
        $id_employe     = $_POST['employe'];
        $id_dpt         = $_POST['id_dpt'];
        $id_cty         = $_POST['id_cty'];
        $title          = $_POST['title'];
        $action         = $_POST['action'];
        $status         = $_POST['status'];
        $problem        = $_POST['problem'];

        mysqli_query($koneksi,("INSERT INTO tb_ticket
                                VALUES(NULL,'$id_employe','$id_dpt','$id_cty','$title', NOW(), NOW(),'$action','$status','$problem')"))
                                or die(mysql_errno("gagal"));
        header("location:../ticket");
    }

?>
