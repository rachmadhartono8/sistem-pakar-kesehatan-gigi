<?php
  include("koneksi.php");

  $query = "UPDATE tb_kesimpulan_gigi set status='setuju' where kode_kesimpulan=".$_GET['id']; //diterima bos !
  if (mysqli_query($connect,$query)){
    header("location:pakar-masukan.php");
  }


 ?>