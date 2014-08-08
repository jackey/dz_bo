-- MySQL dump 10.13  Distrib 5.6.16, for osx10.8 (x86_64)
--
-- Host: localhost    Database: dzonline
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
-- Table structure for table `dzg_AccessMap`
--

DROP TABLE IF EXISTS `dzg_AccessMap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzg_AccessMap` (
  `dz_accessListId` int(11) NOT NULL,
  `dz_userOrGroupId` int(11) NOT NULL,
  `dz_permission` int(11) NOT NULL,
  PRIMARY KEY (`dz_accessListId`,`dz_userOrGroupId`),
  KEY `dzg_AccessMap_83732` (`dz_accessListId`),
  KEY `dzg_AccessMap_48775` (`dz_userOrGroupId`),
  KEY `dzg_AccessMap_18058` (`dz_permission`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzg_AccessMap`
--

LOCK TABLES `dzg_AccessMap` WRITE;
/*!40000 ALTER TABLE `dzg_AccessMap` DISABLE KEYS */;
INSERT INTO `dzg_AccessMap` VALUES (8,6,2147483647),(9,6,2147483647),(9,4,7),(10,4,7),(10,6,2147483647),(10,3,2147483647);
/*!40000 ALTER TABLE `dzg_AccessMap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dzg_AccessSubscriberMap`
--

DROP TABLE IF EXISTS `dzg_AccessSubscriberMap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzg_AccessSubscriberMap` (
  `dz_itemId` int(11) NOT NULL,
  `dz_accessListId` int(11) NOT NULL,
  PRIMARY KEY (`dz_itemId`),
  KEY `dzg_AccessSubscriberMap_83732` (`dz_accessListId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzg_AccessSubscriberMap`
--

LOCK TABLES `dzg_AccessSubscriberMap` WRITE;
/*!40000 ALTER TABLE `dzg_AccessSubscriberMap` DISABLE KEYS */;
INSERT INTO `dzg_AccessSubscriberMap` VALUES (7,10),(11,10),(12,10),(13,10),(14,10),(15,10),(16,10),(17,10),(18,10),(19,10);
/*!40000 ALTER TABLE `dzg_AccessSubscriberMap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dzg_AlbumItem`
--

DROP TABLE IF EXISTS `dzg_AlbumItem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzg_AlbumItem` (
  `dz_id` int(11) NOT NULL,
  `dz_theme` varchar(32) DEFAULT NULL,
  `dz_orderBy` varchar(128) DEFAULT NULL,
  `dz_orderDirection` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`dz_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzg_AlbumItem`
--

LOCK TABLES `dzg_AlbumItem` WRITE;
/*!40000 ALTER TABLE `dzg_AlbumItem` DISABLE KEYS */;
INSERT INTO `dzg_AlbumItem` VALUES (7,'','','asc'),(11,'','','asc'),(12,'','','asc'),(13,'','','asc'),(14,'','','asc'),(15,'','','asc'),(16,'','','asc'),(17,'','','asc'),(18,'','','asc'),(19,'','','asc');
/*!40000 ALTER TABLE `dzg_AlbumItem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dzg_AnimationItem`
--

DROP TABLE IF EXISTS `dzg_AnimationItem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzg_AnimationItem` (
  `dz_id` int(11) NOT NULL,
  `dz_width` int(11) DEFAULT NULL,
  `dz_height` int(11) DEFAULT NULL,
  PRIMARY KEY (`dz_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzg_AnimationItem`
--

LOCK TABLES `dzg_AnimationItem` WRITE;
/*!40000 ALTER TABLE `dzg_AnimationItem` DISABLE KEYS */;
/*!40000 ALTER TABLE `dzg_AnimationItem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dzg_CacheMap`
--

DROP TABLE IF EXISTS `dzg_CacheMap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzg_CacheMap` (
  `dz_key` varchar(32) NOT NULL,
  `dz_value` longtext,
  `dz_userId` int(11) NOT NULL,
  `dz_itemId` int(11) NOT NULL,
  `dz_type` varchar(32) NOT NULL,
  `dz_timestamp` int(11) NOT NULL,
  `dz_isEmpty` int(1) DEFAULT NULL,
  PRIMARY KEY (`dz_key`,`dz_userId`,`dz_itemId`,`dz_type`),
  KEY `dzg_CacheMap_75985` (`dz_itemId`),
  KEY `dzg_CacheMap_21979` (`dz_userId`,`dz_timestamp`,`dz_isEmpty`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzg_CacheMap`
--

LOCK TABLES `dzg_CacheMap` WRITE;
/*!40000 ALTER TABLE `dzg_CacheMap` DISABLE KEYS */;
/*!40000 ALTER TABLE `dzg_CacheMap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dzg_ChildEntity`
--

DROP TABLE IF EXISTS `dzg_ChildEntity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzg_ChildEntity` (
  `dz_id` int(11) NOT NULL,
  `dz_parentId` int(11) NOT NULL,
  PRIMARY KEY (`dz_id`),
  KEY `dzg_ChildEntity_52718` (`dz_parentId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzg_ChildEntity`
--

LOCK TABLES `dzg_ChildEntity` WRITE;
/*!40000 ALTER TABLE `dzg_ChildEntity` DISABLE KEYS */;
INSERT INTO `dzg_ChildEntity` VALUES (7,0),(11,7),(12,7),(13,7),(14,11),(15,11),(16,12),(17,12),(18,13),(19,13);
/*!40000 ALTER TABLE `dzg_ChildEntity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dzg_CustomFieldMap`
--

DROP TABLE IF EXISTS `dzg_CustomFieldMap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzg_CustomFieldMap` (
  `dz_itemId` int(11) NOT NULL,
  `dz_field` varchar(128) NOT NULL,
  `dz_value` varchar(255) DEFAULT NULL,
  `dz_setId` int(11) DEFAULT NULL,
  `dz_setType` int(11) DEFAULT NULL,
  KEY `dzg_CustomFieldMap_75985` (`dz_itemId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzg_CustomFieldMap`
--

LOCK TABLES `dzg_CustomFieldMap` WRITE;
/*!40000 ALTER TABLE `dzg_CustomFieldMap` DISABLE KEYS */;
/*!40000 ALTER TABLE `dzg_CustomFieldMap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dzg_DataItem`
--

DROP TABLE IF EXISTS `dzg_DataItem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzg_DataItem` (
  `dz_id` int(11) NOT NULL,
  `dz_mimeType` varchar(128) DEFAULT NULL,
  `dz_size` int(11) DEFAULT NULL,
  PRIMARY KEY (`dz_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzg_DataItem`
--

LOCK TABLES `dzg_DataItem` WRITE;
/*!40000 ALTER TABLE `dzg_DataItem` DISABLE KEYS */;
/*!40000 ALTER TABLE `dzg_DataItem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dzg_Derivative`
--

DROP TABLE IF EXISTS `dzg_Derivative`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzg_Derivative` (
  `dz_id` int(11) NOT NULL,
  `dz_derivativeSourceId` int(11) NOT NULL,
  `dz_derivativeOperations` varchar(255) DEFAULT NULL,
  `dz_derivativeOrder` int(11) NOT NULL,
  `dz_derivativeSize` int(11) DEFAULT NULL,
  `dz_derivativeType` int(11) NOT NULL,
  `dz_mimeType` varchar(128) NOT NULL,
  `dz_postFilterOperations` varchar(255) DEFAULT NULL,
  `dz_isBroken` int(1) DEFAULT NULL,
  PRIMARY KEY (`dz_id`),
  KEY `dzg_Derivative_85338` (`dz_derivativeSourceId`),
  KEY `dzg_Derivative_25243` (`dz_derivativeOrder`),
  KEY `dzg_Derivative_97216` (`dz_derivativeType`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzg_Derivative`
--

LOCK TABLES `dzg_Derivative` WRITE;
/*!40000 ALTER TABLE `dzg_Derivative` DISABLE KEYS */;
/*!40000 ALTER TABLE `dzg_Derivative` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dzg_DerivativeImage`
--

DROP TABLE IF EXISTS `dzg_DerivativeImage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzg_DerivativeImage` (
  `dz_id` int(11) NOT NULL,
  `dz_width` int(11) DEFAULT NULL,
  `dz_height` int(11) DEFAULT NULL,
  PRIMARY KEY (`dz_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzg_DerivativeImage`
--

LOCK TABLES `dzg_DerivativeImage` WRITE;
/*!40000 ALTER TABLE `dzg_DerivativeImage` DISABLE KEYS */;
/*!40000 ALTER TABLE `dzg_DerivativeImage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dzg_DerivativePrefsMap`
--

DROP TABLE IF EXISTS `dzg_DerivativePrefsMap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzg_DerivativePrefsMap` (
  `dz_itemId` int(11) DEFAULT NULL,
  `dz_order` int(11) DEFAULT NULL,
  `dz_derivativeType` int(11) DEFAULT NULL,
  `dz_derivativeOperations` varchar(255) DEFAULT NULL,
  KEY `dzg_DerivativePrefsMap_75985` (`dz_itemId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzg_DerivativePrefsMap`
--

LOCK TABLES `dzg_DerivativePrefsMap` WRITE;
/*!40000 ALTER TABLE `dzg_DerivativePrefsMap` DISABLE KEYS */;
INSERT INTO `dzg_DerivativePrefsMap` VALUES (7,0,1,'thumbnail|150'),(11,0,1,'thumbnail|150'),(12,0,1,'thumbnail|150'),(13,0,1,'thumbnail|150'),(11,0,2,'scale|560,935'),(14,0,1,'thumbnail|150'),(14,0,2,'scale|560,935'),(15,0,2,'scale|560,935'),(15,0,1,'thumbnail|150'),(7,0,2,'scale|560,935'),(12,0,2,'scale|560,935'),(13,0,2,'scale|560,935'),(16,0,1,'thumbnail|150'),(16,0,2,'scale|560,935'),(17,0,1,'thumbnail|150'),(17,0,2,'scale|560,935'),(18,0,1,'thumbnail|150'),(18,0,2,'scale|560,935'),(19,0,1,'thumbnail|150'),(19,0,2,'scale|560,935');
/*!40000 ALTER TABLE `dzg_DerivativePrefsMap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dzg_DescendentCountsMap`
--

DROP TABLE IF EXISTS `dzg_DescendentCountsMap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzg_DescendentCountsMap` (
  `dz_userId` int(11) NOT NULL,
  `dz_itemId` int(11) NOT NULL,
  `dz_descendentCount` int(11) NOT NULL,
  PRIMARY KEY (`dz_userId`,`dz_itemId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzg_DescendentCountsMap`
--

LOCK TABLES `dzg_DescendentCountsMap` WRITE;
/*!40000 ALTER TABLE `dzg_DescendentCountsMap` DISABLE KEYS */;
INSERT INTO `dzg_DescendentCountsMap` VALUES (5,12,2),(6,16,0),(6,18,0),(6,15,0),(6,12,2),(6,17,0),(6,13,2),(5,13,2),(6,14,0),(5,15,0);
/*!40000 ALTER TABLE `dzg_DescendentCountsMap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dzg_Entity`
--

DROP TABLE IF EXISTS `dzg_Entity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzg_Entity` (
  `dz_id` int(11) NOT NULL,
  `dz_creationTimestamp` int(11) NOT NULL,
  `dz_isLinkable` int(1) NOT NULL,
  `dz_linkId` int(11) DEFAULT NULL,
  `dz_modificationTimestamp` int(11) NOT NULL,
  `dz_serialNumber` int(11) NOT NULL,
  `dz_entityType` varchar(32) NOT NULL,
  `dz_onLoadHandlers` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`dz_id`),
  KEY `dzg_Entity_76255` (`dz_creationTimestamp`),
  KEY `dzg_Entity_35978` (`dz_isLinkable`),
  KEY `dzg_Entity_44738` (`dz_linkId`),
  KEY `dzg_Entity_63025` (`dz_modificationTimestamp`),
  KEY `dzg_Entity_60702` (`dz_serialNumber`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzg_Entity`
--

LOCK TABLES `dzg_Entity` WRITE;
/*!40000 ALTER TABLE `dzg_Entity` DISABLE KEYS */;
INSERT INTO `dzg_Entity` VALUES (1,1402940308,0,NULL,1402940308,1,'GalleryEntity',NULL),(2,1402940308,0,NULL,1402940308,1,'GalleryGroup',NULL),(3,1402940308,0,NULL,1402940308,1,'GalleryGroup',NULL),(4,1402940308,0,NULL,1402940308,1,'GalleryGroup',NULL),(5,1402940308,0,NULL,1402940308,1,'GalleryUser',NULL),(6,1402940308,0,NULL,1402940308,1,'GalleryUser',NULL),(7,1402940308,0,NULL,1402940987,4,'GalleryAlbumItem',NULL),(11,1402940938,0,NULL,1402941286,3,'GalleryAlbumItem',NULL),(12,1402940967,0,NULL,1402941386,3,'GalleryAlbumItem',NULL),(13,1402940987,0,NULL,1402941410,3,'GalleryAlbumItem',NULL),(14,1402941249,0,NULL,1402947376,5,'GalleryAlbumItem',NULL),(15,1402941286,0,NULL,1402941286,1,'GalleryAlbumItem',NULL),(16,1402941378,0,NULL,1402941378,1,'GalleryAlbumItem',NULL),(17,1402941386,0,NULL,1402941386,1,'GalleryAlbumItem',NULL),(18,1402941402,0,NULL,1402941402,1,'GalleryAlbumItem',NULL),(19,1402941410,0,NULL,1402941410,1,'GalleryAlbumItem',NULL);
/*!40000 ALTER TABLE `dzg_Entity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dzg_EventLogMap`
--

DROP TABLE IF EXISTS `dzg_EventLogMap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzg_EventLogMap` (
  `dz_id` int(11) NOT NULL,
  `dz_userId` int(11) DEFAULT NULL,
  `dz_type` varchar(32) DEFAULT NULL,
  `dz_summary` varchar(255) DEFAULT NULL,
  `dz_details` text,
  `dz_location` varchar(255) DEFAULT NULL,
  `dz_client` varchar(128) DEFAULT NULL,
  `dz_timestamp` int(11) NOT NULL,
  `dz_referer` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`dz_id`),
  KEY `dzg_EventLogMap_24286` (`dz_timestamp`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzg_EventLogMap`
--

LOCK TABLES `dzg_EventLogMap` WRITE;
/*!40000 ALTER TABLE `dzg_EventLogMap` DISABLE KEYS */;
/*!40000 ALTER TABLE `dzg_EventLogMap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dzg_ExternalIdMap`
--

DROP TABLE IF EXISTS `dzg_ExternalIdMap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzg_ExternalIdMap` (
  `dz_externalId` varchar(128) NOT NULL,
  `dz_entityType` varchar(32) NOT NULL,
  `dz_entityId` int(11) NOT NULL,
  PRIMARY KEY (`dz_externalId`,`dz_entityType`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzg_ExternalIdMap`
--

LOCK TABLES `dzg_ExternalIdMap` WRITE;
/*!40000 ALTER TABLE `dzg_ExternalIdMap` DISABLE KEYS */;
/*!40000 ALTER TABLE `dzg_ExternalIdMap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dzg_FactoryMap`
--

DROP TABLE IF EXISTS `dzg_FactoryMap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzg_FactoryMap` (
  `dz_classType` varchar(128) DEFAULT NULL,
  `dz_className` varchar(128) DEFAULT NULL,
  `dz_implId` varchar(128) DEFAULT NULL,
  `dz_implPath` varchar(128) DEFAULT NULL,
  `dz_implModuleId` varchar(128) DEFAULT NULL,
  `dz_hints` varchar(255) DEFAULT NULL,
  `dz_orderWeight` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzg_FactoryMap`
--

LOCK TABLES `dzg_FactoryMap` WRITE;
/*!40000 ALTER TABLE `dzg_FactoryMap` DISABLE KEYS */;
INSERT INTO `dzg_FactoryMap` VALUES ('MaintenanceTask','DeleteSessionsTask','DeleteSessionsTask','modules/core/classes/DeleteSessionsTask.class','core','N;','4'),('MaintenanceTask','SetOriginationTimestampTask','SetOriginationTimestampTask','modules/core/classes/SetOriginationTimestampTask.class','core','N;','4'),('MaintenanceTask','SystemInfoTask','SystemInfoTask','modules/core/classes/SystemInfoTask.class','core','N;','4'),('MaintenanceTask','ResetViewCountsTask','ResetViewCountsTask','modules/core/classes/ResetViewCountsTask.class','core','N;','4'),('MaintenanceTask','BuildDerivativesTask','BuildDerivativesTask','modules/core/classes/BuildDerivativesTask.class','core','N;','4'),('MaintenanceTask','FlushDatabaseCacheTask','FlushDatabaseCacheTask','modules/core/classes/FlushDatabaseCacheTask.class','core','N;','4'),('MaintenanceTask','FlushTemplatesTask','FlushTemplatesTask','modules/core/classes/FlushTemplatesTask.class','core','N;','4'),('MaintenanceTask','DatabaseBackupTask','DatabaseBackupTask','modules/core/classes/DatabaseBackupTask.class','core','N;','4'),('MaintenanceTask','OptimizeDatabaseTask','OptimizeDatabaseTask','modules/core/classes/OptimizeDatabaseTask.class','core','N;','4'),('ItemAddOption','CreateThumbnailOption','CreateThumbnailOption','modules/core/CreateThumbnailOption.inc','core','N;','8'),('ItemAddPlugin','ItemAddFromBrowser','ItemAddFromBrowser','modules/core/ItemAddFromBrowser.inc','core','N;','2'),('ItemEditPlugin','ItemEditRotateAndScalePhoto','ItemEditRotateAndScalePhoto','modules/core/ItemEditRotateAndScalePhoto.inc','core','N;','3'),('ItemEditPlugin','ItemEditPhotoThumbnail','ItemEditPhotoThumbnail','modules/core/ItemEditPhotoThumbnail.inc','core','N;','4'),('ItemEditPlugin','ItemEditPhoto','ItemEditPhoto','modules/core/ItemEditPhoto.inc','core','N;','2'),('ItemEditPlugin','ItemEditTheme','ItemEditTheme','modules/core/ItemEditTheme.inc','core','N;','3'),('ItemEditPlugin','ItemEditAlbum','ItemEditAlbum','modules/core/ItemEditAlbum.inc','core','N;','2'),('ItemEditPlugin','ItemEditMovie','ItemEditMovie','modules/core/ItemEditMovie.inc','core','N;','2'),('ItemEditPlugin','ItemEditAnimation','ItemEditAnimation','modules/core/ItemEditAnimation.inc','core','N;','2'),('ItemEditPlugin','ItemEditItem','ItemEditItem','modules/core/ItemEditItem.inc','core','N;','1'),('GallerySearchInterface_1_0','GalleryCoreSearch','GalleryCoreSearch','modules/core/classes/GalleryCoreSearch.class','core','N;','4'),('GalleryDynamicAlbum','GalleryDynamicAlbum','GalleryDynamicAlbum','modules/core/classes/GalleryDynamicAlbum.class','core','N;','4'),('GalleryItem','GalleryUnknownItem','GalleryUnknownItem','modules/core/classes/GalleryUnknownItem.class','core','a:1:{i:0;s:1:\"*\";}','4'),('GalleryItem','GalleryAnimationItem','GalleryAnimationItem','modules/core/classes/GalleryAnimationItem.class','core','a:2:{i:0;s:22:\"application/x-director\";i:1;s:29:\"application/x-shockwave-flash\";}','4'),('GalleryItem','GalleryMovieItem','GalleryMovieItem','modules/core/classes/GalleryMovieItem.class','core','a:1:{i:0;s:7:\"video/*\";}','4'),('GalleryItem','GalleryPhotoItem','GalleryPhotoItem','modules/core/classes/GalleryPhotoItem.class','core','a:2:{i:0;s:7:\"image/*\";i:1;s:21:\"application/photoshop\";}','4'),('GalleryEntity','GalleryUnknownItem','GalleryUnknownItem','modules/core/classes/GalleryUnknownItem.class','core','N;','4'),('GalleryEntity','GalleryPhotoItem','GalleryPhotoItem','modules/core/classes/GalleryPhotoItem.class','core','N;','4'),('GalleryEntity','GalleryAnimationItem','GalleryAnimationItem','modules/core/classes/GalleryAnimationItem.class','core','N;','4'),('GalleryEntity','GalleryMovieItem','GalleryMovieItem','modules/core/classes/GalleryMovieItem.class','core','N;','4'),('GalleryDerivative','GalleryDerivativeImage','GalleryDerivativeImage','modules/core/classes/GalleryDerivativeImage.class','core','a:1:{i:0;s:1:\"*\";}','4'),('GalleryEntity','GalleryDerivativeImage','GalleryDerivativeImage','modules/core/classes/GalleryDerivativeImage.class','core','N;','4'),('GalleryEntity','GalleryDerivative','GalleryDerivative','modules/core/classes/GalleryDerivative.class','core','N;','4'),('GalleryEntity','GalleryGroup','GalleryGroup','modules/core/classes/GalleryGroup.class','core','N;','4'),('GalleryEntity','GalleryAlbumItem','GalleryAlbumItem','modules/core/classes/GalleryAlbumItem.class','core','N;','4'),('GalleryEntity','GalleryUser','GalleryUser','modules/core/classes/GalleryUser.class','core','N;','4'),('GalleryEntity','GalleryEntity','GalleryEntity','modules/core/classes/GalleryEntity.class','core','N;','4'),('GalleryEntity','GalleryChildEntity','GalleryChildEntity','modules/core/classes/GalleryChildEntity.class','core','N;','4'),('MaintenanceTask','ConvertDatabaseToUtf8Task','ConvertDatabaseToUtf8Task','modules/core/classes/ConvertDatabaseToUtf8Task.class','core','N;','4'),('CaptchaAdminOption','CoreCaptchaAdminOption','CoreCaptchaAdminOption','modules/core/classes/CoreCaptchaAdminOption.class','core','N;','4'),('GalleryAuthPlugin','SessionAuthPlugin','SessionAuthPlugin','modules/core/classes/GallerySession.class','core','N;','4'),('GalleryEventListener','GalleryItemHelper_medium','GalleryItemHelper_medium','modules/core/classes/helpers/GalleryItemHelper_medium.class','core','a:4:{i:0;s:27:\"gallery::viewabletreechange\";i:1;s:25:\"gallery::removepermission\";i:2;s:19:\"galleryentity::save\";i:3;s:21:\"galleryentity::delete\";}','4'),('GalleryEventListener','GalleryUserHelper_medium','GalleryUserHelper_medium','modules/core/classes/helpers/GalleryUserHelper_medium.class','core','a:2:{i:0;s:20:\"gallery::failedlogin\";i:1;s:14:\"gallery::login\";}','4'),('ItemEditPlugin','CustomFieldItemEdit','CustomFieldItemEdit','modules/customfield/CustomFieldItemEdit.inc','customfield','N;','5'),('CustomFieldInterface_1_0','CustomFieldHelper','CustomField','modules/customfield/classes/CustomFieldHelper.class','customfield','N;','5'),('GallerySearchInterface_1_0','CustomFieldSearch','CustomField','modules/customfield/classes/CustomFieldSearch.class','customfield','N;','5'),('GalleryEventListener','CustomFieldHelper','CustomFieldHelper','modules/customfield/classes/CustomFieldHelper.class','customfield','a:1:{i:0;s:21:\"galleryentity::delete\";}','5'),('GalleryAuthPlugin','HttpAuthPlugin','HttpAuthPlugin','modules/httpauth/classes/HttpAuthPlugin.class','httpauth','N;','5'),('HttpAuthInterface_1_0','HttpAuthHelper','HttpAuthInterface','modules/httpauth/classes/HttpAuthHelper.class','httpauth','N;','5'),('GalleryEventListener','HttpAuthModule','HttpAuthModule','modules/httpauth/module.inc','httpauth','a:3:{i:0;s:23:\"gallery::activateplugin\";i:1;s:14:\"gallery::error\";i:2;s:15:\"gallery::logout\";}','5');
/*!40000 ALTER TABLE `dzg_FactoryMap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dzg_FailedLoginsMap`
--

DROP TABLE IF EXISTS `dzg_FailedLoginsMap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzg_FailedLoginsMap` (
  `dz_userName` varchar(32) NOT NULL,
  `dz_count` int(11) NOT NULL,
  `dz_lastAttempt` int(11) NOT NULL,
  PRIMARY KEY (`dz_userName`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzg_FailedLoginsMap`
--

LOCK TABLES `dzg_FailedLoginsMap` WRITE;
/*!40000 ALTER TABLE `dzg_FailedLoginsMap` DISABLE KEYS */;
/*!40000 ALTER TABLE `dzg_FailedLoginsMap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dzg_FileSystemEntity`
--

DROP TABLE IF EXISTS `dzg_FileSystemEntity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzg_FileSystemEntity` (
  `dz_id` int(11) NOT NULL,
  `dz_pathComponent` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`dz_id`),
  KEY `dzg_FileSystemEntity_3406` (`dz_pathComponent`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzg_FileSystemEntity`
--

LOCK TABLES `dzg_FileSystemEntity` WRITE;
/*!40000 ALTER TABLE `dzg_FileSystemEntity` DISABLE KEYS */;
INSERT INTO `dzg_FileSystemEntity` VALUES (7,NULL),(11,'dazzle'),(12,'dzzit'),(13,'diamond'),(14,'lookbook'),(15,'newarrival'),(16,'lookbook'),(17,'newarrival'),(18,'lookbook'),(19,'newarrival');
/*!40000 ALTER TABLE `dzg_FileSystemEntity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dzg_Group`
--

DROP TABLE IF EXISTS `dzg_Group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzg_Group` (
  `dz_id` int(11) NOT NULL,
  `dz_groupType` int(11) NOT NULL,
  `dz_groupName` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`dz_id`),
  UNIQUE KEY `dz_groupName` (`dz_groupName`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzg_Group`
--

LOCK TABLES `dzg_Group` WRITE;
/*!40000 ALTER TABLE `dzg_Group` DISABLE KEYS */;
INSERT INTO `dzg_Group` VALUES (2,2,'Registered Users'),(3,3,'Site Admins'),(4,4,'Everybody');
/*!40000 ALTER TABLE `dzg_Group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dzg_Item`
--

DROP TABLE IF EXISTS `dzg_Item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzg_Item` (
  `dz_id` int(11) NOT NULL,
  `dz_canContainChildren` int(1) NOT NULL,
  `dz_description` text,
  `dz_keywords` varchar(255) DEFAULT NULL,
  `dz_ownerId` int(11) NOT NULL,
  `dz_renderer` varchar(128) DEFAULT NULL,
  `dz_summary` varchar(255) DEFAULT NULL,
  `dz_title` varchar(128) DEFAULT NULL,
  `dz_viewedSinceTimestamp` int(11) NOT NULL,
  `dz_originationTimestamp` int(11) NOT NULL,
  PRIMARY KEY (`dz_id`),
  KEY `dzg_Item_99070` (`dz_keywords`),
  KEY `dzg_Item_21573` (`dz_ownerId`),
  KEY `dzg_Item_54147` (`dz_summary`),
  KEY `dzg_Item_90059` (`dz_title`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzg_Item`
--

LOCK TABLES `dzg_Item` WRITE;
/*!40000 ALTER TABLE `dzg_Item` DISABLE KEYS */;
INSERT INTO `dzg_Item` VALUES (7,1,'This is the main page of your Gallery',NULL,6,NULL,NULL,'Gallery',1402940308,1402940308),(11,1,'','',6,NULL,'','',1402940938,1402940938),(12,1,'','',6,NULL,'','',1402940967,1402940967),(13,1,'','',6,NULL,'','',1402940987,1402940987),(14,1,'','',6,NULL,'','',1402941249,1402941249),(15,1,'','',6,NULL,'','',1402941286,1402941286),(16,1,'','',6,NULL,'','',1402941378,1402941378),(17,1,'','',6,NULL,'','',1402941386,1402941386),(18,1,'','',6,NULL,'','',1402941402,1402941402),(19,1,'','',6,NULL,'','',1402941410,1402941410);
/*!40000 ALTER TABLE `dzg_Item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dzg_ItemAttributesMap`
--

DROP TABLE IF EXISTS `dzg_ItemAttributesMap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzg_ItemAttributesMap` (
  `dz_itemId` int(11) NOT NULL,
  `dz_viewCount` int(11) DEFAULT NULL,
  `dz_orderWeight` int(11) DEFAULT NULL,
  `dz_parentSequence` varchar(255) NOT NULL,
  PRIMARY KEY (`dz_itemId`),
  KEY `dzg_ItemAttributesMap_95270` (`dz_parentSequence`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzg_ItemAttributesMap`
--

LOCK TABLES `dzg_ItemAttributesMap` WRITE;
/*!40000 ALTER TABLE `dzg_ItemAttributesMap` DISABLE KEYS */;
INSERT INTO `dzg_ItemAttributesMap` VALUES (7,3,0,''),(11,2,1000,'7/'),(12,1,2000,'7/'),(13,1,3000,'7/'),(14,2,1000,'7/11/'),(15,0,2000,'7/11/'),(16,0,1000,'7/12/'),(17,0,2000,'7/12/'),(18,0,1000,'7/13/'),(19,0,2000,'7/13/');
/*!40000 ALTER TABLE `dzg_ItemAttributesMap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dzg_Lock`
--

DROP TABLE IF EXISTS `dzg_Lock`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzg_Lock` (
  `dz_lockId` int(11) DEFAULT NULL,
  `dz_readEntityId` int(11) DEFAULT NULL,
  `dz_writeEntityId` int(11) DEFAULT NULL,
  `dz_freshUntil` int(11) DEFAULT NULL,
  `dz_request` int(11) DEFAULT NULL,
  KEY `dzg_Lock_11039` (`dz_lockId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzg_Lock`
--

LOCK TABLES `dzg_Lock` WRITE;
/*!40000 ALTER TABLE `dzg_Lock` DISABLE KEYS */;
/*!40000 ALTER TABLE `dzg_Lock` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dzg_MaintenanceMap`
--

DROP TABLE IF EXISTS `dzg_MaintenanceMap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzg_MaintenanceMap` (
  `dz_runId` int(11) NOT NULL,
  `dz_taskId` varchar(128) NOT NULL,
  `dz_timestamp` int(11) DEFAULT NULL,
  `dz_success` int(1) DEFAULT NULL,
  `dz_details` text,
  PRIMARY KEY (`dz_runId`),
  KEY `dzg_MaintenanceMap_21687` (`dz_taskId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzg_MaintenanceMap`
--

LOCK TABLES `dzg_MaintenanceMap` WRITE;
/*!40000 ALTER TABLE `dzg_MaintenanceMap` DISABLE KEYS */;
/*!40000 ALTER TABLE `dzg_MaintenanceMap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dzg_MimeTypeMap`
--

DROP TABLE IF EXISTS `dzg_MimeTypeMap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzg_MimeTypeMap` (
  `dz_extension` varchar(32) NOT NULL,
  `dz_mimeType` varchar(128) NOT NULL,
  `dz_viewable` int(1) DEFAULT NULL,
  PRIMARY KEY (`dz_extension`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzg_MimeTypeMap`
--

LOCK TABLES `dzg_MimeTypeMap` WRITE;
/*!40000 ALTER TABLE `dzg_MimeTypeMap` DISABLE KEYS */;
INSERT INTO `dzg_MimeTypeMap` VALUES ('z','application/x-compress',0),('ai','application/postscript',0),('aif','audio/x-aiff',0),('aifc','audio/x-aiff',0),('aiff','audio/x-aiff',0),('asc','text/plain',0),('au','audio/basic',0),('avi','video/x-msvideo',0),('bcpio','application/x-bcpio',0),('bin','application/octet-stream',0),('bmp','image/bmp',0),('cdf','application/x-netcdf',0),('class','application/octet-stream',0),('cpio','application/x-cpio',0),('cpt','application/mac-compactpro',0),('csh','application/x-csh',0),('css','text/css',0),('dcr','application/x-director',0),('dir','application/x-director',0),('djv','image/vnd.djvu',0),('djvu','image/vnd.djvu',0),('dll','application/octet-stream',0),('dms','application/octet-stream',0),('doc','application/msword',0),('dvi','application/x-dvi',0),('dxr','application/x-director',0),('eps','application/postscript',0),('etx','text/x-setext',0),('exe','application/octet-stream',0),('ez','application/andrew-inset',0),('gif','image/gif',1),('gtar','application/x-gtar',0),('gz','application/x-gzip',0),('hdf','application/x-hdf',0),('hqx','application/mac-binhex40',0),('ice','x-conference/x-cooltalk',0),('ief','image/ief',0),('iges','model/iges',0),('igs','model/iges',0),('jpg','image/jpeg',1),('jpeg','image/jpeg',1),('jpe','image/jpeg',1),('js','application/x-javascript',0),('kar','audio/midi',0),('latex','application/x-latex',0),('lha','application/octet-stream',0),('lzh','application/octet-stream',0),('m3u','audio/x-mpegurl',0),('man','application/x-troff-man',0),('me','application/x-troff-me',0),('mesh','model/mesh',0),('mid','audio/midi',0),('midi','audio/midi',0),('mif','application/vnd.mif',0),('mov','video/quicktime',0),('movie','video/x-sgi-movie',0),('mp2','audio/mpeg',0),('mp3','audio/mpeg',0),('mpe','video/mpeg',0),('mpeg','video/mpeg',0),('mpg','video/mpeg',0),('mpga','audio/mpeg',0),('ms','application/x-troff-ms',0),('msh','model/mesh',0),('mxu','video/vnd.mpegurl',0),('nc','application/x-netcdf',0),('oda','application/oda',0),('pbm','image/x-portable-bitmap',0),('pdb','chemical/x-pdb',0),('pdf','application/pdf',0),('pgm','image/x-portable-graymap',0),('pgn','application/x-chess-pgn',0),('png','image/png',1),('pnm','image/x-portable-anymap',0),('ppm','image/x-portable-pixmap',0),('ppt','application/vnd.ms-powerpoint',0),('ps','application/postscript',0),('qt','video/quicktime',0),('ra','audio/x-realaudio',0),('ram','audio/x-pn-realaudio',0),('ras','image/x-cmu-raster',0),('rgb','image/x-rgb',0),('rm','audio/x-pn-realaudio',0),('roff','application/x-troff',0),('rpm','audio/x-pn-realaudio-plugin',0),('rtf','text/rtf',0),('rtx','text/richtext',0),('sgm','text/sgml',0),('sgml','text/sgml',0),('sh','application/x-sh',0),('shar','application/x-shar',0),('silo','model/mesh',0),('sit','application/x-stuffit',0),('skd','application/x-koan',0),('skm','application/x-koan',0),('skp','application/x-koan',0),('skt','application/x-koan',0),('smi','application/smil',0),('smil','application/smil',0),('snd','audio/basic',0),('so','application/octet-stream',0),('spl','application/x-futuresplash',0),('src','application/x-wais-source',0),('sv4cpio','application/x-sv4cpio',0),('sv4crc','application/x-sv4crc',0),('svg','image/svg+xml',0),('swf','application/x-shockwave-flash',0),('t','application/x-troff',0),('tar','application/x-tar',0),('tcl','application/x-tcl',0),('tex','application/x-tex',0),('texi','application/x-texinfo',0),('texinfo','application/x-texinfo',0),('tif','image/tiff',0),('tiff','image/tiff',0),('tr','application/x-troff',0),('tsv','text/tab-separated-values',0),('txt','text/plain',0),('ustar','application/x-ustar',0),('vcd','application/x-cdlink',0),('vrml','model/vrml',0),('vsd','application/vnd.visio',0),('wav','audio/x-wav',0),('wbmp','image/vnd.wap.wbmp',0),('wbxml','application/vnd.wap.wbxml',0),('wml','text/vnd.wap.wml',0),('wmlc','application/vnd.wap.wmlc',0),('wmls','text/vnd.wap.wmlscript',0),('wmlsc','application/vnd.wap.wmlscriptc',0),('wrl','model/vrml',0),('xbm','image/x-xbitmap',0),('xls','application/vnd.ms-excel',0),('xpm','image/x-xpixmap',0),('xsl','text/xml',0),('xwd','image/x-xwindowdump',0),('xyz','chemical/x-xyz',0),('zip','application/zip',0),('asf','video/x-ms-asf',0),('asx','video/x-ms-asx',0),('wmv','video/x-ms-wmv',0),('wma','audio/x-ms-wma',0),('jp2','image/jp2',0),('jpg2','image/jp2',0),('jpf','image/jpx',0),('jpx','image/jpx',0),('mj2','video/mj2',0),('mjp2','video/mj2',0),('jpm','image/jpm',0),('jpgm','image/jpgm',0),('psd','application/photoshop',0),('pcd','image/x-photo-cd',0),('jpgcmyk','image/jpeg-cmyk',0),('tifcmyk','image/tiff-cmyk',0),('wmf','image/wmf',0),('tga','image/tga',0),('flv','video/x-flv',0),('mp4','video/mp4',0);
/*!40000 ALTER TABLE `dzg_MimeTypeMap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dzg_MovieItem`
--

DROP TABLE IF EXISTS `dzg_MovieItem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzg_MovieItem` (
  `dz_id` int(11) NOT NULL,
  `dz_width` int(11) DEFAULT NULL,
  `dz_height` int(11) DEFAULT NULL,
  `dz_duration` int(11) DEFAULT NULL,
  PRIMARY KEY (`dz_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzg_MovieItem`
--

LOCK TABLES `dzg_MovieItem` WRITE;
/*!40000 ALTER TABLE `dzg_MovieItem` DISABLE KEYS */;
/*!40000 ALTER TABLE `dzg_MovieItem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dzg_PermissionSetMap`
--

DROP TABLE IF EXISTS `dzg_PermissionSetMap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzg_PermissionSetMap` (
  `dz_module` varchar(128) NOT NULL,
  `dz_permission` varchar(128) NOT NULL,
  `dz_description` varchar(255) DEFAULT NULL,
  `dz_bits` int(11) NOT NULL,
  `dz_flags` int(11) NOT NULL,
  UNIQUE KEY `dz_permission` (`dz_permission`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzg_PermissionSetMap`
--

LOCK TABLES `dzg_PermissionSetMap` WRITE;
/*!40000 ALTER TABLE `dzg_PermissionSetMap` DISABLE KEYS */;
INSERT INTO `dzg_PermissionSetMap` VALUES ('core','core.all','All access',2147483647,3),('core','core.view','[core] View item',1,0),('core','core.viewResizes','[core] View resized version(s)',2,0),('core','core.viewSource','[core] View original version',4,0),('core','core.viewAll','[core] View all versions',7,2),('core','core.addAlbumItem','[core] Add sub-album',8,0),('core','core.addDataItem','[core] Add sub-item',16,0),('core','core.edit','[core] Edit item',32,0),('core','core.changePermissions','[core] Change item permissions',64,0),('core','core.delete','[core] Delete item',128,0);
/*!40000 ALTER TABLE `dzg_PermissionSetMap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dzg_PhotoItem`
--

DROP TABLE IF EXISTS `dzg_PhotoItem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzg_PhotoItem` (
  `dz_id` int(11) NOT NULL,
  `dz_width` int(11) DEFAULT NULL,
  `dz_height` int(11) DEFAULT NULL,
  PRIMARY KEY (`dz_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzg_PhotoItem`
--

LOCK TABLES `dzg_PhotoItem` WRITE;
/*!40000 ALTER TABLE `dzg_PhotoItem` DISABLE KEYS */;
/*!40000 ALTER TABLE `dzg_PhotoItem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dzg_PluginMap`
--

DROP TABLE IF EXISTS `dzg_PluginMap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzg_PluginMap` (
  `dz_pluginType` varchar(32) NOT NULL,
  `dz_pluginId` varchar(32) NOT NULL,
  `dz_active` int(1) NOT NULL,
  PRIMARY KEY (`dz_pluginType`,`dz_pluginId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzg_PluginMap`
--

LOCK TABLES `dzg_PluginMap` WRITE;
/*!40000 ALTER TABLE `dzg_PluginMap` DISABLE KEYS */;
INSERT INTO `dzg_PluginMap` VALUES ('theme','matrix',1),('module','core',1),('module','customfield',1),('module','httpauth',1),('module','rearrange',1);
/*!40000 ALTER TABLE `dzg_PluginMap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dzg_PluginPackageMap`
--

DROP TABLE IF EXISTS `dzg_PluginPackageMap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzg_PluginPackageMap` (
  `dz_pluginType` varchar(32) NOT NULL,
  `dz_pluginId` varchar(32) NOT NULL,
  `dz_packageName` varchar(32) NOT NULL,
  `dz_packageVersion` varchar(32) NOT NULL,
  `dz_packageBuild` varchar(32) NOT NULL,
  `dz_locked` int(1) NOT NULL,
  KEY `dzg_PluginPackageMap_80596` (`dz_pluginType`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzg_PluginPackageMap`
--

LOCK TABLES `dzg_PluginPackageMap` WRITE;
/*!40000 ALTER TABLE `dzg_PluginPackageMap` DISABLE KEYS */;
INSERT INTO `dzg_PluginPackageMap` VALUES ('theme','matrix','base','1.1.6','20955',0),('theme','matrix','lang-af','15342','18175',0),('theme','matrix','lang-ar','15342','20954',0),('theme','matrix','lang-ca','15342','18175',0),('theme','matrix','lang-cs','15342','18175',0),('theme','matrix','lang-da','15342','18175',0),('theme','matrix','lang-de','15342','18175',0),('theme','matrix','lang-el','15342','18175',0),('theme','matrix','lang-en_GB','15342','18175',0),('theme','matrix','lang-es','15342','18175',0),('theme','matrix','lang-es_AR','15342','18175',0),('theme','matrix','lang-es_MX','15342','20954',0),('theme','matrix','lang-eu','15342','18175',0),('theme','matrix','lang-fa','15342','18175',0),('theme','matrix','lang-fi','15342','18175',0),('theme','matrix','lang-fr','15342','20954',0),('theme','matrix','lang-ga','15342','20954',0),('theme','matrix','lang-he','15342','18175',0),('theme','matrix','lang-hu','15342','18175',0),('theme','matrix','lang-is','15342','20954',0),('theme','matrix','lang-it','15342','18175',0),('theme','matrix','lang-ja','15342','18175',0),('theme','matrix','lang-ko','15342','18175',0),('theme','matrix','lang-lt','15342','18175',0),('theme','matrix','lang-lv','15342','18175',0),('theme','matrix','lang-nl','15342','18175',0),('theme','matrix','lang-no','15342','18175',0),('theme','matrix','lang-pl','15342','18175',0),('theme','matrix','lang-pt','15342','20954',0),('theme','matrix','lang-pt_BR','15342','20954',0),('theme','matrix','lang-ro','15342','20954',0),('theme','matrix','lang-ru','15342','18175',0),('theme','matrix','lang-sk','15342','20954',0),('theme','matrix','lang-sr','15342','18175',0),('theme','matrix','lang-sv','15342','18175',0),('theme','matrix','lang-tr','15342','18175',0),('theme','matrix','lang-uk','15342','18175',0),('theme','matrix','lang-vi','15342','18175',0),('theme','matrix','lang-zh_CN','15342','18175',0),('theme','matrix','lang-zh_TW','15342','18175',0),('module','core','base','1.3.0.2','20997',0),('module','core','lang-af','18153','18173',0),('module','core','lang-ar','18153','18173',0),('module','core','lang-bg','18153','18173',0),('module','core','lang-ca','18153','18173',0),('module','core','lang-cs','18153','18173',0),('module','core','lang-da','18153','18173',0),('module','core','lang-de','18153','18173',0),('module','core','lang-el','18153','20954',0),('module','core','lang-en_GB','18153','18173',0),('module','core','lang-es','18153','18173',0),('module','core','lang-es_AR','18153','18173',0),('module','core','lang-es_MX','18153','18173',0),('module','core','lang-et','18153','18173',0),('module','core','lang-eu','18153','18173',0),('module','core','lang-fa','18153','18173',0),('module','core','lang-fi','18153','18173',0),('module','core','lang-fr','18153','20954',0),('module','core','lang-ga','18153','18173',0),('module','core','lang-he','18153','18173',0),('module','core','lang-hu','18153','18173',0),('module','core','lang-is','18153','18173',0),('module','core','lang-it','18153','18173',0),('module','core','lang-ja','18153','18173',0),('module','core','lang-ko','18153','18173',0),('module','core','lang-lt','18153','18173',0),('module','core','lang-lv','18153','18173',0),('module','core','lang-nl','18153','18173',0),('module','core','lang-no','18153','18173',0),('module','core','lang-pl','18153','18173',0),('module','core','lang-pt','18153','18173',0),('module','core','lang-pt_BR','18153','18173',0),('module','core','lang-ro','18153','18173',0),('module','core','lang-ru','18153','18173',0),('module','core','lang-sk','18153','20954',0),('module','core','lang-sl','18153','20954',0),('module','core','lang-sr','18153','18173',0),('module','core','lang-sv','18153','18173',0),('module','core','lang-tr','18153','18173',0),('module','core','lang-uk','18153','18173',0),('module','core','lang-vi','18153','18173',0),('module','core','lang-zh_CN','18153','18173',0),('module','core','lang-zh_TW','18153','20954',0),('module','customfield','base','1.0.13','20955',0),('module','customfield','lang-af','15447','18173',0),('module','customfield','lang-ar','15447','20954',0),('module','customfield','lang-ca','15447','18173',0),('module','customfield','lang-cs','15447','20954',0),('module','customfield','lang-da','15447','18173',0),('module','customfield','lang-de','15447','18173',0),('module','customfield','lang-el','15447','20954',0),('module','customfield','lang-en_GB','15447','18173',0),('module','customfield','lang-es','15447','18173',0),('module','customfield','lang-eu','15447','18173',0),('module','customfield','lang-fi','15447','18173',0),('module','customfield','lang-fr','15447','20954',0),('module','customfield','lang-hu','15447','18173',0),('module','customfield','lang-is','15447','20954',0),('module','customfield','lang-it','15447','18173',0),('module','customfield','lang-ja','15447','18173',0),('module','customfield','lang-ko','15447','18173',0),('module','customfield','lang-lt','15447','18173',0),('module','customfield','lang-nl','15447','18173',0),('module','customfield','lang-no','15447','18173',0),('module','customfield','lang-pl','15447','18173',0),('module','customfield','lang-ro','15447','18173',0),('module','customfield','lang-ru','15447','18173',0),('module','customfield','lang-sk','15447','18173',0),('module','customfield','lang-sr','15447','18173',0),('module','customfield','lang-sv','15447','18173',0),('module','customfield','lang-tr','15447','18173',0),('module','customfield','lang-uk','15447','18173',0),('module','customfield','lang-vi','15447','18173',0),('module','customfield','lang-zh_CN','15447','18173',0),('module','customfield','lang-zh_TW','15447','18173',0),('module','httpauth','base','1.0.4','20961',0),('module','httpauth','lang-af','15727','18173',0),('module','httpauth','lang-ar','15727','20954',0),('module','httpauth','lang-ca','15727','18173',0),('module','httpauth','lang-cs','15727','18173',0),('module','httpauth','lang-da','15727','18173',0),('module','httpauth','lang-de','15727','18173',0),('module','httpauth','lang-el','15727','20954',0),('module','httpauth','lang-en_GB','15727','18173',0),('module','httpauth','lang-es','15727','18173',0),('module','httpauth','lang-eu','15727','18173',0),('module','httpauth','lang-fi','15727','18173',0),('module','httpauth','lang-fr','15727','18173',0),('module','httpauth','lang-hu','15727','20954',0),('module','httpauth','lang-it','15727','18173',0),('module','httpauth','lang-ja','15727','18173',0),('module','httpauth','lang-ko','15727','18173',0),('module','httpauth','lang-lt','15727','18173',0),('module','httpauth','lang-no','15727','18173',0),('module','httpauth','lang-pl','15727','18173',0),('module','httpauth','lang-ro','15727','18173',0),('module','httpauth','lang-ru','15727','20954',0),('module','httpauth','lang-sk','15727','20954',0),('module','httpauth','lang-sr','15727','18173',0),('module','httpauth','lang-sv','15727','18173',0),('module','httpauth','lang-tr','15727','18173',0),('module','httpauth','lang-uk','15727','18173',0),('module','httpauth','lang-vi','15727','18173',0),('module','httpauth','lang-zh_CN','15727','18173',0),('module','httpauth','lang-zh_TW','15727','20954',0),('module','rearrange','base','1.0.9','20955',0),('module','rearrange','lang-af','15342','18174',0),('module','rearrange','lang-ar','15342','20954',0),('module','rearrange','lang-bg','15342','20954',0),('module','rearrange','lang-ca','15342','18174',0),('module','rearrange','lang-cs','15342','20954',0),('module','rearrange','lang-da','15342','18174',0),('module','rearrange','lang-de','15342','18174',0),('module','rearrange','lang-el','15342','20954',0),('module','rearrange','lang-en_GB','15342','18174',0),('module','rearrange','lang-es','15342','18174',0),('module','rearrange','lang-eu','15342','18174',0),('module','rearrange','lang-fa','15342','18174',0),('module','rearrange','lang-fi','15342','18174',0),('module','rearrange','lang-fr','15342','20954',0),('module','rearrange','lang-hu','15342','18174',0),('module','rearrange','lang-is','15342','20954',0),('module','rearrange','lang-it','15342','18174',0),('module','rearrange','lang-ja','15342','18174',0),('module','rearrange','lang-ko','15342','18174',0),('module','rearrange','lang-lt','15342','18174',0),('module','rearrange','lang-nl','15342','20954',0),('module','rearrange','lang-no','15342','18174',0),('module','rearrange','lang-pl','15342','18174',0),('module','rearrange','lang-pt_BR','15342','20954',0),('module','rearrange','lang-ro','15342','18174',0),('module','rearrange','lang-ru','15342','18174',0),('module','rearrange','lang-sk','15342','20954',0),('module','rearrange','lang-sl','15342','18174',0),('module','rearrange','lang-sr','15342','18174',0),('module','rearrange','lang-sv','15342','18174',0),('module','rearrange','lang-tr','15342','18174',0),('module','rearrange','lang-uk','15342','18174',0),('module','rearrange','lang-vi','15342','18174',0),('module','rearrange','lang-zh_CN','15342','18174',0),('module','rearrange','lang-zh_TW','15342','18174',0),('module','gd','base','1.1.6','20961',0),('module','gd','lang-af','15342','17580',0),('module','gd','lang-ar','15342','20954',0),('module','gd','lang-ca','15342','17580',0),('module','gd','lang-cs','15342','17580',0),('module','gd','lang-da','15342','17580',0),('module','gd','lang-de','15342','17580',0),('module','gd','lang-el','15342','20954',0),('module','gd','lang-en_GB','15342','17580',0),('module','gd','lang-es','15342','17594',0),('module','gd','lang-et','15342','17580',0),('module','gd','lang-eu','15342','17580',0),('module','gd','lang-fa','15342','17580',0),('module','gd','lang-fi','15342','17580',0),('module','gd','lang-fr','15342','20954',0),('module','gd','lang-hu','15342','17580',0),('module','gd','lang-is','15342','20954',0),('module','gd','lang-it','15342','17580',0),('module','gd','lang-ja','15342','17580',0),('module','gd','lang-ko','15342','17580',0),('module','gd','lang-lt','15342','17580',0),('module','gd','lang-lv','15342','17580',0),('module','gd','lang-nl','15342','17828',0),('module','gd','lang-no','15342','17580',0),('module','gd','lang-pl','15342','17580',0),('module','gd','lang-pt_BR','15342','20954',0),('module','gd','lang-ro','15342','17580',0),('module','gd','lang-ru','15342','17580',0),('module','gd','lang-sk','15342','20954',0),('module','gd','lang-sl','15342','17688',0),('module','gd','lang-sr','15342','17580',0),('module','gd','lang-sv','15342','17580',0),('module','gd','lang-tr','15342','17580',0),('module','gd','lang-uk','15342','17580',0),('module','gd','lang-vi','15342','17580',0),('module','gd','lang-zh_CN','15342','20954',0),('module','gd','lang-zh_TW','15342','20954',0),('module','multilang','base','1.0.12','20955',0),('module','multilang','lang-af','16284','18174',0),('module','multilang','lang-ar','16284','20954',0),('module','multilang','lang-ca','16284','18174',0),('module','multilang','lang-cs','16284','20954',0),('module','multilang','lang-da','16284','18174',0),('module','multilang','lang-de','16284','20954',0),('module','multilang','lang-el','16284','20954',0),('module','multilang','lang-en_GB','16284','18174',0),('module','multilang','lang-es','16284','18174',0),('module','multilang','lang-eu','16284','18174',0),('module','multilang','lang-fi','16284','18174',0),('module','multilang','lang-fr','16284','20954',0),('module','multilang','lang-hu','16284','18174',0),('module','multilang','lang-is','16284','20954',0),('module','multilang','lang-it','16284','18174',0),('module','multilang','lang-ja','16284','18174',0),('module','multilang','lang-ko','16284','18174',0),('module','multilang','lang-lt','16284','18174',0),('module','multilang','lang-nl','16284','20954',0),('module','multilang','lang-no','16284','18174',0),('module','multilang','lang-pl','16284','18174',0),('module','multilang','lang-ro','16284','18174',0),('module','multilang','lang-ru','16284','20954',0),('module','multilang','lang-sk','16284','18174',0),('module','multilang','lang-sr','16284','18174',0),('module','multilang','lang-sv','16284','18174',0),('module','multilang','lang-tr','16284','18174',0),('module','multilang','lang-uk','16284','18174',0),('module','multilang','lang-vi','16284','18174',0),('module','multilang','lang-zh_CN','16284','18174',0),('module','multilang','lang-zh_TW','16284','20954',0),('module','jpegtran','base','1.0.1','20955',0),('module','jpegtran','lang-af','17028','20954',0),('module','jpegtran','lang-ar','17028','20954',0),('module','jpegtran','lang-bg','17028','20954',0),('module','jpegtran','lang-ca','17028','18174',0),('module','jpegtran','lang-cs','17028','20954',0),('module','jpegtran','lang-da','17028','18174',0),('module','jpegtran','lang-de','17028','18174',0),('module','jpegtran','lang-el','17028','20954',0),('module','jpegtran','lang-en_GB','17028','18174',0),('module','jpegtran','lang-es','17028','18174',0),('module','jpegtran','lang-es_AR','17028','20954',0),('module','jpegtran','lang-es_MX','17028','20954',0),('module','jpegtran','lang-et','17028','18174',0),('module','jpegtran','lang-eu','17028','20954',0),('module','jpegtran','lang-fi','17028','20954',0),('module','jpegtran','lang-fr','17028','20954',0),('module','jpegtran','lang-ga','17028','20954',0),('module','jpegtran','lang-he','17028','18174',0),('module','jpegtran','lang-hu','17028','18174',0),('module','jpegtran','lang-it','17028','18174',0),('module','jpegtran','lang-ja','17028','20954',0),('module','jpegtran','lang-ko','17028','20954',0),('module','jpegtran','lang-lt','17028','18174',0),('module','jpegtran','lang-lv','17028','20954',0),('module','jpegtran','lang-nl','17028','20954',0),('module','jpegtran','lang-no','17028','20954',0),('module','jpegtran','lang-pl','17028','18174',0),('module','jpegtran','lang-pt','17028','18174',0),('module','jpegtran','lang-pt_BR','17028','20954',0),('module','jpegtran','lang-ro','17028','20954',0),('module','jpegtran','lang-ru','17028','18174',0),('module','jpegtran','lang-sk','17028','20954',0),('module','jpegtran','lang-sl','17028','18174',0),('module','jpegtran','lang-sr','17028','18174',0),('module','jpegtran','lang-sv','17028','18174',0),('module','jpegtran','lang-tr','17028','18174',0),('module','jpegtran','lang-uk','17028','18174',0),('module','jpegtran','lang-vi','17028','20954',0),('module','jpegtran','lang-zh_CN','17028','20954',0),('module','jpegtran','lang-zh_TW','17028','20954',0),('module','dcraw','base','1.0.13','20955',0),('module','dcraw','lang-af','17028','18173',0),('module','dcraw','lang-ar','17028','20954',0),('module','dcraw','lang-ca','17028','18173',0),('module','dcraw','lang-cs','17028','18173',0),('module','dcraw','lang-da','17028','18173',0),('module','dcraw','lang-de','17028','18173',0),('module','dcraw','lang-el','17028','20954',0),('module','dcraw','lang-en_GB','17028','18173',0),('module','dcraw','lang-es','17028','18173',0),('module','dcraw','lang-eu','17028','18173',0),('module','dcraw','lang-fi','17028','18173',0),('module','dcraw','lang-fr','17028','18173',0),('module','dcraw','lang-hu','17028','18173',0),('module','dcraw','lang-it','17028','18173',0),('module','dcraw','lang-ja','17028','18173',0),('module','dcraw','lang-ko','17028','18173',0),('module','dcraw','lang-lt','17028','18173',0),('module','dcraw','lang-nl','17028','18173',0),('module','dcraw','lang-no','17028','18173',0),('module','dcraw','lang-pl','17028','18173',0),('module','dcraw','lang-ro','17028','18173',0),('module','dcraw','lang-ru','17028','18173',0),('module','dcraw','lang-sk','17028','20954',0),('module','dcraw','lang-sr','17028','18173',0),('module','dcraw','lang-sv','17028','18173',0),('module','dcraw','lang-tr','17028','18173',0),('module','dcraw','lang-uk','17028','18173',0),('module','dcraw','lang-vi','17028','18173',0),('module','dcraw','lang-zh_CN','17028','18173',0),('module','dcraw','lang-zh_TW','17028','20954',0);
/*!40000 ALTER TABLE `dzg_PluginPackageMap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dzg_PluginParameterMap`
--

DROP TABLE IF EXISTS `dzg_PluginParameterMap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzg_PluginParameterMap` (
  `dz_pluginType` varchar(32) NOT NULL,
  `dz_pluginId` varchar(32) NOT NULL,
  `dz_itemId` int(11) NOT NULL,
  `dz_parameterName` varchar(128) NOT NULL,
  `dz_parameterValue` text NOT NULL,
  UNIQUE KEY `dz_pluginType` (`dz_pluginType`,`dz_pluginId`,`dz_itemId`,`dz_parameterName`),
  KEY `dzg_PluginParameterMap_80596` (`dz_pluginType`),
  KEY `dzg_PluginParameterMap_12808` (`dz_pluginType`,`dz_pluginId`,`dz_itemId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzg_PluginParameterMap`
--

LOCK TABLES `dzg_PluginParameterMap` WRITE;
/*!40000 ALTER TABLE `dzg_PluginParameterMap` DISABLE KEYS */;
INSERT INTO `dzg_PluginParameterMap` VALUES ('module','core',0,'permissions.directory','0755'),('module','core',0,'permissions.file','0644'),('module','core',0,'exec.expectedStatus','0'),('module','core',0,'exec.beNice','0'),('module','core',0,'default.orderBy','orderWeight'),('module','core',0,'default.orderDirection','1'),('module','core',0,'default.theme','matrix'),('module','core',0,'default.language','zh_CN'),('module','core',0,'language.useBrowserPref','0'),('module','core',0,'default.newAlbumsUseDefaults','false'),('module','core',0,'session.lifetime','1814400'),('module','core',0,'session.inactivityTimeout','604800'),('module','core',0,'session.siteAdministrationTimeout','1800'),('module','core',0,'misc.markup','bbcode'),('module','core',0,'lock.system','flock'),('module','core',0,'format.date','%x'),('module','core',0,'format.time','%X'),('module','core',0,'format.datetime','%c'),('module','core',0,'repository.updateTime','0'),('module','core',0,'acceleration','a:2:{s:5:\"guest\";a:1:{s:4:\"type\";s:4:\"none\";}s:4:\"user\";a:1:{s:4:\"type\";s:4:\"none\";}}'),('module','core',0,'smarty.compile_check','0'),('module','core',0,'validation.level','MEDIUM'),('module','core',0,'core.repositories','a:1:{s:8:\"released\";i:1;}'),('theme','matrix',0,'_version','1.1.6'),('theme','matrix',0,'_requiredCoreApi','7,20'),('theme','matrix',0,'_requiredThemeApi','2,4'),('theme','matrix',0,'rows','3'),('theme','matrix',0,'columns','3'),('theme','matrix',0,'showImageOwner','0'),('theme','matrix',0,'showAlbumOwner','1'),('theme','matrix',0,'showMicroThumbs','0'),('theme','matrix',0,'sidebarBlocks','a:4:{i:0;a:2:{i:0;s:18:\"search.SearchBlock\";i:1;a:1:{s:16:\"showAdvancedLink\";b:1;}}i:1;a:2:{i:0;s:14:\"core.ItemLinks\";i:1;a:1:{s:11:\"useDropdown\";b:0;}}i:2;a:2:{i:0;s:13:\"core.PeerList\";i:1;a:0:{}}i:3;a:2:{i:0;s:21:\"imageblock.ImageBlock\";i:1;a:0:{}}}'),('theme','matrix',0,'albumBlocks','a:1:{i:0;a:2:{i:0;s:20:\"comment.ViewComments\";i:1;a:0:{}}}'),('theme','matrix',0,'photoBlocks','a:2:{i:0;a:2:{i:0;s:13:\"exif.ExifInfo\";i:1;a:0:{}}i:1;a:2:{i:0;s:20:\"comment.ViewComments\";i:1;a:0:{}}}'),('theme','matrix',0,'dynamicLinks','browse'),('module','core',0,'id.accessListCompacterLock','1'),('module','core',0,'id.allUserGroup','2'),('module','core',0,'id.adminGroup','3'),('module','core',0,'id.everybodyGroup','4'),('module','core',0,'id.anonymousUser','5'),('module','core',0,'id.rootAlbum','7'),('module','core',0,'_version','1.3.0.2'),('module','core',0,'_templateVersion','1'),('module','core',0,'_callbacks','getItemLinks|getSystemLinks|getItemAdminViews|getSiteAdminViews|getUserAdminViews'),('module','core',0,'_requiredCoreApi','7,53'),('module','core',0,'_requiredModuleApi','3,8'),('module','customfield',0,'_version','1.0.13'),('module','customfield',0,'_templateVersion','1'),('module','customfield',0,'_callbacks','getSiteAdminViews|getItemSummaries'),('module','customfield',0,'_requiredCoreApi','7,34'),('module','customfield',0,'_requiredModuleApi','3,9'),('module','httpauth',0,'httpAuthPlugin','1'),('module','httpauth',0,'authName','Gallery'),('module','httpauth',0,'authtypePattern','//'),('module','httpauth',0,'usernamePattern','/^(.+\\\\)?([^\\\\@]+)(@.+)?$/'),('module','httpauth',0,'usernameReplace','$2'),('module','httpauth',0,'useGlobally',''),('module','httpauth',0,'_version','1.0.4'),('module','httpauth',0,'_templateVersion','1'),('module','httpauth',0,'_callbacks','getSiteAdminViews'),('module','httpauth',0,'_requiredCoreApi','7,34'),('module','httpauth',0,'_requiredModuleApi','3,6'),('module','rearrange',0,'_version','1.0.9'),('module','rearrange',0,'_templateVersion','1'),('module','rearrange',0,'_callbacks','getItemLinks|getItemAdminViews'),('module','rearrange',0,'_requiredCoreApi','7,27'),('module','rearrange',0,'_requiredModuleApi','3,9');
/*!40000 ALTER TABLE `dzg_PluginParameterMap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dzg_RecoverPasswordMap`
--

DROP TABLE IF EXISTS `dzg_RecoverPasswordMap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzg_RecoverPasswordMap` (
  `dz_userName` varchar(32) NOT NULL,
  `dz_authString` varchar(32) NOT NULL,
  `dz_requestExpires` int(11) NOT NULL,
  PRIMARY KEY (`dz_userName`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzg_RecoverPasswordMap`
--

LOCK TABLES `dzg_RecoverPasswordMap` WRITE;
/*!40000 ALTER TABLE `dzg_RecoverPasswordMap` DISABLE KEYS */;
/*!40000 ALTER TABLE `dzg_RecoverPasswordMap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dzg_Schema`
--

DROP TABLE IF EXISTS `dzg_Schema`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzg_Schema` (
  `dz_name` varchar(128) NOT NULL,
  `dz_major` int(11) NOT NULL,
  `dz_minor` int(11) NOT NULL,
  `dz_createSql` text,
  `dz_pluginId` varchar(32) DEFAULT NULL,
  `dz_type` varchar(32) DEFAULT NULL,
  `dz_info` text,
  PRIMARY KEY (`dz_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzg_Schema`
--

LOCK TABLES `dzg_Schema` WRITE;
/*!40000 ALTER TABLE `dzg_Schema` DISABLE KEYS */;
INSERT INTO `dzg_Schema` VALUES ('Schema',1,2,'CREATE TABLE DB_TABLE_PREFIXSchema(\n DB_COLUMN_PREFIXname varchar(128) NOT NULL,\n DB_COLUMN_PREFIXmajor int(11) NOT NULL,\n DB_COLUMN_PREFIXminor int(11) NOT NULL,\n DB_COLUMN_PREFIXcreateSql text,\n DB_COLUMN_PREFIXpluginId varchar(32),\n DB_COLUMN_PREFIXtype varchar(32),\n DB_COLUMN_PREFIXinfo text,\n PRIMARY KEY(DB_COLUMN_PREFIXname)\n) DB_TABLE_TYPE\n/*!40100 DEFAULT CHARACTER SET utf8 */;\n\nINSERT INTO DB_TABLE_PREFIXSchema (\n DB_COLUMN_PREFIXname,\n DB_COLUMN_PREFIXmajor,\n DB_COLUMN_PREFIXminor\n) VALUES(\'Schema\', 1, 2);\n\n','core',NULL,NULL),('EventLogMap',1,0,'CREATE TABLE DB_TABLE_PREFIXEventLogMap(\n DB_COLUMN_PREFIXid int(11) NOT NULL,\n DB_COLUMN_PREFIXuserId int(11),\n DB_COLUMN_PREFIXtype varchar(32),\n DB_COLUMN_PREFIXsummary varchar(255),\n DB_COLUMN_PREFIXdetails text,\n DB_COLUMN_PREFIXlocation varchar(255),\n DB_COLUMN_PREFIXclient varchar(128),\n DB_COLUMN_PREFIXtimestamp int(11) NOT NULL,\n DB_COLUMN_PREFIXreferer varchar(128),\n PRIMARY KEY(DB_COLUMN_PREFIXid),\n INDEX DB_TABLE_PREFIXEventLogMap_24286(DB_COLUMN_PREFIXtimestamp)\n) DB_TABLE_TYPE\n/*!40100 DEFAULT CHARACTER SET utf8 */;\n\nINSERT INTO DB_TABLE_PREFIXSchema (\n DB_COLUMN_PREFIXname,\n DB_COLUMN_PREFIXmajor,\n DB_COLUMN_PREFIXminor\n) VALUES(\'EventLogMap\', 1, 0);\n\n','core','map','a:1:{s:11:\"EventLogMap\";a:9:{s:2:\"id\";a:3:{s:4:\"type\";i:1;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}s:6:\"userId\";a:2:{s:4:\"type\";i:1;s:4:\"size\";i:2;}s:4:\"type\";a:2:{s:4:\"type\";i:2;s:4:\"size\";i:1;}s:7:\"summary\";a:2:{s:4:\"type\";i:2;s:4:\"size\";i:4;}s:7:\"details\";a:2:{s:4:\"type\";i:4;s:4:\"size\";i:2;}s:8:\"location\";a:2:{s:4:\"type\";i:2;s:4:\"size\";i:4;}s:6:\"client\";a:2:{s:4:\"type\";i:2;s:4:\"size\";i:2;}s:9:\"timestamp\";a:3:{s:4:\"type\";i:1;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}s:7:\"referer\";a:2:{s:4:\"type\";i:2;s:4:\"size\";i:2;}}}'),('ExternalIdMap',1,0,'CREATE TABLE DB_TABLE_PREFIXExternalIdMap(\n DB_COLUMN_PREFIXexternalId varchar(128) NOT NULL,\n DB_COLUMN_PREFIXentityType varchar(32) NOT NULL,\n DB_COLUMN_PREFIXentityId int(11) NOT NULL,\n PRIMARY KEY(DB_COLUMN_PREFIXexternalId, DB_COLUMN_PREFIXentityType)\n) DB_TABLE_TYPE\n/*!40100 DEFAULT CHARACTER SET utf8 */;\n\nINSERT INTO DB_TABLE_PREFIXSchema (\n DB_COLUMN_PREFIXname,\n DB_COLUMN_PREFIXmajor,\n DB_COLUMN_PREFIXminor\n) VALUES(\'ExternalIdMap\', 1, 0);\n\n','core','map','a:1:{s:13:\"ExternalIdMap\";a:3:{s:10:\"externalId\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}s:10:\"entityType\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:1;s:7:\"notNull\";b:1;}s:8:\"entityId\";a:3:{s:4:\"type\";i:1;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}}}'),('FailedLoginsMap',1,0,'CREATE TABLE DB_TABLE_PREFIXFailedLoginsMap(\n DB_COLUMN_PREFIXuserName varchar(32) NOT NULL,\n DB_COLUMN_PREFIXcount int(11) NOT NULL,\n DB_COLUMN_PREFIXlastAttempt int(11) NOT NULL,\n PRIMARY KEY(DB_COLUMN_PREFIXuserName)\n) DB_TABLE_TYPE\n/*!40100 DEFAULT CHARACTER SET utf8 */;\n\nINSERT INTO DB_TABLE_PREFIXSchema (\n DB_COLUMN_PREFIXname,\n DB_COLUMN_PREFIXmajor,\n DB_COLUMN_PREFIXminor\n) VALUES(\'FailedLoginsMap\', 1, 0);\n\n','core','map','a:1:{s:15:\"FailedLoginsMap\";a:3:{s:8:\"userName\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:1;s:7:\"notNull\";b:1;}s:5:\"count\";a:3:{s:4:\"type\";i:1;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}s:11:\"lastAttempt\";a:3:{s:4:\"type\";i:1;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}}}'),('AccessMap',1,3,'CREATE TABLE DB_TABLE_PREFIXAccessMap(\n DB_COLUMN_PREFIXaccessListId int(11) NOT NULL,\n DB_COLUMN_PREFIXuserOrGroupId int(11) NOT NULL,\n DB_COLUMN_PREFIXpermission int(11) NOT NULL,\n PRIMARY KEY(DB_COLUMN_PREFIXaccessListId, DB_COLUMN_PREFIXuserOrGroupId),\n INDEX DB_TABLE_PREFIXAccessMap_83732(DB_COLUMN_PREFIXaccessListId),\n INDEX DB_TABLE_PREFIXAccessMap_48775(DB_COLUMN_PREFIXuserOrGroupId),\n INDEX DB_TABLE_PREFIXAccessMap_18058(DB_COLUMN_PREFIXpermission)\n) DB_TABLE_TYPE\n/*!40100 DEFAULT CHARACTER SET utf8 */;\n\nINSERT INTO DB_TABLE_PREFIXSchema (\n DB_COLUMN_PREFIXname,\n DB_COLUMN_PREFIXmajor,\n DB_COLUMN_PREFIXminor\n) VALUES(\'AccessMap\', 1, 3);\n\n','core','map','a:1:{s:16:\"GalleryAccessMap\";a:3:{s:12:\"accessListId\";a:3:{s:4:\"type\";i:1;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}s:13:\"userOrGroupId\";a:3:{s:4:\"type\";i:1;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}s:10:\"permission\";a:3:{s:4:\"type\";i:64;s:4:\"size\";i:4;s:7:\"notNull\";b:1;}}}'),('AccessSubscriberMap',1,0,'CREATE TABLE DB_TABLE_PREFIXAccessSubscriberMap(\n DB_COLUMN_PREFIXitemId int(11) NOT NULL,\n DB_COLUMN_PREFIXaccessListId int(11) NOT NULL,\n PRIMARY KEY(DB_COLUMN_PREFIXitemId),\n INDEX DB_TABLE_PREFIXAccessSubscriberMap_83732(DB_COLUMN_PREFIXaccessListId)\n) DB_TABLE_TYPE\n/*!40100 DEFAULT CHARACTER SET utf8 */;\n\nINSERT INTO DB_TABLE_PREFIXSchema (\n DB_COLUMN_PREFIXname,\n DB_COLUMN_PREFIXmajor,\n DB_COLUMN_PREFIXminor\n) VALUES(\'AccessSubscriberMap\', 1, 0);\n\n','core','map','a:1:{s:26:\"GalleryAccessSubscriberMap\";a:2:{s:6:\"itemId\";a:3:{s:4:\"type\";i:1;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}s:12:\"accessListId\";a:3:{s:4:\"type\";i:1;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}}}'),('AlbumItem',1,1,'CREATE TABLE DB_TABLE_PREFIXAlbumItem(\n DB_COLUMN_PREFIXid int(11) NOT NULL,\n DB_COLUMN_PREFIXtheme varchar(32),\n DB_COLUMN_PREFIXorderBy varchar(128),\n DB_COLUMN_PREFIXorderDirection varchar(32),\n PRIMARY KEY(DB_COLUMN_PREFIXid)\n) DB_TABLE_TYPE\n/*!40100 DEFAULT CHARACTER SET utf8 */;\n\nINSERT INTO DB_TABLE_PREFIXSchema (\n DB_COLUMN_PREFIXname,\n DB_COLUMN_PREFIXmajor,\n DB_COLUMN_PREFIXminor\n) VALUES(\'AlbumItem\', 1, 1);\n\n','core','entity','a:1:{s:16:\"GalleryAlbumItem\";a:4:{s:7:\"members\";a:3:{s:5:\"theme\";a:2:{s:4:\"type\";i:2;s:4:\"size\";i:1;}s:7:\"orderBy\";a:2:{s:4:\"type\";i:2;s:4:\"size\";i:2;}s:14:\"orderDirection\";a:2:{s:4:\"type\";i:2;s:4:\"size\";i:1;}}s:6:\"parent\";s:11:\"GalleryItem\";s:6:\"module\";s:4:\"core\";s:6:\"linked\";a:0:{}}}'),('AnimationItem',1,0,'CREATE TABLE DB_TABLE_PREFIXAnimationItem(\n DB_COLUMN_PREFIXid int(11) NOT NULL,\n DB_COLUMN_PREFIXwidth int(11),\n DB_COLUMN_PREFIXheight int(11),\n PRIMARY KEY(DB_COLUMN_PREFIXid)\n) DB_TABLE_TYPE\n/*!40100 DEFAULT CHARACTER SET utf8 */;\n\nINSERT INTO DB_TABLE_PREFIXSchema (\n DB_COLUMN_PREFIXname,\n DB_COLUMN_PREFIXmajor,\n DB_COLUMN_PREFIXminor\n) VALUES(\'AnimationItem\', 1, 0);\n\n','core','entity','a:1:{s:20:\"GalleryAnimationItem\";a:4:{s:7:\"members\";a:2:{s:5:\"width\";a:2:{s:4:\"type\";i:1;s:15:\"external-access\";i:3;}s:6:\"height\";a:2:{s:4:\"type\";i:1;s:15:\"external-access\";i:3;}}s:6:\"parent\";s:15:\"GalleryDataItem\";s:6:\"module\";s:4:\"core\";s:6:\"linked\";a:2:{i:0;s:5:\"width\";i:1;s:6:\"height\";}}}'),('CacheMap',1,1,'CREATE TABLE DB_TABLE_PREFIXCacheMap(\n DB_COLUMN_PREFIXkey varchar(32) NOT NULL,\n DB_COLUMN_PREFIXvalue longtext,\n DB_COLUMN_PREFIXuserId int(11) NOT NULL,\n DB_COLUMN_PREFIXitemId int(11) NOT NULL,\n DB_COLUMN_PREFIXtype varchar(32) NOT NULL,\n DB_COLUMN_PREFIXtimestamp int(11) NOT NULL,\n DB_COLUMN_PREFIXisEmpty int(1),\n PRIMARY KEY(DB_COLUMN_PREFIXkey, DB_COLUMN_PREFIXuserId, DB_COLUMN_PREFIXitemId, DB_COLUMN_PREFIXtype),\n INDEX DB_TABLE_PREFIXCacheMap_75985(DB_COLUMN_PREFIXitemId),\n INDEX DB_TABLE_PREFIXCacheMap_21979(DB_COLUMN_PREFIXuserId, DB_COLUMN_PREFIXtimestamp, DB_COLUMN_PREFIXisEmpty)\n) DB_TABLE_TYPE\n/*!40100 DEFAULT CHARACTER SET utf8 */;\n\nINSERT INTO DB_TABLE_PREFIXSchema (\n DB_COLUMN_PREFIXname,\n DB_COLUMN_PREFIXmajor,\n DB_COLUMN_PREFIXminor\n) VALUES(\'CacheMap\', 1, 1);\n\n','core','map','a:1:{s:15:\"GalleryCacheMap\";a:7:{s:3:\"key\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:1;s:7:\"notNull\";b:1;}s:5:\"value\";a:2:{s:4:\"type\";i:4;s:4:\"size\";i:4;}s:6:\"userId\";a:3:{s:4:\"type\";i:1;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}s:6:\"itemId\";a:3:{s:4:\"type\";i:1;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}s:4:\"type\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:1;s:7:\"notNull\";b:1;}s:9:\"timestamp\";a:3:{s:4:\"type\";i:1;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}s:7:\"isEmpty\";a:2:{s:4:\"type\";i:8;s:4:\"size\";i:2;}}}'),('ChildEntity',1,0,'CREATE TABLE DB_TABLE_PREFIXChildEntity(\n DB_COLUMN_PREFIXid int(11) NOT NULL,\n DB_COLUMN_PREFIXparentId int(11) NOT NULL,\n PRIMARY KEY(DB_COLUMN_PREFIXid),\n INDEX DB_TABLE_PREFIXChildEntity_52718(DB_COLUMN_PREFIXparentId)\n) DB_TABLE_TYPE\n/*!40100 DEFAULT CHARACTER SET utf8 */;\n\nINSERT INTO DB_TABLE_PREFIXSchema (\n DB_COLUMN_PREFIXname,\n DB_COLUMN_PREFIXmajor,\n DB_COLUMN_PREFIXminor\n) VALUES(\'ChildEntity\', 1, 0);\n\n','core','entity','a:1:{s:18:\"GalleryChildEntity\";a:4:{s:7:\"members\";a:1:{s:8:\"parentId\";a:2:{s:4:\"type\";i:1;s:7:\"notNull\";i:1;}}s:6:\"parent\";s:13:\"GalleryEntity\";s:6:\"module\";s:4:\"core\";s:6:\"linked\";a:0:{}}}'),('DataItem',1,0,'CREATE TABLE DB_TABLE_PREFIXDataItem(\n DB_COLUMN_PREFIXid int(11) NOT NULL,\n DB_COLUMN_PREFIXmimeType varchar(128),\n DB_COLUMN_PREFIXsize int(11),\n PRIMARY KEY(DB_COLUMN_PREFIXid)\n) DB_TABLE_TYPE\n/*!40100 DEFAULT CHARACTER SET utf8 */;\n\nINSERT INTO DB_TABLE_PREFIXSchema (\n DB_COLUMN_PREFIXname,\n DB_COLUMN_PREFIXmajor,\n DB_COLUMN_PREFIXminor\n) VALUES(\'DataItem\', 1, 0);\n\n','core','entity','a:1:{s:15:\"GalleryDataItem\";a:4:{s:7:\"members\";a:2:{s:8:\"mimeType\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:2;s:15:\"external-access\";i:1;}s:4:\"size\";a:2:{s:4:\"type\";i:1;s:15:\"external-access\";i:1;}}s:6:\"parent\";s:11:\"GalleryItem\";s:6:\"module\";s:4:\"core\";s:6:\"linked\";a:2:{i:0;s:8:\"mimeType\";i:1;s:4:\"size\";}}}'),('Derivative',1,1,'CREATE TABLE DB_TABLE_PREFIXDerivative(\n DB_COLUMN_PREFIXid int(11) NOT NULL,\n DB_COLUMN_PREFIXderivativeSourceId int(11) NOT NULL,\n DB_COLUMN_PREFIXderivativeOperations varchar(255),\n DB_COLUMN_PREFIXderivativeOrder int(11) NOT NULL,\n DB_COLUMN_PREFIXderivativeSize int(11),\n DB_COLUMN_PREFIXderivativeType int(11) NOT NULL,\n DB_COLUMN_PREFIXmimeType varchar(128) NOT NULL,\n DB_COLUMN_PREFIXpostFilterOperations varchar(255),\n DB_COLUMN_PREFIXisBroken int(1),\n PRIMARY KEY(DB_COLUMN_PREFIXid),\n INDEX DB_TABLE_PREFIXDerivative_85338(DB_COLUMN_PREFIXderivativeSourceId),\n INDEX DB_TABLE_PREFIXDerivative_25243(DB_COLUMN_PREFIXderivativeOrder),\n INDEX DB_TABLE_PREFIXDerivative_97216(DB_COLUMN_PREFIXderivativeType)\n) DB_TABLE_TYPE\n/*!40100 DEFAULT CHARACTER SET utf8 */;\n\nINSERT INTO DB_TABLE_PREFIXSchema (\n DB_COLUMN_PREFIXname,\n DB_COLUMN_PREFIXmajor,\n DB_COLUMN_PREFIXminor\n) VALUES(\'Derivative\', 1, 1);\n\n','core','entity','a:1:{s:17:\"GalleryDerivative\";a:4:{s:7:\"members\";a:8:{s:18:\"derivativeSourceId\";a:3:{s:4:\"type\";i:1;s:7:\"notNull\";i:1;s:15:\"external-access\";i:1;}s:20:\"derivativeOperations\";a:2:{s:4:\"type\";i:2;s:4:\"size\";i:4;}s:15:\"derivativeOrder\";a:2:{s:4:\"type\";i:1;s:7:\"notNull\";i:1;}s:14:\"derivativeSize\";a:2:{s:4:\"type\";i:1;s:15:\"external-access\";i:1;}s:14:\"derivativeType\";a:2:{s:4:\"type\";i:1;s:7:\"notNull\";i:1;}s:8:\"mimeType\";a:4:{s:4:\"type\";i:2;s:4:\"size\";i:2;s:7:\"notNull\";i:1;s:15:\"external-access\";i:3;}s:20:\"postFilterOperations\";a:2:{s:4:\"type\";i:2;s:4:\"size\";i:4;}s:8:\"isBroken\";a:1:{s:4:\"type\";i:8;}}s:6:\"parent\";s:18:\"GalleryChildEntity\";s:6:\"module\";s:4:\"core\";s:6:\"linked\";a:0:{}}}'),('DerivativeImage',1,0,'CREATE TABLE DB_TABLE_PREFIXDerivativeImage(\n DB_COLUMN_PREFIXid int(11) NOT NULL,\n DB_COLUMN_PREFIXwidth int(11),\n DB_COLUMN_PREFIXheight int(11),\n PRIMARY KEY(DB_COLUMN_PREFIXid)\n) DB_TABLE_TYPE\n/*!40100 DEFAULT CHARACTER SET utf8 */;\n\nINSERT INTO DB_TABLE_PREFIXSchema (\n DB_COLUMN_PREFIXname,\n DB_COLUMN_PREFIXmajor,\n DB_COLUMN_PREFIXminor\n) VALUES(\'DerivativeImage\', 1, 0);\n\n','core','entity','a:1:{s:22:\"GalleryDerivativeImage\";a:4:{s:7:\"members\";a:2:{s:5:\"width\";a:2:{s:4:\"type\";i:1;s:15:\"external-access\";i:1;}s:6:\"height\";a:2:{s:4:\"type\";i:1;s:15:\"external-access\";i:1;}}s:6:\"parent\";s:17:\"GalleryDerivative\";s:6:\"module\";s:4:\"core\";s:6:\"linked\";a:0:{}}}'),('DerivativePrefsMap',1,0,'CREATE TABLE DB_TABLE_PREFIXDerivativePrefsMap(\n DB_COLUMN_PREFIXitemId int(11),\n DB_COLUMN_PREFIXorder int(11),\n DB_COLUMN_PREFIXderivativeType int(11),\n DB_COLUMN_PREFIXderivativeOperations varchar(255),\n INDEX DB_TABLE_PREFIXDerivativePrefsMap_75985(DB_COLUMN_PREFIXitemId)\n) DB_TABLE_TYPE\n/*!40100 DEFAULT CHARACTER SET utf8 */;\n\nINSERT INTO DB_TABLE_PREFIXSchema (\n DB_COLUMN_PREFIXname,\n DB_COLUMN_PREFIXmajor,\n DB_COLUMN_PREFIXminor\n) VALUES(\'DerivativePrefsMap\', 1, 0);\n\n','core','map','a:1:{s:31:\"GalleryDerivativePreferencesMap\";a:4:{s:6:\"itemId\";a:2:{s:4:\"type\";i:1;s:4:\"size\";i:2;}s:5:\"order\";a:2:{s:4:\"type\";i:1;s:4:\"size\";i:2;}s:14:\"derivativeType\";a:2:{s:4:\"type\";i:1;s:4:\"size\";i:2;}s:20:\"derivativeOperations\";a:2:{s:4:\"type\";i:2;s:4:\"size\";i:4;}}}'),('DescendentCountsMap',1,0,'CREATE TABLE DB_TABLE_PREFIXDescendentCountsMap(\n DB_COLUMN_PREFIXuserId int(11) NOT NULL,\n DB_COLUMN_PREFIXitemId int(11) NOT NULL,\n DB_COLUMN_PREFIXdescendentCount int(11) NOT NULL,\n PRIMARY KEY(DB_COLUMN_PREFIXuserId, DB_COLUMN_PREFIXitemId)\n) DB_TABLE_TYPE\n/*!40100 DEFAULT CHARACTER SET utf8 */;\n\nINSERT INTO DB_TABLE_PREFIXSchema (\n DB_COLUMN_PREFIXname,\n DB_COLUMN_PREFIXmajor,\n DB_COLUMN_PREFIXminor\n) VALUES(\'DescendentCountsMap\', 1, 0);\n\n','core','map','a:1:{s:26:\"GalleryDescendentCountsMap\";a:3:{s:6:\"userId\";a:3:{s:4:\"type\";i:1;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}s:6:\"itemId\";a:3:{s:4:\"type\";i:1;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}s:15:\"descendentCount\";a:3:{s:4:\"type\";i:1;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}}}'),('Entity',1,2,'CREATE TABLE DB_TABLE_PREFIXEntity(\n DB_COLUMN_PREFIXid int(11) NOT NULL,\n DB_COLUMN_PREFIXcreationTimestamp int(11) NOT NULL,\n DB_COLUMN_PREFIXisLinkable int(1) NOT NULL,\n DB_COLUMN_PREFIXlinkId int(11),\n DB_COLUMN_PREFIXmodificationTimestamp int(11) NOT NULL,\n DB_COLUMN_PREFIXserialNumber int(11) NOT NULL,\n DB_COLUMN_PREFIXentityType varchar(32) NOT NULL,\n DB_COLUMN_PREFIXonLoadHandlers varchar(128),\n PRIMARY KEY(DB_COLUMN_PREFIXid),\n INDEX DB_TABLE_PREFIXEntity_76255(DB_COLUMN_PREFIXcreationTimestamp),\n INDEX DB_TABLE_PREFIXEntity_35978(DB_COLUMN_PREFIXisLinkable),\n INDEX DB_TABLE_PREFIXEntity_44738(DB_COLUMN_PREFIXlinkId),\n INDEX DB_TABLE_PREFIXEntity_63025(DB_COLUMN_PREFIXmodificationTimestamp),\n INDEX DB_TABLE_PREFIXEntity_60702(DB_COLUMN_PREFIXserialNumber)\n) DB_TABLE_TYPE\n/*!40100 DEFAULT CHARACTER SET utf8 */;\n\nINSERT INTO DB_TABLE_PREFIXSchema (\n DB_COLUMN_PREFIXname,\n DB_COLUMN_PREFIXmajor,\n DB_COLUMN_PREFIXminor\n) VALUES(\'Entity\', 1, 2);\n\n','core','entity','a:1:{s:13:\"GalleryEntity\";a:4:{s:7:\"members\";a:8:{s:2:\"id\";a:3:{s:4:\"type\";i:33;s:7:\"notNull\";i:1;s:15:\"external-access\";i:1;}s:17:\"creationTimestamp\";a:3:{s:4:\"type\";i:1;s:7:\"notNull\";i:1;s:15:\"external-access\";i:3;}s:10:\"isLinkable\";a:2:{s:4:\"type\";i:8;s:7:\"notNull\";i:1;}s:6:\"linkId\";a:1:{s:4:\"type\";i:1;}s:21:\"modificationTimestamp\";a:3:{s:4:\"type\";i:1;s:7:\"notNull\";i:1;s:15:\"external-access\";i:1;}s:12:\"serialNumber\";a:3:{s:4:\"type\";i:1;s:7:\"notNull\";i:1;s:15:\"external-access\";i:1;}s:10:\"entityType\";a:4:{s:4:\"type\";i:2;s:4:\"size\";i:1;s:7:\"notNull\";i:1;s:15:\"external-access\";i:1;}s:14:\"onLoadHandlers\";a:2:{s:4:\"type\";i:2;s:4:\"size\";i:2;}}s:6:\"parent\";N;s:6:\"module\";s:4:\"core\";s:6:\"linked\";a:0:{}}}'),('FactoryMap',1,0,'CREATE TABLE DB_TABLE_PREFIXFactoryMap(\n DB_COLUMN_PREFIXclassType varchar(128),\n DB_COLUMN_PREFIXclassName varchar(128),\n DB_COLUMN_PREFIXimplId varchar(128),\n DB_COLUMN_PREFIXimplPath varchar(128),\n DB_COLUMN_PREFIXimplModuleId varchar(128),\n DB_COLUMN_PREFIXhints varchar(255),\n DB_COLUMN_PREFIXorderWeight varchar(255)\n) DB_TABLE_TYPE\n/*!40100 DEFAULT CHARACTER SET utf8 */;\n\nINSERT INTO DB_TABLE_PREFIXSchema (\n DB_COLUMN_PREFIXname,\n DB_COLUMN_PREFIXmajor,\n DB_COLUMN_PREFIXminor\n) VALUES(\'FactoryMap\', 1, 0);\n\n','core','map','a:1:{s:17:\"GalleryFactoryMap\";a:7:{s:9:\"classType\";a:2:{s:4:\"type\";i:2;s:4:\"size\";i:2;}s:9:\"className\";a:2:{s:4:\"type\";i:2;s:4:\"size\";i:2;}s:6:\"implId\";a:2:{s:4:\"type\";i:2;s:4:\"size\";i:2;}s:8:\"implPath\";a:2:{s:4:\"type\";i:2;s:4:\"size\";i:2;}s:12:\"implModuleId\";a:2:{s:4:\"type\";i:2;s:4:\"size\";i:2;}s:5:\"hints\";a:2:{s:4:\"type\";i:2;s:4:\"size\";i:4;}s:11:\"orderWeight\";a:2:{s:4:\"type\";i:2;s:4:\"size\";i:4;}}}'),('FileSystemEntity',1,0,'CREATE TABLE DB_TABLE_PREFIXFileSystemEntity(\n DB_COLUMN_PREFIXid int(11) NOT NULL,\n DB_COLUMN_PREFIXpathComponent varchar(128),\n PRIMARY KEY(DB_COLUMN_PREFIXid),\n INDEX DB_TABLE_PREFIXFileSystemEntity_3406(DB_COLUMN_PREFIXpathComponent)\n) DB_TABLE_TYPE\n/*!40100 DEFAULT CHARACTER SET utf8 */;\n\nINSERT INTO DB_TABLE_PREFIXSchema (\n DB_COLUMN_PREFIXname,\n DB_COLUMN_PREFIXmajor,\n DB_COLUMN_PREFIXminor\n) VALUES(\'FileSystemEntity\', 1, 0);\n\n','core','entity','a:1:{s:23:\"GalleryFileSystemEntity\";a:4:{s:7:\"members\";a:1:{s:13:\"pathComponent\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:2;s:15:\"external-access\";i:1;}}s:6:\"parent\";s:18:\"GalleryChildEntity\";s:6:\"module\";s:4:\"core\";s:6:\"linked\";a:0:{}}}'),('Group',1,1,'CREATE TABLE DB_TABLE_PREFIXGroup(\n DB_COLUMN_PREFIXid int(11) NOT NULL,\n DB_COLUMN_PREFIXgroupType int(11) NOT NULL,\n DB_COLUMN_PREFIXgroupName varchar(128),\n PRIMARY KEY(DB_COLUMN_PREFIXid),\n UNIQUE (DB_COLUMN_PREFIXgroupName)\n) DB_TABLE_TYPE\n/*!40100 DEFAULT CHARACTER SET utf8 */;\n\nINSERT INTO DB_TABLE_PREFIXSchema (\n DB_COLUMN_PREFIXname,\n DB_COLUMN_PREFIXmajor,\n DB_COLUMN_PREFIXminor\n) VALUES(\'Group\', 1, 1);\n\n','core','entity','a:1:{s:12:\"GalleryGroup\";a:4:{s:7:\"members\";a:2:{s:9:\"groupType\";a:2:{s:4:\"type\";i:1;s:7:\"notNull\";i:1;}s:9:\"groupName\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:2;s:15:\"external-access\";i:1;}}s:6:\"parent\";s:13:\"GalleryEntity\";s:6:\"module\";s:4:\"core\";s:6:\"linked\";a:0:{}}}'),('Item',1,2,'CREATE TABLE DB_TABLE_PREFIXItem(\n DB_COLUMN_PREFIXid int(11) NOT NULL,\n DB_COLUMN_PREFIXcanContainChildren int(1) NOT NULL,\n DB_COLUMN_PREFIXdescription text,\n DB_COLUMN_PREFIXkeywords varchar(255),\n DB_COLUMN_PREFIXownerId int(11) NOT NULL,\n DB_COLUMN_PREFIXrenderer varchar(128),\n DB_COLUMN_PREFIXsummary varchar(255),\n DB_COLUMN_PREFIXtitle varchar(128),\n DB_COLUMN_PREFIXviewedSinceTimestamp int(11) NOT NULL,\n DB_COLUMN_PREFIXoriginationTimestamp int(11) NOT NULL,\n PRIMARY KEY(DB_COLUMN_PREFIXid),\n INDEX DB_TABLE_PREFIXItem_99070(DB_COLUMN_PREFIXkeywords),\n INDEX DB_TABLE_PREFIXItem_21573(DB_COLUMN_PREFIXownerId),\n INDEX DB_TABLE_PREFIXItem_54147(DB_COLUMN_PREFIXsummary),\n INDEX DB_TABLE_PREFIXItem_90059(DB_COLUMN_PREFIXtitle)\n) DB_TABLE_TYPE\n/*!40100 DEFAULT CHARACTER SET utf8 */;\n\nINSERT INTO DB_TABLE_PREFIXSchema (\n DB_COLUMN_PREFIXname,\n DB_COLUMN_PREFIXmajor,\n DB_COLUMN_PREFIXminor\n) VALUES(\'Item\', 1, 2);\n\n','core','entity','a:1:{s:11:\"GalleryItem\";a:4:{s:7:\"members\";a:9:{s:18:\"canContainChildren\";a:3:{s:4:\"type\";i:8;s:7:\"notNull\";i:1;s:15:\"external-access\";i:1;}s:11:\"description\";a:3:{s:4:\"type\";i:4;s:4:\"size\";i:1;s:15:\"external-access\";i:3;}s:8:\"keywords\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:4;s:15:\"external-access\";i:3;}s:7:\"ownerId\";a:2:{s:4:\"type\";i:1;s:7:\"notNull\";i:1;}s:8:\"renderer\";a:2:{s:4:\"type\";i:2;s:4:\"size\";i:2;}s:7:\"summary\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:4;s:15:\"external-access\";i:3;}s:5:\"title\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:2;s:15:\"external-access\";i:3;}s:20:\"viewedSinceTimestamp\";a:3:{s:4:\"type\";i:1;s:7:\"notNull\";i:1;s:15:\"external-access\";i:1;}s:20:\"originationTimestamp\";a:3:{s:4:\"type\";i:1;s:7:\"notNull\";i:1;s:15:\"external-access\";i:3;}}s:6:\"parent\";s:23:\"GalleryFileSystemEntity\";s:6:\"module\";s:4:\"core\";s:6:\"linked\";a:0:{}}}'),('ItemAttributesMap',1,0,'CREATE TABLE DB_TABLE_PREFIXItemAttributesMap(\n DB_COLUMN_PREFIXitemId int(11) NOT NULL,\n DB_COLUMN_PREFIXviewCount int(11),\n DB_COLUMN_PREFIXorderWeight int(11),\n DB_COLUMN_PREFIXparentSequence varchar(255) NOT NULL,\n PRIMARY KEY(DB_COLUMN_PREFIXitemId),\n INDEX DB_TABLE_PREFIXItemAttributesMap_95270(DB_COLUMN_PREFIXparentSequence)\n) DB_TABLE_TYPE\n/*!40100 DEFAULT CHARACTER SET utf8 */;\n\nINSERT INTO DB_TABLE_PREFIXSchema (\n DB_COLUMN_PREFIXname,\n DB_COLUMN_PREFIXmajor,\n DB_COLUMN_PREFIXminor\n) VALUES(\'ItemAttributesMap\', 1, 0);\n\n','core','map','a:1:{s:24:\"GalleryItemAttributesMap\";a:4:{s:6:\"itemId\";a:3:{s:4:\"type\";i:1;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}s:9:\"viewCount\";a:2:{s:4:\"type\";i:1;s:4:\"size\";i:2;}s:11:\"orderWeight\";a:2:{s:4:\"type\";i:1;s:4:\"size\";i:2;}s:14:\"parentSequence\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:4;s:19:\"notNullEmptyAllowed\";b:1;}}}'),('MaintenanceMap',1,0,'CREATE TABLE DB_TABLE_PREFIXMaintenanceMap(\n DB_COLUMN_PREFIXrunId int(11) NOT NULL,\n DB_COLUMN_PREFIXtaskId varchar(128) NOT NULL,\n DB_COLUMN_PREFIXtimestamp int(11),\n DB_COLUMN_PREFIXsuccess int(1),\n DB_COLUMN_PREFIXdetails text,\n PRIMARY KEY(DB_COLUMN_PREFIXrunId),\n INDEX DB_TABLE_PREFIXMaintenanceMap_21687(DB_COLUMN_PREFIXtaskId)\n) DB_TABLE_TYPE\n/*!40100 DEFAULT CHARACTER SET utf8 */;\n\nINSERT INTO DB_TABLE_PREFIXSchema (\n DB_COLUMN_PREFIXname,\n DB_COLUMN_PREFIXmajor,\n DB_COLUMN_PREFIXminor\n) VALUES(\'MaintenanceMap\', 1, 0);\n\n','core','map','a:1:{s:21:\"GalleryMaintenanceMap\";a:5:{s:5:\"runId\";a:3:{s:4:\"type\";i:1;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}s:6:\"taskId\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}s:9:\"timestamp\";a:2:{s:4:\"type\";i:1;s:4:\"size\";i:2;}s:7:\"success\";a:2:{s:4:\"type\";i:8;s:4:\"size\";i:2;}s:7:\"details\";a:2:{s:4:\"type\";i:4;s:4:\"size\";i:1;}}}'),('MimeTypeMap',1,1,'CREATE TABLE DB_TABLE_PREFIXMimeTypeMap(\n DB_COLUMN_PREFIXextension varchar(32) NOT NULL,\n DB_COLUMN_PREFIXmimeType varchar(128) NOT NULL,\n DB_COLUMN_PREFIXviewable int(1),\n PRIMARY KEY(DB_COLUMN_PREFIXextension)\n) DB_TABLE_TYPE\n/*!40100 DEFAULT CHARACTER SET utf8 */;\n\nINSERT INTO DB_TABLE_PREFIXSchema (\n DB_COLUMN_PREFIXname,\n DB_COLUMN_PREFIXmajor,\n DB_COLUMN_PREFIXminor\n) VALUES(\'MimeTypeMap\', 1, 1);\n\n','core','map','a:1:{s:18:\"GalleryMimeTypeMap\";a:3:{s:9:\"extension\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:1;s:7:\"notNull\";b:1;}s:8:\"mimeType\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}s:8:\"viewable\";a:2:{s:4:\"type\";i:8;s:4:\"size\";i:2;}}}'),('MovieItem',1,0,'CREATE TABLE DB_TABLE_PREFIXMovieItem(\n DB_COLUMN_PREFIXid int(11) NOT NULL,\n DB_COLUMN_PREFIXwidth int(11),\n DB_COLUMN_PREFIXheight int(11),\n DB_COLUMN_PREFIXduration int(11),\n PRIMARY KEY(DB_COLUMN_PREFIXid)\n) DB_TABLE_TYPE\n/*!40100 DEFAULT CHARACTER SET utf8 */;\n\nINSERT INTO DB_TABLE_PREFIXSchema (\n DB_COLUMN_PREFIXname,\n DB_COLUMN_PREFIXmajor,\n DB_COLUMN_PREFIXminor\n) VALUES(\'MovieItem\', 1, 0);\n\n','core','entity','a:1:{s:16:\"GalleryMovieItem\";a:4:{s:7:\"members\";a:3:{s:5:\"width\";a:2:{s:4:\"type\";i:1;s:15:\"external-access\";i:3;}s:6:\"height\";a:2:{s:4:\"type\";i:1;s:15:\"external-access\";i:3;}s:8:\"duration\";a:2:{s:4:\"type\";i:1;s:15:\"external-access\";i:3;}}s:6:\"parent\";s:15:\"GalleryDataItem\";s:6:\"module\";s:4:\"core\";s:6:\"linked\";a:3:{i:0;s:5:\"width\";i:1;s:6:\"height\";i:2;s:8:\"duration\";}}}'),('PermissionSetMap',1,0,'CREATE TABLE DB_TABLE_PREFIXPermissionSetMap(\n DB_COLUMN_PREFIXmodule varchar(128) NOT NULL,\n DB_COLUMN_PREFIXpermission varchar(128) NOT NULL,\n DB_COLUMN_PREFIXdescription varchar(255),\n DB_COLUMN_PREFIXbits int(11) NOT NULL,\n DB_COLUMN_PREFIXflags int(11) NOT NULL,\n UNIQUE (DB_COLUMN_PREFIXpermission)\n) DB_TABLE_TYPE\n/*!40100 DEFAULT CHARACTER SET utf8 */;\n\nINSERT INTO DB_TABLE_PREFIXSchema (\n DB_COLUMN_PREFIXname,\n DB_COLUMN_PREFIXmajor,\n DB_COLUMN_PREFIXminor\n) VALUES(\'PermissionSetMap\', 1, 0);\n\n','core','map','a:1:{s:23:\"GalleryPermissionSetMap\";a:5:{s:6:\"module\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}s:10:\"permission\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}s:11:\"description\";a:2:{s:4:\"type\";i:2;s:4:\"size\";i:4;}s:4:\"bits\";a:3:{s:4:\"type\";i:64;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}s:5:\"flags\";a:3:{s:4:\"type\";i:1;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}}}'),('PhotoItem',1,0,'CREATE TABLE DB_TABLE_PREFIXPhotoItem(\n DB_COLUMN_PREFIXid int(11) NOT NULL,\n DB_COLUMN_PREFIXwidth int(11),\n DB_COLUMN_PREFIXheight int(11),\n PRIMARY KEY(DB_COLUMN_PREFIXid)\n) DB_TABLE_TYPE\n/*!40100 DEFAULT CHARACTER SET utf8 */;\n\nINSERT INTO DB_TABLE_PREFIXSchema (\n DB_COLUMN_PREFIXname,\n DB_COLUMN_PREFIXmajor,\n DB_COLUMN_PREFIXminor\n) VALUES(\'PhotoItem\', 1, 0);\n\n','core','entity','a:1:{s:16:\"GalleryPhotoItem\";a:4:{s:7:\"members\";a:2:{s:5:\"width\";a:2:{s:4:\"type\";i:1;s:15:\"external-access\";i:1;}s:6:\"height\";a:2:{s:4:\"type\";i:1;s:15:\"external-access\";i:1;}}s:6:\"parent\";s:15:\"GalleryDataItem\";s:6:\"module\";s:4:\"core\";s:6:\"linked\";a:2:{i:0;s:5:\"width\";i:1;s:6:\"height\";}}}'),('PluginMap',1,1,'CREATE TABLE DB_TABLE_PREFIXPluginMap(\n DB_COLUMN_PREFIXpluginType varchar(32) NOT NULL,\n DB_COLUMN_PREFIXpluginId varchar(32) NOT NULL,\n DB_COLUMN_PREFIXactive int(1) NOT NULL,\n PRIMARY KEY(DB_COLUMN_PREFIXpluginType, DB_COLUMN_PREFIXpluginId)\n) DB_TABLE_TYPE\n/*!40100 DEFAULT CHARACTER SET utf8 */;\n\nINSERT INTO DB_TABLE_PREFIXSchema (\n DB_COLUMN_PREFIXname,\n DB_COLUMN_PREFIXmajor,\n DB_COLUMN_PREFIXminor\n) VALUES(\'PluginMap\', 1, 1);\n\n','core','map','a:1:{s:16:\"GalleryPluginMap\";a:3:{s:10:\"pluginType\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:1;s:7:\"notNull\";b:1;}s:8:\"pluginId\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:1;s:7:\"notNull\";b:1;}s:6:\"active\";a:3:{s:4:\"type\";i:8;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}}}'),('PluginPackageMap',1,1,'CREATE TABLE DB_TABLE_PREFIXPluginPackageMap(\n DB_COLUMN_PREFIXpluginType varchar(32) NOT NULL,\n DB_COLUMN_PREFIXpluginId varchar(32) NOT NULL,\n DB_COLUMN_PREFIXpackageName varchar(32) NOT NULL,\n DB_COLUMN_PREFIXpackageVersion varchar(32) NOT NULL,\n DB_COLUMN_PREFIXpackageBuild varchar(32) NOT NULL,\n DB_COLUMN_PREFIXlocked int(1) NOT NULL,\n INDEX DB_TABLE_PREFIXPluginPackageMap_80596(DB_COLUMN_PREFIXpluginType)\n) DB_TABLE_TYPE\n/*!40100 DEFAULT CHARACTER SET utf8 */;\n\nINSERT INTO DB_TABLE_PREFIXSchema (\n DB_COLUMN_PREFIXname,\n DB_COLUMN_PREFIXmajor,\n DB_COLUMN_PREFIXminor\n) VALUES(\'PluginPackageMap\', 1, 1);\n\n','core','map','a:1:{s:23:\"GalleryPluginPackageMap\";a:6:{s:10:\"pluginType\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:1;s:7:\"notNull\";b:1;}s:8:\"pluginId\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:1;s:7:\"notNull\";b:1;}s:11:\"packageName\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:1;s:7:\"notNull\";b:1;}s:14:\"packageVersion\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:1;s:7:\"notNull\";b:1;}s:12:\"packageBuild\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:1;s:7:\"notNull\";b:1;}s:6:\"locked\";a:3:{s:4:\"type\";i:8;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}}}'),('PluginParameterMap',1,3,'CREATE TABLE DB_TABLE_PREFIXPluginParameterMap(\n DB_COLUMN_PREFIXpluginType varchar(32) NOT NULL,\n DB_COLUMN_PREFIXpluginId varchar(32) NOT NULL,\n DB_COLUMN_PREFIXitemId int(11) NOT NULL,\n DB_COLUMN_PREFIXparameterName varchar(128) NOT NULL,\n DB_COLUMN_PREFIXparameterValue text NOT NULL,\n UNIQUE (DB_COLUMN_PREFIXpluginType, DB_COLUMN_PREFIXpluginId, DB_COLUMN_PREFIXitemId, DB_COLUMN_PREFIXparameterName),\n INDEX DB_TABLE_PREFIXPluginParameterMap_80596(DB_COLUMN_PREFIXpluginType),\n INDEX DB_TABLE_PREFIXPluginParameterMap_12808(DB_COLUMN_PREFIXpluginType, DB_COLUMN_PREFIXpluginId, DB_COLUMN_PREFIXitemId)\n) DB_TABLE_TYPE\n/*!40100 DEFAULT CHARACTER SET utf8 */;\n\nINSERT INTO DB_TABLE_PREFIXSchema (\n DB_COLUMN_PREFIXname,\n DB_COLUMN_PREFIXmajor,\n DB_COLUMN_PREFIXminor\n) VALUES(\'PluginParameterMap\', 1, 3);\n\n','core','map','a:1:{s:25:\"GalleryPluginParameterMap\";a:5:{s:10:\"pluginType\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:1;s:7:\"notNull\";b:1;}s:8:\"pluginId\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:1;s:7:\"notNull\";b:1;}s:6:\"itemId\";a:3:{s:4:\"type\";i:1;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}s:13:\"parameterName\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}s:14:\"parameterValue\";a:3:{s:4:\"type\";i:4;s:4:\"size\";i:1;s:19:\"notNullEmptyAllowed\";b:1;}}}'),('RecoverPasswordMap',1,1,'CREATE TABLE DB_TABLE_PREFIXRecoverPasswordMap(\n DB_COLUMN_PREFIXuserName varchar(32) NOT NULL,\n DB_COLUMN_PREFIXauthString varchar(32) NOT NULL,\n DB_COLUMN_PREFIXrequestExpires int(11) NOT NULL,\n PRIMARY KEY(DB_COLUMN_PREFIXuserName)\n) DB_TABLE_TYPE\n/*!40100 DEFAULT CHARACTER SET utf8 */;\n\nINSERT INTO DB_TABLE_PREFIXSchema (\n DB_COLUMN_PREFIXname,\n DB_COLUMN_PREFIXmajor,\n DB_COLUMN_PREFIXminor\n) VALUES(\'RecoverPasswordMap\', 1, 1);\n\n','core','map','a:1:{s:25:\"GalleryRecoverPasswordMap\";a:3:{s:8:\"userName\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:1;s:7:\"notNull\";b:1;}s:10:\"authString\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:1;s:7:\"notNull\";b:1;}s:14:\"requestExpires\";a:3:{s:4:\"type\";i:1;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}}}'),('SessionMap',1,1,'CREATE TABLE DB_TABLE_PREFIXSessionMap(\n DB_COLUMN_PREFIXid varchar(32) NOT NULL,\n DB_COLUMN_PREFIXuserId int(11) NOT NULL,\n DB_COLUMN_PREFIXremoteIdentifier varchar(128) NOT NULL,\n DB_COLUMN_PREFIXcreationTimestamp int(11) NOT NULL,\n DB_COLUMN_PREFIXmodificationTimestamp int(11) NOT NULL,\n DB_COLUMN_PREFIXdata longtext,\n PRIMARY KEY(DB_COLUMN_PREFIXid),\n INDEX DB_TABLE_PREFIXSessionMap_53500(DB_COLUMN_PREFIXuserId, DB_COLUMN_PREFIXcreationTimestamp, DB_COLUMN_PREFIXmodificationTimestamp)\n) DB_TABLE_TYPE\n/*!40100 DEFAULT CHARACTER SET utf8 */;\n\nINSERT INTO DB_TABLE_PREFIXSchema (\n DB_COLUMN_PREFIXname,\n DB_COLUMN_PREFIXmajor,\n DB_COLUMN_PREFIXminor\n) VALUES(\'SessionMap\', 1, 1);\n\n','core','map','a:1:{s:17:\"GallerySessionMap\";a:6:{s:2:\"id\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:1;s:7:\"notNull\";b:1;}s:6:\"userId\";a:3:{s:4:\"type\";i:1;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}s:16:\"remoteIdentifier\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}s:17:\"creationTimestamp\";a:3:{s:4:\"type\";i:1;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}s:21:\"modificationTimestamp\";a:3:{s:4:\"type\";i:1;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}s:4:\"data\";a:2:{s:4:\"type\";i:4;s:4:\"size\";i:4;}}}'),('TkOperatnMap',1,0,'CREATE TABLE DB_TABLE_PREFIXTkOperatnMap(\n DB_COLUMN_PREFIXname varchar(128) NOT NULL,\n DB_COLUMN_PREFIXparametersCrc varchar(32) NOT NULL,\n DB_COLUMN_PREFIXoutputMimeType varchar(128),\n DB_COLUMN_PREFIXdescription varchar(255),\n PRIMARY KEY(DB_COLUMN_PREFIXname)\n) DB_TABLE_TYPE\n/*!40100 DEFAULT CHARACTER SET utf8 */;\n\nINSERT INTO DB_TABLE_PREFIXSchema (\n DB_COLUMN_PREFIXname,\n DB_COLUMN_PREFIXmajor,\n DB_COLUMN_PREFIXminor\n) VALUES(\'TkOperatnMap\', 1, 0);\n\n','core','map','a:1:{s:26:\"GalleryToolkitOperationMap\";a:4:{s:4:\"name\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}s:13:\"parametersCrc\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:1;s:7:\"notNull\";b:1;}s:14:\"outputMimeType\";a:2:{s:4:\"type\";i:2;s:4:\"size\";i:2;}s:11:\"description\";a:2:{s:4:\"type\";i:2;s:4:\"size\";i:4;}}}'),('TkOperatnMimeTypeMap',1,0,'CREATE TABLE DB_TABLE_PREFIXTkOperatnMimeTypeMap(\n DB_COLUMN_PREFIXoperationName varchar(128) NOT NULL,\n DB_COLUMN_PREFIXtoolkitId varchar(128) NOT NULL,\n DB_COLUMN_PREFIXmimeType varchar(128) NOT NULL,\n DB_COLUMN_PREFIXpriority int(11) NOT NULL,\n INDEX DB_TABLE_PREFIXTkOperatnMimeTypeMap_2014(DB_COLUMN_PREFIXoperationName),\n INDEX DB_TABLE_PREFIXTkOperatnMimeTypeMap_79463(DB_COLUMN_PREFIXmimeType)\n) DB_TABLE_TYPE\n/*!40100 DEFAULT CHARACTER SET utf8 */;\n\nINSERT INTO DB_TABLE_PREFIXSchema (\n DB_COLUMN_PREFIXname,\n DB_COLUMN_PREFIXmajor,\n DB_COLUMN_PREFIXminor\n) VALUES(\'TkOperatnMimeTypeMap\', 1, 0);\n\n','core','map','a:1:{s:34:\"GalleryToolkitOperationMimeTypeMap\";a:4:{s:13:\"operationName\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}s:9:\"toolkitId\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}s:8:\"mimeType\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}s:8:\"priority\";a:3:{s:4:\"type\";i:1;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}}}'),('TkOperatnParameterMap',1,0,'CREATE TABLE DB_TABLE_PREFIXTkOperatnParameterMap(\n DB_COLUMN_PREFIXoperationName varchar(128) NOT NULL,\n DB_COLUMN_PREFIXposition int(11) NOT NULL,\n DB_COLUMN_PREFIXtype varchar(128) NOT NULL,\n DB_COLUMN_PREFIXdescription varchar(255),\n INDEX DB_TABLE_PREFIXTkOperatnParameterMap_2014(DB_COLUMN_PREFIXoperationName)\n) DB_TABLE_TYPE\n/*!40100 DEFAULT CHARACTER SET utf8 */;\n\nINSERT INTO DB_TABLE_PREFIXSchema (\n DB_COLUMN_PREFIXname,\n DB_COLUMN_PREFIXmajor,\n DB_COLUMN_PREFIXminor\n) VALUES(\'TkOperatnParameterMap\', 1, 0);\n\n','core','map','a:1:{s:35:\"GalleryToolkitOperationParameterMap\";a:4:{s:13:\"operationName\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}s:8:\"position\";a:3:{s:4:\"type\";i:1;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}s:4:\"type\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}s:11:\"description\";a:2:{s:4:\"type\";i:2;s:4:\"size\";i:4;}}}'),('TkPropertyMap',1,0,'CREATE TABLE DB_TABLE_PREFIXTkPropertyMap(\n DB_COLUMN_PREFIXname varchar(128) NOT NULL,\n DB_COLUMN_PREFIXtype varchar(128) NOT NULL,\n DB_COLUMN_PREFIXdescription varchar(128) NOT NULL\n) DB_TABLE_TYPE\n/*!40100 DEFAULT CHARACTER SET utf8 */;\n\nINSERT INTO DB_TABLE_PREFIXSchema (\n DB_COLUMN_PREFIXname,\n DB_COLUMN_PREFIXmajor,\n DB_COLUMN_PREFIXminor\n) VALUES(\'TkPropertyMap\', 1, 0);\n\n','core','map','a:1:{s:25:\"GalleryToolkitPropertyMap\";a:3:{s:4:\"name\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}s:4:\"type\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}s:11:\"description\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}}}'),('TkPropertyMimeTypeMap',1,0,'CREATE TABLE DB_TABLE_PREFIXTkPropertyMimeTypeMap(\n DB_COLUMN_PREFIXpropertyName varchar(128) NOT NULL,\n DB_COLUMN_PREFIXtoolkitId varchar(128) NOT NULL,\n DB_COLUMN_PREFIXmimeType varchar(128) NOT NULL,\n INDEX DB_TABLE_PREFIXTkPropertyMimeTypeMap_52881(DB_COLUMN_PREFIXpropertyName),\n INDEX DB_TABLE_PREFIXTkPropertyMimeTypeMap_79463(DB_COLUMN_PREFIXmimeType)\n) DB_TABLE_TYPE\n/*!40100 DEFAULT CHARACTER SET utf8 */;\n\nINSERT INTO DB_TABLE_PREFIXSchema (\n DB_COLUMN_PREFIXname,\n DB_COLUMN_PREFIXmajor,\n DB_COLUMN_PREFIXminor\n) VALUES(\'TkPropertyMimeTypeMap\', 1, 0);\n\n','core','map','a:1:{s:33:\"GalleryToolkitPropertyMimeTypeMap\";a:3:{s:12:\"propertyName\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}s:9:\"toolkitId\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}s:8:\"mimeType\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}}}'),('UnknownItem',1,0,'CREATE TABLE DB_TABLE_PREFIXUnknownItem(\n DB_COLUMN_PREFIXid int(11) NOT NULL,\n PRIMARY KEY(DB_COLUMN_PREFIXid)\n) DB_TABLE_TYPE\n/*!40100 DEFAULT CHARACTER SET utf8 */;\n\nINSERT INTO DB_TABLE_PREFIXSchema (\n DB_COLUMN_PREFIXname,\n DB_COLUMN_PREFIXmajor,\n DB_COLUMN_PREFIXminor\n) VALUES(\'UnknownItem\', 1, 0);\n\n','core','entity','a:1:{s:18:\"GalleryUnknownItem\";a:4:{s:7:\"members\";a:0:{}s:6:\"parent\";s:15:\"GalleryDataItem\";s:6:\"module\";s:4:\"core\";s:6:\"linked\";a:0:{}}}'),('User',1,2,'CREATE TABLE DB_TABLE_PREFIXUser(\n DB_COLUMN_PREFIXid int(11) NOT NULL,\n DB_COLUMN_PREFIXuserName varchar(32) NOT NULL,\n DB_COLUMN_PREFIXfullName varchar(128),\n DB_COLUMN_PREFIXhashedPassword varchar(128),\n DB_COLUMN_PREFIXemail varchar(255),\n DB_COLUMN_PREFIXlanguage varchar(128),\n DB_COLUMN_PREFIXlocked int(1) DEFAULT \'0\',\n PRIMARY KEY(DB_COLUMN_PREFIXid),\n UNIQUE (DB_COLUMN_PREFIXuserName)\n) DB_TABLE_TYPE\n/*!40100 DEFAULT CHARACTER SET utf8 */;\n\nINSERT INTO DB_TABLE_PREFIXSchema (\n DB_COLUMN_PREFIXname,\n DB_COLUMN_PREFIXmajor,\n DB_COLUMN_PREFIXminor\n) VALUES(\'User\', 1, 2);\n\n','core','entity','a:1:{s:11:\"GalleryUser\";a:4:{s:7:\"members\";a:6:{s:8:\"userName\";a:4:{s:4:\"type\";i:2;s:4:\"size\";i:1;s:7:\"notNull\";i:1;s:15:\"external-access\";i:1;}s:8:\"fullName\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:2;s:15:\"external-access\";i:3;}s:14:\"hashedPassword\";a:2:{s:4:\"type\";i:2;s:4:\"size\";i:2;}s:5:\"email\";a:2:{s:4:\"type\";i:2;s:4:\"size\";i:4;}s:8:\"language\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:2;s:15:\"external-access\";i:1;}s:6:\"locked\";a:1:{s:4:\"type\";i:8;}}s:6:\"parent\";s:13:\"GalleryEntity\";s:6:\"module\";s:4:\"core\";s:6:\"linked\";a:0:{}}}'),('UserGroupMap',1,0,'CREATE TABLE DB_TABLE_PREFIXUserGroupMap(\n DB_COLUMN_PREFIXuserId int(11) NOT NULL,\n DB_COLUMN_PREFIXgroupId int(11) NOT NULL,\n INDEX DB_TABLE_PREFIXUserGroupMap_69068(DB_COLUMN_PREFIXuserId),\n INDEX DB_TABLE_PREFIXUserGroupMap_89328(DB_COLUMN_PREFIXgroupId)\n) DB_TABLE_TYPE\n/*!40100 DEFAULT CHARACTER SET utf8 */;\n\nINSERT INTO DB_TABLE_PREFIXSchema (\n DB_COLUMN_PREFIXname,\n DB_COLUMN_PREFIXmajor,\n DB_COLUMN_PREFIXminor\n) VALUES(\'UserGroupMap\', 1, 0);\n\n','core','map','a:1:{s:19:\"GalleryUserGroupMap\";a:2:{s:6:\"userId\";a:3:{s:4:\"type\";i:1;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}s:7:\"groupId\";a:3:{s:4:\"type\";i:1;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}}}'),('Lock',1,0,'CREATE TABLE DB_TABLE_PREFIXLock(\n DB_COLUMN_PREFIXlockId int(11),\n DB_COLUMN_PREFIXreadEntityId int(11),\n DB_COLUMN_PREFIXwriteEntityId int(11),\n DB_COLUMN_PREFIXfreshUntil int(11),\n DB_COLUMN_PREFIXrequest int(11),\n INDEX DB_TABLE_PREFIXLock_11039(DB_COLUMN_PREFIXlockId)\n) DB_TABLE_TYPE\n/*!40100 DEFAULT CHARACTER SET utf8 */;\n\nINSERT INTO DB_TABLE_PREFIXSchema (\n DB_COLUMN_PREFIXname,\n DB_COLUMN_PREFIXmajor,\n DB_COLUMN_PREFIXminor\n) VALUES(\'Lock\', 1, 0);\n\n','core',NULL,NULL),('CustomFieldMap',1,1,'CREATE TABLE DB_TABLE_PREFIXCustomFieldMap(\n DB_COLUMN_PREFIXitemId int(11) NOT NULL,\n DB_COLUMN_PREFIXfield varchar(128) NOT NULL,\n DB_COLUMN_PREFIXvalue varchar(255),\n DB_COLUMN_PREFIXsetId int(11),\n DB_COLUMN_PREFIXsetType int(11),\n INDEX DB_TABLE_PREFIXCustomFieldMap_75985(DB_COLUMN_PREFIXitemId)\n) DB_TABLE_TYPE\n/*!40100 DEFAULT CHARACTER SET utf8 */;\n\nINSERT INTO DB_TABLE_PREFIXSchema (\n DB_COLUMN_PREFIXname,\n DB_COLUMN_PREFIXmajor,\n DB_COLUMN_PREFIXminor\n) VALUES(\'CustomFieldMap\', 1, 1);\n\n','customfield','map','a:1:{s:14:\"CustomFieldMap\";a:5:{s:6:\"itemId\";a:3:{s:4:\"type\";i:1;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}s:5:\"field\";a:3:{s:4:\"type\";i:2;s:4:\"size\";i:2;s:7:\"notNull\";b:1;}s:5:\"value\";a:2:{s:4:\"type\";i:2;s:4:\"size\";i:4;}s:5:\"setId\";a:2:{s:4:\"type\";i:1;s:4:\"size\";i:2;}s:7:\"setType\";a:2:{s:4:\"type\";i:1;s:4:\"size\";i:2;}}}');
/*!40000 ALTER TABLE `dzg_Schema` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dzg_SequenceEventLog`
--

DROP TABLE IF EXISTS `dzg_SequenceEventLog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzg_SequenceEventLog` (
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzg_SequenceEventLog`
--

LOCK TABLES `dzg_SequenceEventLog` WRITE;
/*!40000 ALTER TABLE `dzg_SequenceEventLog` DISABLE KEYS */;
INSERT INTO `dzg_SequenceEventLog` VALUES (0);
/*!40000 ALTER TABLE `dzg_SequenceEventLog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dzg_SequenceId`
--

DROP TABLE IF EXISTS `dzg_SequenceId`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzg_SequenceId` (
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzg_SequenceId`
--

LOCK TABLES `dzg_SequenceId` WRITE;
/*!40000 ALTER TABLE `dzg_SequenceId` DISABLE KEYS */;
INSERT INTO `dzg_SequenceId` VALUES (31);
/*!40000 ALTER TABLE `dzg_SequenceId` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dzg_SequenceLock`
--

DROP TABLE IF EXISTS `dzg_SequenceLock`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzg_SequenceLock` (
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzg_SequenceLock`
--

LOCK TABLES `dzg_SequenceLock` WRITE;
/*!40000 ALTER TABLE `dzg_SequenceLock` DISABLE KEYS */;
INSERT INTO `dzg_SequenceLock` VALUES (0);
/*!40000 ALTER TABLE `dzg_SequenceLock` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dzg_SessionMap`
--

DROP TABLE IF EXISTS `dzg_SessionMap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzg_SessionMap` (
  `dz_id` varchar(32) NOT NULL,
  `dz_userId` int(11) NOT NULL,
  `dz_remoteIdentifier` varchar(128) NOT NULL,
  `dz_creationTimestamp` int(11) NOT NULL,
  `dz_modificationTimestamp` int(11) NOT NULL,
  `dz_data` longtext,
  PRIMARY KEY (`dz_id`),
  KEY `dzg_SessionMap_53500` (`dz_userId`,`dz_creationTimestamp`,`dz_modificationTimestamp`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzg_SessionMap`
--

LOCK TABLES `dzg_SessionMap` WRITE;
/*!40000 ALTER TABLE `dzg_SessionMap` DISABLE KEYS */;
INSERT INTO `dzg_SessionMap` VALUES ('dc333ccb98ee33cfeff00c48c2de2df6',6,'a:2:{i:0;s:15:\"115.172.203.132\";i:1;s:32:\"524bc892d6262ff099bceca9e958b2e6\";}',1402946662,1402947376,'a:8:{s:13:\"core.language\";s:5:\"zh_CN\";s:34:\"session.siteAdminActivityTimestamp\";i:1402946738;s:15:\"core.lastViewed\";a:6:{i:7;i:0;i:11;i:167;i:12;i:468;i:13;i:480;i:14;i:667;i:20;i:841;}s:15:\"permissionCache\";a:6:{i:0;a:10:{s:8:\"core.all\";a:3:{i:7;i:1;i:11;i:1;i:14;i:1;}s:9:\"core.view\";a:3:{i:7;i:1;i:11;i:1;i:14;i:1;}s:16:\"core.viewResizes\";a:3:{i:7;i:1;i:11;i:1;i:14;i:1;}s:15:\"core.viewSource\";a:3:{i:7;i:1;i:11;i:1;i:14;i:1;}s:12:\"core.viewAll\";a:3:{i:7;i:1;i:11;i:1;i:14;i:1;}s:17:\"core.addAlbumItem\";a:3:{i:7;i:1;i:11;i:1;i:14;i:1;}s:16:\"core.addDataItem\";a:3:{i:7;i:1;i:11;i:1;i:14;i:1;}s:9:\"core.edit\";a:3:{i:7;i:1;i:11;i:1;i:14;i:1;}s:22:\"core.changePermissions\";a:3:{i:7;i:1;i:11;i:1;i:14;i:1;}s:11:\"core.delete\";a:3:{i:7;i:1;i:11;i:1;i:14;i:1;}}i:1;a:10:{s:8:\"core.all\";a:4:{i:20;i:1;i:22;i:1;i:24;i:1;i:26;i:1;}s:9:\"core.view\";a:4:{i:20;i:1;i:22;i:1;i:24;i:1;i:26;i:1;}s:16:\"core.viewResizes\";a:4:{i:20;i:1;i:22;i:1;i:24;i:1;i:26;i:1;}s:15:\"core.viewSource\";a:4:{i:20;i:1;i:22;i:1;i:24;i:1;i:26;i:1;}s:12:\"core.viewAll\";a:4:{i:20;i:1;i:22;i:1;i:24;i:1;i:26;i:1;}s:17:\"core.addAlbumItem\";a:4:{i:20;i:1;i:22;i:1;i:24;i:1;i:26;i:1;}s:16:\"core.addDataItem\";a:4:{i:20;i:1;i:22;i:1;i:24;i:1;i:26;i:1;}s:9:\"core.edit\";a:4:{i:20;i:1;i:22;i:1;i:24;i:1;i:26;i:1;}s:22:\"core.changePermissions\";a:4:{i:20;i:1;i:22;i:1;i:24;i:1;i:26;i:1;}s:11:\"core.delete\";a:4:{i:20;i:1;i:22;i:1;i:24;i:1;i:26;i:1;}}i:2;a:10:{s:8:\"core.all\";a:3:{i:14;i:1;i:11;i:1;i:7;i:1;}s:9:\"core.view\";a:3:{i:14;i:1;i:11;i:1;i:7;i:1;}s:16:\"core.viewResizes\";a:3:{i:14;i:1;i:11;i:1;i:7;i:1;}s:15:\"core.viewSource\";a:3:{i:14;i:1;i:11;i:1;i:7;i:1;}s:12:\"core.viewAll\";a:3:{i:14;i:1;i:11;i:1;i:7;i:1;}s:17:\"core.addAlbumItem\";a:3:{i:14;i:1;i:11;i:1;i:7;i:1;}s:16:\"core.addDataItem\";a:3:{i:14;i:1;i:11;i:1;i:7;i:1;}s:9:\"core.edit\";a:3:{i:14;i:1;i:11;i:1;i:7;i:1;}s:22:\"core.changePermissions\";a:3:{i:14;i:1;i:11;i:1;i:7;i:1;}s:11:\"core.delete\";a:3:{i:14;i:1;i:11;i:1;i:7;i:1;}}i:3;a:10:{s:8:\"core.all\";a:3:{i:14;i:1;i:11;i:1;i:7;i:1;}s:9:\"core.view\";a:3:{i:14;i:1;i:11;i:1;i:7;i:1;}s:16:\"core.viewResizes\";a:3:{i:14;i:1;i:11;i:1;i:7;i:1;}s:15:\"core.viewSource\";a:3:{i:14;i:1;i:11;i:1;i:7;i:1;}s:12:\"core.viewAll\";a:3:{i:14;i:1;i:11;i:1;i:7;i:1;}s:17:\"core.addAlbumItem\";a:3:{i:14;i:1;i:11;i:1;i:7;i:1;}s:16:\"core.addDataItem\";a:3:{i:14;i:1;i:11;i:1;i:7;i:1;}s:9:\"core.edit\";a:3:{i:14;i:1;i:11;i:1;i:7;i:1;}s:22:\"core.changePermissions\";a:3:{i:14;i:1;i:11;i:1;i:7;i:1;}s:11:\"core.delete\";a:3:{i:14;i:1;i:11;i:1;i:7;i:1;}}i:4;a:10:{s:8:\"core.all\";a:3:{i:14;i:1;i:11;i:1;i:7;i:1;}s:9:\"core.view\";a:3:{i:14;i:1;i:11;i:1;i:7;i:1;}s:16:\"core.viewResizes\";a:3:{i:14;i:1;i:11;i:1;i:7;i:1;}s:15:\"core.viewSource\";a:3:{i:14;i:1;i:11;i:1;i:7;i:1;}s:12:\"core.viewAll\";a:3:{i:14;i:1;i:11;i:1;i:7;i:1;}s:17:\"core.addAlbumItem\";a:3:{i:14;i:1;i:11;i:1;i:7;i:1;}s:16:\"core.addDataItem\";a:3:{i:14;i:1;i:11;i:1;i:7;i:1;}s:9:\"core.edit\";a:3:{i:14;i:1;i:11;i:1;i:7;i:1;}s:22:\"core.changePermissions\";a:3:{i:14;i:1;i:11;i:1;i:7;i:1;}s:11:\"core.delete\";a:3:{i:14;i:1;i:11;i:1;i:7;i:1;}}i:5;a:10:{s:8:\"core.all\";a:1:{i:7;i:1;}s:9:\"core.view\";a:1:{i:7;i:1;}s:16:\"core.viewResizes\";a:1:{i:7;i:1;}s:15:\"core.viewSource\";a:1:{i:7;i:1;}s:12:\"core.viewAll\";a:1:{i:7;i:1;}s:17:\"core.addAlbumItem\";a:1:{i:7;i:1;}s:16:\"core.addDataItem\";a:1:{i:7;i:1;}s:9:\"core.edit\";a:1:{i:7;i:1;}s:22:\"core.changePermissions\";a:1:{i:7;i:1;}s:11:\"core.delete\";a:1:{i:7;i:1;}}}s:14:\"core.authToken\";s:12:\"4029938e0b9a\";s:11:\"core.status\";N;s:46:\"core.view.ItemEdit.editPlugin.GalleryAlbumItem\";s:13:\"ItemEditAlbum\";s:44:\"core.view.ItemAdd.addPlugin.GalleryAlbumItem\";s:18:\"ItemAddFromBrowser\";}');
/*!40000 ALTER TABLE `dzg_SessionMap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dzg_TkOperatnMap`
--

DROP TABLE IF EXISTS `dzg_TkOperatnMap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzg_TkOperatnMap` (
  `dz_name` varchar(128) NOT NULL,
  `dz_parametersCrc` varchar(32) NOT NULL,
  `dz_outputMimeType` varchar(128) DEFAULT NULL,
  `dz_description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`dz_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzg_TkOperatnMap`
--

LOCK TABLES `dzg_TkOperatnMap` WRITE;
/*!40000 ALTER TABLE `dzg_TkOperatnMap` DISABLE KEYS */;
/*!40000 ALTER TABLE `dzg_TkOperatnMap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dzg_TkOperatnMimeTypeMap`
--

DROP TABLE IF EXISTS `dzg_TkOperatnMimeTypeMap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzg_TkOperatnMimeTypeMap` (
  `dz_operationName` varchar(128) NOT NULL,
  `dz_toolkitId` varchar(128) NOT NULL,
  `dz_mimeType` varchar(128) NOT NULL,
  `dz_priority` int(11) NOT NULL,
  KEY `dzg_TkOperatnMimeTypeMap_2014` (`dz_operationName`),
  KEY `dzg_TkOperatnMimeTypeMap_79463` (`dz_mimeType`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzg_TkOperatnMimeTypeMap`
--

LOCK TABLES `dzg_TkOperatnMimeTypeMap` WRITE;
/*!40000 ALTER TABLE `dzg_TkOperatnMimeTypeMap` DISABLE KEYS */;
/*!40000 ALTER TABLE `dzg_TkOperatnMimeTypeMap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dzg_TkOperatnParameterMap`
--

DROP TABLE IF EXISTS `dzg_TkOperatnParameterMap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzg_TkOperatnParameterMap` (
  `dz_operationName` varchar(128) NOT NULL,
  `dz_position` int(11) NOT NULL,
  `dz_type` varchar(128) NOT NULL,
  `dz_description` varchar(255) DEFAULT NULL,
  KEY `dzg_TkOperatnParameterMap_2014` (`dz_operationName`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzg_TkOperatnParameterMap`
--

LOCK TABLES `dzg_TkOperatnParameterMap` WRITE;
/*!40000 ALTER TABLE `dzg_TkOperatnParameterMap` DISABLE KEYS */;
/*!40000 ALTER TABLE `dzg_TkOperatnParameterMap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dzg_TkPropertyMap`
--

DROP TABLE IF EXISTS `dzg_TkPropertyMap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzg_TkPropertyMap` (
  `dz_name` varchar(128) NOT NULL,
  `dz_type` varchar(128) NOT NULL,
  `dz_description` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzg_TkPropertyMap`
--

LOCK TABLES `dzg_TkPropertyMap` WRITE;
/*!40000 ALTER TABLE `dzg_TkPropertyMap` DISABLE KEYS */;
/*!40000 ALTER TABLE `dzg_TkPropertyMap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dzg_TkPropertyMimeTypeMap`
--

DROP TABLE IF EXISTS `dzg_TkPropertyMimeTypeMap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzg_TkPropertyMimeTypeMap` (
  `dz_propertyName` varchar(128) NOT NULL,
  `dz_toolkitId` varchar(128) NOT NULL,
  `dz_mimeType` varchar(128) NOT NULL,
  KEY `dzg_TkPropertyMimeTypeMap_52881` (`dz_propertyName`),
  KEY `dzg_TkPropertyMimeTypeMap_79463` (`dz_mimeType`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzg_TkPropertyMimeTypeMap`
--

LOCK TABLES `dzg_TkPropertyMimeTypeMap` WRITE;
/*!40000 ALTER TABLE `dzg_TkPropertyMimeTypeMap` DISABLE KEYS */;
/*!40000 ALTER TABLE `dzg_TkPropertyMimeTypeMap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dzg_UnknownItem`
--

DROP TABLE IF EXISTS `dzg_UnknownItem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzg_UnknownItem` (
  `dz_id` int(11) NOT NULL,
  PRIMARY KEY (`dz_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzg_UnknownItem`
--

LOCK TABLES `dzg_UnknownItem` WRITE;
/*!40000 ALTER TABLE `dzg_UnknownItem` DISABLE KEYS */;
/*!40000 ALTER TABLE `dzg_UnknownItem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dzg_User`
--

DROP TABLE IF EXISTS `dzg_User`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzg_User` (
  `dz_id` int(11) NOT NULL,
  `dz_userName` varchar(32) NOT NULL,
  `dz_fullName` varchar(128) DEFAULT NULL,
  `dz_hashedPassword` varchar(128) DEFAULT NULL,
  `dz_email` varchar(255) DEFAULT NULL,
  `dz_language` varchar(128) DEFAULT NULL,
  `dz_locked` int(1) DEFAULT '0',
  PRIMARY KEY (`dz_id`),
  UNIQUE KEY `dz_userName` (`dz_userName`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzg_User`
--

LOCK TABLES `dzg_User` WRITE;
/*!40000 ALTER TABLE `dzg_User` DISABLE KEYS */;
INSERT INTO `dzg_User` VALUES (5,'guest','Guest','AIRNca93df8019009594b8ec361fe5049c73',NULL,NULL,0),(6,'admin','Dazzle','Ksgqd18685612805fa33f57d2dfd9a27c145','dazzle@dazzle.com',NULL,0);
/*!40000 ALTER TABLE `dzg_User` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dzg_UserGroupMap`
--

DROP TABLE IF EXISTS `dzg_UserGroupMap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dzg_UserGroupMap` (
  `dz_userId` int(11) NOT NULL,
  `dz_groupId` int(11) NOT NULL,
  KEY `dzg_UserGroupMap_69068` (`dz_userId`),
  KEY `dzg_UserGroupMap_89328` (`dz_groupId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dzg_UserGroupMap`
--

LOCK TABLES `dzg_UserGroupMap` WRITE;
/*!40000 ALTER TABLE `dzg_UserGroupMap` DISABLE KEYS */;
INSERT INTO `dzg_UserGroupMap` VALUES (6,2),(5,4),(6,4),(6,3);
/*!40000 ALTER TABLE `dzg_UserGroupMap` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-08-08 14:09:20
