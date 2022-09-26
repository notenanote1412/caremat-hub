-- Adminer 4.8.1 MySQL 5.7.33 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `clinics`;
CREATE TABLE `clinics` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `clinic_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clinic_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clinic_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clinic_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clinic_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `booking_time_slot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clinic_map` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clinic_open_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `clinics` (`id`, `clinic_name`, `clinic_description`, `clinic_logo`, `clinic_phone`, `clinic_address`, `booking_time_slot`, `clinic_map`, `clinic_open_date`, `created_at`, `updated_at`) VALUES
(1,	'ศูนย์สุขภาพแคร์แมท เชียงใหม่',	'ลดเวลาในคลินิกจองให้ปรึกษาออนไลน์กับแคร์แมท',	NULL,	'061-6812164',	'คลินิกเทคนิคการแพทย์แคร์แมท เชียงใหม่,  257/102-103 หมู่บ้านดาวดึงส์ ซอย 2 ถ.สุเทพ ต.สุเทพ จ.เชียงใหม่ 50200',	'30',	'http://bit.ly/2HtH4Xf',	NULL,	NULL,	NULL);

-- 2022-09-26 08:42:04
