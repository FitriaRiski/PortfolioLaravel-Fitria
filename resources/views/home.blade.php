<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Fitria Riski</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/Desain tanpa judul.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MyResume
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
        <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
        <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a>
        </li>
        <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Blog</span></a></li>
        <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1 style="color: rgb(5, 5, 100);">Fitria Riski</h1>
      <p>Saya adalah <span class="typed"
          data-typed-items="mahasiswa, UI/UX designer, sistem analis, web developer"></span></p>
      <div class="social-links">
        <a href="https://www.facebook.com/profile.php?id=61557295533198&mibextid=ZbWKwL" class="facebook"><i
            class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/fitria_riski19?igsh=MXIxcDFmOHNhemZxag==" class="instagram"><i
            class="bx bxl-instagram"></i></a>
        <a href="https://www.linkedin.com/in/fitria-riski-806580300/" class="linkedin"><i
            class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2><em>About</em></h2>
          <p>Saya adalah mahasiswa Prodi S1 Informatika Institut Teknologi, Sains, dan Kesehatan RS. DR. Soepraoen
            Kesdam V/BRW</p>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <img src="{{ asset('assets/img/pipitformal - Copy.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3>UI/UX Designer, system analyst &amp; Web Developer.</h3>
            <p class="fst-italic">
              Saya memiliki ketertarikan dalam prototyping membuat design UI/UX dengan penguatan pemahaman awal desain
              grafis, kemampuan analisis pembuatan aplikasi dan melakukan pemrograman web sederhana namun tetap
              responsif.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Tanggal Lahir:</strong> <span>19 May 2004</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>No. Handphone:</strong> <span>0895410511434</span>
                  </li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Alamat:</strong> <span>Jawa Timur, Indonesia</span>
                  </li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>fitriariski1945@gmail.com</span>
                  </li>
                  </li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
                    <span>https://fitriariski19.wordpress.com</span>

                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Usia:</strong> <span>19</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Pemula</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Hobi:</strong> <span>Menggambar dan membuat
                      icon</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2><em>Fact</em></h2>
          <p>Setelah masa pelatihan dan pembuatan proyek sebagai ajang peningkatan kemampuan, berikut hasil jumlah
            pelanggan, kepuasan pengguna, jumlah projek dan jam dukungan yang telah tercapai.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Jumlah Pelanggan</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Kepuasan Pelanggan</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Jumlah Projek</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Jam Dukungan</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2><em>Skill</em></h2>
          <p>Dalam meningkatkan value diperlukan beberapa kemampuan pendukung. Berikut kemampuan yang dapat saya
            tawarkan.</p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">HTML <i class="val">50%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">30%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">25%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">Networking<i class="val">30%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">WordPress<i class="val">87%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Photoshop<i class="val">50%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6">
            <h3 class="resume-title"><em>Riwayat Hidup</em></h3>
            <div class="resume-item pb-0">
              <h4><em>Fitria Riski</em></h4>
              <p><em>Desainer UI/UX dan desain grafis yang sederhana namun tetap responsif dengan orientasi tenggat
                  waktu untuk perancangan dan pengembangan, dengan pengguna sebagai pusat mulai dari konsep awal hingga
                  hasil akhir yang diinginkan.</em></p>
              <ul>
                <li>Jl Urip Sumoharjo, Malang, Jawa Timur, Indonesia</li>
                <li>(+62)895410511434</li>
                <li>fitriariski1945@gmail.com</li>
              </ul>
            </div>

            <h3 class="resume-title">Pendidikan</h3>
            <div class="resume-item">
              <h4><em>Institut Teknologi, Sains, dan Kesehatan RS.DR. Soepraoen Kesdam V/BRW</emem>
              </h4>
              <h5>2022 - sekarang</h5>
              <p><em>Informatika <br> <br> Mempelajari mengenai software, hardware dan brainware. bagaimara cara
                  merancang, membuat dan mengambangkan software, mempelajari komponen dalam hardware dan
                  bagaimana hardware bekerja sesuai jenisnya, mempelajari mengenai bagaimana kegiatan yang dapat
                  dilakukan brainware sesuai dengan posisi, mempelajari mengenai pengembangan dibidang
                  informatika seperti AI, VR, Web, dll.</p>
            </div>
            <div>
              <div class="resume-item">
                <h4>SMA 4 Malang</h4>
                <h5>2019 - 2022</h5>
                <p><em>MIPA (Matematika, Ilmu Pengetahuan Alam)</em></p>
                <p>Mempelajari mata pelajaran biologi, kimia, fisika, matematika dan pelajaran umum. Fisika dan
                  matematika menjadi mata pelajaran dasar pendukung yang memiliki beberapa materi terkait pemilihan
                  jurusan informatika.</p>
              </div>
            </div>

            <h3 class="resume-title">Pengalaman Kerja</h3>
            <div class="resume-item">
              <h4>Fitria Riski</h4>
              <p><em>Desainer UI/UX, sistem analisis dan web developer.</em></p>
              <ul>
                <li>Membuat desain untuk prototype mobile</li>
                <li>Membuat analisis sistem untuk pembuatan web</li>
                <li>Membuat web sederhana</li>
              </ul>
            </div>
          </div>
        </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Berikut beberapa hasil produk yang telah dihasilkan.</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Web</li>
              <li data-filter=".filter-card">prototype</li>
              <li data-filter=".filter-web">Animasi</li>
              <li data-filter=".filter-networking">Networking</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/web.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 1</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/web.png" data-gallery="portfolioGallery" class="portfolio-lightbox"
                    title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="{{ url('/portweb') }}" class="portfolio-details-lightbox" data-glightbox="type: external"
                    title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/proto1.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>prototype1</h4>
                <p>Prototype</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/proto1.png" data-gallery="portfolioGallery" class="portfolio-lightbox"
                    title="Prototype 1"><i class="bx bx-plus"></i></a>
                  <a href="{{ url('/portproto') }}" class="portfolio-details-lightbox" data-glightbox="type: external"
                    title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/vr1.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Animasi 1</h4>
                <p>Animasi</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/vr1.png" data-gallery="portfolioGallery" class="portfolio-lightbox"
                    title="Animasi 1"><i class="bx bx-plus"></i></a>
                  <a href="{{ url('/pfanimasi') }}" class="portfolio-details-lightbox" data-glightbox="type: external"
                    title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/vr2.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Animasi 2</h4>
                <p>Animasi</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/vr2.png" data-gallery="portfolioGallery" class="portfolio-lightbox"
                    title="Animasi 2"><i class="bx bx-plus"></i></a>
                  <a href="{{ url('/pfanimasi') }}" class="portfolio-details-lightbox" data-glightbox="type: external"
                    title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-networking">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Jarkom1.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Networking 1</h4>
                <p>Networking</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/Jarkom1.png" data-gallery="portfolioGallery" class="portfolio-lightbox"
                    title="Networking 1"><i class="bx bx-plus"></i></a>
                  <a href="{{ url('/portjar') }}" class="portfolio-details-lightbox" data-glightbox="type: external"
                    title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-networking">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Jarkom2.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Networking 2</h4>
                <p>Networking</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/Jarkom2.png" data-gallery="portfolioGallery" class="portfolio-lightbox"
                    title="Networking 2"><i class="bx bx-plus"></i></a>
                  <a href="{{ url('/portjar') }}" class="portfolio-details-lightbox" data-glightbox="type: external"
                    title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
  </section><!-- End Services Section>-->

    <form id="blog-form">
    </form>

    <!-- List of blog posts -->
    <ul class="blog-list"></ul>
    </div>

    <!-- End try blog Sectionnnnnnnnnnnnn..................................
    .......................................................................-->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">
        <div id="blog">
          <div class="section-title">
            <h2>Blog Tersimpan</h2>
          </div>

          <!-- Tambahkan input pencarian di sini -->
          <!-- <input type="text" id="searchInput" placeholder="Cari postingan..."> -->

          <div id="posts">
            <!-- Postingan blog akan ditampilkan di sini -->
          </div>
          <br>
          <div class="section-title">
            <h2>Menambahkan Blog</h2>
          </div>
          <form id="newPostForm">
            <label for="title">Judul:</label>
            <input type="text" id="title" name="title" required><br>

            <label for="content">Konten:</label>
            <textarea id="content" name="content" required></textarea><br>

            <button type="submit">Tambah</button>
          </form>
        </div>

    </section>
    <!-- End try blog Sectionnnnnnnnnnnnn -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimoni</h2>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/kikifiks.jpg" class="testimonial-img" alt="">
                <h3>Riski</h3>
                <h4>Designer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Desain web cukup sederhana, masih belum memiliki karakteristik spesial.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testi 3.jpg" class="testimonial-img" alt="">
                <h3>Adhul</h3>
                <h4>Pemilik Toko</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Analisis untuk pembuatan fitur di prototype sudah sesuai dengan kegiatan jual-beli di toko saya.
                  Meskipun pada prototype tidak dibuat adanya gambaran fitur tambahahan. Namun overall sudah cukup
                  memadai.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/mude.jpg" class="testimonial-img" alt="">
                <h3>Mude Edita</h3>
                <h4>Freelancer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Sangat mudah untuk dihubungi dan bekerjasama. Dengan pengembangan fitur dasar yang kemudian
                  dikembangkan sesuai dengan request dari customer. Terimakasih dengan analisis dan design prototype
                  anda sehingga saya tidak harus melakukan revisi terlalu banyak.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testi 4.jpg" class="testimonial-img" alt="">
                <h3>Indah</h3>
                <h4>Pebisnis</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Desain web masih terlalu sederhana, namun fitur sudah cukup untuk pengenalan dan penjualan produk
                  ditingkat saat ini, terimakasih.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row mt-1">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Lokasi:</h4>
                <p>Jl. Urip Sumoharjo, Malang, Jawa Timur, Indonesia</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>fitriariski1945@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>No. Handphone:</h4>
                <p>(+62)895410511434</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <!-- <div class="error-message"></div> -->
                <div class="sent-message">Pesan mu sudah terkirim. Terima kasih!</div>
              </div>
              <div class="text-center"><button type="submit">Kirim Pesan</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Fitria Riski</h3>
      <p>Terimakasih sudah mengunjungi web kami, semoga bermanfaat.</p>
      <div class="social-links">
        <!--<a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>-->
        <a href="https://www.facebook.com/profile.php?id=61557295533198&mibextid=ZbWKwL" class="facebook"><i
            class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/fitria_riski19?igsh=MXIxcDFmOHNhemZxag==" class="instagram"><i
            class="bx bxl-instagram"></i></a>
        <!--<a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>-->
        <a href="https://www.linkedin.com/in/fitria-riski-806580300/" class="linkedin"><i
            class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>MyResume</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: [license-url] -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/typed.js/typed.umd.js') }}"></script>
  <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>