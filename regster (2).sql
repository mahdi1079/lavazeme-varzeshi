-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 28, 2025 at 04:26 PM
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
-- Database: `regster`
--

-- --------------------------------------------------------

--
-- Table structure for table `regster`
--

DROP TABLE IF EXISTS `regster`;
CREATE TABLE IF NOT EXISTS `regster` (
  `name` varchar(40) COLLATE utf8mb3_persian_ci NOT NULL,
  `pasword` int NOT NULL,
  `repasword` int NOT NULL,
  `email` varchar(40) COLLATE utf8mb3_persian_ci NOT NULL,
  `admin` int NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `regster`
--

INSERT INTO `regster` (`name`, `pasword`, `repasword`, `email`, `admin`) VALUES
('jnjn', 1021, 1021, '@h.com', 0),
('oip', 1, 1, '@h.com', 0),
('mahdi', 11, 11, '@h.com', 1),
('l', 1, 1, '@h.com', 0),
('reza', 0, 0, '', 0),
('kl', 10, 10, '@h.com', 0),
('rezaa', 1, 1, '@h.com', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
