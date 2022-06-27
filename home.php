<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta set -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootsrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </style>

    <!-- MyCss -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    
    <!-- Google API -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />


    <!-- Icon -->
    <link rel="Icon" href="img/logo/logo_mini.png">


    <title>Cimatic - Nonton Film Kapanpun & di Manapun</title>
</head>
<body>


    <!-- Start Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
    <a class="navbar-brand" href="index.html">
      <img src="img/logo/logo_mini.png" alt="" width="35" height="35" class="d-inline-block align-text-top">
    </a>
    <a class="navbar-brand brand" href="#">Cimatic</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item underL">
            <a class="nav-link status-active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item dropdown underL nav-custom">
            <a class="nav-link dropdown-toggle nav-custom" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Genre
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="genre.php">Action</a></li>
            <li><a class="dropdown-item" href="genre.php">Comedy</a></li>
            <li><a class="dropdown-item" href="genre.php">Sci-fi</a></li>
            </ul>
          </li>
          <li class="nav-item underL">
            <a class="nav-link nav-custom" href="library.php">Library</a>
          </li>
          <li class="nav-item underL">
            <a class="nav-link nav-custom" href="wishlist.php">Wishlist</a>
          </li>
          <li>
            <form class="d-flex nav-item" method="POST" action="searchEngine.php">
              <input class="form-control me-2 searchBox" type="search" placeholder="Search" aria-label="Search" name="seachTitle">
            </form>
          </li>
          <li class="nav-item">
            <div class="dropdown text-end dropdown-position">
              <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="mdo" width="30" height="30" class="rounded-circle">
                <span class="profil">Hai,</span><span class="account">Brodi</span>
              </a>
              <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
              </ul>
            </div>
          </li>
        </ul>
    </div>
    </div>
  </nav>
      <!-- End Navbar -->


      <!-- Start Carousel -->
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="carousel-custom">
          <div class="carosel_overlay"></div>
            <img src="img/carousel/theRoundup.png" class="img_position ">
            <div class="carosel_content  h-100 container position-relative">
              <div class="position-absolute top-50 start-0 translate-middle-y">
                <div class="text-white carousel-content-custom">
                  <h1>The Roundup</h1>
                  <p>Unit Kejahatan Besar Polisi Geumcheon diberi misi untuk memulangkan buronan yang melarikan diri ke Vietnam. Polisi garang Ma Seok Do dan Kapten Jeon Il Man secara intuitif menyadari bahwa ada yang salah dengan kesediaan tersangka untuk menyerahkan diri</p>
                </div>
                <div class="btn-display-method btn-position-custom">
                  <a class="btn btn-custom-buy" href="#" role="button">Beli Rp127.000</a>
                  <a class="btn btn-custom-rent" href="#" role="button">Sewa Rp28.000</a>
                  <a class="btn btn-custom-wishlist" href="#" role="button">
                    <span class="material-symbols-outlined md-36 material-position"> bookmark_add </span>
                    <span class="mobile-overflow">Add Wishlist</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel-custom">
          <div class="carosel_overlay"></div>
            <img src="img/carousel//rumahKuntilanak.png" class="img_position ">
            <div class="carosel_content  h-100 container position-relative">
              <div class="position-absolute top-50 start-0 translate-middle-y">
                <div class="text-white carousel-content-custom">
                  <h1>Rumah Kuntilanak</h1>
                  <p>Melani, 26, hamil 2 bulan, mendatangi daerah perkebunan karet mencari suaminya. Suaminya menyebut tempat itu sebelum meninggalkan Melani. Suaminya hanya ijin beberapa hari untuk menemui seseorang yang akan memberikan dia pekerjaan</p>
                </div>
                <div class="btn-display-method btn-position-custom">
                  <a class="btn btn-custom-buy" href="#" role="button">Beli Rp127.000</a>
                  <a class="btn btn-custom-rent" href="#" role="button">Sewa Rp28.000</a>
                  <a class="btn btn-custom-wishlist" href="#" role="button">
                    <span class="material-symbols-outlined md-36 material-position"> bookmark_add </span>
                    <span class="mobile-overflow">Add Wishlist</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel-custom">
          <div class="carosel_overlay"></div>
            <img src="img/carousel/ngeriNgeriSedap.png" class="img_position ">
            <div class="carosel_content  h-100 container position-relative">
              <div class="position-absolute top-50 start-0 translate-middle-y">
                <div class="text-white carousel-content-custom">
                  <h1>Ngeri Ngeri Sedap</h1>
                  <p>Pak Domu dan Mak Domu yang tinggal bersama sama, ingin sekali tiga anaknya: Domu, Gabe, dan Sahat yang sudah lama merantau pulang untuk menghadiri acara adat, tetapi mereka menolak pulang karena hubungan mereka tidak harmonis dengan Pak Domu</p>
                </div>
                <div class="btn-display-method btn-position-custom">
                  <a class="btn btn-custom-buy" href="#" role="button">Beli Rp127.000</a>
                  <a class="btn btn-custom-rent" href="#" role="button">Sewa Rp28.000</a>
                  <a class="btn btn-custom-wishlist" href="#" role="button">
                    <span class="material-symbols-outlined md-36 material-position"> bookmark_add </span>
                    <span class="mobile-overflow">Add Wishlist</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel-custom">
          <div class="carosel_overlay"></div>
            <img src="img/carousel/jurassicWorldDominion.png" class="img_position ">
            <div class="carosel_content  h-100 container position-relative">
              <div class="position-absolute top-50 start-0 translate-middle-y">
                <div class="text-white carousel-content-custom">
                  <h1>Jurassic World: Dominion</h1>
                  <p>Empat tahun setelah kehancuran pulau Nublar, dinosaurus sekarang hidup dan berburu bersama manusia di seluruh dunia. Keseimbangan yang rapuh ini akan menentukan, apakah manusia akan tetap menjadi berada di puncak rantai makanan ketika berbagi wilayah dengan makhluk paling menakutkan dalam sejarah bumi</p>
                </div>
                <div class="btn-display-method btn-position-custom">
                  <a class="btn btn-custom-buy" href="#" role="button">Beli Rp127.000</a>
                  <a class="btn btn-custom-rent" href="#" role="button">Sewa Rp28.000</a>
                  <a class="btn btn-custom-wishlist" href="#" role="button">
                    <span class="material-symbols-outlined md-36 material-position"> bookmark_add </span>
                    <span class="mobile-overflow">Add Wishlist</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel-custom">
          <div class="carosel_overlay"></div>
            <img src="img/carousel/gatotkaca.png" class="img_position ">
            <div class="carosel_content  h-100 container position-relative">
              <div class="position-absolute top-50 start-0 translate-middle-y">
                <div class="text-white carousel-content-custom">
                  <h1>Satria Dewa Gatotkaca</h1>
                  <p>Dunia dalam cerita ini sedikit berbeda ada manusia -manusia yang memiliki kemampuan jauh di atas rata-rata, diam - diam hidup di antara kita. Ada yang cerdas luar biasa, kuat tak terkira, tak pernah mengalami sakit, pendengaran setajam kelelawar, dan lain-lain. Dunia yang juga begitu mencekam, karena teror pembunuh berantai</p>
                </div>
                <div class="btn-display-method btn-position-custom">
                  <a class="btn btn-custom-buy" href="#" role="button">Beli Rp127.000</a>
                  <a class="btn btn-custom-rent" href="#" role="button">Sewa Rp28.000</a>
                  <a class="btn btn-custom-wishlist" href="#" role="button">
                    <span class="material-symbols-outlined md-36 material-position"> bookmark_add </span>
                    <span class="mobile-overflow">Add Wishlist</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
      <!-- End Carousel -->


      <!-- Start Card -->
  <section class="movie-list container mb-5">
    <h1 class="header mt-5 mb-3">Trending Now</h1>
    <div class="movie-container">
      <a href="preview.php" class="box-wrapper">
        <div class="box">
          <div class="box-img">
            <img src="img/small/doctorStrangeMultiverse.jpg" alt="">
          </div>
          <h3 class="box-title">Doctor Strange : In The Multiverse of Madness</h3>
          <p>15+ | Petualangan</p>
          <p class="price">Rp28.000</p>
        </div>
      </a>
      <a href="" class="box-wrapper">
      <div class="box">
        <div class="box-img">
          <img src="img/small/kknDesaPenari.jpg" alt="">
        </div>
        <h3 class="box-title">KKN di Desa Penari</h3>
        <p>17+ | Horror</p>
        <p class="price">Rp28.000</p>
      </div>
      </a>
      <a href="" class="box-wrapper">
      <div class="box">
        <div class="box-img">
          <img src="img/small/srimulat.jpg" alt="">
        </div>
        <h3 class="box-title">Srimulat: Hil yang Mustahal – Babak Pertama</h3>
        <p>13+ | Komedi</p>
        <p class="price">Rp28.000</p>
      </div>
      </a>
      <a href="" class="box-wrapper">
      <div class="box">
        <div class="box-img">
          <img src="img/small/kuntilanak3.jpg" alt="">
        </div>
        <h3 class="box-title">Kuntilanak 3</h3>
        <p>17+ | Horror</p>
        <p class="price">Rp28.000</p>
      </div>
      </a>
      <a href="" class="box-wrapper">
      <div class="box">
        <div class="box-img">
          <img src="img/small/topGunMaverick.jpg" alt="">
        </div>
        <h3 class="box-title">Top Gun: Maverick</h3>
        <p>17+ | Petualangan</p>
        <p class="price">Rp28.000</p>
      </div>
      </a>
      <a href="" class="box-wrapper">
      <div class="box">
        <div class="box-img">
          <img src="img/small/aditSopoJarwoTheMovie.jpg" alt="">
        </div>
        <h3 class="box-title">Adit Sopo Jarwo</h3>
        <p>15+ | Petualangan</p>
        <p class="price">Rp28.000</p>
      </div>
      </a>
    </div>
  </section>
      <!-- End Card -->


      <!-- Start Slider -->
  <section class="coming container mb-5">
    <h1 class="header mt-5 mb-3">Cooming Soon</h1>
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
          <div class="swiper-slide box">
            <div class="box-img">
              <img src="img/small/minions2TheRiseOfGru.jpg" alt="">
            </div>
            <h3 class="box-title">Minion: The Rise of Gru</h3>
            <p>13+ | Komedi</p>
            <p>Rilis: 01/07/2022</p>
            <a class="addWish" href="#" role="button">
              <p>Add Wishlist</p> 
              <span class="material-symbols-outlined md-36"> bookmark_add </span>
              </a>
          </div>
        <div class="swiper-slide box">
          <div class="box-img">
            <img src="img/small/thorLoveandThunder.jpg" alt="">
          </div>
          <h3 class="box-title">Thor : Love and Thunder</h3>
          <p>17+ | Laga</p>
          <p>Rilis: 08/07/2022</p>
          <a class="addWish" href="#" role="button">
            <p>Add Wishlist</p> 
            <span class="material-symbols-outlined md-36"> bookmark_add </span>
            </a>
        </div>
        <div class="swiper-slide box">
          <div class="box-img">
            <img src="img/small/ivanna.jpg" alt="">
          </div>
          <h3 class="box-title">Minion: The Rise of Gru</h3>
          <p>17+ | Horror</p>
          <p>Rilis: 14/07/2022</p>
          <a class="addWish" href="#" role="button">
            <p>Add Wishlist</p> 
            <span class="material-symbols-outlined md-36"> bookmark_add </span>
            </a>
        </div>
        <div class="swiper-slide box">
          <div class="box-img">
            <img src="img/small/ghostWritter2.jpg" alt="">
          </div>
          <h3 class="box-title">The Ghost Writer 2</h3>
          <p>17+ | Horro</p>
          <p>Rilis: 01/07/2022</p>
          <a class="addWish" href="#" role="button">
            <p>Add Wishlist</p> 
            <span class="material-symbols-outlined md-36"> bookmark_add </span>
            </a>
        </div>
        <div class="swiper-slide box">
          <div class="box-img">
            <img src="img/small/nope.jpg" alt="">
          </div>
          <h3 class="box-title">NOPE</h3>
          <p>17+ | Horror</p>
          <p>Rilis: 01/07/2022</p>
          <a class="addWish" href="#" role="button">
            <p>Add Wishlist</p> 
            <span class="material-symbols-outlined md-36"> bookmark_add </span>
            </a>
        </div>
        <div class="swiper-slide box">
          <div class="box-img">
            <img src="img/small/devilOnTop.jpg" alt="">
          </div>
          <h3 class="box-title">Devil on Top</h3>
          <p>13+ | Komedi</p>
          <p>Rilis: 01/07/2022</p>
          <a class="addWish" href="#" role="button">
            <p>Add Wishlist</p> 
            <span class="material-symbols-outlined md-36"> bookmark_add </span>
            </a>
        </div>
      </div>
    </div>
  </section>

  
      <!-- End Slider -->

     
      <!-- Start Footer -->

  <footer class="pt-5 pb-4 bg-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-12 footer-position">
          <img src="img/logo/logo_white_text.png" alt="Cimatic" height="50">
        </div>
        <div class="col-lg-7 col-md-6 col-sm-12 footer-content-custom footer-position">
          <div class="col-lg-10">
            <h3>Copyright</h3>
            <p>@2022 Cimatic dan entitas-entitas terkaitnya. Hak Cipta Dilindungi Undang-Undang. © 2022 Entitas-entitas pemberi lisensi Disney. Hak Cipta Dilindungi Undang-Undang </p>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12 footer-content-custom footer-position">
          <h3>Cimatic App</h3>
          <a href="https://play.google.com/" style="text-decoration: none;">
            <img src="img/logo/google-play.png" alt="play-store" width="40" style="margin-left: 12px; margin-top: 8px;">
          </a>
          <a href="https://www.apple.com/app-store/" style="text-decoration: none;">
            <img src="img/logo/apple.png" alt="app-store" width="35" style="margin-left: 12px; margin-top: 8px;">
          </a>
        </div>
        </div>
      </div>
      </div>
    </div>
  </footer>
      <!-- End Footer -->

  <!-- Start JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script>
    var myCarousel = document.querySelector('#myCarousel')
    var carousel = new bootstrap.Carousel(myCarousel, {
    interval: 1,
    wrap: false
    })
  </script>

   <!-- Swiper JS -->
   <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
   <script src="js/main.js"></script>

  <!-- End JS -->
</body>
</html>