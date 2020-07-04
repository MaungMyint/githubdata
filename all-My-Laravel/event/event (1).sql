-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2019 at 04:26 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Photographer', '2019-05-14 07:10:05', '2019-05-15 04:59:46'),
(2, 'Makeup', '2019-05-14 00:40:41', '2019-05-14 00:40:41'),
(3, 'Dress', '2019-05-14 00:40:50', '2019-05-14 00:40:50'),
(4, 'Floral', '2019-05-14 00:40:59', '2019-05-14 00:40:59'),
(5, 'Food', '2019-05-14 00:41:09', '2019-05-14 00:41:09'),
(6, 'Venue', '2019-05-15 02:57:13', '2019-05-15 02:57:13');

-- --------------------------------------------------------

--
-- Table structure for table `eventdetails`
--

CREATE TABLE `eventdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `potential_cost` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount_paid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extra_paid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `events_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codeno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organizer_id` bigint(20) UNSIGNED NOT NULL,
  `venues_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `start_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialrequest` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `codeno`, `organizer_id`, `venues_id`, `service_id`, `user_id`, `start_date`, `end_date`, `amount`, `specialrequest`, `status`, `created_at`, `updated_at`) VALUES
(2, '5cdbc93387a1e', 7, 6, 8, 12, '2019-05-15', '2019-05-16', '200000', 'asdfasdf', '0', '2019-05-15 01:39:23', '2019-05-15 01:39:23'),
(3, '5cdbc968df050', 7, 6, 8, 12, '2019-05-15', '2019-05-16', '200000', 'asdfasdf', '0', '2019-05-15 01:40:16', '2019-05-15 01:40:16'),
(4, '5cdbc973d9252', 7, 6, 8, 12, '2019-05-15', '2019-05-16', '200000', 'asdfasdf', '0', '2019-05-15 01:40:27', '2019-05-15 01:40:27'),
(5, '5cdbc9c872e11', 7, 6, 8, 12, '2019-05-15', '2019-05-16', '200000', 'asdfasdf', '0', '2019-05-15 01:41:52', '2019-05-15 01:41:52'),
(6, '5cdbc9d0d104e', 7, 6, 8, 12, '2019-05-15', '2019-05-16', '200000', 'asdfasdf', '0', '2019-05-15 01:42:00', '2019-05-15 01:42:00'),
(7, '5cdbc9d4ca677', 7, 6, 8, 12, '2019-05-15', '2019-05-16', '200000', 'asdfasdf', '0', '2019-05-15 01:42:04', '2019-05-15 01:42:04');

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
(3, '2019_05_13_104316_create_categories_table', 1),
(4, '2019_05_13_104404_create_organizers_table', 2),
(5, '2019_05_13_104430_create_services_table', 2),
(6, '2019_05_13_104455_create_venues_table', 2),
(7, '2019_05_13_104510_create_events_table', 2),
(8, '2019_05_13_104531_create_packages_table', 2),
(9, '2019_05_13_104555_create_eventdetails_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `organizers`
--

CREATE TABLE `organizers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `organizers`
--

INSERT INTO `organizers` (`id`, `name`, `address`, `phoneno`, `description`, `email`, `image`, `category_id`, `created_at`, `updated_at`) VALUES
(7, 'Emily1', 'Yangon', '956778889', 'floral', 'zun@gmail.com', '/images/bg_1.jpg', 4, '2019-05-14 05:59:46', '2019-05-15 05:07:19'),
(8, 'Ma Htett', 'Yangon', '`1234567890', 'Make up artist', 'htet@gmail.com', '/images/gallery-5.jpg', 2, '2019-05-14 20:57:09', '2019-05-14 22:20:35'),
(9, 'Ma Chan', 'Yangon', '1236788900', 'Designer', 'chan@gmail.com', '/images/gallery-5.jpg', 3, '2019-05-14 20:57:53', '2019-05-14 20:57:53'),
(10, 'Myat Thu', 'Yangon', '456789432', 'Photographer', 'myat@gmail.com', '/images/person_3.jpg', 1, '2019-05-14 20:58:45', '2019-05-14 20:58:45'),
(11, 'Daw Ei', 'Yangon', '2345678899', 'food', 'ei@gmail.com', '/images/food1.jpeg', 5, '2019-05-14 21:01:29', '2019-05-14 22:08:18'),
(12, 'Wanna Khwarnee', 'Yangon', '2345678899', 'Photographer', 'wanna@gmail.com', '/images/person_2.jpg', 1, '2019-05-14 22:03:28', '2019-05-14 22:03:28'),
(13, 'Htet Aung Kyaw', 'Yangon', '956778889', 'Photographer', 'htetaung@gmail.com', '/images/person_4.jpg', 1, '2019-05-14 22:04:33', '2019-05-14 22:04:33'),
(14, 'Carrie', 'Yangon', '2345678899', 'Make up artist', 'carrie@gmail.com', '/images/carrie.jpg', 2, '2019-05-14 22:05:58', '2019-05-14 22:05:58'),
(15, 'Nyi Nyi Maung', 'Yangon', '1236788900', 'Make up artist', 'nyinyi@gmail.com', '/images/thuthu.jpg', 2, '2019-05-14 22:06:58', '2019-05-14 22:06:58'),
(16, 'Parisan cakes', 'Yangon', '7775748584', 'food', 'parisan@gmail.com', '/images/parisan.jpeg', 5, '2019-05-14 22:07:44', '2019-05-14 22:07:44'),
(17, 'Nilar', 'Yangon', '956778889', 'food', 'nilar@gmail.com', '/images/nilarfood.jpeg', 5, '2019-05-14 22:09:05', '2019-05-14 22:09:05'),
(18, 'Khin Nyein Aye', 'Yangon', '956778889', 'Designer', 'khinnyein@gmail.com', '/images/dress3.jpg', 3, '2019-05-14 22:10:08', '2019-05-14 22:10:08'),
(19, 'Min Thet San', 'Yangon', '956778889', 'Designer', 'minthet@gmail.com', '/images/dress4.jpg', 3, '2019-05-14 22:10:54', '2019-05-14 22:10:54'),
(20, 'Su Su', 'Yangon', '1236788900', 'Floral', 'susu@gmail.com', '/images/bo2.jpg', 4, '2019-05-14 22:11:38', '2019-05-14 22:11:38');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organizer_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `venues_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `image`, `organizer_id`, `service_id`, `venues_id`, `category_id`, `price`, `created_at`, `updated_at`) VALUES
(13, 'Photo Service 1', '/images/person_1.jpg', 10, 10, 7, 1, '50000', '2019-05-14 22:00:33', '2019-05-14 22:00:33'),
(14, 'Photo Service 2', '/images/person_1.jpg', 12, 10, 6, 1, '40000', '2019-05-14 22:37:45', '2019-05-14 22:37:45'),
(15, 'Photo Service 3', '/images/person_2.jpg', 13, 10, 6, 1, '55000', '2019-05-14 22:38:31', '2019-05-14 22:38:31'),
(16, 'floaral service 1_update', '/images/33.JPG', 7, 8, 6, 4, '200000', '2019-05-14 22:39:29', '2019-05-15 02:37:34'),
(17, 'floral service 2', '/images/bo2.jpg', 20, 8, 6, 4, '200000', '2019-05-14 22:40:47', '2019-05-14 22:40:47'),
(18, 'floral service 3', '/images/flo2.jpeg', 21, 8, 6, 4, '200000', '2019-05-14 22:41:18', '2019-05-14 22:41:18'),
(20, 'Dress service 2', '/images/dress2.jpg', 18, 9, 6, 3, '80000', '2019-05-14 22:43:31', '2019-05-14 22:43:31'),
(21, 'Dress service 3', '/images/dress3.jpg', 19, 9, 6, 3, '90000', '2019-05-14 22:44:05', '2019-05-14 22:44:05'),
(22, 'Make up service 1', '/images/carrie.jpg', 14, 12, 6, 2, '50000', '2019-05-14 22:45:50', '2019-05-14 22:45:50'),
(23, 'Make up service 2', '/images/hanna.jpg', 8, 12, 6, 2, '60000', '2019-05-14 22:47:08', '2019-05-14 22:47:08'),
(24, 'Make up service 3', '/images/thuthu.jpg', 15, 12, 6, 2, '50000', '2019-05-14 22:47:46', '2019-05-14 22:47:46'),
(25, 'food service 1', '/images/food1.jpeg', 11, 11, 6, 5, '200000', '2019-05-14 22:49:12', '2019-05-14 22:49:12'),
(26, 'food service 2', '/images/parisan.jpeg', 16, 11, 6, 5, '300000', '2019-05-14 22:49:59', '2019-05-14 22:49:59'),
(27, 'food service 3', '/images/nilarfood.jpeg', 17, 11, 6, 5, '250000', '2019-05-14 22:50:32', '2019-05-14 22:50:32');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organizer_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `image`, `description`, `price`, `organizer_id`, `created_at`, `updated_at`) VALUES
(8, 'floralll', '/images/bo1.jpg', 'floal service', '20000', 7, '2019-05-14 20:56:15', '2019-05-15 05:08:44'),
(9, 'Dress', '/images/carrie.jpg', 'Dress Design', '50000', 9, '2019-05-14 20:59:32', '2019-05-14 22:30:05'),
(10, 'Photo Service', '/images/gallery-1.jpg', 'photographer', '50000', 10, '2019-05-14 21:00:09', '2019-05-14 21:00:09'),
(11, 'food', '/images/resto-2.jpg', 'food service', '30000', 11, '2019-05-14 21:03:13', '2019-05-14 21:03:13'),
(12, 'make up service', '/images/gallery-5.jpg', 'make up', '20000', 8, '2019-05-14 21:04:02', '2019-05-14 21:04:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(8, 'kyawzinaung', 'kyawgyi@gmail.com', '', NULL, '$2y$10$bw7j24oZkWjRP9jCLemLiewMdTd8/q2bd2.qiXpocnqpXv2mMYoWS', NULL, '2019-05-14 03:19:23', '2019-05-14 03:19:23'),
(9, 'jiwan', 'jiwan@gmail.com', '', NULL, '$2y$10$wwPjABpuD7pc4Dlg2pk4HeNDacymfKJVl42C0cvKw.FfJhmAkmCfW', NULL, '2019-05-14 08:41:48', '2019-05-14 08:41:48'),
(11, 'thinzar', 'thinzar@gmail.com', 'author', NULL, '$2y$10$cRkwjgYAlY1WLimkdFZU5.SAw30E50G5eMsyHFO1aLQR9VPbz4Wwq', NULL, '2019-05-14 09:36:47', '2019-05-14 09:36:47'),
(12, 'Admin', 'admin@gmail.com', 'admin', NULL, '$2y$10$dVZXFAyU7he7OCydi.1mTOxDtaw4g4oqZ0H5qc5B/x1Nov6amiiw2', NULL, '2019-05-14 09:42:55', '2019-05-14 09:42:55'),
(13, 'hello', 'hello@gmail.com', 'author', NULL, '$2y$10$Lf0WdLJgo9t.T5b3UifjT.FaPvOSqjWUnUGMHgHrQ1rsA75zBwtSC', NULL, '2019-05-14 09:45:26', '2019-05-14 09:45:26'),
(14, 'admin', 'thin@gmail.com', 'admin', NULL, '$2y$10$ROFlR6USxecnojUnlRu4HOWYJJKRmdXrvgDiLWa2An5LznBl9z1Ii', NULL, '2019-05-14 20:28:37', '2019-05-14 20:28:37'),
(15, 'yymar', 'yymar@gmail.com', 'author', NULL, '$2y$10$WoTYydJ8eVSusCkIMhhpF.xPbAhQX81GskQDfA.RZER52oX.2oCAe', NULL, '2019-05-14 20:30:05', '2019-05-14 20:30:05'),
(16, 'thinzar', 'thin1@gmail.com', 'author', NULL, '$2y$10$.ROZsEZICZGx6SM05P3XcOmiDZDG5FLNgtzCa52mMZBFUtXieesey', NULL, '2019-05-15 00:13:39', '2019-05-15 00:13:39'),
(17, 'thinzar', 'mgmg@gmail.com', 'author', NULL, '$2y$10$8viniTQCtxnvktOZqDgGR.JuosDwJL09xNrjnbTj83gK1n/11OAO.', NULL, '2019-05-15 02:31:32', '2019-05-15 02:31:32');

-- --------------------------------------------------------

--
-- Table structure for table `venues`
--

CREATE TABLE `venues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `venues`
--

INSERT INTO `venues` (`id`, `name`, `image`, `amount`, `price`, `created_at`, `updated_at`) VALUES
(6, 'Lotte (Hotel)', '/images/about.jpg', '300', '5000000', '2019-05-14 06:10:53', '2019-05-15 05:20:07'),
(7, 'Sule Shangrila', '/images/sule.jpg', '100', '1000000', '2019-05-14 21:06:59', '2019-05-14 22:14:35'),
(8, 'Grand Mercure Hotel', '/images/flowerdec1.jpeg', '100', '200000', '2019-05-14 21:08:36', '2019-05-14 22:16:07'),
(9, 'Pan Pacific Hotel', '/images/pan2.jpeg', '100', '300000', '2019-05-14 21:09:06', '2019-05-14 22:17:20'),
(10, 'Lotte', '/images/hotel-4.jpg', '300', '5000000', '2019-05-15 05:18:41', '2019-05-15 05:22:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventdetails`
--
ALTER TABLE `eventdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organizers`
--
ALTER TABLE `organizers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `venues`
--
ALTER TABLE `venues`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `eventdetails`
--
ALTER TABLE `eventdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `organizers`
--
ALTER TABLE `organizers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `venues`
--
ALTER TABLE `venues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
