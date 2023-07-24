<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="website sistem pakar">
    <meta name="author" content="mr k">
    <link rel="icon" href="image/icon.png">

    <title>Sistem Pakar</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
    <!-- <link href="css/style.css" rel="stylesheet"> -->

    <!-- Vendor CSS Files -->
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
</head>

<!-- <body> -->
<body style="padding-bottom: 0px!important;">
    <?php include ('navbar.php'); ?>
    
    <main class="batas-atas mt-5">
        <div class="card text-white mb-3" style="background-color:#645c8c">
          <h5 class="card-header">Solusi</h5>
          <div class="card-body text-left ukuran-20">

            <form method="post" action="solusi.php" enctype="multipart/form-data" role="form">

                <?php
                include ('koneksi.php');
                //$kode='m01';
                session_start();
                echo "<p>Nama : ".$_SESSION['nama']."</p>";
                echo "<p>Umur : ".$_SESSION['umur']."</p>";
                echo "<p>Nomor Telpon : ".$_SESSION['nomor']."</p>";
                echo "<p>Alamat : ".$_SESSION['alamat']."</p>";
                    
                    if(isset($_GET['kode'])){
                        $kode=$_GET['kode'];
                    }   
                ?>
                <hr>
                <p>Kamu merasa :</p>
                <?php
                 include "fungsi.php";
                 solusi($kode);  
                ?>
                

                <hr>
                <?php
                $sql = "SELECT * from tb_penyakit WHERE kode_solusi='$kode'";
                $data = mysqli_query($connect,$sql);
                $row = mysqli_fetch_assoc($data);

                if ($row['kode_solusi']=="x-1" || $row['isi_solusi']=="x-2" || $row['isi_solusi']=="x-3" || $row['isi_solusi']=="x-4" || $row['isi_solusi']=="x-5") {
                     echo "<center><p><strong style='color:red'>SISTEM TIDAK MENEMUKAN JAWABAN !</strong></p></center><hr>";
                     ?>

                     <!------------------------MASUKAN KEPADA SISTEM -------------------------------->
                        <div class="card bg-dark">
                             <h5 class="card-header">Pengguna menambah fakta baru</h5>
                            <div class="card-body">
                             <form action="solusi.php" method="post">
                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Pilih Penyakit :</label>
                                <select name="solusi" class="form-control" id="exampleFormControlSelect2">
                                <?php 
                                include "koneksi.php";
                                $sql = "SELECT * from tb_penyakit";
                                $data = mysqli_query($connect,$sql);
                                while ($row = mysqli_fetch_assoc($data)) {
                                   if ($row['isi_solusi']!="x-1" && $row['isi_solusi']!="x-2" && $row['isi_solusi']!="x-3" && $row['isi_solusi']!="x-4" && $row['isi_solusi']!="x-5") {
                                    echo '<option value="'.$row["isi_solusi"].'">'.$row["isi_solusi"].'</option>';
                                 }
                                }
                                ?>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlInput2">Masukan fakta:</label>
                                <input type="text" name="fakta" class="form-control" id="exampleFormControlInput1" placeholder="contoh : Terasa ngilu pada gigi">
                              </div>
                              <input type="submit" class="btn btn-info" name="masukan">
                            </form>    
                            </div> 
                        </div>  
                        <!------------------------MASUKAN KEPADA SISTEM -------------------------------->                      
                     <?php 
                }
                
                else{
                    echo "<p>Kamu mengalami penyakit gigi: <strong style='color:white'>".$row['isi_solusi']."</strong></p>";
                }
                
                ?>
                <?php
                $sql = "SELECT * from tb_penyakit WHERE kode_solusi='$kode'";
                $data = mysqli_query($connect,$sql);
                $row = mysqli_fetch_assoc($data);

                if ($row['kode_solusi']=="x-1" || $row['isi_solusi']=="x-2" || $row['isi_solusi']=="x-3" || $row['isi_solusi']=="x-4" || $row['isi_solusi']=="x-5") {
                     echo "<center><p><strong style='color:red'>SISTEM TIDAK MENEMUKAN JAWABAN !</strong></p></center><hr>";
                     ?>

                     <!------------------------MASUKAN KEPADA SISTEM -------------------------------->
                        <!------------------------MASUKAN KEPADA SISTEM -------------------------------->                      
                     <?php 
                }
                
                else{
                    echo "<p>Tindakan medis yang di harus dilakukan: <strong style='color:white'>".$row['tindakan']."</strong></p>";
                }
                
                ?>
            </form>
            <br>
            <div class="text-center">
                <a style="margin-bottom: 10px;" href="hapus-session.php" class="btn btn-outline-light col-sm-2">Akhiri</a>
            </div>
          </div>
          
        </div>
    



    </main>
    <?php include ('footer.php'); ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
     <!-- Vendor JS Files -->
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vendor/waypoints/noframework.waypoints.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>
</body>
</html>

<?php
include "koneksi.php";
if (!empty($_POST['masukan'])){
$fakta= $_POST['fakta'];
$solusi=$_POST['solusi'];
$oleh=$_SESSION['nama'];
$status="setuju";

$sql1 = "INSERT INTO tb_kesimpulan_gigi (solusi, fakta, oleh, status) VALUES ('$solusi', '$fakta', '$oleh', '$status')";
if (mysqli_query($connect,$sql1)){
    echo "<script>alert('Saran berhasil dimasukan, harus menunggu moderasi!'); window.location=('hapus-session.php');</script>";
//echo "<script type='text/javascript'>window.location.replace('pakar-mode.php');</script>";
  }
  else  echo "<script>alert('gagal');</script>";
}

?>