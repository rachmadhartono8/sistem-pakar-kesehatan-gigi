<?php
  include("koneksi.php");

  $query = "DELETE FROM tb_kesimpulan_gigi_new where kode_kesimpulan=" . $_GET['id'];
  if (mysqli_query($connect,$query)){
    header("location:pakar-masukan.php");
  }
 ?>
