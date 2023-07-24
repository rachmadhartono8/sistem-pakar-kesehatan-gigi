 <?php
session_start();
unset($_SESSION['nama']);
unset($_SESSION['umur']);
unset($_SESSION['nomor']);
unset($_SESSION['alamat']); //matiin session username nya penulis
header('location:index.php'); //direct ke index.php
?>