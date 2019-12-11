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
(1,'Abel','Polese','1976-06-17',NULL,NULL,NULL,NULL,'Phd','<div class=\"row-fluid\">\r\n<div class=\"pull-left\">&nbsp;</div>\r\n</div>\r\n<div class=\"expander\">\r\n<div>\r\n<div style=\"text-align: justify;\">Abel Polese is a Senior Research Fellow with DCU Institute for International Conflict Resolution and Reconstruction. He has been a Marie Curie Fellow at the Technical University of Dresden, Germany (2006-2008) and the University of Edinburgh, Scotland (2008-2011). In 2012-2013 he worked&nbsp; as a policy analyst for the European Commission (DG Research).<br />In the past seven years, Abel has been awarded funding for nearly 10 million euro and has worked as a consultant for a the governmental and non profit sector in Europe, Asia and Latin America (Austrian and Finnish Agencies for Erasmus+; Estonian Research Council; Rustaveli Foundation; SALTO; YouthForum; WAGGGS; UNOPS). His project &ldquo;Sustainable Development in Cultural Diversity&rdquo; received the Global Education Award by the Council of Europe in 2011.<br />He is a member of the Global Young Academy, gathering scholars from around the world active in research policy and dialogue with non-academic institutions and has been a visiting fellow to the University of Toronto, Harvard University, Renmin University of China, Tbilisi State University, Jawarlahal Nehru University, Tezpur University, Corvinus University, University of Cagliari and the Moscow Higher School of Economics.He is co-editor of STSS, an open access journal indexed in SCOPUS focusing on governance and social issues the non-Western world.</div>\r\n<div>\r\n<h3>&nbsp;</h3>\r\n<h3>Research Interests</h3>\r\n<p>Theory and Practice of Development, Post-Soviet Politics and Societies, Governance Caucasus, Central Asia, Eastern Europe, South East Asia.</p>\r\n</div>\r\n</div>\r\n</div>','person_abel_polese-300x286.jpg',1,1575481302,1,1576059553,1);

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
(1,'Estonia','Tallin',' ','+37256059023',1);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `cv` */

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `front_menu` */

insert  into `front_menu`(`nodeid`,`parentnodeid`,`page_id`,`nodeshortname`,`nodename`,`nodeurl`,`userstatus`,`nodeaccess`,`nodestatus`,`nodeorder`,`nodefile`,`nodeicon`,`ishasdivider`,`hasnotify`,`notifyscript`,`isforguest`,`arrow_tag`,`position`) values 
(1,0,0,'About me','About me','/main/about-me/','ALL',1,NULL,0,NULL,'','no','no','','yes',NULL,NULL),
(2,1,0,'CV','CV','/main/cv/','ALL',1,NULL,4,NULL,'','no','no','','yes',NULL,NULL),
(3,0,0,'Blog','Blog','/blog/posts','ALL',1,NULL,6,NULL,'','no','no','','yes',NULL,NULL),
(4,0,0,'Contact','Contact','/main/contact/','ALL',1,NULL,10,NULL,'','no','no','','yes',NULL,NULL),
(5,0,0,'Books','Books','/books/list','ALL',1,NULL,7,NULL,'','no','no','','yes',NULL,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `login_details` */

insert  into `login_details`(`login_detail_id`,`login_user_id`,`login_status`,`login_at`,`logout_at`,`user_ip_address`) values 
(1,1,1,'2019-12-11 14:36:38',NULL,'127.0.0.1'),
(2,1,1,'2019-12-11 14:39:43',NULL,'127.0.0.1'),
(3,1,1,'2019-12-11 14:46:50',NULL,'127.0.0.1');

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
(2,'Limits of a Post-Soviet State: How Informality Replaces, Renegotiates, and Reshapes Governance in Contemporary Ukraine (Soviet and Post-Soviet Politics and Society Book 154) Kindle Edition','Abel Polese',' ibidem (June 1, 2016)','2016','3838208854',260,'English','','<p>This book illustrates why and how informality in governance is not necessarily transitory or temporary, but a constant in most systems of the world. The difference between various administrative structures is not whether informality is present or not, but where, in which areas, it is located. The essays gathered in this volume demonstrate that, in some cases, informal mechanisms are self-protective, while, in others, they are perceived as \'normal\' responses and a set of tactics for individuals, classes, and communities to respond to unusual demands. Where expectations&mdash;of the state, a company, or some commission&mdash;are too far from citizens\' existing models of normative behavior, informal behavior continues to thrive. Indeed, new tactics are adopted in order to cope with disjunctions between theory and reality as well as to serve as contrasts to values imposed by a center of power, such as a central state, a city administration, or the management board of a large company.<br /><br />The focus of the papers contained in this book is two-fold and rests on an analysis of phenomena manifesting themselves \"beyond\" and \"in spite of\" the state. The first part deals with areas where the state is not always, or only marginally, active whilst the second analyzes activities performed in conflict with state regulations, i.e. behavior often studied from a criminal and legal standpoint.</p>','https://www.amazon.com/Limits-Post-Soviet-State-Renegotiates-Contemporary-ebook/dp/B076ZMZN2H/ref=sr_1_11?qid=1575993589&refinements=p_27%3AAbel+Polese&s=books&sr=1-11','limits_of_a_Post_soviet_state.jpg','',1,1576000479,1,NULL,NULL),
(3,'Identity and Nation Building in Everyday Post-Socialist Life (Routledge Contemporary Russia and Eastern Europe Series Book 75) 1st Edition, Kindle Edition','Abel Polese (Editor), Jeremy Morris (Editor), Emilia Pawłusz (Editor), Oleksandra Seliverstova (Editor)','Routledge; 1 edition (July 31, 2017)','2017','1138736414',193,'English','','<p>This book explores the function of the &ldquo;everyday&rdquo; in the formation, consolidation and performance of national, sub-national and local identities in the former socialist region. Based on extensive original research including fieldwork, the book demonstrates how the study of everyday and mundane practices is a meaningful and useful way of understanding the socio-political processes of identity formation both at the top and bottom level of a state. The book covers a wide range of countries including the Baltic States, Ukraine, Russia, the Caucasus and Central Asia, and considers &ldquo;everyday&rdquo; banal practices, including those related to consumption, kinship, embodiment, mobility, music, and the use of objects and artifacts. Overall, the book draws on, and contributes to, theory; and shows how the process of nation-building is not just undertaken by formal actors, such as the state, its institutions and political elites.</p>','https://www.amazon.com/Identity-Building-Post-Socialist-Routledge-Contemporary-ebook/dp/B074F2D2SF/ref=sr_1_5?qid=1575993589&refinements=p_27%3AAbel+Polese&s=books&sr=1-5','Identity and Nation Building in Everyday Post-Socialist.jpg','',1,1576000585,1,NULL,NULL),
(4,'The Informal Post-Socialist Economy: Embedded Practices and livelihoods (Routledge Contemporary Russia and Eastern Europe Series) 1st Edition, Kindle Edition','by Jeremy Morris (Editor), Abel Polese (Editor)','978-1138204041','','978-1138204041 | 1138204048',209,'English','','<p>From smugglers to entrepreneurs, blue-collar workers and taxi drivers, this book deals with the multitude of characters engaged in informal economic practices in the former socialist regions. Going beyond a conception of informality as opposed to the formal sector, its authors demonstrate the fluid nature of informal transactions straddling the crossroads between illegal, illicit, socially acceptable and symbolically meaningful practices. Their argument is informed by a wide range of case studies, from Central Europe to the Baltics and Central Asia, each of which is constructed around a single informant. Each chapter narrates the story of a composite person or household that was carefully selected or constructed by an author with long-standing ethnographic research experience in the given field site.</p>\r\n<p>&nbsp;</p>\r\n<p>Wide in geographical, empirical and theoretical scope, the book uses ethnographic narrative accounts of everyday life to make links between &lsquo;ordinary&rsquo; meanings of informality. Challenging reductively economistic perspectives on cross-border trading, undeclared work and other informal activities, the authors illustrate the wide variety of interpretive meanings that people ascribe to such practices. Alongside &lsquo;getting by&rsquo; and &lsquo;getting ahead&rsquo; in recently marketised societies, these meanings relate to sociality, kinship-ties and solidarity, along with more surprising &lsquo;political&rsquo; and moral reasonings.</p>','https://www.amazon.com/Informal-Post-Socialist-Economy-livelihoods-Contemporary-ebook/dp/B00HA83XKY/ref=sr_1_4?qid=1575993589&refinements=p_27%3AAbel+Polese&s=books&sr=1-4','Informal-Post-Socialist-Economy-livelihoods-Contemporary-ebook.jpg','',1,1576000713,1,NULL,NULL),
(5,'Rethinking Statehood in the Middle East and North Africa: Security, Sovereignty and New Political Orders','Abel Polese (Editor), Ruth Hanau Santini (Editor)','Routledge; 1 edition (January 28, 2019)','2019','036718088X',246,'English','','<h3>About the Author</h3>\r\n<div class=\"a-expander-collapsed-height a-row a-expander-container a-expander-partial-collapse-container\" aria-live=\"polite\" data-a-expander-collapsed-height=\"300\">\r\n<div class=\"a-expander-content a-expander-partial-collapse-content\" aria-expanded=\"false\">\r\n<p><strong>Abel Polese</strong>&nbsp;is a Senior Research Fellow at Dublin City University, Ireland. He is a writer, development worker, scholar, amateur photographer and musician who is mainly interested in the dichotomy between formal and informal modes and structures of governance. He is the author of&nbsp;<em>The Scopus Diaries and the Illogics of Academic Survival</em>&nbsp;(2018).</p>\r\n<p><strong>Ruth Hanau Santini</strong>&nbsp;is Assistant Professor of Politics and International Relations at Universit&agrave; L&rsquo;Orientale in Naples, Italy, and Associate Fellow at the Middle East, Central Asia and Caucasus Studies&rsquo; Institute at the University of St. Andrews, UK. She is interested in the domestic and international politics of the MENA region and, more broadly, in state-society relations, citizenship, and changing understandings of democracy. Her work includes&nbsp;<em>Limited statehood in post-revolutionary Tunisia. Citizenship, economy and security</em>&nbsp;(2018).</p>\r\n</div>\r\n</div>','https://www.amazon.com/Rethinking-Statehood-Middle-North-Africa/dp/036718088X/ref=sr_1_8?qid=1575993589&refinements=p_27%3AAbel+Polese&s=books&sr=1-8','Rethinking-Statehood-Middle-North-Africa.jpg','',NULL,1576001543,1,NULL,NULL);

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
(1,'abel.polese@tlu.ee','abel.polese@tlu.ee','social','It\'s my Email',NULL,'envelope',1,1575795227,1,NULL,NULL),
(2,'@abiquitous','https://twitter.com/abiquitous','social','It\'s my Tweetter profile.',NULL,'twitter',1,1575796372,1,1575796399,1);

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
(1,'string','Site','sitename','Abel Polese, PhD',1,'It\'s site name and used like Title in home page',1575215973,1575791729),
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
(1,'admin','f6fdffe48c908deb0f4c3bd36c032e72','manu6699@mail.ru','A',0,'person_abel_polese-300x286.jpg','2019-10-12 14:32:54',1,'2015-05-27 15:56:35',1,'IoY4IvIAdoXtwJSsVucGTPET0gNMjgr3_1575801111',NULL,'fplojh7o4hut6e3lovdpc34fdiiv5egj'),
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
