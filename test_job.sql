-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2020 at 04:08 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_job`
--

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_09_19_111402_create_products_table', 2),
(5, '2020_09_19_1114021_create_products_table', 3),
(6, '2020_09_19_111401_create_products_table', 4),
(7, '2020_09_19_111411_create_products_table', 5),
(8, '2020_09_19_111414_create_products_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(6,2) NOT NULL,
  `in_stock` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '0 => No, 1=> Yes',
  `quantity` int(11) NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `photo`, `price`, `in_stock`, `quantity`, `color`, `size`, `created_at`, `updated_at`) VALUES
(1, 'Girls Top', 'Pink color top', 'https://static.hopscotch.in/fstatic/product/202008/eb075803-f91e-4af1-916b-3d17e8298c2e_full.jpg?version=1596544591624&tr=w-720,c-at_max,n-normal', '499.00', '1', 10, 'Pink', 'S,M,L,XL', '2020-09-19 07:56:13', '2020-09-19 07:56:13'),
(2, 'T-shirt', 'Kids t-shirt', 'https://static.hopscotch.in/fstatic/product/201906/9f7c13d7-8924-40a6-9edf-4cd9b9378af3_full.jpg?version=1560655998127&tr=w-720,c-at_max,n-normal', '544.00', '1', 5, 'Black', 'S,M,L,XL', '2020-09-19 07:56:13', '2020-09-19 07:56:13'),
(3, 'BABA suit', 'New collection', 'https://ae01.alicdn.com/kf/HTB1aTHvNpzqK1RjSZFvq6AB7VXaT/Baby-Boy-Clothes-Boys-Clothing-Set-Shirt-Pants-Long-Sleeve-Shirt-Gentleman-Two-Suits-Bow-Tie.jpg_q50.jpg', '1400.00', '1', 4, 'Black', 'S,M,L,XL', '2020-09-19 07:56:13', '2020-09-19 07:56:13'),
(4, 'Blue dress', 'Blue color dress', 'https://static.hopscotch.in/fstatic/product/201711/e5773f70-3e71-4c3d-962c-24b701ff7895_full.jpg?version=1511423839845&tr=w-720,c-at_max,n-normal', '1159.99', '1', 8, 'Blue', 'S,M,L,XL', '2020-09-19 07:56:14', '2020-09-19 07:56:14'),
(5, 'Kids dress', 'kids dress', 'https://static.hopscotch.in/fstatic/product/201811/f5891b88-2b12-4c1c-9b6a-dc8a629305d1_full.jpg?version=1541055393348&tr=w-720,c-at_max,n-normal', '968.00', '1', 6, 'yellow', 'S,M,L,XL', '2020-09-19 07:56:14', '2020-09-19 07:56:14'),
(6, 'Doll Print Full Sleeves Top and Leggings Set - Yellow', 'Doll Print Full Sleeves Top and Leggings Set - Yellow', 'https://static.hopscotch.in/fstatic/product/201908/ec3cf1ef-71fb-4907-801a-6c9af5b13f1a_full.jpg?version=1567160622312&tr=w-720,c-at_max,n-normal', '1229.99', '1', 14, 'yellow', 'S,M,L,XL', '2020-09-19 07:56:14', '2020-09-19 07:56:14'),
(7, 'Navy Cold Shoulder Applique Casual Dress', 'Navy Cold Shoulder Applique Casual Dress', 'https://static.hopscotch.in/fstatic/product/202008/eb075803-f91e-4af1-916b-3d17e8298c2e_full.jpg?version=1596544591624&tr=w-720,c-at_max,n-normal', '1529.99', '1', 10, 'Blue', 'S,M,L,XL', '2020-09-19 07:56:14', '2020-09-19 07:56:14'),
(8, 'All Over Print Sleeveless Red Dress', 'All Over Print Sleeveless Red Dress', 'https://static.hopscotch.in/fstatic/product/201905/a7bd07e6-6f04-47b5-a023-52f30aede0dd_full.jpg?version=1559128302352&tr=w-720,c-at_max,n-normal', '1229.99', '1', 9, 'Red', 'S,M,L,XL', '2020-09-19 07:56:14', '2020-09-19 07:56:14'),
(9, 'Baby boys outfit', 'Baby boys outfit', 'https://m.media-amazon.com/images/I/81vHbQ-TjyL._AC_SR700,525_.jpg', '1229.99', '1', 8, 'Black', 'S,M,L,XL', '2020-09-19 07:56:14', '2020-09-19 07:56:14'),
(10, 'Fuchsia Text Print Cold Shoulder Sleeves Top And Short Set', 'Fuchsia Text Print Cold Shoulder Sleeves Top And Short Set', 'https://static.hopscotch.in/fstatic/product/201904/2690c339-6b9f-4542-a4b7-fd411edad921_full.jpg?version=1555504550098&tr=w-720,c-at_max,n-normal', '730.00', '1', 6, 'Black', 'S,M,L,XL', '2020-09-19 07:56:14', '2020-09-19 07:56:14'),
(11, 'Polka Dots Half Sleeves White Top and Skirt Set', 'Polka Dots Half Sleeves White Top and Skirt Set', 'https://static.hopscotch.in/fstatic/product/202003/e9d23ef8-4fb2-483c-9600-eb6fd58c00c0_full.jpg?version=1583499083272&tr=w-720,c-at_max,n-normal', '600.00', '1', 15, 'Black', 'S,M,L,XL', '2020-09-19 07:56:14', '2020-09-19 07:56:14'),
(12, 'Black Full Sleeves Geometric Star Dress', 'Black Full Sleeves Geometric Star Dress', 'https://static.hopscotch.in/fstatic/product/201910/72e3911e-f51d-4b3e-9519-c3a4395519c2_full.jpg?version=1571628230067&tr=w-720,c-at_max,n-medium', '1039.99', '1', 20, 'Black', 'S,M,L,XL', '2020-09-19 07:56:14', '2020-09-19 07:56:14'),
(13, 'Carhartt Workwear Pocket S/S Tee K87', 'Carhartt Workwear Pocket S/S Tee K87', 'https://m.media-amazon.com/images/I/81vHbQ-TjyL._AC_SR700,525_.jpg', '929.99', '1', 14, 'Black', 'S,M,L,XL', '2020-09-19 07:56:14', '2020-09-19 07:56:14'),
(14, '24/7 Solid Lunar Drop Shoulder Classic Tee', '24/7 Solid Lunar Drop Shoulder Classic Tee', 'https://static.hopscotch.in/fstatic/product/201909/3417d040-496b-4d60-8fa2-fa1289e28051_full.jpg?version=1569561284492&tr=w-720,c-at_max,n-normal', '729.99', '1', 20, 'Black', 'S,M,L,XL', '2020-09-19 07:56:14', '2020-09-19 07:56:14'),
(15, 'Kids Toddler Boy Fashion Winter Clothes Set Letter Print Long Sleeve Shirts Pants Outfit', 'Kids Toddler Boy Fashion Winter Clothes Set Letter Print Long Sleeve Shirts Pants Outfit', 'https://m.media-amazon.com/images/I/81vHbQ-TjyL._AC_SR700,525_.jpg', '1279.99', '1', 15, 'Black', 'S,M,L,XL', '2020-09-19 07:56:14', '2020-09-19 07:56:14'),
(16, 'Kids Petite | Baby, Toddler & Kids Clothing', 'Kids Petite | Baby, Toddler & Kids Clothing', 'https://m.media-amazon.com/images/I/81vHbQ-TjyL._AC_SR700,525_.jpg', '999.99', '1', 10, 'Black', 'S,M,L,XL', '2020-09-19 07:56:14', '2020-09-19 07:56:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0 => User, 1=> Admin',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'garima', 'garima@yopmail.com', NULL, '$2y$10$i.zZMXvG8/LxTLGLnmXMkOc/envPQiQj62lnE1SXscNDVJnMF2C0O', '0', NULL, '2020-09-18 23:27:15', '2020-09-18 23:27:15'),
(2, 'admin', 'admin@yopmail.com', NULL, '$2y$10$omtyj2CHXEFcYisn.lYhkeYTqAPXyjoGSHyLiQKSi3XvJwgw0px8u', '1', NULL, '2020-09-18 23:27:42', '2020-09-18 23:27:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
