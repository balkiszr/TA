<?php
include 'koneksi.php';
if(isset($_POST['kirim'])){
    $namaToko= $_POST['namaToko'];
    $jamOperasional= $_POST['jamOperasional'];
    $alamat= $_POST['alamat'];
    $alamatLengkap= $_POST['alamatLengkap'];
    $instagram= $_POST['instagram'];
    $noHp= $_POST['noHp'];
    $gmaps= $_POST['gmaps'];
    $produkbrand= $_POST['produkbrand'];
    $images= $_FILES['images'];
    $namagambar=$images['name'];
    echo '<pre>';
    print_r([$namaToko,$jamOperasional,$alamat,$alamatLengkap,$instagram,$noHp,$gmaps,$produkbrand,$images]);
    echo '</pre>';
    $query=mysqli_query($koneksi,"insert into tb_toko values(NULL,'$namaToko','$jamOperasional','$alamat','$alamatLengkap','$instagram','$noHp','$gmaps','$produkbrand','$namagambar')");
    if(move_uploaded_file($images['tmp_name'],"imagestoko/$namagambar")){
        echo "file berhasil di pindah";
    }else{
        echo"file gagal di pindah";
    }
}
header("location:index.php");
?>