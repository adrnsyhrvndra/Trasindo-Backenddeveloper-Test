-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2023 at 10:49 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_trasindo_backend_test_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `no_id`, `name`, `alamat`, `no_telp`, `password`, `email`, `role`, `status`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'INV0001', 'Agen X', 'Arcamanik', '08112349927', '$2y$10$gRYQ1OeHxP/bQEY3DvF3t.oIEVdNN594iTylzsgU2mOSjw3vi9XP2', 'adrimedia.indonesia@gmail.com', 'admin', 'active', NULL, NULL, '2023-03-20 02:32:39', '2023-03-20 02:32:39'),
(6, 'INV0002', 'Diva Indira Asauri Penonton Konser 02', 'Setiabudi', '08222349927', '$2y$10$v6zXv8i9FzyYFe1Hpt8XpONyHrgBnA40oPsI1N1MPu00X0je18.si', 'divaindira66@gmail.com', 'user', 'active', NULL, NULL, '2023-03-20 02:36:21', '2023-03-20 02:47:54'),
(7, 'INV0003', 'Jamal Penonton Konser 03', 'Sarijadi', '084523499', '$2y$10$kYLl8r5Z7I2R6557bFOeqOC5VpMpkiss0v97DZlVkHweX1U2Wcbk6', 'jameselon@gmail.com', 'user', 'inactive', NULL, NULL, '2023-03-20 02:45:12', '2023-03-20 02:45:12');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
