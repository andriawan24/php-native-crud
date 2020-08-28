-- MariaDB dump 10.17  Distrib 10.4.6-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: latihanphp
-- ------------------------------------------------------
-- Server version	10.2.6-MariaDB-log

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
-- Table structure for table `calon_siswa`
--

DROP TABLE IF EXISTS `calon_siswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `calon_siswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `sekolah_asal` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `calon_siswa`
--

LOCK TABLES `calon_siswa` WRITE;
/*!40000 ALTER TABLE `calon_siswa` DISABLE KEYS */;
INSERT INTO `calon_siswa` VALUES (1,'Nama Lengkap','alamat','laki-laki','Islam','Nama Sekolah'),(2,'Hello World','iwjiwjdiwj','laki-laki','Islam','djiwjdwij'),(3,'Nama Lengkap 2 ','Alamat','laki-laki','Islam','Sekolah'),(4,'Hello ','ALamar','laki-laki','Islam','msmdwkmdw'),(5,'Namaku','ksqkwkdok','laki-laki','Islam','dwokdowkdw'),(6,'sqmskqmk','mksqmkmksmk','laki-laki','Islam','dwwmkdwmkwd'),(7,'sqkmskm','kmksqmkmq','laki-laki','Islam','skqmksqm'),(8,'msqmskqm','mksqmkm','laki-laki','Islam','msqkmqksm'),(9,'qssqkkqms','kmskqmkm','laki-laki','Islam','mskqmsq'),(10,'sqmksmkm','mqksmksm','laki-laki','Islam','sqmkmsqk'),(11,'sqmksqmkm','m','laki-laki','Islam','mskqmsqkm'),(12,'sqmksqmk','mkm','laki-laki','Islam','smqkmsqk'),(13,'sqmkqmk','mksmkqm','laki-laki','Islam','mskqmsqk');
/*!40000 ALTER TABLE `calon_siswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logs`
--

DROP TABLE IF EXISTS `logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `remote_addr` varchar(100) NOT NULL,
  `req_uri` varchar(100) NOT NULL,
  `messages` varchar(100) DEFAULT NULL,
  `log_date` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logs`
--

LOCK TABLES `logs` WRITE;
/*!40000 ALTER TABLE `logs` DISABLE KEYS */;
INSERT INTO `logs` VALUES (1,'11313','121313','HEllo World','2020-08-28 03:26:17'),(2,'::1','/latihanphp/proses-pendaftaran.php','Accessed','2020-08-28 03:39:14');
/*!40000 ALTER TABLE `logs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-08-28 10:45:26
