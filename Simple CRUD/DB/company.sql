/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.25-MariaDB : Database - company
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`company` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `company`;

/*Table structure for table `companies` */

DROP TABLE IF EXISTS `companies`;

CREATE TABLE `companies` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `companies` */

insert  into `companies`(`id`,`name`,`email`,`address`,`created_at`,`updated_at`) values 
(2,'asd','hhhh@gmail.com','asda','2022-10-03 12:12:30','2022-10-03 12:12:30'),
(3,'asd','asd@adsa.ca','adsa','2022-10-03 12:27:00','2022-10-03 12:27:00'),
(4,'3132132','asda@ajsja.dada','asd','2022-10-03 12:27:06','2022-10-03 12:30:33'),
(5,'asdas','da@gmail.com','132132','2022-10-03 12:38:23','2022-10-03 12:38:23'),
(6,'asda','asda@asda.da','asda','2022-10-03 12:44:47','2022-10-03 12:44:47'),
(7,'asd','asd@asda.da','asdas','2022-10-03 12:44:55','2022-10-03 12:44:55'),
(8,'asd','asda@sdfsd.ca','asda','2022-10-03 12:45:06','2022-10-03 12:45:06'),
(9,'asd','hhhh@gmail.com','asda','2022-10-03 12:12:30','2022-10-03 12:12:30'),
(10,'asd','asd@adsa.ca','adsa','2022-10-03 12:27:00','2022-10-03 12:27:00'),
(11,'3132132','asda@ajsja.dada','asd','2022-10-03 12:27:06','2022-10-03 12:30:33'),
(12,'asdas','da@gmail.com','132132','2022-10-03 12:38:23','2022-10-03 12:38:23'),
(13,'asda','asda@asda.da','asda','2022-10-03 12:44:47','2022-10-03 12:44:47'),
(14,'asd','asd@asda.da','asdas','2022-10-03 12:44:55','2022-10-03 12:44:55'),
(15,'asd','asda@sdfsd.ca','asda','2022-10-03 12:45:06','2022-10-03 12:45:06'),
(16,'asd','asda@sdfsd.ca','asda','2022-10-03 12:45:06','2022-10-03 12:45:06'),
(17,'asd','asda@sdfsd.ca','asda','2022-10-03 12:45:06','2022-10-03 12:45:06'),
(18,'asd','asda@sdfsd.ca','asda','2022-10-03 12:45:06','2022-10-03 12:45:06'),
(19,'asd','asda@sdfsd.ca','asda','2022-10-03 12:45:06','2022-10-03 12:45:06'),
(20,'asd','asda@sdfsd.ca','asda','2022-10-03 12:45:06','2022-10-03 12:45:06'),
(21,'asd','asda@sdfsd.ca','asda','2022-10-03 12:45:06','2022-10-03 12:45:06'),
(22,'asd','asda@sdfsd.ca','asda','2022-10-03 12:45:06','2022-10-03 12:45:06'),
(23,'asd','asda@sdfsd.ca','asda','2022-10-03 12:45:06','2022-10-03 12:45:06'),
(24,'asd','asda@sdfsd.ca','asda','2022-10-03 12:45:06','2022-10-03 12:45:06'),
(25,'asd','asda@sdfsd.ca','asda','2022-10-03 12:45:06','2022-10-03 12:45:06'),
(26,'asdaaa','asda@sdfsd.ca','asda','2022-10-03 12:45:06','2022-10-12 05:09:27'),
(27,'ladexyce@mailinator.com','qoveje@mailinator.com','Soluta similique ut','2022-10-12 05:13:21','2022-10-12 05:13:21');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2019_12_14_000001_create_personal_access_tokens_table',1),
(5,'2022_10_03_120503_create_companies_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
