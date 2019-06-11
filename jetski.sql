-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 25, 2017 at 05:19 PM
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
-- Database: `jetski`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

DROP TABLE IF EXISTS `activities`;
CREATE TABLE IF NOT EXISTS `activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menuId` int(11) DEFAULT NULL,
  `submenuId` int(11) DEFAULT NULL,
  `subtaskId` int(11) DEFAULT NULL,
  `payment` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `paidPrice` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `paid` tinyint(1) DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `memberId` int(11) DEFAULT NULL,
  `firstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `driverId` int(11) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `refund` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`menuId`),
  KEY `memberId` (`memberId`),
  KEY `submenu` (`submenuId`),
  KEY `subtask` (`subtaskId`),
  KEY `driver` (`driverId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `agreementNo` int(11) NOT NULL,
  `other` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `regDate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `phone`, agreementNo, `other`, regDate) VALUES
(1, 'Barolina Elena', '97777063', 1, '', '2017-02-28 00:00:00'),
(2, 'Exodus', '01154789', 666, 'Brain dead', '2017-03-09 20:50:49');

-- --------------------------------------------------------

--
-- Table structure for table `driversShippers`
--

DROP TABLE IF EXISTS driversShippers;
CREATE TABLE IF NOT EXISTS `driversShippers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `other` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `driversShippers`
--

INSERT INTO driversShippers (`id`, `name`, `phone`, `other`) VALUES
(1, 'Mirko', '99322583', 'Boat Driver'),
(2, 'Luca', '96753337', 'Boat Driver'),
(3, 'Andreas', '99359838', 'Boat Driver'),
(4, 'Antone', '', 'Boat Driver');

-- --------------------------------------------------------

--
-- Table structure for table `inflatables`
--

DROP TABLE IF EXISTS `inflatables`;
CREATE TABLE IF NOT EXISTS `inflatables` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inflatableName` varchar(255) DEFAULT NULL,
  `subtaskId` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inflatables`
--

INSERT INTO `inflatables` (`id`, inflatableName, subtaskId) VALUES
(2, '10 Minutes', NULL),
(3, '20 Minutes', NULL),
(4, '30 Minutes', NULL),
(5, '40 Minutes', NULL),
(6, '50 Minutes', NULL),
(7, '60 Minutes', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

DROP TABLE IF EXISTS `instructors`;
CREATE TABLE IF NOT EXISTS `instructors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `other` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

DROP TABLE IF EXISTS `inventory`;
CREATE TABLE IF NOT EXISTS `inventory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `equipment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `registration` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `other` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `type`, `equipment`, `registration`, `other`) VALUES
(1, 'Jetski 1', '', 'LL 14300', 'yamaha VX 2013'),
(2, 'Jetski 2', '', 'LL 14299', 'yamaha VX 2013'),
(3, 'Jetski 5', '', 'LL 14495', 'yamaha FX 2014'),
(4, 'Jetski 3', '', 'LL 15049', 'yamaha 2017'),
(5, 'Jetski 4', '', 'LL 15050', 'yamaha 2017'),
(6, 'Othelo 150hp', '', 'LL 11672', 'yamaha 150hp 2007'),
(7, 'Othelo 200hp', '', 'LL 11337', 'yamaha 200hp 2007'),
(8, 'Centurion', '', 'LL 14720', 'Centurion Enzo SV233'),
(9, 'Pedal Boat', '', '1', ''),
(10, 'Pedal Boat', '', '2', ''),
(11, 'Pedal Boat', '', '3', ''),
(12, 'Pedal Boat', '', '4', ''),
(13, 'Pedal Boat With Slide', '', '5', ''),
(14, 'Kayak', '', '1', 'Yellow'),
(15, 'Kayak', '', '2', 'Yellow'),
(16, 'Kayak', '', '3', 'Yellow'),
(17, 'Kayak', '', '4', 'Yellow'),
(18, 'Kayak', '', '5', 'Green'),
(19, 'Kayak', '', '6', 'Green'),
(20, 'Hobie Cat 13', '', '1', 'Yellow'),
(21, 'Hobie Cat 13', '', '3', 'Blue');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shoeSize` int(11) DEFAULT NULL,
  `other` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prepaid` float DEFAULT NULL,
  `used` float DEFAULT NULL,
  `saldo` float DEFAULT NULL,
  `regDate` datetime NOT NULL,
  `weight` int(5) DEFAULT NULL,
  `age` date DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emergencyContact` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `storage1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `storage2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `storage3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lastName` (`lastName`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, firstName, lastName, `phone`, `size`, `gender`, shoeSize, `other`, `prepaid`, `used`, `saldo`, regDate, `weight`, `age`, `status`, emergencyContact, `address`, `email`, storage1, storage2, storage3) VALUES
(6, 'Nikola', 'Zivanovic', '064485564', 'L', 'Male', 43, 'Again', NULL, NULL, NULL, '2017-07-06 19:25:00', 178, '1993-04-24', 'Active', '06544788', 'Sutjeska 76', NULL, NULL, NULL, NULL),
(9, 'Nesa', 'Radeta', '06655444', 'L', 'Male', 43, 'Updated', 600, NULL, NULL, '2017-07-06 19:09:42', 177, '1969-06-30', 'Married', 'Peca', 'KS', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menuName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, menuName) VALUES
(14, 'Wakeboard'),
(15, 'Wakesurf'),
(16, 'Waterski'),
(17, 'Wakeskate'),
(18, 'Jet ski'),
(19, 'Flyboard'),
(20, 'Hoverboard'),
(21, 'Windsurfing'),
(22, 'Kitesurfing'),
(23, 'Sailing'),
(24, 'Stand up paddle'),
(25, 'Crest photo memories'),
(26, 'Sea kayaks'),
(27, 'Pedal boats'),
(28, 'Boats'),
(29, 'Inflatables'),
(30, 'Fishing charters'),
(31, 'Yacht'),
(32, 'Shop'),
(33, 'Boat trips');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`) VALUES
(1, 'Cash'),
(2, 'Card'),
(3, 'Check'),
(4, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

DROP TABLE IF EXISTS `price`;
CREATE TABLE IF NOT EXISTS `price` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`id`, `name`) VALUES
(1, 'Club'),
(2, 'Standard'),
(3, 'Discount'),
(4, 'Prepaid'),
(5, 'Postpaid');

-- --------------------------------------------------------

--
-- Table structure for table `pricelist`
--

DROP TABLE IF EXISTS `pricelist`;
CREATE TABLE IF NOT EXISTS `pricelist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `unit` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pricelist`
--

INSERT INTO `pricelist` (`id`, `code`, `type`, `price`, `unit`) VALUES
(1, 'cv2233', 'Lessons', 50, 1);

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

DROP TABLE IF EXISTS `shop`;
CREATE TABLE IF NOT EXISTS `shop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `date` datetime NOT NULL,
  `shopOther` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `comment`, `price`, `date`, shopOther) VALUES
(1, 'Ofc', 50, '2017-07-06 20:39:27', 'Shop'),
(2, 'Ofc', 50, '2017-07-06 20:39:44', 'Other'),
(3, 'Ofc', 50, '2017-07-08 16:08:25', 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `submenu`
--

DROP TABLE IF EXISTS `submenu`;
CREATE TABLE IF NOT EXISTS `submenu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `submenuName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` float DEFAULT NULL,
  `menuId` int(11) NOT NULL,
  `duration` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `menuId` (`menuId`)
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `submenu`
--

INSERT INTO `submenu` (`id`, submenuName, `price`, menuId, `duration`) VALUES
(49, 'Wakeboard - Centurion / Mastercraft - 1 tow 15 minutes', 45, 14, 15),
(50, 'Wakeboard - Othello - 1 tow 15 minutes', 40, 14, 15),
(51, 'Wakeboard - Centurion - 1 tow 15 minutes', 45, 14, 15),
(52, 'Introduction lesson - 30 Minutes', 70, 15, 30),
(53, 'Start program - 3 lessons - 30 minutes each', 190, 15, 90),
(54, 'Waterski - 1 tow - 8-10 minutes', 30, 16, 10),
(55, 'Waterski - 5 tows - 8-10 minutes', 130, 16, 10),
(56, 'Introduction lesson - 30 Minutes', 60, 16, 30),
(57, 'Start program 3 lessons - 30 Minutes each', 160, 16, 90),
(58, 'Wakeboard - Centurion / Mastercraft - 5 tows 15 minutes', 210, 14, 15),
(59, 'Wakeboard - Othello - 5 tows 15 minutes', 180, 14, 15),
(60, 'Wakeboard - Centurion - 5 tows 15 minutes', 210, 14, 15),
(65, 'Waterskate 1 tow - 15 Minutes', 40, 17, 15),
(66, 'Waterskate 5 tows - 15 Minutes', 180, 17, 15),
(67, 'introduction lesson - 30 Minutes', 70, 17, 30),
(68, 'Start program - 3 Lessons - 30 Minutes each', 190, 17, 90),
(69, '1 Person - 15 Minutes', 50, 18, 15),
(70, '2 Persons - 15 Minutes', 60, 18, 15),
(71, '1 Person (Yamaha FX) - 15 Minutes', 65, 18, 15),
(72, '2 Persons (Yamaha FX) - 15 Minutes', 75, 18, 15),
(73, '30 Minutes', 110, 19, 30),
(74, '30 Minutes', 110, 20, 30),
(75, 'Lessons', NULL, 21, NULL),
(76, 'Group lessons (3+ people)', NULL, 21, NULL),
(77, 'Rent', NULL, 21, NULL),
(78, 'Stages 1, 2 or 3 - 3 hours course', 170, 22, 180),
(79, 'Stages 1 and 2 - 6 hours course', 300, 22, 360),
(80, 'Stages 1, 2 and 3 - 9 hours course', 450, 22, 540),
(81, 'HobbleCat ride with Instructor, up to 2 persons', NULL, 23, NULL),
(82, 'Lessons', NULL, 23, NULL),
(83, '1 Hour rent', 15, 24, 60),
(84, 'Lesson - 30 Minutes (+30 minutes free rent)', 35, 24, 60),
(85, 'Group lessons (3+ people) - 30 Minutes (+30 minutes free rent)', 25, 24, 60),
(86, 'Photo memories', 20, 25, NULL),
(87, 'Photo session', 90, 25, NULL),
(88, 'Single kayak - 30 Minutes', 5, 26, 30),
(89, 'Double kayak - 30 Minutes', 10, 26, 30),
(90, 'Double kayak - 60 Minutes', 15, 26, 60),
(91, 'Pedal boat without slide - 30 Minutes', 10, 27, 30),
(92, 'Pedal boat without slide - 60 Minutes', 15, 27, 60),
(93, 'Pedal boat with slide - 30 Minutes', 15, 27, 30),
(94, 'Pedal boat with slide - 60 Minutes', 25, 27, 60),
(95, '150 Horse power - 30 Minutes', 110, 28, 30),
(96, '150 Horse power - 60 Minutes', 190, 28, 60),
(97, '200 Horse power - 30 Minutes', 130, 28, 30),
(98, '200 Horse power - 60 Minutes', 220, 28, 60),
(99, '30 Minutes - Max 6 people', 190, 33, 30),
(100, '1 Hour - Max 6 people', 280, 33, 60),
(101, '2 Hours - Max 6 people', 500, 33, 120),
(102, '4 Hours - Max 6 people', 800, 33, 240),
(103, 'Banana, minimal 3 persons - 10 Minutes', 15, 29, 10),
(104, 'Sofas 2,3 or 4 persons - 10 Minutes', 20, 29, 10),
(105, 'Tuna fishing - 6 Hours', 1100, 30, 360),
(106, 'Hannos - 2.5 Hours', 400, 30, 150),
(107, 'Octopus and seasonal fishing - 3 Hours', 550, 30, 180),
(108, 'Fishing extra time - 1 Hour', 150, 30, 60),
(109, 'Jeanneau 40.3 - Maximum 8 persons', NULL, 31, NULL),
(110, 'Delphia 40.3 - Maximum 8 persons', NULL, 31, NULL),
(111, 'Bavaria 47 - Maximum 10 persons', NULL, 31, NULL),
(112, 'Delphia 47 - Maximum 10 persons', NULL, 31, NULL),
(113, 'Delphia 1080S - Maximum 10 persons', NULL, 31, NULL),
(114, 'Selene 55 - Maximum 16 persons', NULL, 31, NULL),
(115, 'Princess 50 - Maximum 10 persons', NULL, 31, NULL),
(116, 'Princess 23m - Maximum 20 persons', NULL, 31, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subtask`
--

DROP TABLE IF EXISTS `subtask`;
CREATE TABLE IF NOT EXISTS `subtask` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subtaskName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` float DEFAULT NULL,
  `submenuId` int(11) NOT NULL,
  `duration` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `submenuId` (`submenuId`)
) ENGINE=InnoDB AUTO_INCREMENT=134 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subtask`
--

INSERT INTO `subtask` (`id`, subtaskName, `price`, submenuId, `duration`) VALUES
(82, 'Introduction hour', 60, 75, 60),
(83, 'Start windsurfing - 5 Hours course (+ 3 hours rent)', 250, 75, 480),
(84, 'Windsurfing intermediate (+ 1 hour rent)', 160, 75, 240),
(85, 'Introduction hour', 45, 76, 60),
(86, 'Start windsurfing - 5 Hours course (+ 2 hours rent)', 130, 76, 420),
(87, 'Windsurfing intermediate (+ 1 hour rent)', 80, 76, 240),
(88, '1 Hour', 25, 77, 60),
(89, '1 day', 70, 77, 1440),
(90, '2 days', 120, 77, 2880),
(91, '3 days', 160, 77, 4320),
(92, '4 days', 200, 77, 5760),
(93, '5 days', 240, 77, 7200),
(94, '6 days', 270, 77, 8640),
(95, '7 days', 310, 77, 10080),
(96, '30 Minutes', 40, 81, 30),
(97, '1 Hour', 40, 81, 60),
(98, '3 Hours', 105, 81, 180),
(99, '5 Hours', 160, 81, 300),
(100, 'Introduction lesson - 1 Hour', 60, 82, 60),
(101, 'Learn sailing - 3 Hours + 1 hour rent free', 150, 82, 240),
(102, 'Half day cruise - 4 Hours', 600, 109, 240),
(103, 'Full day cruise - 7 Hours', 800, 109, 420),
(104, 'Weekly cruise', 2900, 109, 2880),
(105, 'Half day cruise - 4 Hours', 700, 110, 240),
(106, 'Full day cruise - 7 Hours', 900, 110, 420),
(107, 'Weekly cruise', 3300, 110, 2880),
(108, 'Half day cruise - 4 Hours', 750, 111, 240),
(109, 'Full day cruise - 7 Hours', 900, 111, 420),
(110, 'Weekly cruise', 4700, 111, 2880),
(111, 'Half day cruise - 4 Hours', 900, 112, 240),
(112, 'Full day cruise - 7 Hours', 1200, 112, 420),
(113, 'Sunset cruise - 2 Hours', 500, 112, 120),
(114, 'Extra per hour', 280, 112, NULL),
(115, 'Weekly cruise', 5300, 112, 2880),
(122, 'Half day cruise - 4 Hours', 990, 113, 240),
(123, 'Full day cruise - 7 Hours', NULL, 113, 420),
(124, 'Weekly cruise', NULL, 113, 2880),
(125, 'Half day cruise - 4 Hours', 2600, 114, 240),
(126, 'Full day cruise - 6 Hours', 3100, 114, 360),
(127, 'Weekly cruise', NULL, 114, 2880),
(128, 'Half day cruise - 4 Hours', 3000, 115, 240),
(129, 'Full day cruise - 6 Hours', 3500, 115, 360),
(130, 'Weekly cruise', NULL, 115, 2880),
(131, 'Half day cruise - 4 Hours', 5990, 116, 240),
(132, 'Full day cruise - 6 Hours', 6300, 116, 360),
(133, 'Weekly cruise', NULL, 116, 2880);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `regDate` datetime NOT NULL,
  `lastLogin` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, regDate, lastLogin) VALUES
(2, 'admin', '1964', 'asd', 'admin', '2017-03-11 00:00:00', '2017-03-11 00:00:00'),
(3, 'STR', '1964', 'asd', 'asd', '2017-07-09 18:00:00', '2017-07-09 18:00:00'),
(4, 'GRH', '1964', 'asd', 'asd', '2017-07-09 18:00:00', '2017-07-09 18:00:00');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activities`
--
ALTER TABLE `activities`
  ADD CONSTRAINT `activities_ibfk_1` FOREIGN KEY (menuId) REFERENCES `menu` (`id`),
  ADD CONSTRAINT `activities_ibfk_2` FOREIGN KEY (memberId) REFERENCES `members` (`id`),
  ADD CONSTRAINT `activities_ibfk_3` FOREIGN KEY (submenuId) REFERENCES `submenu` (`id`),
  ADD CONSTRAINT `activities_ibfk_4` FOREIGN KEY (subtaskId) REFERENCES `subtask` (`id`),
  ADD CONSTRAINT `activities_ibfk_5` FOREIGN KEY (driverId) REFERENCES driversShippers (`id`);

--
-- Constraints for table `submenu`
--
ALTER TABLE `submenu`
  ADD CONSTRAINT `submenu_ibfk_1` FOREIGN KEY (menuId) REFERENCES `menu` (`id`);

--
-- Constraints for table `subtask`
--
ALTER TABLE `subtask`
  ADD CONSTRAINT `subtask_ibfk_1` FOREIGN KEY (submenuId) REFERENCES `submenu` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
