-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2021 at 06:32 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlnh`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id_about` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id_about`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'SORAE – “Little Tokyo” in Ho Chi Minh City', '“Sorae” – Above the sky, exactly what its name implies, the Japanese restaurant has one of the most breath-taking views and is the ideal rendezvous in the inner Saigon. Located in the 24th and 25th floor of AB Tower (76 Le Lai, District 1), our topmost gourmet food style is a must-known get-together place of food lovers. Sorae would be the ideal rendezvous for giving Japanese’s culinary delights a try and drowning in Japanese subcultures in the middle of Saigon. Sora restaurant is renowned not only for its sashimi from the fresh source of ingredients (either fished domestically or directly delivered from famous Tsukiji and Osaka seafood market in Japan) but also for Yakitori & Beer Kitchen corner – The provenance of grilled Wagyu and Angus steak above the charcoal for your best aftertaste. With the great deal passion of 20 topmost chefs, every cuisine is an artwork that conceives the pure Japanese taste.', 'user/images/bento_1.jpg', '2021-01-24 09:21:50', '2021-01-24 09:21:50'),
(2, 'The luxurious private dining room system', 'At night or special occasions, Sorae exclusively offers VIP private dining room for diners. Each one is orientated toward a divergent theme, conveys the diversified experience. Diners, as a result, fathom out more about Japanese culture and traditions. At Sorae, we offer totally 14 rooms with respectively distinctive themes: Ryotei, Bonsai, Sakura, Ginza, Fujiyama, Zen, Geisha, Niwa, Yozora, Misora, Hinata, Hoshi, Shinju, Koi.', 'user/images/bento_2.jpg', '2021-01-24 09:21:50', '2021-01-24 09:21:50'),
(3, 'The opening Sushi & Sake corner', 'The only Sushi & Sake bar exhibits well-known Sake collections and imported fresh seafood from Japan. Here at the corner, diners are able to contemplate the stunning Sashimi preparation of our chefs.', 'user/images/bento_3.jpg', '2021-01-24 09:21:50', '2021-01-24 09:21:50'),
(4, 'A step from Sushi Bar, Yakitori & Beer', 'A step from Sushi Bar, Yakitori & Beer is also one of our spotlights. Diners can both savor distinctive Yakitori skewer meat and regard mastery Japanese chefs, who are skilfully grilling Wagyu beef, bacon, fish and so on.', 'user/images/bento_4.jpg', '2021-01-24 09:21:50', '2021-01-24 09:21:50');

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id_account` int(10) UNSIGNED NOT NULL,
  `id_position` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id_account`, `id_position`, `username`, `password`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'root', '$2y$10$PfEqHuhqDWiI7rE57A9oD.2cxVS3gHl60Q27cTaknXd4UFUK2U4/W', 0, '2021-01-24 09:21:52', '2021-01-24 09:21:52'),
(2, 2, 'admin', '$2y$10$ZHiqf95WK35rUe1MLhT5E.EyYyQqbOgw3e.Krxqb6ek1MAQYrrlk6', 1, '2021-01-24 09:21:52', '2021-01-24 09:21:52'),
(3, 3, 'article_staff_01', '$2y$10$83pdhSvrYxl30CJy6ZOGruMvbPjAw0Ng1ym1PPPFfu6FuYEFEfxAa', 2, '2021-01-24 09:21:52', '2021-01-24 09:21:52'),
(4, 3, 'article_staff_01', '$2y$10$u.XMXNLe6qTa89u6CFwyIeMUBNJE./ClkL0YZsvRMmAAPSOE5WOtK', 2, '2021-01-24 09:21:52', '2021-01-24 09:21:52'),
(5, 4, 'sale_staff_01', '$2y$10$L4JUz3QQZDny1vuN7kSf.Otreke8gJzdzGsrEbnBqVcHfN5/Nzv0G', 2, '2021-01-24 09:21:52', '2021-01-24 09:21:52'),
(6, 4, 'sale_staff_02', '$2y$10$NCqw4tbt.hc3sthOcQ1Yw.9TV36mCayKrZL9VlON9jGmoX8c0fYW.', 2, '2021-01-24 09:21:53', '2021-01-24 09:21:53');

-- --------------------------------------------------------

--
-- Table structure for table `admin_sidebar`
--

CREATE TABLE `admin_sidebar` (
  `id_sidebar` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `dropdown` int(11) NOT NULL,
  `display` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_sidebar`
--

INSERT INTO `admin_sidebar` (`id_sidebar`, `title`, `link`, `image`, `parent_id`, `dropdown`, `display`, `created_at`, `updated_at`) VALUES
(1, 'Menu', 'admin_menu', 'fas fa-book-open', 0, 0, 1, '2021-01-24 09:21:50', '2021-01-24 09:21:50'),
(2, 'Product', 'admin_product', 'fas fa-gifts', 0, 0, 1, '2021-01-24 09:21:50', '2021-01-24 09:21:50'),
(3, 'Order', 'admin_order', 'fas fa-shopping-basket', 0, 0, 1, '2021-01-24 09:21:50', '2021-01-24 09:21:50'),
(4, 'Category', 'admin_blog_category', 'fas fa-edit', 0, 0, 1, '2021-01-24 09:21:50', '2021-01-24 09:21:50'),
(5, 'Blog', 'admin_blog', 'fas fa-edit', 0, 0, 1, '2021-01-24 09:21:50', '2021-01-24 09:21:50'),
(6, 'Feedback', 'admin_feedback', 'fas fa-comment', 0, 0, 1, '2021-01-24 09:21:50', '2021-01-24 09:21:50'),
(7, 'Gallery', 'admin_gallery', 'fas fa-camera', 0, 0, 1, '2021-01-24 09:21:50', '2021-01-24 09:21:50'),
(8, 'Interface', '', 'fas fa-tools', 0, 1, 1, '2021-01-24 09:21:50', '2021-01-24 09:21:50'),
(9, 'Icon Mobile', 'admin_iconmobile', 'fas fa-mobile', 0, 0, 1, '2021-01-24 09:21:50', '2021-01-24 09:21:50'),
(10, 'Rate star review', 'admin_ratestarview', 'fas fa-star', 0, 0, 1, '2021-01-24 09:21:50', '2021-01-24 09:21:50'),
(11, 'Setting', '', 'fas fa-cogs', 0, 1, 1, '2021-01-24 09:21:50', '2021-01-24 09:21:50'),
(12, 'Member', '', 'fas fa-users-cog', 0, 1, 1, '2021-01-24 09:21:50', '2021-01-24 09:21:50'),
(13, 'Administrator', '', 'fas fa-user-cog', 0, 1, 1, '2021-01-24 09:21:50', '2021-01-24 09:21:50'),
(14, 'Slide', 'admin_slide', '', 8, 0, 1, '2021-01-24 09:21:50', '2021-01-24 09:21:50'),
(15, 'Popup', 'admin_popup', '', 8, 0, 1, '2021-01-24 09:21:50', '2021-01-24 09:21:50'),
(16, 'Widget', 'admin_widget', '', 8, 0, 1, '2021-01-24 09:21:50', '2021-01-24 09:21:50'),
(17, 'Common Setting', 'admin_commonsetting', '', 11, 0, 1, '2021-01-24 09:21:50', '2021-01-24 09:21:50'),
(18, 'Text Setting', 'admin_textsetting', '', 11, 0, 1, '2021-01-24 09:21:50', '2021-01-24 09:21:50'),
(19, 'Overview', 'admin_overview_member', '', 12, 0, 1, '2021-01-24 09:21:50', '2021-01-24 09:21:50'),
(20, 'Detail', 'admin_detail_member', '', 12, 0, 1, '2021-01-24 09:21:50', '2021-01-24 09:21:50'),
(21, 'Overview', 'admin_overview_administrator', '', 13, 0, 1, '2021-01-24 09:21:50', '2021-01-24 09:21:50'),
(22, 'Detail', 'admin_detail_administrator', '', 13, 0, 1, '2021-01-24 09:21:50', '2021-01-24 09:21:50');

-- --------------------------------------------------------

--
-- Table structure for table `admin_widget`
--

CREATE TABLE `admin_widget` (
  `id_widget` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_widget`
--

INSERT INTO `admin_widget` (`id_widget`, `title`, `display`, `created_at`, `updated_at`) VALUES
(1, 'Header', 1, '2021-01-24 09:21:51', '2021-01-24 09:21:51'),
(2, 'Slide', 1, '2021-01-24 09:21:51', '2021-01-24 09:21:51'),
(3, 'Footer', 1, '2021-01-24 09:21:51', '2021-01-24 09:21:51'),
(4, 'Section', 1, '2021-01-24 09:21:51', '2021-01-24 09:21:51');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id_bill` int(10) UNSIGNED NOT NULL,
  `id_account` int(10) UNSIGNED NOT NULL,
  `id_order_detail` int(10) UNSIGNED NOT NULL,
  `id_customer` int(10) UNSIGNED NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id_bill`, `id_account`, `id_order_detail`, `id_customer`, `content`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 1, '', '2021-01-24 09:21:54', '2021-01-24 09:21:54'),
(2, 4, 1, 1, '', '2021-01-24 09:21:54', '2021-01-24 09:21:54'),
(3, 4, 1, 1, '', '2021-01-24 09:21:54', '2021-01-24 09:21:54');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(10) UNSIGNED NOT NULL,
  `id_blg_cate` int(10) UNSIGNED NOT NULL,
  `id_account` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(1) NOT NULL,
  `homepage` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id_blog`, `id_blg_cate`, `id_account`, `title`, `content`, `image`, `display`, `homepage`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'The Delicious Pizza 1', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', 'user/images/image_1.jpg', 1, 0, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(2, 1, 1, 'The Delicious Pizza 2', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', 'user/images/image_2.jpg', 1, 0, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(3, 1, 1, 'The Delicious Pizza 3', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', 'user/images/image_3.jpg', 1, 0, '2021-01-24 09:21:53', '2021-01-24 09:21:53');

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `id_blg_cate` int(10) UNSIGNED NOT NULL,
  `blg_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(1) NOT NULL,
  `homepage` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`id_blg_cate`, `blg_category`, `display`, `homepage`, `created_at`, `updated_at`) VALUES
(1, 'Food', 1, 0, '2021-01-24 09:21:51', '2021-01-24 09:21:51'),
(2, 'Drink', 1, 0, '2021-01-24 09:21:51', '2021-01-24 09:21:51'),
(3, 'Travel', 1, 0, '2021-01-24 09:21:51', '2021-01-24 09:21:51');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(10) UNSIGNED NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id_comment`, `content`, `created_at`, `updated_at`) VALUES
(1, 'bai viet rat hay', '2021-01-24 09:21:51', '2021-01-24 09:21:51'),
(2, 'toi thich cai nay', '2021-01-24 09:21:51', '2021-01-24 09:21:51'),
(3, 'toi khonog thich cai nay', '2021-01-24 09:21:51', '2021-01-24 09:21:51');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reward_point` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `fullname`, `address`, `phone`, `avatar`, `email`, `password`, `reward_point`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Văn Giang', '135 Nguyễn Hữu Cảnh, phường 22, Bình Thạnh, Hồ Chí Minh', '081127985', '', 'giangnguyen2000@gmail.com', '$2y$10$lSbj3PfuxZMlme4SVRQ0Te5uhgt5kg71AqTFR4UCV.YUlZdiTL/36', 0, '2021-01-24 09:21:52', '2021-01-24 09:21:52'),
(2, 'Dương Văn Hà', '25 Ung Văn Khiêm, phường 25, Bình Thạnh, Hồ Chí Minh', '03579432', '', 'duongvanha95@gmail.com', '$2y$10$mudS2vYFRTrEzMSAWFHpje4wDZg6yA4kZy1N5bbi/wkw.Qz2iUL5q', 0, '2021-01-24 09:21:52', '2021-01-24 09:21:52'),
(3, 'Hoàng Thúy Hạnh', 'Trần Hưng Đạo, Phường Nguyễn Cư Trinh, Quận 1, Hồ Chí Minh', '05378921', '', 'hoanghanh90@gmail.com', '$2y$10$me1exvbKiGyArv48Yv4OnOQz7FsaBEGmy9Fwz3MpdpI67xX0hvO9C', 0, '2021-01-24 09:21:52', '2021-01-24 09:21:52');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_event` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `expiry_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `title`, `content`, `image`, `start_date`, `expiry_date`, `created_at`, `updated_at`) VALUES
(1, 'Giáng sinh tưng bừng', '', '', '2016-01-23', '2016-01-23', '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(2, 'Giao thừa hạnh phúc', '', '', '2016-01-23', '2016-01-23', '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(3, 'Mừng năm mới với nhiều ưu đãi', '', '', '2016-01-23', '2016-01-23', '2021-01-24 09:21:53', '2021-01-24 09:21:53');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` int(10) UNSIGNED NOT NULL,
  `id_customer` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id_feedback`, `id_customer`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'toi la khach 1', 'toi la khach 1', 'toi la khach 1', '2021-01-24 09:21:54', '2021-01-24 09:21:54'),
(2, 2, 'toi la khach 2', 'toi la khach 2', 'toi la khach 2', '2021-01-24 09:21:54', '2021-01-24 09:21:54'),
(3, 3, 'toi la khach 3', 'toi la khach 3', 'toi la khach 3', '2021-01-24 09:21:54', '2021-01-24 09:21:54');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id_footer` int(10) UNSIGNED NOT NULL,
  `id_widget` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copyright` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id_footer`, `id_widget`, `title`, `content`, `image`, `copyright`, `created_at`, `updated_at`) VALUES
(1, 2, 'About Us', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', '', 0, '2021-01-24 09:21:55', '2021-01-24 09:21:55'),
(2, 2, 'Recent Blog', '', '', 0, '2021-01-24 09:21:55', '2021-01-24 09:21:55'),
(3, 2, 'Services', '', '', 0, '2021-01-24 09:21:55', '2021-01-24 09:21:55'),
(4, 2, 'Have a Questions?', '', '', 0, '2021-01-24 09:21:55', '2021-01-24 09:21:55'),
(5, 2, '', 'Copyright ©2020 All rights reserved | This template is made with by Colorlib', '', 1, '2021-01-24 09:21:55', '2021-01-24 09:21:55');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(1) NOT NULL,
  `homepage` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `image`, `display`, `homepage`, `created_at`, `updated_at`) VALUES
(1, 'user/images/gallery-1.jpg', 1, 0, '2021-01-24 09:21:50', '2021-01-24 09:21:50'),
(2, 'user/images/gallery-2.jpg', 1, 0, '2021-01-24 09:21:50', '2021-01-24 09:21:50'),
(3, 'user/images/gallery-3.jpg', 1, 0, '2021-01-24 09:21:50', '2021-01-24 09:21:50'),
(4, 'user/images/gallery-4.jpg', 1, 0, '2021-01-24 09:21:50', '2021-01-24 09:21:50');

-- --------------------------------------------------------

--
-- Table structure for table `gcode_detail`
--

CREATE TABLE `gcode_detail` (
  `id_gcode_detail` int(10) UNSIGNED NOT NULL,
  `id_gcode` int(10) UNSIGNED NOT NULL,
  `id_customer` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gcode_detail`
--

INSERT INTO `gcode_detail` (`id_gcode_detail`, `id_gcode`, `id_customer`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(2, 2, 1, '2021-01-24 09:21:53', '2021-01-24 09:21:53');

-- --------------------------------------------------------

--
-- Table structure for table `giftcode`
--

CREATE TABLE `giftcode` (
  `id_gcode` int(10) UNSIGNED NOT NULL,
  `giftcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `expiry_date` date NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` int(11) NOT NULL,
  `discount_percent` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `giftcode`
--

INSERT INTO `giftcode` (`id_gcode`, `giftcode`, `start_date`, `expiry_date`, `description`, `discount`, `discount_percent`, `created_at`, `updated_at`) VALUES
(1, 'HPNY2021', '2016-01-23', '2016-01-23', '30.000 VND discount on sale items', 30000, 0, '2021-01-24 09:21:51', '2021-01-24 09:21:51'),
(2, 'SORAE2021YEAR', '2016-01-23', '2016-01-23', 'Save 30% on your 200.000 VND order', 30, 1, '2021-01-24 09:21:51', '2021-01-24 09:21:51'),
(3, 'FREESHIP', '2016-01-23', '2016-01-23', 'Free shipping on all orders over 100.000 VND', 0, 0, '2021-01-24 09:21:51', '2021-01-24 09:21:51');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id_header` int(10) UNSIGNED NOT NULL,
  `id_widget` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id_header`, `id_widget`, `title`, `link`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Online Shop', '', 0, '2021-01-24 09:21:55', '2021-01-24 09:21:55'),
(2, 1, 'Reservation', '', 0, '2021-01-24 09:21:55', '2021-01-24 09:21:55'),
(3, 1, 'Expands', '', 0, '2021-01-24 09:21:55', '2021-01-24 09:21:55'),
(4, 1, 'Blog', 'blog', 0, '2021-01-24 09:21:55', '2021-01-24 09:21:55'),
(5, 1, 'Menu', 'menu', 1, '2021-01-24 09:21:55', '2021-01-24 09:21:55'),
(6, 1, 'Product', 'product', 1, '2021-01-24 09:21:55', '2021-01-24 09:21:55'),
(7, 1, 'Signature', 'signature', 1, '2021-01-24 09:21:55', '2021-01-24 09:21:55'),
(8, 1, 'Contact Form', 'contact', 2, '2021-01-24 09:21:55', '2021-01-24 09:21:55'),
(9, 1, 'Book a table', 'reservation', 2, '2021-01-24 09:21:55', '2021-01-24 09:21:55'),
(10, 1, 'Event and Promotion', 'event', 3, '2021-01-24 09:21:55', '2021-01-24 09:21:55'),
(11, 1, 'Gallery', 'gallery', 3, '2021-01-24 09:21:55', '2021-01-24 09:21:55'),
(12, 1, 'Career', 'career', 3, '2021-01-24 09:21:55', '2021-01-24 09:21:55');

-- --------------------------------------------------------

--
-- Table structure for table `manage`
--

CREATE TABLE `manage` (
  `id_manage` int(10) UNSIGNED NOT NULL,
  `id_blog` int(10) UNSIGNED NOT NULL,
  `id_customer` int(10) UNSIGNED NOT NULL,
  `id_comment` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manage`
--

INSERT INTO `manage` (`id_manage`, `id_blog`, `id_customer`, `id_comment`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2021-01-24 09:21:54', '2021-01-24 09:21:54'),
(2, 1, 1, 1, '2021-01-24 09:21:54', '2021-01-24 09:21:54'),
(3, 1, 1, 1, '2021-01-24 09:21:54', '2021-01-24 09:21:54'),
(4, 1, 1, 1, '2021-01-24 09:21:54', '2021-01-24 09:21:54');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(1) NOT NULL,
  `homepage` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `name`, `description`, `image`, `display`, `homepage`, `created_at`, `updated_at`) VALUES
(1, 'Drink menu', 'There are a variety of drinks, such as cocktails, beers, waters, soft drinks, etc...', 'user/images/menu_5.jpg', 1, 1, '2021-01-24 09:21:50', '2021-01-24 09:21:50'),
(2, 'Delivery menu', '', '', 0, 0, '2021-01-24 09:21:50', '2021-01-24 09:21:50'),
(3, 'A La Carte', '', '', 0, 0, '2021-01-24 09:21:50', '2021-01-24 09:21:50'),
(4, 'Set lunch', '', '', 0, 0, '2021-01-24 09:21:50', '2021-01-24 09:21:50'),
(5, 'Set Dinner', '', '', 0, 0, '2021-01-24 09:21:50', '2021-01-24 09:21:50'),
(6, 'SORAE’s Happy Hour Menu', '', '', 0, 0, '2021-01-24 09:21:50', '2021-01-24 09:21:50'),
(7, 'Appetizer', 'There are a variety of drinks appetizers', 'user/images/menu_1.jpg', 1, 0, '2021-01-24 09:21:50', '2021-01-24 09:21:50'),
(8, 'Bento', 'There are a variety of drinks bentos', 'user/images/menu_4.jpg', 1, 0, '2021-01-24 09:21:50', '2021-01-24 09:21:50'),
(9, 'Dessert', '', '', 0, 1, '2021-01-24 09:21:50', '2021-01-24 09:21:50'),
(10, 'Main Dish', '', '', 0, 1, '2021-01-24 09:21:50', '2021-01-24 09:21:50'),
(11, 'Fried', 'There are a variety of drinks frieds', 'user/images/menu_2.jpg', 1, 0, '2021-01-24 09:21:50', '2021-01-24 09:21:50'),
(12, 'Maki', 'There are a variety of drinks makies', 'user/images/menu_3.jpg', 1, 0, '2021-01-24 09:21:50', '2021-01-24 09:21:50'),
(13, 'Combo menu', '', '', 0, 0, '2021-01-24 09:21:50', '2021-01-24 09:21:50');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_order` int(10) UNSIGNED NOT NULL,
  `id_customer` int(10) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `giftcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id_order`, `id_customer`, `status`, `order_date`, `giftcode`, `payment_method`, `created_at`, `updated_at`) VALUES
(1, 1, 3, '2016-01-23', '', '', '2021-01-24 09:21:54', '2021-01-24 22:30:41'),
(2, 1, 1, '2016-01-23', '', '', '2021-01-24 09:21:54', '2021-01-24 09:21:54'),
(3, 1, 1, '2016-01-23', '', '', '2021-01-24 09:21:54', '2021-01-24 09:21:54');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id_order_detail` int(10) UNSIGNED NOT NULL,
  `id_order` int(10) UNSIGNED NOT NULL,
  `id_product` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `amount` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id_order_detail`, `id_order`, `id_product`, `quantity`, `amount`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 0, '2021-01-24 09:21:54', '2021-01-24 09:21:54'),
(2, 1, 1, 1, 0, '2021-01-24 09:21:54', '2021-01-24 09:21:54');

-- --------------------------------------------------------

--
-- Table structure for table `payment_detail`
--

CREATE TABLE `payment_detail` (
  `id_payment_detail` int(10) UNSIGNED NOT NULL,
  `id_payment` int(10) UNSIGNED NOT NULL,
  `id_customer` int(10) UNSIGNED NOT NULL,
  `balance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_detail`
--

INSERT INTO `payment_detail` (`id_payment_detail`, `id_payment`, `id_customer`, `balance`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '0', '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(2, 2, 1, '0', '2021-01-24 09:21:53', '2021-01-24 09:21:53');

-- --------------------------------------------------------

--
-- Table structure for table `payment_method`
--

CREATE TABLE `payment_method` (
  `id_payment` int(10) UNSIGNED NOT NULL,
  `total_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_method`
--

INSERT INTO `payment_method` (`id_payment`, `total_price`, `payment_type`, `payment_icon`, `created_at`, `updated_at`) VALUES
(1, '0', 'CASH', 'fas fa-money-bill', '2021-01-24 09:21:51', '2021-01-24 09:21:51'),
(2, '0', 'DIGITAL WALLET', 'fas fa-wallet', '2021-01-24 09:21:51', '2021-01-24 09:21:51'),
(3, '0', 'MASTER CARD', 'fab fa-cc-mastercard', '2021-01-24 09:21:51', '2021-01-24 09:21:51'),
(4, '0', 'VISA CARD', 'fab fa-cc-visa', '2021-01-24 09:21:51', '2021-01-24 09:21:51');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id_position` int(10) UNSIGNED NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id_position`, `position`, `created_at`, `updated_at`) VALUES
(1, 'Soraesushi System', '2021-01-24 09:21:51', '2021-01-24 09:21:51'),
(2, 'Administrator', '2021-01-24 09:21:51', '2021-01-24 09:21:51'),
(3, 'Article Staff', '2021-01-24 09:21:51', '2021-01-24 09:21:51'),
(4, 'Sale Staff', '2021-01-24 09:21:51', '2021-01-24 09:21:51');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(10) UNSIGNED NOT NULL,
  `id_menu` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(1) NOT NULL,
  `homepage` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `id_menu`, `name`, `description`, `price`, `image`, `display`, `homepage`, `created_at`, `updated_at`) VALUES
(1, 1, 'Cocktail', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 40000, 'user/images/drink_1.jpg', 1, 0, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(2, 1, 'Red wine', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 120000, 'user/images/drink_2.jpg', 1, 0, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(3, 1, 'Orange', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 20000, 'user/images/drink_3.jpg', 1, 0, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(4, 1, 'Sochu', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 80000, 'user/images/drink_4.jpg', 1, 0, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(5, 1, 'Heineken', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 40000, 'user/images/drink_5.jpg', 1, 0, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(6, 1, 'Tiger', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 45000, 'user/images/drink_6.jpg', 1, 0, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(7, 1, 'Sting', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 15000, 'user/images/drink_7.jpg', 1, 0, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(8, 1, '7 up', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 15000, 'user/images/drink_8.jpg', 1, 0, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(9, 1, 'Pepsi', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 15000, 'user/images/drink_9.jpg', 1, 0, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(10, 1, 'Dasani', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 10000, 'user/images/drink_10.jpg', 1, 0, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(11, 7, 'appetizer 01', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 40000, 'user/images/appetizer_1.jpg', 1, 0, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(12, 7, 'appetizer 02', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 40000, 'user/images/appetizer_2.jpg', 1, 0, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(13, 7, 'appetizer 03', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 40000, 'user/images/appetizer_3.jpg', 1, 0, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(14, 7, 'appetizer 04', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 40000, 'user/images/appetizer_4.jpg', 1, 0, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(15, 7, 'appetizer 05', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 40000, 'user/images/appetizer_5.jpg', 1, 0, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(16, 8, 'bento 01', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 83000, 'user/images/bento_1.jpg', 1, 0, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(17, 8, 'bento 02', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 83000, 'user/images/bento_2.jpg', 1, 0, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(18, 8, 'bento 03', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 83000, 'user/images/bento_3.jpg', 1, 0, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(19, 8, 'bento 04', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 83000, 'user/images/bento_4.jpg', 1, 0, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(20, 8, 'bento 05', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 83000, 'user/images/bento_5.jpg', 1, 0, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(21, 8, 'bento 06', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 84000, 'user/images/bento_6.jpg', 1, 0, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(22, 8, 'bento 07', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 85000, 'user/images/bento_7.jpg', 1, 0, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(23, 9, 'dessert 01', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 43000, 'user/images/dessert_1.jpg', 1, 0, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(24, 9, 'dessert 02', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 42000, 'user/images/dessert_2.jpg', 1, 0, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(25, 9, 'dessert 03', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 40000, 'user/images/dessert_3.jpg', 1, 0, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(26, 10, 'main dish 01', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 120000, 'user/images/dish_1.jpg', 1, 0, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(27, 10, 'main dish 02', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 130000, 'user/images/dish_2.jpg', 1, 0, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(28, 10, 'main dish 03', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 125000, 'user/images/dish_3.jpg', 1, 0, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(29, 11, 'fried 01', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 84000, 'user/images/fried_1.jpg', 1, 0, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(30, 11, 'fried 02', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 83000, 'user/images/fried_2.jpg', 1, 0, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(31, 11, 'fried 03', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 86000, 'user/images/fried_3.jpg', 1, 0, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(32, 11, 'fried 04', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 84000, 'user/images/fried_4.jpg', 1, 0, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(33, 11, 'fried 05', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 84000, 'user/images/fried_5.jpg', 1, 0, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(34, 11, 'fried 06', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 82000, 'user/images/fried_6.jpg', 1, 0, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(35, 11, 'fried 07', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 84000, 'user/images/fried_7.jpg', 1, 0, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(36, 12, 'maki 01', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 85000, 'user/images/maki_1.jpg', 1, 0, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(37, 12, 'maki 02', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 84000, 'user/images/maki_2.jpg', 1, 0, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(38, 12, 'maki 03', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 83000, 'user/images/maki_3.jpg', 1, 0, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(39, 12, 'maki 04', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 81000, 'user/images/maki_4.jpg', 1, 0, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(40, 12, 'maki 05', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 82000, 'user/images/maki_5.jpg', 1, 0, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(41, 12, 'maki 06', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 85000, 'user/images/maki_6.jpg', 1, 0, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(42, 12, 'maki 07', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 80000, 'user/images/maki_7.jpg', 1, 0, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(43, 13, 'Combo menu 1', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 450000, 'user/images/menu_1.jpg', 1, 1, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(44, 13, 'Combo menu 2', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 470000, 'user/images/menu_2.jpg', 1, 1, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(45, 13, 'Combo menu 3', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 460000, 'user/images/menu_3.jpg', 1, 1, '2021-01-24 09:21:53', '2021-01-24 09:21:53'),
(46, 13, 'Combo menu 4', 'Far far away, behind the word mountains, far from the countries\n                Vokalia and Consonantia.', 450000, 'user/images/menu_4.jpg', 1, 1, '2021-01-24 09:21:53', '2021-01-24 09:21:53');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id_reservation` int(10) UNSIGNED NOT NULL,
  `id_customer` int(10) UNSIGNED NOT NULL,
  `id_table` int(10) UNSIGNED NOT NULL,
  `event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numberof_person` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `checkin_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id_reservation`, `id_customer`, `id_table`, `event`, `numberof_person`, `checkin_date`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '', '5', '2016-01-23 11:53:20', '2021-01-24 09:21:54', '2021-01-24 09:21:54'),
(2, 1, 1, '', '5', '2016-01-23 11:53:20', '2021-01-24 09:21:54', '2021-01-24 09:21:54');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id_section` int(10) UNSIGNED NOT NULL,
  `id_widget` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `background` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` int(11) NOT NULL,
  `homepage` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id_section`, `id_widget`, `title`, `content`, `image`, `background`, `display`, `homepage`, `created_at`, `updated_at`) VALUES
(1, 3, '000 (123) 456 7890', 'A small river named Duden flows by their place and supplies.', 'icon-phone', '', 1, 1, '2021-01-24 09:21:55', '2021-01-24 09:21:55'),
(2, 3, '198 West 21th Street', '203 Fake St. Mountain View, San Francisco, California, USA', 'icon-my_location', '', 1, 1, '2021-01-24 09:21:55', '2021-01-24 09:21:55'),
(3, 3, 'Open Monday-Friday', '8:00am - 9:00pm', 'icon-clock-o', '', 1, 1, '2021-01-24 09:21:55', '2021-01-24 09:21:55'),
(4, 3, 'Our Story', 'On her way she met a copy. The copy warned the Little Blind Text, that where it came from it\n                would have been rewritten a thousand times and everything that was left from its origin would be\n                the word \"and\" and the Little Blind Text should turn around and return to its own, safe country.\n                But nothing the copy said could convince her and so it didn’t take long until a few insidious\n                Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their\n                agency, where they abused her for their.', 'user/images/about.jpg', '', 2, 1, '2021-01-24 09:21:55', '2021-01-24 09:21:55'),
(5, 3, 'Easy to Order', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.', 'flaticon-choices', '', 3, 1, '2021-01-24 09:21:55', '2021-01-24 09:21:55'),
(6, 3, 'Fastest Delivery', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.', 'flaticon-delivery-truck', '', 3, 1, '2021-01-24 09:21:55', '2021-01-24 09:21:55'),
(7, 3, 'Quality Coffee', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.', 'flaticon-coffee-bean', '', 3, 1, '2021-01-24 09:21:55', '2021-01-24 09:21:55'),
(8, 3, 'Our Menu', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.', 'user/images/menu_1.jpg;user/images/menu_2.jpg;user/images/menu_3.jpg;user/images/menu_4.jpg', '', 4, 1, '2021-01-24 09:21:55', '2021-01-24 09:21:55'),
(9, 3, '100', 'Coffee Branches', 'flaticon-coffee-cup', 'user/images/menu_1.jpg', 5, 1, '2021-01-24 09:21:55', '2021-01-24 09:21:55'),
(10, 3, '85', 'Number of Awards', 'flaticon-coffee-cup', '', 5, 1, '2021-01-24 09:21:55', '2021-01-24 09:21:55'),
(11, 3, '10,567', 'Happy Customer', 'flaticon-coffee-cup', '', 5, 1, '2021-01-24 09:21:55', '2021-01-24 09:21:55'),
(12, 3, '900', 'Staff', 'flaticon-coffee-cup', '', 5, 1, '2021-01-24 09:21:55', '2021-01-24 09:21:55'),
(13, 3, 'Best Coffee Sellers', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', '', '', 6, 1, '2021-01-24 09:21:55', '2021-01-24 09:21:55'),
(14, 3, '', '', '', '', 7, 1, '2021-01-24 09:21:55', '2021-01-24 09:21:55'),
(15, 3, 'Our Products', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', '', '', 8, 1, '2021-01-24 09:21:55', '2021-01-24 09:21:55'),
(16, 3, 'Customers Says', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', '', 'user/images/bg_1.jpg', 9, 1, '2021-01-24 09:21:55', '2021-01-24 09:21:55'),
(17, 3, 'Recent from blog', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', '', '', 10, 10, '2021-01-24 09:21:55', '2021-01-24 09:21:55');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id_slide` int(10) UNSIGNED NOT NULL,
  `id_widget` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id_slide`, `id_widget`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 2, 'slide', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', 'user/images/bg_1.jpg', '2021-01-24 09:21:55', '2021-01-24 09:21:55'),
(2, 2, 'slide 2', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', 'user/images/bg_2.jpg', '2021-01-24 09:21:55', '2021-01-24 09:21:55'),
(3, 2, 'slide 3', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.', 'user/images/bg_3.jpg', '2021-01-24 09:21:55', '2021-01-24 09:21:55');

-- --------------------------------------------------------

--
-- Table structure for table `table`
--

CREATE TABLE `table` (
  `id_table` int(10) UNSIGNED NOT NULL,
  `status_table` tinyint(1) NOT NULL,
  `services` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table`
--

INSERT INTO `table` (`id_table`, `status_table`, `services`, `view`, `created_at`, `updated_at`) VALUES
(1, 1, '', '', '2021-01-24 09:21:51', '2021-01-24 09:21:51'),
(2, 1, '', '', '2021-01-24 09:21:51', '2021-01-24 09:21:51');

-- --------------------------------------------------------

--
-- Table structure for table `visit`
--

CREATE TABLE `visit` (
  `id_visit` int(10) UNSIGNED NOT NULL,
  `total_visit` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visit`
--

INSERT INTO `visit` (`id_visit`, `total_visit`, `created_at`, `updated_at`) VALUES
(1, 0, '2021-01-24 09:21:50', '2021-01-24 09:21:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_account`),
  ADD KEY `account_id_position_foreign` (`id_position`);

--
-- Indexes for table `admin_sidebar`
--
ALTER TABLE `admin_sidebar`
  ADD PRIMARY KEY (`id_sidebar`);

--
-- Indexes for table `admin_widget`
--
ALTER TABLE `admin_widget`
  ADD PRIMARY KEY (`id_widget`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id_bill`),
  ADD KEY `bill_id_account_foreign` (`id_account`),
  ADD KEY `bill_id_order_detail_foreign` (`id_order_detail`),
  ADD KEY `bill_id_customer_foreign` (`id_customer`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`),
  ADD KEY `blog_id_blg_cate_foreign` (`id_blg_cate`),
  ADD KEY `blog_id_account_foreign` (`id_account`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`id_blg_cate`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`),
  ADD UNIQUE KEY `customer_email_unique` (`email`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`),
  ADD KEY `feedback_id_customer_foreign` (`id_customer`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id_footer`),
  ADD KEY `footer_id_widget_foreign` (`id_widget`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `gcode_detail`
--
ALTER TABLE `gcode_detail`
  ADD PRIMARY KEY (`id_gcode_detail`),
  ADD KEY `gcode_detail_id_gcode_foreign` (`id_gcode`),
  ADD KEY `gcode_detail_id_customer_foreign` (`id_customer`);

--
-- Indexes for table `giftcode`
--
ALTER TABLE `giftcode`
  ADD PRIMARY KEY (`id_gcode`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id_header`),
  ADD KEY `header_id_widget_foreign` (`id_widget`);

--
-- Indexes for table `manage`
--
ALTER TABLE `manage`
  ADD PRIMARY KEY (`id_manage`),
  ADD KEY `manage_id_blog_foreign` (`id_blog`),
  ADD KEY `manage_id_customer_foreign` (`id_customer`),
  ADD KEY `manage_id_comment_foreign` (`id_comment`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `order_id_customer_foreign` (`id_customer`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id_order_detail`),
  ADD KEY `order_detail_id_order_foreign` (`id_order`),
  ADD KEY `order_detail_id_product_foreign` (`id_product`);

--
-- Indexes for table `payment_detail`
--
ALTER TABLE `payment_detail`
  ADD PRIMARY KEY (`id_payment_detail`),
  ADD KEY `payment_detail_id_payment_foreign` (`id_payment`),
  ADD KEY `payment_detail_id_customer_foreign` (`id_customer`);

--
-- Indexes for table `payment_method`
--
ALTER TABLE `payment_method`
  ADD PRIMARY KEY (`id_payment`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id_position`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `product_id_menu_foreign` (`id_menu`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reservation`),
  ADD KEY `reservation_id_customer_foreign` (`id_customer`),
  ADD KEY `reservation_id_table_foreign` (`id_table`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id_section`),
  ADD KEY `section_id_widget_foreign` (`id_widget`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id_slide`),
  ADD KEY `slide_id_widget_foreign` (`id_widget`);

--
-- Indexes for table `table`
--
ALTER TABLE `table`
  ADD PRIMARY KEY (`id_table`);

--
-- Indexes for table `visit`
--
ALTER TABLE `visit`
  ADD PRIMARY KEY (`id_visit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id_account` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin_sidebar`
--
ALTER TABLE `admin_sidebar`
  MODIFY `id_sidebar` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `admin_widget`
--
ALTER TABLE `admin_widget`
  MODIFY `id_widget` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id_bill` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `id_blg_cate` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id_footer` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gcode_detail`
--
ALTER TABLE `gcode_detail`
  MODIFY `id_gcode_detail` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `giftcode`
--
ALTER TABLE `giftcode`
  MODIFY `id_gcode` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id_header` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `manage`
--
ALTER TABLE `manage`
  MODIFY `id_manage` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id_order_detail` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment_detail`
--
ALTER TABLE `payment_detail`
  MODIFY `id_payment_detail` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment_method`
--
ALTER TABLE `payment_method`
  MODIFY `id_payment` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id_position` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reservation` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id_section` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id_slide` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `table`
--
ALTER TABLE `table`
  MODIFY `id_table` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visit`
--
ALTER TABLE `visit`
  MODIFY `id_visit` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_id_position_foreign` FOREIGN KEY (`id_position`) REFERENCES `position` (`id_position`);

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_id_account_foreign` FOREIGN KEY (`id_account`) REFERENCES `account` (`id_account`),
  ADD CONSTRAINT `bill_id_customer_foreign` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  ADD CONSTRAINT `bill_id_order_detail_foreign` FOREIGN KEY (`id_order_detail`) REFERENCES `order_detail` (`id_order_detail`);

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_id_account_foreign` FOREIGN KEY (`id_account`) REFERENCES `account` (`id_account`),
  ADD CONSTRAINT `blog_id_blg_cate_foreign` FOREIGN KEY (`id_blg_cate`) REFERENCES `blog_category` (`id_blg_cate`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_id_customer_foreign` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`);

--
-- Constraints for table `footer`
--
ALTER TABLE `footer`
  ADD CONSTRAINT `footer_id_widget_foreign` FOREIGN KEY (`id_widget`) REFERENCES `admin_widget` (`id_widget`);

--
-- Constraints for table `gcode_detail`
--
ALTER TABLE `gcode_detail`
  ADD CONSTRAINT `gcode_detail_id_customer_foreign` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  ADD CONSTRAINT `gcode_detail_id_gcode_foreign` FOREIGN KEY (`id_gcode`) REFERENCES `giftcode` (`id_gcode`);

--
-- Constraints for table `header`
--
ALTER TABLE `header`
  ADD CONSTRAINT `header_id_widget_foreign` FOREIGN KEY (`id_widget`) REFERENCES `admin_widget` (`id_widget`);

--
-- Constraints for table `manage`
--
ALTER TABLE `manage`
  ADD CONSTRAINT `manage_id_blog_foreign` FOREIGN KEY (`id_blog`) REFERENCES `blog` (`id_blog`),
  ADD CONSTRAINT `manage_id_comment_foreign` FOREIGN KEY (`id_comment`) REFERENCES `comment` (`id_comment`),
  ADD CONSTRAINT `manage_id_customer_foreign` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_id_customer_foreign` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`);

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_id_order_foreign` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`),
  ADD CONSTRAINT `order_detail_id_product_foreign` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`);

--
-- Constraints for table `payment_detail`
--
ALTER TABLE `payment_detail`
  ADD CONSTRAINT `payment_detail_id_customer_foreign` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  ADD CONSTRAINT `payment_detail_id_payment_foreign` FOREIGN KEY (`id_payment`) REFERENCES `payment_method` (`id_payment`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_id_menu_foreign` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_id_customer_foreign` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  ADD CONSTRAINT `reservation_id_table_foreign` FOREIGN KEY (`id_table`) REFERENCES `table` (`id_table`);

--
-- Constraints for table `section`
--
ALTER TABLE `section`
  ADD CONSTRAINT `section_id_widget_foreign` FOREIGN KEY (`id_widget`) REFERENCES `admin_widget` (`id_widget`);

--
-- Constraints for table `slide`
--
ALTER TABLE `slide`
  ADD CONSTRAINT `slide_id_widget_foreign` FOREIGN KEY (`id_widget`) REFERENCES `admin_widget` (`id_widget`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
