-- MySQL dump 10.13  Distrib 5.7.20, for osx10.12 (x86_64)
--
-- Host: localhost    Database: my_academy_cms
-- ------------------------------------------------------
-- Server version	5.7.20

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL AUTO_INCREMENT,
  `cat_title` varchar(255) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (48,'PHP'),(52,'Javascript');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `comment_id` int(3) NOT NULL AUTO_INCREMENT,
  `comment_post_id` int(3) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(255) NOT NULL,
  `comment_date` date NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,155,'EDWIN DIAZ','edwin@gmail.com','sfdgsdfg','approved','2015-11-13');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL AUTO_INCREMENT,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_user` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` varchar(255) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft',
  `post_views_count` int(11) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=136 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (113,48,'PHP','Edwin Diaz','rico','2017-01-30','image_5.jpg','<p style=\"text-align: justify; line-height: 14px; margin: 0px 0px 14px; padding: 0px; font-family: Arial, Helvetica, sans;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum fermentum pretium. Ut nec purus at est consequat pretium vitae at tortor. Morbi pulvinar lacinia arcu, non elementum leo commodo id. Mauris congue volutpat feugiat. Praesent quis ligula vel neque consectetur mollis. Mauris a ipsum a elit pharetra sodales vitae non diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae diam in diam malesuada gravida a sit amet arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc et urna eu justo ullamcorper tempus.</p>\r\n<p>&nbsp;</p>','php','','published',134),(114,48,'Javascript','Miguel','','2015-07-24','image_4.jpg','<p style=\"text-align: justify; line-height: 14px; margin: 0px 0px 14px; padding: 0px; font-family: Arial, Helvetica, sans;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum fermentum pretium. Ut nec purus at est consequat pretium vitae at tortor. Morbi pulvinar lacinia arcu, non elementum leo commodo id. Mauris congue volutpat feugiat. Praesent quis ligula vel neque consectetur mollis. Mauris a ipsum a elit pharetra sodales vitae non diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae diam in diam malesuada gravida a sit amet arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc et urna eu justo ullamcorper tempus.</p>\r\n<p>&nbsp;</p>','javascript','','published',16),(115,48,'Javascript','Edwin Diaz','','2015-07-24','image_4.jpg','<p style=\"text-align: justify; line-height: 14px; margin: 0px 0px 14px; padding: 0px; font-family: Arial, Helvetica, sans;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum fermentum pretium. Ut nec purus at est consequat pretium vitae at tortor. Morbi pulvinar lacinia arcu, non elementum leo commodo id. Mauris congue volutpat feugiat. Praesent quis ligula vel neque consectetur mollis. Mauris a ipsum a elit pharetra sodales vitae non diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae diam in diam malesuada gravida a sit amet arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc et urna eu justo ullamcorper tempus.</p>\r\n<p>&nbsp;</p>','javascript','','published',0),(116,48,'Bootstrap','George','','2015-07-24','image_3.jpg','<p style=\"text-align: justify; line-height: 14px; margin: 0px 0px 14px; padding: 0px; font-family: Arial, Helvetica, sans;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum fermentum pretium. Ut nec purus at est consequat pretium vitae at tortor. Morbi pulvinar lacinia arcu, non elementum leo commodo id. Mauris congue volutpat feugiat. Praesent quis ligula vel neque consectetur mollis. Mauris a ipsum a elit pharetra sodales vitae non diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae diam in diam malesuada gravida a sit amet arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc et urna eu justo ullamcorper tempus.</p>\r\n<p>&nbsp;</p>','Bootstrap','','published',4),(118,48,'Javascript','Edwin Diaz','','2015-07-24','image_4.jpg','<p style=\"text-align: justify; line-height: 14px; margin: 0px 0px 14px; padding: 0px; font-family: Arial, Helvetica, sans;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum fermentum pretium. Ut nec purus at est consequat pretium vitae at tortor. Morbi pulvinar lacinia arcu, non elementum leo commodo id. Mauris congue volutpat feugiat. Praesent quis ligula vel neque consectetur mollis. Mauris a ipsum a elit pharetra sodales vitae non diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae diam in diam malesuada gravida a sit amet arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc et urna eu justo ullamcorper tempus.</p>\r\n<p>&nbsp;</p>','javascript','','published',4),(119,48,'Javascript','Miguel','suave','2017-07-12','image_2.jpg','<p style=\"text-align: justify; line-height: 14px; margin: 0px 0px 14px; padding: 0px; font-family: Arial, Helvetica, sans;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum fermentum pretium. Ut nec purus at est consequat pretium vitae at tortor. Morbi pulvinar lacinia arcu, non elementum leo commodo id. Mauris congue volutpat feugiat. Praesent quis ligula vel neque consectetur mollis. Mauris a ipsum a elit pharetra sodales vitae non diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae diam in diam malesuada gravida a sit amet arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc et urna eu justo ullamcorper tempus.</p>\r\n<p>&nbsp;</p>','javascript','','draft',1),(121,48,'PHP','Edwin Diaz','suave','2017-07-12','image_2.jpg','<p style=\"text-align: justify; line-height: 14px; margin: 0px 0px 14px; padding: 0px; font-family: Arial, Helvetica, sans;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum fermentum pretium. Ut nec purus at est consequat pretium vitae at tortor. Morbi pulvinar lacinia arcu, non elementum leo commodo id. Mauris congue volutpat feugiat. Praesent quis ligula vel neque consectetur mollis. Mauris a ipsum a elit pharetra sodales vitae non diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae diam in diam malesuada gravida a sit amet arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc et urna eu justo ullamcorper tempus.</p>\r\n<p>&nbsp;</p>','php','','draft',0),(122,48,'Javascript','Miguel','rico','2017-01-30','image_1.jpg','<p style=\"text-align: justify; line-height: 14px; margin: 0px 0px 14px; padding: 0px; font-family: Arial, Helvetica, sans;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum fermentum pretium. Ut nec purus at est consequat pretium vitae at tortor. Morbi pulvinar lacinia arcu, non elementum leo commodo id. Mauris congue volutpat feugiat. Praesent quis ligula vel neque consectetur mollis. Mauris a ipsum a elit pharetra sodales vitae non diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae diam in diam malesuada gravida a sit amet arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc et urna eu justo ullamcorper tempus.</p>\r\n<p>&nbsp;</p>','javascript','','draft',0),(135,48,'Javascript','Edwin Diaz','','2016-12-10','lambo_1.jpg','<p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum fermentum pretium. Ut nec purus at est consequat pretium vitae at tortor. Morbi pulvinar lacinia arcu, non elementum leo commodo id. Mauris congue volutpat feugiat. Praesent quis ligula vel neque consectetur mollis. Mauris a ipsum a elit pharetra sodales vitae non diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae diam in diam malesuada gravida a sit amet arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc et urna eu justo ullamcorper tempus.</strong></p>\r\n<p>\\r\\n</p>\r\n<p>\\\\r\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\\\\\r\\\\\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\r\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>&nbsp;</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\r\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\\\\\r\\\\\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\r\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>=</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\r\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\\\\\r\\\\\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\r\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\r\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\r\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\\\\\r\\\\\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\r\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\\\\\\\\\\\\\r\\\\\\\\\\\\\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\r\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\\\\\r\\\\\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\r\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\r\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\r\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\\\\\r\\\\\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\r\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\\\\\\\\\\\\\r\\\\\\\\\\\\\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\r\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\\\\\r\\\\\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\r\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\r\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\r\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\\\\\r\\\\\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\r\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\\\\\\\\\\\\\r\\\\\\\\\\\\\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\r\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\\\\\r\\\\\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\r\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\r\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\r\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\\\\\r\\\\\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\r\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\\\\\\\\\\\\\r\\\\\\\\\\\\\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\r\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\\\\\r\\\\\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\r\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>&nbsp;</p>','javascript','','draft',72);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL DEFAULT '$2y$10$iusesomecrazystrings22',
  `token` text NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'rico','$2y$12$19ZpnAkuhoaAFH7dclUGy.WFIL84PJ8AS216azZtXALy6sqexsScC','','','rico@gmail.com','','subscriber','$2y$10$iusesomecrazystrings22',''),(2,'suave','$2y$12$jG3YUwNt3X39OB.YJd311O9akwOw17N4e1NQ79N2xrojC5NG3Na3S','','','edwin@codingfaculty.com','','admin','$2y$10$iusesomecrazystrings22','');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_online`
--

DROP TABLE IF EXISTS `users_online`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_online` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `session` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_online`
--

LOCK TABLES `users_online` WRITE;
/*!40000 ALTER TABLE `users_online` DISABLE KEYS */;
INSERT INTO `users_online` VALUES (44,'',1447434996),(45,'s47g806mg6788i92u5ogm6kqi4',1447441570),(46,'72clfovqk7vo2p8fiii26tkmr4',1447461586),(47,'3gs3q67k5ntpma8tbp2kuvof23',1447691896),(48,'bouqd4fslhn2b1nv20k559col1',1447796024),(49,'tign71tbpar4di74k13f8nr022',1447867949),(50,'ju0s1j019d1qlc1q4tb703rgm3',1447880891),(51,'tp6khbvgo4hdlfueekpmaefcu0',1447952096),(52,'kv0klvlajm8j50d3uqt6go4bm6',1448174347),(53,'qsdv073j4c3lqd6m0rtdpg3615',1448296313),(54,'tmliedhtcgvi8r96l6qplehos4',1448292854),(55,'vrumjbdrjrauucdhg6cta8hhn6',1448800892),(56,'eb1ae8996caf679d187c1037ec9620b1',1478098539),(57,'40780dfe8631b764c435168775d44432',1479443689),(58,'6d9081fbf0106e9bfef3e77f6fa68f8a',1481004509),(59,'b57212ad3e92b65c05d8ddcd1805a370',1481382178),(60,'3cf8d2b7eb470cb635a6102868ae9bd6',1481397855),(61,'c7e0ac8eeeaaf5d3ac4329af9bf4b777',1481685807),(62,'b50a5d9ab4b00848c009d472c63ae2cd',1485830805),(63,'3ef98f25d1b1762dd799f33b1a2b2657',1499988384),(64,'229f256600c1d05e81bd5036d941069a',1499993069),(65,'34aea21ebd8d1ae1b572236a4783cbad',1500065466);
/*!40000 ALTER TABLE `users_online` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-04 10:20:57
