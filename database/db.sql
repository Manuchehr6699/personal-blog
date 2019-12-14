/*
SQLyog  v13.1.1 (64 bit)
MySQL - 5.7.25 : Database - blog
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
(1,'Abel','Polese','1976-06-17',NULL,NULL,NULL,NULL,'Phd','<div class=\"row-fluid\">\r\n<div class=\"pull-left\">&nbsp;</div>\r\n</div>\r\n<div class=\"expander\">\r\n<div>\r\n<div style=\"text-align: justify;\">Abel Polese is a Senior Research Fellow with DCU Institute for International Conflict Resolution and Reconstruction. He has been a Marie Curie Fellow at the Technical University of Dresden, Germany (2006-2008) and the University of Edinburgh, Scotland (2008-2011). In 2012-2013 he worked&nbsp; as a policy analyst for the European Commission (DG Research).<br />In the past seven years, Abel has been awarded funding for nearly 10 million euro and has worked as a consultant for a the governmental and non profit sector in Europe, Asia and Latin America (Austrian and Finnish Agencies for Erasmus+; Estonian Research Council; Rustaveli Foundation; SALTO; YouthForum; WAGGGS; UNOPS). His project &ldquo;Sustainable Development in Cultural Diversity&rdquo; received the Global Education Award by the Council of Europe in 2011.<br />He is a member of the Global Young Academy, gathering scholars from around the world active in research policy and dialogue with non-academic institutions and has been a visiting fellow to the University of Toronto, Harvard University, Renmin University of China, Tbilisi State University, Jawarlahal Nehru University, Tezpur University, Corvinus University, University of Cagliari and the Moscow Higher School of Economics.He is co-editor of STSS, an open access journal indexed in SCOPUS focusing on governance and social issues the non-Western world.</div>\r\n<div>\r\n<h3>&nbsp;</h3>\r\n<h3>Research Interests</h3>\r\n<p>Theory and Practice of Development, Post-Soviet Politics and Societies, Governance Caucasus, Central Asia, Eastern Europe, South East Asia.</p>\r\n</div>\r\n</div>\r\n</div>','person_abel_polese-300x286.jpg',1,1575481232,1,1576059553,1);

/*Table structure for table `auth_assignment` */

DROP TABLE IF EXISTS `auth_assignment`;

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  KEY `idx-auth_assignment-user_id` (`user_id`),
  CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `auth_assignment` */

insert  into `auth_assignment`(`item_name`,`user_id`,`created_at`) values 
('Admin','1',1576315059);

/*Table structure for table `auth_item` */

DROP TABLE IF EXISTS `auth_item`;

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `idx-auth_item-type` (`type`),
  CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `auth_item` */

insert  into `auth_item`(`name`,`type`,`description`,`rule_name`,`data`,`created_at`,`updated_at`) values 
('/admin/*',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/about-me/*',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/about-me/create',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/about-me/delete',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/about-me/update',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/about-me/view',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/back-menu/*',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/back-menu/create',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/back-menu/delete',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/back-menu/index',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/back-menu/update',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/back-menu/view',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/blog-category/*',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/blog-category/create',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/blog-category/delete',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/blog-category/index',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/blog-category/update',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/blog-category/view',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/blog/*',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/blog/create',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/blog/delete',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/blog/index',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/blog/posts',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/blog/update',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/blog/view',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/category/*',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/category/create',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/category/delete',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/category/index',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/category/update',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/category/view',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/comment/*',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/comment/answer',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/comment/create',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/comment/delete',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/comment/index',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/comment/messages',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/comment/reply',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/comment/update',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/comment/view',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/contact/*',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/contact/create',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/contact/delete',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/contact/index',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/contact/update',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/contact/view',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/cv/*',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/cv/create',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/cv/delete',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/cv/index',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/cv/update',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/cv/view',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/editable/*',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/editable/change-about-me',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/editable/change-about-me-status',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/editable/change-admin-menu-nodeaccess',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/editable/change-book-status',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/editable/change-category-status',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/editable/change-comment-status',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/editable/change-contact',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/editable/change-contact-status',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/editable/change-cv',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/editable/change-cv-status',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/editable/change-page-status',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/editable/change-password',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/editable/change-photo',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/editable/change-post-status',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/editable/change-profiles-status',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/editable/change-setting-status',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/editable/change-subcriber-status',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/editable/change-text',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/editable/change-user-menu-nodeaccess',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/editable/change-user-status',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/front-menu/*',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/front-menu/create',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/front-menu/delete',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/front-menu/index',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/front-menu/update',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/front-menu/view',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/in-the-press/*',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/in-the-press/create',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/in-the-press/delete',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/in-the-press/index',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/in-the-press/update',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/in-the-press/view',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/main/*',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/main/error',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/main/forgot-password',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/main/index',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/main/login',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/main/login-details',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/main/logout',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/main/profile',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/main/reset-password',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/main/subcribers',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/main/user-info',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/my-books/*',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/my-books/create',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/my-books/delete',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/my-books/index',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/my-books/update',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/my-books/view',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/pages/*',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/pages/create',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/pages/delete',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/pages/index',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/pages/update',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/pages/view',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/profiles/*',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/profiles/create',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/profiles/delete',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/profiles/index',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/profiles/update',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/profiles/view',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/settings/*',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/settings/create',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/settings/delete',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/settings/edit-setting',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/settings/index',2,NULL,NULL,NULL,1576315012,1576315012),
('/admin/settings/update',2,NULL,NULL,NULL,1576315012,1576315012),
('/rbac/*',2,NULL,NULL,NULL,1576315012,1576315012),
('Admin',2,NULL,NULL,NULL,1576314993,1576314993);

/*Table structure for table `auth_item_child` */

DROP TABLE IF EXISTS `auth_item_child`;

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `auth_item_child` */

insert  into `auth_item_child`(`parent`,`child`) values 
('Admin','/admin/*'),
('Admin','/admin/about-me/*'),
('Admin','/admin/about-me/create'),
('Admin','/admin/about-me/delete'),
('Admin','/admin/about-me/update'),
('Admin','/admin/about-me/view'),
('Admin','/admin/back-menu/*'),
('Admin','/admin/back-menu/create'),
('Admin','/admin/back-menu/delete'),
('Admin','/admin/back-menu/index'),
('Admin','/admin/back-menu/update'),
('Admin','/admin/back-menu/view'),
('Admin','/admin/blog-category/*'),
('Admin','/admin/blog-category/create'),
('Admin','/admin/blog-category/delete'),
('Admin','/admin/blog-category/index'),
('Admin','/admin/blog-category/update'),
('Admin','/admin/blog-category/view'),
('Admin','/admin/blog/*'),
('Admin','/admin/blog/create'),
('Admin','/admin/blog/delete'),
('Admin','/admin/blog/index'),
('Admin','/admin/blog/posts'),
('Admin','/admin/blog/update'),
('Admin','/admin/blog/view'),
('Admin','/admin/category/*'),
('Admin','/admin/category/create'),
('Admin','/admin/category/delete'),
('Admin','/admin/category/index'),
('Admin','/admin/category/update'),
('Admin','/admin/category/view'),
('Admin','/admin/comment/*'),
('Admin','/admin/comment/answer'),
('Admin','/admin/comment/create'),
('Admin','/admin/comment/delete'),
('Admin','/admin/comment/index'),
('Admin','/admin/comment/messages'),
('Admin','/admin/comment/reply'),
('Admin','/admin/comment/update'),
('Admin','/admin/comment/view'),
('Admin','/admin/contact/*'),
('Admin','/admin/contact/create'),
('Admin','/admin/contact/delete'),
('Admin','/admin/contact/index'),
('Admin','/admin/contact/update'),
('Admin','/admin/contact/view'),
('Admin','/admin/cv/*'),
('Admin','/admin/cv/create'),
('Admin','/admin/cv/delete'),
('Admin','/admin/cv/index'),
('Admin','/admin/cv/update'),
('Admin','/admin/cv/view'),
('Admin','/admin/editable/*'),
('Admin','/admin/editable/change-about-me'),
('Admin','/admin/editable/change-about-me-status'),
('Admin','/admin/editable/change-admin-menu-nodeaccess'),
('Admin','/admin/editable/change-book-status'),
('Admin','/admin/editable/change-category-status'),
('Admin','/admin/editable/change-comment-status'),
('Admin','/admin/editable/change-contact'),
('Admin','/admin/editable/change-contact-status'),
('Admin','/admin/editable/change-cv'),
('Admin','/admin/editable/change-cv-status'),
('Admin','/admin/editable/change-page-status'),
('Admin','/admin/editable/change-password'),
('Admin','/admin/editable/change-photo'),
('Admin','/admin/editable/change-post-status'),
('Admin','/admin/editable/change-profiles-status'),
('Admin','/admin/editable/change-setting-status'),
('Admin','/admin/editable/change-subcriber-status'),
('Admin','/admin/editable/change-text'),
('Admin','/admin/editable/change-user-menu-nodeaccess'),
('Admin','/admin/editable/change-user-status'),
('Admin','/admin/front-menu/*'),
('Admin','/admin/front-menu/create'),
('Admin','/admin/front-menu/delete'),
('Admin','/admin/front-menu/index'),
('Admin','/admin/front-menu/update'),
('Admin','/admin/front-menu/view'),
('Admin','/admin/in-the-press/*'),
('Admin','/admin/in-the-press/create'),
('Admin','/admin/in-the-press/delete'),
('Admin','/admin/in-the-press/index'),
('Admin','/admin/in-the-press/update'),
('Admin','/admin/in-the-press/view'),
('Admin','/admin/main/*'),
('Admin','/admin/main/error'),
('Admin','/admin/main/forgot-password'),
('Admin','/admin/main/index'),
('Admin','/admin/main/login'),
('Admin','/admin/main/login-details'),
('Admin','/admin/main/logout'),
('Admin','/admin/main/profile'),
('Admin','/admin/main/reset-password'),
('Admin','/admin/main/subcribers'),
('Admin','/admin/main/user-info'),
('Admin','/admin/my-books/*'),
('Admin','/admin/my-books/create'),
('Admin','/admin/my-books/delete'),
('Admin','/admin/my-books/index'),
('Admin','/admin/my-books/update'),
('Admin','/admin/my-books/view'),
('Admin','/admin/pages/*'),
('Admin','/admin/pages/create'),
('Admin','/admin/pages/delete'),
('Admin','/admin/pages/index'),
('Admin','/admin/pages/update'),
('Admin','/admin/pages/view'),
('Admin','/admin/profiles/*'),
('Admin','/admin/profiles/create'),
('Admin','/admin/profiles/delete'),
('Admin','/admin/profiles/index'),
('Admin','/admin/profiles/update'),
('Admin','/admin/profiles/view'),
('Admin','/admin/settings/*'),
('Admin','/admin/settings/create'),
('Admin','/admin/settings/delete'),
('Admin','/admin/settings/edit-setting'),
('Admin','/admin/settings/index'),
('Admin','/admin/settings/update'),
('Admin','/rbac/*');

/*Table structure for table `auth_rule` */

DROP TABLE IF EXISTS `auth_rule`;

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `auth_rule` */

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
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

/*Data for the table `back_menu` */

insert  into `back_menu`(`nodeid`,`parentnodeid`,`page_id`,`nodeshortname`,`nodename`,`nodeurl`,`userstatus`,`nodeaccess`,`nodestatus`,`nodeorder`,`nodefile`,`nodeicon`,`ishasdivider`,`hasnotify`,`notifyscript`,`isforguest`,`arrow_tag`,`position`) values 
(1,0,NULL,'Dashboard','Dashboard','#','ALL',1,NULL,7,NULL,'fa fa-file','no','no','','yes',NULL,NULL),
(2,1,NULL,'Dashboard','Dashboard','/admin','ALL',1,NULL,5,NULL,'','no','no','','yes',NULL,NULL),
(3,0,NULL,'Manage Pages','Manage Pages','#','ALL',1,NULL,32,NULL,'fa fa-file','no','no','','yes',NULL,NULL),
(4,17,NULL,'Site Menu Items','Site Menu Items','/admin/front-menu/index','ALL',1,NULL,37,NULL,'fa fa-list','no','no','','yes',NULL,NULL),
(5,17,NULL,'Admin Menu Items','Admin Menu Items','/admin/back-menu/index','ALL',1,NULL,38,NULL,'fa fa-list','no','no','','yes',NULL,NULL),
(6,0,NULL,'About Me','About Me','#','ALL',1,NULL,18,NULL,'fa fa-user','no','no','','yes',NULL,NULL),
(7,6,NULL,'About Me','About Me','/admin/about-me/view','ALL',1,NULL,0,NULL,'','no','no','','yes',NULL,NULL),
(8,6,NULL,'CV','CV','/admin/cv/view','ALL',1,NULL,23,NULL,'','no','no','','yes',NULL,NULL),
(9,6,NULL,'Contacts','Contacts','/admin/contact/index','ALL',1,NULL,24,NULL,'','no','no','','yes',NULL,NULL),
(10,0,NULL,'Blog','Blog','/admin/blog/index','ALL',1,NULL,25,NULL,'fa fa-file','no','no','','yes',NULL,NULL),
(11,10,NULL,'My Posts','My Posts','/admin/blog/index','ALL',1,NULL,27,NULL,'','no','no','','yes',NULL,NULL),
(12,10,NULL,'Add new post','Add new post','/admin/blog/create','ALL',1,NULL,28,NULL,'','no','no','','yes',NULL,NULL),
(13,0,NULL,'Users','Users','/admin/users/comments','ALL',1,NULL,30,NULL,'fa fa-users','no','no','','yes',NULL,NULL),
(14,13,NULL,'Users Info','Users Info','/admin/main/user-info','ALL',1,NULL,34,NULL,'','no','no','','yes',NULL,NULL),
(15,13,NULL,'Login Details','Login Details','/admin/main/login-details','ALL',1,NULL,35,NULL,'','no','no','','yes',NULL,NULL),
(16,13,NULL,'Comments','Comments','/admin/comment/index','ALL',1,NULL,2,NULL,'fa fa-comments','no','no','','yes',NULL,NULL),
(17,0,NULL,'Menu','Manage Menu','#','ALL',1,NULL,36,NULL,'fa fa-list','no','no','','yes',NULL,NULL),
(18,3,NULL,'New page','Create new page','/admin/pages/create','ALL',1,NULL,40,NULL,'','no','no','','yes',NULL,NULL),
(19,0,NULL,'Web-site settings','Web-site settings','/admin/settings','ALL',1,NULL,41,NULL,'fa fa-cogs','no','no','','yes',NULL,NULL),
(20,19,NULL,'Settings','Settings','/admin/settings','ALL',1,NULL,42,NULL,'','no','no','','yes',NULL,NULL),
(21,3,NULL,'Pages','Pages','/admin/pages','ALL',1,NULL,43,NULL,'','no','no','','yes',NULL,NULL),
(22,17,0,'Add new Admin Menu Item','Add new Admin Menu Item','/admin/back-menu/create','ALL',1,NULL,1,NULL,'','no','no','','yes',NULL,NULL),
(23,17,0,'Add new UserMenu Item','Add new UserMenu Item','/admin/front-menu/create','ALL',1,NULL,2,NULL,'','no','no','','yes',NULL,NULL),
(24,6,0,'Profiles','Profiles','/admin/profiles','ALL',1,NULL,44,NULL,'','no','no','','yes',NULL,NULL),
(25,10,0,'Show All Posts','Show All Posts','/admin/blog/posts','ALL',1,NULL,45,NULL,'','no','no','','yes',NULL,NULL),
(26,10,0,'Blog Categories','Blog Categories','/admin/category/index','ALL',1,NULL,46,NULL,'','no','no','','yes',NULL,NULL),
(27,13,0,'User messages','User Messages','/admin/comment/messages','ALL',1,NULL,31,NULL,'','no','no','','yes',NULL,NULL),
(28,13,0,'Subcribers','Subcribers','/admin/main/subcribers','ALL',1,NULL,47,NULL,'','no','no','','yes',NULL,NULL),
(29,0,0,'Books','Books','/admin/my-books/index','ALL',1,NULL,19,NULL,'','no','no','','yes',NULL,NULL),
(30,29,0,'Books List','Books List','/admin/my-books/index','ALL',1,NULL,48,NULL,'','no','no','','yes',NULL,NULL);

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
  `category_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `blog_id` (`blog_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `blog_category` */

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `category` */

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `contact` */

insert  into `contact`(`id`,`country`,`city`,`address`,`phone_number`,`status`) values 
(1,'Ireland','Dublin City University','Institute for International Conflict Resolution and Reconstruction<br>Faculty of Humanities and Social Sciences','00 353 1 700 7191',1);

/*Table structure for table `cv` */

DROP TABLE IF EXISTS `cv`;

CREATE TABLE `cv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `text` text NOT NULL,
  `status` smallint(2) DEFAULT NULL,
  `cv_file` varchar(500) DEFAULT NULL,
  `order` smallint(2) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `cv` */

insert  into `cv`(`id`,`title`,`text`,`status`,`cv_file`,`order`,`created_at`,`created_by`,`updated_at`,`updated_by`) values 
(1,'Career','<h4>Institutions and positions</h4>\r\n<ul>\r\n<li>01.01.2017 &ndash; Tallinn Law School, Senior Researcher (0,50)</li>\r\n<li>01.09.2015 &ndash; Tallinn University, School of Governance, Law and Society, Senior Researcher (0,50)</li>\r\n<li>01.09.2013&ndash;31.12.2016&nbsp; &nbsp; Tallinn University of Technology , School of Business and Governance, Department of International Relations, Chair of International Relations and Political Science, Senior Researcher (0,50)</li>\r\n<li>01.09.2013&ndash;31.08.2015 Tallinn University, Institute of Political Science and Governance, Senior Researcher (0,50)</li>\r\n<li>01.01.2012&ndash;31.12.2013 European Commission, DG Research and Innovation, Policy Analyst</li>\r\n<li>2011&ndash;2012&nbsp; Tallinn University, Institute of Political Science and Governance, ERMOS postdoctoral fellow (1,00)</li>\r\n<li>01.01.2008&ndash;31.12.2011 University of Edinburgh, Marie Curie Fellow</li>\r\n<li>01.01.2006&ndash;31.12.2008 Dresden Technical University, Marie Curie Fellow</li>\r\n<li>01.01.2004&ndash;31.12.2006 International Christian University, Research Fellow</li>\r\n<li>01.01.2003&ndash;31.12.2004 Open Society Institute/Odessa National University, Visiting Fellow</li>\r\n<li>01.01.2002&ndash;31.12.2003 Academy of Public Administration of the President of Ukraine, Research Fellow</li>\r\n<li>01.01.2000&ndash;31.12.2001 University of Napoli Federico II, Teaching Assistant</li>\r\n</ul>',1,'Abel_Polese_CV.pdf',6,1576083040,1,1576090360,1),
(2,'Education','<p>2004&ndash;2004&nbsp; &nbsp;Certificate, Peace and Reconciliation Studies, Coventry University</p>\r\n<p>2004&ndash;2009&nbsp; &nbsp;PhD, Social and Political Sciences, Free University of Brussels</p>\r\n<p>2001&ndash;2002&nbsp; &nbsp;MA European Studies, College of Europe</p>\r\n<p>1995&ndash;2000&nbsp; &nbsp;BA Economics, University of Napoli Federico II</p>',1,'Abel_Polese_CV.pdf',7,1576083763,1,1576083763,1),
(3,'Qualifications','<p><strong>Academic degrees</strong> &nbsp;&nbsp; &nbsp;<a title=\"Abel Polese, Doctor\'s Degree, 2009, (sup) Mariane Mesnil, Dynamics of Nation Building and Identity Construction: a Case Study of Odessa, Free University of Brussels.\" href=\"https://www.etis.ee/Portal/Mentorships/Display/3de19084-5c80-49ba-af69-5ade3b5c173e\" target=\"_blank\" rel=\"noopener\">Abel Polese, Doctor\'s Degree, 2009, (sup) Mariane Mesnil, Dynamics of Nation Building and Identity Construction: a Case Study of Odessa, Free University of Brussels.</a></p>\r\n<p><strong>Honours &amp; awards</strong>&nbsp; &nbsp; 2015, Abel Polese,</p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 2011, Abel Polese, Global Education Award, Council of Europe</p>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 2011, Abel Polese, Scottish Crucible</p>\r\n<p><strong>Fields of research</strong>&nbsp; &nbsp; &nbsp; ETIS CLASSIFICATION: 2. Culture and Society; 2.12. Economics; CERCS CLASSIFICATION: S195 Development cooperation; SPECIFICATION: Governance, Informal Governance, Informal Economies, Development Studies, Post-Soviet Studies, Postsocialism, South-East Asia</p>',1,'Abel_Polese_CV.pdf',8,1576084155,1,1576084155,1),
(4,'Completed projects','<ul>\r\n<li class=\"bold-p-inline\">VFP15003 &nbsp;\"Around the Caspian: a Doctoral Training for Future Experts in Development and Cooperation with Focus on the Caspian Region (1.01.2015&minus;31.12.2018)\", Abel Polese, Tallinna Tehnika&uuml;likool, Tallinna Tehnika&uuml;likool, Majandusteaduskond, Rahvusvaheliste suhete instituut, Euroopa uuringute &otilde;ppetool.</li>\r\n<li class=\"bold-p-inline\">LMIN16092 &nbsp;\"Digital Single Market as a Key element in EU-oriented Georgian Higher Education (1.09.2016&minus;31.08.2018)\", Archil Chochia, Tallinna Tehnika&uuml;likool, Sotsiaalteaduskond, &Otilde;iguse instituut, Jean Monnet Euroopa &otilde;iguse &otilde;ppetool.</li>\r\n<li class=\"bold-p-inline\">TAU/1813 &nbsp;\"PSDEV - Imagining Development: A multidisciplinary and multilevel analysis of development policies and their effect in the post-socialist world (1.06.2013&minus;1.09.2017)\", Abel Polese, Tallinna &Uuml;likool, Riigiteaduste Instituut.</li>\r\n<li class=\"bold-p-inline\">T&Otilde;A113 &nbsp;\"Post-Soviet Tensions: A Training Programme in Post-Soviet Affairs for Early Career Researchers (1.05.2013&minus;30.04.2017)\", Abel Polese, Tallinna &Uuml;likool, Tallinna &Uuml;likool, Riigiteaduste Instituut.</li>\r\n<li class=\"bold-p-inline\">AU/3512 &nbsp;\"TRANSFOR - Transition versus Transformation: comparing paths to democratic change in the former USSR using case study based evidence from civil society, international aid and domestic politics (1.04.2012&minus;31.03.2016)\", Abel Polese, Tallinna &Uuml;likool, Tallinna &Uuml;likool, Riigiteaduste Instituut.</li>\r\n<li class=\"bold-p-inline\">AU/3312 &nbsp;\"Developing IUT project application \"Policy and politics learning as mechanism for governance: comparing regional perspectives\" (12.03.2012&minus;31.12.2012)\", Abel Polese, Tallinna &Uuml;likool, Riigiteaduste Instituut.</li>\r\n<li class=\"bold-p-inline\">ERMOS81 &nbsp;\"Civil society and Democracy in the former USSR: Exploring Democratic and Authoritarian responses to Sociopolitical Transformations using Case Study based Evidence from Russia, Moldova and Kyrgyzstan (1.11.2011&minus;31.08.2012)\", Abel Polese, Tallinna &Uuml;likool, Tallinna &Uuml;likool, Riigiteaduste Instituut.</li>\r\n</ul>',1,'Abel_Polese_CV.pdf',10,1576084568,1,1576084591,1),
(5,'Dissertations under supervision','<ul class=\"sciActivity\">\r\n<li class=\"sciActivity\">\r\n<div class=\"gap3\">Emilia Pawlusz, Phd student, (sup) Abel Polese, In search for collective identity. The production of Estonianness by means of choral singing in contemporary Estonia, Tallina Ulikool.</div>\r\n</li>\r\n<li class=\"sciActivity\">\r\n<div class=\"gap3\">Liga Rudzite, Phd student, (sup) Abel Polese; G&Uuml;L BERNA &Ouml;ZCAN, Business around the Caspian: Between Investors, Donors and Challenges of Development, Tallinn University of Technology School of Business and Governance, Department of Law.</div>\r\n</li>\r\n<li class=\"sciActivity\">\r\n<div class=\"gap3\">Olena Levenets, Phd student, (sup) Abel Polese, Welfare, Poverty and Inequality in Central Asia and the Caucasus: An Exploration of Informal Payments in the Health Sector, Tallinn University of Technology School of Business and Governance, Department of Law.</div>\r\n</li>\r\n<li class=\"sciActivity\">\r\n<div class=\"gap3\">Arzu Sheranova, Phd student, (sup) Abel Polese, Kazakh and Kyrgyz Nomad Identities, Tallinn University of Technology.</div>\r\n</li>\r\n<li class=\"sciActivity\">\r\n<div class=\"gap3\">Gian Marco Moise, Phd student, (sup) Abel Polese, Oil revenues and informality in Kazakhstan, Tallinn University of Technology School of Business and Governance, Department of Law.</div>\r\n</li>\r\n<li class=\"sciActivity\">\r\n<div class=\"gap3\">Roberto Chestnutt, Phd student, (sup) Abel Polese, Democracy 2.0 in Central Asia, Tallinn University of Technology.</div>\r\n</li>\r\n<li class=\"sciActivity\">\r\n<div class=\"gap3\">Shugyla Kilybayeva, Phd student, (sup) Abel Polese, NGO and protests in Kazakhstan, Tallinn University, School of Governance, Law and Society.</div>\r\n</li>\r\n<li class=\"sciActivity\">\r\n<div class=\"gap3\">kuralai Isaeva, Phd student, (sup) Abel Polese, Freelancers in Kazakhstan, Tallinn University, School of Governance, Law and Society.</div>\r\n</li>\r\n</ul>',1,'Abel_Polese_CV.pdf',11,1576084784,1,1576084784,1),
(6,'Publications','<table style=\"color: black!important; border-collapse: collapse; width: 97.4608%; height: 2092px; border-style: hidden; float: left;\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"width: 5.5469%; height: 21px;\">Category</td>\r\n<td style=\"width: 5.0331%; height: 21px;\">Year</td>\r\n<td style=\"width: 89.4199%; height: 21px;\">Publication</td>\r\n</tr>\r\n<tr style=\"height: 109px;\">\r\n<td style=\"width: 5.5469%; height: 50px;\">\r\n<div class=\"span1\">1.1.</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 50px;\">2019</td>\r\n<td style=\"width: 89.4199%; height: 50px;\">Polese, A; Seliverstova, O (2019). Luxury consumption as identity markers in Tallinn: A study of Russian and Estonian everyday identity construction through consumer citizenship. Journal of Consumer Culture [forthcoming].</td>\r\n</tr>\r\n<tr style=\"height: 43px;\">\r\n<td style=\"width: 5.5469%; height: 43px;\">\r\n<div class=\"span1\">2.1.</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 43px;\">2019</td>\r\n<td style=\"width: 89.4199%; height: 43px;\">Polese, A. (2019). The SCOPUS diaries and the (il)logics of academic survival A short guide to design your own strategy and survive bibliometrics, conferences and unreal expectations in academia. Columbia University Press.</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"width: 5.5469%; height: 21px;\">\r\n<div class=\"span1\">2.1.</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 21px;\">2019</td>\r\n<td style=\"width: 89.4199%; height: 21px;\">Polese, A.: Russo, A.; Strazzari F. (Eds.) (2019). Governance Beyond The Law: The Immoral, The Illegal, The Criminal. Palgrave.</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"width: 5.5469%; height: 21px;\">\r\n<div class=\"span1\">2.1.</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 21px;\">2019</td>\r\n<td style=\"width: 89.4199%; height: 21px;\">Polese, A.: Hanau Santini, R. (Eds.) (2019). Rethinking Statehood in the Middle East and North Africa: Security, Sovereignty and New Political Orders. Routledge.</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"width: 5.5469%; height: 21px;\">\r\n<div class=\"span1\">3.1.</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 21px;\">2017</td>\r\n<td style=\"width: 89.4199%; height: 21px;\">Polese, A.; Williams, C.; Horodnic, I.; Bejakovic, P. (2017). Informal Economies as Varieties of Governance. In: Polese. A.; Williams, C.; Horodnic, I. A.; Bejakovic, P. ( (_EditorsAbbr). The Informal Economy in Global Perspective: Varieties of Governance (1&minus;14). Palgrave Macmillan. (International Political Economy Series).10.1007/978-3-319-40931-3.</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"width: 5.5469%; height: 21px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.1.</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 21px;\">2017</td>\r\n<td style=\"width: 89.4199%; height: 21px;\">Horodnic, I. A.; Williams, C.; Polese, A.; Zait, A.; Oprea, L. (2017). Exploring the Practice of Making Informal Payments in the Health Sector: Some Lessons from Greece. In: Polese. A.; Williams, C.; Horodnic, I. A.; Bejakovic, P. (_EditorsAbbr). The Informal Economy in Global Perspective: Varieties of Governance (157&minus;172). Palgrave Macmillan. (International Political Economy Series).10.1007/978-3-319-40931-3_9.</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"width: 5.5469%; height: 21px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">4.1.</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 21px;\">2017</td>\r\n<td style=\"width: 89.4199%; height: 21px;\">Polese, A; Williams, C.; Horodnic, I.; Bejakovic, P. (Eds.) (2017). The Informal Economy in Global Perspective: Varieties of Governance. Palgrave Macmillan.10.1007/978-3-319-40931-3.</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"width: 5.5469%; height: 21px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.1.</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 21px;\">2016</td>\r\n<td style=\"width: 89.4199%; height: 21px;\">Polese, A.; Kovacs, B.; Jancsics, D. (2016). Practici informale nocive sau inofensive? &bdquo;&Icirc;n pofida&rdquo; și &bdquo;dincolo de&rdquo; stat: cazul Ungariei și Rom&acirc;niei. Studia Politica, 16 (2), 219&minus;242.</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"width: 5.5469%; height: 21px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.1.</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 21px;\">2016</td>\r\n<td style=\"width: 89.4199%; height: 21px;\">Polese, A.; J. Morris; B. Kovacs (2016). &ldquo;States&rdquo; of informality in post-socialist Europe (and beyond). Debatte: Journal of Contemporary Central and Eastern Europe, 24 (3), 181&minus;190.</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"width: 5.5469%; height: 21px;\">\r\n<div class=\"span1\">1.1.</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 21px;\">2016</td>\r\n<td style=\"width: 89.4199%; height: 21px;\">Urinboev, R; Polese, A. (2016). Informality currencies: a tale of Misha, his brigada and informal practices among Uzbek labour migrants in Russia. Debatte: Journal of Contemporary Central and Eastern Europe, 24 (3), 191&minus;206.</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"width: 5.5469%; height: 21px;\">\r\n<div class=\"span1\">2.1.</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 21px;\">2016</td>\r\n<td style=\"width: 89.4199%; height: 21px;\">Polese, A. (2016). Limits of a Post-Soviet State How Informality Replaces, Renegotiates, and Reshapes Governance in Contemporary Ukraine. Columbia University Press.</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"width: 5.5469%; height: 21px;\">\r\n<div class=\"span1\">3.1.</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 21px;\">2016</td>\r\n<td style=\"width: 89.4199%; height: 21px;\">Isaacs, R.; Polese, A. (2016). Introduction: Nation-Building in the Post-Soviet Space Old: New and Changing Tools. In: R. Isaacs, A. Polese (_EditorsAbbr). Nation-Building and Identity in the Post-Soviet Space: New Tools and Approaches (1&minus;21). Routledge. (Post-Soviet Politics).</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"width: 5.5469%; height: 21px;\">\r\n<div class=\"span1\">3.1.</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 21px;\">2016</td>\r\n<td style=\"width: 89.4199%; height: 21px;\">Horak, S; Polese, A. (2016). Personality Cults and Nation-Building in Turkmenistan. In: Rico Isaacs; Abel Polese (_EditorsAbbr). Nation Building in the Former USSR: New Tools and Approaches (x&minus;xx). Routledge.</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"width: 5.5469%; height: 21px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.2.</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 21px;\">2016</td>\r\n<td style=\"width: 89.4199%; height: 21px;\">Polese, A (2016). Corruption State Trust and Informality in Ukraine. In: Addressing Security Risks at the Ukrainian Border Through Best Practices on Good Governance (x&minus;xx). IOS Press.</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"width: 5.5469%; height: 21px;\">\r\n<div class=\"span1\">4.1.</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 21px;\">2016</td>\r\n<td style=\"width: 89.4199%; height: 21px;\">Isaacs, R.; Polese, A. (Eds.) (2016). Nation Building and Identity in the Post-Soviet Space: New Tools and Approaches. Ashgate Publishing.</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"width: 5.5469%; height: 21px;\">\r\n<div class=\"span1\">4.1.</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 21px;\">2016</td>\r\n<td style=\"width: 89.4199%; height: 21px;\">Polese, A.; Kevlihan, R.; OBeachain, D. (Eds.) (2016). Hybrid War in Post-Soviet Spaces (Special issue of a Small Wars &amp; Insurgencies, vol. 27(3)). In: .</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"width: 5.5469%; height: 21px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">4.1.</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 21px;\">2016</td>\r\n<td style=\"width: 89.4199%; height: 21px;\">Williams, C; Rodgers, P; Polese, A (2016). International Journal of Entrepreneurship and Small Business: Special Issue: Tackling Enterprise in the Informal Economy. Interscience Enterprices Ltd.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">6.8.</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2016</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">Williams, C; Rodgers, P; Polese, A (2016). Introduction: Tackling Enterprise in the Informal Economy. International Journal Entrepreneurship and Small Business, 28 (2/3), 139&minus;153.10.1504/IJESB.2016.076637.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">6.8.</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2016</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">Polese, A (2016). Services, Modes of Governance and the State. Studies of Transition States and Societies, 8 (1), 1&minus;2.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">6.8.</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2016</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">Isaacs, R; Polese, A (2016). Conclusion: Reimagining or Imagined Nation Building. In: Rico Isaacs; Abel Polese (_EditorsAbbr). Nation Building in the Former USSR: New Tools and Approaches (210). Routledge.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.2.</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2015</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">Polese, Abel (2015). Informality crusades: why informal practices are stigmatized, fought and allowed in different contexts according to an apparently unintelligible logic. Caucasus Social Science Review, 2 (1), 1&minus;26.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.2.</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2015</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">Polese, A (2015). A turn for constructivist human security research? EthnoGeoPolitics, 3 (3), 93&minus;96.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.3.</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2015</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">Davies, T.; Polese, A. (2015). Informalidad y supervivencia en Chernobyl: etnograf&iacute;a de un espacio nuclear. methaodos. revista de ciencias sociales, 3, 221&minus;238.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.1.</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2015</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">Polese, Abel; Morris, Jeremy (2015). Quo Vadis Informality. In: Informal Economies in Post-Socialist Spaces: Practices, Institutions, Networks (301&minus;315). Palgrave Macmillan.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.1.</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2015</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">Polese, Abel; Morris, Jeremy (2015). My name is legion. The Resilience and Endurance of Informality Beyond, or in Spite of, the State. In: Informal Economies in Post-Socialist Spaces: Practices, Institutions, Networks (1&minus;27). Palgrave Macmillan.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">4.1.</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2015</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">Morris, J.; Polese, A. (Eds.) (2015). Informal Economies in Post-Socialist Spaces: Practices, Institutions and Networks. Palgrave Macmillan.10.1057/9781137483072.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.1.</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2014</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">Polese, A (2014). Informal Payments in Ukrainian Hospitals: on the Boundary Between Informal Payments, Gifts and Bribes. Anthropological Forum, 24 (4), 381&minus;395.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.1.</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2014</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">Polese, Abel; Morris, Jeremy, Borbola, Kovacs; Harboe, Ida (2014). Welfare States\' in Central and Eastern Europe: Where Informality fits in? Journal of Contemporary European Studies, 22 (2), 184&minus;198.10.1080/14782804.2014.902368.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.1.</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2014</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">Polese, A (2014). Individual and state morality: what if they do not overlap. Studies of Transition States and Societies, 6 (1), 1&minus;2.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.3.</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2014</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">Polese, A. (2014). Крестовые походы на неформальность: почему в разных случаях, руководствуясь предположительно непонятной логикой, неформальные практики клеймят, пресекают или разрешают. ПОЛІТОЛОГІЯ СОЦІОЛОГІЯ ПРАВО, 13.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.1.</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2014</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">Morris, Jeremy; Polese, Abel (2014). Introduction: Informality &ndash; Enduring Practices, Entwined Livelihoods. In: Jeremy Morris and Abel Polese (_EditorsAbbr). The Informal Post-Socialist Economy: Embedded Practices and Livelihoods (12).. London and New York: Routledge Taylor &amp; Francis Ltd.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.1.</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2014</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">Polese, Abel (2014). Drinking with Vova: a Ukrainian Entrepreneur between Informality and Illegality. In: The Informal Post-Socialist Economy: Embedded Practices and Livelihoods (85&minus;101).. London and New York: Routledge Taylor &amp; Francis Ltd.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.2.</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2014</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">Polese, Abel (2014). Patterns of identity formation in the post-Soviet space: Odessa as a case study. In: Gonul Pultar (_EditorsAbbr). Imagining Identities: Identity Formation in the Age of Globalization (175&minus;194). Syracuse University Press.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">4.1.</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2014</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">Morris, Jeremy; Polese, Abel (2014). The Post-Socialist Informal Economy. Routledge.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.1.</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2013</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">Polese, Abel; Prigarin, Aleksandr (2013). On the persistence of bazaars in the newly capitalist world: reflections from Odessa. The Anthropology of East Europe Review, 110&minus;136.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.1.</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2013</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">Polese, A (2013). Political Transformations, Endogenous Factors and Non-Political Actors. Studies of Transition States and Societies, 5 (1), 1.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.2.</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2013</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">(2013). Grazhdanskaya kampaniya &ldquo;PORA&rdquo; na Ukraine: Chetyre voprosa o roli grazhdanskogo obshchestva v period tsvetnikh revolutsii. Политическая наука, 211&minus;231.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.2.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2013</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">(2013). The Role of Civil Society in the Colour Revolutions: A Case-Study of PORA in Ukraine. Contemporary Central Asia, XVII (1), 1&minus;19.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.2.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2013</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">(2013). Ucr&acirc;nia: a constru&ccedil;&atilde;o nacional entre o real e o imagin&aacute;rio. e-cadernos, 19, 153&minus;180.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.2.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2013</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">\r\n<div class=\"large gap3\">Polese, Abel (2013). The Socio-economic Function of Borders, Evidence from EU Neighbourhood Countries. Eurolimes, 16, 22.</div>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 41px;\">\r\n<td style=\"width: 5.5469%; height: 41px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 41px;\">2013</td>\r\n<td style=\"width: 89.4199%; height: 41px;\">Polese, Abel (2013). The Ambiguity and Functions of Informality: Some Notes from the Odessa-Chisinau Route. In: C. Giordano and N. Hayoz (_EditorsAbbr). Informality in Eastern Europe: Structures, Political Cultures and Social Practices (415&minus;432).. Bern: P. Lang. (Interdisciplinary studies on Central and Eastern Europe; 11).</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2013</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">Companjen, F; Polese, A (2013). Subtle Line between Self-defence and War: South Ossetia 2008. In: Conflict and Peace in Eurasia (88&minus;102).. Routledge. (3).</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2012</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">Polese, Abel (2012). Russia, the US and 101 Things to do to Win a Colour Revolution. Debatte: Journal of Contemporary Central and Eastern Europe, 39&minus;53.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2012</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">OBeachain, D; Polese, A (2012). Rocking the Vote\': New Forms of Youth Organization in Post-Communist Spaces. Walker, C. and S. Stephenson. Youth and Social Change in Eastern Europe and the Former Soviet Union (120&minus;x).. Routledge.</td>\r\n</tr>\r\n<tr style=\"height: 41px;\">\r\n<td style=\"width: 5.5469%; height: 41px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 41px;\">\r\n<div class=\"span1\">2012</div>\r\n</td>\r\n<td style=\"width: 89.4199%; height: 41px;\">Polese, A. (2012). Who has the right to forbid and who to trade? Making sense of illegality on the Polish-Ukrainian border. In: B. Bruns and J. Miggelbring (_EditorsAbbr). Subverting Borders. Doing Research on Smuggling and Small-Scale Trade. (21&minus;38).. Springer.10.1007/978-3-531-93273-6_2.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.1.</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2011</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">Polese, Abel; Rodgers, Peter (2011). Surviving Post-Socialism: The Role of Informal Economic Practices. International Journal of Sociology and Social Policy, 31, 612&minus;618.10.1108/01443331111177896.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2011</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">Polese, Abel (2011). Language and identity in Ukraine: was it really nation building. Studies of Transition States and Societies, 121.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2011</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">OBeachain, Donnacha; Polese, Abel (2011). The Color Revolution Virus and Authoritarian Antidotes : Political Protest and Regime Counterattacks in Post-Communist Spaces. Demokratizatsiya: the Journal of Post-Soviet Democratization, 111&minus;132.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.2.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2011</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">OBeachain, Donnacha; Polese, Abel (2011). What Happened to the Colour Revolutions? Authoritarian Responses from Former Soviet Spaces. Journal of International and Area Studies, 31&minus;51.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.3.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2011</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">Polese, A. (2011). Dichotomies between citizenship and nationality: reflections from the Ukrainian nation building experience. Politick&eacute; V&eacute;dy, 48&minus;63.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.2.</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2011</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">A Polese, O Seliverstova (2011). Ucraina, fiabe senza frontiere. Raccontami una storia. Fiabe, leggende e miti nella memoria dei popoli (443).. Franco Angeli.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.2.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2011</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">Polese, A. (2011). Ukraine&nbsp;: la construction d\'une identite nationale entre le r&eacute;el et l&rsquo;imaginaire. Gilles Rouet. Nations, Cultures et Entreprises en Europe (145&minus;163).. L\'Harmattan.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">4.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2011</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">Polese, Abel; Rodgers, Peter (2011). Surviving Post-socialism. Emerald Group Publishing Limited.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">6.3.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2011</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">Polese, A. (2011). Cosa muove le rivoluzioni colorate? East - Europe Asia Strategies, 1.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.1</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2010</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">Polese, A (2010). The formal and the informal: Exploring &lsquo;Ukrainian&rsquo; Education in Ukraine, Scenes from Odessa. Comparative Education, 45&minus;62.10.1080/03050060903538673.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2010</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">OBeachain, Donnacha; Polese, Abel (2010). Rocking the Vote\': New Forms of Youth Organization in Post-Communist Spaces. Journal of Youth Studies, 1&minus;16.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.3.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2010</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">(2010). Issledovanie razlichnoy prirody nezakonnikh tranzaktsii v Ukraine. Sotsiologiya: teoriya, metody, marketing, 52&minus;70.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2010</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">Polese, Abel (2010). Ukraine 2004: Informal Networks, Transformation of Social Capital and Coloured Revolutions. In: D. Lane and S. White (_EditorsAbbr). Rethinking Colour Revolutions (232).. Routledge.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2010</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">OBeachain, Donnacha; Polese, Abel (2010). Conclusion. In: The Colour Revolutions in the Former Soviet Union: Successes and Failures (240).. Routledge.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2010</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">OBeachain, Donnacha; Polese, Abel (2010). What\'s in a Colour? In: OBeachain, Donnacha; Polese, Abel (_EditorsAbbr). The Colour Revolutions in the Former Soviet Union: Successes and Failures (12).. Routledge.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">4.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2010</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">OBeachain, Donnacha; Polese, Abel (2010). The Colour Revolutions in the Former Soviet Union: Successes and Failures. Routledge.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2009</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">(2009). The Guest at the Dining Table: Economic Transition and the Reshaping of Hospitality, Reflections from Batumi and Odessa. The Anthropology of East Europe Review, 65&minus;77.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2009</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">(2009). Ukraine 2004: Informal Networks, Transformation of Social Capital and Coloured Revolutions. The Journal of Communist Studies and Transition Politics, 255&minus;277.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.2.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2009</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">(2009). Une version alternative de la &laquo;r&eacute;volution orange&raquo;: transformations identitaires et &laquo;nation building spontan&eacute;. Socio-logos, 4, 1.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2009</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">(2009). Ukraine. In: The International Encyclopaedia of revolution and Protest: 1500 to the Present (512).. Blackwell Publishers.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2009</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">(2009). Gene Sharp. In: The International Encyclopaedia of revolution and Protest: 1500 to the Present (322).. Blackwell Publishers.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2009</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">Firouz, Oma; Polese, Abel (2009). Etienne de la Boetie. In: The International Encyclopaedia of revolution and Protest: 1500 to the Present (432).. Blackwell Publishers.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2009</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">OBeachain, Donnacha; Polese, Abel (2009). Coloured Revolutions. In: The International Encyclopaedia of revolution and Protest: 1500 to the Present (320).. Blackwell Publishers.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2008</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">(2008). If I Receive it, it is a Gift; if I Demand it, then it is a Bribe&rsquo; on the Local Meaning of Economic Transactions in Post-soviet Ukraine. Anthropology in Action, 47&minus;60.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2008</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">Polese, Abel; Wylegala, Anna (2008). Odessa and Lvov or Odesa and Lviv: How Important is a Letter? Reflections on the &ldquo;Other&rdquo; in Two Ukrainian Cities. Nationalities Papers, 787&minus;814.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.2.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2008</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">OBeachain, Donnacha; Polese, Abel (2008). Einfuhrung. Totalitarismus und Demokratie, 11.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2008</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">(2008). Ukraine 1991-2006: Where are all the Communists Gone? In: Uwe Backes and Patrick Moreau (_EditorsAbbr). Communist Parties in Eastern Europe after 1989 (256&minus;280).. Vandenhoeck &amp; Ruprecht.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">4.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2008</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">Backes, Uwe; Jaskulowski, Tytus; Polese, Abel (2008). Totalitarismus und Transformation - Defizite der Demokratiekonsolidierung in Mittel- und Osteuropa. Vandenhoeck &amp; Ruprecht.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.2</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2007</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">(2007). Can Free Elections Secure Democratic Consolidation? An Analysis of Ukraine in 2006. Totalitarismus und Demokratie, 119&minus;149.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.2.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2007</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">OBeachain, Donnacha; Polese, Abel (2007). American Boots and Russian Vodka: External Factors on Coloured Revolutions in Georgia, Ukraine and Kyrgyzstan. Totalitarismus und Demokratie, 87&minus;114.</td>\r\n</tr>\r\n<tr style=\"height: 41px;\">\r\n<td style=\"width: 5.5469%; height: 41px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.2.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 41px;\">2007</td>\r\n<td style=\"width: 89.4199%; height: 41px;\">(2007). Determinants of Ukrainian Political Orientation: Dynamics of Peoples&rsquo; Response to &ldquo;Ukrainization&rdquo; Policies in the Odessa Region and Effects on Domestic and Foreign Policies. In: A. Jurkowska, K. Kosior (_EditorsAbbr). Beyond the borders. Ukraine and European Neighbourhood Policy (268&minus;277).. Wydawnictwa Uniwersytetu Rzeszowskiego.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">4.1.</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2007</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">OBeachain, Donnacha; Polese, Abel (2007). Coloured Revolutions in Eurasia 1998-2005. Vandenhoeck &amp; Ruprecht.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">6.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2007</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">(2007). Tanzania. In: The Encyclopedia of the Cold War A Political, Social, and Military History (997).. ABC Clio Press.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">6.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2007</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">(2007). Sudan. In: The Encyclopedia of the Cold War A Political, Social, and Military History (789).. ABC Clio Press.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">6.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2007</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">(2007). Eritrea. In: The Encyclopedia of the Cold War A Political, Social, and Military History (445).. ABC Clio Press.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">6.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2007</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">(2007). Karelia. In: The Encyclopedia of the Cold War A Political, Social, and Military History (542).. ABC Clio Press.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">6.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2007</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">(2007). Basque Separatism. In: The Encyclopedia of the Cold War A Political, Social, and Military History (123).. ABC Clio Press.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">6.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2007</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">(2007). Nationalism. In: The Encyclopedia of the Cold War A Political, Social, and Military History (322).. ABC Clio Press.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2006</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">(2006). Border Crossing as a Daily Strategy of Post Soviet Survival: the Odessa-Chisinau Elektrichka. The Anthropology of East Europe Review, 28&minus;37.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.3.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2006</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">(2006). La corrente attitudine verso l&rsquo;ecologia in Ucraina: il campo di lavoro &ldquo;Futurum&rdquo; in Crimea. Gazzetta Ambiente, 49&minus;65.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.2.</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2006</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">(2006). The Good Samaritan. In: Man of the Global South: a Reader (111).. Zed Books.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">6.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2006</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">(2006). Estonia 900. Umberto Eco. Enciclopedia del &lsquo;900 (674).. Motta.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">6.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2006</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">(2006). Turchia. Umberto Eco. Enciclopedia del &lsquo;900 (787).. Motta.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">6.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2006</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">(2006). Lettonia. Umberto Eco. Enciclopedia del &lsquo;900 (656).. Motta.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">6.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2006</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">(2006). Georgia. Umberto Eco. Enciclopedia del &lsquo;900 (567).. Motta.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">6.1.</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2006</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">(2006). Finlandia. Umberto Eco. Enciclopedia del &lsquo;900 (456).. Motta.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">6.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2006</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">(2006). Bielorussia. Umberto Eco. Enciclopedia del &lsquo;900 (324).. Motta.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">6.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2006</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">(2006). Azerbaijan. Umberto Eco. Enciclopedia del &lsquo;900 (222).. Motta.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">6.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2006</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">(2006). Armenia. Umberto Eco. Enciclopedia del \'900 (1).. Motta.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">6.3.</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2006</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">(2006). Paying for a Free Education.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">6.3.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">2004</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">(2004). Ukraine: the Future is Orange?</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 5.5469%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">4.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 5.0331%; height: 20px;\">0</td>\r\n<td style=\"width: 89.4199%; height: 20px;\">\r\n<div class=\"form-group ng-scope\">\r\n<div class=\"form-body\">\r\n<div class=\"large gap3\">Isaacs, Rico; Polese, Abel (0). \"Imagined\" vs \"real\" nation-building: language and identity policies between theory and practice in Central Asia. ..</div>\r\n</div>\r\n</div>\r\n<div class=\"padding-left-30 ng-scope\">\r\n<div id=\"propOn\" class=\"control-group display\">&nbsp;</div>\r\n</div>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>',1,'Abel_Polese_CV.pdf',16,1576084991,1,1576089322,1);

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `front_menu` */

insert  into `front_menu`(`nodeid`,`parentnodeid`,`page_id`,`nodeshortname`,`nodename`,`nodeurl`,`userstatus`,`nodeaccess`,`nodestatus`,`nodeorder`,`nodefile`,`nodeicon`,`ishasdivider`,`hasnotify`,`notifyscript`,`isforguest`,`arrow_tag`,`position`) values 
(1,0,0,'About me','About me','/main/about-me/','ALL',1,NULL,0,NULL,'','no','no','','yes',NULL,NULL),
(2,1,0,'CV','CV','/main/cv/','ALL',1,NULL,4,NULL,'','no','no','','yes',NULL,NULL),
(3,0,0,'Blog','Blog','/blog/posts','ALL',1,NULL,6,NULL,'','no','no','','yes',NULL,NULL),
(4,0,0,'Contact','Contact','/main/contact/','ALL',1,NULL,10,NULL,'','no','no','','yes',NULL,NULL),
(5,0,0,'Books','Books','/books/list','ALL',1,NULL,7,NULL,'','no','no','','yes',NULL,NULL),
(6,0,1,'My Research','My Research','/main/page/my-research','ALL',1,NULL,11,NULL,NULL,'no','no','','yes',NULL,NULL),
(7,0,5,'Publications','Publications','/main/page/publications','ALL',1,NULL,15,NULL,NULL,'no','no','','yes',NULL,NULL),
(8,0,6,'Talks','Talks','/main/page/talks','ALL',1,NULL,16,NULL,NULL,'no','no','','yes',NULL,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `login_details` */

insert  into `login_details`(`login_detail_id`,`login_user_id`,`login_status`,`login_at`,`logout_at`,`user_ip_address`) values 
(1,1,1,'2019-12-11 14:36:38',NULL,'127.0.0.1'),
(2,1,1,'2019-12-11 14:39:43',NULL,'127.0.0.1'),
(3,1,1,'2019-12-11 14:46:50',NULL,'127.0.0.1'),
(4,1,1,'2019-12-12 11:47:00',NULL,'127.0.0.1'),
(5,1,1,'2019-12-14 14:18:59',NULL,'127.0.0.1'),
(6,1,1,'2019-12-14 14:19:22',NULL,'127.0.0.1'),
(7,1,1,'2019-12-14 14:26:19',NULL,'127.0.0.1');

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
('m140506_102106_rbac_init',1576210324),
('m170907_052038_rbac_add_index_on_auth_assignment_user_id',1576210324),
('m180523_151638_rbac_updates_indexes_without_prefix',1576210324),
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
  `link_to_buy` text,
  `photo` varchar(500) NOT NULL,
  `ebook_file` varchar(500) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `my_books` */

insert  into `my_books`(`id`,`name`,`author`,`publisher`,`publish_year`,`isbn`,`page_count`,`language`,`category`,`description`,`link_to_buy`,`photo`,`ebook_file`,`status`,`created_at`,`created_by`,`updated_at`,`updated_by`) values 
(1,'The SCOPUS Diaries and the (il)logics of Academic Survival: A Short Guide to Design Your Own Strategy And Survive Bibliometrics, Conferences, and Unreal Expectations in Academia','Abel Polese','ibidem (January 1)','2019','978-3838211992',240,'English','','<h3>Review</h3>\r\n<div class=\"a-expander-collapsed-height a-row a-expander-container a-expander-partial-collapse-container\" aria-live=\"polite\" data-a-expander-collapsed-height=\"300\">\r\n<div class=\"a-expander-content a-expander-partial-collapse-content\" aria-expanded=\"false\">\r\n<p>Polese&rsquo;s demystification of peer review and the high-stakes gambit of academic publishing is well overdue. He lifts the lid on both overall strategies and the no less important nitty-gritty aspects. (Jeremy Morris, Aarhus University)<br /><br />There have recently been several depictions of the precarity of contemporary academic life, but&nbsp;<em>The Scopus Diaries</em>&nbsp;stands out among these. What is refreshing in Polese\'s book is that it moves beyond mere diagnosis―it not only identifies key problematics but also productively engages in their potential solution. (Martin Demant Frederiksen, University of Copenhagen)<br /><br />This is a must-read if you are in academia and do not yet have a tenured position. Even more urgently, it is a must-read for everyone who wants to or should have to reflect on the complex and sometimes counter-productive logics of today\'s (social) science production. (Heiko Pleines, University of Bremen)<br /><br /><em>The Scopus Diaries</em>&nbsp;is an indispensable guide for early researchers who often find it difficult to balance academic life with their nonacademic passions. If offers a vision of work-life balance from one of the best in the field. A must-read primer for non-Western scholars interested in learning about the academic strategies in the West. (Rajan Kumar, Jahawaral Nehru University)<br /><br />The book is a welcome attempt to start a candid, unapologetic discussion about the \'black box\' of being an untenured academic. The issues Polese brings into focus using his rich personal experiences will resonate with many colleagues with longer or shorter academic careers due personal experience or that of colleagues. His conclusions, whether one agrees with them or not, will certainly provide food for thought both for experienced as well as aspiring academics. (Borb&aacute;la Kov&aacute;cs, Central European University, Budapest)</p>\r\n</div>\r\n</div>\r\n<h3>About the Author</h3>\r\n<div class=\"a-expander-collapsed-height a-row a-expander-container a-expander-partial-collapse-container\" aria-live=\"polite\" data-a-expander-collapsed-height=\"300\">\r\n<div class=\"a-expander-content a-expander-partial-collapse-content\" aria-expanded=\"false\">\r\n<p>Abel Polese is a scholar, development worker, writer, and wannabe musician (with his children at Multea Music YouTube channel). He works at Dublin City University and has, to date, published fifteen books, over 100 peer-reviewed chapters and articles, and designed capacity building and training programs on the Caucasus, Central Asia, Eastern Europe, Southeast Asia, and Latin America (funded by, inter alia, the EC, UNDP, Erasmus National Agencies, Irish Aid). In addition to &ldquo;The Scopus Diaries&rdquo; he has been working on the blog (and future book) &ldquo;the guide to everywhere,&rdquo; suggesting an approach to travel that can make people &ldquo;read&rdquo; new countries and cultures even when one encounters them for the first time.</p>\r\n</div>\r\n</div>','https://www.amazon.com/SCOPUS-Diaries-logics-Academic-Survival/dp/3838211995/ref=sr_1_2?qid=1575993589&refinements=p_27%3AAbel+Polese&s=books&sr=1-2','the_scopus_diaries_and_the_logics_of_academic_survival.jpg','',1,1576000300,1,NULL,NULL),
(2,'Limits of a Post-Soviet State: How Informality Replaces, Renegotiates, and Reshapes Governance in Contemporary Ukraine (Soviet and Post-Soviet Politics and Society Book 154) Kindle Edition','Abel Polese','ibidem (June 1, 2016)','2016','3838208854',260,'English','','<p>This book illustrates why and how informality in governance is not necessarily transitory or temporary, but a constant in most systems of the world. The difference between various administrative structures is not whether informality is present or not, but where, in which areas, it is located. The essays gathered in this volume demonstrate that, in some cases, informal mechanisms are self-protective, while, in others, they are perceived as \'normal\' responses and a set of tactics for individuals, classes, and communities to respond to unusual demands. Where expectations&mdash;of the state, a company, or some commission&mdash;are too far from citizens\' existing models of normative behavior, informal behavior continues to thrive. Indeed, new tactics are adopted in order to cope with disjunctions between theory and reality as well as to serve as contrasts to values imposed by a center of power, such as a central state, a city administration, or the management board of a large company.<br /><br />The focus of the papers contained in this book is two-fold and rests on an analysis of phenomena manifesting themselves \"beyond\" and \"in spite of\" the state. The first part deals with areas where the state is not always, or only marginally, active whilst the second analyzes activities performed in conflict with state regulations, i.e. behavior often studied from a criminal and legal standpoint.</p>','https://www.amazon.com/Limits-Post-Soviet-State-Renegotiates-Contemporary-ebook/dp/B076ZMZN2H/ref=sr_1_11?qid=1575993589&refinements=p_27%3AAbel+Polese&s=books&sr=1-11','limits_of_a_Post_soviet_state.jpg','',1,1576000479,1,NULL,NULL),
(3,'Identity and Nation Building in Everyday Post-Socialist Life (Routledge Contemporary Russia and Eastern Europe Series Book 75) 1st Edition, Kindle Edition','Abel Polese (Editor), Jeremy Morris (Editor), Emilia Pawłusz (Editor), Oleksandra Seliverstova (Editor)','Routledge; 1 edition (July 31, 2017)','2017','1138736414',193,'English','','<p>This book explores the function of the &ldquo;everyday&rdquo; in the formation, consolidation and performance of national, sub-national and local identities in the former socialist region. Based on extensive original research including fieldwork, the book demonstrates how the study of everyday and mundane practices is a meaningful and useful way of understanding the socio-political processes of identity formation both at the top and bottom level of a state. The book covers a wide range of countries including the Baltic States, Ukraine, Russia, the Caucasus and Central Asia, and considers &ldquo;everyday&rdquo; banal practices, including those related to consumption, kinship, embodiment, mobility, music, and the use of objects and artifacts. Overall, the book draws on, and contributes to, theory; and shows how the process of nation-building is not just undertaken by formal actors, such as the state, its institutions and political elites.</p>','https://www.amazon.com/Identity-Building-Post-Socialist-Routledge-Contemporary-ebook/dp/B074F2D2SF/ref=sr_1_5?qid=1575993589&refinements=p_27%3AAbel+Polese&s=books&sr=1-5','Identity and Nation Building in Everyday Post-Socialist.jpg','',1,1576000585,1,NULL,NULL),
(4,'The Informal Post-Socialist Economy: Embedded Practices and livelihoods (Routledge Contemporary Russia and Eastern Europe Series) 1st Edition, Kindle Edition','by Jeremy Morris (Editor), Abel Polese (Editor)','','','978-1138204041 | 1138204048',209,'English','','<p>From smugglers to entrepreneurs, blue-collar workers and taxi drivers, this book deals with the multitude of characters engaged in informal economic practices in the former socialist regions. Going beyond a conception of informality as opposed to the formal sector, its authors demonstrate the fluid nature of informal transactions straddling the crossroads between illegal, illicit, socially acceptable and symbolically meaningful practices. Their argument is informed by a wide range of case studies, from Central Europe to the Baltics and Central Asia, each of which is constructed around a single informant. Each chapter narrates the story of a composite person or household that was carefully selected or constructed by an author with long-standing ethnographic research experience in the given field site.</p>\r\n<p>&nbsp;</p>\r\n<p>Wide in geographical, empirical and theoretical scope, the book uses ethnographic narrative accounts of everyday life to make links between &lsquo;ordinary&rsquo; meanings of informality. Challenging reductively economistic perspectives on cross-border trading, undeclared work and other informal activities, the authors illustrate the wide variety of interpretive meanings that people ascribe to such practices. Alongside &lsquo;getting by&rsquo; and &lsquo;getting ahead&rsquo; in recently marketised societies, these meanings relate to sociality, kinship-ties and solidarity, along with more surprising &lsquo;political&rsquo; and moral reasonings.</p>','https://www.amazon.com/Informal-Post-Socialist-Economy-livelihoods-Contemporary-ebook/dp/B00HA83XKY/ref=sr_1_4?qid=1575993589&refinements=p_27%3AAbel+Polese&s=books&sr=1-4','Informal-Post-Socialist-Economy-livelihoods-Contemporary-ebook.jpg','',1,1576000713,1,NULL,NULL),
(5,'Rethinking Statehood in the Middle East and North Africa: Security, Sovereignty and New Political Orders','Abel Polese (Editor), Ruth Hanau Santini (Editor)','Routledge; 1 edition (January 28, 2019)','2019','036718088X',246,'English','','<h3>About the Author</h3>\r\n<div class=\"a-expander-collapsed-height a-row a-expander-container a-expander-partial-collapse-container\" aria-live=\"polite\" data-a-expander-collapsed-height=\"300\">\r\n<div class=\"a-expander-content a-expander-partial-collapse-content\" aria-expanded=\"false\">\r\n<p><strong>Abel Polese</strong>&nbsp;is a Senior Research Fellow at Dublin City University, Ireland. He is a writer, development worker, scholar, amateur photographer and musician who is mainly interested in the dichotomy between formal and informal modes and structures of governance. He is the author of&nbsp;<em>The Scopus Diaries and the Illogics of Academic Survival</em>&nbsp;(2018).</p>\r\n<p><strong>Ruth Hanau Santini</strong>&nbsp;is Assistant Professor of Politics and International Relations at Universit&agrave; L&rsquo;Orientale in Naples, Italy, and Associate Fellow at the Middle East, Central Asia and Caucasus Studies&rsquo; Institute at the University of St. Andrews, UK. She is interested in the domestic and international politics of the MENA region and, more broadly, in state-society relations, citizenship, and changing understandings of democracy. Her work includes&nbsp;<em>Limited statehood in post-revolutionary Tunisia. Citizenship, economy and security</em>&nbsp;(2018).</p>\r\n</div>\r\n</div>','https://www.amazon.com/Rethinking-Statehood-Middle-North-Africa/dp/036718088X/ref=sr_1_8?qid=1575993589&refinements=p_27%3AAbel+Polese&s=books&sr=1-8','Rethinking-Statehood-Middle-North-Africa.jpg','',1,1576210629,1,NULL,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `pages` */

insert  into `pages`(`id`,`parent_id`,`title`,`menu_title`,`text`,`status`,`order`,`blogs_id`,`tags`,`slug`,`created_at`,`created_by`,`updated_at`,`updated_by`) values 
(1,0,'My Research','My Research','<p>Here you can read about my research interests, my current projects and my past projects. You can also learn more about my students&rsquo; research and my research assistants&rsquo; work.</p>\r\n<p><strong>My Research Interests</strong></p>\r\n<p><strong>My Current Projects</strong></p>\r\n<p><strong>My Past Projects</strong></p>\r\n<p><strong>My Publications and Scholarly Output</strong></p>\r\n<p><strong>My Conferences and Talks</strong></p>',1,1,'\"\"','a:1:{i:0;s:0:\"\";}','my-research',1576133937,1,NULL,NULL),
(5,0,'Publications','Publications','<ul>\r\n<li>My&nbsp;<strong>Google Scholar Citations</strong>&nbsp;profile&nbsp;<a href=\"https://scholar.google.co.uk/citations?user=epgQo-0AAAAJ\">can be found here</a></li>\r\n<li>My&nbsp;<strong>Academia.Edu</strong>&nbsp;profile&nbsp;<a href=\"https://tallinn.academia.edu/AbelPolese\">can be found here</a>.</li>\r\n<li>My&nbsp;<strong>ResearchGate</strong>&nbsp;profile&nbsp;<a href=\"https://www.researchgate.net/profile/Abel_Polese\">can be found here</a>.</li>\r\n</ul>\r\n<table style=\"color: black!important; border-collapse: collapse; width: 97.4608%; height: 2092px; border-style: hidden; float: left;\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"width: 8.52855%; height: 21px;\">Category</td>\r\n<td style=\"width: 6.40925%; height: 21px;\">Year</td>\r\n<td style=\"width: 85.0621%; height: 21px;\">Publication</td>\r\n</tr>\r\n<tr style=\"height: 109px;\">\r\n<td style=\"width: 8.52855%; height: 50px;\">\r\n<div class=\"span1\">1.1.</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 50px;\">2019</td>\r\n<td style=\"width: 85.0621%; height: 50px;\">Polese, A; Seliverstova, O (2019). Luxury consumption as identity markers in Tallinn: A study of Russian and Estonian everyday identity construction through consumer citizenship. Journal of Consumer Culture [forthcoming].</td>\r\n</tr>\r\n<tr style=\"height: 43px;\">\r\n<td style=\"width: 8.52855%; height: 43px;\">\r\n<div class=\"span1\">2.1.</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 43px;\">2019</td>\r\n<td style=\"width: 85.0621%; height: 43px;\">Polese, A. (2019). The SCOPUS diaries and the (il)logics of academic survival A short guide to design your own strategy and survive bibliometrics, conferences and unreal expectations in academia. Columbia University Press.</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"width: 8.52855%; height: 21px;\">\r\n<div class=\"span1\">2.1.</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 21px;\">2019</td>\r\n<td style=\"width: 85.0621%; height: 21px;\">Polese, A.: Russo, A.; Strazzari F. (Eds.) (2019). Governance Beyond The Law: The Immoral, The Illegal, The Criminal. Palgrave.</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"width: 8.52855%; height: 21px;\">\r\n<div class=\"span1\">2.1.</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 21px;\">2019</td>\r\n<td style=\"width: 85.0621%; height: 21px;\">Polese, A.: Hanau Santini, R. (Eds.) (2019). Rethinking Statehood in the Middle East and North Africa: Security, Sovereignty and New Political Orders. Routledge.</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"width: 8.52855%; height: 21px;\">\r\n<div class=\"span1\">3.1.</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 21px;\">2017</td>\r\n<td style=\"width: 85.0621%; height: 21px;\">Polese, A.; Williams, C.; Horodnic, I.; Bejakovic, P. (2017). Informal Economies as Varieties of Governance. In: Polese. A.; Williams, C.; Horodnic, I. A.; Bejakovic, P. ( (_EditorsAbbr). The Informal Economy in Global Perspective: Varieties of Governance (1&minus;14). Palgrave Macmillan. (International Political Economy Series).10.1007/978-3-319-40931-3.</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"width: 8.52855%; height: 21px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.1.</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 21px;\">2017</td>\r\n<td style=\"width: 85.0621%; height: 21px;\">Horodnic, I. A.; Williams, C.; Polese, A.; Zait, A.; Oprea, L. (2017). Exploring the Practice of Making Informal Payments in the Health Sector: Some Lessons from Greece. In: Polese. A.; Williams, C.; Horodnic, I. A.; Bejakovic, P. (_EditorsAbbr). The Informal Economy in Global Perspective: Varieties of Governance (157&minus;172). Palgrave Macmillan. (International Political Economy Series).10.1007/978-3-319-40931-3_9.</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"width: 8.52855%; height: 21px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">4.1.</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 21px;\">2017</td>\r\n<td style=\"width: 85.0621%; height: 21px;\">Polese, A; Williams, C.; Horodnic, I.; Bejakovic, P. (Eds.) (2017). The Informal Economy in Global Perspective: Varieties of Governance. Palgrave Macmillan.10.1007/978-3-319-40931-3.</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"width: 8.52855%; height: 21px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.1.</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 21px;\">2016</td>\r\n<td style=\"width: 85.0621%; height: 21px;\">Polese, A.; Kovacs, B.; Jancsics, D. (2016). Practici informale nocive sau inofensive? &bdquo;&Icirc;n pofida&rdquo; și &bdquo;dincolo de&rdquo; stat: cazul Ungariei și Rom&acirc;niei. Studia Politica, 16 (2), 219&minus;242.</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"width: 8.52855%; height: 21px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.1.</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 21px;\">2016</td>\r\n<td style=\"width: 85.0621%; height: 21px;\">Polese, A.; J. Morris; B. Kovacs (2016). &ldquo;States&rdquo; of informality in post-socialist Europe (and beyond). Debatte: Journal of Contemporary Central and Eastern Europe, 24 (3), 181&minus;190.</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"width: 8.52855%; height: 21px;\">\r\n<div class=\"span1\">1.1.</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 21px;\">2016</td>\r\n<td style=\"width: 85.0621%; height: 21px;\">Urinboev, R; Polese, A. (2016). Informality currencies: a tale of Misha, his brigada and informal practices among Uzbek labour migrants in Russia. Debatte: Journal of Contemporary Central and Eastern Europe, 24 (3), 191&minus;206.</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"width: 8.52855%; height: 21px;\">\r\n<div class=\"span1\">2.1.</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 21px;\">2016</td>\r\n<td style=\"width: 85.0621%; height: 21px;\">Polese, A. (2016). Limits of a Post-Soviet State How Informality Replaces, Renegotiates, and Reshapes Governance in Contemporary Ukraine. Columbia University Press.</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"width: 8.52855%; height: 21px;\">\r\n<div class=\"span1\">3.1.</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 21px;\">2016</td>\r\n<td style=\"width: 85.0621%; height: 21px;\">Isaacs, R.; Polese, A. (2016). Introduction: Nation-Building in the Post-Soviet Space Old: New and Changing Tools. In: R. Isaacs, A. Polese (_EditorsAbbr). Nation-Building and Identity in the Post-Soviet Space: New Tools and Approaches (1&minus;21). Routledge. (Post-Soviet Politics).</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"width: 8.52855%; height: 21px;\">\r\n<div class=\"span1\">3.1.</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 21px;\">2016</td>\r\n<td style=\"width: 85.0621%; height: 21px;\">Horak, S; Polese, A. (2016). Personality Cults and Nation-Building in Turkmenistan. In: Rico Isaacs; Abel Polese (_EditorsAbbr). Nation Building in the Former USSR: New Tools and Approaches (x&minus;xx). Routledge.</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"width: 8.52855%; height: 21px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.2.</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 21px;\">2016</td>\r\n<td style=\"width: 85.0621%; height: 21px;\">Polese, A (2016). Corruption State Trust and Informality in Ukraine. In: Addressing Security Risks at the Ukrainian Border Through Best Practices on Good Governance (x&minus;xx). IOS Press.</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"width: 8.52855%; height: 21px;\">\r\n<div class=\"span1\">4.1.</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 21px;\">2016</td>\r\n<td style=\"width: 85.0621%; height: 21px;\">Isaacs, R.; Polese, A. (Eds.) (2016). Nation Building and Identity in the Post-Soviet Space: New Tools and Approaches. Ashgate Publishing.</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"width: 8.52855%; height: 21px;\">\r\n<div class=\"span1\">4.1.</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 21px;\">2016</td>\r\n<td style=\"width: 85.0621%; height: 21px;\">Polese, A.; Kevlihan, R.; OBeachain, D. (Eds.) (2016). Hybrid War in Post-Soviet Spaces (Special issue of a Small Wars &amp; Insurgencies, vol. 27(3)). In: .</td>\r\n</tr>\r\n<tr style=\"height: 21px;\">\r\n<td style=\"width: 8.52855%; height: 21px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">4.1.</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 21px;\">2016</td>\r\n<td style=\"width: 85.0621%; height: 21px;\">Williams, C; Rodgers, P; Polese, A (2016). International Journal of Entrepreneurship and Small Business: Special Issue: Tackling Enterprise in the Informal Economy. Interscience Enterprices Ltd.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">6.8.</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2016</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">Williams, C; Rodgers, P; Polese, A (2016). Introduction: Tackling Enterprise in the Informal Economy. International Journal Entrepreneurship and Small Business, 28 (2/3), 139&minus;153.10.1504/IJESB.2016.076637.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">6.8.</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2016</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">Polese, A (2016). Services, Modes of Governance and the State. Studies of Transition States and Societies, 8 (1), 1&minus;2.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">6.8.</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2016</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">Isaacs, R; Polese, A (2016). Conclusion: Reimagining or Imagined Nation Building. In: Rico Isaacs; Abel Polese (_EditorsAbbr). Nation Building in the Former USSR: New Tools and Approaches (210). Routledge.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.2.</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2015</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">Polese, Abel (2015). Informality crusades: why informal practices are stigmatized, fought and allowed in different contexts according to an apparently unintelligible logic. Caucasus Social Science Review, 2 (1), 1&minus;26.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.2.</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2015</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">Polese, A (2015). A turn for constructivist human security research? EthnoGeoPolitics, 3 (3), 93&minus;96.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.3.</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2015</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">Davies, T.; Polese, A. (2015). Informalidad y supervivencia en Chernobyl: etnograf&iacute;a de un espacio nuclear. methaodos. revista de ciencias sociales, 3, 221&minus;238.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.1.</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2015</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">Polese, Abel; Morris, Jeremy (2015). Quo Vadis Informality. In: Informal Economies in Post-Socialist Spaces: Practices, Institutions, Networks (301&minus;315). Palgrave Macmillan.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.1.</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2015</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">Polese, Abel; Morris, Jeremy (2015). My name is legion. The Resilience and Endurance of Informality Beyond, or in Spite of, the State. In: Informal Economies in Post-Socialist Spaces: Practices, Institutions, Networks (1&minus;27). Palgrave Macmillan.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">4.1.</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2015</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">Morris, J.; Polese, A. (Eds.) (2015). Informal Economies in Post-Socialist Spaces: Practices, Institutions and Networks. Palgrave Macmillan.10.1057/9781137483072.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.1.</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2014</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">Polese, A (2014). Informal Payments in Ukrainian Hospitals: on the Boundary Between Informal Payments, Gifts and Bribes. Anthropological Forum, 24 (4), 381&minus;395.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.1.</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2014</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">Polese, Abel; Morris, Jeremy, Borbola, Kovacs; Harboe, Ida (2014). Welfare States\' in Central and Eastern Europe: Where Informality fits in? Journal of Contemporary European Studies, 22 (2), 184&minus;198.10.1080/14782804.2014.902368.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.1.</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2014</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">Polese, A (2014). Individual and state morality: what if they do not overlap. Studies of Transition States and Societies, 6 (1), 1&minus;2.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.3.</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2014</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">Polese, A. (2014). Крестовые походы на неформальность: почему в разных случаях, руководствуясь предположительно непонятной логикой, неформальные практики клеймят, пресекают или разрешают. ПОЛІТОЛОГІЯ СОЦІОЛОГІЯ ПРАВО, 13.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.1.</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2014</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">Morris, Jeremy; Polese, Abel (2014). Introduction: Informality &ndash; Enduring Practices, Entwined Livelihoods. In: Jeremy Morris and Abel Polese (_EditorsAbbr). The Informal Post-Socialist Economy: Embedded Practices and Livelihoods (12).. London and New York: Routledge Taylor &amp; Francis Ltd.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.1.</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2014</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">Polese, Abel (2014). Drinking with Vova: a Ukrainian Entrepreneur between Informality and Illegality. In: The Informal Post-Socialist Economy: Embedded Practices and Livelihoods (85&minus;101).. London and New York: Routledge Taylor &amp; Francis Ltd.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.2.</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2014</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">Polese, Abel (2014). Patterns of identity formation in the post-Soviet space: Odessa as a case study. In: Gonul Pultar (_EditorsAbbr). Imagining Identities: Identity Formation in the Age of Globalization (175&minus;194). Syracuse University Press.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">4.1.</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2014</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">Morris, Jeremy; Polese, Abel (2014). The Post-Socialist Informal Economy. Routledge.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.1.</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2013</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">Polese, Abel; Prigarin, Aleksandr (2013). On the persistence of bazaars in the newly capitalist world: reflections from Odessa. The Anthropology of East Europe Review, 110&minus;136.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.1.</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2013</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">Polese, A (2013). Political Transformations, Endogenous Factors and Non-Political Actors. Studies of Transition States and Societies, 5 (1), 1.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.2.</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2013</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">(2013). Grazhdanskaya kampaniya &ldquo;PORA&rdquo; na Ukraine: Chetyre voprosa o roli grazhdanskogo obshchestva v period tsvetnikh revolutsii. Политическая наука, 211&minus;231.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.2.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2013</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">(2013). The Role of Civil Society in the Colour Revolutions: A Case-Study of PORA in Ukraine. Contemporary Central Asia, XVII (1), 1&minus;19.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.2.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2013</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">(2013). Ucr&acirc;nia: a constru&ccedil;&atilde;o nacional entre o real e o imagin&aacute;rio. e-cadernos, 19, 153&minus;180.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.2.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2013</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">\r\n<div class=\"large gap3\">Polese, Abel (2013). The Socio-economic Function of Borders, Evidence from EU Neighbourhood Countries. Eurolimes, 16, 22.</div>\r\n</td>\r\n</tr>\r\n<tr style=\"height: 41px;\">\r\n<td style=\"width: 8.52855%; height: 41px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 41px;\">2013</td>\r\n<td style=\"width: 85.0621%; height: 41px;\">Polese, Abel (2013). The Ambiguity and Functions of Informality: Some Notes from the Odessa-Chisinau Route. In: C. Giordano and N. Hayoz (_EditorsAbbr). Informality in Eastern Europe: Structures, Political Cultures and Social Practices (415&minus;432).. Bern: P. Lang. (Interdisciplinary studies on Central and Eastern Europe; 11).</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2013</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">Companjen, F; Polese, A (2013). Subtle Line between Self-defence and War: South Ossetia 2008. In: Conflict and Peace in Eurasia (88&minus;102).. Routledge. (3).</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2012</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">Polese, Abel (2012). Russia, the US and 101 Things to do to Win a Colour Revolution. Debatte: Journal of Contemporary Central and Eastern Europe, 39&minus;53.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2012</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">OBeachain, D; Polese, A (2012). Rocking the Vote\': New Forms of Youth Organization in Post-Communist Spaces. Walker, C. and S. Stephenson. Youth and Social Change in Eastern Europe and the Former Soviet Union (120&minus;x).. Routledge.</td>\r\n</tr>\r\n<tr style=\"height: 41px;\">\r\n<td style=\"width: 8.52855%; height: 41px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 41px;\">\r\n<div class=\"span1\">2012</div>\r\n</td>\r\n<td style=\"width: 85.0621%; height: 41px;\">Polese, A. (2012). Who has the right to forbid and who to trade? Making sense of illegality on the Polish-Ukrainian border. In: B. Bruns and J. Miggelbring (_EditorsAbbr). Subverting Borders. Doing Research on Smuggling and Small-Scale Trade. (21&minus;38).. Springer.10.1007/978-3-531-93273-6_2.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.1.</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2011</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">Polese, Abel; Rodgers, Peter (2011). Surviving Post-Socialism: The Role of Informal Economic Practices. International Journal of Sociology and Social Policy, 31, 612&minus;618.10.1108/01443331111177896.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2011</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">Polese, Abel (2011). Language and identity in Ukraine: was it really nation building. Studies of Transition States and Societies, 121.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2011</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">OBeachain, Donnacha; Polese, Abel (2011). The Color Revolution Virus and Authoritarian Antidotes : Political Protest and Regime Counterattacks in Post-Communist Spaces. Demokratizatsiya: the Journal of Post-Soviet Democratization, 111&minus;132.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.2.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2011</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">OBeachain, Donnacha; Polese, Abel (2011). What Happened to the Colour Revolutions? Authoritarian Responses from Former Soviet Spaces. Journal of International and Area Studies, 31&minus;51.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.3.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2011</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">Polese, A. (2011). Dichotomies between citizenship and nationality: reflections from the Ukrainian nation building experience. Politick&eacute; V&eacute;dy, 48&minus;63.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.2.</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2011</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">A Polese, O Seliverstova (2011). Ucraina, fiabe senza frontiere. Raccontami una storia. Fiabe, leggende e miti nella memoria dei popoli (443).. Franco Angeli.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.2.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2011</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">Polese, A. (2011). Ukraine&nbsp;: la construction d\'une identite nationale entre le r&eacute;el et l&rsquo;imaginaire. Gilles Rouet. Nations, Cultures et Entreprises en Europe (145&minus;163).. L\'Harmattan.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">4.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2011</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">Polese, Abel; Rodgers, Peter (2011). Surviving Post-socialism. Emerald Group Publishing Limited.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">6.3.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2011</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">Polese, A. (2011). Cosa muove le rivoluzioni colorate? East - Europe Asia Strategies, 1.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.1</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2010</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">Polese, A (2010). The formal and the informal: Exploring &lsquo;Ukrainian&rsquo; Education in Ukraine, Scenes from Odessa. Comparative Education, 45&minus;62.10.1080/03050060903538673.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2010</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">OBeachain, Donnacha; Polese, Abel (2010). Rocking the Vote\': New Forms of Youth Organization in Post-Communist Spaces. Journal of Youth Studies, 1&minus;16.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.3.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2010</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">(2010). Issledovanie razlichnoy prirody nezakonnikh tranzaktsii v Ukraine. Sotsiologiya: teoriya, metody, marketing, 52&minus;70.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2010</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">Polese, Abel (2010). Ukraine 2004: Informal Networks, Transformation of Social Capital and Coloured Revolutions. In: D. Lane and S. White (_EditorsAbbr). Rethinking Colour Revolutions (232).. Routledge.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2010</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">OBeachain, Donnacha; Polese, Abel (2010). Conclusion. In: The Colour Revolutions in the Former Soviet Union: Successes and Failures (240).. Routledge.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2010</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">OBeachain, Donnacha; Polese, Abel (2010). What\'s in a Colour? In: OBeachain, Donnacha; Polese, Abel (_EditorsAbbr). The Colour Revolutions in the Former Soviet Union: Successes and Failures (12).. Routledge.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">4.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2010</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">OBeachain, Donnacha; Polese, Abel (2010). The Colour Revolutions in the Former Soviet Union: Successes and Failures. Routledge.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2009</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">(2009). The Guest at the Dining Table: Economic Transition and the Reshaping of Hospitality, Reflections from Batumi and Odessa. The Anthropology of East Europe Review, 65&minus;77.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2009</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">(2009). Ukraine 2004: Informal Networks, Transformation of Social Capital and Coloured Revolutions. The Journal of Communist Studies and Transition Politics, 255&minus;277.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.2.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2009</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">(2009). Une version alternative de la &laquo;r&eacute;volution orange&raquo;: transformations identitaires et &laquo;nation building spontan&eacute;. Socio-logos, 4, 1.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2009</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">(2009). Ukraine. In: The International Encyclopaedia of revolution and Protest: 1500 to the Present (512).. Blackwell Publishers.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2009</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">(2009). Gene Sharp. In: The International Encyclopaedia of revolution and Protest: 1500 to the Present (322).. Blackwell Publishers.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2009</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">Firouz, Oma; Polese, Abel (2009). Etienne de la Boetie. In: The International Encyclopaedia of revolution and Protest: 1500 to the Present (432).. Blackwell Publishers.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2009</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">OBeachain, Donnacha; Polese, Abel (2009). Coloured Revolutions. In: The International Encyclopaedia of revolution and Protest: 1500 to the Present (320).. Blackwell Publishers.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2008</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">(2008). If I Receive it, it is a Gift; if I Demand it, then it is a Bribe&rsquo; on the Local Meaning of Economic Transactions in Post-soviet Ukraine. Anthropology in Action, 47&minus;60.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2008</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">Polese, Abel; Wylegala, Anna (2008). Odessa and Lvov or Odesa and Lviv: How Important is a Letter? Reflections on the &ldquo;Other&rdquo; in Two Ukrainian Cities. Nationalities Papers, 787&minus;814.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.2.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2008</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">OBeachain, Donnacha; Polese, Abel (2008). Einfuhrung. Totalitarismus und Demokratie, 11.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2008</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">(2008). Ukraine 1991-2006: Where are all the Communists Gone? In: Uwe Backes and Patrick Moreau (_EditorsAbbr). Communist Parties in Eastern Europe after 1989 (256&minus;280).. Vandenhoeck &amp; Ruprecht.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">4.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2008</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">Backes, Uwe; Jaskulowski, Tytus; Polese, Abel (2008). Totalitarismus und Transformation - Defizite der Demokratiekonsolidierung in Mittel- und Osteuropa. Vandenhoeck &amp; Ruprecht.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.2</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2007</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">(2007). Can Free Elections Secure Democratic Consolidation? An Analysis of Ukraine in 2006. Totalitarismus und Demokratie, 119&minus;149.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.2.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2007</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">OBeachain, Donnacha; Polese, Abel (2007). American Boots and Russian Vodka: External Factors on Coloured Revolutions in Georgia, Ukraine and Kyrgyzstan. Totalitarismus und Demokratie, 87&minus;114.</td>\r\n</tr>\r\n<tr style=\"height: 41px;\">\r\n<td style=\"width: 8.52855%; height: 41px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.2.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 41px;\">2007</td>\r\n<td style=\"width: 85.0621%; height: 41px;\">(2007). Determinants of Ukrainian Political Orientation: Dynamics of Peoples&rsquo; Response to &ldquo;Ukrainization&rdquo; Policies in the Odessa Region and Effects on Domestic and Foreign Policies. In: A. Jurkowska, K. Kosior (_EditorsAbbr). Beyond the borders. Ukraine and European Neighbourhood Policy (268&minus;277).. Wydawnictwa Uniwersytetu Rzeszowskiego.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">4.1.</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2007</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">OBeachain, Donnacha; Polese, Abel (2007). Coloured Revolutions in Eurasia 1998-2005. Vandenhoeck &amp; Ruprecht.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">6.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2007</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">(2007). Tanzania. In: The Encyclopedia of the Cold War A Political, Social, and Military History (997).. ABC Clio Press.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">6.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2007</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">(2007). Sudan. In: The Encyclopedia of the Cold War A Political, Social, and Military History (789).. ABC Clio Press.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">6.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2007</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">(2007). Eritrea. In: The Encyclopedia of the Cold War A Political, Social, and Military History (445).. ABC Clio Press.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">6.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2007</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">(2007). Karelia. In: The Encyclopedia of the Cold War A Political, Social, and Military History (542).. ABC Clio Press.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">6.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2007</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">(2007). Basque Separatism. In: The Encyclopedia of the Cold War A Political, Social, and Military History (123).. ABC Clio Press.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">6.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2007</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">(2007). Nationalism. In: The Encyclopedia of the Cold War A Political, Social, and Military History (322).. ABC Clio Press.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2006</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">(2006). Border Crossing as a Daily Strategy of Post Soviet Survival: the Odessa-Chisinau Elektrichka. The Anthropology of East Europe Review, 28&minus;37.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">1.3.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2006</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">(2006). La corrente attitudine verso l&rsquo;ecologia in Ucraina: il campo di lavoro &ldquo;Futurum&rdquo; in Crimea. Gazzetta Ambiente, 49&minus;65.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">3.2.</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2006</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">(2006). The Good Samaritan. In: Man of the Global South: a Reader (111).. Zed Books.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">6.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2006</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">(2006). Estonia 900. Umberto Eco. Enciclopedia del &lsquo;900 (674).. Motta.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">6.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2006</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">(2006). Turchia. Umberto Eco. Enciclopedia del &lsquo;900 (787).. Motta.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">6.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2006</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">(2006). Lettonia. Umberto Eco. Enciclopedia del &lsquo;900 (656).. Motta.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">6.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2006</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">(2006). Georgia. Umberto Eco. Enciclopedia del &lsquo;900 (567).. Motta.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">6.1.</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2006</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">(2006). Finlandia. Umberto Eco. Enciclopedia del &lsquo;900 (456).. Motta.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">6.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2006</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">(2006). Bielorussia. Umberto Eco. Enciclopedia del &lsquo;900 (324).. Motta.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">6.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2006</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">(2006). Azerbaijan. Umberto Eco. Enciclopedia del &lsquo;900 (222).. Motta.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">6.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2006</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">(2006). Armenia. Umberto Eco. Enciclopedia del \'900 (1).. Motta.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">6.3.</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2006</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">(2006). Paying for a Free Education.</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">6.3.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">2004</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">(2004). Ukraine: the Future is Orange?</td>\r\n</tr>\r\n<tr style=\"height: 20px;\">\r\n<td style=\"width: 8.52855%; height: 20px;\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">\r\n<div class=\"span1\">4.1.</div>\r\n</div>\r\n</div>\r\n</div>\r\n</td>\r\n<td style=\"width: 6.40925%; height: 20px;\">0</td>\r\n<td style=\"width: 85.0621%; height: 20px;\">\r\n<div class=\"form-group ng-scope\">\r\n<div class=\"form-body\">\r\n<div class=\"large gap3\">Isaacs, Rico; Polese, Abel (0). \"Imagined\" vs \"real\" nation-building: language and identity policies between theory and practice in Central Asia. ..</div>\r\n</div>\r\n</div>\r\n<div class=\"padding-left-30 ng-scope\">\r\n<div id=\"propOn\" class=\"control-group display\">&nbsp;</div>\r\n</div>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>',1,5,'\"\"','a:1:{i:0;s:66:\"a:1:{i:0;s:48:\"a:1:{i:0;s:30:\"a:1:{i:0;s:12:\"publications\";}\";}\";}\";}','publications',1576145838,1,NULL,NULL),
(6,0,'Talks','Talks','<p>I often give keynote lectures and present invited papers at seminars. This page links to several recent ones where I&rsquo;ve been captured on video.</p>',1,6,'\"\"','a:1:{i:0;s:0:\"\";}','talks',1576146470,1,NULL,NULL);

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
(1,'abel.polese@tlu.ee','abel.polese@tlu.ee','social','It\'s my Email',NULL,'envelope',1,1575795227,1,NULL,NULL),
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `setting` */

insert  into `setting`(`id`,`type`,`section`,`key`,`value`,`status`,`description`,`created_at`,`updated_at`) values 
(1,'string','Site','sitename','Dr. Abel Polese',1,'It\'s site name and used like Title in home page',1575215973,1576133240),
(2,'string','Site','description','Senior Research Fellow with DCU Institute for International Conflict Resolution and Reconstruction',1,'Describe site',1575216197,1575790053),
(3,'string','test','test','test',0,'test',1575373966,1576057982),
(4,'string','Site','empty_result','Here is not any data yet!',1,'if page have not any data',1575808004,1575808004),
(5,'string','Descriptons','email_contact','Lorem ipsum dolor',1,'its for contact',1575904089,1575904232),
(6,'string','Descriptons','phone_number_contact','Lorem ipsum dolor',1,'its for contact page',1575904143,1575904165),
(7,'string','Descriptons','location_contact','Lorem ipsum dolor',1,'its for contact',1575904199,1575904215),
(8,'string','Contact','contact_form_title','Leave us your info',1,'',1575905501,1575905501),
(9,'string','Contact','contact_form_title2','and we will get back to you.',1,'',1575905536,1575905536),
(10,'string','Contact','contact_form_description','Lorem ipsum dolor',1,'Contact form description',1575905789,1575905789),
(11,'string','Site','share_post','You can share this blog post on the following social networks by clicking on their icon.',1,'Text for share buttons description',1575997913,1575997913);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `subcribers` */

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
(1,'admin','f6fdffe48c908deb0f4c3bd36c032e72','manu6699@mail.ru','A',0,'person_abel_polese-300x286.jpg','2019-10-12 14:32:54',1,'2015-05-27 15:56:35',1,'IoY4IvIAdoXtwJSsVucGTPET0gNMjgr3_1575801111',NULL,'0gpgst45pf731mkc9lr1imlqll2e6sc7'),
(22,'admin2','af8eb328301d219cfd1d50e6c6a48f58',NULL,'A',0,'std5.jpg','2019-10-12 13:45:41',1,NULL,NULL,NULL,NULL,'i44c6ra6ukintfbsfc83gfcelnb5qifb'),
(23,'admin3','7169390683d2b222ba778ca6374b59d3',NULL,'A',0,'std7.jpg','2019-10-12 13:52:10',1,NULL,NULL,NULL,NULL,'ak5h7tnec99b69cipd80ralc0p2fa23l'),
(25,'admin4','dfa5f43cb476ef890a83010f0da7c6b0',NULL,'A',0,'std3.jpg','2019-10-12 13:57:57',1,NULL,NULL,NULL,NULL,'2pqp9rissts870sj830jkor0jntj15h9'),
(26,'admin6','b48d62f30f50c2c191ab949186c532d3',NULL,'A',0,'std6.jpg','2019-10-12 14:05:01',1,NULL,NULL,NULL,NULL,'90c8pfqa6cchpcofouj9qsl1hvngu3f3');

/*Table structure for table `user_message` */

DROP TABLE IF EXISTS `user_message`;

CREATE TABLE `user_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(500) NOT NULL,
  `message` text NOT NULL,
  `reply` text,
  `status` int(2) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `user_message` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
