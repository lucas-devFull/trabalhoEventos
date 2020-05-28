-- MySQL dump 10.13  Distrib 5.7.30, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: intereventos
-- ------------------------------------------------------
-- Server version	5.7.30-0ubuntu0.18.04.1

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
-- Table structure for table `feed_post`
--

DROP TABLE IF EXISTS `feed_post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feed_post` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_post` varchar(100) DEFAULT NULL,
  `descricao_post` varchar(250) DEFAULT NULL,
  `endereco_post` varchar(70) DEFAULT NULL,
  `data_post` date DEFAULT NULL,
  `link_fb` varchar(250) DEFAULT NULL,
  `link_instagram` varchar(250) DEFAULT NULL,
  `link_twitter` varchar(250) DEFAULT NULL,
  `link_wpp` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id_post`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feed_post`
--

LOCK TABLES `feed_post` WRITE;
/*!40000 ALTER TABLE `feed_post` DISABLE KEYS */;
INSERT INTO `feed_post` VALUES (1,'teste','t','es','2020-04-11',NULL,NULL,NULL,NULL),(2,'teste','teste','teste','2020-05-06','','','',''),(7,'TESTE SLAAA','AAAAAAAAAAAAA','AAAAAAAAAAAA','2020-05-13','','','',''),(8,'teste','eee','eee','2020-05-21','','','',''),(9,'teste','eee','eee','2020-05-21','','','',''),(10,'teste','eee','eee','2020-05-21','','','',''),(11,'tetsetsx','xsss','sss','2020-05-20','','','',''),(12,'titulo','descricoa','endereço','2020-05-12','','','',''),(13,'teste','kjbjbkjb','lknçk','2020-05-13','','','',''),(14,'caracules','textp','lkmçkn','2020-04-28','','','',''),(15,'teste','ssss','l.klklç','2000-01-03','','','',''),(16,'Testando novas fotos','teste','la em casa','2020-05-15','','','',''),(17,'teste gif','teste gif','no pc','2020-05-25','','','',''),(18,'teste','teste','sla','2020-05-14','','','',''),(19,'AAAAAAAA','\\\ZZ','ZZZZZZZ','2020-05-23','','','',''),(20,'aaaaaa','ccccccc','ccccccccc','2020-05-22','','','',''),(21,'teste','teste','ssssss','2020-05-15','','','',''),(22,'meme do caixão','teste video','teeste','2020-04-30','','','',''),(23,'meme do caixão','teste video','teeste','2020-04-30','','','',''),(24,'teste meme aaaaa to com depressão','AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA TO COM DEPRESSAO ','aaaaa to com depressao','2020-05-13','','','',''),(25,'TESTE ','AAAAAAAAAAAA','AAAAAAA','2020-05-21','','','',''),(26,'TESTE ','AAAAAAAAAAAA','AAAAAAA','2020-05-21','','','',''),(27,'AAAAAAAAAAAAAAAAAAAAAAAAAAAA TO COM DEPRESSÃO','AAAAAAAAAAAA TO COM DEPRESSAO','AAAAAAAAAAAAAAA TO COM DEPRESSÃO','2020-05-28','','','',''),(28,'teste','teste','teste','2020-05-20','','','',''),(29,'teste','teste','teset','2020-05-14','','','',''),(30,'teset','ubub','ujhbubu','2020-02-15','','','',''),(31,'aaa','aa','a','2020-04-30','','','',''),(32,'teste','teste','teste','2020-05-29','','','',''),(33,'ultimo teste com meme','memezeiro','testezieno','2020-05-28','','','','');
/*!40000 ALTER TABLE `feed_post` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-28  0:01:22
