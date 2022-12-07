<?php
include 'koneksi.php';
if(isset($_POST['kirim'])){
    $namaKota= $_POST['namaKota'];
    $images= $_FILES['images'];
    $namagambar=$images['name'];
    echo '<pre>';
    print_r([$namaKota,$images]);
    echo '</pre>';
    $query=mysqli_query($koneksi,"insert into tb_kategori values(NULL,'$namaKota','$namagambar')");
    if(move_uploaded_file($images['tmp_name'],"imagestoko/$namagambar")){
        echo "file berhasil di pindah";
    }else{
        echo"file gagal di pindah";
    }
}
header("location:index.php");
?>