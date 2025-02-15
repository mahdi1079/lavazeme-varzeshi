-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 15, 2025 at 03:57 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahsol`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahsol`
--

DROP TABLE IF EXISTS `mahsol`;
CREATE TABLE IF NOT EXISTS `mahsol` (
  `name` varchar(50) COLLATE utf8mb3_persian_ci NOT NULL,
  `ghymat` int NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  `img` int NOT NULL,
  `idd` varchar(20) COLLATE utf8mb3_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `mahsol`
--

INSERT INTO `mahsol` (`name`, `ghymat`, `id`, `img`, `idd`) VALUES
('لباس تیم ملی آرژانتین 1', 0, 1, 0, 'l.php'),
('میز تنیس 2', 0, 2, 0, 'm.php'),
('توپ بسکتبال ', 0, 3, 0, 'tb.php'),
('توپ فوتبال', 0, 4, 0, 'tf.php');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
