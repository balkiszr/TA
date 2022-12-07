<?php
session_start();
if (isset($_SESSION['admin_username'])) {
    header("location:admindua.php");
}
include("koneksi.php");
$username = "";
$password = "";
$err = "";
if (isset($_POST['login'])) {
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    // echo '<pre>';
    // print_r ([$username,$password]);
    // echo '</pre>';
    if ($username == '' or $password == '') {
        $err .= "<li>Silakan masukkan username dan password</li>";
    }
    if (empty($err)) {
        $sql1 = "select * from tb_login where username = '$username'";
        $q1 = mysqli_query($koneksi, $sql1);
        $r1 = mysqli_fetch_array($q1);
        if ($r1['password'] != $password) {
            $err .= "<li>Akun tidak ditemukan</li>";
        }
    }
    // if (empty($err)) {
    //     $login_id = $r1['login_id'];
    //     $sql1 = "select * from admin_akses where login_id = '$login_id'";
    //     $q1 = mysqli_query($koneksi, $sql1);
    //     while ($r1 = mysqli_fetch_array($q1)) {
    //         $akses[] = $r1['akses_id']; //spp, guru, siswa
    //     }
    //     if (empty($akses)) {
    //         $err .= "<li>Kamu tidak punya akses ke halaman admin</li>";
    //     }
    // }
    if (empty($err)) {
        $_SESSION['admin_username'] = $username;
        $_SESSION['admin_akses'] = $akses;
        header("location:admindua.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="stylenya.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;700&display=swap" rel="stylesheet">
</head>

<body>
<?php
        if ($err) {
            echo "<ul>$err</ul>";
        }
        ?>
    <div class="overlay"></div>
    <form action="" method="post" class="box">
        <div class="header">
            <h4><br><br></h4>
            <p><br><br></p>
        </div>
        <div class="login-area">
            <input name="username" type="text" class="username" placeholder="masukkan username anda!">
            <input name="password" type="password" class="password" placeholder="isi sesuai password">
            <td>&nbsp;</td>
            <input name="login" type="submit" value="Masuk ke Sistem" class="submit">
            <a href="register.php">register</a>
        </div>
    </form>
    </form>
</body>

</html>