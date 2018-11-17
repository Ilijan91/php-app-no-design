-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 21, 2018 at 04:54 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(128) NOT NULL,
  `date` datetime NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=81 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`cid`, `uid`, `date`, `message`) VALUES
(22, 'Anonymous', '2018-07-17 11:35:09', 'Ovo je komentar isto'),
(20, 'Anonymous', '2018-07-17 11:35:01', 'Treci!!!VIse nije treci'),
(67, 'Anonymous', '2018-07-17 12:15:54', 'tatatat'),
(80, 'Anonymous', '2018-07-21 17:06:06', 'Novi komentar'),
(78, 'Anonymous', '2018-07-18 18:45:01', 'Sad je ovo sesti komentar blalal'),
(77, 'Anonymous', '2018-07-17 12:24:50', 'Cetvrti komentar'),
(79, 'Anonymous', '2018-07-21 17:06:06', 'Novi komentar'),
(75, 'Anonymous', '2018-07-17 12:24:50', 'Cetvrti komentar');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'Pera', '202cb962ac59075b964b07152d234b70'),
(69, 'Admin', '21232f297a57a5a743894a0e4a801fc3'),
(68, 'Ilijan', 'c6f057b86584942e415435ffb1fa93d4');

-- --------------------------------------------------------

--
-- Table structure for table `vesti`
--

DROP TABLE IF EXISTS `vesti`;
CREATE TABLE IF NOT EXISTS `vesti` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `category` varchar(256) NOT NULL,
  `slika` varchar(1024) NOT NULL,
  `text` varchar(1024) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vesti`
--

INSERT INTO `vesti` (`id`, `category`, `slika`, `text`) VALUES
(1, 'Sport', 'https://reviewonline.co.za/wp-content/uploads/sites/68/2016/12/bigstock-Four-Sports-a-lot-of-balls-an-50626115.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut finibus venenatis varius. Aliquam erat volutpat. Aliquam vel suscipit felis. Integer eget tincidunt ex. Integer ut nisl ac odio facilisis mollis sit amet at sem. Donec facilisis eros at tellus finibus eleifend. Nam id tincidunt orci. Cras cursus nulla purus, vitae feugiat ligula porttitor et. Suspendisse vestibulum aliquam commodo. Fusce ac efficitur ex. Nunc at sapien tincidunt, viverra felis nec, pulvinar magna. Proin porttitor neque turpis, non aliquet velit porttitor eget. Quisque nisl libero, placerat vitae ullamcorper quis, porta ornare mauris.'),
(2, 'Politika', 'http://stresszdoki.com/wp-content/uploads/2017/07/politika..jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut finibus venenatis varius. Aliquam erat volutpat. Aliquam vel suscipit felis. Integer eget tincidunt ex. Integer ut nisl ac odio facilisis mollis sit amet at sem. Donec facilisis eros at tellus finibus eleifend. Nam id tincidunt orci. Cras cursus nulla purus, vitae feugiat ligula porttitor et. Suspendisse vestibulum aliquam commodo. Fusce ac efficitur ex. Nunc at sapien tincidunt, viverra felis nec, pulvinar magna. Proin porttitor neque turpis, non aliquet velit porttitor eget. Quisque nisl libero, placerat vitae ullamcorper quis, porta ornare mauris.'),
(3, 'Hronika', 'https://www.srbijadanas.com/sites/default/files/styles/full_article_image/public/a/t/2016/06/13/hronika014-foto-sd-ilustracija.jpg', 'Duis posuere est dolor, eget euismod orci cursus nec. Ut erat ipsum, placerat eget eros id, ultrices rutrum neque. Suspendisse vitae eros sed lectus ultrices interdum. Ut pulvinar faucibus ex eu ornare. Sed id elit nec eros lobortis pretium eget et mi. Pellentesque euismod vulputate ex, sed maximus lorem faucibus in. Phasellus ullamcorper lorem vitae metus accumsan fermentum. Donec convallis sed neque ut imperdiet. Aenean eget tellus volutpat, rhoncus sapien at, bibendum odio. Nam dolor magna, sollicitudin ut ligula ac, volutpat eleifend nunc. Suspendisse porta molestie justo. Ut diam ex, semper eu eleifend eu, rhoncus non urna. Phasellus bibendum diam justo, eget auctor augue feugiat et. Donec ornare mauris eu mi pretium elementum. Etiam consectetur sodales ante, id venenatis leo. Suspendisse potenti.'),
(16, 'Kosarka', 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7a/Basketball.png/170px-Basketball.png', 'Kosarkaaaaaaaaaaaa'),
(18, 'Fudbal', 'https://i1.wp.com/crna.gora.me/homepage/wp-content/uploads/2018/01/fudbal.jpg?resize=723%2C427', 'Fudbalica');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
