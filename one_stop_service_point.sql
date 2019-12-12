-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2019 at 08:11 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `one_stop_service_point`
--

-- --------------------------------------------------------

--
-- Table structure for table `costestimates`
--

CREATE TABLE `costestimates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `projectName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cost` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `costestimates`
--

INSERT INTO `costestimates` (`id`, `projectName`, `Cost`, `created_at`, `updated_at`) VALUES
(1, 'cafe', '500', '2019-12-01 22:59:06', '2019-12-02 00:24:06'),
(2, 'Hospital', '50000', '2019-12-01 23:00:20', '2019-12-01 23:43:36');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Shakil', 'a@gmail.com', '123456', '2019-11-29 17:56:29', '2019-12-04 12:41:04'),
(4, 'tanmoy', 'a@gmail.com', '12dsd', '2019-11-29 23:33:06', '2019-11-29 23:33:06');

-- --------------------------------------------------------

--
-- Table structure for table `investorinfos`
--

CREATE TABLE `investorinfos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `investorinfos`
--

INSERT INTO `investorinfos` (`id`, `username`, `phoneNumber`, `mail`, `password`, `created_at`, `updated_at`) VALUES
(1, 'asad', '12345', 'asd@gmail.com', '123', '2019-12-01 18:07:31', '2019-12-01 18:07:31'),
(2, 'sakil mia', '01679162664', 'sakil@gmail.com', '123456', '2019-12-03 00:40:53', '2019-12-03 00:40:53'),
(3, 'tamim', '01236548', 'tamim@gmail.com', '12', '2019-12-03 00:53:50', '2019-12-03 00:53:50'),
(4, 'aa', 'aaa', 'aaa@gmail.com', '1', '2019-12-03 00:56:17', '2019-12-03 00:56:17'),
(5, 'Sakil Mia', '01679162664', 'sakil@gmail.com', '123', '2019-12-04 14:14:56', '2019-12-04 14:14:56');

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
(3, '2019_11_29_114204_create_employees_table', 1),
(4, '2019_11_29_171553_create_ministries_table', 2),
(5, '2019_11_30_175426_create_projects_table', 3),
(6, '2019_12_01_114902_create_investorinfos_table', 4),
(7, '2019_12_01_163157_create_costestimates_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `ministries`
--

CREATE TABLE `ministries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ministries`
--

INSERT INTO `ministries` (`id`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
(3, 'Ministry of Textiles and Jute', 'jute@gmail.com', '123', '2019-12-04 08:33:31', '2019-12-04 08:33:31'),
(4, 'Ministry of Environment and Forest', 'forest@gmail.com', '321', '2019-12-04 08:34:09', '2019-12-04 08:34:09'),
(5, 'Ministry of Foreign Affairs', 'ferign@gmail.com', '258', '2019-12-04 08:34:42', '2019-12-04 08:34:42'),
(6, 'Ministry of Planning', 'planning@gmail.com', '369', '2019-12-04 08:35:33', '2019-12-04 08:35:33');

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
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `textilesMinistryFile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `textilesMinistryFileStatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `environmentMinistryFile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `environmentMinistryFileStatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreignMinistryFile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreignMinistryFileStatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `planningMinistryFile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `planningMinistryFileStatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `username`, `email`, `phoneNumber`, `textilesMinistryFile`, `textilesMinistryFileStatus`, `environmentMinistryFile`, `environmentMinistryFileStatus`, `foreignMinistryFile`, `foreignMinistryFileStatus`, `planningMinistryFile`, `planningMinistryFileStatus`, `created_at`, `updated_at`) VALUES
(2, 'Mahedi Ratul', 'Ratul@gmail.com', '019752364852', '15752051761.pdf', 'pickedtom', '15752051762.pdf', 'processingtoe', '15752051763.pdf', 'processingtof', '15752051764.pdf', 'processingtop', '2019-12-01 18:59:36', '2019-12-04 11:57:41'),
(3, 'ceramic', 'sakilcafe@gmail.com', '019752364852', '15754107201.pdf', 'processingtom', '15754107202.pdf', 'processingtoe', '15754107203.pdf', 'processingtof', '15754107204.pdf', 'processingtop', '2019-12-04 04:05:20', '2019-12-04 09:05:48'),
(4, 'sakil@gmail.com', 'sakilcafe@gmail.com', '019752364852', '15754386291.pdf', 'pending', '15754386292.pdf', 'pending', '15754386293.pdf', 'pending', '15754386294.pdf', 'pending', '2019-12-04 11:50:29', '2019-12-04 11:50:29'),
(5, 'DIU', 'abc@gmail.com', '0199', '15754452261.pdf', 'pickedtom', '15754452262.pdf', 'processingtoe', '15754452263.pdf', 'processingtof', '15754452264.pdf', 'processingtop', '2019-12-04 13:40:26', '2019-12-04 13:44:10'),
(6, 'aaaa', 'sakilofficial2018@gmail.com', '019752364852', '15754474681.pdf', 'pickedtom', '15754474682.pdf', 'pending', '15754474683.pdf', 'pending', '15754474684.pdf', 'pending', '2019-12-04 14:17:48', '2019-12-04 14:19:25');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `costestimates`
--
ALTER TABLE `costestimates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investorinfos`
--
ALTER TABLE `investorinfos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ministries`
--
ALTER TABLE `ministries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
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
-- AUTO_INCREMENT for table `costestimates`
--
ALTER TABLE `costestimates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `investorinfos`
--
ALTER TABLE `investorinfos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ministries`
--
ALTER TABLE `ministries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
