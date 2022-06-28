-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2022 at 01:40 PM
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
-- Database: `unicorn2`
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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gallery_img_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_state_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_image` varchar(2500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_empty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `gallery_img_name`, `gallery_state_name`, `gallery_image`, `gallery_empty`, `created_at`, `updated_at`) VALUES
(2, 'sec image hfuhfddhvd', 'new delhi', '202204091147IMG-20191225-WA0028.jpg', NULL, '2022-04-09 06:17:05', '2022-04-09 06:17:05'),
(3, 'third image', 'up', '202204091153IMG-20200211-WA0008.jpg', NULL, '2022-04-09 06:23:58', '2022-04-09 06:23:58'),
(4, 'new image', 'jharkhand', '202204110600IMG-20191014-WA0087.jpg', NULL, '2022-04-11 00:30:39', '2022-04-11 00:30:39');

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
-- Table structure for table `machine_parts`
--

CREATE TABLE `machine_parts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parts_mainmachine` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parts_submachine` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parts_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parts_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parts_images` varchar(3000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parts_videos` varchar(3000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parts_status` enum('active','inactive') COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `parts_empty1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parts_empty2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `machine_parts`
--

INSERT INTO `machine_parts` (`id`, `parts_mainmachine`, `parts_submachine`, `parts_name`, `parts_description`, `parts_images`, `parts_videos`, `parts_status`, `parts_empty1`, `parts_empty2`, `created_at`, `updated_at`) VALUES
(1, 'bar bending machine', 'Mild Steel Bar Bending Machine', 'first parts', 'this is basic description of machine part one', 'upload/machine_parts/fa28c6cdf8dd6f41a657c3d7caa5c709.jpg|upload/machine_parts/1ae6464c6b5d51b363d7d96f97132c75.jpg|upload/machine_parts/6194a1ee187acd6606989f03769e8f7f.jpg', 'upload/machine_parts/8be6adae5ae0e157014d7d250870f212.mp4', 'active', NULL, NULL, '2022-04-08 02:27:13', '2022-04-08 02:27:13');

-- --------------------------------------------------------

--
-- Table structure for table `mainmachines`
--

CREATE TABLE `mainmachines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `main_cat_id` int(255) DEFAULT NULL,
  `machine_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `machine_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `machine_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `machine_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `machine_status` enum('active','inactive') COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mainmachines`
--

INSERT INTO `mainmachines` (`id`, `main_cat_id`, `machine_name`, `machine_price`, `machine_description`, `machine_image`, `machine_status`, `created_at`, `updated_at`) VALUES
(6, 8, 'BAR BENDING MACHINES', NULL, 'Manufacturer of a wide range of products which include tmt bar machine, bar bending machine, automatic rebar bender, gw bending machine, bar bending machine 32mm and mild steel bar bending machine.', '202204220729Layer 14.jpg', 'active', '2022-04-22 07:29:23', '2022-04-22 07:29:23'),
(7, 8, 'BAR CUTTING MACHINES', NULL, 'We are a leading Manufacturer of bar cutting machine, rebar cutting machine, rebar cutter, gq 40 bar cutting machine, bar cutter machine 32mm and bar cutting machine 42mm from Delhi, India.', '202204220825Layer 17.jpg', 'active', '2022-04-22 08:25:22', '2022-04-22 08:25:22'),
(8, 8, 'STIRRUP BAR BENDING MAHCINES', NULL, 'lorem lipsum', '202204220947tmt-ring-making-machine-500x500.jpeg', 'active', '2022-04-22 09:47:17', '2022-04-22 09:47:17'),
(10, 8, 'SCRAP STRAIGHTING MACHINES', NULL, 'lorem', '202204221000no_image.jpg', 'active', '2022-04-22 10:00:03', '2022-04-22 10:00:03'),
(11, 8, 'BAR THREADING MACHINES', NULL, NULL, '202204221012no_image.jpg', 'active', '2022-04-22 10:12:50', '2022-04-22 10:12:50'),
(12, 8, 'PORTABLE MACHINES', NULL, NULL, '202204221018no_image.jpg', 'active', '2022-04-22 10:18:14', '2022-04-22 10:18:14'),
(13, 9, 'CONCRETE CUTTING MACINE', NULL, NULL, '202204221023IMG-20200101-WA0012.jpg', 'active', '2022-04-22 10:23:02', '2022-04-22 10:23:17'),
(14, 9, 'POWER TROWEL CUM FLOATER', NULL, NULL, '202204221036no_image.jpg', 'active', '2022-04-22 10:36:08', '2022-04-22 10:36:08'),
(15, 9, 'CONCRETE VIBRATORY PAVER', NULL, 'pavers with vibrators are the most advanced machine used for all kind of pavement, road, square, airport to make the road smoothing. It is specially designed for road construction. It is a combination of the concrete roller paver and concrete vibrators. This unique design helps the machine to reduce large quantity needs of labors and highly improved the working efficiency.', '202204230627concrete-vibratory-paver-500x500.jpg', 'active', '2022-04-23 06:27:24', '2022-04-23 06:27:24'),
(16, 9, 'VIBRATORY SCREED', NULL, 'Vibrator is specially designed to improve the surface levelness of concrete floor or concrete road. Our concrete floor screed could be easily operated and greatly improve working efficiency. It\'s widely used in improving concrete surface levelness of standard factory, warehouse, parking lot, plaza, frame type building, residential housing interior floor and so on. Unicom concrete vibratory screeds are mainly used to promise exact flatness tolerances of concrete surface. It\'s specially designed to improve concrete floor or pavement levelness. Compared to the hand screed tool, it makes the concrete surface levelness better and has higher efficiency.', '202204230650screed-board-vibrator-500x500.jpg', 'active', '2022-04-23 06:50:14', '2022-04-23 06:50:14'),
(17, 9, 'VIBRATORY TRUSS SCREED', NULL, 'Unicorn truss screeds are designed for precise strike-off and consolidation of concrete surfaces where critical flatness are desired. The bolted construction throughout the screed sections allow for fast assembly without special tools. The T-bolt adjuster provides quick, precise adjustments for flat, crowned or inverted strike-off.', '202204230709concrete-truss-screed-machine-500x500.jpg', 'active', '2022-04-23 07:09:25', '2022-04-23 07:09:25'),
(18, 9, 'PLASTERING MACHINE', NULL, 'lorem lipsum', '202204230713no_image.jpg', 'active', '2022-04-23 07:13:34', '2022-04-23 07:13:34'),
(19, 10, 'PLATE COMPACTOR', NULL, 'The Unicorn reversible plate compactor is ideal for smaller jobs like trenches, retaining walls & other narrow areas or tight areas.', '202204230741reversible-plate-compactor-500x500.jpg', 'active', '2022-04-23 07:41:58', '2022-04-23 07:41:58'),
(20, 10, 'TAMPING RAMMER', NULL, 'Tamping Rammer feature the best forward-movement in the industry, helping contractors in all applications work productively and ultimately achieve compaction targets. The forward-moving ability makes them the tool of choice for contractors and rental agencies. The rammer also are so easy to use that operators of all experience levels are able to perform productively. They are more comfortable, too. because of the reduced-vibration handle. That lessens fatigue and ultimately proves to he another productivity booster. Unicorn Gasoline Tamping Rammer is used for tamping of engineering foundation and groove backfill in the field of road, public project, gas, water delivery, railway and so on.', '202204230818IMG-20200102-WA0027.png.jpg', 'active', '2022-04-23 08:18:08', '2022-04-23 08:18:08'),
(21, 10, 'SINGLE DRUM WALK BEHIND ROLLER', NULL, 'Walk Behind  Drum Roller. This is the roller that has gained exceptional value among our clients for durability and excellent quality. It is demanded in construction and maintenance operations on roads and grounds. We present the entire range in a variety of customized options, so as to meet different requirements of our prestigious clients. This roller can be availed from us at most reasonable prices.', '202204231000IMG-20200304-WA0005.jpg', 'active', '2022-04-23 10:00:42', '2022-04-23 10:00:42'),
(22, 10, 'DOUBLE DRUM WALK BEHIND ROLLER', NULL, 'Prominent & Leading Manufacturer from Delhi, we offer walk behind roller and double drum walk behind roller machine.', '202204231013IMG-20211214-WA0054.jpg', 'active', '2022-04-23 10:13:48', '2022-04-23 10:13:48'),
(23, 11, 'SUSPENDED PLATFORM', NULL, 'Pioneers in the industry, we offer suspended platform and access work platform from India.', '202204231051suspended-platform-500x500.jpg', 'active', '2022-04-23 10:51:07', '2022-04-23 10:51:07'),
(24, 10, 'DOUBLE DRUM RIDE ON ROLLER', NULL, NULL, '202204231142IMG-20191211-WA0022.jpg', 'active', '2022-04-23 11:42:37', '2022-04-23 11:42:37'),
(25, 8, 'SPIRAL BAR BENDING MACHINE', NULL, NULL, '202204270741no_image.jpg', 'active', '2022-04-27 07:41:24', '2022-04-27 07:41:24'),
(26, 13, 'OTHER EQUIPMENTS', NULL, NULL, '202204270805no_image.jpg', 'active', '2022-04-27 08:05:14', '2022-04-27 08:05:14');

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
(8, 'REBAR PROCCESING EQUIPMENTS', 'Manufacturer of a wide range of products which include tmt bar machine, bar bending machine, automatic rebar bender, gw bending machine, bar bending machine 32mm and mild steel bar bending machine.', 'upload/categories_data/e17184bcb70dcf3942c54e0b537ffc6d.png|upload/categories_data/42ffcf057e133f94c1b7b5cf543ef3bd.png|upload/categories_data/95c8ba4434e9db2bf3e20c639b04c56f.png|upload/categories_data/6e3197aae95c2ff8fcab35cb730f6a86.png|upload/categories_data/1a638db8311430c6c018bf21e1a0b7fb.png', 'active', NULL, '2022-04-22 06:04:27', '2022-06-06 04:43:15'),
(9, 'CONCRETE FLOORING EQUIPMENTS', 'Prominent & Leading Manufacturer from Delhi, we offer groove cutter, rcc concrete cutter machine, rcc cutting machine, unicorn gasoline concrete cutter, concrete road cutting machine and 10 hp concrete cutter.', 'upload/categories_data/ff0abbcc0227c9124a804b084d161a2d.png|upload/categories_data/13b919438259814cd5be8cb45877d577.png|upload/categories_data/2639c6bd2a42e714227b06646829d6ea.png|upload/categories_data/c629a1a0a891379024ac1a4e971baec1.png', 'active', NULL, '2022-04-22 06:08:52', '2022-06-06 04:43:51'),
(10, 'COMPACTION EQUIPMENTS', 'Offering you a complete choice of products which include reversible plate compactor.', 'upload/categories_data/b522259710151f8cc7870b970b4e0930.png|upload/categories_data/8ccf1fb8b09a8212bafea305cf5d5e9f.png|upload/categories_data/ea6979872125d5acbac6068f186a0359.png|upload/categories_data/86098ef82c97fa789a47a8d2e8800794.png|upload/categories_data/471684d6c43cfc529b30d600113dae63.png', 'active', NULL, '2022-04-22 06:16:28', '2022-06-06 04:44:20'),
(11, 'HANGING EQUIPMENTS', 'Pioneers in the industry, we offer suspended platform and access work platform from India.', 'upload/categories_data/5e62d03aec0d17facfc5355dd90d441c.png|upload/categories_data/cf77e1f8490495e9f8dedceaf372f969.png', 'active', NULL, '2022-04-22 06:18:46', '2022-06-06 04:44:48'),
(13, 'OTHER EQUIPMENTS', NULL, 'upload/categories_data/6d9cb7de5e8ac30bd5e8734bc96a35c1.jpg', 'active', NULL, '2022-04-27 08:04:11', '2022-04-27 08:04:11');

-- --------------------------------------------------------

--
-- Table structure for table `manage_credentials`
--

CREATE TABLE `manage_credentials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `credential_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `credential_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `empty1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manage_credentials`
--

INSERT INTO `manage_credentials` (`id`, `credential_name`, `credential_image`, `empty1`, `created_at`, `updated_at`) VALUES
(4, 'larsen & toubro', '202206270610unnamed (2)-03.png', NULL, '2022-06-27 00:40:58', '2022-06-27 00:40:58'),
(5, 'logo 2', '202206270611unnamed (2)-04.png', NULL, '2022-06-27 00:41:20', '2022-06-27 00:41:20'),
(6, 'AFCONS', '202206270614unnamed (2)-01.png', NULL, '2022-06-27 00:44:48', '2022-06-27 00:44:48'),
(7, 'Tata', '202206270615unnamed (2)-02.png', NULL, '2022-06-27 00:45:14', '2022-06-27 00:45:14'),
(8, 'kirloskar', '202206281122unnamed (2)-06.png', NULL, '2022-06-28 05:52:31', '2022-06-28 05:52:31'),
(9, 'GAAR', '202206281122unnamed (2)-12.png', NULL, '2022-06-28 05:52:55', '2022-06-28 05:52:55'),
(11, 'sadbav', '202206281124unnamed (2)-13.png', NULL, '2022-06-28 05:54:11', '2022-06-28 05:54:11'),
(12, 'Lombardini', '202206281124unnamed (2)-05.png', NULL, '2022-06-28 05:54:43', '2022-06-28 05:54:43'),
(13, 'Honda', '202206281125unnamed (2)-07.png', NULL, '2022-06-28 05:55:06', '2022-06-28 05:55:06'),
(14, 'logo2', '202206281125unnamed (2)-08.png', NULL, '2022-06-28 05:55:34', '2022-06-28 05:55:34'),
(15, 'Hcc', '202206281128unnamed (2)-09.png', NULL, '2022-06-28 05:58:48', '2022-06-28 05:58:48'),
(16, 'Gammon', '202206281129unnamed (2)-10.png', NULL, '2022-06-28 05:59:30', '2022-06-28 05:59:30'),
(17, 'shapporji', '202206281130unnamed (2)-14.png', NULL, '2022-06-28 06:00:05', '2022-06-28 06:00:05'),
(18, 'karloskar', '202206281131unnamed (2)-06.png', NULL, '2022-06-28 06:01:42', '2022-06-28 06:01:42');

-- --------------------------------------------------------

--
-- Table structure for table `manage_videos`
--

CREATE TABLE `manage_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `empty1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manage_videos`
--

INSERT INTO `manage_videos` (`id`, `video_name`, `gallery_video`, `empty1`, `created_at`, `updated_at`) VALUES
(2, 'first video', '202204110655VID-20200505-WA0008.mp4', NULL, '2022-04-11 01:25:47', '2022-04-11 01:25:47'),
(3, 'second video', '202204110703loader4.mp4', NULL, '2022-04-11 01:33:52', '2022-04-11 01:33:52');

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
(25, '2022_04_01_072551_create_service_requests_table', 12),
(26, '2022_04_04_062127_create_request_machines_table', 13),
(27, '2022_04_04_103919_create_machine_parts_table', 14),
(28, '2022_04_09_111754_create_galleries_table', 15),
(29, '2022_04_09_124138_create_manage_videos_table', 16);

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
-- Table structure for table `request_machines`
--

CREATE TABLE `request_machines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `request_username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `request_useremail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `request_userphone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `request_machine` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `request_submachine` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `request_quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `request_message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `request_submachine_id` varchar(2555) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `request_machines`
--

INSERT INTO `request_machines` (`id`, `request_username`, `request_useremail`, `request_userphone_number`, `request_machine`, `request_submachine`, `request_quantity`, `request_message`, `request_submachine_id`, `created_at`, `updated_at`) VALUES
(1, 'adil', 'adil@gmail.com', '7894561230', 'bar bending machine', 'Mild Steel Bar Bending Machine', '10', 'hell,message', '0', '2022-04-04 01:13:42', '2022-04-04 01:13:42'),
(2, 'vishwa', 'vishwa@gmail.com', '4567891230', 'Mild Steel Power Floater Machine', 'Concrete Power Trowel Cum Floater', '13', 'hello, test message', NULL, '2022-04-04 01:42:39', '2022-04-04 01:42:39'),
(9, 'rohit', 'rohit@gmail.com', '7894561230', 'Mild Steel Power Floater Machine', 'Concrete Power Trowel Cum Floater', '14', 'hthtrhtrh', '5', '2022-04-04 02:03:12', '2022-04-04 02:03:12'),
(10, 'vishwa', 'vishwa@gmail.com', '7894561230', 'bar bending machine', 'Mild Steel Bar Bending Machine', '14', 'htyhtyhythty', '4', '2022-04-08 05:29:30', '2022-04-08 05:29:30'),
(11, 'kef', 'n4jzscnm@icloud.com', '88227377832', NULL, NULL, NULL, 'Hi, this is Jenny. I am sending you my intimate photos as I promised. https://tinyurl.com/y42szwwa', NULL, '2022-04-30 09:46:42', '2022-04-30 09:46:42'),
(12, 'kef', 'n4jzscnm@icloud.com', '81299488673', NULL, NULL, NULL, 'Hi, this is Jenny. I am sending you my intimate photos as I promised. https://tinyurl.com/y42szwwa', NULL, '2022-04-30 09:46:45', '2022-04-30 09:46:45');

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
(7, 'test 2', 'test2@gmail.com', '+91123456859', 'fhfg fg hfg hfg h fgh fg', 'upload/website_services/654ad60ebd1ae29cedc37da04b6b0672.jpg|upload/website_services/d80126524c1e9641333502c664fc6ca1.jpg', 'upload/website_services/ad47a008a2f806aa6eb1b53852cd8b37.mp4', 'upload/website_services/2812e5cf6d8f21d69c91dddeefb792a7.pdf', 'on', NULL, NULL, '2022-04-01 05:00:06', '2022-04-01 05:00:06'),
(8, 'Vineet', 'vineet@gmail.com', '+912626622622', 'RZ : 12058/08 xyz nagar new delhi , 110045', 'upload/website_services/1354b84eca447ab194edadb895706bb0.jpg|upload/website_services/6c351da15b5e8a743a21ee96a86e25df.jpg', 'upload/website_services/8685549650016d9e1d14bf972262450b.mp4', 'upload/website_services/40cb228987243c91b2dd0b7c9c4a0856.pdf', 'on', NULL, NULL, '2022-04-02 04:32:02', '2022-04-02 04:32:02'),
(9, 'Vineet', 'vineet@gmail.com', '+912626622622', 'RZ : 12058/08 xyz nagar new delhi , 110045', 'upload/website_services/24146db4eb48c718b84cae0a0799dcfc.jpg|upload/website_services/df438e5206f31600e6ae4af72f2725f1.jpg', 'upload/website_services/4747f5ca63b8e8bd670b26e4b1573961.mp4', 'upload/website_services/cdbc9bca0a9fd93852571cced0089c4d.pdf', 'on', NULL, NULL, '2022-04-02 04:43:11', '2022-04-02 04:43:11'),
(10, 'dvdv', 'test2@gmail.com', '+91123456859', 'fgbgfbfgb', 'upload/website_services/7a7c6a5b2f18e21e23049634cec06c68.jpg|upload/website_services/d062f3e278a1fbba2303ff5a22e8c75e.jpg', 'upload/website_services/dffac38df13c3a801f1b8994f9303bcc.mp4', 'upload/website_services/570320a43e5d968459b6342c01498b81.pdf', 'on', NULL, NULL, '2022-04-09 03:33:21', '2022-04-09 03:33:21'),
(11, 'testuseremail', 'abc@gmail.com', '08920352115', 'wzabc nagar', 'upload/website_services/6d9cb7de5e8ac30bd5e8734bc96a35c1.jpg', NULL, 'upload/website_services/58ec72df0caca51df569d0b497c33805.pdf', NULL, NULL, NULL, '2022-06-13 01:53:30', '2022-06-13 01:53:30'),
(12, 'memebazzzar@gmail.com', 'abc@gmail.com', '08920352115', 'wzabc nagar', 'upload/website_services/51174add1c52758f33d414ceaf3fe6ba.jpg', NULL, 'upload/website_services/ddcbe25988981920c872c1787382f04d.pdf', NULL, NULL, NULL, '2022-06-13 01:54:12', '2022-06-13 01:54:12'),
(13, 'testuseremail', 'abc@gmail.com', '08920352115', 'wz 214 nagal raya delhi cantt', 'upload/website_services/cf05968255451bdefe3c5bc64d550517.jpg', NULL, NULL, NULL, NULL, NULL, '2022-06-14 23:43:36', '2022-06-14 23:43:36');

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
('5ip1C9dZD91fPZNXdU6x4QXEJhcqzbabgIaxxxpK', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.61 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiT3FKaGs2c3JGaDdIR2xITUpLNkRRZmZWc3ZMSU13QkNNckZFU0ZSdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1654513654),
('5iuKsHfjPXmvYjc4lUs7QjYPMrF7DpUxFfEdGdnc', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.115 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoieFg1dWJobDFyRTJONmlEVVlNWXp5Qmt6bEpSOEFVVExVaFRYenhEOCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCR4eklBbVcvL01MTG1aT3RhWnNMaE5lSUpUYU1xREw5WlFZMVBMamV6RHc4V0hVY3B2OEczNiI7fQ==', 1655269401),
('73fBr2vCd1nYnCumpfpNiuqPAqNHFpX2AMPscrDQ', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.53 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiVFhPY0hwTEpFd0wwRE80T05CUWxiM3dITnBBMGpCSng4V0ZTV21xRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9tYWlubWFjaGluZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCR4eklBbVcvL01MTG1aT3RhWnNMaE5lSUpUYU1xREw5WlFZMVBMamV6RHc4V0hVY3B2OEczNiI7fQ==', 1656416023),
('C7elSixFLB032C6YYkTBsCUy3sZfyXiJxdqrBKlS', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.53 Safari/537.36 Edg/103.0.1264.37', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiS3dzdWFYbFRJMEZ4YU5IWk9xSlptMlFUamFYcnhJc1JEVTl5UkhPcCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1656322218),
('dDkIiwpTeyVP8yUHKVfBp3tgo0b3bxyqq2gj7nBy', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.61 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicENiSHBOSzR1aXJyMEtDb2xWUm1RZHdTbXBTRHg0ekppN0YzYmZ5ayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1654492124),
('hzEbHewjwUUzHujzWxZhxiblmoxI6iJBOrud09kh', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.61 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoibUFKcWlmQ1AyNjdqVmpQZW9SemVPbnY2cTdwUVRTY3pSTlpvTG5YTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9zdWJtYWNoaW5lZGV0YWlsLzkiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTozO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkeHpJQW1XLy9NTExtWk90YVpzTGhOZUlKVGFNcURMOVpRWTFQTGplekR3OFdIVWNwdjhHMzYiO30=', 1654345498),
('p5u4n0C2OxZ9MtrjAsDK1eCCd1MlpFoavLodPTlz', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.115 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiU0dEd2hXdzVLOHBUbHB3UUExRUJsdk1Jb1NYT3FpOUhRb0J6Mmd0dSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9zZXJ2aWNlcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1655273252),
('UPTeaySN3803oGk98SEPTlfKXNsIIadh9uzBzMm0', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.115 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSWhTUlEySHlid2NFRE5FNEZNOFNSWFRZVm15eXFjVWhCQWtlQzNmNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9zdWJtYWNoaW5lZGV0YWlsLzciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1655098600);

-- --------------------------------------------------------

--
-- Table structure for table `submachines`
--

CREATE TABLE `submachines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `main_category_id` int(11) DEFAULT NULL,
  `main_machine_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_machine_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_machine_price` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(7, 8, 'BAR BENDING MACHINES', 'GW 42 BAR BENDING MACHINE', '80500', '<p><strong>Product Details:</strong></p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Minimum Order Quantity</td>\r\n			<td>1 pcs</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bar Dimensions</td>\r\n			<td>6 to 32&#39;mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Model Name/Number</td>\r\n			<td>GW 42</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Max Bending Angle</td>\r\n			<td>360</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Power Source</td>\r\n			<td>Mechanical Drive, Electric</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Machine Weight</td>\r\n			<td>300 kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Motor Capacity</td>\r\n			<td>3 HP</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\n<strong>Automatic Bar Bending Machine</strong>&nbsp;offered by us are designed to bend the bar upto 32mm to 35 mm.Thease bar bending machine (GW&nbsp; 42) are served in the capacity of 3HP Power.<br />\r\n<br />\r\nThese Machines are high on demand for construction job site applications.<br />\r\nThe range of bar bending machines we offer renders smooth functioning for t he longer time period.&nbsp;In addition, the high performance of our reinforced bar bending machine with working rotation speed. UNI 50B is powerd by 100% coppre winding 4.5 Kw/6HP TEFC induction electric motor running on 4P, 415V. our fully automoaticBar Bending Machine is operated through manual button as well as automatci buttion and delivers stable performance with optimum safety.<br />\r\n<br />\r\n<strong>Advantage:-</strong></p>\r\n\r\n<ul>\r\n	<li>The latest heavy duty gear box assembly, spindle is a maintenance free.&nbsp;</li>\r\n	<li>Column and spool adopt high quality alloy steel, high temperature quentching treatment, higher hardnessMore wear-resisting.</li>\r\n	<li>Increase heavy of discu and square steel, never deformation, bend bar more accurately.&nbsp;</li>\r\n	<li>Enclosed electric cabinet, moisture proof,&nbsp;</li>\r\n</ul>', 'upload/sub_machine_img/49afa3a1bba5280af6c4bf2fb5ea7669.jpg|upload/sub_machine_img/4fa177df22864518b2d7818d4db5db2d.jpg', 'upload/sub_machine_videos/1e591403ff232de0f0f139ac51d99295.mp4|upload/sub_machine_videos/e113bb92c69391dd39e2488f9f588382.mp4|upload/sub_machine_videos/16002f7a455a94aa4e91cc34ebdb9f2d.mp4', NULL, 'active', '2022-04-22 07:34:19', '2022-04-22 07:34:19'),
(8, 8, 'BAR BENDING MACHINES', 'UNI 40B BAR BENDING MAHCINE', '91000', '<p><strong>Product Details:</strong></p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Bar Bending Diameter</td>\r\n			<td>32mm TMT rebar and 35 mm plain bar</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Dimension</td>\r\n			<td>850 x 800 x 880 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Motor Power</td>\r\n			<td>4 kW / 5 HP</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Noise Value</td>\r\n			<td>Less than or equal to 80 dBA (1 m away)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Operation</td>\r\n			<td>Automatic</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Production Capacity</td>\r\n			<td>2 Ton/Ph</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Rotation Speed Of Motor</td>\r\n			<td>1440 R/min</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Speed Of Working Disc</td>\r\n			<td>8-11 R/min</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Type Of Motor</td>\r\n			<td>Copper Winding (Brake Motor)</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Weight</td>\r\n			<td>440 Kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Brand</td>\r\n			<td>Unicorn</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Model Name/Number</td>\r\n			<td>UNI 40B</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Automatic bar bending machines (UNI 40B &amp; UNI 50B) offered by us are designed to bend the bar upto 6 mm to 42 mm. These bar bending machine (UNI 40B &amp; UNI 50B) are served in the capacity of 4.5 kW/6HP Power. These machines are high on demand for Construction Job Site applications. The range of bar bending machines we offer renders smooth functioning for longer time period. In addition, the high performance of our reinforced bar bending machine with working rotation speed. UNI 42B &amp; UNI 50B is powered by 100% copper winding 4.5 kW/6HP TEFC Induction electric motor running on 4P, 415V. Our fully automatic Bar Bending Machine is operated through manual button as well as automatic button and delivers stable performance with optimum safety.<br />\r\n<br />\r\n<strong>Advantages:</strong></p>\r\n\r\n<ul>\r\n	<li>The latest heavy duty gear box assembly, spindle is a maintenance free.&nbsp;</li>\r\n	<li>Column and spool adopt high quality alloy steel, high temperature quenching treatment, higher hardness, more wear-resisting</li>\r\n	<li>Increase heavy of disc and square steel, never deformation, bend bar more accurately.&nbsp;</li>\r\n	<li>Enclosed electric cabinet, moisture proof, prevent dust, prevent leakage.</li>\r\n	<li>Thickening the dashboard, increase the integrity of the machine and longer service life</li>\r\n	<li>Rotary oil-way of work station makes add oil more conveniently.</li>\r\n	<li>Advanced electrical control panel with brake motor increases performance and durability.</li>\r\n	<li>Different bending bushes designed for various bending radius.</li>\r\n	<li>Ensures high durability at its user ends, effectively increases the production capacity.</li>\r\n	<li>Various sizes of bushes for bending diameter of bars.</li>\r\n	<li>Cost effective bending machines, used for bending reinforcement bars and different kind of round bars.</li>\r\n</ul>', 'upload/sub_machine_img/9b8ef27229c42198631813f1d2f60aaf.jpg|upload/sub_machine_img/8be627bc543fd91be4d7f26ee86f5ee9.jpg', 'upload/sub_machine_videos/a2802cade04644083dcde1c8c483ed9a.mp4|upload/sub_machine_videos/78719f11fa2df9917de3110133506521.mp4|upload/sub_machine_videos/487d4c6a324446b3fa45b30cfcee5337.mp4|upload/sub_machine_videos/c9f029a6a1b20a8408f372351b321dd8.mp4|upload/sub_machine_videos/a9883e7bb20e56060778cf794125afc4.mp4', 'upload/sub_machine_brochure/33a5435d4f945aa6154b31a73bab3b73.pdf', 'active', '2022-04-22 08:12:24', '2022-04-22 08:12:24'),
(9, 8, 'BAR BENDING MACHINES', 'UNI 50B BAR BENDING MAHCINE', '10000', '<p><strong>Product Details:</strong></p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Sound Level</td>\r\n			<td>80 dBA</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Country of Origin</td>\r\n			<td>Made in India</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Brand</td>\r\n			<td>Unicorn</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Size/Dimension</td>\r\n			<td>740x940x730 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Model Name/Number</td>\r\n			<td>UNI 50B</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Motor Capacity</td>\r\n			<td>2 Ton P/H</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Machine Weight</td>\r\n			<td>490 Kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Motor Speed</td>\r\n			<td>1440 RPM</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Max Bending Angle</td>\r\n			<td>360 Degree</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bar Dimensions</td>\r\n			<td>42 mm TMT Rebar and 45 mm Plain Bar</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\nAutomatic<strong>&nbsp;bar bending machines</strong>&nbsp;UNI 50B offered by us are designed to bend the bar up to 42 mm to 45 mm. This bar bending machine UNI 50B are served in the capacity of 6HP Power. These machines are high on demand for Construction Job Site applications. The range of bar bending machines we offer renders smooth functioning for longer time period. In addition, the high performance of our reinforced bar bending machine with working rotation speed UNI 50B is powered by 100% copper winding 6HP TEFC Induction electric motor running on 6P, 415 V. Our fully automatic Bar Bending Machine is operated through manual button as well as automatic button and delivers stable performance with optimum safety.</p>', 'upload/sub_machine_img/0234c510bc6d908b28c70ff313743079.jpg|upload/sub_machine_img/270edd69788dce200a3b395a6da6fdb7.jpg', 'upload/sub_machine_videos/ae3539867aaeec609a4260c6feb725f4.mp4', 'upload/sub_machine_brochure/c23497bd62a8f8a0981fdc9cbd3c30d9.pdf', 'active', '2022-04-22 08:16:11', '2022-04-22 08:16:11'),
(10, 8, 'BAR CUTTING MACHINES', 'GQ 40 REBAR CUTTING MACHINE', '67000', '<p><strong>Product Details:</strong></p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Dimension</td>\r\n			<td>2450 x 850 x 1250 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Brand</td>\r\n			<td>Unicorn</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Weight</td>\r\n			<td>350 Kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Cutting Range</td>\r\n			<td>32 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Cutting Speed</td>\r\n			<td>2800 RPM</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Model Name/Number</td>\r\n			<td>GQ 40</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Unicorn Equipment a unit of M/S global links is a unique name. which is engaged in presenting a wide range of&nbsp;<strong>bar cutting machine</strong>. This brings duty bar cutting machine with strong construction and high quality components. Rebar Cutting Machine Mainly used for construction site for flawless smooth functionality and easy operations.<br />\r\n<br />\r\nOur UNI series Products (UNI 40C, UNI 50C) can be used efficiently to cut plain carbon steel, hot rolled steel, screw bar, flat rebar, square and angle bar which are widely used in Construction Site. We back it up with local after-sales service in INDIA and readily available spares parts. The Shearing blades are made of high tensile cutting steel with heat treatment to ensure long blade life. Its small in size, Light in weight, reliable and compact structures. These machines are portable with provisions of wheels. We back it up with local after-sales service in India and readily available spares parts all over the world.<br />\r\n<br />\r\n<strong>Advantages:</strong></p>\r\n\r\n<ul>\r\n	<li>Unicorn Cutter (UNI 40C &amp; UNI 50C) adopts Gears, Shafts, Connection rod and Blades made of high -quality alloyed steel with required heat treatment and 15 mm thick external case to ensure reliable performance</li>\r\n	<li>Thick Blades to ensure accurate cutting with all kinds of steel bar (square blade or moon - shape blade option with press - spring) and blade can be replaced easily.</li>\r\n	<li>Clutch System is provided for your safety</li>\r\n	<li>Cost-effective, Compact machine body with Reliable quality</li>\r\n	<li>Reduce Labor cost and Low maintenance</li>\r\n	<li>Special tool steel cutting blades are carefully heat treated for a longer cutting Life.</li>\r\n	<li>Clutch System is provided for safety Purpose.</li>\r\n</ul>\r\n\r\n<p><br />\r\n<strong>Specifications:</strong></p>\r\n\r\n<table border=\"1\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>Model</p>\r\n			</td>\r\n			<td>\r\n			<p>UNI 40C</p>\r\n			</td>\r\n			<td>\r\n			<p>UNI 50C</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Cutting Capacity</p>\r\n			</td>\r\n			<td>\r\n			<p>&lt;&Oslash; 6-32 mm TMT Rebar</p>\r\n			</td>\r\n			<td>\r\n			<p>&lt;&Oslash; 6-42 mm TMT Rebar</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Type of Motor</p>\r\n			</td>\r\n			<td>\r\n			<p>Copper Winding Motor</p>\r\n			</td>\r\n			<td>\r\n			<p>Copper Winding Motor</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Motor Power/RPM</p>\r\n			</td>\r\n			<td>\r\n			<p>4 kW/5hp</p>\r\n			</td>\r\n			<td>\r\n			<p>4.5 kW/6hp</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Motor Safety</p>\r\n			</td>\r\n			<td>\r\n			<p>IP44, IP54, IP55</p>\r\n			</td>\r\n			<td>\r\n			<p>IP44, IP54, IP55</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Motor Rotation Speed</p>\r\n			</td>\r\n			<td>\r\n			<p>2860 R/min</p>\r\n			</td>\r\n			<td>\r\n			<p>2860 R/min</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Weight</p>\r\n			</td>\r\n			<td>\r\n			<p>430 Kg</p>\r\n			</td>\r\n			<td>\r\n			<p>535 Kg</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>External Dimensions</p>\r\n			</td>\r\n			<td>\r\n			<p>1300x450x680 mm</p>\r\n			</td>\r\n			<td>\r\n			<p>1430x470x750 mm</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Production Capacity</p>\r\n			</td>\r\n			<td>\r\n			<p>2.5 ton/Ph</p>\r\n			</td>\r\n			<td>\r\n			<p>2.5 ton/Ph</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'upload/sub_machine_img/8164d892d7aea8f1875df07f4d82ffd0.jpg', 'upload/sub_machine_videos/e334ea177458f7e0c7e6815079acf967.mp4|upload/sub_machine_videos/881c6efa917cff1c97a74e03e15f43e8.mp4', NULL, 'active', '2022-04-22 08:45:07', '2022-04-22 08:45:07'),
(11, 8, 'BAR CUTTING MACHINES', 'UNI 40C BAR CUTTING MACHINE', '85000', '<p><strong>Product Details:</strong></p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Weight</td>\r\n			<td>430 Kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Brand</td>\r\n			<td>Unicorn</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Item Weight</td>\r\n			<td>upto 535 Kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Rotation Speed Of Motor</td>\r\n			<td>2860 R/min</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Capacity</td>\r\n			<td>2.5 Ton/Hour</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Model</td>\r\n			<td>UNI 50C,UNI 40C</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\nWe are one of the leading manufacturers and suppliers of&nbsp;<strong>Bar Cutter Machine 32mm.</strong></p>', 'upload/sub_machine_img/30aaa42805c04522a16e12d7e5b87437.jpg|upload/sub_machine_img/6b27e88fdd7269394bca4968b48d8df4.jpg|upload/sub_machine_img/6b27e88fdd7269394bca4968b48d8df4.jpg|upload/sub_machine_img/f51dc802382ce2b548bf73ff0726a31d.jpg|upload/sub_machine_img/7302e3f5e7c072aea8801faf8a492be0.jpg|upload/sub_machine_img/0f3d014eead934bbdbacb62a01dc4831.jpg|upload/sub_machine_img/1d0787d664c95f8c2adb1da311af3c78.jpg', 'upload/sub_machine_videos/2217ad1dd50c1017d3df6b44b7c45508.mp4|upload/sub_machine_videos/c64a9829fa4638ff5de86330dd227e35.mp4|upload/sub_machine_videos/f7e0b956540676a129760a3eae309294.mp4|upload/sub_machine_videos/88a839f2f6f1427879fc33ee4acf4f66.mp4', 'upload/sub_machine_brochure/86d7c8a08b4aaa1bc7c599473f5dddda.pdf', 'active', '2022-04-22 09:33:10', '2022-04-22 09:33:10'),
(12, 8, 'BAR CUTTING MACHINES', 'UNI 50C BAR CUTTING MACHINE', '85000', '<p><strong>Product Details:</strong></p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Weight</td>\r\n			<td>430 Kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Brand</td>\r\n			<td>Unicorn</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Item Weight</td>\r\n			<td>upto 535 Kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Rotation Speed Of Motor</td>\r\n			<td>2860 R/min</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Capacity</td>\r\n			<td>2.5 Ton/Hour</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Model</td>\r\n			<td>UNI 50C,UNI 40C</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\nWe are one of the leading manufacturers and suppliers of&nbsp;<strong>Bar Cutter Machine 32mm.</strong></p>', 'upload/sub_machine_img/253614bbac999b38b5b60cae531c4969.jpg|upload/sub_machine_img/ef1e491a766ce3127556063d49bc2f98.jpg', NULL, NULL, 'active', '2022-04-22 09:35:59', '2022-04-22 09:35:59'),
(13, 8, 'STIRRUP BAR BENDING MAHCINES', 'UNI 20D STIRRUP BAR BENDING MACHINE', '50000', '<p><strong>Product Details:</strong></p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Angle Feed</td>\r\n			<td>Automatic</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bending Rebar Diameter</td>\r\n			<td>Upto 20 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Plate Diameter</td>\r\n			<td>360 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Present Angle</td>\r\n			<td>90 Degree / 135 Degree</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Motor Power</td>\r\n			<td>4 kW / 5HP</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Weight</td>\r\n			<td>320 Kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Brand</td>\r\n			<td>Unicorn</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Voltage</td>\r\n			<td>415V</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Model Name/Number</td>\r\n			<td>UNI 20D</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\n<strong>Stirrup Bending Machine&nbsp;</strong>has another name called Ring Making Machine. This machine is with a wide range of being used in building and construction industries. Stirrup making machine to some extent is one kind of bar bending machine, but it has some functions that the normal bending machine does not have. Stirrup bender can bend bar, rebar, reinforcing bar and steel within 180&deg; into different forms according to different settings, for example, triangle, quadrangle, pentagram, polygon, and ring. Besides, this machine can also bend metals into &quot;U&quot; shape. That&#39;s why stirrup bending machines are also called U-bending tools. Unicom automatic Stirrup Bending Machine is Most Durable, Rugged, Stable Bending Machine to bend dia from 4m.m to 20m.m. Bar Bending machine (GF-20) is specially designed for heavy Duty rebar and high on demand for construction job site application. Such as simple bending process, high work efficiency, convenient angle for adjustment and neat bending results.<br />\r\n<br />\r\nThe function of stirrup bending machine is to bend bars into varieties of shapes according to different requirements, such as rectangle, square and other simple shapes. Unicorn automatic stirrup bending machine can bend round steel bar with diameters from 4mm to 20mm. Both the processing scope and the external adjuster are optional, so this type of machine is quite convenient to use.<br />\r\n<br />\r\nUNI20 &amp; UNI20D are similar to each other. Their structure is relatively simple and their work capacity is relatively lower compared with the other two sizes of stirrup machines. But they are very flexible to operate. These bar machines have a button that can switch bending angles from 90&deg; to 135&deg; directly, because these two arcs are more often being used. Besides, our Unicorn stirrup machines are able to bend bars into any other angles with 180&deg;. Because GW20 &amp; GF20 are semi-automatic, they can be easily operated by hand to decide what arcs you want to make.<br />\r\n<br />\r\nGF20 is the machine with a numerical control panel from a wide range of round bar with diameters between 4mm and 20mm. You can set a certain angle within 180&deg; on the control panel. It is easy and reliable to operate. This automatic stirrup bender can save labor and improve efficiency of processing bars.<br />\r\n<br />\r\n<strong>Applications:</strong></p>\r\n\r\n<ul>\r\n	<li>UNI GW20 &amp; GF20 Steel bar bending machine can be used efficiently to bend ordinary carbon steel, hot-rolled steel, screw bar, flat bar, square bar and angle steel bar which are widely used in machining and construction project.</li>\r\n</ul>\r\n\r\n<p><br />\r\n<strong>Other details:</strong></p>\r\n\r\n<ul>\r\n	<li>Compact structure</li>\r\n	<li>Stable performance</li>\r\n	<li>Coppery motor</li>\r\n	<li>Flexible and easy to operate</li>\r\n	<li>Good steel work disk</li>\r\n	<li>High working efficiency</li>\r\n	<li>Strong durability</li>\r\n	<li>Easy to maintain</li>\r\n</ul>\r\n\r\n<p><br />\r\n<strong>Product Features:</strong></p>\r\n\r\n<ul>\r\n	<li>Adopts the 10mm thicken top plate and high rigidity disk of iron, more durable.</li>\r\n	<li>Equipped with international standard copper motor, ultra-high hardness accessory and adjustable fender.</li>\r\n	<li>Adopt 6mm thick top plate, high rigidity disk, adjustable stylobate, the bending angle of more efficient.</li>\r\n	<li>Equipped with international standard copper wire brake motor, narrowing inertance when the machine stops and bending angle is more accurate.</li>\r\n</ul>\r\n\r\n<ul>\r\n</ul>\r\n\r\n<p>Request</p>', 'upload/sub_machine_img/b3f61131b6eceeb2b14835fa648a48ff.jpeg', NULL, NULL, 'active', '2022-04-22 09:50:13', '2022-04-22 09:50:13'),
(14, 8, 'STIRRUP BAR BENDING MAHCINES', 'UNI 20 STIRRUP BAR BENDING MAHCINE', '30000', '<p><strong>Product Details:</strong></p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Angle Feed</td>\r\n			<td>Manual</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bending Rebar Diameter</td>\r\n			<td>Upto 20 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Motor Power</td>\r\n			<td>4 kW / 5 HP</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Plate Diameter</td>\r\n			<td>360 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Present Angle</td>\r\n			<td>90 Degree / 135 Degree</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Voltage</td>\r\n			<td>415V</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Weight</td>\r\n			<td>320 Kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Model Name/Number</td>\r\n			<td>UNI 20</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Brand</td>\r\n			<td>Unicorn</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\n<strong>Stirrup Bending Machine&nbsp;</strong>has another name called Ring Making Machine. This machine is with a wide range of being used in building and construction industries. Stirrup making machine to some extent is one kind of bar bending machine, but it has some functions that the normal bending machine does not have. Stirrup bender can bend bar, rebar, reinforcing bar and steel within 180&deg; into different forms according to different settings, for example, triangle, quadrangle, pentagram, polygon, and ring. Besides, this machine can also bend metals into &quot;U&quot; shape. That&#39;s why stirrup bending machines are also called U-bending tools. Unicom automatic Stirrup Bending Machine is Most Durable, Rugged, Stable Bending Machine to bend dia from 4m.m to 20m.m. Bar Bending machine (GF-20) is specially designed for heavy Duty rebar and high on demand for construction job site application. Such as simple bending process, high work efficiency, convenient angle for adjustment and neat bending results.<br />\r\n<br />\r\nThe function of stirrup bending machine is to bend bars into varieties of shapes according to different requirements, such as rectangle, square and other simple shapes. Unicorn automatic stirrup bending machine can bend round steel bar with diameters from 4mm to 20mm. Both the processing scope and the external adjuster are optional, so this type of machine is quite convenient to use.<br />\r\n<br />\r\nUNI20 &amp; UNI20D are similar to each other. Their structure is relatively simple and their work capacity is relatively lower compared with the other two sizes of stirrup machines. But they are very flexible to operate. These bar machines have a button that can switch bending angles from 90&deg; to 135&deg; directly, because these two arcs are more often being used. Besides, our Unicorn stirrup machines are able to bend bars into any other angles with 180&deg;. Because GW20 &amp; GF20 are semi-automatic, they can be easily operated by hand to decide what arcs you want to make.<br />\r\n<br />\r\nGF20 is the machine with a numerical control panel from a wide range of round bar with diameters between 4mm and 20mm. You can set a certain angle within 180&deg; on the control panel. It is easy and reliable to operate. This automatic stirrup bender can save labor and improve efficiency of processing bars.<br />\r\n<br />\r\n<strong>Applications:</strong></p>\r\n\r\n<ul>\r\n	<li>UNI GW20 &amp; GF20 Steel bar bending machine can be used efficiently to bend ordinary carbon steel, hot-rolled steel, screw bar, flat bar, square bar and angle steel bar which are widely used in machining and construction project.</li>\r\n</ul>\r\n\r\n<p><br />\r\n<strong>Other details:</strong></p>\r\n\r\n<ul>\r\n	<li>Compact structure</li>\r\n	<li>Stable performance</li>\r\n	<li>Coppery motor</li>\r\n	<li>Flexible and easy to operate</li>\r\n	<li>Good steel work disk</li>\r\n	<li>High working efficiency</li>\r\n	<li>Strong durability</li>\r\n	<li>Easy to maintain</li>\r\n</ul>\r\n\r\n<p><br />\r\n<strong>Product Features:</strong></p>\r\n\r\n<ul>\r\n	<li>Adopts the 10mm thicken top plate and high rigidity disk of iron, more durable.</li>\r\n	<li>Equipped with international standard copper motor, ultra-high hardness accessory and adjustable fender.</li>\r\n	<li>Adopt 6mm thick top plate, high rigidity disk, adjustable stylobate, the bending angle of more efficient.</li>\r\n	<li>Equipped with international standard copper wire brake motor, narrowing inertance when the machine stops and bending angle is more accurate.</li>\r\n</ul>', 'upload/sub_machine_img/f0d7053396e765bf52de12133cf1afe8.jpeg', NULL, NULL, 'active', '2022-04-22 09:52:02', '2022-04-22 09:52:02'),
(15, 8, 'STIRRUP BAR BENDING MAHCINES', 'UNI 20SP STIRRUP BAR BENDING MACHINE', '30000', '<p><strong>Product Details:</strong></p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Minimum Order Quantity</td>\r\n			<td>1 Unit</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Phase</td>\r\n			<td>Three or Single</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Weight</td>\r\n			<td>100</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Motor Power</td>\r\n			<td>5 HP</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Automation Grade</td>\r\n			<td>upto 20&#39;mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Brand</td>\r\n			<td>Unicorn</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Material</td>\r\n			<td>Stainless steel</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\n<strong>Stirrup Bending Machine&nbsp;</strong>has another name called Ring Making Machine. This machine is with a wide range of being used in building and construction industries. Stirrup making machine to some extent is one kind of bar bending machine, but it has some functions that the normal bending machine does not have. Stirrup bender can bend bar, rebar, reinforcing bar and steel within 180&deg; into different forms according to different settings, for example, triangle, quadrangle, pentagram, polygon, and ring. Besides, this machine can also bend metals into &quot;U&quot; shape. That&#39;s why stirrup bending machines are also called U-bending tools. Unicom automatic Stirrup Bending Machine is Most Durable, Rugged, Stable Bending Machine to bend dia from 4m.m to 20m.m. Bar Bending machine (GF-20) is specially designed for heavy Duty rebar and high on demand for construction job site application. Such as simple bending process, high work efficiency, convenient angle for adjustment and neat bending results.<br />\r\n<br />\r\nThe function of stirrup bending machine is to bend bars into varieties of shapes according to different requirements, such as rectangle, square and other simple shapes. Unicorn automatic stirrup bending machine can bend round steel bar with diameters from 4mm to 20mm. Both the processing scope and the external adjuster are optional, so this type of machine is quite convenient to use.<br />\r\n<br />\r\nGW20 &amp; GF20 are similar to each other. Their structure is relatively simple and their work capacity is relatively lower compared with the other two sizes of stirrup machines. But they are very flexible to operate. These bar machines have a button that can switch bending angles from 90&deg; to 135&deg; directly, because these two arcs are more often being used. Besides, our Unicorn stirrup machines are able to bend bars into any other angles with 180&deg;. Because GW20 &amp; GF20 are semi-automatic, they can be easily operated by hand to decide what arcs you want to make.<br />\r\n<br />\r\nGF20 is the machine with a numerical control panel from a wide range of round bar with diameters between 4mm and 20mm. You can set a certain angle within 180&deg; on the control panel. It is easy and reliable to operate. This automatic stirrup bender can save labor and improve efficiency of processing bars.<br />\r\n<br />\r\n<strong>Applications:</strong></p>\r\n\r\n<ul>\r\n	<li>UNI GW20 &amp; GF20 Steel bar bending machine can be used efficiently to bend ordinary carbon steel, hot-rolled steel, screw bar, flat bar, square bar and angle steel bar which are widely used in machining and construction project.</li>\r\n</ul>\r\n\r\n<p><br />\r\n<strong>Other details:</strong></p>\r\n\r\n<ul>\r\n	<li>Compact structure</li>\r\n	<li>Stable performance</li>\r\n	<li>Coppery motor</li>\r\n	<li>Flexible and easy to operate</li>\r\n	<li>Good steel work disk</li>\r\n	<li>High working efficiency</li>\r\n	<li>Strong durability</li>\r\n	<li>Easy to maintain</li>\r\n</ul>\r\n\r\n<p><br />\r\n<strong>Product Features:</strong></p>\r\n\r\n<ul>\r\n	<li>Adopts the 10mm thicken top plate and high rigidity disk of iron, more durable.</li>\r\n	<li>Equipped with international standard copper motor, ultra-high hardness accessory and adjustable fender.</li>\r\n	<li>Adopt 6mm thick top plate, high rigidity disk, adjustable stylobate, the bending angle of more efficient.</li>\r\n	<li>Equipped with international standard copper wire brake motor, narrowing inertance when the machine stops and bending angle is more accurate.</li>\r\n</ul>', 'upload/sub_machine_img/154f596a0e4aec4cf23ee4b76ae3d34a.jpeg', NULL, NULL, 'active', '2022-04-22 09:54:22', '2022-04-22 09:54:22'),
(16, 8, 'SCRAP STRAIGHTING MACHINES', 'UNI 4-12 SCRAP STRAIGHTING MACHINE', NULL, NULL, 'upload/sub_machine_img/6084e82a08cb979cf75ae28aed37ecd4.jpg', NULL, NULL, 'active', '2022-04-22 10:57:49', '2022-04-22 10:57:49'),
(17, 8, 'SCRAP STRAIGHTING MACHINES', 'UNI 6-14 SCRAP STRAIGHTING MACHINE', NULL, '<p>soon</p>', 'upload/sub_machine_img/0f3c5d0c3666eec8cd311bec6d878915.jpg', NULL, NULL, 'active', '2022-04-22 10:58:39', '2022-04-22 10:58:39'),
(18, 8, 'SCRAP STRAIGHTING MACHINES', 'UNI 8-16 SCRAP STRAIGHTINH MACHINE', NULL, '<p>soon</p>', 'upload/sub_machine_img/977b33ace8251dd9bee913e7ba56eebc.jpg', NULL, NULL, 'active', '2022-04-22 11:33:58', '2022-04-22 11:33:58'),
(19, 8, 'BAR THREADING MACHINES', 'UNI 16-40 BAR THREADING MACHINE', NULL, '<p>soon</p>', 'upload/sub_machine_img/8677065f187e98d8beacdc700e49f6ef.jpg', NULL, NULL, 'active', '2022-04-22 11:38:33', '2022-04-22 11:38:33'),
(20, 8, 'BAR THREADING MACHINES', 'UNI 45 BAR THREADING MACHINE WITH SENSOR', NULL, '<p>soon</p>', 'upload/sub_machine_img/c429429bf1f2af051f2021dc92a8ebea.jpg', NULL, NULL, 'active', '2022-04-22 11:39:44', '2022-04-22 12:14:53'),
(23, 8, 'PORTABLE MACHINES', 'UNI 40 PORTABLE BENDING MACHINE', NULL, '<p>soon</p>', 'upload/sub_machine_img/8fd7f981e10b41330b618129afcaab2d.jpg', NULL, NULL, 'active', '2022-04-22 12:16:31', '2022-04-22 12:16:31'),
(24, 8, 'PORTABLE MACHINES', 'UNI PORTABLE BENDING MACHINE', NULL, '<p>soon</p>', 'upload/sub_machine_img/74961657ae02e93fc17be9d9fc864620.jpg', NULL, NULL, 'active', '2022-04-22 12:17:45', '2022-04-22 12:17:45'),
(25, 8, 'PORTABLE MACHINES', 'UNI PORTABLE CUTTING MACHINE', NULL, '<p>soon</p>', 'upload/sub_machine_img/b1301141feffabac455e1f90a7de2054.jpg', NULL, NULL, 'active', '2022-04-22 12:18:25', '2022-04-22 12:18:25'),
(26, 8, 'PORTABLE MACHINES', 'UNI BAR TYING MACHINE', NULL, '<p>soon</p>', 'upload/sub_machine_img/21fe5b8ba755eeaece7a450849876228.jpg', NULL, NULL, 'active', '2022-04-22 12:18:55', '2022-04-22 12:18:55'),
(27, 9, 'CONCRETE CUTTING MACINE', 'CONCRETE CUTTER BASE 20 INCH', NULL, '<p>soon</p>', 'upload/sub_machine_img/067ee197a2aa979778923af77b40dd89.jpg', NULL, NULL, 'active', '2022-04-23 05:00:35', '2022-04-23 05:00:35'),
(28, 9, 'CONCRETE CUTTING MACINE', 'CONCRETE CUTTER BASE 25 INCH', NULL, '<p>soon</p>', 'upload/sub_machine_img/275d7fb2fd45098ad5c3ece2ed4a2824.jpg', NULL, NULL, 'active', '2022-04-23 05:01:12', '2022-04-23 05:01:12'),
(29, 9, 'CONCRETE CUTTING MACINE', 'CONCRETE CUTTER BASE 3O INCH', NULL, '<p>soon</p>', 'upload/sub_machine_img/4f0bf7b7b1aca9ad15317a0b4efdca14.jpg', NULL, NULL, 'active', '2022-04-23 05:02:06', '2022-04-23 05:02:06'),
(30, 9, 'POWER TROWEL CUM FLOATER', 'POWER TROWEL WITH SINGLE PHASE MOTOR', NULL, '<p>soon&nbsp;</p>\r\n\r\n<p dir=\"ltr\"><strong>&nbsp;POWER TROWEL WITH SINGLE PHASE MOTOR&nbsp;</strong></p>', 'upload/sub_machine_img/418db2ea5d227a9ea8db8e5357ca2084.jpg', NULL, NULL, 'active', '2022-04-23 05:12:19', '2022-04-23 05:12:19'),
(31, 9, 'POWER TROWEL CUM FLOATER', 'POWER TROWEL WITH THREE PHASE MOTOR', NULL, '<p>soon&nbsp;</p>\r\n\r\n<p dir=\"ltr\"><strong>&nbsp;POWER TROWEL WITH THREE PHASE MOTOR&nbsp;</strong></p>', 'upload/sub_machine_img/8e443d6819ae22b2d64f75266f535b59.jpg', NULL, NULL, 'active', '2022-04-23 06:02:12', '2022-04-23 06:02:12'),
(32, 9, 'POWER TROWEL CUM FLOATER', 'POWER TROWEL WITH GX 160 PETROL ENGINE', NULL, '<p>soon</p>\r\n\r\n<p dir=\"ltr\"><strong>&nbsp;POWER TROWEL WITH GX 160 PETROL ENGINE&nbsp;</strong></p>', 'upload/sub_machine_img/512c5cad6c37edb98ae91c8a76c3a291.jpg', NULL, NULL, 'active', '2022-04-23 06:03:17', '2022-04-23 06:03:17'),
(33, 9, 'POWER TROWEL CUM FLOATER', 'UNI DOUBLE POWER TROWEL WITH GX390 PETROL ENGINE', NULL, '<p>soon</p>\r\n\r\n<p><strong>UNI DOUBLE POWER TROWEL WITH GX390 PETROL ENGINE </strong></p>', 'upload/sub_machine_img/78d69f40906679a976dc4d45cebffbe6.jpg', NULL, NULL, 'active', '2022-04-23 06:04:30', '2022-04-23 06:04:30'),
(34, 9, 'POWER TROWEL CUM FLOATER', 'UNI WALL/HAND TROWEL', NULL, '<p>soon</p>\r\n\r\n<p dir=\"ltr\"><strong>UNI WALL/HAND TROWEL&nbsp;</strong></p>', 'upload/sub_machine_img/ab81265d898ef7f38a3e95fc98c2a669.jpg', NULL, NULL, 'active', '2022-04-23 06:05:13', '2022-04-23 06:05:13'),
(35, 9, 'POWER TROWEL CUM FLOATER', 'UNI RIDE ON TROWEL', NULL, '<p>soon&nbsp;</p>\r\n\r\n<p dir=\"ltr\"><strong>&nbsp;UNI RIDE ON TROWEL&nbsp;</strong></p>', 'upload/sub_machine_img/3bf29f38421bc1764e6f1d1545479f93.jpg', NULL, NULL, 'active', '2022-04-23 06:21:58', '2022-04-23 06:21:58'),
(36, 9, 'CONCRETE VIBRATORY PAVER', 'VIBRATORY PAVER WITH 8 NEEDLES (4M TW)', NULL, '<p>soon</p>\r\n\r\n<p dir=\"ltr\"><strong>&nbsp;VIBRATORY PAVER WITH 8 NEEDLES (4M TW)&nbsp;</strong></p>', 'upload/sub_machine_img/f18a6d1cde4b205199de8729a6637b42.jpg', NULL, NULL, 'active', '2022-04-23 06:29:19', '2022-04-23 06:29:19'),
(37, 9, 'CONCRETE VIBRATORY PAVER', 'VIBRATORY PAVER WITH 8 NEEDLES (4.5M TW)', NULL, '<p>soon&nbsp;</p>\r\n\r\n<p><strong>VIBRATORY PAVER WITH 8 NEEDLES (4.5M TW)</strong></p>', 'upload/sub_machine_img/4f5c422f4d49a5a807eda27434231040.jpg', NULL, NULL, 'active', '2022-04-23 06:39:46', '2022-04-23 06:39:46'),
(38, 9, 'CONCRETE VIBRATORY PAVER', 'VIBRATORY PAVER WITH 8 NEEDLES (5.5M TW)', NULL, '<p>soon</p>\r\n\r\n<p><strong>VIBRATORY PAVER WITH 8 NEEDLES (5.5M TW) </strong></p>', 'upload/sub_machine_img/eedc6ed006e6f49a7010013cc1fd8a3f.jpg', NULL, NULL, 'active', '2022-04-23 06:40:40', '2022-04-23 06:40:40'),
(39, 9, 'VIBRATORY SCREED', 'VIBRATORY SCREED WITH 1 MTR BLADE', NULL, '<p>soon</p>\r\n\r\n<p><strong>VIBRATORY SCREED WITH 1 MTR BLADE</strong></p>', 'upload/sub_machine_img/daa96d9681a21445772454cbddf0cac1.jpg', NULL, NULL, 'active', '2022-04-23 06:52:57', '2022-04-23 06:52:57'),
(40, 9, 'VIBRATORY SCREED', 'VIBRATORY SCREED WITH 3 MTR BLADE', NULL, '<p>soon&nbsp;</p>\r\n\r\n<p dir=\"ltr\"><strong>VIBRATORY SCREED WITH 3 MTR BLADE&nbsp;</strong></p>', 'upload/sub_machine_img/f9322b146574d9da9ad32ad879ad373b.jpg', NULL, NULL, 'active', '2022-04-23 06:54:23', '2022-04-23 06:54:23'),
(41, 9, 'VIBRATORY SCREED', 'VIBRATORY SCREED WITH 4 MTR BLADE', NULL, '<p>soon</p>\r\n\r\n<p><strong>&nbsp;VIBRATORY SCREED WITH 4 MTR BLADE </strong></p>', 'upload/sub_machine_img/d5438e589313fc0036bbc291299c6fd4.jpg', NULL, NULL, 'active', '2022-04-23 06:55:09', '2022-04-23 06:55:09'),
(42, 9, 'VIBRATORY TRUSS SCREED', 'VIBRATORY TRUSS SCREED', NULL, '<p><strong>Product Details:</strong></p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Center Beam Width</td>\r\n			<td>355 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Center Height</td>\r\n			<td>475 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Center Weight</td>\r\n			<td>26 kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>End Section</td>\r\n			<td>HE 15</td>\r\n		</tr>\r\n		<tr>\r\n			<td>End Section Length</td>\r\n			<td>1.5 m</td>\r\n		</tr>\r\n		<tr>\r\n			<td>End Section Weight</td>\r\n			<td>30 kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Fuel Tank</td>\r\n			<td>6 L</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Max Output</td>\r\n			<td>7 kW/5 HP</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Max Speed</td>\r\n			<td>3600 RPM</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Power Section</td>\r\n			<td>HP30</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Engine Type</td>\r\n			<td>Honda GX270/Electrical</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Brand</td>\r\n			<td>Unicorn</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\nUnicorn truss screeds are designed for precise strike-off and consolidation of concrete surfaces where critical flatness are desired. The bolted construction throughout the screed sections allow for fast assembly without special tools. The T-bolt adjuster provides quick, precise adjustments for flat, crowned or inverted strike-off.<br />\r\n<br />\r\n<strong>Special Features:</strong></p>\r\n\r\n<ul>\r\n	<li>High strength and light weight aluminum truss, reducing intensity of labor.</li>\r\n	<li>Fast connect system for assembly without special tools by one person.</li>\r\n	<li>Available length: 4-18 meters.</li>\r\n	<li>One side winches for 1 person operation</li>\r\n</ul>', 'upload/sub_machine_img/dba1cdfcf6359389d170caadb3223ad2.jpg|upload/sub_machine_img/53edebc543333dfbf7c5933af792c9c4.png', 'upload/sub_machine_videos/7297f44a1c4443049b235b59ac3ebadd.mp4|upload/sub_machine_videos/d14c2267d848abeb81fd590f371d39bd.mp4', 'upload/sub_machine_brochure/019f8b946a256d9357eadc5ace2c8678.pdf', 'active', '2022-04-23 07:11:02', '2022-04-23 07:11:02'),
(43, 9, 'PLASTERING MACHINE', 'UNI 50M PLASTERING MACHINE', NULL, '<p>soon&nbsp;</p>\r\n\r\n<p><strong>UNI 50M PLASTERING MACHINE</strong></p>', 'upload/sub_machine_img/98c7242894844ecd6ec94af67ac8247d.jpg', NULL, NULL, 'active', '2022-04-23 07:14:15', '2022-04-23 07:14:15'),
(44, 10, 'PLATE COMPACTOR', 'UNI PLATE COMPACTOR', NULL, '<p>soon</p>\r\n\r\n<p><strong>&nbsp;UNI PLATE COMPACTOR </strong></p>', 'upload/sub_machine_img/16475e51b4ac5c7c9d726d9efb3642f2.jpg', NULL, NULL, 'active', '2022-04-23 07:47:37', '2022-04-23 07:47:37'),
(45, 10, 'PLATE COMPACTOR', 'UNI M PLATE COMPATOR', NULL, '<p>soon</p>\r\n\r\n<p><strong>UNI M PLATE COMPATOR</strong></p>', 'upload/sub_machine_img/0af787945872196b42c9f73ead2565c8.jpg', NULL, NULL, 'active', '2022-04-23 07:50:50', '2022-04-23 07:50:50'),
(46, 10, 'PLATE COMPACTOR', 'UNI REVERSIBALE PLATE COMAPCTOR WITH HONDA ENGINE', '80000', '<p><strong>Product Details:</strong></p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Compacting Plate Size</td>\r\n			<td>700 x 370 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Compaction Capacity</td>\r\n			<td>6.8 Ton</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Dimension</td>\r\n			<td>800 x 500 x 1000 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Fuel Tank</td>\r\n			<td>3 L</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Max Output</td>\r\n			<td>5.5 / 6.5 HP</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Max Speed</td>\r\n			<td>3600 RPM</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Model</td>\r\n			<td>UNI 150</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Weight</td>\r\n			<td>160 Kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Vibration Frequency</td>\r\n			<td>50 Hz</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Engine Type</td>\r\n			<td>Honda GX 160/ Greaves/ Changfa</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Depth Effect</td>\r\n			<td>16 inch approx</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Centrifugal Force</td>\r\n			<td>30 kN</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Power</td>\r\n			<td>7 kW</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Brand</td>\r\n			<td>Unicorn</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\n<strong>Reversible Plate compactor for soil compaction (UNI150)</strong>:<br />\r\nThe Unicorn reversible plate compactor is ideal for smaller jobs like trenches, retaining walls &amp; other narrow areas or tight areas.<br />\r\n<br />\r\nThe Vibratory Plate Compactor (Reversible) is designed for compacting loose, granular soils, gravel, paving stones &amp; asphalt. It is intended to be used in confined areas &amp; areas next to structures such as walls, curbs, &amp; foundations. Plate Compactors with water tank can be used for compacting asphalt. The Plate compactor is not recommended for the compaction of cohesive soils with heavy day content. For cohesive soils, use a Tamping Rammer.<br />\r\n<br />\r\n<strong>Advantages:</strong></p>\r\n\r\n<ul>\r\n	<li>Reverse plate compactor makes it more convenient to operate.</li>\r\n	<li>Ductile iron base plate provides better durability.</li>\r\n	<li>Open plate provides self cleaning.</li>\r\n	<li>Radius base plate for easy access to corners.</li>\r\n	<li>Sealed belt cover to prevent sand and soil in.</li>\r\n	<li>Heavy-duty shock mounts reduce vibration to the upper engine &amp; handle.</li>\r\n	<li>Plate compactor with wear-resistant base plates open design reduces dirt building.</li>\r\n	<li>Plate compactor with wrap around protection frame protects the compactor from accidental job-site damage.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Applications:</strong></p>\r\n\r\n<ul>\r\n	<li>Roadside</li>\r\n	<li>Foundation Structure</li>\r\n	<li>Compaction Asphalt</li>\r\n	<li>Concrete</li>\r\n</ul>\r\n\r\n<p><br />\r\n<strong>Special Features:</strong></p>\r\n\r\n<ul>\r\n	<li>Handle moves to a vertical position for use in tight spaces</li>\r\n	<li>5.5 HP Honda Gx160 engine provides high power and low fuel consumption.</li>\r\n	<li>3 3/16in. x 14 3/4in. Compacting Plate is ideal for smaller jobs.</li>\r\n</ul>\r\n\r\n<ul>\r\n</ul>', 'upload/sub_machine_img/9b523b0c92185f39a0da77a82c51b46a.jpg|upload/sub_machine_img/3e77a14629775492504515dc4b23deda.jpg|upload/sub_machine_img/3b777b775721dfa8d36de2a320a03e53.jpg|upload/sub_machine_img/3f2dff7862a70f97a59a1fa02c3ec110.jpg|upload/sub_machine_img/7d571e5c15bad5ef8c4352ce7a1d9e78.jpg|upload/sub_machine_img/d58f36f7679f85784d8b010ff248f898.jpg', 'upload/sub_machine_videos/53a1320cb5d2f56130ad5222f93da374.mp4|upload/sub_machine_videos/7551617774bcd665e4abe990db4f6f83.mp4|upload/sub_machine_videos/b4d6f2b565ca0eef1f9245403aac366a.mp4|upload/sub_machine_videos/02f063c236c7eef66324b432b748d15d.mp4|upload/sub_machine_videos/198dd5fb9c43b2d29a548f8c77e85cf9.mp4|upload/sub_machine_videos/dc5d637ed5e62c36ecb73b654b05ba2a.mp4|upload/sub_machine_videos/a76da37101dffabe00e5d636c01719b6.mp4|upload/sub_machine_videos/83462e22a65e7e34975bbf2b639333ec.mp4', 'upload/sub_machine_brochure/eb7ef0469ad23a2c5782e8770da04529.pdf', 'active', '2022-04-23 08:04:43', '2022-04-23 08:04:43'),
(47, 10, 'PLATE COMPACTOR', 'UNI REVERSIBALE PLATE COMPACTOR WITH GREAVES DIESEL ENGINE', NULL, '<p><strong>Product Details:</strong></p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Compacting Plate Size</td>\r\n			<td>700 x 370 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Compaction Capacity</td>\r\n			<td>6.8 Ton</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Dimension</td>\r\n			<td>800 x 500 x 1000 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Fuel Tank</td>\r\n			<td>3 L</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Max Output</td>\r\n			<td>5.5 / 6.5 HP</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Max Speed</td>\r\n			<td>3600 RPM</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Model</td>\r\n			<td>UNI 150</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Weight</td>\r\n			<td>160 Kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Vibration Frequency</td>\r\n			<td>50 Hz</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Engine Type</td>\r\n			<td>Honda GX 160/ Greaves/ Changfa</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Depth Effect</td>\r\n			<td>16 inch approx</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Centrifugal Force</td>\r\n			<td>30 kN</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Power</td>\r\n			<td>7 kW</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Brand</td>\r\n			<td>Unicorn</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\n<strong>Reversible Plate compactor for soil compaction (UNI150)</strong>:<br />\r\nThe Unicorn reversible plate compactor is ideal for smaller jobs like trenches, retaining walls &amp; other narrow areas or tight areas.<br />\r\n<br />\r\nThe Vibratory Plate Compactor (Reversible) is designed for compacting loose, granular soils, gravel, paving stones &amp; asphalt. It is intended to be used in confined areas &amp; areas next to structures such as walls, curbs, &amp; foundations. Plate Compactors with water tank can be used for compacting asphalt. The Plate compactor is not recommended for the compaction of cohesive soils with heavy day content. For cohesive soils, use a Tamping Rammer.<br />\r\n<br />\r\n<strong>Advantages:</strong></p>\r\n\r\n<ul>\r\n	<li>Reverse plate compactor makes it more convenient to operate.</li>\r\n	<li>Ductile iron base plate provides better durability.</li>\r\n	<li>Open plate provides self cleaning.</li>\r\n	<li>Radius base plate for easy access to corners.</li>\r\n	<li>Sealed belt cover to prevent sand and soil in.</li>\r\n	<li>Heavy-duty shock mounts reduce vibration to the upper engine &amp; handle.</li>\r\n	<li>Plate compactor with wear-resistant base plates open design reduces dirt building.</li>\r\n	<li>Plate compactor with wrap around protection frame protects the compactor from accidental job-site damage.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Applications:</strong></p>\r\n\r\n<ul>\r\n	<li>Roadside</li>\r\n	<li>Foundation Structure</li>\r\n	<li>Compaction Asphalt</li>\r\n	<li>Concrete</li>\r\n</ul>\r\n\r\n<p><br />\r\n<strong>Special Features:</strong></p>\r\n\r\n<ul>\r\n	<li>Handle moves to a vertical position for use in tight spaces</li>\r\n	<li>5.5 HP Honda Gx160 engine provides high power and low fuel consumption.</li>\r\n	<li>3 3/16in. x 14 3/4in. Compacting Plate is ideal for smaller jobs.</li>\r\n</ul>\r\n\r\n<ul>\r\n</ul>', 'upload/sub_machine_img/937ea3f7714dc0d01475da7bff33b596.jpg|upload/sub_machine_img/c94a589bdd47870b1d74b258d1ce3b33.jpg|upload/sub_machine_img/526c321538d951fe8d2b9abf54dbdb91.jpg|upload/sub_machine_img/735143e9ff8c47def504f1ba0442df98.jpg|upload/sub_machine_img/aebf7782a3d445f43cf30ee2c0d84dee.jpg', 'upload/sub_machine_videos/8de4aa6f66a39065b3fac4aa58feaccd.mp4|upload/sub_machine_videos/a36b598abb934e4528412e5a2127b931.mp4|upload/sub_machine_videos/7e6ff0205749bc6025b51155e26f6ced.mp4|upload/sub_machine_videos/9087cd8bfa9c1968b20d8f6d0b81cbbb.mp4', 'upload/sub_machine_brochure/cdd96eedd7f695f4d61802f8105ba2b0.pdf', 'active', '2022-04-23 08:14:11', '2022-04-23 08:14:11');
INSERT INTO `submachines` (`id`, `main_category_id`, `main_machine_name`, `sub_machine_name`, `sub_machine_price`, `sub_machine_description`, `sub_machine_image`, `sub_machine_video`, `sub_machine_brochure`, `sub_machine_status`, `created_at`, `updated_at`) VALUES
(48, 10, 'TAMPING RAMMER', 'UNI 100 TAMPING RAMMER', NULL, '<p><strong>Product Details:</strong></p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Brand</td>\r\n			<td>Unicorn</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Impluse Force</td>\r\n			<td>14 kN</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Operating Weight</td>\r\n			<td>83 Kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Fuel Tank Capacity</td>\r\n			<td>3 L</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Oil Tank Capacity</td>\r\n			<td>0.7 L</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Dimension</td>\r\n			<td>900*510*1150 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Shoe Size</td>\r\n			<td>335*285 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Forward Speed</td>\r\n			<td>10-13m/min</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Jumping Stroke</td>\r\n			<td>350*150*1.5 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Diameter Of Finish Disc</td>\r\n			<td>40-80 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Engine Model</td>\r\n			<td>GX160/GX100</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Fuel Consumption</td>\r\n			<td>1.2 l/h</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\nHonda engine vibrating&nbsp;<strong>Tamping Rammer</strong>&nbsp;for soil compaction (UM 100) Unicorn Gasoline Tamping Rammer features the best forward-movement in the industry, helping contractors in all applications work productively and ultimately achieve compaction targets. The forward-moving ability makes them the tool of choice for contractors and rental agencies. The rammer also are so easy to use that operators of all experience levels are able to perform productively. They are more comfortable, too, because of the reduced-vibration handle. That lessens fatigue and ultimately proves to be another productivity booster. Unicorn Gasoline Tamping Rammer is used for tamping of engineering foundation and groove backfill in the field of road, public project, gas, water delivery, railway and so on.<br />\r\n<br />\r\n<strong>Features:</strong></p>\r\n\r\n<ul>\r\n	<li>Honda engine, excellent performance.</li>\r\n	<li>High strength spring, large amplitude jump, and strong pounding power</li>\r\n	<li>High strength base plate design, the hardness, and softness is moderate, which is durable.</li>\r\n	<li>The noise reducing cover lowers the amount of engine and shoe noise transmitted to the operator.</li>\r\n	<li>The large capacity and corrosion-proof fuel tank is equipped with a self-cleaning in-tank filter. That means long service life and minimum maintenance.</li>\r\n	<li>For added operator convenience, a single lever controls start-up, speed, and engine shut-off.</li>\r\n	<li>The handle, the height, proper shoes and a low center of gravity that enables control make the Unicorn Gasoline Tamping Rammer easy to operate regardless of experience level.</li>\r\n	<li>The shoes are easy to switch, too; all that&#39;s required is the removal of four screws.</li>\r\n	<li>A reduced-vibration handle prevents operator fatigue. In addition, the handle can be gripped from all sides, enabling easy access to tight spaces. The operator can turn the machine 180 degrees to reach tight areas while maintaining, optimal control of the rammer at all times.</li>\r\n	<li>A patented process enables rammer height to be easily adjusted, a significant benefit as the operator attempts t maximize manoeuvrability and comfort throughout the shift.</li>\r\n</ul>\r\n\r\n<p><br />\r\n<strong>Applications:</strong></p>\r\n\r\n<ul>\r\n	<li>Trench Compaction</li>\r\n	<li>Back Filling</li>\r\n	<li>Pipe Work</li>\r\n	<li>Foundation Work</li>\r\n	<li>Patch Work on Roads</li>\r\n	<li>Confined Areas</li>\r\n</ul>\r\n\r\n<p><br />\r\n<strong>Product Parameter:</strong></p>\r\n\r\n<ul>\r\n	<li>Honda Engine, 5.5Hp Horse Power, Easy to Change Spare Parts &amp; Lower Cost</li>\r\n	<li>High-Quality Aluminium Alloy Box, Impact Resistance, Long Working Time</li>\r\n	<li>Original Import Dust Cover, Strong &amp; Durable</li>\r\n</ul>', 'upload/sub_machine_img/c97e7a5153badb6576d8939469f58336.png|upload/sub_machine_img/77340c2e00e9e6ad1b2784dad06291ea.jpg|upload/sub_machine_img/79a3308b13cd31f096d8a4a34f96b66b.jpg|upload/sub_machine_img/8133415ea4647b6345849fb38311cf32.jpg', 'upload/sub_machine_videos/8b6a80c3cf2cbd5f967063618dc54f39.mp4|upload/sub_machine_videos/f449d27f42a9b2a25b247ac15989090f.mp4|upload/sub_machine_videos/ce65f40e3a20ad19fe352c52ce3bcf51.mp4', 'upload/sub_machine_brochure/85f66a7cda62391535fa2bd56811b806.pdf', 'active', '2022-04-23 09:51:08', '2022-04-23 09:51:08'),
(49, 10, 'TAMPING RAMMER', 'UNI 100M TAMPING RAMMER', NULL, '<p><strong>Product Details:</strong></p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Brand</td>\r\n			<td>Unicorn</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Impluse Force</td>\r\n			<td>14 kN</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Operating Weight</td>\r\n			<td>83 Kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Fuel Tank Capacity</td>\r\n			<td>3 L</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Oil Tank Capacity</td>\r\n			<td>0.7 L</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Dimension</td>\r\n			<td>900*510*1150 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Shoe Size</td>\r\n			<td>335*285 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Forward Speed</td>\r\n			<td>10-13m/min</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Jumping Stroke</td>\r\n			<td>350*150*1.5 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Diameter Of Finish Disc</td>\r\n			<td>40-80 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Engine Model</td>\r\n			<td>GX160/GX100</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Fuel Consumption</td>\r\n			<td>1.2 l/h</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\nHonda engine vibrating&nbsp;<strong>Tamping Rammer</strong>&nbsp;for soil compaction (UM 100) Unicorn Gasoline Tamping Rammer features the best forward-movement in the industry, helping contractors in all applications work productively and ultimately achieve compaction targets. The forward-moving ability makes them the tool of choice for contractors and rental agencies. The rammer also are so easy to use that operators of all experience levels are able to perform productively. They are more comfortable, too, because of the reduced-vibration handle. That lessens fatigue and ultimately proves to be another productivity booster. Unicorn Gasoline Tamping Rammer is used for tamping of engineering foundation and groove backfill in the field of road, public project, gas, water delivery, railway and so on.<br />\r\n<br />\r\n<strong>Features:</strong></p>\r\n\r\n<ul>\r\n	<li>Honda engine, excellent performance.</li>\r\n	<li>High strength spring, large amplitude jump, and strong pounding power</li>\r\n	<li>High strength base plate design, the hardness, and softness is moderate, which is durable.</li>\r\n	<li>The noise reducing cover lowers the amount of engine and shoe noise transmitted to the operator.</li>\r\n	<li>The large capacity and corrosion-proof fuel tank is equipped with a self-cleaning in-tank filter. That means long service life and minimum maintenance.</li>\r\n	<li>For added operator convenience, a single lever controls start-up, speed, and engine shut-off.</li>\r\n	<li>The handle, the height, proper shoes and a low center of gravity that enables control make the Unicorn Gasoline Tamping Rammer easy to operate regardless of experience level.</li>\r\n	<li>The shoes are easy to switch, too; all that&#39;s required is the removal of four screws.</li>\r\n	<li>A reduced-vibration handle prevents operator fatigue. In addition, the handle can be gripped from all sides, enabling easy access to tight spaces. The operator can turn the machine 180 degrees to reach tight areas while maintaining, optimal control of the rammer at all times.</li>\r\n	<li>A patented process enables rammer height to be easily adjusted, a significant benefit as the operator attempts t maximize manoeuvrability and comfort throughout the shift.</li>\r\n</ul>\r\n\r\n<p><br />\r\n<strong>Applications:</strong></p>\r\n\r\n<ul>\r\n	<li>Trench Compaction</li>\r\n	<li>Back Filling</li>\r\n	<li>Pipe Work</li>\r\n	<li>Foundation Work</li>\r\n	<li>Patch Work on Roads</li>\r\n	<li>Confined Areas</li>\r\n</ul>\r\n\r\n<p><br />\r\n<strong>Product Parameter:</strong></p>\r\n\r\n<ul>\r\n	<li>Honda Engine, 5.5Hp Horse Power, Easy to Change Spare Parts &amp; Lower Cost</li>\r\n	<li>High-Quality Aluminium Alloy Box, Impact Resistance, Long Working Time</li>\r\n	<li>Original Import Dust Cover, Strong &amp; Durable</li>\r\n</ul>', 'upload/sub_machine_img/e2c4c0b38669387a2a842e1fe391d233.png|upload/sub_machine_img/95c3f1a8b262ec7a929a8739e21142d7.jpg|upload/sub_machine_img/55a0df4b5a1786cd13a7a8de759859d4.jpg|upload/sub_machine_img/1579779b98ce9edb98dd85606f2c119d.jpg', 'upload/sub_machine_videos/28498620653e59a7e22c2b50748e2766.mp4|upload/sub_machine_videos/68a83eeb494a308fe5295da69428a507.mp4', 'upload/sub_machine_brochure/ce46f09027b218b46063eb2b858f622d.pdf', 'active', '2022-04-23 09:55:50', '2022-04-23 09:55:50'),
(50, 10, 'TAMPING RAMMER', 'UNI 100M SP TAMPING RAMMER', NULL, '<p><strong>Product Details:</strong></p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Brand</td>\r\n			<td>Unicorn</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Impluse Force</td>\r\n			<td>14 kN</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Operating Weight</td>\r\n			<td>83 Kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Fuel Tank Capacity</td>\r\n			<td>3 L</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Oil Tank Capacity</td>\r\n			<td>0.7 L</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Dimension</td>\r\n			<td>900*510*1150 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Shoe Size</td>\r\n			<td>335*285 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Forward Speed</td>\r\n			<td>10-13m/min</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Jumping Stroke</td>\r\n			<td>350*150*1.5 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Diameter Of Finish Disc</td>\r\n			<td>40-80 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Engine Model</td>\r\n			<td>GX160/GX100</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Fuel Consumption</td>\r\n			<td>1.2 l/h</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\nHonda engine vibrating&nbsp;<strong>Tamping Rammer</strong>&nbsp;for soil compaction (UM 100) Unicorn Gasoline Tamping Rammer features the best forward-movement in the industry, helping contractors in all applications work productively and ultimately achieve compaction targets. The forward-moving ability makes them the tool of choice for contractors and rental agencies. The rammer also are so easy to use that operators of all experience levels are able to perform productively. They are more comfortable, too, because of the reduced-vibration handle. That lessens fatigue and ultimately proves to be another productivity booster. Unicorn Gasoline Tamping Rammer is used for tamping of engineering foundation and groove backfill in the field of road, public project, gas, water delivery, railway and so on.<br />\r\n<br />\r\n<strong>Features:</strong></p>\r\n\r\n<ul>\r\n	<li>Honda engine, excellent performance.</li>\r\n	<li>High strength spring, large amplitude jump, and strong pounding power</li>\r\n	<li>High strength base plate design, the hardness, and softness is moderate, which is durable.</li>\r\n	<li>The noise reducing cover lowers the amount of engine and shoe noise transmitted to the operator.</li>\r\n	<li>The large capacity and corrosion-proof fuel tank is equipped with a self-cleaning in-tank filter. That means long service life and minimum maintenance.</li>\r\n	<li>For added operator convenience, a single lever controls start-up, speed, and engine shut-off.</li>\r\n	<li>The handle, the height, proper shoes and a low center of gravity that enables control make the Unicorn Gasoline Tamping Rammer easy to operate regardless of experience level.</li>\r\n	<li>The shoes are easy to switch, too; all that&#39;s required is the removal of four screws.</li>\r\n	<li>A reduced-vibration handle prevents operator fatigue. In addition, the handle can be gripped from all sides, enabling easy access to tight spaces. The operator can turn the machine 180 degrees to reach tight areas while maintaining, optimal control of the rammer at all times.</li>\r\n	<li>A patented process enables rammer height to be easily adjusted, a significant benefit as the operator attempts t maximize manoeuvrability and comfort throughout the shift.</li>\r\n</ul>\r\n\r\n<p><br />\r\n<strong>Applications:</strong></p>\r\n\r\n<ul>\r\n	<li>Trench Compaction</li>\r\n	<li>Back Filling</li>\r\n	<li>Pipe Work</li>\r\n	<li>Foundation Work</li>\r\n	<li>Patch Work on Roads</li>\r\n	<li>Confined Areas</li>\r\n</ul>\r\n\r\n<p><br />\r\n<strong>Product Parameter:</strong></p>\r\n\r\n<ul>\r\n	<li>Honda Engine, 5.5Hp Horse Power, Easy to Change Spare Parts &amp; Lower Cost</li>\r\n	<li>High-Quality Aluminium Alloy Box, Impact Resistance, Long Working Time</li>\r\n	<li>Original Import Dust Cover, Strong &amp; Durable</li>\r\n</ul>', 'upload/sub_machine_img/85ae750ad1dbdc5c2703bcfe97e77152.png|upload/sub_machine_img/06fb3cba82080bf8f3721739019d6792.jpg|upload/sub_machine_img/b367e525a7e574817c19ad24b7b35607.jpg|upload/sub_machine_img/7a6a74cbe87bc60030a4bd041dd47b78.jpg', 'upload/sub_machine_videos/991327d63593b0ba2c45618bf81f6a64.mp4|upload/sub_machine_videos/7a70c831f7cd407750d00c839b23a496.mp4', 'upload/sub_machine_brochure/607bc9ebe4abfcd65181bfbef6252830.pdf', 'active', '2022-04-23 09:57:21', '2022-04-23 09:57:21'),
(51, 10, 'SINGLE DRUM WALK BEHIND ROLLER', 'UNI 500 SINGLE DRUM ROLLER WITH GX160 HONDA ENGINE', NULL, '<p>soon</p>\r\n\r\n<p><strong>&nbsp;UNI 500 SINGLE DRUM ROLLER WITH GX160 HONDA ENGINE </strong></p>', 'upload/sub_machine_img/26178fc759d2b89c45dd31962f81dc61.jpg', NULL, NULL, 'active', '2022-04-23 10:07:58', '2022-04-23 10:07:58'),
(52, 10, 'SINGLE DRUM WALK BEHIND ROLLER', 'UNI 500 SINGLE DRUM ROLLER WITH GREAVES DIESEL ENGINE', NULL, '<p>soon</p>\r\n\r\n<p><strong>UNI 500 SINGLE DRUM ROLLER WITH GREAVES DIESEL ENGINE</strong></p>', 'upload/sub_machine_img/21186d7b1482412ab14f0332b8aee119.jpg', NULL, NULL, 'active', '2022-04-23 10:08:35', '2022-04-23 10:08:35'),
(53, 10, 'SINGLE DRUM WALK BEHIND ROLLER', 'UNI 580 SINGLE DRUM ROLLER WITH GX160 PETROL ENIGNE', NULL, '<p>soon</p>\r\n\r\n<p dir=\"ltr\"><strong>UNI 580 SINGLE DRUM ROLLER WITH GX160 PETROL ENIGNE&nbsp;</strong></p>', 'upload/sub_machine_img/0e1418311a013ebb344e7fcf8d199cc3.jpg', NULL, NULL, 'active', '2022-04-23 10:09:32', '2022-04-23 10:09:32'),
(54, 10, 'SINGLE DRUM WALK BEHIND ROLLER', 'UNI 580 SINGLE DRUM ROLLER WITH GREAVES DIESEL ENGINE', NULL, '<p>soon</p>\r\n\r\n<p><strong>&nbsp;UNI 580 SINGLE DRUM ROLLER WITH GREAVES DIESEL ENGINE </strong></p>', 'upload/sub_machine_img/0b7a9d54deeb611edc4540d286e9a042.jpg', NULL, NULL, 'active', '2022-04-23 10:11:09', '2022-04-23 10:11:09'),
(55, 10, 'DOUBLE DRUM WALK BEHIND ROLLER', 'UNI 600 WALK BEHIDN ROLLER WITH CHANGFA DIESEL ENGINE', '200000', '<p><strong>Product Details:</strong></p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Engine Power</td>\r\n			<td>9 HP</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Brand</td>\r\n			<td>Unicorn</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Max Working Speed</td>\r\n			<td>3000 RPM</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Model Name/Number</td>\r\n			<td>UNI 600</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Water Tank Capacity</td>\r\n			<td>35 L</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Engine Type</td>\r\n			<td>Air-cool Diesel/Gasoline</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Compaction Capacity</td>\r\n			<td>25000 Sq. Feet / Hr</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Fuel Tank Capacity</td>\r\n			<td>18 L</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Dimensions</td>\r\n			<td>1350x750x1150 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Vibration Frequency</td>\r\n			<td>70 Hz</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Static Linear Load</td>\r\n			<td>45N/CM</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Vibrating Clutch Method</td>\r\n			<td>Automatic</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Weight</td>\r\n			<td>580 Kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Wheel Size</td>\r\n			<td>600x420 mm x 2</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Watering System</td>\r\n			<td>Gravity Sprinkle System</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\nWe are engaged in presenting a&nbsp;<strong>Double Drum Walk Behind Roller Machine</strong>&nbsp;is modern compact design for use in a wide range of compaction application. Hydraulic with integrated travel control eases the operating effort required for movement. The famous Unicorn ouble Drum Walk Behind Roller has the vibratory source located in the drum which provides maximum compaction and traction performance.&nbsp;<br />\r\n<br />\r\n<strong>Advantages:</strong></p>\r\n\r\n<ul>\r\n	<li>Equipped with brand name power, superior performance, easy to start.</li>\r\n	<li>Operating radius is small, in an extremely narrow area operation.</li>\r\n	<li>use of domestic brand name hyadraulic pumps, motors, before and after the road, easy to operate</li>\r\n	<li>Lengthened armrest, steering convenience, can adapt to different height of the operation.</li>\r\n	<li>Surface spray, rust and corrosion</li>\r\n	<li>Infinitely variable speed control</li>\r\n	<li>Hydraulic vibration drive</li>\r\n	<li>Water sprinkler system drum scrappers</li>\r\n	<li>Hydraulic vibration control</li>\r\n	<li>High gradient capacity</li>\r\n</ul>\r\n\r\n<p><br />\r\n<strong>Optional Features:</strong></p>\r\n\r\n<ul>\r\n	<li>Electrically Operated</li>\r\n	<li>Self stating arrangement</li>\r\n</ul>', 'upload/sub_machine_img/f720ec3e5486f090fd382b68e230b435.jpg|upload/sub_machine_img/93129bca9fb2d3cb3470e2b9cfde7f63.jpg|upload/sub_machine_img/09676fac73eda6cac726c43e43e86c58.jpg', 'upload/sub_machine_videos/f7b6bc883be91f56eb248d72de4d2847.mp4|upload/sub_machine_videos/ebef22399dd37c14fcbe768327022889.mp4|upload/sub_machine_videos/91ba4a4478a66bee9812b0804b6f9d1b.mp4', 'upload/sub_machine_brochure/feecee9f1643651799ede2740927317a.pdf', 'active', '2022-04-23 10:18:03', '2022-04-23 10:18:03'),
(56, 10, 'DOUBLE DRUM WALK BEHIND ROLLER', 'UNI 600 WALK BEHIND ROLER WTH GREAVES DIESEL ENGINE', NULL, '<p><strong>Product Details:</strong></p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Engine Power</td>\r\n			<td>9 HP</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Brand</td>\r\n			<td>Unicorn</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Max Working Speed</td>\r\n			<td>3000 RPM</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Model Name/Number</td>\r\n			<td>UNI 600</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Water Tank Capacity</td>\r\n			<td>35 L</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Engine Type</td>\r\n			<td>Air-cool Diesel/Gasoline</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Compaction Capacity</td>\r\n			<td>25000 Sq. Feet / Hr</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Fuel Tank Capacity</td>\r\n			<td>18 L</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Dimensions</td>\r\n			<td>1350x750x1150 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Vibration Frequency</td>\r\n			<td>70 Hz</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Static Linear Load</td>\r\n			<td>45N/CM</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Vibrating Clutch Method</td>\r\n			<td>Automatic</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Weight</td>\r\n			<td>580 Kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Wheel Size</td>\r\n			<td>600x420 mm x 2</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Watering System</td>\r\n			<td>Gravity Sprinkle System</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\nWe are engaged in presenting a&nbsp;<strong>Double Drum Walk Behind Roller Machine</strong>&nbsp;is modern compact design for use in a wide range of compaction application. Hydraulic with integrated travel control eases the operating effort required for movement. The famous Unicorn ouble Drum Walk Behind Roller has the vibratory source located in the drum which provides maximum compaction and traction performance.&nbsp;<br />\r\n<br />\r\n<strong>Advantages:</strong></p>\r\n\r\n<ul>\r\n	<li>Equipped with brand name power, superior performance, easy to start.</li>\r\n	<li>Operating radius is small, in an extremely narrow area operation.</li>\r\n	<li>use of domestic brand name hyadraulic pumps, motors, before and after the road, easy to operate</li>\r\n	<li>Lengthened armrest, steering convenience, can adapt to different height of the operation.</li>\r\n	<li>Surface spray, rust and corrosion</li>\r\n	<li>Infinitely variable speed control</li>\r\n	<li>Hydraulic vibration drive</li>\r\n	<li>Water sprinkler system drum scrappers</li>\r\n	<li>Hydraulic vibration control</li>\r\n	<li>High gradient capacity</li>\r\n</ul>\r\n\r\n<p><br />\r\n<strong>Optional Features:</strong></p>\r\n\r\n<ul>\r\n	<li>Electrically Operated</li>\r\n	<li>Self stating arrangement</li>\r\n</ul>', 'upload/sub_machine_img/06c284d3f757b15c02f47f3ff06dc275.jpg|upload/sub_machine_img/c2c2a04512b35d13102459f8784f1a2d.jpg|upload/sub_machine_img/211b39255232ab59ce78f2e28cd0292b.jpg', 'upload/sub_machine_videos/b93e78c67fd4ae3ee626d8ec0c412dec.mp4|upload/sub_machine_videos/60cb558c40e4f18479664069d9642d5a.mp4', 'upload/sub_machine_brochure/7dd0240cd412efde8bc165e864d3644f.pdf', 'active', '2022-04-23 10:32:27', '2022-04-23 10:32:27'),
(57, 10, 'DOUBLE DRUM RIDE ON ROLLER', 'UNI 880 RIDE ON ROLLER WITH CHANGFA DIESEL ENGINE', NULL, '<p><strong>Product Details:</strong></p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Engine Make</td>\r\n			<td>Diesel Engine</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Centrifugal Force</td>\r\n			<td>35-50 kN</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Brand</td>\r\n			<td>Unicorn</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Vibration Frequency</td>\r\n			<td>70 Hz</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Weight</td>\r\n			<td>800-1000 kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Model</td>\r\n			<td>UNI 880</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\nAmidst our wide range of products, we are also engaged in offering a wide range of Ride on roller or&nbsp;<strong>Ride on vibratory roller.</strong>&nbsp;These Hi-tech Rollers credited for their better smooth performance and longer durability, are widely used for construction and repairing of roads and also to maintain edges of highways. They are also credited for their sturdiness and easy handling.</p>', 'upload/sub_machine_img/d30d0f522a86b3665d8e3a9a91472e28.jpg|upload/sub_machine_img/2a50e9c2d6b89b95bcb416d6857f8b45.jpg', 'upload/sub_machine_videos/cfe795a0a3c7bc1683f2efd8837dde0c.mp4|upload/sub_machine_videos/b5a1d925221b37e2e399f7b319038ba0.mp4|upload/sub_machine_videos/e3eb4194278df0f91258632682d0ae92.mp4', 'upload/sub_machine_brochure/fdda6e957f1e5ee2f3b311fe4f145ae1.pdf', 'active', '2022-04-23 10:36:02', '2022-04-23 11:43:57'),
(58, 10, 'DOUBLE DRUM RIDE ON ROLLER', 'UNI 880 RIDE ON ROLLER WITH GREAVES DIESEL ENGINE', NULL, '<p><strong>Product Details:</strong></p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Capacity of Oil Tank</td>\r\n			<td>19 L</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Capacity of Water Tank</td>\r\n			<td>60 L</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Drive Model</td>\r\n			<td>Mechanical/Hydraulic</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Fuel Consumption</td>\r\n			<td>280 g/kWH</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Starting Way</td>\r\n			<td>Electrical Starting</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Turning Radius</td>\r\n			<td>2500 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Vibrating Clutch Method</td>\r\n			<td>Electromagnetic</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Walking Model</td>\r\n			<td>Forwarding &amp; Back</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Walking Speed</td>\r\n			<td>0-5 km/h</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Brand</td>\r\n			<td>Unicorn</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Centrifugal Force</td>\r\n			<td>50 kN</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Vibration Frequency</td>\r\n			<td>70 Hz</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Engine Type</td>\r\n			<td>Air Cool Diesel Engine</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Model</td>\r\n			<td>UNI 880</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Weight</td>\r\n			<td>1000 kg</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\nWe are offering&nbsp;<strong>Ride On Roller Machine</strong>&nbsp;to our clients.</p>', 'upload/sub_machine_img/29a9f8c8460e5e2be4edde557fd83712.jpg|upload/sub_machine_img/ec8b57b0be908301f5748fb04b0714c7.jpg', 'upload/sub_machine_videos/333222170ab9edca4785c39f55221fe7.mp4|upload/sub_machine_videos/3a2a9aef4cbed81244820a091667c0bd.mp4|upload/sub_machine_videos/fa3dade3a49305f27f64203452ac954c.mp4', 'upload/sub_machine_brochure/e804a3e088d734b12a3a2acffb77f37a.pdf', 'active', '2022-04-23 10:38:34', '2022-04-23 11:44:44'),
(59, 10, 'DOUBLE DRUM RIDE ON ROLLER', 'UNI 1000 RIDE ON ROLLER WITH CHANGFA DIESEL ENGINE', NULL, '<p><strong>Product Details:</strong></p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Fuel Consumption</td>\r\n			<td>280 g/kWH</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Grade Ability</td>\r\n			<td>0.3</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Oil Tank Capacity</td>\r\n			<td>19 L</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Turning Radius</td>\r\n			<td>2500 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Vibrating Clutch Method</td>\r\n			<td>Electromagnetic</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Water Tank Capacity</td>\r\n			<td>60 L</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Brand</td>\r\n			<td>Unicorn</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Centrifugal Force</td>\r\n			<td>50 kN</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Vibration Frequency</td>\r\n			<td>70 Hz</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Dimensions</td>\r\n			<td>1900 x 920 x 1500 mm</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Engine</td>\r\n			<td>Greaves Diesel Engine</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Model</td>\r\n			<td>UNI 1000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Weight</td>\r\n			<td>1000 kg</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\nIn accordance with advanced market developments, we are offering a wide assortment of Hydrostatic Roller, which is designed for finish layers of asphalt as well as granular sub-base material is confined areas. Apart from this, this is ideal for parking lots, driveways, and shoulder work. These products are offered to the clients at very affordable and reasonable rates within the committed period of time. An eight-position timer allows the operator to adjust water flow and match conditions overall machine design eliminates overhang of the unit.<br />\r\n<br />\r\n<strong>Features:</strong></p>\r\n\r\n<ul>\r\n	<li>Compact design</li>\r\n	<li>Easy to use</li>\r\n	<li>High performance</li>\r\n</ul>\r\n\r\n<p><br />\r\n<strong>Additional Advantages:</strong></p>\r\n\r\n<ul>\r\n	<li>Pressurized water system offers consistent water flow.</li>\r\n</ul>\r\n\r\n<p><br />\r\n<strong>Application:</strong></p>\r\n\r\n<ul>\r\n	<li>Small Road Roller is used for compaction of asphalt surface, compaction of Gravel sand and other projects the ride - on vibratory rollers are small size vibratory roller.</li>\r\n</ul>', 'upload/sub_machine_img/beb3c650aaae598375f60df2c6063269.jpg|upload/sub_machine_img/975e6107778ce7a40b9878bfb96a16a7.jpg', 'upload/sub_machine_videos/386854131f58a556343e056f03626e00.mp4|upload/sub_machine_videos/46936add066bd6422b3ac74a0ccb7174.mp4|upload/sub_machine_videos/274231193c4e40abc64d2f2d8cb6b415.mp4|upload/sub_machine_videos/f0b76267fbe12b936bd65e203dc675c1.mp4', 'upload/sub_machine_brochure/3b199f42a9909061516b6ce6d334af6d.pdf', 'active', '2022-04-23 10:41:26', '2022-04-23 11:45:23'),
(60, 11, 'SUSPENDED PLATFORM', 'UNI 800 SUSPENDED PLATFORM 100 MTR HGT,7.5M,9.1M POWDER COATED', NULL, '<p><strong>Product Details:</strong></p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Material Of Platform</td>\r\n			<td>SS</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Load Capacity</td>\r\n			<td>&gt;250 kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Suspended Height</td>\r\n			<td>100 m</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Usage/Application</td>\r\n			<td>Construction</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Assembly</td>\r\n			<td>Aerial Platform</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Surface Treatment</td>\r\n			<td>Galvanized</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Power</td>\r\n			<td>2 KW</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Hoist Speed</td>\r\n			<td>9.1 m/min</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\n<strong>Suspended Platform</strong>&nbsp;provide temporary access to heights - for building maintenance, at construction sites or in industrial environments. Unicorn Platform offers modular Suspended Platform Systems which are incredibly easy to assemble. Our system offers superior stability and easily fits inside the back of medium sized van.</p>', 'upload/sub_machine_img/7e9e346dc5fd268b49bf418523af8679.jpg|upload/sub_machine_img/33beffd09a1b020d1187c6b4b264014a.jpg', 'upload/sub_machine_videos/7a68443f5c80d181c42967cd71612af1.mp4', 'upload/sub_machine_brochure/752d2c9ecfe079e5e5f3539f4d750e5c.pdf', 'active', '2022-04-23 10:53:03', '2022-04-23 10:53:03'),
(61, 11, 'SUSPENDED PLATFORM', 'UNI 800 SUSPENDED PLATFORM 100 MTR HGT,7.5M,9.1M GAIVANISED', NULL, '<p><strong>Product Details:</strong></p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Material Of Platform</td>\r\n			<td>SS</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Load Capacity</td>\r\n			<td>&gt;250 kg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Suspended Height</td>\r\n			<td>100 m</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Usage/Application</td>\r\n			<td>Construction</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Assembly</td>\r\n			<td>Aerial Platform</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Surface Treatment</td>\r\n			<td>Galvanized</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Power</td>\r\n			<td>2 KW</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Hoist Speed</td>\r\n			<td>9.1 m/min</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\n<strong>Suspended Platform</strong>&nbsp;provide temporary access to heights - for building maintenance, at construction sites or in industrial environments. Unicorn Platform offers modular Suspended Platform Systems which are incredibly easy to assemble. Our system offers superior stability and easily fits inside the back of medium sized van.</p>', 'upload/sub_machine_img/5ac8bb8a7d745102a978c5f8ccdb61b8.jpg|upload/sub_machine_img/db64f68dee27eb08d29117c7da678f81.jpg', 'upload/sub_machine_videos/ce6babd060aa46c61a5777902cca78af.mp4', 'upload/sub_machine_brochure/e74c0d42b4433905293aab661fcf8ddb.pdf', 'active', '2022-04-23 10:54:28', '2022-04-23 10:54:28'),
(63, 8, 'BAR BENDING MACHINES', 'GW 50 BAR BENDING MAHCINE', NULL, '<p>soon</p>\r\n\r\n<p>GW 50 BAR BENDING MAHCINE</p>', 'upload/sub_machine_img/d38ee19a4815c4aeba48227913092a6e.jpg|upload/sub_machine_img/94aada62f90dd50a84ca74304563d5db.jpg', 'upload/sub_machine_videos/35309226eb45ec366ca86a4329a2b7c3.mp4', NULL, 'active', '2022-04-27 07:43:41', '2022-04-27 07:43:41'),
(64, 8, 'BAR BENDING MACHINES', 'GW 50H BAR BENDIN MACHINE', NULL, '<p>soon</p>\r\n\r\n<p>GW 50H BAR BENDIN MACHINE</p>', 'upload/sub_machine_img/8462a7c229aea03dde69da754c3bbcc4.jpg|upload/sub_machine_img/c4c32f6c24ee9c91d8debbd72cce2a22.jpg', 'upload/sub_machine_videos/f5b2aa928f940f3f09a0d14f45a27875.mp4', NULL, 'active', '2022-04-27 07:44:31', '2022-04-27 07:44:31'),
(65, 8, 'BAR CUTTING MACHINES', 'GQ 50H BAR CUTTING MACHINE', NULL, '<p>soon</p>\r\n\r\n<p>GQ 50H BAR CUTTING MACHINE</p>', 'upload/sub_machine_img/0af854284f4ab0cfea8fcfd889cbb41a.jpg', NULL, NULL, 'active', '2022-04-27 07:48:22', '2022-04-27 07:48:22'),
(66, 8, 'BAR CUTTING MACHINES', 'GQ 50 BAR CUTTING MACHINE', NULL, '<p>soon</p>\r\n\r\n<p>GQ 50 BAR CUTTING MACHINE</p>', 'upload/sub_machine_img/b89c30965ebc74912de879f22da62dbf.jpg', NULL, NULL, 'active', '2022-04-27 07:51:10', '2022-04-27 07:51:10'),
(67, 13, 'OTHER EQUIPMENTS', 'UNI 90 BULL FLOAT MAGNESIU', NULL, '<p>soon</p>\r\n\r\n<p>UNI 90 BULL FLOAT MAGNESIU</p>', 'upload/sub_machine_img/8965f76632d7672e7d3cf29c87ecaa0c.jpg', NULL, NULL, 'active', '2022-04-27 08:05:49', '2022-04-27 08:05:49'),
(68, 13, 'OTHER EQUIPMENTS', 'UNI CONCRETE COMBING BRUSH (MS STEEL)', NULL, '<p>soon</p>\r\n\r\n<p>UNI CONCRETE COMBING BRUSH (MS STEEL)</p>', 'upload/sub_machine_img/895daa408f494ad58006c47a30f51c1f.jpg', NULL, NULL, 'active', '2022-04-27 08:06:23', '2022-04-27 08:06:23'),
(69, 13, 'OTHER EQUIPMENTS', 'UNI CONCRETE COMBING BRUSH (MAGNESIUM)', NULL, '<p>soon</p>\r\n\r\n<p>UNI CONCRETE COMBING BRUSH (MAGNESIUM)</p>', 'upload/sub_machine_img/69dd2eff9b6a421d5ce262b093bdab23.jpg', NULL, NULL, 'active', '2022-04-27 08:06:44', '2022-04-27 08:06:44'),
(70, 13, 'OTHER EQUIPMENTS', 'UNI 30M FOGGING MACHINE', NULL, '<p>soon</p>\r\n\r\n<p>UNI 30M FOGGING MACHINE</p>', 'upload/sub_machine_img/4588e674d3f0faf985047d4c3f13ed0d.jpg', NULL, NULL, 'active', '2022-04-27 08:07:19', '2022-04-27 08:07:19'),
(71, 13, 'OTHER EQUIPMENTS', 'UNI 40M FOGGING MACHINE', NULL, '<p>soon</p>\r\n\r\n<p>UNI 40M FOGGING MACHINE</p>', 'upload/sub_machine_img/5fa9e41bfec0725742cc9d15ef594120.jpg', NULL, NULL, 'active', '2022-04-27 08:07:44', '2022-04-27 08:07:44'),
(72, 13, 'OTHER EQUIPMENTS', 'SAFTY LOCK SAJ30', NULL, '<p>soon</p>\r\n\r\n<p>SAFTY LOCK SAJ30</p>', 'upload/sub_machine_img/6f683b372cc7eacb980ec61b736cac74.jpg', NULL, NULL, 'active', '2022-04-27 08:08:21', '2022-04-27 08:08:21'),
(73, 13, 'OTHER EQUIPMENTS', 'SAFTY LOCK SAJ40', NULL, '<p>soon</p>\r\n\r\n<p>SAFTY LOCK SAJ40</p>', 'upload/sub_machine_img/56a3107cad6611c8337ee36d178ca129.jpg', NULL, NULL, 'active', '2022-04-27 08:08:54', '2022-04-27 08:08:54');

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
(11, NULL, 'yash', 'yash@gmail.com', NULL, '$2y$10$URXM0DpezsO724fDVtfZKOTaWTFfambl7TEEHYK2B0LKHkSbA1djK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2021-11-12 01:01:24', '2022-03-21 01:43:30'),
(15, NULL, 'Vikas Yadav', 'vikasyadav8467@gmail.com', NULL, '$2y$10$/qDoxXga1I6gp3ZrFpH2le2zzRAojRH0DGGkAXK28mnBImlNhFoVi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2022-04-11 10:56:13', '2022-04-11 12:56:34');

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
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `machine_parts`
--
ALTER TABLE `machine_parts`
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
-- Indexes for table `manage_credentials`
--
ALTER TABLE `manage_credentials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_videos`
--
ALTER TABLE `manage_videos`
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
-- Indexes for table `request_machines`
--
ALTER TABLE `request_machines`
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
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT for table `machine_parts`
--
ALTER TABLE `machine_parts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mainmachines`
--
ALTER TABLE `mainmachines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `main_categories`
--
ALTER TABLE `main_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `manage_credentials`
--
ALTER TABLE `manage_credentials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `manage_videos`
--
ALTER TABLE `manage_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

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
-- AUTO_INCREMENT for table `request_machines`
--
ALTER TABLE `request_machines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `service_requests`
--
ALTER TABLE `service_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `submachines`
--
ALTER TABLE `submachines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
