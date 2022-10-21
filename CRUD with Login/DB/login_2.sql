/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.25-MariaDB : Database - login_2
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`login_2` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `login_2`;

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2019_12_14_000001_create_personal_access_tokens_table',1);

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
  `role_id` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_picture_path` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`role_id`,`first_name`,`last_name`,`email`,`email_verified_at`,`password`,`remember_token`,`profile_picture_path`,`status`,`created_at`,`created_by`,`updated_at`,`updated_by`) values 
(1,1,'Zubair Ahmed','Jatoi','xubair.jatoi@gmail.com',NULL,'$2y$10$WC0OT.kyVaHd8HdwJ3thkOj5H.2JamV30D1hoKZ56nXpPXbte5hgO',NULL,'uploads/Top-HD-sad-quotes-for-whatsapp-status-in-hindi-Pics-Images-Download-Free.gif',1,'2022-10-05 06:51:35',1,'2022-10-05 17:29:43',3),
(3,0,'Ali','asd','asdasda@ajsja.dada',NULL,'$2y$10$X9lntzCFtH21njeOnwMhpOKnAMWUXaRzycSqUH2flcEjIxUfHHIBu',NULL,'uploads/Top-HD-sad-quotes-for-whatsapp-status-in-hindi-Pics-Images-Download-Free.gif',1,'2022-10-05 10:25:25',1,'2022-10-06 10:06:10',1),
(8,0,'Zubair Ahmed','asdasd','asda@ajsj11a.dada',NULL,'$2y$10$rwuyTPNebUswc4GnomPEOuDKd5BjijJ2whMompuuCmNdAbqqJw0na',NULL,'uploads/Top-HD-sad-quotes-for-whatsapp-status-in-hindi-Pics-Images-Download-Free.gif',0,'2022-10-05 16:54:08',1,'2022-10-06 10:06:15',1),
(9,0,'Ali','asdasd','asda@ajsja.dada',NULL,'$2y$10$n3uF1YgBvntZpxj2OdAJxeSutNjhsNpksCIOPuRi1tvKWXBufKlJu',NULL,'uploads/Top-HD-sad-quotes-for-whatsapp-status-in-hindi-Pics-Images-Download-Free.gif',1,'2022-10-05 17:24:00',9,'2022-10-05 17:29:54',9),
(10,0,'Ali','asdasd','asda@ajasja.dada',NULL,'$2y$10$IBMRaajys9AHlJ9Mt/p1W.kprgDgIJ.ElZ558j5swPZmfO4hTI6LO',NULL,'uploads/Top-HD-sad-quotes-for-whatsapp-status-in-hindi-Pics-Images-Download-Free.gif',1,'2022-10-06 10:14:39',1,'2022-10-06 10:17:02',1),
(11,1,'asdas','asda','asasdd@adsa.ca',NULL,'$2y$10$WShe452yEKd3yujnupmmjOY923woyIbLO9Jhk6NJcWP54cOSMiv0G',NULL,'uploads/Top-HD-sad-quotes-for-whatsapp-status-in-hindi-Pics-Images-Download-Free.gif',1,'2022-10-06 10:16:12',1,'2022-10-06 10:17:05',1),
(14,0,'ada','asdas','asdasdaa@ajsja.dada',NULL,'$2y$10$xSV2n0ggiGGow8th5WpoDOD0UvN5KIWQpn1qzsq70gJNAMo/UupQ.',NULL,'uploads/Top-HD-sad-quotes-for-whatsapp-status-in-hindi-Pics-Images-Download-Free.gif',1,'2022-10-06 10:26:20',1,'2022-10-06 12:12:25',1),
(18,0,'asda','asda','asdasdasda@ajsja.dada',NULL,'$2y$10$7.E0sqx2qJNdYG6Xak.Jnuz5Gg9dfMY/SAbpjT.uAWE1TFInxLKha',NULL,'uploads/Top-HD-sad-quotes-for-whatsapp-status-in-hindi-Pics-Images-Download-Free.gif',1,'2022-10-06 10:28:15',1,'2022-10-06 12:12:29',1),
(21,0,'asdas','asdas','asdasasdda@ajsja.dada',NULL,'$2y$10$GIz696Qi52OosbaSGGvchekjKX5ygOFs6nV0cb0nVVNp7NJAuHgsS',NULL,'uploads/Top-HD-sad-quotes-for-whatsapp-status-in-hindi-Pics-Images-Download-Free.gif',1,'2022-10-06 10:34:25',1,'2022-10-06 12:12:31',1),
(22,0,'asd','asd','asdasdaas@ajsja.dada',NULL,'$2y$10$81iEs33oUpSa.ZbNrOUj4.R8IiWPG.xBXVay8nGGKa1LftnEatbDO',NULL,'uploads/Top-HD-sad-quotes-for-whatsapp-status-in-hindi-Pics-Images-Download-Free.gif',1,'2022-10-06 10:37:09',1,'2022-10-06 12:12:34',1),
(23,0,'Dahlia','Combs','xywu@mailinator.com',NULL,'$2y$10$NPybeyQIj/tJiYtZou8Jk.xlEjRb87m7Kf3iNIo8YCFlf4KEYcz0G',NULL,'uploads/Top-HD-sad-quotes-for-whatsapp-status-in-hindi-Pics-Images-Download-Free.gif',1,'2022-10-06 10:54:30',1,'2022-10-06 12:12:36',1),
(24,0,'Demetria','Herrera','navywaja@mailinator.com',NULL,'$2y$10$xWX8W0A3mMLS22g0MXaA/eBOzuvBF0anw4b7XDcKgzAdCElLx5UXm',NULL,'uploads/Top-HD-sad-quotes-for-whatsapp-status-in-hindi-Pics-Images-Download-Free.gif',1,'2022-10-06 10:58:43',1,'2022-10-06 12:12:40',1),
(25,0,'Frances','Jefferson','pidi@mailinator.com',NULL,'$2y$10$Tn.d6/WuwwJ/b.arFHpjye97Hzp.cqWVlRKdz86GeC.5MRNTZqn..',NULL,'uploads/Top-HD-sad-quotes-for-whatsapp-status-in-hindi-Pics-Images-Download-Free.gif',1,'2022-10-06 11:14:36',1,'2022-10-06 12:12:50',1),
(26,1,'Griffith','Mejia','vyjyge@mailinator.com',NULL,'$2y$10$/bP9.kjoQ0gxo8oFHYj/L.yOq5/VJljO3E5iftnC9RJfL6G2/Of6O',NULL,'uploads/Top-HD-sad-quotes-for-whatsapp-status-in-hindi-Pics-Images-Download-Free.gif',1,'2022-10-06 12:41:26',1,'2022-10-06 12:49:44',1),
(27,1,'Caryn','Byrd','disy@mailinator.com',NULL,'$2y$10$dhZWM7zQmJwMvn5xKqT/1.9YO4uZfyHZqF9m/YK6/Mi3i7oC4S.Hi',NULL,'uploads/Top-HD-sad-quotes-for-whatsapp-status-in-hindi-Pics-Images-Download-Free.gif',1,'2022-10-06 12:41:54',1,'2022-10-06 12:49:46',1),
(28,0,'Margaret','Summers','xysugoqe@mailinator.com',NULL,'$2y$10$2noHw4zYaz7j8FiSoMy0E.dnG0hZu0EweW9mKzTYFtdml6mPwB8Im',NULL,'uploads/Top-HD-sad-quotes-for-whatsapp-status-in-hindi-Pics-Images-Download-Free.gif',1,'2022-10-06 12:44:05',1,'2022-10-06 12:49:48',1),
(29,0,'Illiana','Wilkins','gedamivem@mailinator.com',NULL,'$2y$10$ZkwEvd/FDqQCvvXKMehJpuvcm8eSUwKKXoCWa0/eY66kzMjKXDpNS',NULL,'uploads/user--1327975250-asdas.gif',1,'2022-10-06 12:44:49',1,'2022-10-06 12:44:49',1),
(30,0,'Todd','Barry','dipoxod@mailinator.com',NULL,'$2y$10$EmYgEpGtAvcBAmx3CvwLB.lZ.4xjxIb.lGzGaKF.j4eAvOy8QexSC',NULL,'uploads/user-picture1022538560-asdas.gif',0,'2022-10-06 12:46:42',1,'2022-10-07 10:11:54',1),
(31,1,'Dawn','Vaughn','getuwetyfu@mailinator.com',NULL,'$2y$10$joOVRI0zVf4PaWLN8KgCq.YezN1q62Zwt0vnyC7TMLKbtbNS1cZki',NULL,'uploads/user-picture-817477374-NGxRwsXlQ4Ga8VhCnDrpFjixSifqIBZRs0aRkz5x.jpg',1,'2022-10-06 12:54:24',1,'2022-10-06 17:43:15',1),
(32,0,'Adele','Williams','tojaleqomo@mailinator.com',NULL,'$2y$10$ypIj1lE.f2RiS30qbQP30eP0bTBwC58wLDTqGRQxBG43sInMnV6Uq',NULL,'uploads/user-picture-736744018-asdas.gif',1,'2022-10-06 12:55:17',1,'2022-10-06 12:55:17',1),
(33,1,'Yael','Dunlap','qebate@mailinator.com',NULL,'$2y$10$n3SGemkfzHXr3Yw5sEsMaelUl2ovQRoBmUxskN/8hyr58AD3oIqEi',NULL,'uploads/user-picture-1611773657-asdas.gif',0,'2022-10-06 12:55:40',1,'2022-10-06 12:55:40',1),
(34,0,'Bree','Woods','sytyf@mailinator.com',NULL,'$2y$10$ZHcWOgIfZjsk.zcShR5YvuyL01CwETt1ADjnjzjSALOfCkBe1Hbn2',NULL,'uploads/user-picture-522455442-asdas.gif',1,'2022-10-06 12:58:14',1,'2022-10-06 12:58:14',1),
(35,0,'Irma','Jarvis','ciluwy@mailinator.com',NULL,'$2y$10$M8hsCElwp58gIoA/TjBQ/.GjZbwsiNO1Wun4xt9rlCQIVAIpd1z0q',NULL,'uploads/user-picture-293061444-asdas.gif',1,'2022-10-06 14:24:23',1,'2022-10-06 14:24:23',1),
(36,1,'Blythe','Oneill','rosidi@mailinator.com',NULL,'$2y$10$6D5Wg3QpyJDjOof5aQDeE.zZeKy5YbAhew7Uhh9/YSpXKipXsrD2m',NULL,'uploads/user-picture-1946859264-HqG1XDdZXHyaQjvZ7vMgC8HuvuRHDwzgDASKDxL3.jpg',1,'2022-10-06 16:01:11',1,'2022-10-06 16:01:11',1),
(37,0,'Suki','Leach','pyxanixury@mailinator.com',NULL,'$2y$10$mtUPS2WbRhk89AhYIH8byeKNR6wcntmVBkiR8ndtWMoiYxhlWWbQS',NULL,'uploads/user-picture-1449459422-AVcgxxnYrWvVeo5Sdn6M4Pm0zH85nmbOCA9CroRR.jpg',1,'2022-10-06 17:03:52',1,'2022-10-06 17:03:52',1),
(38,1,'Whitney','Clark','cedahamy@mailinator.com',NULL,'$2y$10$8fK9j1MYkkl6cMdQkb4US.HuZQBH7ZHklzbMOP3UyodD.ATVPNzwi',NULL,'uploads/user-picture-421526657-gnj5gn4LrOqO8eSOVL7O5sdEjQf5oUWW8TLzSUWz.jpg',0,'2022-10-06 17:04:18',1,'2022-10-07 10:11:58',1),
(40,1,'Christopher','Simpson','fetik@mailinator.com',NULL,'$2y$10$PgzrxrJaYhFHHScQOvydL..IieBMKfglxLqV3XZ.duCWbeTdVWSOO',NULL,'uploads/user-picture-2084492881-GIHETXv9bYW2zvdfyDvSOTFe9VXiutKNwDWD7edS.jpg',0,'2022-10-06 17:04:58',1,'2022-10-06 17:43:36',1),
(41,0,'321321','Clemons','mitofeqydo@mailinator.com',NULL,'$2y$10$XOeLl3ro7hNEPasnV14nouMhDDDnkD5aAWde9sTU5ufWrn87lbsW6',NULL,'uploads/user-picture-1421314157-qwVjZdzitZf0QNrFpB5UKL1ajYvS9rQxQk4kAnT4.jpg',0,'2022-10-06 17:51:35',1,'2022-10-06 17:52:21',1),
(42,1,'Ina','Snyder','waxexyfa@mailinator.com',NULL,'$2y$10$1MVJjY01gcmButYWkwv80.mf5rY4NZasfoS2WW3cKd2Lj/Nowonta',NULL,'uploads/user-picture-670008012-G2kAPWuZE86dsc6G8euVgTJ6L7nK33olBRE6zuoF.jpg',0,'2022-10-07 09:41:06',1,'2022-10-07 12:52:43',1),
(43,0,'Uma','Cantu','xilevozavu@mailinator.com',NULL,'$2y$10$qtcK7eIKx3iBARZHii.wJe4RxLE.inKayqpYCQ3PtSYZAM3vZe4tm',NULL,'uploads/user-picture-1215746556-tgbfg7fTRlVTjsyH527pbsBA5g7HYBvhO1LW6EJf.jpg',1,'2022-10-07 10:24:12',1,'2022-10-07 10:55:43',1),
(44,1,'Mollie','Wooten','bizuned@mailinator.com',NULL,'$2y$10$/vEud1js8QLiYMQ..NOArO0nw00Jd04HOtwUnb3Ma2v2MlxssM2MS',NULL,'uploads/user-picture-1168682310-SyMQusaSagL2qRpVkbYeKh1JVS7k5YiFK6tqyVvq.jpg',1,'2022-10-07 12:52:51',1,'2022-10-07 12:52:51',1),
(45,1,'Raphael','Ingram','lehonijo@mailinator.com',NULL,'$2y$10$xSoNwlXGmvWNEh5YlNjn1ekZppMKghvOKY7J/1eBqGj7223Z.RCk2',NULL,'uploads/user-picture-251100434-kreyRoG8xifllVjbBCgTTnEsyvHugc8EVB9X4RKV.jpg',1,'2022-10-12 10:03:22',1,'2022-10-12 10:03:22',1),
(46,1,'Cora','Hull','fegov@mailinator.com',NULL,'$2y$10$bjOiGbSnukdQina0uHg.O.SSEEUdSJyxZL8wfIjwboa7N1GC49hKS',NULL,'uploads/user-picture-1450773686-h77OriwKEbzBcn6dSiqsQj03ZAJoKVZjLhnjzG7O.gif',1,'2022-10-12 10:04:14',1,'2022-10-12 10:04:14',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
