<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="website sistem pakar">
  <meta name="author" content="mr k">
  <link rel="icon" href="image/icon2.png">
  <title>Sistem Pakar Kesehatan Gigi</title>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" crossorigin="anonymous">
  <!-- Vendor CSS Files -->
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/carousel.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<body style="padding-bottom: 0px!important;">
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" style="background-color: #eeeee4;">
    <div class="container d-flex align-items-center">
      <a href="index.php" class="logo me-auto"><img src="image/icon2.png" alt="" class="img-fluid" style="height:80px"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <!-- <li><a class="nav-link scrollto active text-black" href="index.php">Home</a></li> -->
          <li><a class="nav-link scrollto text-black" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto text-black" href="about.php">About</a></li>
          <li><a class="nav-link scrollto text-black" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto text-black" href="loginpakar.php">Login Sistem Pakar</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Sistem Pakar Kesehatan Gigi dan Mulut</h1>
          <h2>Cek kesehatan gigimu sekarang, jangan di tunda tunda ya, klik mulai untuk memulai sistem pakar amany dental</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a class="btn-get-started scrollto mr-2" data-target="#exampleModal" data-toggle="modal" data-whatever="@getbootstrap" style="cursor: pointer;">Mulai Sistem</a>
            <a href="about.php" class="btn-get-started scrollto" style="background-color: transparent;border: 1px solid">About us</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="image/Amany dental 2.JPG" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
  <main role="main">
   
    <!---------------- MODAL ----------------->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Identitas User/Pasien</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="simpan-session.php" method="post" enctype="multipart/form-data" role="form">
            <div class="modal-body">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Nama :</label>
                <input type="text" name="nama" class="form-control" id="input-ame" placeholder="isikan nama anda" required autofocus>
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Umur :</label>
                <input type="number" name="umur" class="form-control col-sm-8" placeholder="isikan umur anda" required>
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Nomor Handphone :</label>
                <input type="text" name="nomor" class="form-control" id="input-ame" placeholder="isikan nomor telefon anda" required autofocus>
              </div>
              <div class="form-group modal-md">
                <label for="recipient-name" class="col-form-label">Alamat :</label>
                <input type="text" name="alamat" class="form-control" id="input-ame" placeholder="isikan alamat anda" required autofocus>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary" style="background-color:#6e6692";>Lanjut</button>
            </div>
          </form>
        </div>

      </div>
    </div>
    </div>

      <!-- ======= About Us Section ======= -->
      <section id="abouthome" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
            Amani Dental, Visi:
            "Menjadi Klinik Gigi Terbaik dalam Pelayanan serta Meniadi Solusi Kesehatan Gigi dan Mulut Pilihan Utama Masyarakat.".
            </p>
            <p>
            Misi :
            <ul>
              <li><i class="ri-check-double-line"></i>  1. Mengedukasi Masyarakat untuk Senantiasa menjaga kesehatan gigi dan mulutnya. </li>
              <li><i class="ri-check-double-line"></i>  2. Menyediakan Dokter Gigi yang profesional, alat dan bahan modern yang berkualitas, fasilitas yang nyaman dengan harga yang terjangkau.</li>
              <!-- <li><i class="ri-check-double-line"></i> Pelayanan cepat dan ramah</li> -->
            </ul>
            </p>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <ul>
              <li><i class="ri-check-double-line"></i> Pelayanan cepat dan ramah</li>
              <li><i class="ri-check-double-line"></i> Profesional dalam melayani masalah kesehatan gigi</li>
              <li><i class="ri-check-double-line"></i> Pelayanan cepat dan ramah</li>
            </ul>
          </div>
        </div>

      </div>
    </section>
    <!-- End About Us Section -->

     <!-- ======= Why Us Section ======= -->
     <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
            <div class="content">
              <h3>Sakit gigi tak tertahankan <strong>Apa yang harus aku lakukan ?</strong></h3>
              <p>
                Apakah yang harus saya lakukan ketika sakit gigi yang tak tertahankan
              </p>
            </div>
            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Bolehkah saya meminum obat ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Obat jenis apakah yang cocok untuk sakit gigi ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Apakah boleh gigi boleh dicabut saat sakit gigi ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>
          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("image/sakitgigi.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

      <!-- ======= Skills Section ======= -->
      <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="image/drg.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>Dokter Gigi Alyssa Amany</h3>
            <p class="fst-italic">
              Dokter Gigi Umum alumnus Universitas Prof. Dr. Moestopo (Beragama).
            </p>

            <div class="skills-content">

              <div class="progress">
                <span class="skill">Scaling <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">PSA (Perawatan Saluran Akar) <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Perawatan Orthodonti <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Implan Gigi <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Perawatan Gigi <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Cabut gigi <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Skills Section -->

     <!-- ======= Contact Section ======= -->
     <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Klinik Gigi Profesional pilihan keluarga.</p>
        </div>
        <div class="row">
        <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-right" data-aos-delay="100">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Alamat:</h4>
                <p>Jl. Flamboyan, Beji Tim., Kecamatan Beji, Kota Depok, Jawa Barat 16422</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>iamanydentalclinic@gmail.com</p>
              </div>

              <div class="socialmedia">
                <i class="bx bxl-instagram"></i>
                <h4>Instagram :</h4>
                <p>@amanydentalclinic_</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telepon:</h4>
                <p>+62 878-8496-1410</p>
              </div>
            </div>
          </div>
        <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15860.37294174822!2d106.8238917!3d-6.3819662!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69eb5f5d486971%3A0xed511f5b16abe504!2sAmany%20Dental%20Clinic!5e0!3m2!1sid!2sid!4v1690195701727!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
  </main>

  <!-- ======= Footer ======= -->
  <footer class="text-center text-lg-start text-white" style="background-color: #514170" id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix pb-3">
      <div class="copyright">
        &copy; Copyright <strong><span>Nefriprudensia Adira</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://nefri.com/">Nefriprudensia Adira</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <!-- Vendor JS Files -->
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vendor/waypoints/noframework.waypoints.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>
  <!-- Template Main JS File -->
  <script src="js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>

</body>
</html>