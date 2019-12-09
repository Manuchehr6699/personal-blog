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
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `room` varchar(200) DEFAULT NULL,
  `campus` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `text` text NOT NULL,
  `photo` varchar(500) DEFAULT NULL,
  `status` smallint(2) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `about_me` */

insert  into `about_me`(`id`,`first_name`,`last_name`,`birth_date`,`department`,`role`,`room`,`campus`,`position`,`text`,`photo`,`status`,`created_at`,`created_by`,`updated_at`,`updated_by`) values 
(1,'Abel','Polese','1976-06-17',NULL,NULL,NULL,NULL,'Phd','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>','person_abel_polese-300x286.jpg',1,1575481302,1,1575804060,1);

/*Table structure for table `back_menu` */

DROP TABLE IF EXISTS `back_menu`;

CREATE TABLE `back_menu` (
  `nodeid` int(6) NOT NULL AUTO_INCREMENT,
  `parentnodeid` int(6) DEFAULT '0',
  `page_id` int(11) DEFAULT '0',
  `nodeshortname` varchar(50) DEFAULT NULL,
  `nodename` varchar(100) NOT NULL,
  `nodeurl` varchar(255) NOT NULL,
  `userstatus` varchar(10) DEFAULT 'ALL',
  `nodeaccess` int(1) DEFAULT NULL,
  `nodestatus` int(1) DEFAULT NULL,
  `nodeorder` int(3) DEFAULT NULL,
  `nodefile` varchar(255) DEFAULT NULL,
  `nodeicon` varchar(50) DEFAULT NULL,
  `ishasdivider` enum('no','yes') DEFAULT 'no',
  `hasnotify` enum('no','yes') DEFAULT 'no',
  `notifyscript` varchar(255) DEFAULT '',
  `isforguest` enum('no','yes') DEFAULT 'yes',
  `arrow_tag` varchar(255) DEFAULT NULL,
  `position` enum('left','right','top') DEFAULT NULL,
  PRIMARY KEY (`nodeid`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

/*Data for the table `back_menu` */

insert  into `back_menu`(`nodeid`,`parentnodeid`,`page_id`,`nodeshortname`,`nodename`,`nodeurl`,`userstatus`,`nodeaccess`,`nodestatus`,`nodeorder`,`nodefile`,`nodeicon`,`ishasdivider`,`hasnotify`,`notifyscript`,`isforguest`,`arrow_tag`,`position`) values 
(1,0,NULL,'Dashboard','Dashboard','#','ALL',1,NULL,7,NULL,'fa fa-file','no','no','','yes',NULL,NULL),
(2,1,NULL,'Dashboard','Dashboard','/admin','ALL',1,NULL,5,NULL,'','no','no','','yes',NULL,NULL),
(3,0,NULL,'Manage Pages','Manage Pages','#','ALL',1,NULL,30,NULL,'fa fa-file','no','no','','yes',NULL,NULL),
(4,17,NULL,'Site Menu Items','Site Menu Items','/admin/front-menu/index','ALL',1,NULL,35,NULL,'fa fa-list','no','no','','yes',NULL,NULL),
(5,17,NULL,'Admin Menu Items','Admin Menu Items','/admin/back-menu/index','ALL',1,NULL,36,NULL,'fa fa-list','no','no','','yes',NULL,NULL),
(6,0,NULL,'About Me','About Me','#','ALL',1,NULL,18,NULL,'fa fa-user','no','no','','yes',NULL,NULL),
(7,6,NULL,'About Me','About Me','/admin/about-me/view','ALL',1,NULL,0,NULL,'','no','no','','yes',NULL,NULL),
(8,6,NULL,'CV','CV','/admin/cv/view','ALL',1,NULL,22,NULL,'','no','no','','yes',NULL,NULL),
(9,6,NULL,'Contacts','Contacts','/admin/contact/index','ALL',1,NULL,23,NULL,'','no','no','','yes',NULL,NULL),
(10,0,NULL,'Blog','Blog','/admin/blog/index','ALL',1,NULL,24,NULL,'fa fa-file','no','no','','yes',NULL,NULL),
(11,10,NULL,'My Posts','My Posts','/admin/blog/index','ALL',1,NULL,26,NULL,'','no','no','','yes',NULL,NULL),
(12,10,NULL,'Add new post','Add new post','/admin/blog/create','ALL',1,NULL,27,NULL,'','no','no','','yes',NULL,NULL),
(13,0,NULL,'Users','Users','/admin/users/comments','ALL',1,NULL,29,NULL,'fa fa-users','no','no','','yes',NULL,NULL),
(14,13,NULL,'Users Info','Users Info','/admin/main/user-info','ALL',1,NULL,32,NULL,'','no','no','','yes',NULL,NULL),
(15,13,NULL,'Login Details','Login Details','/admin/main/login-details','ALL',1,NULL,33,NULL,'','no','no','','yes',NULL,NULL),
(16,13,NULL,'Comments','Comments','/admin/comment/index','ALL',1,NULL,2,NULL,'fa fa-comments','no','no','','yes',NULL,NULL),
(17,0,NULL,'Menu','Manage Menu','#','ALL',1,NULL,34,NULL,'fa fa-list','no','no','','yes',NULL,NULL),
(18,3,NULL,'New page','Create new page','/admin/pages/create','ALL',1,NULL,38,NULL,'','no','no','','yes',NULL,NULL),
(19,0,NULL,'Web-site settings','Web-site settings','/admin/settings','ALL',1,NULL,39,NULL,'fa fa-cogs','no','no','','yes',NULL,NULL),
(20,19,NULL,'Settings','Settings','/admin/settings','ALL',1,NULL,40,NULL,'','no','no','','yes',NULL,NULL),
(21,3,NULL,'Pages','Pages','/admin/pages','ALL',1,NULL,41,NULL,'','no','no','','yes',NULL,NULL),
(22,17,0,'Add new Admin Menu Item','Add new Admin Menu Item','/admin/back-menu/create','ALL',1,NULL,1,NULL,'','no','no','','yes',NULL,NULL),
(23,17,0,'Add new UserMenu Item','Add new UserMenu Item','/admin/front-menu/create','ALL',1,NULL,2,NULL,'','no','no','','yes',NULL,NULL),
(24,6,0,'Profiles','Profiles','/admin/profiles','ALL',1,NULL,42,NULL,'','no','no','','yes',NULL,NULL),
(25,10,0,'Show All Posts','Show All Posts','/admin/blog/posts','ALL',1,NULL,43,NULL,'','no','no','','yes',NULL,NULL),
(26,10,0,'Blog Categories','Blog Categories','/admin/category/index','ALL',1,NULL,44,NULL,'','no','no','','yes',NULL,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `blog` */

insert  into `blog`(`id`,`title`,`text`,`photo`,`alias`,`status`,`tags`,`like_count`,`created_at`,`created_by`,`updated_at`,`updated_by`) values 
(7,'its title','<p>awdwadaw</p>','pexels-photo-871053-1000x486.jpg','its-title',1,'a:8:{i:0;s:12:\"dawddawdwada\";i:1;s:7:\"adwdada\";i:2;s:4:\"dawd\";i:3;s:8:\"awdadawd\";i:4;s:5:\"wadda\";i:5;s:5:\"awdad\";i:6;s:1:\"a\";i:7;s:2:\"da\";}',NULL,1574875699,1,NULL,NULL),
(8,'its title','<p>awdwadaw</p>','pexels-photo-871053-1000x486.jpg','its-title',1,'a:8:{i:0;s:12:\"dawddawdwada\";i:1;s:7:\"adwdada\";i:2;s:4:\"dawd\";i:3;s:8:\"awdadawd\";i:4;s:5:\"wadda\";i:5;s:5:\"awdad\";i:6;s:1:\"a\";i:7;s:2:\"da\";}',NULL,1574875699,1,NULL,NULL),
(9,'its title','<p>awdwadaw</p>','pexels-photo-871053-1000x486.jpg','its-title',1,'a:8:{i:0;s:12:\"dawddawdwada\";i:1;s:7:\"adwdada\";i:2;s:4:\"dawd\";i:3;s:8:\"awdadawd\";i:4;s:5:\"wadda\";i:5;s:5:\"awdad\";i:6;s:1:\"a\";i:7;s:2:\"da\";}',NULL,1574875699,1,NULL,NULL);

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
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `blog_category` */

insert  into `blog_category`(`id`,`blog_id`,`category_id`,`status`,`created_at`,`created_by`,`updated_at`,`updated_by`) values 
(7,7,2,1,1574875699,1,NULL,NULL),
(8,7,1,1,1574875699,1,NULL,NULL),
(9,7,2,1,1574875699,1,NULL,NULL);

/*Table structure for table `cache` */

DROP TABLE IF EXISTS `cache`;

CREATE TABLE `cache` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `expire` int(11) DEFAULT NULL,
  `data` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `cache` */

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `category` */

insert  into `category`(`id`,`name`,`description`,`status`,`created_at`,`created_by`,`updated_at`,`updated_by`) values 
(1,'Fashion','',1,213131,1,NULL,NULL),
(2,'Food','',1,1231231,1,NULL,NULL),
(3,'Car','',1,1232131,1,NULL,NULL),
(4,'Economic','',1,12312321,1,NULL,NULL);

/*Table structure for table `comment` */

DROP TABLE IF EXISTS `comment`;

CREATE TABLE `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `reply` text COLLATE utf8_unicode_ci,
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
  KEY `blog_id` (`blog_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `comment` */

insert  into `comment`(`id`,`text`,`reply`,`name`,`email`,`web`,`blog_id`,`is_published`,`status`,`created_at`,`craeted_by`,`updated_at`,`updated_by`) values 
(5,'adwdawda ewrwrwrwr','adwdawda ewrwrwrwrdawdawdawdawda\n515151','qweq','qeq','qew',7,'yes',1,1232131,1,NULL,NULL),
(6,'sss','sssdawdnawlndajwnda\nsdfasdasdasda','aw','www','ddd',7,'yes',1,1232131,1,NULL,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `contact` */

insert  into `contact`(`id`,`country`,`city`,`address`,`phone_number`,`status`) values 
(1,'Estonia','Tallin',' ','+37256059023',1);

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
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `cv` */

insert  into `cv`(`id`,`title`,`text`,`status`,`order`,`created_at`,`created_by`,`updated_at`,`updated_by`) values 
(2,'EDUCATION','<p style=\"text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p style=\"text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p style=\"text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p style=\"text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p style=\"text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p style=\"text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p style=\"text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p style=\"text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p style=\"text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p style=\"text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p style=\"text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p style=\"text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p style=\"text-align: justify;\">&nbsp;</p>',1,NULL,1575483020,1,1575483020,1),
(3,'RECENT ACADEMIC EMPLOYMENT','<p>2012 &ndash; present Assistant Professor, Divisi&oacute;n de Administraci&oacute;n P&uacute;blica, Centro de Investigaci&oacute;n y Docencia Econ&oacute;micas (CIDE) Sede Regi&oacute;n Centro<br />2006 &ndash; 2012 Lecturer, Department of Political Science, The University of British Columbia<br />2010 Regional Director for Western Canada and Lead Researcher in Water and Climate Change, Canadian Institute for Environmental Law and Policy (CIELAP)</p>',1,NULL,1575483034,1,1575483034,1);

/*Table structure for table `front_menu` */

DROP TABLE IF EXISTS `front_menu`;

CREATE TABLE `front_menu` (
  `nodeid` int(6) NOT NULL AUTO_INCREMENT,
  `parentnodeid` int(6) DEFAULT '0',
  `page_id` int(11) DEFAULT '0',
  `nodeshortname` varchar(50) DEFAULT NULL,
  `nodename` varchar(100) NOT NULL,
  `nodeurl` varchar(255) NOT NULL,
  `userstatus` varchar(10) DEFAULT 'ALL',
  `nodeaccess` int(1) DEFAULT NULL,
  `nodestatus` int(1) DEFAULT NULL,
  `nodeorder` int(3) DEFAULT NULL,
  `nodefile` varchar(255) DEFAULT NULL,
  `nodeicon` varchar(50) DEFAULT NULL,
  `ishasdivider` enum('no','yes') DEFAULT 'no',
  `hasnotify` enum('no','yes') DEFAULT 'no',
  `notifyscript` varchar(255) DEFAULT '',
  `isforguest` enum('no','yes') DEFAULT 'yes',
  `arrow_tag` varchar(255) DEFAULT NULL,
  `position` enum('left','right','top') DEFAULT NULL,
  PRIMARY KEY (`nodeid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `front_menu` */

insert  into `front_menu`(`nodeid`,`parentnodeid`,`page_id`,`nodeshortname`,`nodename`,`nodeurl`,`userstatus`,`nodeaccess`,`nodestatus`,`nodeorder`,`nodefile`,`nodeicon`,`ishasdivider`,`hasnotify`,`notifyscript`,`isforguest`,`arrow_tag`,`position`) values 
(1,0,0,'About me','About me','/main/about-me/','ALL',1,NULL,0,NULL,'','no','no','','yes',NULL,NULL),
(2,1,0,'CV','CV','/main/cv/','ALL',1,NULL,4,NULL,'','no','no','','yes',NULL,NULL),
(3,0,0,'Blog','Blog','/blog/posts','ALL',1,NULL,6,NULL,'','no','no','','yes',NULL,NULL),
(4,0,0,'Contact','Contact','/contact/','ALL',1,NULL,8,NULL,'','no','no','','yes',NULL,NULL);

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
  KEY `login_user_id` (`login_user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

/*Data for the table `login_details` */

insert  into `login_details`(`login_detail_id`,`login_user_id`,`login_status`,`login_at`,`logout_at`,`user_ip_address`) values 
(1,1,1,'2019-11-14 21:53:57',NULL,'127.0.0.1'),
(2,1,1,'2019-11-20 23:36:14',NULL,'127.0.0.1'),
(3,1,1,'2019-11-22 20:11:17',NULL,'127.0.0.1'),
(4,1,1,'2019-11-30 09:47:21',NULL,'127.0.0.1'),
(5,1,1,'2019-11-30 09:49:23',NULL,'127.0.0.1'),
(6,1,1,'2019-12-04 00:31:59',NULL,'127.0.0.1'),
(7,1,1,'2019-12-04 14:20:32',NULL,'127.0.0.1'),
(8,1,1,'2019-12-05 20:00:16',NULL,'127.0.0.1'),
(9,1,1,'2019-12-06 16:24:00',NULL,'127.0.0.1'),
(10,1,1,'2019-12-06 17:38:40',NULL,'127.0.0.1'),
(11,1,1,'2019-12-06 17:39:05',NULL,'127.0.0.1'),
(12,1,1,'2019-12-06 17:44:11',NULL,'127.0.0.1'),
(13,1,1,'2019-12-06 18:56:19',NULL,'127.0.0.1'),
(14,1,1,'2019-12-07 10:24:50',NULL,'127.0.0.1'),
(15,1,1,'2019-12-08 08:46:51',NULL,'127.0.0.1'),
(16,1,1,'2019-12-08 14:47:46',NULL,'127.0.0.1'),
(17,1,1,'2019-12-08 16:20:44',NULL,'127.0.0.1');

/*Table structure for table `migration` */

DROP TABLE IF EXISTS `migration`;

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `migration` */

insert  into `migration`(`version`,`apply_time`) values 
('m000000_000000_base',1575471030),
('m191204_144926_tbl_cache',1575471034);

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

/*Table structure for table `my_books` */

DROP TABLE IF EXISTS `my_books`;

CREATE TABLE `my_books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `author` varchar(250) DEFAULT NULL,
  `publisher` varchar(250) DEFAULT NULL,
  `publish_year` varchar(5) DEFAULT NULL,
  `isbn` varchar(200) DEFAULT NULL,
  `page_count` int(4) DEFAULT NULL,
  `language` varchar(100) DEFAULT NULL,
  `category` varchar(250) DEFAULT NULL,
  `description` text,
  `photo` varchar(500) NOT NULL,
  `ebook_file` varchar(500) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `my_books` */

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

/*Table structure for table `pages` */

DROP TABLE IF EXISTS `pages`;

CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT '0',
  `title` varchar(500) NOT NULL,
  `menu_title` varchar(255) DEFAULT NULL,
  `text` text,
  `status` tinyint(2) DEFAULT '1',
  `order` tinyint(3) DEFAULT NULL,
  `blogs_id` varchar(500) DEFAULT NULL,
  `tags` varchar(500) DEFAULT NULL,
  `slug` varchar(500) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `pages` */

/*Table structure for table `profiles` */

DROP TABLE IF EXISTS `profiles`;

CREATE TABLE `profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `link` varchar(500) NOT NULL,
  `type` enum('social','publication') DEFAULT NULL,
  `description` text,
  `order` smallint(2) DEFAULT NULL,
  `icon` varchar(20) DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `profiles` */

insert  into `profiles`(`id`,`name`,`link`,`type`,`description`,`order`,`icon`,`status`,`created_at`,`created_by`,`updated_at`,`updated_by`) values 
(1,'abel.polese@tlu.ee','abel.polese@tlu.ee','social','It\'s my Email',NULL,'email',1,1575795227,1,NULL,NULL),
(2,'@abiquitous','https://twitter.com/abiquitous','social','It\'s my Tweetter profile.',NULL,'twitter',1,1575796372,1,1575796399,1);

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `setting` */

insert  into `setting`(`id`,`type`,`section`,`key`,`value`,`status`,`description`,`created_at`,`updated_at`) values 
(1,'string','Site','sitename','Abel Polese, PhD',1,'It\'s site name and used like Title in home page',1575215973,1575791729),
(2,'string','Site','description','Senior Research Fellow with DCU Institute for International Conflict Resolution and Reconstruction',1,'Describe site',1575216197,1575790053),
(3,'string','test','test','test',1,'test',1575373966,1575373966),
(4,'string','Site','empty_result','Here is not any data yet!',1,'if page have not any data',1575808004,1575808004);

/*Table structure for table `subcribers` */

DROP TABLE IF EXISTS `subcribers`;

CREATE TABLE `subcribers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `status` tinyint(2) DEFAULT '0',
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `subcribers` */

insert  into `subcribers`(`id`,`email`,`status`,`created_at`,`updated_at`,`updated_by`) values 
(1,'manu6699@mail.ru',2,1575823844,NULL,NULL),
(5,'manu66929@mail.ru',2,1575824533,NULL,NULL),
(6,'manu669ee9@mail.ru',2,1575824879,NULL,NULL);

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
  KEY `created_by` (`created_by`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

/*Data for the table `user` */

insert  into `user`(`user_id`,`username`,`user_password`,`email`,`user_type`,`is_block`,`avatar`,`created_at`,`created_by`,`updated_at`,`updated_by`,`secret_key`,`auth_key`,`session_id`) values 
(1,'admin','f6fdffe48c908deb0f4c3bd36c032e72','manu6699@mail.ru','A',0,'person_abel_polese-300x286.jpg','2019-10-12 14:32:54',1,'2015-05-27 15:56:35',1,'IoY4IvIAdoXtwJSsVucGTPET0gNMjgr3_1575801111',NULL,'qgitbbuf12bvde01qh3fc0gst2eav1ik'),
(22,'admin2','af8eb328301d219cfd1d50e6c6a48f58',NULL,'A',0,'std5.jpg','2019-10-12 13:45:41',1,NULL,NULL,NULL,NULL,'i44c6ra6ukintfbsfc83gfcelnb5qifb'),
(23,'admin3','7169390683d2b222ba778ca6374b59d3',NULL,'A',0,'std7.jpg','2019-10-12 13:52:10',1,NULL,NULL,NULL,NULL,'ak5h7tnec99b69cipd80ralc0p2fa23l'),
(25,'admin4','dfa5f43cb476ef890a83010f0da7c6b0',NULL,'A',0,'std3.jpg','2019-10-12 13:57:57',1,NULL,NULL,NULL,NULL,'2pqp9rissts870sj830jkor0jntj15h9'),
(26,'admin6','b48d62f30f50c2c191ab949186c532d3',NULL,'A',0,'std6.jpg','2019-10-12 14:05:01',1,NULL,NULL,NULL,NULL,'90c8pfqa6cchpcofouj9qsl1hvngu3f3');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
