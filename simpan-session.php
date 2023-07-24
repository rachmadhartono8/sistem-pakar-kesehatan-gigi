<?php
include ("koneksi.php");
$user = $_POST['nama'];
$umur = $_POST['umur'];
$nomor = $_POST['nomor'];
$alamat = $_POST['alamat'];
    session_start(); 
    $_SESSION['nama'] = $user;//nyimpen session nama
    $_SESSION['umur'] = $umur; //nyimpen session umur
    $_SESSION['nomor'] = $nomor;
    $_SESSION['alamat'] = $alamat;
    header('location:question.php');

?>