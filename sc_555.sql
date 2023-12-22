-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2023 at 04:44 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sc_555`
--

-- --------------------------------------------------------

--
-- Table structure for table `buttons`
--

CREATE TABLE `buttons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buttons`
--

INSERT INTO `buttons` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'water moter', '0', '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
(2, 'nutrition pump 1', '0', '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
(3, 'nutrition pump 2 ', '0', '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
(4, 'fan', '0', '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
(5, 'Growing Light ', '0', '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
(6, 'Normal Light', '0', '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
(7, 'PH control Morter', '0', '2023-10-15 01:53:47', '2023-10-15 01:53:47');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `cart_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_id` varchar(4) DEFAULT NULL,
  `item_id` varchar(4) DEFAULT NULL,
  `quantity` double(6,2) NOT NULL,
  `amount` double(6,2) NOT NULL,
  `feedback` text DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` varchar(4) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `price` double(6,2) NOT NULL,
  `discount` double(6,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `name`, `description`, `image`, `price`, `discount`, `created_at`, `updated_at`) VALUES
('I001', 'Apple Mint seeds', '200 seeds Germination rate > 90%', 'webSiteImages\\store\\I001.png', 775.00, 11.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I002', 'Arugala (rocket) seeds', '100 seeds Germination rate > 90%', 'webSiteImages\\store\\I002.png', 350.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I003', 'Arugala Microgreen', 'Spicy, nutty flavor. Purple stems and dark-green leaves', 'webSiteImages\\store\\I003.png', 1300.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I004', 'Basil seeds - Basil Super Sweet', '50 seeds Germination rate > 90%', 'webSiteImages\\store\\I004.png', 390.00, 10.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I005', 'Bok Choy seeds', '50 seeds Germination rate > 85%', 'webSiteImages\\store\\I005.png', 350.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I006', 'Broccoli “Miranda” seeds ', '25 seeds Germination rate > 80% ', 'webSiteImages\\store\\I006.png', 450.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I007', 'Broccoli Microgreen', '100 seeds Germination rate > 80% ', 'webSiteImages\\store\\I007.png', 2500.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I008', 'Broccoli seeds', '30 seeds Germination rate > 80% ', 'webSiteImages\\store\\I008.png', 450.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I009', 'Butter head lettuce “red” seeds', '100 seeds Germination rate > 85% ', 'webSiteImages\\store\\I009.png', 400.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I010', 'Butter head Lettuce Hodar seeds', '100 seeds Germination rate > 92% ', 'webSiteImages\\store\\I010.png', 350.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I011', 'Butter head lettuce Sanguine Ameliore variety', '100 seeds Germination rate > 80%', 'webSiteImages\\store\\I011.png', 400.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I012', 'Cauliflower Seeds', '50 seeds Germination rate > 85% ', 'webSiteImages\\store\\I012.png', 350.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I013', 'Cherry tomato orange seeds', '10 seeds Germination rate > 90% ', 'webSiteImages\\store\\I013.png', 400.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I014', 'Cherry Tomato Rosa seeds', '10 seeds Germination rate > 80% ', 'webSiteImages\\store\\I014.png', 500.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I015', 'Cherry Tomato snow white seeds', '10 seeds Germination rate > 90% ', 'webSiteImages\\store\\I015.png', 420.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I016', 'Chives - Garlic Chives', '50 seeds Germination rate > 75% ', 'webSiteImages\\store\\I016.png', 300.00, 14.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I017', 'Dill seeds', '100 seeds Germination rate > 80% ', 'webSiteImages\\store\\I017.png', 350.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I018', 'Dwarf Cherry Tomato Bajaja seeds', '10 seeds Germination rate > 80% ', 'webSiteImages\\store\\I018.png', 500.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I019', 'Garden Thyme seeds', '50 seeds Germination rate > 80% ', 'webSiteImages\\store\\I019.png', 550.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I020', 'Jalapeno Pepper seeds', '10 seeds Germination rate > 85% ', 'webSiteImages\\store\\I020.png', 500.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I021', 'Kale “Curly” seeds', '50 seeds Germination rate > 90% ', 'webSiteImages\\store\\I021.png', 450.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I022', 'Kale Curly Scarlet seeds', '40 seeds Germination rate > 90% ', 'webSiteImages\\store\\I022.png', 450.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I023', 'Lavender seeds', '50 seeds Germination rate > 85% ', 'webSiteImages\\store\\I023.png', 450.00, 10.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I024', 'Lemon Balm seeds', '50 seeds Germination rate > 85% ', 'webSiteImages\\store\\I024.png', 400.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I025', 'Lettuce Lollo Bionda seeds', '100 seeds Germination rate > 85% ', 'webSiteImages\\store\\I025.png', 360.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I026', 'Lettuce Lollo Rosso Crimson seeds', '100 seeds Germination rate > 85%', 'webSiteImages\\store\\I026.png', 350.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I027', 'Lettuce Lollo rosso seeds', '100 seeds Germination rate > 85%', 'webSiteImages\\store\\I027.png', 350.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I028', 'Microgreen Red Cabbage', '1000 seeds\r\n            Germination rate > 80%\r\n            ', 'webSiteImages\\store\\I028.png', 1750.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I029', 'Mizuna (Japanese Mustard)', '50 seeds\r\n            Germination rate > 85%\r\n            ', 'webSiteImages\\store\\I029.png', 400.00, 20.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I030', 'Mizuna Mix Microgreen', '21000 seeds\r\n            Germination rate > 80%\r\n            ', 'webSiteImages\\store\\I030.png', 1000.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I031', 'Oak Leaf Lettuce “Red” seeds', '100 seeds\r\n            Germination rate > 95%\r\n            ', 'webSiteImages\\store\\I031.png', 350.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I032', 'Oregano seeds', '100 seeds\r\n            Germination rate > 85%\r\n            ', 'webSiteImages\\store\\I032.png', 375.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I033', 'Parsley triples', '100 seeds\r\n            Germination rate > 90%\r\n            ', 'webSiteImages\\store\\I033.png', 375.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I034', 'Petunia Blue Beder seeds', '100 seeds\r\n            Germination rate > 80%\r\n            ', 'webSiteImages\\store\\I034.png', 450.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I035', 'Petunia mix seeds', '100 seeds\r\n            Germination rate > 80%\r\n            ', 'webSiteImages\\store\\I035.png', 550.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I036', 'Petunia Snow Ball seeds', '100 seeds\r\n            Germination rate > 80%\r\n            ', 'webSiteImages\\store\\I036.png', 450.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I037', 'Purple Basil seeds', '50 seeds\r\n            Germination rate > 95%\r\n            ', 'webSiteImages\\store\\I037.png', 350.00, 8.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I038', 'Red Basil Microgreen', '1000 seeds\r\n            Germination rate > 80%\r\n            ', 'webSiteImages\\store\\I038.png', 1300.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I039', 'Red Cabbage seeds', '50 seeds\r\n            Germination rate > 80%\r\n            ', 'webSiteImages\\store\\I039.png', 320.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I040', 'Romaine Lettuce (Cos Lettuce) seeds', '100 seeds\r\n            Germination rate > 90%\r\n            ', 'webSiteImages\\store\\I040.png', 350.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I041', 'Rosemary seeds', '10 seeds\r\n            Germination rate > 80%\r\n            ', 'webSiteImages\\store\\I041.png', 500.00, 9.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I042', 'Summer Savory Oster seeds', '100 seeds\r\n            Germination rate > 85%\r\n            ', 'webSiteImages\\store\\I042.png', 400.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I043', 'Sweet Marjoram seeds', '100 seeds\r\n            Germination rate > 85%\r\n            ', 'webSiteImages\\store\\I043.png', 350.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I044', 'Sweet Pepper “Black Square” seeds', '10 seeds\r\n            Germination rate > 95%\r\n            ', 'webSiteImages\\store\\I044.png', 500.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I045', 'Sweet Pepper “California Miracle Orange” seeds', '10 seeds\r\n            Germination rate > 90%\r\n            ', 'webSiteImages\\store\\I045.png', 490.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I046', 'Sweet Pepper Sunny Twins seeds', '10 seeds\r\n            Germination rate > 90%\r\n            ', 'webSiteImages\\store\\I046.png', 450.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I047', 'Tomato American Blue seeds', '10 seeds\r\n            Germination rate > 90%\r\n            ', 'webSiteImages\\store\\I047.png', 420.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I048', 'Tomato Amethyst Jewel seeds', '10 seeds\r\n            Germination rate > 80%\r\n            ', 'webSiteImages\\store\\I048.png', 500.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I049', 'Tomato Balcony Miracle Golden seeds', '10 seeds\r\n            Germination rate > 80%\r\n            ', 'webSiteImages\\store\\I049.png', 500.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I050', 'Tomato Balcony Miracle Red seeds', '10 seeds\r\n            Germination rate > 80%\r\n            ', 'webSiteImages\\store\\I050.png', 500.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I051', 'Tomato British Breakfast seeds', '15 seeds\r\n            Germination rate > 90%\r\n            ', 'webSiteImages\\store\\I051.png', 400.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I052', 'Tomato Dixi Golden Giant seeds', '10 seeds\r\n            Germination rate > 80%\r\n            ', 'webSiteImages\\store\\I052.png', 500.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I053', 'Tomato Golden Cherry seeds', '10 seeds\r\n            Germination rate > 90%\r\n            ', 'webSiteImages\\store\\I053.png', 400.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I054', 'Tomato Grape seeds', '10 seeds\r\n            Germination rate > 90%\r\n            ', 'webSiteImages\\store\\I054.png', 400.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I055', 'Tomato Green Tiger seeds', '10 seeds\r\n            Germination rate > 80%\r\n            ', 'webSiteImages\\store\\I055.png', 500.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I056', 'Tomato Hundreds and Thousands seeds', '10 seeds\r\n            Germination rate > 80%\r\n            ', 'webSiteImages\\store\\I056.png', 500.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I057', 'Tomato Paradise Candles seeds', '10 seeds\r\n            Germination rate > 80%\r\n            ', 'webSiteImages\\store\\I057.png', 500.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I058', 'Tomato Raspberry Giant seeds', '10 seeds\r\n            Germination rate > 80%\r\n            ', 'webSiteImages\\store\\I058.png', 500.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I059', 'Tomato Vernissage Yellow seeds', '10 seeds\r\n            Germination rate > 80%\r\n            ', 'webSiteImages\\store\\I059.png', 500.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
('I060', 'Tomato Cherry Yubbi seeds', '10 seeds\r\n            Germination rate > 90%\r\n            ', 'webSiteImages\\store\\I060.png', 400.00, 0.00, '2023-10-15 01:53:47', '2023-10-15 01:53:47');

-- --------------------------------------------------------

--
-- Table structure for table `meters`
--

CREATE TABLE `meters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_25_083532_create_sessions_table', 1),
(6, '2023_09_02_085003_create_items_table', 1),
(7, '2023_09_03_140103_create_carts_table', 1),
(8, '2023_09_28_164350_create_meters_table', 1),
(9, '2023_09_28_164543_create_buttons_table', 1),
(10, '2023_09_30_162733_create_readings_table', 1),
(11, '2023_10_01_045848_create_reading_records_table', 1),
(12, '2023_10_01_045910_create_reading_updates_table', 1),
(13, '2023_10_05_104554_create_orders_table', 1),
(14, '2023_10_06_142731_create_web_images_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(4) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `readings`
--

CREATE TABLE `readings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `m_id` varchar(255) NOT NULL,
  `reading` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reading_records`
--

CREATE TABLE `reading_records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `board` varchar(255) NOT NULL,
  `water_capacity` double(8,2) NOT NULL,
  `ambient_temperature` double(8,2) NOT NULL,
  `ambient_humidity` double(8,2) NOT NULL,
  `water_temperature` double(8,2) NOT NULL,
  `ph` double(8,2) NOT NULL,
  `ec` double(8,2) NOT NULL,
  `ambient_light` double(8,2) NOT NULL,
  `water_motor` int(11) NOT NULL DEFAULT 0,
  `nutrition_pump_1` int(11) NOT NULL DEFAULT 0,
  `nutrition_pump_2` int(11) NOT NULL DEFAULT 0,
  `fan` int(11) NOT NULL DEFAULT 0,
  `growing_light` int(11) NOT NULL DEFAULT 0,
  `normal_light` int(11) NOT NULL DEFAULT 0,
  `ph_control_motor` int(11) NOT NULL DEFAULT 0,
  `time` time NOT NULL DEFAULT '07:23:45',
  `date` date NOT NULL DEFAULT '2023-10-15',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reading_records`
--

INSERT INTO `reading_records` (`id`, `board`, `water_capacity`, `ambient_temperature`, `ambient_humidity`, `water_temperature`, `ph`, `ec`, `ambient_light`, `water_motor`, `nutrition_pump_1`, `nutrition_pump_2`, `fan`, `growing_light`, `normal_light`, `ph_control_motor`, `time`, `date`, `created_at`, `updated_at`) VALUES
(1, 'esp32', 100.00, 100.00, 100.00, 100.00, 100.00, 100.00, 100.00, 1, 0, 1, 1, 0, 0, 1, '07:23:48', '2023-10-15', NULL, NULL),
(2, 'esp32', 100.00, 100.00, 100.00, 56.00, 100.00, 100.00, 100.00, 1, 0, 1, 1, 0, 0, 1, '07:23:48', '2023-10-15', NULL, NULL),
(3, 'esp32', 100.00, 100.00, 100.00, 57.00, 100.00, 100.00, 100.00, 1, 0, 1, 1, 0, 0, 1, '07:23:48', '2023-10-15', NULL, NULL),
(4, 'esp32', 100.00, 100.00, 100.00, 76.00, 100.00, 100.00, 100.00, 1, 0, 1, 1, 0, 0, 1, '07:23:48', '2023-10-15', NULL, NULL),
(5, 'esp32', 100.00, 68.00, 100.00, 100.00, 100.00, 100.00, 100.00, 1, 0, 1, 1, 0, 0, 1, '07:23:48', '2023-10-15', NULL, NULL),
(6, 'esp32', 100.00, 26.00, 100.00, 100.00, 100.00, 100.00, 100.00, 1, 0, 1, 1, 0, 0, 1, '07:23:48', '2023-10-15', NULL, NULL),
(7, 'esp32', 100.00, 47.00, 100.00, 100.00, 100.00, 100.00, 100.00, 1, 0, 1, 1, 0, 0, 1, '07:23:48', '2023-10-15', NULL, NULL),
(8, 'esp32', 100.00, 58.00, 100.00, 100.00, 100.00, 100.00, 100.00, 1, 0, 1, 1, 0, 0, 1, '07:23:48', '2023-10-15', NULL, NULL),
(9, 'esp32', 100.00, 100.00, 100.00, 36.00, 100.00, 100.00, 100.00, 1, 0, 1, 1, 0, 0, 1, '07:23:48', '2023-10-15', NULL, NULL),
(10, 'esp32', 100.00, 100.00, 100.00, 78.00, 100.00, 100.00, 100.00, 1, 0, 1, 1, 0, 0, 1, '07:23:48', '2023-10-15', NULL, NULL),
(11, 'esp32', 100.00, 100.00, 100.00, 68.00, 100.00, 100.00, 100.00, 1, 0, 1, 1, 0, 0, 1, '07:23:48', '2023-10-15', NULL, NULL),
(12, 'esp32', 100.00, 45.00, 100.00, 45.00, 100.00, 100.00, 100.00, 1, 0, 1, 1, 0, 0, 1, '07:23:48', '2023-10-15', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reading_updates`
--

CREATE TABLE `reading_updates` (
  `id` varchar(255) NOT NULL,
  `water_capacity` double(8,2) NOT NULL,
  `ambient_temperature` double(8,2) NOT NULL,
  `ambient_humidity` double(8,2) NOT NULL,
  `water_temperature` double(8,2) NOT NULL,
  `ph` double(8,2) NOT NULL,
  `ec` double(8,2) NOT NULL,
  `ambient_light` double(8,2) NOT NULL,
  `water_motor` varchar(255) NOT NULL DEFAULT '0',
  `nutrition_pump_1` varchar(255) NOT NULL DEFAULT '0',
  `nutrition_pump_2` varchar(255) NOT NULL DEFAULT '0',
  `fan` varchar(255) NOT NULL DEFAULT '0',
  `growing_light` varchar(255) NOT NULL DEFAULT '0',
  `normal_light` varchar(255) NOT NULL DEFAULT '0',
  `ph_control_motor` varchar(255) NOT NULL DEFAULT '0',
  `time` time NOT NULL DEFAULT '07:23:45',
  `date` date NOT NULL DEFAULT '2023-10-15',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reading_updates`
--

INSERT INTO `reading_updates` (`id`, `water_capacity`, `ambient_temperature`, `ambient_humidity`, `water_temperature`, `ph`, `ec`, `ambient_light`, `water_motor`, `nutrition_pump_1`, `nutrition_pump_2`, `fan`, `growing_light`, `normal_light`, `ph_control_motor`, `time`, `date`, `created_at`, `updated_at`) VALUES
('1', 99.00, 60.00, 70.00, 60.00, 10.00, 50.00, 70.00, '1', '0', '1', '1', '0', '0', '1', '07:23:48', '2023-10-15', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` text NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL DEFAULT '',
  `lname` varchar(255) NOT NULL DEFAULT '',
  `address1` varchar(255) NOT NULL DEFAULT '',
  `address2` varchar(255) NOT NULL DEFAULT '',
  `address3` varchar(255) NOT NULL DEFAULT '',
  `B_date` date NOT NULL DEFAULT '2023-10-15',
  `gender` varchar(1) NOT NULL DEFAULT '',
  `Phone` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL DEFAULT '/images/defult-avatar.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `fname`, `lname`, `address1`, `address2`, `address3`, `B_date`, `gender`, `Phone`, `email`, `avatar`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Anupama', 'Botheju', '', '', '', '2023-10-01', '', '', 'admin@gmail.com', '/images/defult-avatar.png', '2023-10-15 01:53:47', '$2y$10$KK6hvLJS0KgqERF2uUQgWOIuqyjRkSfjaTP75na5claHxCQ5NNIq2', 'admin', NULL, '2023-10-15 01:53:47', '2023-10-15 01:53:47'),
(2, 'director', 'Shanaka', 'Botheju', '', '', '', '2023-10-01', '', '', 'director@gmail.com', '/images/defult-avatar.png', '2023-10-15 01:53:47', '$2y$10$g6V.5nVLX63YFSE88ObmDueqdGLwXh2NvTsYWSnM1aWv/NKiVc2UO', 'director', NULL, '2023-10-15 01:53:48', '2023-10-15 01:53:48'),
(3, 'cEngineer', 'Anupama', 'Botheju', '', '', '', '2023-10-03', '', '', 'cEngineer@gmail.com', '/images/defult-avatar.png', '2023-10-15 01:53:48', '$2y$10$1FydqudOrA0Id4sFYnM5VuM8c3Fpkysb4bhtjEyb/XaiiQHP03F/u', 'cEngineer', NULL, '2023-10-15 01:53:48', '2023-10-15 01:53:48'),
(4, 'user', 'Anupama', 'Botheju', '', '', '', '2023-10-01', '', '', 'user@gmail.com', '/images/defult-avatar.png', '2023-10-15 01:53:48', '$2y$10$RwQIjMGk0jS9.jRuYBBOB.Na3gMs2QgtYHrAn02UkVfX5VY6Int5.', 'user', NULL, '2023-10-15 01:53:48', '2023-10-15 01:53:48');

-- --------------------------------------------------------

--
-- Table structure for table `web_images`
--

CREATE TABLE `web_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buttons`
--
ALTER TABLE `buttons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD UNIQUE KEY `items_item_id_unique` (`item_id`);

--
-- Indexes for table `meters`
--
ALTER TABLE `meters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `readings`
--
ALTER TABLE `readings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reading_records`
--
ALTER TABLE `reading_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `web_images`
--
ALTER TABLE `web_images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buttons`
--
ALTER TABLE `buttons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `cart_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000000;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meters`
--
ALTER TABLE `meters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000000;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `readings`
--
ALTER TABLE `readings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reading_records`
--
ALTER TABLE `reading_records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `web_images`
--
ALTER TABLE `web_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
