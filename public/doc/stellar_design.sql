-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 22, 2022 at 05:01 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stellar_design`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(125) DEFAULT NULL,
  `email` varchar(125) DEFAULT NULL,
  `mobile` varchar(125) NOT NULL,
  `subject` varchar(125) DEFAULT NULL,
  `message` varchar(125) DEFAULT NULL,
  `active` varchar(1) NOT NULL DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `home_seos`
--

DROP TABLE IF EXISTS `home_seos`;
CREATE TABLE IF NOT EXISTS `home_seos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `keywords` text NOT NULL,
  `url` text NOT NULL,
  `image_path` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `home_seos`
--

INSERT INTO `home_seos` (`id`, `title`, `description`, `keywords`, `url`, `image_path`, `created_at`, `updated_at`) VALUES
(1, 'Stellar Design', 'Stellar Designs Ltd is a leading apparel sourcing company based in Dhaka,\r\nBangladesh. Over the years it has culminated notable experience in producing\r\nready-made garments consisting of both knit and woven wear to renowned clothing\r\nbrands and importers in the US, Canadian and European markets.', 'Stellar Design, Web, Designs, Dhaka, Apparel, Zamil', 'https://www.stellardesignsltdbd.com/', 'storage/Banner.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(125) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_user_manager_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2021_09_03_052131_create_samples_table', 1),
(4, '2021_09_14_133026_create_permission_tables', 1),
(5, '2022_06_09_183139_create_portfolios_table', 2),
(13, '2022_06_09_184712_create_projects_table', 6),
(7, '2022_06_10_110105_create_contact_us_table', 4),
(9, '2022_06_10_110601_create_visitors_table', 5),
(15, '2022_06_16_043325_create_home_seos_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(125) NOT NULL,
  `guard_name` varchar(125) NOT NULL,
  `active` varchar(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Sample', 'web', 'Y', '2022-05-25 10:01:48', '2022-05-25 10:01:48'),
(2, 'Permission Manager', 'web', 'Y', '2022-05-25 10:01:48', '2022-05-25 10:01:48'),
(3, 'User Manager', 'web', 'Y', '2022-05-25 10:01:48', '2022-05-25 10:01:48'),
(4, 'Portfolio', 'web', 'Y', '2022-06-09 12:29:50', '2022-06-09 12:29:50'),
(5, 'Project', 'web', 'Y', '2022-06-10 09:40:53', '2022-06-10 09:40:53'),
(6, 'ContactUs', 'web', 'Y', '2022-06-12 09:25:19', '2022-06-12 09:25:19');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(125) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(125) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

DROP TABLE IF EXISTS `portfolios`;
CREATE TABLE IF NOT EXISTS `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(125) NOT NULL,
  `active` varchar(1) NOT NULL DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `name`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Web', 'Y', '2022-06-09 12:42:22', '2022-06-09 12:42:22'),
(2, 'Mobile', 'Y', '2022-06-09 12:42:57', '2022-06-09 12:42:57'),
(3, 'Design', 'Y', '2022-06-09 12:43:11', '2022-06-09 12:43:11');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `portfolio_id` varchar(125) NOT NULL,
  `name` varchar(125) DEFAULT NULL,
  `project_url_1` varchar(125) DEFAULT NULL,
  `project_url_2` varchar(125) DEFAULT NULL,
  `image_path` varchar(125) NOT NULL,
  `active` varchar(1) NOT NULL DEFAULT 'Y',
  `created_by` varchar(125) NOT NULL,
  `updated_by` varchar(125) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `portfolio_id`, `name`, `project_url_1`, `project_url_2`, `image_path`, `active`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '2', 'Al Quran Bangla Application', 'https://play.google.com/store/apps/details?id=com.fzrtechnology.al_quran_bangla_translation', NULL, 'uploads/projects/62a36a2020573_8a9de39d7843519863637221b906aa00_1654876704.png', 'Y', '1', NULL, '2022-06-10 09:58:24', '2022-06-10 09:58:24'),
(2, '2', 'Ramadan Essentials App', 'https://play.google.com/store/apps/details?id=com.fzrtechnology.ramadan_essentials', NULL, 'uploads/projects/62a36abd7543a_b6bebc20bc208143a3671b389e54255a_1654876861.png', 'Y', '1', NULL, '2022-06-10 10:01:01', '2022-06-10 10:01:01'),
(3, '1', 'Inventory Website', NULL, NULL, 'uploads/projects/62a36f693ffe9_7198715cded9d59fe1e2aecb8e8c95fb_1654878057.png', 'Y', '1', NULL, '2022-06-10 10:20:57', '2022-06-10 10:20:57'),
(4, '1', 'Ecommerce Website', NULL, NULL, 'uploads/projects/62a375f927d1c_3f3889c7395efd8c46d4b62f121ffd3f_1654879737.jpg', 'Y', '1', '1', '2022-06-10 10:37:34', '2022-06-10 10:48:57'),
(5, '1', 'School Managerment Website', NULL, NULL, 'uploads/projects/62a37722c71ba_309ffed71e726eb63d08cf82a3408f14_1654880034.png', 'Y', '1', NULL, '2022-06-10 10:53:54', '2022-06-10 10:53:54'),
(6, '1', 'SISLAM Cars Website', 'https://www.sislamcars.com.bd/', NULL, 'uploads/projects/62a377d5b6dd3_f67580b870810893f83820f71a6f9ceb_1654880213.png', 'N', '1', '1', '2022-06-10 10:56:53', '2022-06-10 11:08:34'),
(7, '3', 'Erica Builders Logo', NULL, NULL, 'uploads/projects/62a378f4c1a65_1ca9272d3bd564ed1c225287f2aef0e7_1654880500.png', 'Y', '1', NULL, '2022-06-10 11:01:40', '2022-06-10 11:01:40');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(125) NOT NULL,
  `guard_name` varchar(125) NOT NULL,
  `active` varchar(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `samples`
--

DROP TABLE IF EXISTS `samples`;
CREATE TABLE IF NOT EXISTS `samples` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title1` varchar(125) NOT NULL,
  `title2` varchar(125) NOT NULL,
  `description` varchar(125) DEFAULT NULL,
  `date` varchar(125) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1',
  `created_by` varchar(125) NOT NULL,
  `updated_by` varchar(125) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_name` varchar(125) NOT NULL,
  `designation` varchar(125) DEFAULT NULL,
  `email` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `active` varchar(1) NOT NULL DEFAULT 'Y',
  `create_by` varchar(125) DEFAULT NULL,
  `update_by` varchar(125) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `designation`, `email`, `password`, `active`, `create_by`, `update_by`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'Admin', 'zamil@gmail.com', '$2y$10$K4BjjUMiuPSbe2vUjDwSTeV2beu2RjLYqeta7W610ss7CGrPF9/8q', 'Y', NULL, '1', '2022-05-25 10:01:48', '2022-06-09 12:40:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_has_permissions`
--

DROP TABLE IF EXISTS `user_has_permissions`;
CREATE TABLE IF NOT EXISTS `user_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(125) NOT NULL,
  `id` varchar(125) NOT NULL,
  PRIMARY KEY (`permission_id`,`id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`id`,`model_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_has_permissions`
--

INSERT INTO `user_has_permissions` (`permission_id`, `model_type`, `id`) VALUES
(2, 'App\\Models\\User', '1'),
(3, 'App\\Models\\User', '1'),
(4, 'App\\Models\\User', '1'),
(5, 'App\\Models\\User', '1'),
(6, 'App\\Models\\User', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user_has_roles`
--

DROP TABLE IF EXISTS `user_has_roles`;
CREATE TABLE IF NOT EXISTS `user_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(125) NOT NULL,
  `id` varchar(125) NOT NULL,
  PRIMARY KEY (`role_id`,`id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`id`,`model_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

DROP TABLE IF EXISTS `visitors`;
CREATE TABLE IF NOT EXISTS `visitors` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text,
  `session` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `ip_address`, `user_agent`, `session`, `created_at`, `updated_at`) VALUES
(1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', NULL, '2022-06-15 23:13:38', '2022-11-04 06:34:47');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
