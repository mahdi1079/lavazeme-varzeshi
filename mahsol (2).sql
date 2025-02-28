-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 28, 2025 at 04:25 PM
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
  `ghymat` text COLLATE utf8mb3_persian_ci NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  `img` varchar(100) COLLATE utf8mb3_persian_ci NOT NULL,
  `idd` varchar(20) COLLATE utf8mb3_persian_ci NOT NULL,
  `a` varchar(1000) COLLATE utf8mb3_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `mahsol`
--

INSERT INTO `mahsol` (`name`, `ghymat`, `id`, `img`, `idd`, `a`) VALUES
('لباس تیم ملی آرژانتین 1', 'قیمت: 250,000 ریال', 1, '4/l.jpg', 'l.php', ''),
('میز تنیس 2', 'قیمت: 2,000,000 ریال\r\n\r\n', 2, '4/322.webp', 'm.php', ''),
('توپ بسکتبال ', 'قیمت: 700,000 ریال\r\n\r\n', 3, '4/5454.webp', 'tb.php', 'توپ بسکتبال Jordan Playgound ۸p با ساختار مقاوم خود تفاوتی در سبد ایجاد خواهد کرد. استفاده ویژه ای از نظر استحکام و دوام ارائه می دهد، چسبندگی خاص و اثر ضد لغزش را برای دوستداران بسکتبال حرفه ای برای مدت طولانی دارد. دو رنگ طراحی سفارشی کلاسیک هستند. خطوطی دارد که می تواند در جهش به یک برند جهانی تبدیل شود. این یک موضع بادوام و سازش ناپذیر از خود نشان می دهد. ساخته شده از مواد لاستیکی، فرودگاه گسترده و انعطاف پذیر است. ایده آل برای نگه داشتن و گرفتن است، همچنین دارای بافت غیر لغزنده است.\r\n'),
('توپ فوتبال', 'قیمت: 400,000 ریال', 4, '4/43e7757e670d7031c9b5151e3e6f1f4a67726135_1631625311.webp', 'tf.php', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
