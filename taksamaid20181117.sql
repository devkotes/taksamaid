-- MySQL dump 10.13  Distrib 5.6.24, for Win64 (x86_64)
--
-- Host: localhost    Database: taksamaid
-- ------------------------------------------------------
-- Server version	5.6.20

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `bank`
--

DROP TABLE IF EXISTS `bank`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bank` (
  `bank_id` int(3) NOT NULL,
  `account` int(30) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `bank_name` varchar(45) DEFAULT NULL,
  `desc` mediumtext,
  PRIMARY KEY (`bank_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bank`
--

LOCK TABLES `bank` WRITE;
/*!40000 ALTER TABLE `bank` DISABLE KEYS */;
/*!40000 ALTER TABLE `bank` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `department` (
  `department_id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `desc` text,
  PRIMARY KEY (`department_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `department`
--

LOCK TABLES `department` WRITE;
/*!40000 ALTER TABLE `department` DISABLE KEYS */;
INSERT INTO `department` VALUES (1,'Teknik Informatika','Teknik Informatika'),(2,'Teknik Industri','Teknik Industri'),(3,'Desain Komunikasi Visual','	Desain Komunikasi Visual'),(4,'Sastra Indonesia','Sastra Indonesia'),(5,'Sastra Jepang','Sastra Jepang'),(6,'Matematika','Matematika');
/*!40000 ALTER TABLE `department` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `register` (
  `register_id` int(5) NOT NULL AUTO_INCREMENT,
  `no_register` varchar(50) DEFAULT NULL,
  `nik` int(20) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `birthplace` varchar(45) DEFAULT NULL,
  `birthday` varchar(45) DEFAULT NULL,
  `gender` enum('L','P') DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL,
  `religion_id` int(3) DEFAULT NULL,
  `department_id` int(3) DEFAULT NULL,
  `status_id` int(3) DEFAULT NULL,
  `notif` int(2) DEFAULT NULL,
  `start_dtm` datetime NOT NULL,
  PRIMARY KEY (`register_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `register`
--

LOCK TABLES `register` WRITE;
/*!40000 ALTER TABLE `register` DISABLE KEYS */;
INSERT INTO `register` VALUES (1,'REG1811120001',0,'sa','sa','sa','2018-11-14','P','sa','sa',2,1,2,1,'2018-11-12 04:49:40'),(2,'REG1811120002',0,'akkaka','sasa','kakak','2018-11-06','P','ssa','sasa',2,1,2,1,'2018-11-12 04:50:19'),(3,'REG1811120003',0,'sasa','sas','asasa','2018-11-19','P','sa','sasa',2,1,1,1,'2018-11-12 04:50:35'),(4,'REG1811120004',8383998,'kyunzi','sasa','kjskjdksjdsk','2018-11-04','P','sasa','sasa',3,2,2,1,'2018-11-12 05:13:14'),(5,'REG1811120005',33132,'dadadad','ss','cianjur','2018-11-01','P','ss','083172372',2,2,2,2,'2018-11-12 10:00:36'),(6,'REG1811120006',0,'','','','','L','','',0,0,2,2,'2018-11-12 11:24:47'),(7,'REG1811150007',2147483647,'Nanda Melawati','nanda@neuronworks.co.id','Cianjur','2018-11-02','P','Kp. Nyalindung','083817328667',3,1,2,2,'2018-11-15 09:02:51'),(8,'REG1811150008',12222,'sedi','ada@dadang.com','eeeee','2018-11-01','P','sssasasa','0838173283728',2,1,1,2,'2018-11-15 15:32:08'),(9,'REG1811150009',0,'','','','','L','','',0,0,2,2,'2018-11-15 16:24:24'),(10,'REG1811150010',2147483647,'Bobi Permana Sandi','bobipermana78@gmail.com','Cianjur','2018-10-31','L','Kp. Nyalindung','083817328667',1,3,2,2,'2018-11-15 18:35:48'),(11,'REG1811150011',2147483647,'Reni Safitri','refa@gmail.com','Jakarta','2018-11-02','P','Kota Baru','083817328848',1,2,1,2,'2018-11-15 18:43:41'),(12,'REG1811160012',2147483647,'Dadang Casper','bobib@dsodsods.ocom','Cianjur','2018-11-02','L','sasasasasa','083823283293829',1,1,2,2,'2018-11-16 22:35:26'),(13,'REG1811160013',2147483647,'lkaklsal','sss@ssssasa','cianjur','2018-11-02','P','ddsdsd','083028323293029',2,5,2,1,'2018-11-16 23:14:34'),(14,'REG1811160014',2147483647,'sasasas','neuron@dadang.com','ddddd','2018-11-05','P','ddddd','083892389289232',2,3,2,1,'2018-11-16 23:40:26'),(15,'REG1811170015',2147483647,'ssss','sss@ssssasa','asasa','2018-11-07','P','sasasasa','083028323293029',3,3,2,1,'2018-11-17 00:41:58');
/*!40000 ALTER TABLE `register` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `religion`
--

DROP TABLE IF EXISTS `religion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `religion` (
  `religion_id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `desc` text,
  PRIMARY KEY (`religion_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `religion`
--

LOCK TABLES `religion` WRITE;
/*!40000 ALTER TABLE `religion` DISABLE KEYS */;
INSERT INTO `religion` VALUES (1,'Islam','Islam'),(2,'Kristen Katolik','Kristen Katolik'),(3,'Kristen Protestan','Kristen Protestan'),(4,'Hindu','Hindu'),(5,'Buddha','Buddha'),(6,'Kong Hu Cu','Kong Hu Cu');
/*!40000 ALTER TABLE `religion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `status` (
  `status_id` int(3) NOT NULL AUTO_INCREMENT,
  `status_name` varchar(45) NOT NULL,
  `desc` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status`
--

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` VALUES (1,'Paid','Sudah Bayar'),(2,'Unpaid','Belum Dibayar');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `desc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','21232f297a57a5a743894a0e4a801fc3','Administrator');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'taksamaid'
--

--
-- Dumping routines for database 'taksamaid'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-17  1:07:07
