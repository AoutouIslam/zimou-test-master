-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2024 at 05:49 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zimou_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `package_statuses`
--

CREATE TABLE `package_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package_statuses`
--

INSERT INTO `package_statuses` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'getting inspected', '2024-11-14 13:02:54', NULL),
(2, 'rejected', '2024-11-14 13:03:49', NULL),
(3, 'delivered', '2024-11-14 13:03:49', NULL),
(4, 'package lost', '2024-11-14 13:03:49', NULL),
(5, 'package damaged', '2024-11-14 13:03:49', NULL),
(6, 'client does not answer', '2024-11-14 13:03:49', NULL),
(7, 'client refused package', '2024-11-14 13:03:49', NULL),
(8, 'worker lost package', '2024-11-14 13:03:49', NULL),
(9, 'package stolen', '2024-11-14 13:03:49', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `package_statuses`
--
ALTER TABLE `package_statuses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `package_statuses`
--
ALTER TABLE `package_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
