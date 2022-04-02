-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2022 at 09:58 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unicorn`
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
  `assign_images` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assign_videos` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assignproducts`
--

INSERT INTO `assignproducts` (`id`, `username`, `assign_mainmachin_name`, `assign_sub_machin_name`, `assign_machin_quantitys`, `serial_number`, `warranty_from`, `warranty_to`, `logisticpartner`, `logisticpartner_link`, `trackingnumber`, `assign_images`, `assign_videos`, `created_at`, `updated_at`) VALUES
(2, 'rohit', 'bar bending machine', 'Mild Steel Bar Bending Machine', '1', 'rtyhethethrj', '2022-03-24', '2023-04-24', 'fuf6w565w6h56y35', NULL, '56y365y56', 'upload/assign_product/cb57cdb7cc459dc6fbbc33f91485b5e2.jpg|upload/assign_product/d5a28f81834b6df2b6db6d3e5e2635c7.jpg|upload/assign_product/cd19a3a0867f69f400961b5dd502fbc6.jpg', 'upload/assign_product/2281f5c898351dbc6dace2ba201e7948.mp4', '2022-03-24 06:15:06', '2022-03-24 06:15:06'),
(3, 'rohit', 'Mild Steel Power Floater Machine', 'Concrete Power Trowel Cum Floater', '1', 'rtyhetheth', '2022-03-24', '2022-03-30', 'fuf6w565w6h56y35dfbdbdf', NULL, 'dbdbdbdbb4d5fb54d5f4b', 'upload/assign_product/676b58765ad419a5b7af6a959d4de341.jpg|upload/assign_product/ab1a4d0dd4d48a2ba1077c4494791306.jpg', 'upload/assign_product/7a1d9028a78f418cb8f01909a348d9b2.mp4', '2022-03-24 06:17:31', '2022-03-24 06:17:31'),
(4, 'test12', 'Stirrup Bending Machine', 'Digital Stirrup Bending Machine', '1', 'rtyhethethrj', '2022-03-24', '2022-04-05', 'fgbfgbfgbfg4b4fgb54f45b4f54b5gf4', 'fg5bf5g4b54gf54b', 'gfb5gfb5f45gb', 'upload/assign_product/75da5036f659fe64b53f3d9b39412967.jpg|upload/assign_product/24f2f931f12a4d9149876a5bef93e96a.jpg', 'upload/assign_product/291d43c696d8c3704cdbe0a72ade5f6c.mp4', '2022-03-24 06:20:11', '2022-03-24 06:20:11'),
(5, 'yash', 'Stirrup Bending Machine', 'Digital Stirrup Bending Machine', '1', 'v5fd1v5fd1vfd1v1fdv1f1vfvfdf2v', '2022-03-24', '2022-07-29', 'gtrgtrgtrgtrgtrgtgg', 'gtrgtrgtr', 'gtrgtrgtrgtgtg5t5g5tgtr', 'upload/assign_product/3f24bb08a5741e4197af64e1f93a5029.jpg|upload/assign_product/2172fde49301047270b2897085e4319d.jpg', 'upload/assign_product/c255c05246a081654a0267cbb725f5a7.mp4', '2022-03-24 07:18:09', '2022-03-24 07:18:09'),
(6, 'rohit', 'bar bending machine', 'Mild Steel Bar Bending Machine', '1', 'rtyhetheth', '2022-03-25', '2022-04-02', 'fuf6w565w6h56y35', 'fg5bf5g4b54gf54b', 'ythythulluil', 'upload/assign_product/27934a1f19d678a1377c257b9a780e80.jpg|upload/assign_product/12fb63ba1566cb03484e1e5e290a73f4.jpg', NULL, '2022-03-25 00:06:58', '2022-03-25 00:06:58');

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
  `main_cat_id` int(255) DEFAULT NULL,
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

INSERT INTO `mainmachines` (`id`, `main_cat_id`, `machine_name`, `machine_price`, `machine_description`, `machine_image`, `machine_status`, `created_at`, `updated_at`) VALUES
(3, 5, 'bar bending machine', '10000', 'How does a bar bending machine work?\r\nBar bending machine is consist of electric motor, coupling, circular plate, worm gear drive, extended shaft. Electric motor transmits power to gear box where speed is decreased and torque is increased. Which is used to bend bar with the help of circular plate. Bend at any required angle for bar having dia.', '202203221151IMG-20200101-WA0053.jpg', 'active', '2022-03-22 06:21:46', '2022-03-22 06:21:46'),
(4, 5, 'Stirrup Bending Machine', '54542121', 'Computerized control automatic stirrup bending machine comes with high intelligent integration control and feeding. It is used to scale, straightening, bending, forming, cutting various process single one live, to direct production of various size specifications of the stirrup. High power feeding motor ensures bending bar accuracy hence it meets the required accuracy of stirrups. Automatic double wire intake system increases productivity efficiency 2 times.', '202203221209IMG-20191014-WA0093.jpg', 'active', '2022-03-22 06:39:44', '2022-03-22 06:39:44'),
(5, 6, 'Mild Steel Power Floater Machine', '54542121', 'Providing you the best range of concrete power trowel machine, power trowel and 5hp power trowel with effective & timely delivery', '202203221213IMG-20200102-WA0000.jpg', 'active', '2022-03-22 06:43:55', '2022-03-22 06:49:23');

-- --------------------------------------------------------

--
-- Table structure for table `main_categories`
--

CREATE TABLE `main_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_images` varchar(4000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_status` enum('active','inactive') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_empty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_categories`
--

INSERT INTO `main_categories` (`id`, `category_name`, `category_description`, `category_images`, `category_status`, `category_empty`, `created_at`, `updated_at`) VALUES
(5, 'Rebar Processing', 'Rebaring is the method of insertion of the Steel bars when,\r\nthere is change in design or there is some extension of the present structure.\r\nWhen Steel rod as per drawing has not been installed.\r\n\r\nRebaring technique is reinforced concrete construction is a method for proper fabrication and placement of reinforcement bar as per the design and drawing of RCC work.', 'upload/categories_data/e2c4c0b38669387a2a842e1fe391d233.jpg|upload/categories_data/d47619b92cebc6ebfa07969ab5370ae6.jpg|upload/categories_data/adf854f418fc96fb01ad92a2ed2fc35c.jpg|upload/categories_data/dcacff2565700c8f88f59cf4a16f9dfc.jpg|upload/categories_data/e55bc0255c752d1cb05da10c0f1f5026.jpg|upload/categories_data/a51fb975227d6640e4fe47854476d133.jpg|upload/categories_data/1fa6269f58898f0e809575c9a48747ef.jpg|upload/categories_data/46fc943ecd56441056a560ba37d0b9e8.jpg|upload/categories_data/022400dffec5b4477f760ca0e7449d73.jpg|upload/categories_data/300bedd5a8a0b2f1c4bf26d3cd69cc9b.jpg|upload/categories_data/110eec23201d80e40d0c4a48954e2ff5.jpg', 'active', NULL, '2022-03-22 05:44:22', '2022-03-22 05:44:22'),
(6, 'flooring Equipment', 'Floor covering is a term to generically describe any finish material applied over a floor structure to provide a walking surface. Both terms are used interchangeably but floor covering refers more to loose-laid materials. Materials almost always classified as flooring include carpet, laminate, tile, and vinyl.\r\nhe floor under the flooring is called the subfloor, which provides the support for the flooring. Special purpose subfloors like floating floors, raised floors or sprung floors may be laid upon another underlying subfloor which provides the structural strength. Subfloors that are below grade (underground) or ground level floors in buildings without basements typically have a concrete subfloor. Subfloors above grade (above ground) typically have a plywood subfloor.', 'upload/categories_data/09779bb7930c8a0a44360e12b538ae3c.jpg|upload/categories_data/f0eaf559f89ca17022783964ebe9cdfd.jpg|upload/categories_data/0e1ebad68af7f0ae4830b7ac92bc3c6f.jpg|upload/categories_data/f93486bfff38ca69d76d85c089569a09.jpg|upload/categories_data/749b3dec12dee44c9594af615a9de86b.jpg|upload/categories_data/5c7a3b81a677c639c76989610183c0e0.jpg|upload/categories_data/044a23cadb567653eb51d4eb40acaa88.jpg|upload/categories_data/286674e3082feb7e5afb92777e48821f.jpg|upload/categories_data/473803f0f2ebd77d83ee60daaa61f381.jpg|upload/categories_data/5ffaa9f5182c2a36843f438bb1fdbdea.jpg|upload/categories_data/dce8af15f064d1accb98887a21029b08.jpg', 'active', NULL, '2022-03-22 05:45:41', '2022-03-22 06:00:35');

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
(22, '2021_11_02_112033_create_insuranceclaims_table', 9),
(23, '2021_11_17_102844_create_proformas_table', 10),
(24, '2022_03_22_095708_create_main_categories_table', 11),
(25, '2022_04_01_072551_create_service_requests_table', 12);

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
(1, 'rohit', 'rohit@gmail.com', 1234567890, 'bar bending machine', 'Mild Steel Bar Bending Machine', 10, NULL, 'gnfgnfgn', NULL, '2022-03-24 06:35:08', '2022-03-24 06:35:08');

-- --------------------------------------------------------

--
-- Table structure for table `proformas`
--

CREATE TABLE `proformas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_machine_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_machine_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_invoice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_status` enum('approve','deny') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_requests`
--

CREATE TABLE `service_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_useremail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_phonenumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_photos` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_videos` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_invoice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_checkbox_policy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `empty1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status` tinyint(4) DEFAULT NULL COMMENT '0=not done, 1 = done',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_requests`
--

INSERT INTO `service_requests` (`id`, `service_username`, `service_useremail`, `service_phonenumber`, `service_address`, `service_photos`, `service_videos`, `service_invoice`, `service_checkbox_policy`, `empty1`, `Status`, `created_at`, `updated_at`) VALUES
(6, 'testuseremail', 'testuseremail@gmail.com', '+912626622622', 'gfbfgbfgkb gb klgf kgf gf', 'upload/website_services/3dde11a7673e90ad96fafd0b3b27a477.jpg|upload/website_services/63bfd6e8f26d1d3537f4c5038264ef36.jpg|upload/website_services/e6385d39ec9394f2f3a354d9d2b88eec.jpg', 'upload/website_services/9332c513ef44b682e9347822c2e457ac.mp4|upload/website_services/6f8caa0e6413027cb7a12f945151cb8d.mp4', 'upload/website_services/b9b72b29352f3764ea4dec130772bd9d.pdf', 'on', NULL, NULL, '2022-04-01 04:08:03', '2022-04-01 04:08:03'),
(7, 'test 2', 'test2@gmail.com', '+91123456859', 'fhfg fg hfg hfg h fgh fg', 'upload/website_services/654ad60ebd1ae29cedc37da04b6b0672.jpg|upload/website_services/d80126524c1e9641333502c664fc6ca1.jpg', 'upload/website_services/ad47a008a2f806aa6eb1b53852cd8b37.mp4', 'upload/website_services/2812e5cf6d8f21d69c91dddeefb792a7.pdf', 'on', NULL, NULL, '2022-04-01 05:00:06', '2022-04-01 05:00:06');

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
('Q5kCd3rL45cVPp6BttaFJmWB8qdCmjIvOItMKbGr', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.60 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiYVJNUGlMampzVWdPa2ZVNmY2VDdZMmdaSWY1NHEwdGhTS3lsM2pqSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hYm91dHVzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MztzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJHh6SUFtVy8vTUxMbVpPdGFac0xoTmVJSlRhTXFETDlaUVkxUExqZXpEdzhXSFVjcHY4RzM2Ijt9', 1648886285);

-- --------------------------------------------------------

--
-- Table structure for table `submachines`
--

CREATE TABLE `submachines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `main_category_id` int(11) DEFAULT NULL,
  `main_machine_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_machine_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_machine_price` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `submachines` (`id`, `main_category_id`, `main_machine_name`, `sub_machine_name`, `sub_machine_price`, `sub_machine_description`, `sub_machine_image`, `sub_machine_video`, `sub_machine_brochure`, `sub_machine_status`, `created_at`, `updated_at`) VALUES
(4, 5, 'bar bending machine', 'Mild Steel Bar Bending Machine', '91000', '<p><strong>Product Details:</strong></p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Model Name/Number</td>\r\n			<td>UNI 40B</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Brand</td>\r\n			<td>Unicorn</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Weight</td>\r\n			<td>440 Kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Operation</td>\r\n			<td>Automatic</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bar Bending Diameter</td>\r\n			<td>32mm TMT rebar and 35 mm plain bar</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Type Of Motor</td>\r\n			<td>Copper Winding (Brake Motor)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Motor Power</td>\r\n			<td>4 kW / 5 HP</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Rotation Speed Of Motor</td>\r\n			<td>1440 R/min</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Speed Of Working Disc</td>\r\n			<td>8-11 R/min</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Noise Value</td>\r\n			<td>Less than or equal to 80 dBA (1 m away)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Dimension</td>\r\n			<td>850 x 800 x 880 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Production Capacity</td>\r\n			<td>2 Ton/Ph</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Automatic bar bending machines (UNI 40B &amp; UNI 50B) offered by us are designed to bend the bar upto 6 mm to 42 mm. These bar bending machine (UNI 40B &amp; UNI 50B) are served in the capacity of 4.5 kW/6HP Power. These machines are high on demand for Construction Job Site applications. The range of bar bending machines we offer renders smooth functioning for longer time period. In addition, the high performance of our reinforced bar bending machine with working rotation speed. UNI 42B &amp; UNI 50B is powered by 100% copper winding 4.5 kW/6HP TEFC Induction electric motor running on 4P, 415V. Our fully automatic Bar Bending Machine is operated through manual button as well as automatic button and delivers stable performance with optimum safety.<br />\r\n<br />\r\n<strong>Advantages:</strong></p>\r\n\r\n<ul>\r\n	<li>The latest heavy duty gear box assembly, spindle is a maintenance free.&nbsp;</li>\r\n	<li>Column and spool adopt high quality alloy steel, high temperature quenching treatment, higher hardness, more wear-resisting</li>\r\n	<li>Increase heavy of disc and square steel, never deformation, bend bar more accurately.&nbsp;</li>\r\n	<li>Enclosed electric cabinet, moisture proof, prevent dust, prevent leakage.</li>\r\n	<li>Thickening the dashboard, increase the integrity of the machine and longer service life</li>\r\n	<li>Rotary oil-way of work station makes add oil more conveniently.</li>\r\n	<li>Advanced electrical control panel with brake motor increases performance and durability.</li>\r\n	<li>Different bending bushes designed for various bending radius.</li>\r\n	<li>Ensures high durability at its user ends, effectively increases the production capacity.</li>\r\n	<li>Various sizes of bushes for bending diameter of bars.</li>\r\n	<li>Cost effective bending machines, used for bending reinforcement bars and different kind of round bars.</li>\r\n</ul>', 'upload/sub_machine_img/84f74ce4511e0c9531af1182fb636f0f.jpg|upload/sub_machine_img/a4ee59dd868ba016ed2de90d330acb6a.jpg|upload/sub_machine_img/a50abba8132a77191791390c3eb19fe7.jpg|upload/sub_machine_img/3cc697419ea18cc98d525999665cb94a.jpg|upload/sub_machine_img/ff096d0e005a8c794b6c1da7c0fd662e.jpg', NULL, 'upload/sub_machine_brochure/c5d215777c229704a7862de577d40a73.pdf', 'active', '2022-03-24 00:35:50', '2022-03-24 00:35:50'),
(5, 6, 'Mild Steel Power Floater Machine', 'Concrete Power Trowel Cum Floater', '38500', '<p><strong>Product Details:</strong></p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Brand</td>\r\n			<td>Unicorn</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Power</td>\r\n			<td>7 kW / 9 HP</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Weight</td>\r\n			<td>120 Kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Fuel Tank Capacity</td>\r\n			<td>6.1 L</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Engine Type</td>\r\n			<td>Air-cooled, 4-cycle, Gasoline</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Working Diameter</td>\r\n			<td>1170 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Dimension</td>\r\n			<td>2080 x 1250 x 1020 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Speed</td>\r\n			<td>Max 3600 RPM</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Type</td>\r\n			<td>Honda GX270</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\nUnicorn concrete finishing&nbsp;power trowel machine&nbsp;is widely used for concrete surface finishing and smoothing work of high-standard workshop, warehouse, parking lot, square, airport, concrete road and frame style building. The working efficiency of the float machine is much higher than the formal manual trowel. Unicorn walk behind concrete power float trowel machines are durable and high efficiency. They are powered by Honda GX270 gasoline engine. The 24inch trowel blades are made of 2.0mm thickness spring steel. The float trowel pan is made of 3.0mm thickness manganese steel and it help the machine have years of high performance. And, our high strength steel handle provides maximum comfort and control.<br />\r\n<br />\r\n<strong>Features:</strong></p>\r\n\r\n<ul>\r\n	<li>Independent rotating flywheel, allowing operation in tight corners and in confined spaces.</li>\r\n	<li>Over-built gearbox assures long service life.</li>\r\n	<li>Height adjustable handle, assures operator comfort &amp; easy control.</li>\r\n	<li>Screw control ensures precise blade adjustment</li>\r\n	<li>Heavy type clutch make &quot;leave&quot; and &quot;close&quot; closely</li>\r\n	<li>Aluminum reducer case is not only light, but also has best heat radiating function</li>\r\n</ul>\r\n\r\n<p><br />\r\n<strong>Special Features:</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Trowel Pan:</strong>&nbsp;Unicorn concrete power trowel pan is made of 3mm thickness manganese steel. It protects the trowel blades and make the machine more durable, working life time is over 5000m.</li>\r\n	<li><strong>Gear:</strong>&nbsp;Gear is made of pure copper. The worm gear and endless screw design make them.</li>\r\n	<li><strong>Reducer:</strong>&nbsp;The reducer of our concrete towel is Aluminum body reducer. It is nto only light, but also has best heat radiating funtion.</li>\r\n	<li><strong>Clutch:</strong>&nbsp;Heavy type Clutch make &quot;leave&quot; and &quot;close&quot; completely.</li>\r\n</ul>', 'upload/sub_machine_img/0ce98f53e3aa229aa2f31b16e5dcbb4b.jpg|upload/sub_machine_img/97416ac0f58056947e2eb5d5d253d4f2.jpg|upload/sub_machine_img/5ad2c993fa4f162c255867250267de48.jpg|upload/sub_machine_img/f12ee9734e1edf70ed02d9829018b3d9.jpg|upload/sub_machine_img/d8330f857a17c53d217014ee776bfd50.jpg|upload/sub_machine_img/c3e4035af2a1cde9f21e1ae1951ac80b.jpg', 'upload/sub_machine_videos/015e31933548461020e2ba448e85995e.mp4|upload/sub_machine_videos/602d1305678a8d5fdb372271e980da6a.mp4|upload/sub_machine_videos/29530de21430b7540ec3f65135f7323c.mp4', 'upload/sub_machine_brochure/94130ea17023c4837f0dcdda95034b65.pdf', 'active', '2022-03-24 00:42:26', '2022-03-24 00:42:26'),
(6, 5, 'Stirrup Bending Machine', 'Digital Stirrup Bending Machine', '70,000', '<p><strong>Product Details:</strong></p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Brand</td>\r\n			<td>Unicorn</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Model Name/Number</td>\r\n			<td>GW 42</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Max Bending Angle</td>\r\n			<td>360 Degree</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Machine Weight</td>\r\n			<td>300 Kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Voltage</td>\r\n			<td>415V</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Motor Power</td>\r\n			<td>3 HP</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Motor Type</td>\r\n			<td>100% Copper Winding</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\nSttirup Bar Bending Machine&nbsp;offered by us are designed to bend the bar up-to 6mm to 32 mm. These bar bending machines are served in the capacity of 3HP Power. These machines are high on demand for Construction Job Site applications. The range of bar bending machines we offer renders smooth functioning for longer time period. In addition, the high performance of our reinforced bar bending machine with working rotation speed GW 42 is powered by 100% copper winding 3HP TEFC Induction electric motor running on 4P, 415 V. Our fully automatic bar bending machine is operated through manual button as well as automatic button and delivers stable performance with optimum safety.</p>', 'upload/sub_machine_img/970627414218ccff3497cb7a784288f5.jpg|upload/sub_machine_img/28b9f8aa9f07db88404721af4a5b6c11.jpg|upload/sub_machine_img/8fe6833df81e224e08ce9be4abfa89a0.jpg|upload/sub_machine_img/7296d81c3d5e425bc1785994bea8a0d2.jpg|upload/sub_machine_img/db182d2552835bec774847e06406bfa2.jpg|upload/sub_machine_img/825f9cd5f0390bc77c1fed3c94885c87.jpg|upload/sub_machine_img/a0046ad4c1bafc4ef04e41e755f28368.jpg|upload/sub_machine_img/54c3d58c5efcf59ddeb7486b7061ea5a.jpg|upload/sub_machine_img/3ce6d3c8830d27ec2e6a1936ecbaa514.jpg|upload/sub_machine_img/9399e0b02c73fcc14cd11d9b4e685f2e.jpg|upload/sub_machine_img/9e6adb1432c4a75a33d48693328e4159.jpg|upload/sub_machine_img/3eb65004054f5d21fca4087f5658c727.jpg', 'upload/sub_machine_videos/add5efc3f8de35d6208dc6fc154b59d3.mp4|upload/sub_machine_videos/31f81674a348511b990af268ca3a8391.mp4|upload/sub_machine_videos/84f2798f05d595273de40e3046329309.mp4', 'upload/sub_machine_brochure/ad9d4d2bc5365e856dcb6d78fb0c7cb5.pdf', 'active', '2022-03-24 00:53:27', '2022-03-24 00:53:27');

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
(2, 'user', 'rohit', 'rohit@gmail.com', NULL, '$2y$10$DyJ3AEWfIi.roBcloNt4UOtGAz14PJBcH84E9WnjTTSWN.O1CfPqC', NULL, NULL, '1234567890', 'Delhi', 'Male', NULL, '202203241026Stan1.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'inactive', NULL, NULL, NULL, '2021-10-07 07:10:08', '2022-03-24 04:56:18'),
(3, 'admin', 'vishwa', 'vishwa@gmail.com', NULL, '$2y$10$xzIAmW//MLLmZOtaZsLhNeIJTaMqDL9ZQY1PLjezDw8WHUcpv8G36', NULL, NULL, '8920352115', 'Delhi', 'Male', NULL, '202202281131202202241023avatar-4.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2021-10-09 03:07:54', '2022-02-28 11:31:37'),
(10, 'user', 'test', 'test@gmail.com', NULL, '$2y$10$4Vxwu/D3I/0K1ob73RzKp.2GSOhzAs3Lr00omQTQNoHOXKG3fzouy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2021-11-12 00:59:36', '2022-03-21 05:10:30'),
(11, 'user', 'yash', 'yash@gmail.com', NULL, '$2y$10$URXM0DpezsO724fDVtfZKOTaWTFfambl7TEEHYK2B0LKHkSbA1djK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2021-11-12 01:01:24', '2022-03-21 01:43:30'),
(14, 'user', 'test12', 'test12@gmail.com', NULL, '$2y$10$86FZikqHRfjic39KizuTCeGWThnjO5mCBMtrcSU/hsKrDGZIEgyei', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2022-03-21 00:33:57', '2022-03-21 01:37:04');

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
-- Indexes for table `main_categories`
--
ALTER TABLE `main_categories`
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
-- Indexes for table `proformas`
--
ALTER TABLE `proformas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_requests`
--
ALTER TABLE `service_requests`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `main_categories`
--
ALTER TABLE `main_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `proformas`
--
ALTER TABLE `proformas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_requests`
--
ALTER TABLE `service_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `submachines`
--
ALTER TABLE `submachines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
