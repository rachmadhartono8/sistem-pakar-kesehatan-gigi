-- MariaDB dump 10.19  Distrib 10.4.27-MariaDB, for osx10.10 (x86_64)
--
-- Host: localhost    Database: sistem-pakar-kesehatan-gigi
-- ------------------------------------------------------
-- Server version	10.4.27-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tb_admin`
--

DROP TABLE IF EXISTS `tb_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_admin`
--

LOCK TABLES `tb_admin` WRITE;
/*!40000 ALTER TABLE `tb_admin` DISABLE KEYS */;
INSERT INTO `tb_admin` VALUES ('admin','21232f297a57a5a743894a0e4a801fc3'),('admin','admin');
/*!40000 ALTER TABLE `tb_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_gejala`
--

DROP TABLE IF EXISTS `tb_gejala`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_gejala` (
  `kode_gejala` varchar(50) NOT NULL,
  `gejala` varchar(100) NOT NULL,
  PRIMARY KEY (`kode_gejala`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_gejala`
--

LOCK TABLES `tb_gejala` WRITE;
/*!40000 ALTER TABLE `tb_gejala` DISABLE KEYS */;
INSERT INTO `tb_gejala` VALUES ('G01','Gusi merah'),('G02','Gusi berdarah'),('G03','Gigi goyang'),('G04','Luka pada mulut'),('G05','Bau mulut'),('G06','Gusi bengkak'),('G07','Demam'),('G08','Sakit gigi'),('G09','Gusi bernanah'),('G10','Bibir kering'),('G11','Gigi senstiv'),('G12','Karang gigi'),('G13','Kesulitan membuka mulut'),('G14','Sulit mengunyah'),('G15','Rahang terlihat bengkak'),('G16','Gigi berlubang');
/*!40000 ALTER TABLE `tb_gejala` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_kesimpulan`
--

DROP TABLE IF EXISTS `tb_kesimpulan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_kesimpulan` (
  `kode_kesimpulan` int(11) NOT NULL AUTO_INCREMENT,
  `solusi` varchar(50) NOT NULL,
  `fakta` varchar(100) NOT NULL,
  `oleh` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`kode_kesimpulan`)
) ENGINE=InnoDB AUTO_INCREMENT=152 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_kesimpulan`
--

LOCK TABLES `tb_kesimpulan` WRITE;
/*!40000 ALTER TABLE `tb_kesimpulan` DISABLE KEYS */;
INSERT INTO `tb_kesimpulan` VALUES (1,'Informatika','Sekolah asal adalah SMA','pakar','setuju'),(2,'Informatika','Jurusan adalah IPA','pakar','setuju'),(3,'Informatika','Tertarik masuk teknik','pakar','setuju'),(4,'Informatika','Rata-rata nilai matematika, bahasa inggris, kimia, fisika, biologi  kelas 10 dan kelas 11 >= 75','pakar','setuju'),(5,'Informatika','Tertarik dengan   bidang komputer','pakar','setuju'),(6,'Informatika','Ingin mempelajari komputasi yang lebih dalam','pakar','setuju'),(7,'Sistem Informasi','Sekolah asal adalah SMA','pakar','setuju'),(8,'Sistem Informasi','Jurusan adalah IPA','pakar','setuju'),(9,'Sistem Informasi','Tertarik masuk teknik','pakar','setuju'),(10,'Sistem Informasi','Rata-rata nilai matematika, bahasa inggris, kimia, fisika, biologi  kelas 10 dan kelas 11 >= 75','pakar','setuju'),(11,'Sistem Informasi','Tertarik dengan   bidang komputer','pakar','setuju'),(12,'Sistem Informasi','Tidak tertarik  mempelajari komputasi yang lebih dalam','pakar','setuju'),(13,'Arsitektur','Sekolah asal adalah SMA','pakar','setuju'),(14,'Arsitektur','Jurusan adalah IPA','pakar','setuju'),(15,'Arsitektur','Tertarik masuk teknik','pakar','setuju'),(16,'Arsitektur','Rata-rata nilai matematika, bahasa inggris, kimia, fisika, biologi  kelas 10 dan kelas 11 >= 75','pakar','setuju'),(17,'Arsitektur','Tidak tertarik dengan   bidang komputer','pakar','setuju'),(18,'Arsitektur','Tertarik dengan konstruksi bangunan','pakar','setuju'),(19,'Desain Produk','Sekolah asal adalah SMA','pakar','setuju'),(20,'Desain Produk','Jurusan adalah IPA','pakar','setuju'),(21,'Desain Produk','Tertarik masuk teknik','pakar','setuju'),(22,'Desain Produk','Rata-rata nilai matematika, bahasa inggris, kimia, fisika, biologi  kelas 10 dan kelas 11 >= 75','pakar','setuju'),(23,'Desain Produk','Tidak tertarik dengan   bidang komputer','pakar','setuju'),(24,'Desain Produk','Tidak tertarik dengan konstruksi bangunan','pakar','setuju'),(25,'Akuntansi','Sekolah asal adalah SMA','pakar','setuju'),(26,'Akuntansi','Jurusan adalah IPA','pakar','setuju'),(27,'Akuntansi','Tidak tertarik masuk teknik','pakar','setuju'),(28,'Akuntansi','Tertarik dengan ilmu bisnis','pakar','setuju'),(29,'Akuntansi','Senang belajar tentang pembukuan keuangan','pakar','setuju'),(30,'Manajemen','Sekolah asal adalah SMA','pakar','setuju'),(31,'Manajemen','Jurusan adalah IPA','pakar','setuju'),(32,'Manajemen','Tidak tertarik masuk teknik','pakar','setuju'),(33,'Manajemen','Tertarik dengan ilmu bisnis','pakar','setuju'),(34,'Manajemen','Tidak senang belajar tentang pembukuan keuangan','pakar','setuju'),(35,'Kedokteran','Sekolah asal adalah SMA','pakar','setuju'),(36,'Kedokteran','Jurusan adalah IPA','pakar','setuju'),(37,'Kedokteran','Tidak tertarik masuk teknik','pakar','setuju'),(38,'Kedokteran','Tidak tertarik dengan ilmu bisnis','pakar','setuju'),(39,'Kedokteran','Tertarik dengan ilmu biologi','pakar','setuju'),(40,'Kedokteran','Ingin belajar tentang kesehatan dan penyembuhan\r\n','pakar','setuju'),(41,'Bioteknologi','Sekolah asal adalah SMA','pakar','setuju'),(42,'Bioteknologi','Jurusan adalah IPA','pakar','setuju'),(43,'Bioteknologi','Tidak tertarik masuk teknik','pakar','setuju'),(44,'Bioteknologi','Tidak tertarik dengan ilmu bisnis','pakar','setuju'),(45,'Bioteknologi','Tertarik dengan ilmu biologi\r\n','pakar','setuju'),(46,'Bioteknologi','Tidak ingin belajar tentang kesehatan secara spesifik dan penyembuhan','pakar','setuju'),(47,'Teologi','Sekolah asal adalah SMA','pakar','setuju'),(48,'Teologi','Jurusan adalah IPA','pakar','setuju'),(49,'Teologi','Tidak tertarik masuk teknik','pakar','setuju'),(50,'Teologi','Tidak tertarik dengan ilmu bisnis','pakar','setuju'),(51,'Teologi','Tidak tertarik dengan ilmu biologi ','pakar','setuju'),(52,'Teologi','Ingin mendalami tentang agama Kristen','pakar','setuju'),(53,'Pendidikan Bahasa Inggris','Sekolah asal adalah SMA','pakar','setuju'),(54,'Pendidikan Bahasa Inggris','Jurusan adalah IPA','pakar','setuju'),(55,'Pendidikan Bahasa Inggris','Tidak tertarik masuk teknik','pakar','setuju'),(56,'Pendidikan Bahasa Inggris','Tidak tertarik dengan ilmu bisnis','pakar','setuju'),(57,'Pendidikan Bahasa Inggris','Tidak tertarik dengan ilmu biologi ','pakar','setuju'),(58,'Pendidikan Bahasa Inggris','Tidak ingin mendalami tentang agama Kristen','pakar','setuju'),(59,'Pendidikan Bahasa Inggris','Tertarik belajar bahasa Inggris','pakar','setuju'),(60,'Informatika (non IPA)','Sekolah asal adalah SMA','pakar','setuju'),(61,'Informatika (non IPA)','Bukan jurusan IPA','pakar','setuju'),(62,'Informatika (non IPA)','Tertarik masuk teknik','pakar','setuju'),(63,'Informatika (non IPA)','Rata-rata nilai matematika, bahasa inggris kelas 10 dan kelas 11 >= 75','pakar','setuju'),(64,'Informatika (non IPA)','Tertarik dengan bidang komputer','pakar','setuju'),(65,'Informatika (non IPA)','Ingin mempelajari komputasi yang lebih dalam','pakar','setuju'),(66,'Sistem Informasi (non IPA)','Sekolah asal adalah SMA','pakar','setuju'),(67,'Sistem Informasi (non IPA)','Bukan jurusan IPA','pakar','setuju'),(68,'Sistem Informasi (non IPA)','Tertarik masuk teknik','pakar','setuju'),(69,'Sistem Informasi (non IPA)','Rata-rata nilai matematika, bahasa inggris kelas 10 dan kelas 11 >= 75','pakar','setuju'),(70,'Sistem Informasi (non IPA)','Tertarik dengan bidang komputer','pakar','setuju'),(71,'Sistem Informasi (non IPA)','Ingin mempelajari komputasi yang lebih dalam','pakar','setuju'),(72,'Arsitektur (non IPA)','Sekolah asal adalah SMA','pakar','setuju'),(73,'Arsitektur (non IPA)','Bukan jurusan IPA','pakar','setuju'),(74,'Arsitektur (non IPA)','Tertarik masuk teknik','pakar','setuju'),(75,'Arsitektur (non IPA)','Rata-rata nilai matematika, bahasa inggris kelas 10 dan kelas 11 >= 75','pakar','setuju'),(76,'Arsitektur (non IPA)','Tidak tertarik dengan bidang komputer','pakar','setuju'),(77,'Arsitektur (non IPA)','Tertarik dengan konstruksi bangunan','pakar','setuju'),(78,'Desain Produk (non IPA)','Sekolah asal adalah SMA','pakar','setuju'),(79,'Desain Produk (non IPA)','Bukan jurusan IPA','pakar','setuju'),(80,'Desain Produk (non IPA)','Tertarik masuk teknik','pakar','setuju'),(81,'Desain Produk (non IPA)','Rata-rata nilai matematika, bahasa inggris kelas 10 dan kelas 11 >= 75','pakar','setuju'),(82,'Desain Produk (non IPA)','Tidak tertarik dengan bidang komputer','pakar','setuju'),(83,'Desain Produk (non IPA)','Tertarik dengan konstruksi bangunan','pakar','setuju'),(84,'Akuntansi (non IPA)','Sekolah asal adalah SMA','pakar','setuju'),(85,'Akuntansi (non IPA)','Bukan jurusan IPA','pakar','setuju'),(86,'Akuntansi (non IPA)','Tidak tertarik masuk teknik','pakar','setuju'),(87,'Akuntansi (non IPA)','Tertarik dengan ilmu bisnis','pakar','setuju'),(88,'Akuntansi (non IPA)','Senang belajar tentang pembukuan keuangan','pakar','setuju'),(89,'Manajemen (non IPA)','Sekolah asal adalah SMA','pakar','setuju'),(90,'Manajemen (non IPA)','Bukan jurusan IPA','pakar','setuju'),(91,'Manajemen (non IPA)','Tidak tertarik masuk teknik','pakar','setuju'),(92,'Manajemen (non IPA)','Tertarik dengan ilmu bisnis','pakar','setuju'),(93,'Manajemen (non IPA)','Tidak senang belajar tentang pembukuan keuangan','pakar','setuju'),(94,'Kedokteran (non IPA)','Sekolah asal adalah SMA','pakar','setuju'),(95,'Kedokteran (non IPA)','Bukan jurusan IPA','pakar','setuju'),(96,'Kedokteran (non IPA)','Tidak tertarik masuk teknik','pakar','setuju'),(97,'Kedokteran (non IPA)','Tidak Tertarik dengan ilmu bisnis','pakar','setuju'),(98,'Kedokteran (non IPA)','Tertarik dengan ilmu biologi','pakar','setuju'),(99,'Kedokteran (non IPA)','Ingin belajar tentang kesehatan dan penyembuhan','pakar','setuju'),(100,'Bioteknologi (non IPA)','Sekolah asal adalah SMA','pakar','setuju'),(101,'Bioteknologi (non IPA)','Bukan jurusan IPA','pakar','setuju'),(102,'Bioteknologi (non IPA)','Tidak tertarik masuk teknik','pakar','setuju'),(103,'Bioteknologi (non IPA)','Tidak Tertarik dengan ilmu bisnis','pakar','setuju'),(104,'Bioteknologi (non IPA)','Tertarik dengan ilmu biologi','pakar','setuju'),(105,'Bioteknologi (non IPA)','Tidak ingin belajar tentang kesehatan dan penyembuhan','pakar','setuju'),(106,'Teologi (non IPA)','Sekolah asal adalah SMA','pakar','setuju'),(107,'Teologi (non IPA)','Bukan jurusan IPA','pakar','setuju'),(108,'Teologi (non IPA)','Tidak tertarik masuk teknik','pakar','setuju'),(109,'Teologi (non IPA)','Tidak Tertarik dengan ilmu bisnis','pakar','setuju'),(110,'Teologi (non IPA)','Tidak tertarik dengan ilmu biologi','pakar','setuju'),(111,'Teologi (non IPA)','Ingin mendalami tentang agama Kristen','pakar','setuju'),(112,'Pendidikan Bahasa Inggris (non IPA)','Sekolah asal adalah SMA','pakar','setuju'),(113,'Pendidikan Bahasa Inggris (non IPA)','Bukan jurusan IPA','pakar','setuju'),(114,'Pendidikan Bahasa Inggris (non IPA)','Tidak tertarik masuk teknik','pakar','setuju'),(115,'Pendidikan Bahasa Inggris (non IPA)','Tidak Tertarik dengan ilmu bisnis','pakar','setuju'),(116,'Pendidikan Bahasa Inggris (non IPA)','Tidak tertarik dengan ilmu biologi','pakar','setuju'),(117,'Pendidikan Bahasa Inggris (non IPA)','Tidak ingin mendalami tentang agama Kristen','pakar','setuju'),(118,'Pendidikan Bahasa Inggris (non IPA)','Tertarik belajar bahasa Inggris','pakar','setuju'),(119,'Arsitek (non SMA)','Sekolah asal bukan SMA','pakar','setuju'),(120,'Arsitek (non SMA)','Jurusan asal adalah teknik bangunan dan perancangan produk','pakar','setuju'),(121,'Arsitek (non SMA)','Konsentrasi adalah teknik bangunan','pakar','setuju'),(122,'Desain Produk (non SMA)','Sekolah asal bukan SMA','pakar','setuju'),(123,'Desain Produk (non SMA)','Jurusan asal adalah teknik bangunan dan perancangan produk','pakar','setuju'),(124,'Desain Produk (non SMA)','Tidak konsentrasi teknik bangunan','pakar','setuju'),(125,'Informatika (non SMA)','Sekolah asal bukan SMA','pakar','setuju'),(126,'Informatika (non SMA)','Jurusan asal bukan teknik bangunan dan perancangan produk','pakar','setuju'),(127,'Informatika (non SMA)','Jurusan asal adalah bidang teknologi informasi dan komunikasi','pakar','setuju'),(128,'Informatika (non SMA)','Konsentrasi adalah Teknik komputer dan jaringan','pakar','setuju'),(129,'Sistem Informasi (non SMA)','Sekolah asal bukan SMA','pakar','setuju'),(130,'Sistem Informasi (non SMA)','Jurusan asal bukan teknik bangunan dan perancangan produk','pakar','setuju'),(131,'Sistem Informasi (non SMA)','Jurusan asal adalah bidang teknologi informasi dan komunikasi','pakar','setuju'),(132,'Sistem Informasi (non SMA)','Tidak konsentrasi Teknik komputer dan jaringan','pakar','setuju'),(133,'Akutansi (non SMA)','Sekolah asal bukan SMA','pakar','setuju'),(134,'Akutansi (non SMA)','Jurusan asal bukan teknik bangunan dan perancangan produk','pakar','setuju'),(135,'Akutansi (non SMA)','Jurusan asal bukan bidang teknologi informasi dan komunikasi','pakar','setuju'),(136,'Akutansi (non SMA)','Jurusan asal adalah bidang bisnis dan manajemen','pakar','setuju'),(137,'Akutansi (non SMA)','Konsentrasi adalah akuntansi','pakar','setuju'),(138,'Manajemen (non SMA)','Sekolah asal bukan SMA','pakar','setuju'),(139,'Manajemen (non SMA)','Jurusan asal bukan teknik bangunan dan perancangan produk','pakar','setuju'),(140,'Manajemen (non SMA)','Jurusan asal bukan bidang teknologi informasi dan komunikasi','pakar','setuju'),(141,'Manajemen (non SMA)','Jurusan asal adalah bidang bisnis dan manajemen','pakar','setuju'),(142,'Manajemen (non SMA)','Tidak Konsentrasi pada akuntansi','pakar','setuju'),(150,'Informatika','Suka Memasak','pakar','setuju'),(151,'Pendidikan','suka memasak','pakar','setuju');
/*!40000 ALTER TABLE `tb_kesimpulan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_kesimpulan_gigi`
--

DROP TABLE IF EXISTS `tb_kesimpulan_gigi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_kesimpulan_gigi` (
  `kode_kesimpulan` int(11) NOT NULL AUTO_INCREMENT,
  `penyakit` varchar(50) NOT NULL,
  `solusi` varchar(50) NOT NULL,
  `fakta` varchar(100) NOT NULL,
  `oleh` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`kode_kesimpulan`)
) ENGINE=InnoDB AUTO_INCREMENT=152 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_kesimpulan_gigi`
--

LOCK TABLES `tb_kesimpulan_gigi` WRITE;
/*!40000 ALTER TABLE `tb_kesimpulan_gigi` DISABLE KEYS */;
INSERT INTO `tb_kesimpulan_gigi` VALUES (1,'Gingvitis','Scaling','Gusi kemerahan','pakar','setuju'),(2,'Gingvitis','Scaling','Mudah berdarah','pakar','setuju'),(3,'Gingvitis','Scaling, Root Planing','Gusi Kemerahan','pakar','setuju'),(4,'Periodontitis','Scaling, Root Planing','Mudah berdarah','pakar','setuju'),(5,'Periodontitis','Scaling, Root Planing','Gusi Goyang','pakar','setuju'),(6,'Stomatitisoftossa','Medikasi','Ulcerasi','pakar','setuju'),(7,'Halitosis','Medikasi','Bau Mulut','pakar','setuju'),(8,'Asbes periodontal','Medikasi, Root Planing','Gusi bengkak, Demam, Sakit','pakar','setuju');
/*!40000 ALTER TABLE `tb_kesimpulan_gigi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_penyakit`
--

DROP TABLE IF EXISTS `tb_penyakit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_penyakit` (
  `kode_penyakit` varchar(50) NOT NULL,
  `penyakit` varchar(100) NOT NULL,
  PRIMARY KEY (`kode_penyakit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_penyakit`
--

LOCK TABLES `tb_penyakit` WRITE;
/*!40000 ALTER TABLE `tb_penyakit` DISABLE KEYS */;
INSERT INTO `tb_penyakit` VALUES ('P01','Gingvitis'),('P02','Periodontitis'),('P03','Stomatitis Aftosa'),('P04','Halitosis'),('P05','Cheilitis'),('P06','Abses Periodontal'),('P07','Karies Gigi');
/*!40000 ALTER TABLE `tb_penyakit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_pertanyaan`
--

DROP TABLE IF EXISTS `tb_pertanyaan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_pertanyaan` (
  `kode_pertanyaan` varchar(50) NOT NULL,
  `isi_pertanyaan` varchar(200) NOT NULL,
  PRIMARY KEY (`kode_pertanyaan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_pertanyaan`
--

LOCK TABLES `tb_pertanyaan` WRITE;
/*!40000 ALTER TABLE `tb_pertanyaan` DISABLE KEYS */;
INSERT INTO `tb_pertanyaan` VALUES ('n1','Apakah pasien merasa demam ?'),('n2','Apakah pasien saat sikat gigi merasa mudah berdarah ?'),('n3','Apakah pasien merasa gigi goyang ?'),('n4','Apakah pasien merasa bau mulut ?'),('n5','Apakah pasien merasa luka bagian tertentu bagian dalam mulut ?'),('n6','Apakah pasen merasa gusi bengkak ?'),('n7','Apakah pasien merasa sakit gigi ?');
/*!40000 ALTER TABLE `tb_pertanyaan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_solusi`
--

DROP TABLE IF EXISTS `tb_solusi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_solusi` (
  `kode_solusi` varchar(50) NOT NULL,
  `isi_solusi` varchar(200) NOT NULL,
  PRIMARY KEY (`kode_solusi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_solusi`
--

LOCK TABLES `tb_solusi` WRITE;
/*!40000 ALTER TABLE `tb_solusi` DISABLE KEYS */;
INSERT INTO `tb_solusi` VALUES ('S1','Informatika'),('S10','Pendidikan Bahasa Inggris'),('S100','Gingvitis'),('S101','Periodontitis'),('S102','Stomatitisaftosa'),('S103','Halitosis'),('S104','Cheilitis'),('S105','Abses Periodontal'),('S11','x-1'),('S12','x-2'),('S13','Informatika (non IPA)'),('S14','Sistem Informasi (non IPA)'),('S15','Arsitektur (non IPA)'),('S16','Desain Produk (non IPA)'),('S17','Akuntansi (non IPA)'),('S18','Manajemen (non IPA)'),('S19','Kedokteran (non IPA)'),('S2','Sistem Informasi'),('S20','Bioteknologi (non IPA)'),('S200','Scaling'),('S201','Scaling'),('S202','Medikasi'),('S203','Root Planing'),('S204','Medikasi'),('S205','Medikasi'),('S206','Medikasi'),('S207','Perawatan Saluran Akar'),('S21','Teologi (non IPA)'),('S22','Pendidikan Bahasa Inggris (non IPA)'),('S23','x-3'),('S24','x-4'),('S25','Arsitektur (non SMA)'),('S26','Desain Produk (non SMA)'),('S27','Informatika (non SMA)'),('S28','Sistem Informasi (non SMA)'),('S29','Akutansi (non SMA)'),('S3','Arsitektur'),('S30','Manajemen (non SMA)'),('S31','x-5'),('S4','Desain Produk'),('S5','Akuntansi'),('S6','Manajemen'),('S7','Kedokteran'),('S8','Bioteknologi'),('S9','Teologi');
/*!40000 ALTER TABLE `tb_solusi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'sistem-pakar-kesehatan-gigi'
--
