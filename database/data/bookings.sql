-- Adminer 4.8.1 MySQL 5.7.33 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `bookings`;
CREATE TABLE `bookings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `services` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `booking_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `booking_time_start` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `booking_time_end` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `booking_slot` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `bookings` (`id`, `services`, `reference`, `booking_date`, `booking_time_start`, `booking_time_end`, `booking_slot`, `name`, `phone`, `email`, `status`, `created_at`, `updated_at`) VALUES
(10,	'[\"HIV\",\"PrEP\",\"HepB\",\"HepC\"]',	'HXgsh2',	'2022-09-20',	'16:30',	NULL,	'30',	'Note Overkill',	'0622652994',	'notenanote0121@gmail.com',	NULL,	'2022-09-20 16:03:37',	'2022-09-20 16:03:42'),
(11,	'[\"HIV\",\"PrEP\",\"HepB\",\"HepC\"]',	'iPadFE',	'2022-09-20',	'16:30',	NULL,	'30',	'Note Overkill',	'0622652994',	'notenanote0121@gmail.com',	NULL,	'2022-09-20 16:04:24',	'2022-09-20 16:04:33'),
(12,	'[\"HIV\",\"PrEP\",\"HepB\",\"HepC\"]',	'VxayAH',	'2022-09-21',	'13:00',	NULL,	'30',	'Note Overkill',	'0622652994',	'notenanote0121@gmail.com',	NULL,	'2022-09-20 16:07:42',	'2022-09-20 16:07:51'),
(14,	'[\"HIV\",\"PrEP\",\"HepB\",\"HepC\"]',	'3KJyFg',	'2022-09-22',	'09:00',	NULL,	'30',	'Note Overkill',	'0622652994',	'notenanote0121@gmail.com',	NULL,	'2022-09-20 16:19:03',	'2022-09-20 16:19:10'),
(15,	'[\"HIV\",\"PrEP\",\"HepB\",\"HepC\"]',	'6pBUog',	'2022-09-21',	'13:00',	NULL,	'30',	'Note Overkill',	'0622652994',	'notenanote0121@gmail.com',	NULL,	'2022-09-20 16:21:16',	'2022-09-20 16:21:21'),
(22,	'[\"HIV\",\"PrEP\",\"Hormones\",\"HepB\"]',	'5WJWQA',	'2022-09-21',	'13:00',	NULL,	'30',	'Note Overkill',	'0622652994',	'notenanote0121@gmail.com',	NULL,	'2022-09-21 11:09:17',	'2022-09-21 11:09:24'),
(27,	'[\"HIV\",\"PrEP\"]',	'PBPxbC',	'2022-09-21',	'13:00',	NULL,	'30',	'Note Overkill',	'0622652994',	'notenanote0121@gmail.com',	NULL,	'2022-09-21 11:55:05',	'2022-09-21 11:55:51'),
(28,	'[\"HIV\",\"PrEP\",\"Hormones\"]',	'Do03Qf',	'2022-09-21',	'13:00',	NULL,	'30',	'Note Overkill',	'0622652994',	'notenanote0121@gmail.com',	NULL,	'2022-09-21 11:58:25',	'2022-09-21 11:58:37'),
(29,	'[\"HIV\",\"PrEP\",\"Hormones\"]',	'DqT2ra',	'2022-09-29',	'14:30',	NULL,	'30',	'Note Overkill',	'0622652994',	'notenanote0121@gmail.com',	NULL,	'2022-09-21 11:59:30',	'2022-09-21 11:59:38'),
(32,	'[\"HIV\",\"PrEP\"]',	'xwgtVx',	'2022-09-21',	'14:30',	NULL,	'30',	'Note Overkill',	'0622652994',	'notenanote0121@gmail.com',	NULL,	'2022-09-21 14:16:00',	'2022-09-21 14:16:08'),
(43,	'[\"HIV\",\"PrEP\"]',	'Sg1OHZ',	'2022-09-21',	'14:30',	NULL,	'30',	'Note Overkill',	'0622652994',	'notenanote0121@gmail.com',	NULL,	'2022-09-21 14:28:24',	'2022-09-21 14:30:35'),
(44,	'[\"HIV\",\"PrEP\"]',	'NscPPt',	'2022-09-21',	'15:00',	NULL,	'30',	'Note Overkill',	'0622652994',	'notenanote0121@gmail.com',	NULL,	'2022-09-21 14:33:44',	'2022-09-21 14:36:20'),
(45,	'[\"HIV\"]',	'Ur74Fm',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2022-09-21 16:51:40',	NULL);

-- 2022-09-22 04:40:23
