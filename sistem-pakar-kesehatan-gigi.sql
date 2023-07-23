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
INSERT INTO `tb_admin` VALUES ('admin','admin');
/*!40000 ALTER TABLE `tb_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_kesimpulan_gigi`
--

DROP TABLE IF EXISTS `tb_kesimpulan_gigi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_kesimpulan_gigi` (
  `kode_kesimpulan` int(11) NOT NULL AUTO_INCREMENT,
  `solusi` varchar(50) NOT NULL,
  `tindakan` varchar(50) NOT NULL,
  `fakta` varchar(100) NOT NULL,
  `oleh` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`kode_kesimpulan`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_kesimpulan_gigi`
--

LOCK TABLES `tb_kesimpulan_gigi` WRITE;
/*!40000 ALTER TABLE `tb_kesimpulan_gigi` DISABLE KEYS */;
INSERT INTO `tb_kesimpulan_gigi` VALUES (1,'Gingvitis','scaling','Gusi Kemerahan','pakar','setuju'),(2,'Gingvitis','scaling','Mudah Berdarah','pakar','setuju'),(3,'Periodontitis','scaling & root planing','Gusi Kemerahan','pakar','setuju'),(4,'Periodontitis','scaling & root planing','Mudah Berdarah','pakar','setuju'),(5,'Periodontitis','scaling & root planing','Gigi goyang','pakar','setuju'),(6,'Stomatitis Aftosa','medikasi','Luka pada mulut','pakar','setuju'),(7,'Stomatitis Aftosa','medikasi','Sulit mengunyah','pakar','setuju'),(8,'Halitosis','medikasi','Bau mulut','pakar','setuju'),(9,'Halitosis','medikasi','Karang gigi','pakar','setuju'),(10,'Cheilitis','medikasi','Luka pada mulut','pakar','setuju'),(11,'Cheilitis','medikasi','Bibir kering','pakar','setuju'),(12,'Abses Periodontal','medikasi & perawatan saluran akar','Gusi bengkak','pakar','setuju'),(13,'Abses Periodontal','medikasi & perawatan saluran akar','Demam','pakar','setuju'),(14,'Abses Periodontal','medikasi & perawatan saluran akar','Sakit gigi','pakar','setuju'),(15,'Karies Gigi','perawatan saluran akar','Gigi berlubang','pakar','setuju'),(16,'Karies Gigi','perawatan saluran akar','Sulit mengunyah','pakar','setuju');
/*!40000 ALTER TABLE `tb_kesimpulan_gigi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_penyakit`
--

DROP TABLE IF EXISTS `tb_penyakit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_penyakit` (
  `kode_solusi` varchar(50) NOT NULL,
  `isi_solusi` varchar(200) NOT NULL,
  PRIMARY KEY (`kode_solusi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_penyakit`
--

LOCK TABLES `tb_penyakit` WRITE;
/*!40000 ALTER TABLE `tb_penyakit` DISABLE KEYS */;
INSERT INTO `tb_penyakit` VALUES ('P01','Gingvitis'),('P02','Periodontitis'),('P03','Stomatitis Aftosa'),('P04','Halitosis'),('P05','Cheilitis'),('P06','Abses Periodontal'),('P07','Karies Gigi'),('S11','x-1'),('S12','x-2'),('S23','x-3'),('S24','x-4'),('S31','x-5');
/*!40000 ALTER TABLE `tb_penyakit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_pertanyaan_gejala`
--

DROP TABLE IF EXISTS `tb_pertanyaan_gejala`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_pertanyaan_gejala` (
  `kode_pertanyaan` varchar(50) NOT NULL,
  `isi_pertanyaan` varchar(200) NOT NULL,
  PRIMARY KEY (`kode_pertanyaan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_pertanyaan_gejala`
--

LOCK TABLES `tb_pertanyaan_gejala` WRITE;
/*!40000 ALTER TABLE `tb_pertanyaan_gejala` DISABLE KEYS */;
INSERT INTO `tb_pertanyaan_gejala` VALUES ('G01','Apakah kamu merasa gusi merah ?'),('G02','Apakah pasien saat sikat gigi merasa mudah berdarah ?'),('G03','Apakah pasien merasa gigi goyang ?'),('G04','Apakah pasien merasa bau mulut ?'),('G05','Apakah pasien merasa luka bagian tertentu bagian dalam mulut ?'),('G06','Apakah pasen merasa gusi bengkak ?'),('G07','Apakah pasien merasa sakit gigi ?'),('G08','Apakah kamu merasa demam ?'),('G09','Apakah kamu merasa gusi bernanah ?'),('G10','Apakah kamu merasa bibir kering ?'),('G11','Apakah kamu merasa Gigi senstiv ?'),('G12','Apakah kamu memiliki Karang gigi ?'),('G13','Apakah kamu merasa Kesulitan membuka mulut ?'),('G14','Apakah kamu merasa Sulit mengunyah ?'),('G15','Apakah kamu merasa Rahang terlihat bengkak ?'),('G16','Apakah kamu merasa Gigi berlubang ?');
/*!40000 ALTER TABLE `tb_pertanyaan_gejala` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'sistem-pakar-kesehatan-gigi'
--
