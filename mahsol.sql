-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 10, 2025 at 02:41 AM
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
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `img` varchar(100) COLLATE utf8mb3_persian_ci NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`img`, `id`) VALUES
('4/Untitled-2.png', 1),
('dfgfd.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mahsol`
--

DROP TABLE IF EXISTS `mahsol`;
CREATE TABLE IF NOT EXISTS `mahsol` (
  `name` varchar(50) COLLATE utf8mb3_persian_ci NOT NULL,
  `ghymat` int NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  `img` varchar(100) COLLATE utf8mb3_persian_ci NOT NULL,
  `idd` varchar(20) COLLATE utf8mb3_persian_ci NOT NULL,
  `a` varchar(1000) COLLATE utf8mb3_persian_ci NOT NULL,
  `tozihat` varchar(6400) COLLATE utf8mb3_persian_ci NOT NULL,
  `img2` varchar(1000) COLLATE utf8mb3_persian_ci NOT NULL,
  `img3` varchar(1000) COLLATE utf8mb3_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `mahsol`
--

INSERT INTO `mahsol` (`name`, `ghymat`, `id`, `img`, `idd`, `a`, `tozihat`, `img2`, `img3`) VALUES
('لباس تیم ملی آرژانتین 1', 150000, 1, '4/2.jpg', 'l.php', '', 'لباس درجه یک باشماره 10\r\n', '4/444.jpg', '4/l.jpg'),
('میز تنیس 2', 100000, 2, '4/vx4corgk_thumb3.webp', 'm.php', '', 'میز درجه یک تاشو با رنگ بندی متنوع\r\n', '4/.5.jpg', '4/nd3orkl5_thumb2.webp'),
('توپ بسکتبال ', 1000000, 3, '4/5454.webp', 'tb.php', 'توپ بسکتبال Jordan Playgound ۸p با ساختار مقاوم خود تفاوتی در سبد ایجاد خواهد کرد. استفاده ویژه ای از نظر استحکام و دوام ارائه می دهد، چسبندگی خاص و اثر ضد لغزش را برای دوستداران بسکتبال حرفه ای برای مدت طولانی دارد. دو رنگ طراحی سفارشی کلاسیک هستند. خطوطی دارد که می تواند در جهش به یک برند جهانی تبدیل شود. این یک موضع بادوام و سازش ناپذیر از خود نشان می دهد. ساخته شده از مواد لاستیکی، فرودگاه گسترده و انعطاف پذیر است. ایده آل برای نگه داشتن و گرفتن است، همچنین دارای بافت غیر لغزنده است.\n', 'توپ با جنس زخیم و محکم\r\n', '4/5444.webp', '4/5454.webp'),
('توپ فوتبال', 2000000, 4, '4/43e7757e670d7031c9b5151e3e6f1f4a67726135_1631625311.webp', 'tf.php', '', ' جنس : جنس لایه رویی از پلی اورتان و پوشش داخلی پلی استر\r\n', '4/43e7757e670d7031c9b5151e3e6f1f4a67726135_1631625311.webp', '4/43e7757e670d7031c9b5151e3e6f1f4a67726135_1631625311.webp');

-- --------------------------------------------------------

--
-- Table structure for table `regster`
--

DROP TABLE IF EXISTS `regster`;
CREATE TABLE IF NOT EXISTS `regster` (
  `name` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `pasword` int NOT NULL,
  `repasword` int NOT NULL,
  `email` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `admin` int NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `regster`
--

INSERT INTO `regster` (`name`, `pasword`, `repasword`, `email`, `admin`, `id`) VALUES
('jnjn', 1021, 1021, '@h.com', 0, 1),
('oip', 1, 1, '@h.com', 0, 2),
('mahdi', 11, 11, '@h.com', 1, 3),
('l', 1, 1, '@h.com', 0, 4),
('reza', 0, 0, '', 0, 5),
('kl', 10, 10, '@h.com', 0, 6),
('rezaa', 1, 1, '@h.com', 0, 7),
('h', 1, 1, '@h.com', 0, 8);

-- --------------------------------------------------------

--
-- Table structure for table `sabad`
--

DROP TABLE IF EXISTS `sabad`;
CREATE TABLE IF NOT EXISTS `sabad` (
  `name` varchar(100) COLLATE utf8mb3_persian_ci NOT NULL,
  `ghymat` int NOT NULL,
  `idk` int NOT NULL,
  `idm` int NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  `tedad` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `sabad`
--

INSERT INTO `sabad` (`name`, `ghymat`, `idk`, `idm`, `id`, `tedad`) VALUES
('لباس تیم ملی آرژانتین 1', 0, 3, 1, 23, 1),
('میز تنیس 2', 0, 3, 2, 24, 0),
('tt', 10101, 3, 21, 25, 0),
('tt', 10101, 2, 21, 27, 3),
('لباس تیم ملی آرژانتین 1', 0, 2, 1, 31, 1),
('میز تنیس 2', 0, 2, 2, 28, 1),
('لباس تیم ملی آرژانتین 1', 0, 2, 1, 30, 1),
('لباس تیم ملی آرژانتین 1', 0, 2, 1, 32, 1),
('tt', 10101, 2, 21, 33, 1),
('لباس تیم ملی آرژانتین 1', 0, 2, 1, 34, 1),
('لباس تیم ملی آرژانتین 1', 0, 24, 1, 35, 1),
('لباس تیم ملی آرژانتین 1', 0, 24, 1, 36, 1),
('لباس تیم ملی آرژانتین 1', 0, 24, 1, 37, 1),
('لباس تیم ملی آرژانتین 1', 0, 24, 1, 38, 1),
('لباس تیم ملی آرژانتین 1', 0, 24, 1, 39, 1),
('لباس تیم ملی آرژانتین 1', 0, 24, 1, 40, 1),
('لباس تیم ملی آرژانتین 1', 0, 3, 1, 41, 1),
('لباس تیم ملی آرژانتین 1', 0, 3, 1, 42, 1),
('لباس تیم ملی آرژانتین 1', 0, 3, 1, 43, 1),
('لباس تیم ملی آرژانتین 1', 0, 3, 1, 44, 1),
('لباس تیم ملی آرژانتین 1', 0, 3, 1, 45, 1),
('لباس تیم ملی آرژانتین 1', 0, 3, 1, 46, 1),
('لباس تیم ملی آرژانتین 1', 0, 3, 1, 47, 1),
('لباس تیم ملی آرژانتین 1', 0, 3, 1, 48, 1),
('لباس تیم ملی آرژانتین 1', 0, 3, 1, 49, 1),
('لباس تیم ملی آرژانتین 1', 0, 3, 1, 50, 1),
('لباس تیم ملی آرژانتین 1', 0, 3, 1, 51, 1),
('لباس تیم ملی آرژانتین 1', 0, 3, 1, 52, 1),
('لباس تیم ملی آرژانتین 1', 0, 3, 1, 53, 1),
('لباس تیم ملی آرژانتین 1', 0, 3, 1, 54, 1),
('لباس تیم ملی آرژانتین 1', 0, 3, 1, 55, 1),
('لباس تیم ملی آرژانتین 1', 0, 3, 1, 56, 1),
('میز تنیس 2', 0, 8, 2, 57, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
