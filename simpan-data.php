<?php
session_start();

// Membuat koneksi ke database (sesuaikan dengan pengaturan database Anda)
$servername = "localhost";
$username = "root";
$password = "";
$database = "sistem-pakar-kesehatan-gigi";

$conn = mysqli_connect($servername, $username, $password, $database);

// Check koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
// Menyimpan data musim ke dalam database (asumsikan data musim tersimpan di $_SESSION['nama'], $_SESSION['umur'], dst.)
if (isset($_SESSION['nama']) && isset($_SESSION['umur']) && isset($_SESSION['nomor']) && isset($_SESSION['alamat'])) {
    $nama = $_SESSION['nama'];
    $umur = $_SESSION['umur'];
    $nomor = $_SESSION['nomor'];
    $alamat = $_SESSION['alamat'];

    $sql_insert = "INSERT INTO tb_simpan_data (nama, umur, nomor, alamat) VALUES ('$nama', '$umur', '$nomor', '$alamat')";

    if (mysqli_query($conn, $sql_insert)) {
        echo "Data musim berhasil disimpan ke dalam database.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);

header('location:index.php'); //direct ke index.php
?>
?>