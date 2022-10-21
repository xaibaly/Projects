/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.25-MariaDB : Database - laravel-vite-vue
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`laravel-vite-vue` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `laravel-vite-vue`;

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
(5,'2022_10_12_104830_create_product_table',1);

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
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

insert  into `personal_access_tokens`(`id`,`tokenable_type`,`tokenable_id`,`name`,`token`,`abilities`,`last_used_at`,`expires_at`,`created_at`,`updated_at`) values 
(25,'App\\Models\\User',1,'Delete_Products_Token','0f83cc6d85f9ae94faae4c71c747141065ba830fccba8d3347e9441b5c50db66','[\"*\"]',NULL,NULL,'2022-10-20 06:16:41','2022-10-20 06:16:41'),
(26,'App\\Models\\User',1,'Delete_Products_Token','89b02596baca6a0a75a89981af85af566450633feaa87a27ff5e98b3b4dccf0f','[\"*\"]',NULL,NULL,'2022-10-20 06:17:07','2022-10-20 06:17:07'),
(27,'App\\Models\\User',1,'Edit_Products_Token','94d205b8f5f2f35e6450f5b9684f77a4d0096a8d38dfc0ce38f6756a9ea75944','[\"*\"]','2022-10-20 06:17:24',NULL,'2022-10-20 06:17:21','2022-10-20 06:17:24'),
(28,'App\\Models\\User',1,'Delete_Products_Token','ff3fc1fdae69dedc7d5fe84333c6c915851781d1c15f8bdd32eec908a82b4d1e','[\"*\"]',NULL,NULL,'2022-10-20 06:17:30','2022-10-20 06:17:30'),
(29,'App\\Models\\User',1,'Delete_Products_Token','b3ddbacb9c41a49fec7ced57442bfb0512b4de3c36ec30d7ee3c5c67aa332216','[\"*\"]',NULL,NULL,'2022-10-20 06:17:55','2022-10-20 06:17:55'),
(30,'App\\Models\\User',1,'Delete_Products_Token','a8b84d6523adef7f49050b3e0f852c0a842a4c65e659b1eed1e584518e0fe187','[\"*\"]',NULL,NULL,'2022-10-20 06:18:00','2022-10-20 06:18:00'),
(31,'App\\Models\\User',1,'Delete_Products_Token','952427e0a82395dab7884b2adea054b7fc1c19ef74dbd759abb1e399a410b1ae','[\"*\"]',NULL,NULL,'2022-10-20 06:18:48','2022-10-20 06:18:48'),
(32,'App\\Models\\User',1,'Delete_Products_Token','8cf8907c4a6700ca43fd14415efeb5ee3a3aebb8ccec0e1dba7947bad683e54e','[\"*\"]',NULL,NULL,'2022-10-20 06:18:58','2022-10-20 06:18:58'),
(33,'App\\Models\\User',1,'Delete_Products_Token','42b3a3637396e10cfecd966fac16b03dfd400467d55b6c023dbf197161e0c155','[\"*\"]',NULL,NULL,'2022-10-20 06:21:06','2022-10-20 06:21:06'),
(34,'App\\Models\\User',1,'Delete_Products_Token','81f938560ad55f1dcebfc82096409c8512706ec336ca6ef703fa6b6a0271a7f8','[\"*\"]',NULL,NULL,'2022-10-20 06:21:08','2022-10-20 06:21:08'),
(35,'App\\Models\\User',1,'Delete_Products_Token','3a3fa10429b072a744c8644c1a55edb25bb3442c783c66771e9b74b6b6aaa8f7','[\"*\"]',NULL,NULL,'2022-10-20 06:21:13','2022-10-20 06:21:13'),
(36,'App\\Models\\User',1,'Delete_Products_Token','48288a267e626856af995452e3dda5741eb3a9fe9f1040ec7fe5b528527e5a19','[\"*\"]',NULL,NULL,'2022-10-20 06:21:18','2022-10-20 06:21:18'),
(37,'App\\Models\\User',1,'Delete_Products_Token','7f8f5cdf2c9485e253ffd9420d59966523cc6acd19bd28e419c25bc4511736d8','[\"*\"]',NULL,NULL,'2022-10-20 06:21:19','2022-10-20 06:21:19'),
(38,'App\\Models\\User',1,'Delete_Products_Token','16c2086d41d1bbf60d267446f0f7d736e4b2e869627c8c39880198f67088229a','[\"*\"]',NULL,NULL,'2022-10-20 06:21:21','2022-10-20 06:21:21'),
(39,'App\\Models\\User',1,'Delete_Products_Token','1a440d6b08440786dc9320fe1a789e5cb1242c8b97ca0e844c84e224df10833b','[\"*\"]',NULL,NULL,'2022-10-20 06:21:29','2022-10-20 06:21:29'),
(40,'App\\Models\\User',1,'Delete_Products_Token','023ce860d38f1ab20c87639cc45f583483e4171ee5c3dace81fc419a08a6255c','[\"*\"]',NULL,NULL,'2022-10-20 06:24:17','2022-10-20 06:24:17'),
(41,'App\\Models\\User',1,'Delete_Products_Token','ab6aad9a5c76664942e7102c9d6e762c6dde217dd7d69d758f59b6f93eee8178','[\"*\"]',NULL,NULL,'2022-10-20 06:25:05','2022-10-20 06:25:05');

/*Table structure for table `product` */

DROP TABLE IF EXISTS `product`;

CREATE TABLE `product` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `product` */

insert  into `product`(`id`,`name`,`price`,`created_at`,`updated_at`) values 
(2,'hello',1212312,'2022-10-12 10:59:33','2022-10-20 10:20:03'),
(60,'asdas',123,'2022-10-17 10:57:56','2022-10-17 10:57:56'),
(61,'asdas',12121,'2022-10-17 10:58:15','2022-10-17 10:58:15'),
(62,'asdas',123,'2022-10-17 10:59:56','2022-10-17 10:59:56'),
(63,'adasd',1231,'2022-10-17 11:04:40','2022-10-17 11:04:40'),
(64,'hello',1111,'2022-10-18 06:37:37','2022-10-18 06:37:37'),
(66,'mnew',1231,'2022-10-20 04:52:35','2022-10-20 04:52:35'),
(67,'new new new',123123,'2022-10-20 04:52:47','2022-10-20 04:52:47'),
(68,'asd',1231231231,'2022-10-20 06:12:30','2022-10-20 06:12:30'),
(69,'1',123123,'2022-10-20 06:12:41','2022-10-20 06:12:41'),
(70,'123',123123,'2022-10-20 06:13:28','2022-10-20 06:13:28'),
(71,'asdas',12312321,'2022-10-20 06:13:34','2022-10-20 06:13:34'),
(72,'123',3123123,'2022-10-20 06:15:08','2022-10-20 06:15:08'),
(73,'asd',12312,'2022-10-20 06:16:36','2022-10-20 06:16:36');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(2,'hello','xubair.jatoi@gmail.com',NULL,'$2y$10$bpnZkxS3q97oGoVea169SuynjdGLyxG.0jSdt5gyvnrQKFSh8WlzW','oCYcSC2o14nRAUXUO4mOTU3pxm75KRv2ZVRtsu8KyL7QaFIFXrixjWoiANHd','2022-10-18 07:19:29','2022-10-18 07:19:29'),
(4,'asd','admin@gmail.com',NULL,'$2y$10$.Wetn3d8zK.ZCwcC40QVtenTOEyGke7fh/7i8/2ngNg.ZbThw1bGe',NULL,'2022-10-20 06:44:58','2022-10-20 06:44:58');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
