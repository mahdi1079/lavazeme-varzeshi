-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 01, 2025 at 03:50 PM
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
('لباس تیم ملی آرژانتین 1', 0, 1, '4/l.jpg', 'l.php', '', '', '', ''),
('میز تنیس 2', 0, 2, '4/322.webp', 'm.php', '', '', '', ''),
('توپ بسکتبال ', 0, 3, '4/5454.webp', 'tb.php', 'توپ بسکتبال Jordan Playgound ۸p با ساختار مقاوم خود تفاوتی در سبد ایجاد خواهد کرد. استفاده ویژه ای از نظر استحکام و دوام ارائه می دهد، چسبندگی خاص و اثر ضد لغزش را برای دوستداران بسکتبال حرفه ای برای مدت طولانی دارد. دو رنگ طراحی سفارشی کلاسیک هستند. خطوطی دارد که می تواند در جهش به یک برند جهانی تبدیل شود. این یک موضع بادوام و سازش ناپذیر از خود نشان می دهد. ساخته شده از مواد لاستیکی، فرودگاه گسترده و انعطاف پذیر است. ایده آل برای نگه داشتن و گرفتن است، همچنین دارای بافت غیر لغزنده است.\n', '', '', ''),
('توپ فوتبال', 0, 4, '4/43e7757e670d7031c9b5151e3e6f1f4a67726135_1631625311.webp', 'tf.php', '', ' جنس : جنس لایه رویی از پلی اورتان و پوشش داخلی پلی استر\r\n', '', ''),
('iui', 0, 20, '4/0', 'uyyyyyi.php', '', 'ghffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', '', ''),
('tt', 10101, 21, '4/7336510.jpg', '', '', '', '4/444.jpg', '4/.5.jpg'),
('tt', 1111, 22, '4/5444.webp', '', '', 'ثقبثببببببببببببببببببببببببببببببببب\r\nمنممنمم\r\nمننتمممممممن\r\nهنعاتناتنتنتانتا\r\nنمنتمنتمتمنت', '4/2.webp', '4/.5.jpg');

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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

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
('rezaa', 1, 1, '@h.com', 0, 7);

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
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `sabad`
--

INSERT INTO `sabad` (`name`, `ghymat`, `idk`, `idm`, `id`, `tedad`) VALUES
('لباس تیم ملی آرژانتین 1', 0, 3, 1, 23, 1),
('میز تنیس 2', 0, 3, 2, 24, 0),
('tt', 10101, 3, 21, 25, 0),
('لباس تیم ملی آرژانتین 1', 0, 2, 1, 26, 2),
('tt', 10101, 2, 21, 27, 3),
('میز تنیس 2', 0, 2, 2, 28, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
