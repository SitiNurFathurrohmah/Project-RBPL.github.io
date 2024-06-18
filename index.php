<?php
  include 'koneksi.php';

  $latihan = $connection->query("SELECT * FROM latihan");
  $Pertandingan = $connection->query("SELECT * FROM Pertandingan");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Website karate-do gojukai</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/icon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+62 8983675458</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Senin - Sabtu: 9AM - 21PM</span></i>
      </div>

      <div class="languages d-none d-md-flex align-items-center">
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">Karate-Do Gojukai DIY</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#menu">Jadwal</a></li>
          <li><a class="nav-link scrollto" href="#events">Events</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">Daftar</a>
      <a href="login.php" class="book-a-table-btn scrollto d-none d-lg-flex">admin</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <span>Karate-Do Gojukai</span></h1>
          <h2>Berdiri Sejak Tahun 1973</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Jadwal</a>
            <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Daftar</a>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://youtu.be/U01yupGORO0?si=AgTEVgllv5wSvP5j" class="glightbox play-btn"></a>
        </div>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </div>
      
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="assets/img/logo_karate.png" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Sejarah Singkat Berdirinya Karete-Do Gojukai DIY</h3>
            <p class="fst-italic">
              Karatedo Gojukai Komda DIY di wilayah Provinsi DIY  merupakan salah satu aliran cabang olah 
              raga beladiri Karate  yang dibentuk dan didirikan oleh Sensei Djito. AR (DAN IV) pada tahun 1973 
              dengan nama GOKASI (Gojuryu Karate-Do Shinbukan Indonesia). Sensei Djito. AR murid dari Sensei Budhi 
              Dharma saat itu masih bernama JAD (Judo Ass Djakarta) dan pada tahun 1966 bergabung dengan Sensei 
              KUNIHIRO ISHI dengan nama JKAD gabungan antara JAD dan Karate, dojo pertama kali berdiri adalah dojo 
              Soboharsono Yogyakarta yang di bantu oleh Senpai Noer Said dan Senpai Chandra, sebagai asisten pelatih 
              Senpai Frans Budi Setyawan dan Senpai Edi Gunawan.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Visi,Misi & Tujuan</h2>
          <p>Karate-Do Gojukai</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span>01</span>
              <h4>VISI</h4>
              <p>Melahirkan generasi karateka yang berprestasi, berakhlak dan beradab.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <span>02</span>
              <h4>MISI</h4>
              <p>Menciptakan karateka yang dapat berprestasi di daerah, nasional dan internasional.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span>03</span>
              <h4> TUJUAN</h4>
              <p>Mendidik karateka menjadi jujur, disiplin, sportif, bertanggjung jawab, berani, loyal, sopan dan santun, serta rendah hati.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Karate-Do Gojukai</h2>
          <p>Cek Jadwalmu Disini!</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-starters">Latihan</li>
              <li data-filter=".filter-salads">Event</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/pandopo.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#"><?php $row = $latihan->fetch_assoc(); ?>
                <?php echo $row['hari']; ?></a><span><?php echo $row['jam']; ?></span>
            </div>
            <div class="menu-ingredients">
                <?php echo $row['tempat']; ?>
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/gor.jpg" class="menu-img" alt="">
            <div class="menu-content">
            <a href="#"><?php $row = $latihan->fetch_assoc(); ?>
              <?php echo $row['hari']; ?></a><span><?php echo $row['jam'];?></span>
            </div>
            <div class="menu-ingredients">
                <?php echo $row['tempat']; ?>
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/gor.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#"><?php $row = $latihan->fetch_assoc(); ?>
              <?php echo $row['hari']; ?></a><span><?php echo $row['jam'];?></span>
            </div>
            <div class="menu-ingredients">
                <?php echo $row['tempat']; ?>
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/event1.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#"><?php $row = $Pertandingan->fetch_assoc(); ?>
              <?php echo $row['Nama']; ?></a><span><?php echo $row['Tanggal']; ?></span>
            </div>
            <div class="menu-ingredients">
            <?php echo $row['Tempat']; ?>
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/event2.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#"><?php $row = $Pertandingan->fetch_assoc(); ?>
              <?php echo $row['Nama']; ?></a><span><?php echo $row['Tanggal']; ?></span>
            </div>
            <div class="menu-ingredients">
                <?php echo $row['Tempat']; ?>
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/event3.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#"><?php $row = $Pertandingan->fetch_assoc(); ?>
              <?php echo $row['Nama']; ?></a><span><?php echo $row['Tanggal']; ?></span>
            </div>
            <div class="menu-ingredients">
                <?php echo $row['Tempat']; ?>
            </div>
          </div>

          </div>

        </div>

      </div>
    </section><!-- End Menu Section -->


    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Events</h2>
          <p>Prestasi Siswa Karate-Do Gojukai</p>
        </div>

        <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/kejuaraan1.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Kabar Prestasi Gojukai</h3>
                  <div class="price">
                  </div>
                  <p class="fst-italic">
                    Onegaishimasu! <br>
                    O2SN SMA KAB BANTUL 2024 <br>
                    Selamat kepada Atlet - Atlet kebanggaan Gojukai Cab. Bantul !!!
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circled"></i> 1. Adin Muliyani Juara 1 Karate Putri</li>
                    <li><i class="bi bi-check-circled"></i> 2. Kamalia Zulfa Juara 3 Karate Putri</li>
                    <li><i class="bi bi-check-circled"></i> Selamat kepada Adin Muliyani melaju ke tingkat Provinsi!!
                      Selamat kepada sang juara tetap berlatih dan semangat!!</li>
                  </ul>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/kejuaraan4.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Kabar Prestasi Gojukai Cab. Bantul</h3>
                  <div class="price">
                  </div>
                  <p class="fst-italic">Onegaishimasu! <br>
                    O2SN SD KAB. BANTUL 2024 <br>
                    Selamat kepada Atlet - Atlet kebanggaan Gojukai Cab Bantul
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circled"></i> 1. Chatalea Dena Juara 1 Karate putri</li>
                    <li><i class="bi bi-check-circled"></i> 2. Farellyn Juara 2 Karate Putra</li>
                    <li><i class="bi bi-check-circled"></i> Selamat kepada Chatalea Dena melaju ke tingkat Provinsi
                      Tetap semangat, Jaga sportifitas, tetap berlatih ! </li>
                  </ul>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/kejuaraan3.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3> POPCAB BANTUL 2024</h3>
                  <div class="price">
                  </div>
                  <p class="fst-italic">
                    Onegaishimasu..
                    Selamat Atas hasil yang mambanggakan Dengan Hasil :
                    
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circled"></i> 1. Adin Mulyani Juara 1 Kata Putri </li>
                    <li><i class="bi bi-check-circled"></i> 2. Angger Raditya Juara 1 Kata Putra </li>
                    <li><i class="bi bi-check-circled"></i> 3.Kamalia Zulfa Juara 2 Kata Putri</li>
                    <li><i class="bi bi-check-circled"></i> 4. Faishal Khalis Juara 2 Kata Putra/li>
                    <li><i class="bi bi-check-circled"></i> 5. Faishal Khalis Juara 3 Kumite Putra + 61 kg</li>
                    <li><i class="bi bi-check-circled"></i> Puji Syukur Untuk Kategori Kata Baik Putri Maupun Putra GOJUKAI mendominasi perolehan mendali...
                       Selamat semuanya, Tambah giat berlatih dan tidak cepat puas! </li>
                  
                  </ul>
                  
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->

    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pendaftaran Siswa Karate-Do Gojukai</h2>
          <p>Daftar</p>
        </div>

        <form id="request" form action="book-a-table.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="Nama" class="form-control" id="name" placeholder="Nama" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="Email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="Telepon" id="phone" placeholder="Telepon" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" name="Tgl_lahir" class="form-control" id="date" placeholder="Tanggal Lahir" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" class="form-control" name="Umur" id="time" placeholder="Umur" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" class="form-control" name="Alamat" id="people" placeholder="Alamat" data-rule="minlen:1" data-msg="Please enter your address">
              <div class="validate"></div>
            </div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Data pendaftar sudah terkirim. Kami akan mengirim verifikasi lewat Email. Terima Kasih!</div>
          </div>
          <div class="text-center"><button type="submit">Daftar</button></div>
        </form>

      </div>
    </section><!-- End Book A Table Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Gallery</h2>
          <p>Beberapa Foto Karate-Do Gojukai DIY</p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/galeri1.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/galeri1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/galeri2.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/galeri2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/galeri3.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/galeri3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/galeri4.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/galeri4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/galeri5.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/galeri5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/galeri6.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/galeri6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/galeri7.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/galeri7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-8.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/galeri8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>
      </div>

      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d19516.239034032835!2d110.36366780047473!3d-7.90908321882555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s!5e0!3m2!1sid!2sid!4v1716129843763!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Jl. Bakulan-Imogiri, Pulokadang RT02, Canden, Jetis, Bantul</p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Open Hours:</h4>
                <p>
                  Senin - Sabtu :<br>
                  09:00 AM - 21.00 PM
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>Sarjana14@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+62 8983675458</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form id="request" form action="contact.php" method="post"  class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="Nama" class="form-control" id="name" placeholder="Nama" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="Email" id="email" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="Subjek" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="Pesan" rows="8" placeholder="Pesan" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->


    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Karate-Do Gojukai</span></strong>
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">Sifa & Yayank</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>