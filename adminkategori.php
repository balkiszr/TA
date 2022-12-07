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
                <a href="adminkategori.php" class="active">kelola kategori</a>
                <a href="admintoko.php">kelola toko</a>
                <a href="adminunggulan.php">kelola toko unggulan</a><br>
                <a href="#"></a><br>
                <a href="#"></a><br>
                <a href="#"></a><br>
                <a href="#"></a><br>
                <a href="#"></a><br>
                <a href="#"></a><br>
            </div>
        </nav>
        <div class="promo_card">
        <h3>Kelola Kategori</h3>
<div class="container" style="padding-top: 50px; padding-bottom: 50px">
        <div class="row">
            <div class="col s10 offset-s1">
                <div class="table-card">
                    <div class="header">
                        <span class="title">Create kategori</span>
                    </div>
                    <div class="table">
                        <table class="bordered">
                            <thead> <form method="POST" action="proseskategori.php" enctype="multipart/form-data">
            <tr>
                <td>Nama Kota</td>
                <td>:</td>
                <td><textarea name="namaKota" cols="25"  rows="3"></textarea></td>
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
                        <h3>data semua Kategori</h3><br>
              <div class="uktable"><table>
  <tr>
    <th></th>
    <th scope="col">Nama Kategori</th>
    <th scope="col">Aksi</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Malang</td>
    <td><a href="#">delete</a></td>
  </tr>
  <tr>
    <td>2</td>
    <td>Surabaya</td>
    <td><a href="#">delete</a></td>
  </tr>
  <tr>
    <td>3</td>
    <td>Sidoarjo</td>
    <td><a href="#">delete</a></td>
  </tr>
  <tr>
    <td>4</td>
    <td>Blitar</td>
    <td><a href="#">delete</a></td>
  </tr>
  <tr>
    <td>5</td>
    <td>Tulungagung</td>
    <td><a href="#">delete</a></td>
  </tr>
  <tr>
    <td>6</td>
    <td>Jombang</td>
    <td><a href="#">delete</a></td>
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