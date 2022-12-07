<?php
$username = $_POST['username'];
$password1 = $_POST ['password'];

include "koneksi.php";
    $pengacak = "p3ng4c4k";
    $passmd = md5($pengacak . md5($password1));
    $query = "INSERT INTO tb_login VALUES( '$username', '$passmd')";
    $hasil = mysqli_query($koneksi, $query);

    if ($hasil) { 
        echo "<script>alert('user baru, berhasil ditambhakan!');window.location='login.php';</script>";
    }
else echo "<script>alert('proses daftar gagal!');window.location=register.php';</script>";
?>