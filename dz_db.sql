-- MySQL dump 10.13  Distrib 5.6.16, for osx10.8 (x86_64)
--
-- Host: localhost    Database: dz_db
-- ------------------------------------------------------
-- Server version	5.6.16

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
-- Table structure for table `content`
--

DROP TABLE IF EXISTS `content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `content` (
  `cid` int(10) NOT NULL AUTO_INCREMENT,
  `title` text,
  `body` text,
  `summary` text,
  `language` varchar(45) DEFAULT 'zh',
  `cdate` datetime DEFAULT NULL,
  `mdate` datetime DEFAULT NULL,
  `uid` int(10) unsigned DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `weight` int(11) DEFAULT '0',
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `content`
--

LOCK TABLES `content` WRITE;
/*!40000 ALTER TABLE `content` DISABLE KEYS */;
INSERT INTO `content` VALUES (23,'gallery item',NULL,NULL,'zh','2014-07-02 00:17:22','2014-07-02 00:17:22',NULL,1,'lookbook',0),(24,'gallery item',NULL,NULL,'zh','2014-07-02 00:31:49','2014-07-02 00:31:49',NULL,1,'lookbook',0),(25,'gallery item',NULL,NULL,'zh','2014-07-02 00:32:32','2014-07-02 00:32:32',NULL,1,'lookbook',0),(26,'gallery item',NULL,NULL,'zh','2014-07-02 00:50:35','2014-07-02 00:50:35',NULL,1,'lookbook',0),(27,'gallery item',NULL,NULL,'zh','2014-07-02 00:50:43','2014-07-02 00:50:43',NULL,1,'lookbook',0),(28,'gallery item',NULL,NULL,'zh','2014-07-02 00:57:43','2014-07-02 00:57:43',NULL,1,'lookbook',0),(29,'gallery item',NULL,NULL,'zh','2014-07-02 00:58:38','2014-07-02 00:58:38',NULL,1,'lookbook',0),(30,'gallery item',NULL,NULL,'zh','2014-07-02 00:58:59','2014-07-02 00:58:59',NULL,1,'lookbook',0),(31,'gallery item',NULL,NULL,'zh','2014-07-02 00:59:33','2014-07-02 00:59:33',NULL,1,'lookbook',0),(32,'gallery item',NULL,NULL,'zh','2014-07-02 00:59:43','2014-07-02 00:59:43',NULL,1,'lookbook',0),(33,'gallery item',NULL,NULL,'zh','2014-07-02 00:59:56','2014-07-02 00:59:56',NULL,1,'lookbook',0),(34,'gallery item',NULL,NULL,'zh','2014-07-02 01:11:54','2014-07-02 01:11:54',NULL,1,'lookbook',0),(35,'gallery item',NULL,NULL,'zh','2014-07-02 01:12:09','2014-07-02 01:12:09',NULL,1,'lookbook',0);
/*!40000 ALTER TABLE `content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `field`
--

DROP TABLE IF EXISTS `field`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `field` (
  `fid` int(10) NOT NULL AUTO_INCREMENT,
  `cdate` datetime DEFAULT NULL,
  `mdate` datetime DEFAULT NULL,
  `field_name` varchar(45) DEFAULT NULL,
  `field_content` text,
  `cid` int(10) DEFAULT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `field`
--

LOCK TABLES `field` WRITE;
/*!40000 ALTER TABLE `field` DISABLE KEYS */;
INSERT INTO `field` VALUES (8,'2014-07-02 00:17:22','2014-07-02 00:17:22','brand','diamond',23),(9,'2014-07-02 00:31:49','2014-07-02 00:31:49','brand','diamond',24),(10,'2014-07-02 00:32:32','2014-07-02 00:32:32','brand','diamond',25),(11,'2014-07-02 00:50:35','2014-07-02 00:50:35','brand','diamond',26),(12,'2014-07-02 00:50:43','2014-07-02 00:50:43','brand','diamond',27),(13,'2014-07-02 00:57:43','2014-07-02 00:57:43','brand','diamond',28),(14,'2014-07-02 00:58:38','2014-07-02 00:58:38','brand','diamond',29),(15,'2014-07-02 00:58:59','2014-07-02 00:58:59','brand','diamond',30),(16,'2014-07-02 00:59:33','2014-07-02 00:59:33','brand','diamond',31),(17,'2014-07-02 00:59:43','2014-07-02 00:59:43','brand','diamond',32),(18,'2014-07-02 00:59:56','2014-07-02 00:59:56','brand','diamond',33),(19,'2014-07-02 01:11:54','2014-07-02 01:11:54','brand','dazze',34),(20,'2014-07-02 01:12:09','2014-07-02 01:12:09','brand','dzzit',35);
/*!40000 ALTER TABLE `field` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `media` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `uri` varchar(255) DEFAULT NULL,
  `cdate` datetime DEFAULT NULL,
  `mdate` datetime DEFAULT NULL,
  `type` varchar(45) DEFAULT '',
  `cid` int(11) DEFAULT NULL,
  `field_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB AUTO_INCREMENT=523 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media`
--

LOCK TABLES `media` WRITE;
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
INSERT INTO `media` VALUES (510,'cec6ccf0c383d5a84ddaa3b852e84dcc','s:44:\"/upload/cec6ccf0c383d5a84ddaa3b852e84dcc.png\";','2014-07-02 00:17:22','2014-07-02 00:17:22','lookbook',23,'image'),(511,'d26e9fbace95e41686d12de09d5f178e','s:44:\"/upload/d26e9fbace95e41686d12de09d5f178e.png\";','2014-07-02 00:31:49','2014-07-02 00:31:49','lookbook',24,'image'),(512,'da26f8ae0c4f99f54ac57861ece6653c','s:44:\"/upload/da26f8ae0c4f99f54ac57861ece6653c.png\";','2014-07-02 00:32:32','2014-07-02 00:32:32','lookbook',25,'image'),(513,'22abe094dcd61fac3f22fa4405dcd358','s:44:\"/upload/22abe094dcd61fac3f22fa4405dcd358.png\";','2014-07-02 00:50:35','2014-07-02 00:50:35','lookbook',26,'image'),(514,'164c62334fb6b7e20b775da72884b646','s:44:\"/upload/164c62334fb6b7e20b775da72884b646.png\";','2014-07-02 00:50:43','2014-07-02 00:50:43','lookbook',27,'image'),(515,'ba963b72fc07145e81f2775d21a86822','s:44:\"/upload/ba963b72fc07145e81f2775d21a86822.png\";','2014-07-02 00:57:43','2014-07-02 00:57:43','lookbook',28,'image'),(516,'3ebeaea16f303e7dd83a4acd9a6868da','s:44:\"/upload/3ebeaea16f303e7dd83a4acd9a6868da.png\";','2014-07-02 00:58:38','2014-07-02 00:58:38','lookbook',29,'image'),(517,'d6f92a433114b7d6b4d26f4515779712','s:44:\"/upload/d6f92a433114b7d6b4d26f4515779712.png\";','2014-07-02 00:58:59','2014-07-02 00:58:59','lookbook',30,'image'),(518,'a8c46a966576f7c877e291444bf2a013','s:44:\"/upload/a8c46a966576f7c877e291444bf2a013.png\";','2014-07-02 00:59:33','2014-07-02 00:59:33','lookbook',31,'image'),(519,'78cc3fcd9f3935ef97a66b1c9b2ebe8f','s:44:\"/upload/78cc3fcd9f3935ef97a66b1c9b2ebe8f.png\";','2014-07-02 00:59:43','2014-07-02 00:59:43','lookbook',32,'image'),(520,'93c6577f76f72e644a056aebac5f26b7','s:44:\"/upload/93c6577f76f72e644a056aebac5f26b7.png\";','2014-07-02 00:59:56','2014-07-02 00:59:56','lookbook',33,'image'),(521,'1d41c664e7c398d04a9e3d86bfc122a2','s:44:\"/upload/1d41c664e7c398d04a9e3d86bfc122a2.png\";','2014-07-02 01:11:54','2014-07-02 01:11:54','lookbook',34,'image'),(522,'5f457228a8a8d89d82c23bb860e0c4b3','s:44:\"/upload/5f457228a8a8d89d82c23bb860e0c4b3.png\";','2014-07-02 01:12:09','2014-07-02 01:12:09','lookbook',35,'image');
/*!40000 ALTER TABLE `media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `session`
--

DROP TABLE IF EXISTS `session`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `session` (
  `id` char(32) NOT NULL,
  `expire` int(11) DEFAULT NULL,
  `data` longblob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `session`
--

LOCK TABLES `session` WRITE;
/*!40000 ALTER TABLE `session` DISABLE KEYS */;
INSERT INTO `session` VALUES ('4veom65rtrs9miop3dpphi0gu0',1404321726,'login|b:1;');
/*!40000 ALTER TABLE `session` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shop`
--

DROP TABLE IF EXISTS `shop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shop` (
  `shop_id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `distinct` varchar(50) DEFAULT NULL,
  `title` varchar(500) DEFAULT NULL,
  `address` text,
  `phone` varchar(45) DEFAULT NULL,
  `lat` varchar(45) DEFAULT NULL,
  `lng` varchar(45) DEFAULT NULL,
  `cdate` varchar(45) DEFAULT NULL,
  `mdate` varchar(45) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `type` tinyint(4) DEFAULT '0',
  `star` tinyint(4) DEFAULT '0',
  `language` varchar(10) DEFAULT 'cn',
  PRIMARY KEY (`shop_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8174 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shop`
--

LOCK TABLES `shop` WRITE;
/*!40000 ALTER TABLE `shop` DISABLE KEYS */;
/*!40000 ALTER TABLE `shop` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-07-02  1:24:19
