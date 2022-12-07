<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Admin Dashboard</title>
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="admin.css" />
</head>

<body>
    
<header class="header">
        <div class="logo">
            <a href="#">$cїппѳтїа</a>
            <div class="search_box">
                <input type="text" placeholder="Cari toko">
                <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
            </div>
        </div>
    </header>
    <div class="container">
        <nav>
            <div class="side_navbar">
                <span>Main Menu</span>
                <a href="admindua.php">halaman utama</a>
                <a href="adminkategori.php">kelola kategori</a>
                <a href="admintoko.php">kelola toko</a>
                <a href="adminunggulan.php" class="active">kelola toko unggulan</a><br>
                <a href="#"></a><br>
                <a href="#"></a><br>
                <a href="#"></a><br>
                <a href="#"></a><br>
                <a href="#"></a><br>
                <a href="#"></a><br>
            </div>
        </nav>
        <div class="promo_card">
        <h3>Kelola Toko Unggulan</h3>
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
                        </table><br><br>
                        <h3>data semua toko Unggulan</h3><br>
              <div class="uktable"><table>
  <tr>
    <th></th>
    <th scope="col">Nama toko</th>
    <th scope="col">Kategori</th>
    <th scope="col">Aksi</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Mitufaya</td>
    <td>Malang</td>
    <td><a href="#">update</a>&nbsp;&nbsp;&nbsp;<a href="#">delete</a></td>
  </tr>

  <tr>
    <td>2</td>
    <td>Sociolla</td>
    <td>Malang</td>
    <td><a href="#">update</a>&nbsp;&nbsp;&nbsp;<a href="#">delete</a></td>
  </tr>
    
  <tr>
    <td>3</td>
    <td>Beauty hall</td>
    <td>Surabaya</td>
    <td><a href="#">update</a>&nbsp;&nbsp;&nbsp;<a href="#">delete</a></td>
  </tr>
</table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</body>
</html>