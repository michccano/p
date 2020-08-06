-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2020 at 05:02 AM
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
-- Database: `app`
--

-- --------------------------------------------------------

--
-- Table structure for table `droplets`
--

CREATE TABLE `droplets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `droplet_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `wpinfo` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `droplet_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` int(1) NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `droplets`
--

INSERT INTO `droplets` (`id`, `droplet_id`, `email`, `status`, `created_at`, `updated_at`, `wpinfo`, `droplet_name`, `pass`, `ip`) VALUES
(30, '202773197', 'mccano@protonmail.com', 1, NULL, NULL, '{\"username\":\"root\",\"pw\":\"*0vqPM!fKGeh_*+2\"}', 'example1.com', 0, '206.189.116.109');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `droplets`
--
ALTER TABLE `droplets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `droplets`
--
ALTER TABLE `droplets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
