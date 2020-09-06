-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2020 at 05:05 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `niak_code`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternative`
--

CREATE TABLE `alternative` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `value_set` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alternative`
--

INSERT INTO `alternative` (`id`, `code`, `name`, `description`, `value_set`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'A1', 'Ten Gym', 'Ten Gym berlokasi di Palembang', 1, 1, NULL, '2020-06-16 19:31:04', '2020-06-16 21:26:40');

-- --------------------------------------------------------

--
-- Table structure for table `alternative_value`
--

CREATE TABLE `alternative_value` (
  `id` int(11) NOT NULL,
  `alternative_id` int(11) NOT NULL,
  `criteria_id` int(11) NOT NULL,
  `criterion_value_id` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alternative_value`
--

INSERT INTO `alternative_value` (`id`, `alternative_id`, `criteria_id`, `criterion_value_id`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(26, 1, 1, 2, 1, NULL, '2020-06-18 20:23:41', '2020-06-18 20:23:41'),
(27, 1, 2, 9, 1, NULL, '2020-06-18 20:23:41', '2020-06-18 20:23:41'),
(28, 1, 3, 15, 1, NULL, '2020-06-18 20:23:41', '2020-06-18 20:23:41'),
(29, 1, 4, 21, 1, NULL, '2020-06-18 20:23:41', '2020-06-18 20:23:41'),
(30, 1, 5, 33, 1, NULL, '2020-06-18 20:23:41', '2020-06-18 20:23:41');

-- --------------------------------------------------------

--
-- Table structure for table `criteria`
--

CREATE TABLE `criteria` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `attribute` varchar(255) NOT NULL,
  `weight` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `criteria`
--

INSERT INTO `criteria` (`id`, `name`, `attribute`, `weight`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Harga Fitness', 'Cost', 25, 1, NULL, '2020-06-16 04:21:56', '2020-06-16 04:21:56'),
(2, 'Lokasi Fitness', 'Benefit', 25, 1, 1, '2020-06-16 04:26:16', '2020-06-16 05:07:38'),
(3, 'Fasilitas Fitness', 'Benefit', 30, 1, 1, '2020-06-16 04:26:39', '2020-06-16 05:07:50'),
(4, 'Rating Fitness', 'Benefit', 15, 1, NULL, '2020-06-16 04:26:56', '2020-06-16 04:26:56'),
(5, 'Dukungan Umur', 'Benefit', 5, 1, NULL, '2020-06-16 04:27:38', '2020-06-16 04:27:38');

-- --------------------------------------------------------

--
-- Table structure for table `criterion_value`
--

CREATE TABLE `criterion_value` (
  `id` int(11) NOT NULL,
  `criteria_id` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `value` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `criterion_value`
--

INSERT INTO `criterion_value` (`id`, `criteria_id`, `description`, `value`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 1, 'Besar sama 300.000', 5, 1, NULL, '2020-06-16 05:42:41', '2020-06-16 05:42:41'),
(2, 1, 'Antara 251.000 sd 300.000', 4, 1, NULL, '2020-06-16 05:44:56', '2020-06-16 05:44:56'),
(4, 1, 'Antara 151.000 sd 250.000', 3, 1, NULL, '2020-06-16 17:35:36', '2020-06-16 17:35:36'),
(5, 1, 'Antara 101.000 sd 150.000', 2, 1, NULL, '2020-06-16 17:36:04', '2020-06-16 17:36:04'),
(6, 1, 'Kecil dari 100.000', 1, 1, NULL, '2020-06-16 17:36:27', '2020-06-16 17:36:27'),
(8, 2, 'Berada Jauh dari Pusat Kota', 1, 1, NULL, '2020-06-16 18:30:35', '2020-06-16 18:30:35'),
(9, 2, 'Berada di Pusat Pemerintahan/Perkantoran', 2, 1, 1, '2020-06-16 18:45:00', '2020-06-16 18:55:39'),
(11, 2, 'Berada di dekat Bandara', 3, 1, NULL, '2020-06-16 18:56:36', '2020-06-16 18:56:36'),
(12, 2, 'Berada di dekat Pusat Jajanan', 4, 1, NULL, '2020-06-16 18:56:45', '2020-06-16 18:56:45'),
(13, 2, 'Berada di Pusat Kota', 5, 1, NULL, '2020-06-16 18:56:54', '2020-06-16 18:56:54'),
(14, 3, 'Tingkat keocokan fasilitas fitness 0 – 0,2', 1, 1, NULL, '2020-06-16 18:58:32', '2020-06-16 18:58:32'),
(15, 3, 'Tingkat keocokan fasilitas fitness 0,21 – 0,4', 2, 1, NULL, '2020-06-16 18:59:06', '2020-06-16 18:59:06'),
(16, 3, 'Tingkat keocokan fasilitas fitness 0,41 – 0,6', 3, 1, NULL, '2020-06-16 18:59:30', '2020-06-16 18:59:30'),
(17, 3, 'Tingkat keocokan fasilitas fitness 0,61 – 0,8', 4, 1, NULL, '2020-06-16 18:59:56', '2020-06-16 18:59:56'),
(18, 3, 'Tingkat keocokan fasilitas fitness 0,81 – 1', 5, 1, NULL, '2020-06-16 19:00:24', '2020-06-16 19:00:24'),
(19, 4, 'Rating 0 – 1.0', 1, 1, NULL, '2020-06-16 19:01:43', '2020-06-16 19:01:43'),
(20, 4, 'Rating 1,1 – 2.0', 2, 1, NULL, '2020-06-16 19:01:54', '2020-06-16 19:01:54'),
(21, 4, 'Rating 2,1 – 3.0', 3, 1, NULL, '2020-06-16 19:02:03', '2020-06-16 19:02:03'),
(22, 4, 'Rating 3,1 – 4.0', 4, 1, NULL, '2020-06-16 19:02:16', '2020-06-16 19:02:16'),
(23, 4, 'Rating 4,1 – 5.0', 5, 1, NULL, '2020-06-16 19:02:25', '2020-06-16 19:02:25'),
(24, 5, 'Umur 5 – 20 tahun', 1, 1, NULL, '2020-06-16 19:02:47', '2020-06-16 19:02:47'),
(30, 5, 'Umur 5 – 30 tahun', 2, 1, 1, '2020-06-16 19:03:04', '2020-06-16 19:03:36'),
(31, 5, 'Umur 8 – 35 tahun', 3, 1, 1, '2020-06-16 19:03:49', '2020-06-16 19:03:55'),
(32, 5, 'Umur 8 – 45 tahun', 4, 1, NULL, '2020-06-16 19:04:06', '2020-06-16 19:04:06'),
(33, 5, 'Umur 8 – 75 tahun', 5, 1, NULL, '2020-06-16 19:04:20', '2020-06-16 19:04:20');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
(1, 'Nia Mardina', 'nia@gmail.com', NULL, '$2y$10$Wo.3pgwD8qmlh10Ez/29WuAgMmVsoVsI/G1iJ6jTrSo7XqN8axyzG', NULL, '2020-06-15 09:20:04', '2020-06-15 09:20:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternative`
--
ALTER TABLE `alternative`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alternative_value`
--
ALTER TABLE `alternative_value`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alternative_id` (`alternative_id`),
  ADD KEY `criteria_id` (`criteria_id`),
  ADD KEY `criterion_value_id` (`criterion_value_id`);

--
-- Indexes for table `criteria`
--
ALTER TABLE `criteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `criterion_value`
--
ALTER TABLE `criterion_value`
  ADD PRIMARY KEY (`id`),
  ADD KEY `criteria_id` (`criteria_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternative`
--
ALTER TABLE `alternative`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alternative_value`
--
ALTER TABLE `alternative_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `criteria`
--
ALTER TABLE `criteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `criterion_value`
--
ALTER TABLE `criterion_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alternative_value`
--
ALTER TABLE `alternative_value`
  ADD CONSTRAINT `alternative_value_ibfk_1` FOREIGN KEY (`alternative_id`) REFERENCES `alternative` (`id`),
  ADD CONSTRAINT `alternative_value_ibfk_2` FOREIGN KEY (`criteria_id`) REFERENCES `criteria` (`id`),
  ADD CONSTRAINT `alternative_value_ibfk_3` FOREIGN KEY (`criterion_value_id`) REFERENCES `criterion_value` (`id`);

--
-- Constraints for table `criterion_value`
--
ALTER TABLE `criterion_value`
  ADD CONSTRAINT `criterion_value_ibfk_1` FOREIGN KEY (`criteria_id`) REFERENCES `criteria` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
