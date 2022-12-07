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
                <a href="admindua.php" class="active">halaman utama</a>
                <a href="adminkategori.php">kelola kategori</a>
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
                <h1>Selamat datang admin<br>Scinnotia!</h1>
                <span>mau ganti yang manaa?<br><br></span><br><br>
                <h3>data semua toko</h3>
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
</div> </div>
    </body>
    </html>