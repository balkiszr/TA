
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="halAdmin.css" />
</head>

<body>
    <div class="container" style="padding-top: 50px; padding-bottom: 50px">

        <div class="row">
            <div class="col s10 offset-s1">
                <div class="table-card">
                    <div class="header">
                        <span class="title">Create / edit data</span>
                    </div>
                    <div class="table">
                        <table class="bordered">
                            <thead>
                                <!-- <form method="POST" action="proses_simpantoko.php" enctype="multipart/form-data"> -->
            <tr>
                <td>Nama Toko</td>
                <td>:</td>
                <td><textarea name="namaToko" cols="25"  rows="3"></textarea></td>
            </tr>
            <tr>
                <td>jam Operasional</td>
                <td>:</td>
                <td><input type="text" name="jamOperasional" /></td>
            </tr>
            <tr>
                <td>alamat</td>
                <td>:</td>
                <td><textarea name="alamat" cols="25"  rows="3"></textarea><br></td>
            </tr>
            <tr>
                <td>alamat lengkap</td>
                <td>:</td>
                <td><textarea name="alamatLengkap" cols="35"  rows="3"></textarea><br></td>
            </tr>
            <tr>
                <td>instagram</td>
                <td>:</td>
                <td><input type="text" name="instagram"></td>
            </tr>
            <tr>
                <td>nomor Hp</td>
                <td>:</td>
                <td><input type="text" name="noHp"></td>
            </tr>
            <tr>
                <td>link google maps</td>
                <td>:</td>
                <td><input type="text" name="gmaps"></td>
            </tr>
            <tr>
                <td>Produck brand</td>
                <td>:</td>
                <td><textarea name="produkbrand" cols="50"  rows="10"></textarea></td>
            </tr>
            <tr>
                <td>images</td>
                <td>:</td>
                <td><input type="file" name="images"></td>
            </tr>
            <tr>
            <td><button type="submit" class="kirim" name="kirim">kirim</button>
            <button type="reset" class="kirim" name="cancel">cancel</button></td>
            </tr>
        </form>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- <div class="container" style="padding-top: 50px; padding-bottom: 50px">

        <div class="row">
            <div class="col s10 offset-s1">
                <div class="table-card">
                    <div class="header">
                        <span class="title">Data Toko</span>

    </div> -->
</body>

</html>