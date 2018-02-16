-- MySQL dump 10.16  Distrib 10.2.8-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: tracking
-- ------------------------------------------------------
-- Server version	10.2.8-MariaDB-10.2.8+maria~xenial-log

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
-- Table structure for table `asist`
--

DROP TABLE IF EXISTS `asist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `asist` (
  `idAsist` int(11) NOT NULL AUTO_INCREMENT,
  `idEvent` int(11) DEFAULT NULL,
  `idUser` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`idAsist`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asist`
--

LOCK TABLES `asist` WRITE;
/*!40000 ALTER TABLE `asist` DISABLE KEYS */;
INSERT INTO `asist` VALUES (1,1,2,'2017-10-24 04:14:05'),(3,2,2,'2017-10-24 04:26:32'),(6,3,2,'2017-10-25 03:02:13'),(7,4,2,'2017-10-25 03:02:20'),(8,6,2,'2017-10-25 03:12:17'),(9,9,2,'2017-10-25 04:05:24'),(19,20,2,'2017-10-25 23:54:30'),(20,23,2,'2017-10-26 02:29:50');
/*!40000 ALTER TABLE `asist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `idEvent` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `since` time DEFAULT NULL,
  `until` time DEFAULT NULL,
  `maxAsis` int(11) DEFAULT NULL,
  `finished` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`idEvent`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (1,'univision','2017-10-23','01:00:00','02:00:00',11,1,'2017-10-25 03:52:46'),(2,'univision2','2017-10-23','01:00:00','02:00:00',1,1,'2017-10-25 03:52:48'),(3,'horas extras','2017-10-31','03:00:00','04:00:00',20,1,'2017-10-25 03:52:51'),(4,'horas extras','2017-10-31','03:00:00','04:00:00',11,1,'2017-10-25 03:52:53'),(5,'univision2','2017-10-31','03:00:00','04:00:00',11,1,'2017-10-25 03:52:55'),(6,'univision2','2017-10-27','13:00:00','14:00:00',22,1,'2017-10-25 03:52:50'),(7,'univision2','2017-10-31','05:00:00','06:00:00',22,1,'2017-10-25 03:52:57'),(8,'222','2017-10-31','04:00:00','05:00:00',22,1,'2017-10-25 03:52:59'),(9,'horas extras','2017-11-01','01:00:00','05:30:00',1,1,'2017-10-25 08:58:13'),(10,'horas extras','2017-10-25','07:30:00','00:00:00',111,1,'2017-10-25 06:15:58'),(11,'pajarito','2017-10-24','03:30:00','05:30:00',2,1,'2017-10-25 06:15:48'),(12,'manuel','2017-10-24','02:30:00','04:30:00',12,1,'2017-10-25 06:15:50'),(13,'ricardo','2017-10-24','00:00:00','01:00:00',11,1,'2017-10-25 06:15:52'),(14,'edgar','2017-10-24','01:00:00','02:00:00',11,1,'2017-10-25 06:15:54'),(15,'hector','2017-10-24','00:00:00','03:00:00',12,1,'2017-10-25 06:15:55'),(16,'abdielito','2017-10-17','00:00:00','05:30:00',12,1,'2017-10-25 06:15:46'),(17,'univision','2017-10-16','00:00:00','01:30:00',100,1,'2017-10-25 06:15:45'),(18,'1','2017-11-04','00:30:00','02:00:00',1,1,'2017-10-25 19:05:37'),(19,'univision2','2017-11-03','00:00:00','01:00:00',1,1,'2017-10-25 08:58:16'),(20,'cuarto evento','2017-11-05','22:00:00','23:30:00',1,1,'2017-10-26 02:26:45'),(21,'quinto','2017-10-24','05:00:00','06:30:00',1,1,'2017-10-25 08:58:11'),(22,'sexto','2017-10-17','02:30:00','05:00:00',1,1,'2017-10-25 08:58:09'),(23,'univision4','2017-11-22','08:30:00','09:30:00',10,0,'2017-10-25 08:57:36');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `rol` int(11) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `locked` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Francisco Nogales','fnogales',1,'1234',0),(2,'Francisco Nogales','fnogalesagent',2,'1234',0),(5,'paquito','paquito',2,'Listentrust1',1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-10-25 23:16:42
