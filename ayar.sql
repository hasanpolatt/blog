-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 04, 2020 at 05:10 PM
-- Server version: 8.0.20-0ubuntu0.19.10.1
-- PHP Version: 7.3.16-1+ubuntu19.10.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `ayar`
--

CREATE TABLE `ayar` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `description` text COLLATE utf8_turkish_ci NOT NULL,
  `keyword` text COLLATE utf8_turkish_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `fax` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `google` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `github` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `ayar`
--

INSERT INTO `ayar` (`id`, `title`, `description`, `keyword`, `author`, `phone`, `fax`, `mail`, `twitter`, `facebook`, `instagram`, `google`, `linkedin`, `github`) VALUES
(1, 'title', 'desc', 'keyw', 'author', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ayar`
--
ALTER TABLE `ayar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ayar`
--
ALTER TABLE `ayar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
