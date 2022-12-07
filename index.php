<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scinnotia</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="footer.css">

</head>

<body>
    <!--header-->
    <!-- <header>
        <div class="containerr">
            <h1><svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M30 9H6V6H30V9ZM19.5 23.25C19.5 24.96 20.145 26.79 21 28.5V30H6V21H4.5V18L6 10.5H30L31.05 15.75C30 15.27 28.92 15 27.75 15C23.25 15 19.5 18.75 19.5 23.25ZM18 21H9V27H18V21ZM33 23.25C33 27.15 27.75 33 27.75 33C27.75 33 22.5 27.15 22.5 23.25C22.5 20.4 24.9 18 27.75 18C30.6 18 33 20.4 33 23.25ZM29.55 23.4C29.55 22.5 28.65 21.6 27.75 21.6C26.85 21.6 25.95 22.35 25.95 23.4C25.95 24.3 26.7 25.2 27.75 25.2C28.8 25.2 29.7 24.3 29.55 23.4V23.4Z" fill="white"/>
                        </svg> <a href="index.php" >$cїппѳтїа</a></h1>
                    <ul>
                    <h3 color="#eee"><li class="action"><a href="" >HOME</a></li>
                    <li class="action"><a href="#containerr">Top Store</a></li>
                    <span class="input-group-btn">
								<select class="btn btn-default" name="ext" required>
                <li class="action"><a href="">City</a></li></h3>
                <option selected="">City</option>
									<option>Malang</option>
									<option>Surabaya</option>
									<option>Blitar</option>
									<option>Ponorogo</option>
								</select>
							</span>				
    </header> -->
    <header class="header">

        <a href="index.php" class="logo"> <i class="fas fa-shopping-basket"></i>$cїппѳтїа</a>
        <nav class="navbar">
            <ul class='navbar-menu'>
                <li><a href="index.php">home</a></li>
                <li><a href="#containerr">Toko</a></li>
                <li class="dropdown"><a href="#">Kota</a>
                <!-- <ul class="isi-dropdown">
                  <li><a href="#">Malang</a></li>
                  <li><a href="#">Surabaya</a></li>
                  <li><a href="#">Blitar</a></li>
                  <li><a href="#">Ponorogo</a></li>
                  <li><a href="#">Sidoarjo</a></li>
                  </li>
            </ul></div> -->
        </nav>
    </header>
    <section class="w3l-cover-3">
        <div class="top-bottom">
            <div class="top-bottom1">
                <div class="container">
                    <div class="middle-section text-center">
                        <div class="section-width">
                            <center>
                                <p>Pilihan bagus untuk toko kecantikan di Jawa Timur!</p>
                                <h2>Temukan toko terbaik menurut Anda</h2>
                            </center>
                            <div class="most-searches">
                                <h4>Cari Toko</h4>
                            </div>
                            <form action="#" class="w3l-cover-3-gd" method="GET">
                                <input type="search" name="text" placeholder="Nama Toko" required>
                                <span class="input-group-btn">
                                    <select class="btn btn-default" name="ext" required>
                                        <ul>
                                            <option selected="">Kota</option>
                                            <a href="./malang.php">
                                                <option>Malang</option>
                                            </a>
                                            <option>Surabaya</option>
                                            <option>Blitar</option>
                                            <option>Ponorogo</option>
                                            <ul>
                                    </select>
                                </span>
                                <button type="submit" class="btn-primary">Cari</button>
                            </form>
                        </div>
                        <section id="bottom" class="demo">
                            <a href="#bottom"><span></span>Scroll</a>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <br><br><br>
    <div class="containerr" id="containerr">
        <u>
            <center>
                <h1>Toko Unggulan di berbagai kota!</h1>
            </center>
        </u>
        <br><br><br>
    </div>
    <div class="containerr h4">
        <h2>Toko unggulan di area Malang</h2>
    </div>
    <section class="cards">
        <article class="card">
            <div class="card-img"></div>
            <a href="#">
                <div class="card-img-hover" style="background-image: url(img/toko1.jpg);"></div>
            </a><br>
            <div class="card-info">
                <h3 class="card-title">Sociolla Store</h3>
                <span class="card-address">Lowokwaru - Kota Malang</span>
                <a href="sosiola.php"><button class="button">Read More</button></a>
        </article>
    </section>
    <section class="cards1">
        <article class="card1">
            <div class="card-img1"></div>
            <a href="#">
                <div class="card-img-hover1" style="background-image: url(img/toko2.jpg);"></div>
            </a><br>
            <div class="card-info1">
                <h3 class="card-title1">Mitufaya Store</h3>
                <span class="card-address1">Lowokwaru - Kota Malang</span>
                <a href="mitufaya.php"><button class="button">Read More</button></a>
        </article>
    </section>
    <section class="cards2">
        <article class="card2">
            <div class="card-img2"></div>
            <a href="#">
                <div class="card-img-hover2" style="background-image: url(img/toko3.jpg);"></div>
            </a><br>
            <div class="card-info2">
                <h3 class="card-title2">Deliwafa Store</h3>
                <span class="card-address2">Lowokwaru - Kota Malang</span>
                <a href="Deliwafa.php"> <button class="button">Read More</button></a>
        </article>
    </section>
    <section class="cards3">
        <article class="card3">
            <div class="card-img3"></div>
            <a href="#">
                <div class="card-img-hover3" style="background-image: url(img/toko4.jpg);"></div>
            </a><br>
            <div class="card-info3">
                <h3 class="card-title3">Aster Store</h3>
                <span class="card-address3">Lowokwaru - Kota Malang</span>
                <a href="aster.php"> <button class="button">Read More</button></a>
        </article>
    </section><br><br>
    <div class="containerr h4">
        <h2>Toko unggulan di area Surabaya</h2>
    </div>
    <section class="cards">
        <article class="card">
            <div class="card-img"></div>
            <a href="#">
                <div class="card-img-hover" style="background-image: url(img/toko5.jpg);"></div>
            </a><br>
            <div class="card-info">
                <h3 class="card-title">Beauty Haul</h3>
                <span class="card-address">Pakuwan mall - Surabaya</span><br>
                <a href="beauty.php"><button class="button">Read More</button></a>
        </article>
    </section>
    <section class="cards1">
        <article class="card1">
            <div class="card-img1"></div>
            <a href="#">
                <div class="card-img-hover1" style="background-image: url(img/toko6.jpg);"></div>
            </a><br>
            <div class="card-info1">
                <h3 class="card-title1">Mitufaya</h3>
                <span class="card-address1">Lowokwaru - Kota Malang</span>
                <button class="button">Read More</button>
        </article>
    </section>
    <section class="cards2">
        <article class="card2">
            <div class="card-img2"></div>
            <a href="#">
                <div class="card-img-hover2" style="background-image: url(img/toko7.jpg);"></div>
            </a><br>
            <div class="card-info2">
                <h3 class="card-title2">Mitufaya</h3>
                <span class="card-address2">Lowokwaru - Kota Malang</span>
                <button class="button">Read More</button>
        </article>
    </section>
    <section class="cards3">
        <article class="card3">
            <div class="card-img3"></div>
            <a href="#">
                <div class="card-img-hover3" style="background-image: url(img/toko8.jpg);"></div>
            </a><br>
            <div class="card-info3">
                <h3 class="card-title3">Mitufaya</h3>
                <span class="card-address3">Lowokwaru - Kota Malang</span>
                <button class="button">Read More</button>
        </article>
    </section>
    <br><br>
    <div class="containerr h4">
        <h2>Toko unggulan di area Blitar</h2>
    </div>
    <section class="cards">
        <article class="card">
            <div class="card-img"></div>
            <a href="#">
                <div class="card-img-hover" style="background-image: url(img/toko9.jpg);"></div>
            </a><br>
            <div class="card-info">
                <h3 class="card-title">MJ Beauty Cosmetics</h3>
                <span class="card-address">Kepanjenkidul - Blitar</span>
                <button class="button">Read More</button>
        </article>
    </section>
    <section class="cards1">
        <article class="card1">
            <div class="card-img1"></div>
            <a href="#">
                <div class="card-img-hover1" style="background-image: url(img/toko10.jpg);"></div>
            </a><br>
            <div class="card-info1">
                <h3 class="card-title1">Mitufaya</h3>
                <span class="card-address1">Lowokwaru - Kota Malang</span>
                <button class="button">Read More</button>
        </article>
    </section>
    <section class="cards2">
        <article class="card2">
            <div class="card-img2"></div>
            <a href="#">
                <div class="card-img-hover2" style="background-image: url(img/toko11.jpg);"></div>
            </a><br>
            <div class="card-info2">
                <h3 class="card-title2">Mitufaya</h3>
                <span class="card-address2">Lowokwaru - Kota Malang</span>
                <button class="button">Read More</button>
        </article>
    </section>
    <section class="cards3">
        <article class="card3">
            <div class="card-img3"></div>
            <a href="#">
                <div class="card-img-hover3" style="background-image: url(img/toko12.jpg);"></div>
            </a><br>
            <div class="card-info3">
                <h3 class="card-title3">Mitufaya</h3>
                <span class="card-address3">Lowokwaru - Kota Malang</span>
                <button class="button">Read More</button>
        </article>
    </section>
    <br><br><br><br><br><br><br><br>
    
</body>

</html>