-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 11, 2020 at 05:03 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edesign`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `job_title`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'NguyenThienHung', '18520802@gm.uit.edu.vn', NULL, '$2y$10$artvumqu//M80qmj6pdI4u7MncClRBZYX7bRn8oaoF3.EIJjg8esi', 'Manager', NULL, '2020-06-25 11:09:05', '2020-06-25 11:09:05'),
(2, 'hungnt', 'hungnguyenthien97@gmail.com', NULL, '$2y$10$bilnCp.tc13YyowDKvMsGOp2XnICvX.UFBNYhalbta4UoI3AuywB2', 'Manager', NULL, '2020-06-25 11:14:16', '2020-06-25 11:14:16');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(4, '2020_06_25_162236_create_admins_table', 2),
(5, '2020_07_05_161703_create_tbl_category_product', 3),
(6, '2020_07_07_202649_create_tbl_product', 4),
(7, '2020_07_10_183733_tbl_shipping', 5),
(8, '2020_07_11_033114_tbl_payment', 6),
(9, '2020_07_11_050800_tbl_order_details', 7);

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
-- Table structure for table `tbl_category_product`
--

CREATE TABLE `tbl_category_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_status` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`id`, `category_name`, `category_desc`, `category_status`, `remember_token`, `created_at`, `updated_at`) VALUES
(11, 'Nam', 'Quần áo dành cho nam', 1, NULL, NULL, NULL),
(12, 'Nữ', 'Quần áo dành cho nữ', 1, NULL, NULL, NULL),
(13, 'Unisex', 'Quần áo dành cho tất cả mọi ng', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_details_id` int(10) UNSIGNED NOT NULL,
  `payment_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(8,2) NOT NULL,
  `order_qty` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `payment_id`, `product_id`, `product_name`, `product_price`, `order_qty`, `remember_token`, `created_at`, `updated_at`) VALUES
(14, 14, 7, 'áo thun nam ok1208976', 100000.00, 1, NULL, NULL, NULL),
(15, 15, 12, 'iphone 6édfsdfsd', 100000.00, 4, NULL, NULL, NULL),
(16, 16, 36, 'áo thun unisex form rộng', 70000.00, 4, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(10) UNSIGNED NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_fee` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` int(11) NOT NULL,
  `payment_method` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `shipping_id`, `payment_fee`, `payment_status`, `payment_method`, `remember_token`, `created_at`, `updated_at`) VALUES
(14, 23, '121,000.00', 2, 1, NULL, NULL, NULL),
(15, 24, '484,000.00', 2, 1, NULL, NULL, NULL),
(16, 25, '338,800.00', 1, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_status` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `category_id`, `product_desc`, `product_content`, `product_price`, `product_image`, `product_size`, `product_color`, `product_status`, `remember_token`, `created_at`, `updated_at`) VALUES
(14, 'áo thun nam form rộng', 11, 'áo thun nam', 'áo thun đẹp', 60000, 'ao_thun_nam_form_rong_hinh_chu_love_den_60k.jpg', 'M', 'đen', 1, NULL, NULL, NULL),
(15, 'áo thun nam form rộng', 11, 'áo thun nam', 'áo thun đẹp', 60000, 'ao_thun_nam_form_rong_hinh_chu_love_trang_60k.jpg', 'M', 'trắng', 1, NULL, NULL, NULL),
(16, 'áo thun nam form rộng hình con mèo', 11, 'áo thun nam', 'áo thun đẹp', 140000, 'ao_thun_nam_form_rong_hinh_chu_meo_deo_king_140k.jpg', 'L', 'đen', 1, NULL, NULL, NULL),
(17, 'áo thun nam form rộng hình MM19', 11, 'áo thun nam', 'áo thun đẹp', 60000, 'ao_thun_nam_form_rong_hinh_MM19_den_60k.jpg', 'L', 'đen', 1, NULL, NULL, NULL),
(18, 'áo thun nam form rộng hình halloween', 11, 'áo thun nam', 'áo thun đẹp', 60000, 'ao_thun_nam_form_rong_hinh_halloween_60k.jpg', 'M', 'đen', 1, NULL, NULL, NULL),
(19, 'áo thun nam form rộng hình tai nghe', 11, 'áo thun nam', 'áo thun đẹp', 60000, 'ao_thun_nam_form_rong_hinh_tai_nghe_60k.jpg', 'XL', 'trắng', 1, NULL, NULL, NULL),
(20, 'áo thun nam form rộng hình fire trenf', 11, 'áo thun nam', 'áo thun đẹp', 60000, 'ao_thun_nam_free_fire_trenf_60k.jpg', 'M', 'trắng', 1, NULL, NULL, NULL),
(21, 'áo thun nam form rộng hình con mèo', 11, 'áo thun nam', 'áo thun đẹp', 60000, 'ao_thun_nam_hinh_meo_than_tai_60k.jpg', 'L', 'vàng', 1, NULL, NULL, NULL),
(22, 'áo thun nam form rộng hình con mèo', 11, 'áo thun nam', 'áo thun đẹp', 60000, 'ao_thun_nam_hinh_meo_than_tai_60k_1.jpg', 'M', 'trắng', 1, NULL, NULL, NULL),
(23, 'áo thun nam form rộng hình con mèo', 11, 'áo thun nam', 'áo thun đẹp', 60000, 'ao_thun_nam_hinh_meo_than_tai_60k_2.jpg', 'L', 'đen', 1, NULL, NULL, NULL),
(24, 'áo thun nam form rộng hình pin yếu', 11, 'áo thun nam', 'áo thun đẹp', 50000, 'ao_thun_nam_hinh_pin_yeu_50k(1).jpg', 'S', 'đen', 1, NULL, NULL, NULL),
(25, 'áo thun nam thể thao', 11, 'áo thun nam thể thao', 'áo thun đẹp', 70000, 'ao_thun_nam_the_thao_YODI_TOP_70k.jpg', 'L', 'vàng đen', 1, NULL, NULL, NULL),
(26, 'áo thun nữ hình băng keo', 12, 'áo thun nữ', 'áo thun đẹp', 60000, 'ao_thun_nu_form_rong_hinh_bang_keo_60k.jpg', 'M', 'tím', 1, NULL, NULL, NULL),
(27, 'áo thun nữ hình con gấu', 12, 'áo thun nữ', 'áo thun đẹp', 60000, 'ao_thun_nu_form_rong_hinh_con_gau_1_60k.jpg', 'M', 'đen', 1, NULL, NULL, NULL),
(28, 'áo thun nữ hình con gấy', 12, 'áo thun nữ', 'áo thun đẹp', 60000, 'ao_thun_nu_form_rong_hinh_con_gau_60k.jpg', 'L', 'vàng', 1, NULL, NULL, NULL),
(29, 'áo thun nữ hình quả chanh', 12, 'áo thun nữ', 'áo thun đẹp', 60000, 'ao_thun_nu_form_rong_hinh_qua_chanh_60k.jpg', 'M', 'tím', 1, NULL, NULL, NULL),
(30, 'áo thun nữ hình SE', 12, 'áo thun nữ', 'áo thun đẹp', 60000, 'ao_thun_nu_form_rong_hinhSE-60k.jpg', 'M', 'tím', 1, NULL, NULL, NULL),
(31, 'áo thun nữ hình SE', 12, 'áo thun nữ', 'áo thun đẹp', 60000, 'ao_thun_nu_form_rong_hinhSE-60k_2.jpg', 'L', 'cam', 1, NULL, NULL, NULL),
(32, 'áo thun nữ cho tín đồ trà sữa', 12, 'áo thun nữ', 'áo thun đẹp', 70000, 'ao_thun_nu_form_rong_tin_do_tra_sua_1_70k.jpg', 'M', 'xanh dương', 1, NULL, NULL, NULL),
(33, 'áo thun nữ cho tín đồ trà sữa', 12, 'áo thun nữ', 'áo thun đẹp', 60000, 'ao_thun_nu_form_rong_tin_do_tra_sua_70k.jpg', 'M', 'đen', 1, NULL, NULL, NULL),
(34, 'áo thun tay lửng unisex', 13, 'áo thun unisex', 'áo thun đẹp', 70000, 'ao_thun_tay_lung_unisex_1_70k.jpg', 'L', 'tím', 1, NULL, NULL, NULL),
(35, 'áo thun unisex hình XOXO', 13, 'áo thun unisex', 'áo thun đẹp', 70000, 'ao_thun_tay_lung_unisex_70k.jpg', 'M', 'trắng', 1, NULL, NULL, NULL),
(36, 'áo thun unisex form rộng', 13, 'áo thun unisex', 'áo thun đẹp', 70000, 'ao_thun_tay_lung_unisex_in_chu_70k.jpg', 'L', 'tím', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `shipping_id` int(10) UNSIGNED NOT NULL,
  `shipping_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_notes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `shipping_name`, `shipping_address`, `shipping_phone`, `shipping_email`, `shipping_notes`, `remember_token`, `created_at`, `updated_at`) VALUES
(22, 'Hưng', 'ấdasdasd', '123749124324', 'test@test', 'sấd', NULL, NULL, NULL),
(23, 'Hưng 5', 'ádasd', '123749124324', 'sadasdasd@test', 'ádasd', NULL, NULL, NULL),
(24, 'Hưng 5', 'ádasfasd', '123749124324', 'sasda@test', 'ấdas', NULL, NULL, NULL),
(25, 'Hưng 5', 'tp hcm', '123749124324', 'sadasdasd@test', 'ádasd', NULL, NULL, NULL);

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'thien hung', '18520802@gm.uit.edu.vn', NULL, '$2y$10$Dx9SQGSEJvdVFKcWOi6BAOP/IiC2Jb5wB/0bM9eFWEds1EomeUVyS', NULL, '2020-06-25 10:59:17', '2020-06-25 10:59:17'),
(2, 'nthungok', 'test@test', NULL, '$2y$10$uN7t1DKO3Y/nTGqJ2Znv/.6Beot7n7.0D7PRarjS2hwm9aHtbGx9S', NULL, '2020-07-08 21:27:53', '2020-07-08 21:27:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

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
-- Indexes for table `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`shipping_id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `shipping_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
