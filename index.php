<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="website sistem pakar">
  <meta name="author" content="mr k">
  <link rel="icon" href="image/icon.png">

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
  <?php
  include('navbar.php');
  ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Sistem Pakar Kesehatan Gigi dan Mulut</h1>
          <h2>Cek kesehatan gigimu sekarang, jangan di tunda tunda ya, klik mulai untuk memulai sistem pakar</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a class="btn-get-started scrollto mr-2" data-target="#exampleModal" data-toggle="modal" data-whatever="@getbootstrap">Mulai</a>
            <a href="#" class="btn-get-started scrollto" style="background-color: transparent;border: 1px solid">Sistem lainya</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
  <main role="main">
    <!-- Carousel -->
    
    <!-- <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="image/bg-1.gif" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Sistem Pakar Kesehatan Gigi dan Mulut</h1>
                <p></p>
                <p><button type="button" class="btn btn-lg btn-info" data-target="#exampleModal" data-toggle="modal" data-whatever="@getbootstrap">Mulai</button></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="image/bg-3.jpeg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Selamat datang di Sistem Pakar</h1>
                <p>Sistem pakar di buat untuk mengetahui penyakit gigi</p>
                <p><button type="button" class="btn btn-lg btn-info" data-target="#exampleModal" data-toggle="modal" data-whatever="@getbootstrap">Mulai</button></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="image/bg-2.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>Sistem Pakar</h1>
                <p></p>
                <p><button type="button" class="btn btn-lg btn-info" data-target="#exampleModal" data-toggle="modal" data-whatever="@getbootstrap">Mulai</button></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>  -->
    <!-- Carousel -->

    <!---------------- MODAL ----------------->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
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
                <label for="recipient-name" class="col-form-label">Nomor handphone :</label>
                <input type="text" name="nomor" class="form-control" id="input-ame" placeholder="isikan nomor telefon anda" required autofocus>
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Alamat :</label>
                <input type="text" name="alamat" class="form-control" id="input-ame" placeholder="isikan alamat anda" required autofocus>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-info" style="background-color:#6e6692";>Lanjut</button>
            </div>
          </form>
        </div>

      </div>
    </div>
    </div>

    <!-- Marketing messaging and featurettes
      ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <section id="clients" class="clients section-bg">
        <div class="container">

          <div class="row" data-aos="zoom-in">

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
            </div>

          </div>

        </div>
      </section><!-- End Cliens Section -->

      <!-- Three columns of text below the carousel -->
      <div class="d-flex justify-content-center">
        <!-- <div class="col-lg-4">
            <img class="rounded-circle" src="image/1.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Katon Gilang Bagaskara</h2>
            <p>sebagai Programer</p>
            <p>(71150009)</p>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          </div> -->
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="rounded-circle" src="image/images2.png" alt="Generic placeholder image" width="140" height="140">
          <h2>Nefriprudensia Adira</h2>
          <p>Tugas Akhir Jurusan Informatika</p>
          <p>(71150055)</p>
          <p>Tugas akhir diajukan guna menyelesaikan program studi sarjana</p>
        </div>
        <!-- /.col-lg-4 -->
        <!-- <div class="col-lg-4">
            <img class="rounded-circle" src="image/3.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Debora Syebat Nazir</h2>
            <p>sebagai Project Manager</p>
            <p>(71150088)</p>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          </div> -->
        <!-- /.col-lg-4 -->
      </div><!-- /.row -->
  </main>

  <!-- ======= Footer ======= -->
  <footer class="text-center text-lg-start text-white" style="background-color: #514170" id="footer">

    <div class="footer-newsletter pb-4 pt-3">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Sistem Pakar Kesehatan Gigi</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix pb-3">
      <div class="copyright">
        &copy; Copyright <strong><span>Nefriprudensia Adira</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
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
  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>

</html>