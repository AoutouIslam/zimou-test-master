-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2024 at 05:48 PM
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
-- Table structure for table `wilayas`
--

CREATE TABLE `wilayas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wilayas`
--

INSERT INTO `wilayas` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Adrar', '2024-11-14 00:07:04', NULL),
(2, 'Chlef', '2024-11-14 00:07:04', NULL),
(3, 'Laghouat', '2024-11-14 00:07:04', NULL),
(4, 'Oum El Bouaghi', '2024-11-14 00:07:04', NULL),
(5, 'Batna', '2024-11-14 00:07:04', NULL),
(6, 'Béjaïa', '2024-11-14 00:07:04', NULL),
(7, 'Biskra', '2024-11-14 00:07:04', NULL),
(8, 'Béchar', '2024-11-14 00:07:04', NULL),
(9, 'Blida', '2024-11-14 00:07:04', NULL),
(10, 'Bouira', '2024-11-14 00:07:04', NULL),
(11, 'Tamanrasset', '2024-11-14 00:07:04', NULL),
(12, 'Tébessa', '2024-11-14 00:07:04', NULL),
(13, 'Tlemcen', '2024-11-14 00:07:04', NULL),
(14, 'Tiaret', '2024-11-14 00:07:04', NULL),
(15, 'Tizi Ouzou', '2024-11-14 00:07:04', NULL),
(16, 'Alger', '2024-11-14 00:07:04', NULL),
(17, 'Djelfa', '2024-11-14 00:07:04', NULL),
(18, 'Jijel', '2024-11-14 00:07:04', NULL),
(19, 'Sétif', '2024-11-14 00:07:04', NULL),
(20, 'Saïda', '2024-11-14 00:07:04', NULL),
(21, 'Skikda', '2024-11-14 00:07:04', NULL),
(22, 'Sidi Bel Abbès', '2024-11-14 00:07:04', NULL),
(23, 'Annaba', '2024-11-14 00:07:04', NULL),
(24, 'Guelma', '2024-11-14 00:07:04', NULL),
(25, 'Constantine', '2024-11-14 00:07:04', NULL),
(26, 'Médéa', '2024-11-14 00:07:04', NULL),
(27, 'Mostaganem', '2024-11-14 00:07:04', NULL),
(28, 'M\'Sila', '2024-11-14 00:07:04', NULL),
(29, 'Mascara', '2024-11-14 00:07:04', NULL),
(30, 'Ouargla', '2024-11-14 00:07:04', NULL),
(31, 'Oran', '2024-11-14 00:07:04', NULL),
(32, 'El Bayadh', '2024-11-14 00:07:04', NULL),
(33, 'Illizi', '2024-11-14 00:07:04', NULL),
(34, 'Bordj Bou Arreridj', '2024-11-14 00:07:04', NULL),
(35, 'Boumerdès', '2024-11-14 00:07:04', NULL),
(36, 'El Tarf', '2024-11-14 00:07:04', NULL),
(37, 'Tindouf', '2024-11-14 00:07:04', NULL),
(38, 'Tissemsilt', '2024-11-14 00:07:04', NULL),
(39, 'El Oued', '2024-11-14 00:07:04', NULL),
(40, 'Khenchela', '2024-11-14 00:07:04', NULL),
(41, 'Souk Ahras', '2024-11-14 00:07:04', NULL),
(42, 'Tipaza', '2024-11-14 00:07:04', NULL),
(43, 'Mila', '2024-11-14 00:07:04', NULL),
(44, 'Aïn Defla', '2024-11-14 00:07:04', NULL),
(45, 'Naâma', '2024-11-14 00:07:04', NULL),
(46, 'Aïn Témouchent', '2024-11-14 00:07:04', NULL),
(47, 'Ghardaïa', '2024-11-14 00:07:04', NULL),
(48, 'Relizane', '2024-11-14 00:07:04', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wilayas`
--
ALTER TABLE `wilayas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wilayas`
--
ALTER TABLE `wilayas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
