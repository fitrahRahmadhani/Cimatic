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
            <a class="nav-link nav-custom" aria-current="page" href="home.php">Home</a>
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
            <a class="nav-link nav-custom" href="#">Library</a>
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

      <!-- Start Main -->
<section class="movie-list container mb-5 movie-container-search">
    <h1 class="header mt-5 mb-3">Search result "<span class="search">Venom</span>"</h1>
    <div class="movie-container">
      <div class="box-wrapper-library">
        <div class="box">
          <div class="box-img">
            <img src="img/small/doctorStrangeMultiverse.jpg" alt="">
          </div>
          <h3 class="box-title">Doctor Strange : In The Multiverse of Madness</h3>
          <p>15+ | Petualangan</p>
          <a class="watch" href="#" role="button">
            <p>Watch</p> 
          </a>
        </div>
      </div>
      <div class="box-wrapper-library">
        <div class="box">
          <div class="box-img">
            <img src="img/small/doctorStrangeMultiverse.jpg" alt="">
          </div>
          <h3 class="box-title">Doctor Strange : In The Multiverse of Madness</h3>
          <p>15+ | Petualangan</p>
          <a class="watch" href="#" role="button">
            <p>Watch</p> 
          </a>
        </div>
      </div>
      <div class="box-wrapper-library">
        <div class="box">
          <div class="box-img">
            <img src="img/small/doctorStrangeMultiverse.jpg" alt="">
          </div>
          <h3 class="box-title">Doctor Strange : In The Multiverse of Madness</h3>
          <p>15+ | Petualangan</p>
          <a class="watch" href="#" role="button">
            <p>Watch</p> 
          </a>
        </div>
      </div>
      <div class="box-wrapper-library">
        <div class="box">
          <div class="box-img">
            <img src="img/small/doctorStrangeMultiverse.jpg" alt="">
          </div>
          <h3 class="box-title">Doctor Strange : In The Multiverse of Madness</h3>
          <p>15+ | Petualangan</p>
          <a class="watch" href="#" role="button">
            <p>Watch</p> 
          </a>
        </div>
      </div>
    </div>
</section>
      <!-- End Main -->

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
  <!-- End JS -->
</body>
</html>