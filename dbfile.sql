-- MySQL dump 10.13  Distrib 5.7.18, for Linux (i686)
--
-- Host: localhost    Database: orbasmdbano
-- ------------------------------------------------------
-- Server version	5.7.18-0ubuntu0.16.04.1

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
-- Table structure for table `Imagetableano`
--

DROP TABLE IF EXISTS `Imagetableano`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Imagetableano` (
  `idano` int(11) NOT NULL AUTO_INCREMENT,
  `img_nameano` varchar(60) NOT NULL,
  PRIMARY KEY (`idano`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Imagetableano`
--

LOCK TABLES `Imagetableano` WRITE;
/*!40000 ALTER TABLE `Imagetableano` DISABLE KEYS */;
INSERT INTO `Imagetableano` VALUES (1,'mila.jpg'),(2,'jenn.jpg'),(3,'gal.jpeg'),(4,'gad.jpeg'),(5,'jessica-henwick-bio-pic.jpg'),(6,'heragain.jpg'),(7,'keira.jpg'),(8,'julie.jpg'),(9,'rachael.jpg'),(10,'gayet.jpg'),(11,'sayfried.jpeg'),(12,'herag.jpg'),(13,'heraga.jpg'),(14,'pike.jpg'),(15,'portman.jpg'),(16,'johan.jpg'),(17,'bouchard.jpeg'),(18,'stone.jpg'),(20,'johan2.jpg'),(21,'sharapova.jpg'),(22,'stone2.jpg'),(23,'tao.jpg'),(24,'stewart.jpg');
/*!40000 ALTER TABLE `Imagetableano` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Usertable`
--

DROP TABLE IF EXISTS `Usertable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Usertable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `pass` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Usertable`
--

LOCK TABLES `Usertable` WRITE;
/*!40000 ALTER TABLE `Usertable` DISABLE KEYS */;
INSERT INTO `Usertable` VALUES (1,'okay','okay@lkjds','okay'),(2,'okay','okay@lkjds','okay'),(3,'okay','okay@lkjds','okay');
/*!40000 ALTER TABLE `Usertable` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-14 20:25:20
