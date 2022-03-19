-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 19, 2022 at 05:49 AM
-- Server version: 10.5.12-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u305645215_unicornequip`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignproducts`
--

CREATE TABLE `assignproducts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assign_mainmachin_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assign_sub_machin_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assign_machin_quantitys` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `serial_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `warranty_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `warranty_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logisticpartner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logisticpartner_link` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trackingnumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dealers`
--

CREATE TABLE `dealers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dealercompany_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dealermobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dealerphone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dealercomapany_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dealerstate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dealerpincode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `empty1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `empty2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dealers`
--

INSERT INTO `dealers` (`id`, `dealercompany_name`, `dealermobile`, `dealerphone`, `dealercomapany_address`, `dealerstate`, `dealerpincode`, `empty1`, `empty2`, `created_at`, `updated_at`) VALUES
(4, 'ESSKAY TRADING CORPORATION', NULL, NULL, 'REGIONAL: 34/7 BHOLARAM USTAD MARG  BIMLA KUTIR, PIPLIYA RAO, INDORE', 'Madhya Pradesh', '452001', NULL, NULL, '2022-02-21 02:25:49', '2022-02-21 02:25:49'),
(5, 'All Construction Equipments', '08920383141', '08920383141', 'G 32/1, Jasola, Shaheen Bagh', 'New Delhi', '110025', NULL, NULL, '2022-02-21 02:30:37', '2022-02-21 02:30:37'),
(6, 'GOEL AGENCIES', NULL, NULL, '737, Church Mission Road, Fatehpuri', 'New Delhi', '110006', NULL, NULL, '2022-02-21 02:31:51', '2022-02-21 02:31:51'),
(7, 'Aeroking HI-Tech Pvt. Ltd.', NULL, NULL, 'Plot No. 7&8 Block-C, Sector-24, Rohini', 'New Delhi', '110085', NULL, NULL, '2022-02-21 02:32:40', '2022-02-21 02:32:40'),
(8, 'Ispat Construction Equipments', NULL, NULL, 'RZ/76A, Mohan Garden, Uttam Nagar', 'New Delhi', '110059', NULL, NULL, '2022-02-21 02:33:34', '2022-02-21 02:33:34'),
(9, 'Shiva Construction', NULL, NULL, 'Office No-225, 2nd Floor,Aggrawal Plaza,Rohini, Sector-5', 'New Delhi', '110085', NULL, NULL, '2022-02-21 02:37:09', '2022-02-21 02:37:09');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `insuranceclaims`
--

CREATE TABLE `insuranceclaims` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `useremail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userphonenumber1` bigint(20) DEFAULT NULL,
  `useraddress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mainmachine` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `submachine` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serialnumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `warranty_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `warranty_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userphonenumber2` bigint(20) DEFAULT NULL,
  `claimimages` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `claimvideos` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `request_status` enum('approved','deny') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_machine_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_machine_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_invoice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mainmachines`
--

CREATE TABLE `mainmachines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `machine_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `machine_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `machine_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `machine_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `machine_status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mainmachines`
--

INSERT INTO `mainmachines` (`id`, `machine_name`, `machine_price`, `machine_description`, `machine_image`, `machine_status`, `created_at`, `updated_at`) VALUES
(1, 'Concrete Cutter Machine', '40000', 'Prominent & Leading Manufacturer from Delhi, we offer rcc concrete cutter machine, unicorn gasoline concrete cutter, concrete road cutting machine, 10 hp concrete cutter, groove cutting machine and road cutting machine.', '202202281144rcc-cutter-machine-500x500 (2).jpeg', 'active', '2022-02-28 11:44:23', '2022-02-28 11:44:23');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_09_17_073607_create_sessions_table', 1),
(10, '2021_10_12_070809_create_submachines_table', 3),
(14, '2021_10_20_095721_create_mainmachines_table', 4),
(18, '2021_10_27_065014_create_products_table', 6),
(19, '2021_10_22_073718_create_invoices_table', 7),
(20, '2021_10_30_073004_create_assignproducts_table', 8),
(22, '2021_11_02_112033_create_insuranceclaims_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('vishwa@gmail.com', '$2y$10$PJct85Nhb8gI1RX13fNb9ukr6idMcplJoe0YSF7WMjMtp5tvOREoW', '2021-11-13 05:25:59');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Product_username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_phone_number` bigint(20) DEFAULT NULL,
  `product_main_machine` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_sub_machine` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_quantity` int(255) DEFAULT NULL,
  `phone_number` bigint(20) DEFAULT NULL,
  `product_message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `request_status` enum('closed','rejected') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `Product_username`, `product_email`, `user_phone_number`, `product_main_machine`, `product_sub_machine`, `product_quantity`, `phone_number`, `product_message`, `request_status`, `created_at`, `updated_at`) VALUES
(1, 'rohit', 'rohit@gmail.com', 1234567890, 'Concrete Cutter Machine', 'RCC Concrete Cutter Machine', 4, NULL, NULL, NULL, '2022-03-16 05:43:19', '2022-03-16 05:43:19'),
(2, 'rohit', 'rohit@gmail.com', 1234567890, 'Concrete Cutter Machine', 'RCC Concrete Cutter Machine', 4, 8787854454, NULL, NULL, '2022-03-16 05:43:53', '2022-03-16 05:43:53');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('0hcvGOTPKOOWZkMpZd6XXFavIY2CA94caJPVI58s', 3, '2405:204:92aa:ca3d:2948:60ae:bff5:91d3', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.74 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoienoxcWRqZVowRTFXWHdPVUtSMXhxN3BtV0N2d2hCT2h6U0ZTUTVzQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjY6Imh0dHA6Ly91bmljb3JuZWVxdWlwbWVudC5ibHVicmFuZHpnbG9iYWwuY29tL3Byb2ZpbGUvcGFzc3dvcmQvdmlldyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCR4eklBbVcvL01MTG1aT3RhWnNMaE5lSUpUYU1xREw5WlFZMVBMamV6RHc4V0hVY3B2OEczNiI7fQ==', 1647429618),
('4KVuwZT8EMqb1cx18HvEKquqVfedqyPgduRUZ2F6', NULL, '2401:4900:415d:4d23:18bc:8904:d7ae:cf99', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidWdkMDNrVkJObHJUbXRjYWJJUVpJZnU5b0R0ckR0aWlyZXFpdng5byI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly91bmljb3JuZWVxdWlwbWVudC5ibHVicmFuZHpnbG9iYWwuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1647429341),
('7PeGWAEBxu4lbZ4Qw6ZsuWerrfpfAvM3g2qHhWov', NULL, '2401:4900:415d:4d23:18bc:8904:d7ae:cf99', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicWxZSDBERDhpMjJVVGVZSUhJRXhUR3g0eFVHSGpPdnpWR1V2TVZPTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly91bmljb3JuZWVxdWlwbWVudC5ibHVicmFuZHpnbG9iYWwuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1647429412),
('bLekGRgH5wy4yCKFbgve3wwH7JNLvvOxavhPvB9S', NULL, '2405:204:92aa:ca3d:18ce:d9ad:dd80:572c', 'WhatsApp/2.22.4.75 i', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZENRbFRqZVNLYXNBd0VXT290bEVtR3FNbE5GTmFiZ3VjbmxDNHVLNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly91bmljb3JuZWVxdWlwbWVudC5ibHVicmFuZHpnbG9iYWwuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1647429321),
('CJNi7aVlJPYI9wx5DK1BgBf8VvOmz08zRR9wtHFB', NULL, '223.233.79.160', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.1 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ0tzcWpEa3Z1ZDE0cHNLZVEyVUl5cnNXeVRqUmJteklFNzZEZzJOUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly91bmljb3JuZWVxdWlwbWVudC5ibHVicmFuZHpnbG9iYWwuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1647431234),
('CXRfYbaZovokwOFhViPee88nW7f3k5smYRFHt1SU', NULL, '35.246.65.127', 'Go-http-client/1.1', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiS2JJaG9ydko0M1VmaVFra2JMSHdGd0FEemhqZ29tNm55YTh3RDBZRCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1647543807),
('iaGcoaPrzUU64ZU25ESwdguEJW3KTtEnXhyrQRjo', NULL, '45.248.93.165', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.74 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieFFBN1RtMzdWR3A2U05GWDI1NXdYZHFRcENvakdCanVGR3FpdERiTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjY6Imh0dHA6Ly91bmljb3JuZWVxdWlwbWVudC5ibHVicmFuZHpnbG9iYWwuY29tL3Byb2ZpbGUvcGFzc3dvcmQvdmlldyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1647610022),
('JVDWgGc3INMwIMI92MTogKIk2Qfsr3Mryv89HcTR', NULL, '150.242.174.173', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.74 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMzh4UlV2VVExZmJ6RXBNc0lqRGpsUW84NHZucUFLWlNUUGVnV1p0QyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly91bmljb3JuZWVxdWlwbWVudC5ibHVicmFuZHpnbG9iYWwuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1647665564),
('KRT8HcKq3y6G66HwQVnQFQ75dJBht3MO5H6HPbsp', NULL, '35.246.65.127', 'Go-http-client/1.1', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiVGZ1a1FYdjlkWHc4b3FnSlkyTXBoV083QUs1cDFUbG03aFRtTm9RcSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1647457400),
('KY7w4QgxEcoM7lu002VF80hisR7N6gKygkqZmQB6', NULL, '35.246.65.127', 'Go-http-client/1.1', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiSGgzd3QyNnFmVE9xNFVka3Vhczc0SGFrQnVYWXR4R2hSYm43YmxabiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1647371007),
('PnCXVCDcqnCKzkHVazTkiF5coTGlPRMLswY50Qv8', 3, '2409:4050:2e0e:da99:149b:5e23:926d:4d97', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', 'YTo1OntzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJHh6SUFtVy8vTUxMbVpPdGFac0xoTmVJSlRhTXFETDlaUVkxUExqZXpEdzhXSFVjcHY4RzM2IjtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo2MzoiaHR0cDovL3VuaWNvcm5lZXF1aXBtZW50LmJsdWJyYW5kemdsb2JhbC5jb20vc3VibWFjaGluZWRldGFpbC8xIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo2OiJfdG9rZW4iO3M6NDA6IjFYVnU1WnphWW96VG0xTDVXZmRLd2ZuaGd0bWphM0RRcVhBc1hiU20iO3M6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM7fQ==', 1647409303),
('SN7pTCDs4hfb6NPAGDjDpgmo0x5RNh9ywqtcN0yE', NULL, '35.246.65.127', 'Go-http-client/1.1', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoid3JoZTA5QXNieG1zckZnY2JQWTJXNE1Ya0pWUXJ3eWlhZnlScWpZNSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1647630205),
('TFMH5oIZNDTrMzMDyrBJ6lDe8zzi2VbPh3igNpqX', 2, '2409:4050:2e0e:da99:149b:5e23:926d:4d97', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', 'YTo2OntzOjM6InVybCI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Njg6Imh0dHA6Ly91bmljb3JuZWVxdWlwbWVudC5ibHVicmFuZHpnbG9iYWwuY29tL3VzZXJwcm9kdWN0cy9hZGRyZXF1ZXN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo2OiJfdG9rZW4iO3M6NDA6IlRWSzJwbjlOb1JwS2pMd0lHUXdDSTM3MWVqUXBROHlIMFlLZGNBM1UiO3M6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCREeUozQUVXZklpLnJvQmNsb050NFVPdEdBejE0UEpCY0g4NEU5V25qVFRTV04uTzFDZlBxQyI7fQ==', 1647409459),
('tZK0VwN7ak5Mll6bD4U8tbJBopDBzwTwyc4LsqjL', NULL, '223.233.78.111', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQzMwY0tMVjg0T2MzRng4bDY0MkRJVG15alM2ZHpWQUl0NDJYN3VCNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly91bmljb3JuZWVxdWlwbWVudC5ibHVicmFuZHpnbG9iYWwuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1647437110),
('vK0ROAWFMFTQc5PJPKx9zBEuCuVgy1tVSJl7C48O', 3, '2409:4050:2e0e:da99:149b:5e23:926d:4d97', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiOXZGSnNDb3VxS3hrWkZsTWJ0a1gwV2pEcVh0bUZ1QnpuWG1OVmpZRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTQ6Imh0dHA6Ly91bmljb3JuZWVxdWlwbWVudC5ibHVicmFuZHpnbG9iYWwuY29tL2Rhc2hib2FyZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCR4eklBbVcvL01MTG1aT3RhWnNMaE5lSUpUYU1xREw5WlFZMVBMamV6RHc4V0hVY3B2OEczNiI7fQ==', 1647409124),
('WyPrTEO5EIKnjajCgOoZ15vkSdwaTVFQGnMm7ke3', NULL, '185.192.71.27', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.1 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRjdiZjRwcklIamVYWnRuWmdDNThkMFBScDVPOFFnM1pQMGNvOG0yeSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly91bmljb3JuZWVxdWlwbWVudC5ibHVicmFuZHpnbG9iYWwuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1647455557),
('xUfKubyvOQEhbjRFqSycZ7rvzSecoR91FlOiAYZF', 3, '49.206.123.92', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoicmR5YXdYTHNNbE4zM2NsdEIzZFE1TGl6NVE0WHU4eklJYXUxc3NGdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTU6Imh0dHA6Ly91bmljb3JuZWVxdWlwbWVudC5ibHVicmFuZHpnbG9iYWwuY29tL3VzZXJzL3ZpZXciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTozO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkeHpJQW1XLy9NTExtWk90YVpzTGhOZUlKVGFNcURMOVpRWTFQTGplekR3OFdIVWNwdjhHMzYiO30=', 1647497600),
('YGMESpr5eUkJiSRBsxQxhpGPemtcK860o6CDboqv', NULL, '103.90.201.66', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieEg5ZkVpVHV2V1pKU1NzY09aaUxKM2NLdHhTTUVKdUZoYXRqcnhvZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly91bmljb3JuZWVxdWlwbWVudC5ibHVicmFuZHpnbG9iYWwuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1647437072);

-- --------------------------------------------------------

--
-- Table structure for table `submachines`
--

CREATE TABLE `submachines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `main_machine_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_machine_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_machine_price` int(255) NOT NULL,
  `sub_machine_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_machine_image` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_machine_video` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_machine_brochure` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_machine_status` enum('active','inactive') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `submachines`
--

INSERT INTO `submachines` (`id`, `main_machine_name`, `sub_machine_name`, `sub_machine_price`, `sub_machine_description`, `sub_machine_image`, `sub_machine_video`, `sub_machine_brochure`, `sub_machine_status`, `created_at`, `updated_at`) VALUES
(1, 'Concrete Cutter Machine', 'RCC Concrete Cutter Machine', 85000, '<p><strong>Product Details:</strong></p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Usage/Application</td>\r\n			<td>RCC Concrete Cutting</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Drive Mechanism</td>\r\n			<td>Belt</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Engine Type</td>\r\n			<td>Petrol Engine</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Brand/Make</td>\r\n			<td>Unicorn</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Water Tank Capacity</td>\r\n			<td>35 L</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Max Speed</td>\r\n			<td>3600 RPM</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Max Cutting Depth</td>\r\n			<td>500 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Fuel Tank</td>\r\n			<td>7 L</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\n<strong>RCC Concrete Cutter Machine</strong>&nbsp;is mainly used for road maintenance work, slitting and cutting concrete and asphalt road. It&#39;s widely used for cutting concrete, masonry, brick, asphalt, tile, and other solid materials. Our concrete cutter could be easily operated on cutting concrete and asphalt floor of road, bridge, parking lot, square, factories house floors and so on.<br />\r\n<br />\r\nUnicorn walk behind concrete and asphalt road cutter uses first-class brand engine, honda gasoline engine which is reliable and durable. And you can also choose diesel engine. Unique designed steel water tank provides adequate water supply and perfect waling effect and has less problems. We use laser welded diamond saw blade, the blade size is optional, you can choose 350mm, 400mm, 500mm blades, the cutting depth is adjustable, the maximum cutting depth is 180mm.<br />\r\n<br />\r\n<strong>Special Features:</strong></p>\r\n\r\n<ul>\r\n	<li>Gasoline engine and Diesel engine are available.</li>\r\n	<li>Small volume, light weight, and portable.</li>\r\n	<li>Simple clamping and convenient operation.</li>\r\n	<li>400mm, 500mm blades are optional.</li>\r\n	<li>Large matching power and quick cutting speed.</li>\r\n	<li>High precision of positioning, good quality of cutting section.</li>\r\n</ul>\r\n\r\n<p><br />\r\n<strong>Other details:</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Engine</strong>: 5.5hp Honda gasoline GX160 engine is durable and easy to start. Honda brand engine is reliable and insure the machine less problem and better performance.</li>\r\n	<li><strong>Blade</strong>: High quality Laser welded diamond saw blade for longer life, Max cutting depth is 180mm, Optional blade size: 350mm, 400mm, 500mm</li>\r\n	<li><strong>Blade Cover</strong>: Special designed blade cover is fixed on the frame by screw bolts. It makes the assembling and disassembling more easily.</li>\r\n</ul>', 'upload/sub_machine_img/426f990b332ef8193a61cc90516c1245.jpeg|upload/sub_machine_img/bb7946e7d85c81a9e69fee1cea4a087c.jpeg|upload/sub_machine_img/ed57844fa5e051809ead5aa7e3e1d555.jpeg', NULL, 'upload/sub_machine_brochure/d339a8932df05de23ae3d9e29df4b25f.pdf', 'active', '2022-02-28 11:46:06', '2022-03-16 05:41:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usertype` enum('user','admin') COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'user,Admin',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('active','inactive') COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'admin=head of sotware,operator=computer operator,user=employee',
  `join_date` date DEFAULT NULL,
  `designation_id` int(11) DEFAULT NULL,
  `salary` double DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active' COMMENT '0=inactive,1=active',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `usertype`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `mobile`, `address`, `gender`, `company_name`, `image`, `fname`, `mname`, `religion`, `id_no`, `dob`, `code`, `role`, `join_date`, `designation_id`, `salary`, `status`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(2, 'user', 'rohit', 'rohit@gmail.com', NULL, '$2y$10$DyJ3AEWfIi.roBcloNt4UOtGAz14PJBcH84E9WnjTTSWN.O1CfPqC', NULL, NULL, '1234567890', 'Delhi', 'Male', NULL, '202202241023avatar-4.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'inactive', NULL, NULL, NULL, '2021-10-07 07:10:08', '2022-02-24 04:53:15'),
(3, 'admin', 'vishwa', 'vishwa@gmail.com', NULL, '$2y$10$xzIAmW//MLLmZOtaZsLhNeIJTaMqDL9ZQY1PLjezDw8WHUcpv8G36', NULL, NULL, '8920352115', 'Delhi', 'Male', NULL, '202202281131202202241023avatar-4.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2021-10-09 03:07:54', '2022-02-28 11:31:37'),
(10, 'user', 'test', 'test@gmail.com', NULL, '$2y$10$4Vxwu/D3I/0K1ob73RzKp.2GSOhzAs3Lr00omQTQNoHOXKG3fzouy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2021-11-12 00:59:36', '2021-11-12 00:59:36'),
(11, 'user', 'yash', 'yash@gmail.com', NULL, '$2y$10$URXM0DpezsO724fDVtfZKOTaWTFfambl7TEEHYK2B0LKHkSbA1djK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2021-11-12 01:01:24', '2021-11-12 01:01:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignproducts`
--
ALTER TABLE `assignproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dealers`
--
ALTER TABLE `dealers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `insuranceclaims`
--
ALTER TABLE `insuranceclaims`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mainmachines`
--
ALTER TABLE `mainmachines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `submachines`
--
ALTER TABLE `submachines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignproducts`
--
ALTER TABLE `assignproducts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dealers`
--
ALTER TABLE `dealers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `insuranceclaims`
--
ALTER TABLE `insuranceclaims`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mainmachines`
--
ALTER TABLE `mainmachines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `submachines`
--
ALTER TABLE `submachines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
