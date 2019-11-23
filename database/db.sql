/*
SQLyog Ultimate v12.14 (64 bit)
MySQL - 10.0.38-MariaDB : Database - blog
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`blog` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `blog`;

/*Table structure for table `about_me` */

DROP TABLE IF EXISTS `about_me`;

CREATE TABLE `about_me` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text NOT NULL,
  `photo` varchar(500) DEFAULT NULL,
  `status` smallint(2) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `about_me` */

/*Table structure for table `back_menu` */

DROP TABLE IF EXISTS `back_menu`;

CREATE TABLE `back_menu` (
  `nodeid` int(6) NOT NULL AUTO_INCREMENT,
  `parentnodeid` int(6) NOT NULL DEFAULT '0',
  `nodeshortname` varchar(50) NOT NULL,
  `nodename` varchar(100) NOT NULL,
  `nodeurl` varchar(255) NOT NULL,
  `userstatus` varchar(10) NOT NULL DEFAULT 'ALL',
  `nodeaccess` int(1) NOT NULL,
  `nodestatus` int(1) NOT NULL,
  `nodeorder` int(3) NOT NULL,
  `service_id` int(11) DEFAULT NULL,
  `nodefile` varchar(255) DEFAULT NULL,
  `nodeicon` varchar(50) DEFAULT NULL,
  `ishasdivider` enum('no','yes') NOT NULL DEFAULT 'no',
  `hasnotify` enum('no','yes') NOT NULL DEFAULT 'no',
  `notifyscript` varchar(255) DEFAULT '',
  `isforguest` enum('no','yes') DEFAULT 'yes',
  `arrow_tag` varchar(255) DEFAULT NULL,
  `position` enum('left','right','top') DEFAULT NULL,
  PRIMARY KEY (`nodeid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `back_menu` */

/*Table structure for table `blog` */

DROP TABLE IF EXISTS `blog`;

CREATE TABLE `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `text` text NOT NULL,
  `photo` varchar(500) DEFAULT NULL,
  `alias` varchar(500) DEFAULT NULL,
  `status` smallint(2) DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `like_count` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `blog` */

/*Table structure for table `blog_category` */

DROP TABLE IF EXISTS `blog_category`;

CREATE TABLE `blog_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `blog_id` (`blog_id`),
  KEY `category_id` (`category_id`),
  CONSTRAINT `blog_category_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blog` (`id`),
  CONSTRAINT `blog_category_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `blog_category` */

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `category` */

/*Table structure for table `comment` */

DROP TABLE IF EXISTS `comment`;

CREATE TABLE `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `web` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `blog_id` int(11) NOT NULL,
  `is_published` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `status` smallint(2) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `craeted_by` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `blog_id` (`blog_id`),
  CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blog` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `comment` */

/*Table structure for table `contact` */

DROP TABLE IF EXISTS `contact`;

CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `status` smallint(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `contact` */

/*Table structure for table `cv` */

DROP TABLE IF EXISTS `cv`;

CREATE TABLE `cv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `text` text NOT NULL,
  `status` smallint(2) DEFAULT NULL,
  `order` smallint(2) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `upadted_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `cv` */

/*Table structure for table `front_menu` */

DROP TABLE IF EXISTS `front_menu`;

CREATE TABLE `front_menu` (
  `nodeid` int(6) NOT NULL AUTO_INCREMENT,
  `parentnodeid` int(6) NOT NULL DEFAULT '0',
  `nodeshortname` varchar(50) NOT NULL,
  `nodename` varchar(100) NOT NULL,
  `nodeurl` varchar(255) NOT NULL,
  `userstatus` varchar(10) NOT NULL DEFAULT 'ALL',
  `nodeaccess` int(1) NOT NULL,
  `nodestatus` int(1) NOT NULL,
  `nodeorder` int(3) NOT NULL,
  `service_id` int(11) DEFAULT NULL,
  `nodefile` varchar(255) DEFAULT NULL,
  `nodeicon` varchar(50) DEFAULT NULL,
  `ishasdivider` enum('no','yes') NOT NULL DEFAULT 'no',
  `hasnotify` enum('no','yes') NOT NULL DEFAULT 'no',
  `notifyscript` varchar(255) DEFAULT '',
  `isforguest` enum('no','yes') DEFAULT 'yes',
  `arrow_tag` varchar(255) DEFAULT NULL,
  `position` enum('left','right','top') DEFAULT NULL,
  PRIMARY KEY (`nodeid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `front_menu` */

/*Table structure for table `in_the_press` */

DROP TABLE IF EXISTS `in_the_press`;

CREATE TABLE `in_the_press` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `text` text NOT NULL,
  `status` smallint(2) DEFAULT NULL,
  `order` smallint(2) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `in_the_press` */

/*Table structure for table `login_details` */

DROP TABLE IF EXISTS `login_details`;

CREATE TABLE `login_details` (
  `login_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_user_id` int(11) NOT NULL,
  `login_status` tinyint(1) NOT NULL DEFAULT '0',
  `login_at` datetime NOT NULL,
  `logout_at` datetime DEFAULT NULL,
  `user_ip_address` varchar(16) NOT NULL,
  PRIMARY KEY (`login_detail_id`),
  KEY `login_user_id` (`login_user_id`),
  CONSTRAINT `login_details_ibfk_1` FOREIGN KEY (`login_user_id`) REFERENCES `user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `login_details` */

insert  into `login_details`(`login_detail_id`,`login_user_id`,`login_status`,`login_at`,`logout_at`,`user_ip_address`) values 
(1,1,1,'2019-11-14 21:53:57',NULL,'127.0.0.1'),
(2,1,1,'2019-11-20 23:36:14',NULL,'127.0.0.1'),
(3,1,1,'2019-11-22 20:11:17',NULL,'127.0.0.1');

/*Table structure for table `miscellanea` */

DROP TABLE IF EXISTS `miscellanea`;

CREATE TABLE `miscellanea` (
  `id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `title` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `alias` varchar(500) DEFAULT NULL,
  `status` smallint(2) DEFAULT NULL,
  `order` smallint(2) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `miscellanea` */

/*Table structure for table `my_research` */

DROP TABLE IF EXISTS `my_research`;

CREATE TABLE `my_research` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `type` smallint(2) DEFAULT NULL,
  `status` smallint(2) DEFAULT NULL,
  `order` smallint(2) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `my_research` */

/*Table structure for table `profiles` */

DROP TABLE IF EXISTS `profiles`;

CREATE TABLE `profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `link` varchar(500) NOT NULL,
  `type` enum('social','publication') DEFAULT NULL,
  `description` text,
  `order` smallint(2) DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `profiles` */

/*Table structure for table `publication` */

DROP TABLE IF EXISTS `publication`;

CREATE TABLE `publication` (
  `id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `title` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `alias` varchar(500) DEFAULT NULL,
  `status` smallint(2) DEFAULT NULL,
  `order` smallint(2) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `publication` */

/*Table structure for table `resources` */

DROP TABLE IF EXISTS `resources`;

CREATE TABLE `resources` (
  `id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `title` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `alias` varchar(500) DEFAULT NULL,
  `status` smallint(2) DEFAULT NULL,
  `order` smallint(2) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `resources` */

/*Table structure for table `setting` */

DROP TABLE IF EXISTS `setting`;

CREATE TABLE `setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `setting` */

/*Table structure for table `talks` */

DROP TABLE IF EXISTS `talks`;

CREATE TABLE `talks` (
  `id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `title` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `alias` varchar(500) DEFAULT NULL,
  `status` smallint(2) DEFAULT NULL,
  `order` smallint(2) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `talks` */

/*Table structure for table `teaching` */

DROP TABLE IF EXISTS `teaching`;

CREATE TABLE `teaching` (
  `id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `title` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `alias` varchar(500) DEFAULT NULL,
  `status` smallint(2) DEFAULT NULL,
  `order` smallint(2) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `teaching` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(65) NOT NULL,
  `user_password` varchar(150) NOT NULL,
  `email` varchar(64) DEFAULT NULL,
  `user_type` char(2) NOT NULL,
  `is_block` tinyint(1) NOT NULL DEFAULT '0',
  `avatar` varchar(500) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `secret_key` varchar(255) DEFAULT NULL,
  `auth_key` varchar(255) DEFAULT NULL,
  `session_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_login_id` (`username`),
  KEY `updated_by` (`updated_by`),
  KEY `created_by` (`created_by`),
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `user` (`user_id`),
  CONSTRAINT `user_ibfk_2` FOREIGN KEY (`updated_by`) REFERENCES `user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

/*Data for the table `user` */

insert  into `user`(`user_id`,`username`,`user_password`,`email`,`user_type`,`is_block`,`avatar`,`created_at`,`created_by`,`updated_at`,`updated_by`,`secret_key`,`auth_key`,`session_id`) values 
(1,'admin','f6fdffe48c908deb0f4c3bd36c032e72','admin@polytech.tj','E',0,'std7.jpg','2019-10-12 14:32:54',1,'2015-05-27 15:56:35',1,NULL,NULL,'b5ugtsnfpsvso16i1m5jpl7eg86lcil3'),
(22,'admin2','af8eb328301d219cfd1d50e6c6a48f58',NULL,'A',0,'std5.jpg','2019-10-12 13:45:41',1,NULL,NULL,NULL,NULL,'i44c6ra6ukintfbsfc83gfcelnb5qifb'),
(23,'admin3','7169390683d2b222ba778ca6374b59d3',NULL,'A',1,'std7.jpg','2019-10-12 13:52:10',1,NULL,NULL,NULL,NULL,'ak5h7tnec99b69cipd80ralc0p2fa23l'),
(25,'admin4','dfa5f43cb476ef890a83010f0da7c6b0',NULL,'A',1,'std3.jpg','2019-10-12 13:57:57',1,NULL,NULL,NULL,NULL,'2pqp9rissts870sj830jkor0jntj15h9'),
(26,'admin6','b48d62f30f50c2c191ab949186c532d3',NULL,'A',1,'std6.jpg','2019-10-12 14:05:01',1,NULL,NULL,NULL,NULL,'90c8pfqa6cchpcofouj9qsl1hvngu3f3');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
