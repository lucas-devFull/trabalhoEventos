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
-- Table structure for table `mensagens`
--

DROP TABLE IF EXISTS `mensagens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mensagens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(50) NOT NULL,
  `autor` varchar(30) NOT NULL,
  `id_post` int(15) NOT NULL,
  `id_pergunta` int(15) DEFAULT NULL,
  `data_postagem` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  FOREIGN KEY ('id_post') REFERENCES 'feed_noticias'('id_post')
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mensagens`
--

LOCK TABLES `mensagens` WRITE;
/*!40000 ALTER TABLE `mensagens` DISABLE KEYS */;
INSERT INTO `mensagens` VALUES (1,'Guilkherme esta testando as nasdasd','maria',1,0,'2020-04-11 21:00:27'),(2,'Eu nao acredito que funcionou uhuuuuuuu','maria',1,0,'2020-04-11 21:04:00'),(3,'Queria que todos fossem felizes','maria',1,0,'2020-04-11 21:10:23'),(4,'Que fetsa animal GENTEEE!!!','maria',1,0,'2020-04-11 21:11:29'),(5,'WOWWWWWWWWWWW','maria',1,0,'2020-04-11 21:36:52'),(6,'funcionou sim gui vc e foda','Guilherme',1,2,'2020-04-11 21:40:20'),(7,'ESTA FUNCIONANDO MAIS FALTA COISA AINDA, AGUARDE!!','Lucas',1,6,'2020-04-11 21:48:23'),(8,'gracas a deus essa balada vai ser excluida','maria',1,0,'2020-04-11 21:58:40'),(9,'testando a respostad a resposta','maria  ',1,6,'2020-04-11 23:23:07'),(10,'asdasdsa','maria  ',1,0,'2020-04-11 23:25:23'),(11,'deu certo a resposta ?','maria  ',1,7,'2020-04-11 23:25:55'),(12,'PARECE QUE SIM, DEU CERTO','maria  ',1,7,'2020-04-11 23:26:15'),(13,'dgdsgsdg','maria  ',1,0,'2020-04-11 23:37:09'),(14,'salve maria eh noix','maria  ',1,0,'2020-04-11 23:44:53'),(15,'aaaaaaaaaaa','maria  ',1,1,'2020-04-11 23:48:58'),(16,'asdasdasdasd','maria  ',1,6,'2020-04-11 23:49:03'),(17,'madremia','maria  ',1,12,'2020-04-11 23:49:14'),(18,'teste','lucas  ',1,15,'2020-05-19 23:14:23'),(19,'teste','lucas  ',1,15,'2020-05-19 23:23:14'),(20,'ke','lucas  ',1,18,'2020-05-19 23:23:30'),(21,'texto','lucas  ',1,1,'2020-05-19 23:32:50'),(22,'seu guilherme ','lucas  ',1,1,'2020-05-19 23:35:09'),(23,'seu guilherme ','lucas  ',1,13,'2020-05-19 23:35:25');
/*!40000 ALTER TABLE `mensagens` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-19 23:44:08
