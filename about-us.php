<?php
     //inisialisasi session
     session_start();
     
     //mengecek username pada session
     if ( !isset( $_SESSION[ 'username' ] ) ) {
        $_SESSION[ 'msg' ] = 'anda harus login untuk mengakses halaman ini';
         header( 'Location: login.php' );
     }
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en"> 
  <head>
    <title>About Us</title>
<!--Meta Tags-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!--Icon-->
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

<!--Poppins Font-->
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,300i,400,500,600,700,800,900,900i%7CPT+Serif:400,700">

<!--CSS-->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/fonts.css">
<link rel="stylesheet" href="css/style.css">
<style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>

</head>
<body>
<!--Loading Screen-->
<div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
<div class="preloader">
<div class="preloader-body">
  <div class="cssload-container">
    <div class="cssload-speeding-wheel"></div>
  </div>
  <p>Loading...</p>
</div>
</div>
<div class="page">     
<!-- Header-->
<header class="section page-header">
  <!-- Navbar-->
  <div class="rd-navbar-wrap">
    <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
      <div class="rd-navbar-main-outer">
        <div class="rd-navbar-main">
          <!-- Navbar Panel-->
          <div class="rd-navbar-panel"> 
            <!-- Navbar Toggle-->
            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
            <!-- Navbar Brand-->
            <div class="rd-navbar-brand"><a href="index.php"><img class="brand-logo-light" src="images/logo-default1-140x57.png" alt="" width="140" height="57" srcset="images/logo-default-280x113.png 2x"/></a></div>
          </div>
          <div class="rd-navbar-main-element">
            <div class="rd-navbar-nav-wrap">
              <!-- Navbar Nav-->
              <ul class="rd-navbar-nav">
                <li class="rd-nav-item"><a class="rd-nav-link" href="index.php">Home</a>
                </li>
                <li class="rd-nav-item active"><a class="rd-nav-link" href="about-us.php">About</a>
                </li>
                <li class="rd-nav-item "><a class="rd-nav-link" href="contacts.php">Contacts</a>
                </li>
              </ul><a class="button button-white button-sm" href="logout.php">Log Out</a>
            </div>
          </div><a class="button button-white button-sm" href="logout.php">Log Out</a>
        </div>
      </div>
    </nav>
  </div>
</header>
      <section class="parallax-container overlay-1" data-parallax-img="images/breadcrumbs.jpg">
        <div class="parallax-content breadcrumbs-custom context-dark"> 
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12 col-lg-9">
                <h2 class="breadcrumbs-custom-title">About Us</h2>
                <ul class="breadcrumbs-custom-path">
                  <li><a href="index.php">Home</a></li>
                  <li class="active">About Us</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-lg bg-gray-1">
        <div class="container">
          <div class="row row-50">
            <div class="col-lg-6 pr-xl-5"><img src="images/about-us-1-518x434.jpg" alt="" width="518" height="434"/>
            </div>
            <div class="col-lg-6">
              <h2>Tentang Website Kita</h2>
              <div class="text-with-divider">
                <div class="divider"></div>
                <h4>Arunika Flora memiliki makna yang dalam dan menggambarkan keindahan alam Indonesia, terutama dalam konteks flora dan cahaya alam.</h4>
              </div>
              <p>Arunika berasal dari bahasa Sanskerta yang berarti "cahaya matahari pagi" atau "cahaya yang pertama kali muncul saat fajar". Cahaya pagi ini memberikan kesan optimisme, kesegaran, dan keindahan alam yang bangkit di pagi hari.</p>
              <p>Flora merujuk pada dunia tumbuhan atau vegetasi secara keseluruhan. Dalam konteks ini, Flora mencakup berbagai jenis tumbuhan dan bunga yang tumbuh subur di Indonesia, yang memiliki keindahan dan keanekaragaman luar biasa.</p>
              <p>Jadi <b>"Arunika"</b> menggambarkan cahaya matahari yang menyinari kehidupan, sedangkan <b>"Flora"</b> mencerminkan kehidupan tumbuhan yang berkembang di bawah cahaya tersebut.</p>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-lg bg-white">
        <div class="container">
          <h2 class="text-center">Anggota Tim</h2>
          <div class="row row-30 row-md-60">
            <div class="col-md-6 col-lg-4">
              <div class="box-icon-modern">
                <div class="box-icon-inner decorate-triangle"><span class="icon-xl linearicons-user"></span></div>
                <div class="box-icon-caption">
                  <h4><a href="#">Zelfa</a></h4>
                  <p>Zelfa Medina Rofino 9.1</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="box-icon-modern">
                <div class="box-icon-inner decorate-circle"><span class="icon-xl linearicons-user"></span></div>
                <div class="box-icon-caption">
                  <h4><a href="#">Afifah</a></h4>
                  <p>Afifah Miftahul Zaafirah 9.5</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="box-icon-modern">
                <div class="box-icon-inner decorate-rectangle"><span class="icon-xl linearicons-user"></span></div>
                <div class="box-icon-caption">
                  <h4><a href="#">Zaky</a></h4>
                  <p>Zaky Ramadhan Al Munawar 9.3</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="box-icon-modern">
                <div class="box-icon-inner decorate-circle"><span class="icon-xl linearicons-user"></span></div>
                <div class="box-icon-caption">
                  <h4><a href="#">Radithya</a></h4>
                  <p>Radithya Aydin Aryasatya 9.7</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="box-icon-modern">
                <div class="box-icon-inner decorate-triangle"><span class="icon-xl linearicons-user"></span></div>
                <div class="box-icon-caption">
                  <h4><a href="#">Azriel</a></h4>
                  <p>Azriel Putra Hakim 9.3</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="parallax-container" data-parallax-img="images/parallax-img-4.jpg">
        <div class="parallax-content section-xl context-dark text-center bg-dark-filter bg-dark-filter-2">
          <div class="container">
            <h2>Keluh Kesah</h2>
            <!-- Slick Carousel-->
            <div class="slick-slider carousel-parent slick-style-1" data-arrows="true" data-loop="false" data-dots="false" data-swipe="true" data-items="1" data-child="#child-carousel" data-for="#child-carousel">
              <div class="item">
                <div class="testimonials-modern">
                  <div class="testimonials-modern-text">
                    <p><b>Waktu Pembuatan Yg Mepet Dengan Deadline.</b> Total waktu pembuatan adalah 1 minggu lebih 4 hari, 1 minggu untuk pengumpulan ide dan pencarian refrensi kemudian sisa 4 hari adalah waktu pembuatan websitenya.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonials-modern">
                  <div class="testimonials-modern-text">
                    <p><b>Sering Terjadi Error dalam Proses Pembuatan.</b> Error/Bug mungkin adalah hal biasa yang terjadi dalam pemrograman terlebih lagi bagi pemula yang baru terjun ke dunia pemrograman.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonials-modern">
                  <div class="testimonials-modern-text">
                    <p><b>Hasil Code Sering Tidak Muncul Di Localhost.</b> Seringkali hasil code tidak muncul di Localhost, dan harus di refresh berkali kali. Hal ini membuat proses pemrograman menjadi sedikit lebih lama.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonials-modern">
                  <div class="testimonials-modern-text">
                    <p><b>Lupa Memberikan Titik Koma (;).</b> Masalah ini adalah masalah yang paling menyebalkan, biasanya muncul saat kita sudah lelah atau kehilangan fokus saat sedang mengerjakan, ditambah mencarinya juga lumayan sulit jika tidak menggunakan extensions tambahan.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="slick-slider slider-dots" id="child-carousel" data-for=".carousel-parent" data-arrows="false" data-loop="false" data-dots="false" data-swipe="true" data-items="4" data-xs-items="4" data-sm-items="4" data-md-items="4" data-lg-items="4" data-xl-items="4" data-slide-to-scroll="1">
              <div class="item">
                <div class="slick-dot-item"><img src="images/user-1-60x60.jpg" alt="" width="60" height="60"/>
                </div>
              </div>
              <div class="item">
                <div class="slick-dot-item"><img src="images/user-2-60x60.jpg" alt="" width="60" height="60"/>
                </div>
              </div>
              <div class="item">
                <div class="slick-dot-item"><img src="images/user-3-60x60.jpg" alt="" width="60" height="60"/>
                </div>
              </div>
              <div class="item">
                <div class="slick-dot-item"><img src="images/user-4-60x60.jpg" alt="" width="60" height="60"/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-lg bg-gray-1 text-center">
        <div class="container">
          <h2>Bahasa Pemrograman Yang Kita Gunakan :</h2>
          <div class="row row-30">
            <div class="col-6 col-md-3"><a class="clients-default" href="#"><img src="images/clients-1-270x119.png" alt="" width="270" height="119"/></a></div>
            <div class="col-6 col-md-3"><a class="clients-default" href="#"><img src="images/clients-2-270x119.png" alt="" width="270" height="119"/></a></div>
            <div class="col-6 col-md-3"><a class="clients-default" href="#"><img src="images/clients-3-270x119.png" alt="" width="270" height="119"/></a></div>
            <div class="col-6 col-md-3"><a class="clients-default" href="#"><img src="images/clients-4-270x119.png" alt="" width="270" height="119"/></a></div>
          </div>
        </div>
      </section>
      <!-- Footer-->
      <footer class="section footer-minimal context-dark">
        <div class="container wow-outer">
          <div class="wow fadeIn">
            <div class="row row-60">
              <div class="col-12"><a href="index.php"><img src="images/logo-default1-140x57.png" alt="" width="140" height="57" srcset="images/logo-default-280x113.png 2x"/></a></div>
              <div class="col-12">
                <ul class="footer-minimal-nav">
                  <li><a href="index.php">Menu</a></li>
                  <li><a href="https://inovasikuteknologi.blogspot.com/">Blog</a></li>
                  <li><a href="contacts.php">Contacts</a></li>
                  <li><a href="about-us.php">About</a></li>
                </ul>
              </div>
              <div class="col-12">
                <ul class="social-list">
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-facebook" href="https://web.facebook.com/profile.php?id=100079618073645"></a></li>
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-instagram" href="https://www.instagram.com/pakeknanya_xy/"></a></li>
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-tumblr" href="https://www.tiktok.com/@radarya_gaming"></a></li>
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-youtube-play" href="https://www.youtube.com/@RadaryaGaming"></a></li>
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-pinterest-p" href="https://id.pinterest.com/aydinaryasatyaradithya/"></a></li>
                </ul>
              </div>
            </div>
            <p class="rights"><span>&copy;&nbsp; </span><span class="copyright-year"></span><span>&nbsp;</span><span>Arunika Flora</span><span>.&nbsp;</span><span>All Rights Reserved.</span><span>&nbsp;</span><a href="https://www.termsfeed.com/live/98a877d4-a418-43b4-86c3-6fe110d44d43">Privacy Policy</a>. Design&nbsp;by&nbsp;<a href="https://www.youtube.com/@RadaryaGaming">Radithya</a></p>
          </div>
        </div>
      </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>