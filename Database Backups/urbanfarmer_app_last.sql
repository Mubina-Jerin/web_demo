-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2020 at 07:35 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `urbanfarmer_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `blog_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_introduction` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_conclusion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_body` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_title`, `blog_introduction`, `blog_conclusion`, `blog_body`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'sa', 'sasa', 'sasas', 'assas', 4, '2020-11-04 05:22:28', '2020-11-04 05:22:28'),
(2, 'sa', 'sasa', 'sasas', 'assas', 4, '2020-11-04 05:24:42', '2020-11-04 05:24:42'),
(3, 'sa', 'sasa', 'sasas', 'assas', 4, '2020-11-04 05:26:22', '2020-11-04 05:26:22');

-- --------------------------------------------------------

--
-- Table structure for table `cultivations`
--

CREATE TABLE `cultivations` (
  `id` int(10) UNSIGNED NOT NULL,
  `plant_id` int(11) NOT NULL,
  `cultivation_id` int(11) NOT NULL,
  `month_to_start` date NOT NULL,
  `month_to_end` date NOT NULL,
  `prefered_soil` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `steps_of_cultivation` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bloger_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `user_id`, `first_name`, `last_name`, `address`, `phone_number`, `bloger_id`, `created_at`, `updated_at`) VALUES
(23, 5, 'dfa', '', '', '12312', 5, '2020-11-04 04:08:52', '2020-11-04 04:08:52'),
(24, 5, 'dfa', '', '', '12312', 5, '2020-11-04 04:15:28', '2020-11-04 04:15:28'),
(25, 5, 'dfa', '', '', '12312', 5, '2020-11-04 04:16:27', '2020-11-04 04:16:27'),
(26, 5, 'dfa', '', '', '12312', 5, '2020-11-04 04:21:32', '2020-11-04 04:21:32'),
(27, 4, 'Jerin', '', '', '123456', 4, '2020-11-04 04:23:23', '2020-11-04 04:23:23'),
(28, 4, 'Jerin', '', '', '123456', 4, '2020-11-04 04:24:23', '2020-11-04 04:24:23'),
(29, 4, 'Jerin', '', '', '123456', 4, '2020-11-04 04:39:28', '2020-11-04 04:39:28'),
(30, 4, 'Jerin', '', '', '123456', 4, '2020-11-04 04:40:30', '2020-11-04 04:40:30'),
(31, 4, 'Jerin', '', '', '123456', 4, '2020-11-04 04:42:29', '2020-11-04 04:42:29'),
(32, 4, 'Jerin', '', '', '123456', 4, '2020-11-04 04:42:54', '2020-11-04 04:42:54'),
(33, 4, 'Jerin', '', '', '123456', 4, '2020-11-04 04:53:01', '2020-11-04 04:53:01');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(10) UNSIGNED NOT NULL,
  `feature_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `item_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_cost` double(15,3) NOT NULL,
  `num_of_unit` int(11) NOT NULL,
  `material_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `id` int(10) UNSIGNED NOT NULL,
  `loginID` int(11) NOT NULL,
  `passworrd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` int(10) UNSIGNED NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_id` int(11) NOT NULL,
  `inv_id` int(11) NOT NULL,
  `plant_id` int(11) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `display_info` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `display_name`, `owner_id`, `inv_id`, `plant_id`, `unit_price`, `display_info`, `created_at`, `updated_at`) VALUES
(1, '10 piece Amer Chara', 3, 2, 2, 50, 'asdada', '2020-11-03 22:39:12', '2020-11-03 22:39:12'),
(2, '10 piece Amer Chara', 3, 2, 4, 50, 'sasasasasa', '2020-11-03 22:42:37', '2020-11-03 22:42:37'),
(3, '10 piece Amer Chara', 3, 2, 6, 50, 'ddsdsds', '2020-11-03 23:33:24', '2020-11-03 23:33:24');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_03_12_102649_create_features_table', 1),
(5, '2020_03_12_102808_create_roles_table', 1),
(6, '2020_03_12_103243_create_customers_table', 1),
(7, '2020_03_12_103401_create_providers_table', 1),
(8, '2020_03_12_103430_create_logins_table', 1),
(9, '2020_03_13_125943_create_blogs_table', 1),
(10, '2020_03_13_130150_create_cultivations_table', 1),
(11, '2020_03_13_131002_create_items_table', 1),
(12, '2020_03_13_131338_create_materials_table', 1),
(13, '2020_03_13_131356_create_nurseries_table', 1),
(14, '2020_03_13_131429_create_nursery_catelogs_table', 1),
(15, '2020_03_13_131455_create_orders_table', 1),
(16, '2020_03_13_131520_create_plant_infos_table', 1),
(17, '2020_03_13_131545_create_resources_table', 1),
(18, '2020_03_13_131557_create_reviews_table', 1),
(19, '2020_03_13_131626_create_trackings_table', 1),
(20, '2020_04_01_144557_add_extra_field_to_users_table', 1),
(21, '2020_04_08_072118_add_user_id_to_providers', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nurseries`
--

CREATE TABLE `nurseries` (
  `id` int(10) UNSIGNED NOT NULL,
  `nursery_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nurseries`
--

INSERT INTO `nurseries` (`id`, `nursery_name`, `description`, `address`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Chader Maya', 'Sajer Maya is a good nursery site with window positioning', '', 2, '2020-11-03 06:45:37', '2020-11-03 06:45:37'),
(2, 'My Banshree New', 'Its a very popular site to grow plants', '', 3, '2020-11-03 07:19:02', '2020-11-03 07:19:02');

-- --------------------------------------------------------

--
-- Table structure for table `nursery_catelogs`
--

CREATE TABLE `nursery_catelogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `nursery_id` int(11) NOT NULL,
  `material_id` int(11) NOT NULL,
  `plant_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nursery_inventories`
--

CREATE TABLE `nursery_inventories` (
  `id` int(11) NOT NULL,
  `nursery_id` int(11) NOT NULL,
  `inv_name` varchar(100) NOT NULL,
  `inv_type` enum('Plant_inv','Material_inv','Soil_inv','Pesticide_inv','Seed_inv') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nursery_inventories`
--

INSERT INTO `nursery_inventories` (`id`, `nursery_id`, `inv_name`, `inv_type`, `created_at`, `updated_at`) VALUES
(1, 1, 'fruit Plant list', 'Plant_inv', NULL, NULL),
(2, 2, 'fruit Plant list', 'Plant_inv', NULL, NULL),
(3, 2, 'fruit Plant list', 'Plant_inv', NULL, NULL),
(4, 2, 'fruit Plant list', 'Plant_inv', NULL, NULL),
(5, 2, 'fruit Plant list', 'Plant_inv', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `sender_id` int(11) NOT NULL,
  `recipent_id` int(11) NOT NULL,
  `tracking_id` int(11) NOT NULL,
  `order_summary` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_amount` double(15,3) NOT NULL,
  `order_status` enum('placed','processing','delivered') COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_phone_number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `sender_id`, `recipent_id`, `tracking_id`, `order_summary`, `total_amount`, `order_status`, `provider_phone_number`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 311, '10 piece Amer CharaAnd The Amount is23', 57500.000, 'placed', 0, NULL, NULL),
(2, 1, 3, 312, '10 piece Amer CharaAnd The Amount is3', 7500.000, 'placed', 0, NULL, NULL),
(3, 1, 3, 313, '10 piece Amer Chara And The Amount is 5', 12500.000, 'placed', 12345, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plant_infos`
--

CREATE TABLE `plant_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `inv_id` int(11) NOT NULL,
  `plant_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plant_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prefered_season` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plant_info` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plant_infos`
--

INSERT INTO `plant_infos` (`id`, `inv_id`, `plant_name`, `plant_type`, `prefered_season`, `plant_info`, `created_at`, `updated_at`) VALUES
(1, 2, 'sornlolota', 'fruit', 'spring', 'Wen osom zmdr kadr skdeer', '2020-11-03 07:40:36', '2020-11-03 07:40:36'),
(2, 2, 'sornlolota', 'fruit', 'spring', 'saada', '2020-11-03 07:55:00', '2020-11-03 07:55:00'),
(3, 2, 'sornlolota', 'fruit', 'sxs', 'sxsxdd', '2020-11-03 07:59:00', '2020-11-03 07:59:00'),
(4, 2, 'sxs', 'fruit', 'sx', 'sxs', '2020-11-03 08:11:05', '2020-11-03 08:11:05'),
(5, 2, 'sxs', 'fruit', 'sx', 'sxs', '2020-11-03 08:13:03', '2020-11-03 08:13:03'),
(6, 2, 'sds', 'fruit', 'sdsd', 'dsdsd', '2020-11-03 10:49:14', '2020-11-03 10:49:14');

-- --------------------------------------------------------

--
-- Table structure for table `providers`
--

CREATE TABLE `providers` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_broker` tinyint(1) NOT NULL,
  `is_sourcer` tinyint(1) NOT NULL,
  `bloger_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `phone_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `providers`
--

INSERT INTO `providers` (`id`, `first_name`, `last_name`, `address`, `is_broker`, `is_sourcer`, `bloger_id`, `created_at`, `updated_at`, `user_id`, `phone_number`) VALUES
(1, 'gemini', '', '', 0, 0, 2, '2020-11-03 06:43:57', '2020-11-03 06:43:57', 2, 19242),
(2, 'jean', '', '', 0, 0, 3, '2020-11-03 07:18:13', '2020-11-03 07:18:13', 3, 12345),
(3, 'jean', '', '', 0, 0, 3, '2020-11-03 07:54:24', '2020-11-03 07:54:24', 3, 12345),
(4, 'jean', '', '', 0, 0, 3, '2020-11-03 10:19:20', '2020-11-03 10:19:20', 3, 12345),
(5, 'jean', '', '', 0, 0, 3, '2020-11-03 11:08:46', '2020-11-03 11:08:46', 3, 12345),
(6, 'jean', '', '', 0, 0, 3, '2020-11-03 11:20:25', '2020-11-03 11:20:25', 3, 12345),
(7, 'jean', '', '', 0, 0, 3, '2020-11-03 11:23:11', '2020-11-03 11:23:11', 3, 12345),
(8, 'jean', '', '', 0, 0, 3, '2020-11-03 18:16:35', '2020-11-03 18:16:35', 3, 12345);

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_image_id` int(11) DEFAULT 1,
  `provider_image_id` int(11) DEFAULT 1,
  `plant_image_id` int(11) DEFAULT 1,
  `soil_image_id` int(11) DEFAULT 1,
  `seed_image_id` int(11) DEFAULT 1,
  `pesticide_image_id` int(11) DEFAULT 1,
  `material_image_id` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`id`, `img`, `caption`, `customer_image_id`, `provider_image_id`, `plant_image_id`, `soil_image_id`, `seed_image_id`, `pesticide_image_id`, `material_image_id`, `created_at`, `updated_at`) VALUES
(6, 'images/Nus_inv_img/2/3/4IYQeuZhzjsDmH4VbbQKqV5uTh2zvpU9BsJM2c6r.jpeg', 'The Plant name:sornlolota and the type is fruit', 1, 1, 3, 1, 1, 1, 1, '2020-11-03 07:59:00', '2020-11-03 07:59:00'),
(7, 'Nus_inv_img/2/5/uduhFh7oooyzjF3Ig85zgWJiFjTrCV72kIZPX1pK.jpeg', 'The Plant name:sxs and the type is fruit', 1, 1, 5, 1, 1, 1, 1, '2020-11-03 08:13:03', '2020-11-03 08:13:03'),
(8, 'Nus_inv_img/2/6/cmuVKNmr0tX3U9Rjxv8onyUz51RBRpxVBYxr8zFL.jpeg', 'The Plant name:sds and the type is fruit', 1, 1, 6, 1, 1, 1, 1, '2020-11-03 10:49:14', '2020-11-03 10:49:14'),
(9, 'Nus_inv_img/2/6/YmXrxbVOfcflS8uaLc8Qnil6YwTLj7fPwriMRy4t.jpeg', 'The Plant name:sds and the type is fruit', 1, 1, 6, 1, 1, 1, 1, '2020-11-03 10:49:14', '2020-11-03 10:49:14');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` double(3,1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trackings`
--

CREATE TABLE `trackings` (
  `id` int(10) UNSIGNED NOT NULL,
  `sender_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recipent_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_status` enum('placed','processing','dispatched','delivered') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` enum('customer','provider','broker','admin') COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `phone_number`, `user_type`, `role_id`) VALUES
(1, 'Theresa', 'tesresa@gmail.com', NULL, '$2y$10$AAkDwAwLSLCMef8Kv/brXePGOYaRh.2afCDwZQGMHdBrN01Nmmxo6', NULL, '2020-11-03 06:39:41', '2020-11-03 06:39:41', '01677727429', 'customer', NULL),
(2, 'gemini', 'gemini@gmail.com', NULL, '$2y$10$QtT1nz8UPGYy5kWg5VAukelfXAd3Pmb615H.egcz8MsbsqX.4o5.6', NULL, '2020-11-03 06:42:49', '2020-11-03 06:42:49', '019242', 'provider', NULL),
(3, 'jean', 'jean@gmail.com', NULL, '$2y$10$fWEXA7jRWRgquLEUOae2Xu5UQ.FG13R5ioxXisBe4Ec/ZqOlsjNYq', NULL, '2020-11-03 07:18:13', '2020-11-03 07:18:13', '12345', 'provider', NULL),
(4, 'Jerin', 'jer@gmail.com', NULL, '$2y$10$TqzoX0e4bSbU8baiHVGAv.c8uBRw3Bu7Ymw1R1ZYjGW401TLU7m6G', NULL, '2020-11-04 03:34:26', '2020-11-04 03:34:26', '123456', 'customer', NULL),
(5, 'dfa', 'as@gmail.com', NULL, '$2y$10$u3dLRTu5k2vTipyTkml4J.Hnsppz6RYFQXFBeT57TpT45RxnGJef.', NULL, '2020-11-04 04:08:52', '2020-11-04 04:08:52', '12312', 'customer', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cultivations`
--
ALTER TABLE `cultivations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nurseries`
--
ALTER TABLE `nurseries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nursery_catelogs`
--
ALTER TABLE `nursery_catelogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nursery_inventories`
--
ALTER TABLE `nursery_inventories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_phone_number_index` (`phone_number`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plant_infos`
--
ALTER TABLE `plant_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `providers`
--
ALTER TABLE `providers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trackings`
--
ALTER TABLE `trackings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_number_unique` (`phone_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cultivations`
--
ALTER TABLE `cultivations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `nurseries`
--
ALTER TABLE `nurseries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nursery_catelogs`
--
ALTER TABLE `nursery_catelogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nursery_inventories`
--
ALTER TABLE `nursery_inventories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plant_infos`
--
ALTER TABLE `plant_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `providers`
--
ALTER TABLE `providers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trackings`
--
ALTER TABLE `trackings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
