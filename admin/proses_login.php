<?php

    session_start();
    include('../config/koneksi.php');

    $email      = $_POST['email'];
    $password   = $_POST['password'];
    $password2  = md5($password);

    $query  = mysqli_query($koneksi,("SELECT * FROM tb_admin WHERE email = '$email' OR username = '$email' AND password = '$password2'"));
    $cek    = mysqli_num_rows($query);
    $data   = mysqli_fetch_array($query);

    $id         = $data['id'];
    $username   = $data['username'];
    $fullname   = $data['fullname'];
    $level      = $data['level'];

    if ($cek) {
        $_SESSION['fullname']   = $fullname;
        $_SESSION['username']   = $username;
        $_SESSION['password']   = $password;
        $_SESSION['id']         = $id;
        $_SESSION['level']      = $level;

        header('location:home');
	}else{
		echo "<script language='javascript'>alert('Silahkan isi data dengan benar')</script>";
  		echo "<script language='javascript'>window.location = 'login'</script>";
	}

?>
