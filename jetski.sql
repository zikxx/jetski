-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2017 at 04:41 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE `activities` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `submenu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subtask` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `paid_price` int(11) DEFAULT NULL,
  `driver` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `paid` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `refund` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `name`, `submenu`, `subtask`, `price`, `payment`, `start`, `end`, `paid_price`, `driver`, `first_name`, `last_name`, `paid`, `type`, `status`, `refund`, `comment`) VALUES
(11, 'Windsurfing', 'Group Lessons - 3+ People', 'Start Windsurfing - 5 Hours Course', 'Club', 'Cash', '2017-03-13 12:00:00', '2017-03-13 12:15:00', 50, '', 'Barollina', 'Elena', '', '', '', NULL, NULL),
(16, 'Boat Rent', 'Rent', '1 Day', 'Club', 'Cash', '2017-03-08 12:12:12', '2017-03-08 12:12:12', 7, '', '', '', '', '', '', NULL, NULL),
(19, 'Jet-ski', '1 Person 15 Minutes (Yamaha FX)', '', 'Club', 'Cash', '2017-03-08 12:12:12', '2017-03-13 17:00:00', 45, '', '', '', '', '', '', NULL, NULL),
(21, 'Stand Up Paddle', 'Rent', '30 Hours', 'Club', 'Cash', '2017-06-07 12:00:00', '2017-03-20 12:30:00', 50, '', '', '', '', '', '', NULL, NULL),
(22, 'Sea Kayak', '1 Hour', '', 'Club', 'Cash', '2017-03-18 04:50:00', '2017-03-18 05:51:00', 10, '', '', '', '', '', '', NULL, NULL),
(23, 'Kitesurfing', 'Stages 1, 2 and 3  - 9 Hours Course', '', 'Club', 'Cash', '2017-03-18 10:53:00', '2017-03-18 19:53:00', 310, '', '', '', '', '', '', NULL, NULL),
(24, 'Flyboard', '3 Hours', '', 'Club', 'Cash', '2017-03-18 16:54:00', '2017-03-18 16:54:00', 20, '', '', '', '', '', '', NULL, NULL),
(25, 'Flyboard', '30 Miutes', '', 'Club', 'Card', '2017-03-18 17:40:00', '2017-03-18 17:40:00', 10, '', '', '', '', '', '', NULL, NULL),
(26, 'Jet-ski', '1 Person 15 Minutes with Fast Key', '', 'Club', 'Cash', '2017-03-18 17:40:00', '2017-03-18 17:40:00', 50, '', '', '', '', '', '', NULL, NULL),
(27, 'Jet-ski', '1 Person 15 Minutes with Fast Key', '', 'Club', 'Cash', '2017-03-18 17:40:00', '2017-03-18 17:40:00', 40, '', '', '', '', '', '', NULL, NULL),
(28, 'Jet-ski', '2 Persons 15 Minutes (Yamaha FX)', '', 'Club', 'Cash', '2017-03-18 17:41:00', '2017-03-18 17:41:00', 60, '', '', '', '', '', '', NULL, NULL),
(29, 'Jet-ski', '1 Person 15 Minutes (Yamaha FX)', '', 'Club', 'Cash', '2017-03-18 17:41:00', '2017-03-18 17:41:00', 30, '', '', '', '', '', '', NULL, NULL),
(30, 'Boat Rent', '200 Horse Power - 60 Minutes', '', 'Club', 'Cash', '2017-03-18 17:41:00', '2017-03-18 17:41:00', 200, '', '', '', '', '', '', NULL, NULL),
(31, 'Inflatables', 'Banana, Minimum 3 Persons, 10 Minutes', '', 'Club', 'Cash', '2017-03-18 17:41:00', '2017-03-18 17:41:00', 20, '', '', '', '', '', '', NULL, NULL),
(32, 'Wakeboard, Wakesurf', 'Tows', '', 'Club', 'Cash', '2017-03-18 17:41:00', '2017-03-18 17:41:00', 10, '', '', '', '', '', '', NULL, NULL),
(33, 'Wakeboard, Wakesurf', 'Rent', '', 'Club', 'Cash', '2017-03-18 17:42:00', '2017-03-18 17:42:00', 10, '', '', '', '', '', '', NULL, NULL),
(34, 'Stand Up Paddle', 'Rent', '30 Hours', 'Club', 'Cash', '2017-06-07 17:43:00', '2017-03-18 17:43:00', 50, '', '', '', '', '', '', NULL, NULL),
(35, 'Kitesurfing', 'Stage 1 and 2  - 6 Hours Course', '', 'Club', 'Cash', '2017-03-18 17:43:00', '2017-03-18 17:43:00', 50, '', '', '', '', '', '', NULL, NULL),
(36, 'Windsurfing', 'Rent', '2 Days', 'Club', 'Cash', '2017-03-18 17:43:00', '2017-03-18 17:43:00', 20, '', '', '', '', '', '', NULL, NULL),
(37, 'Windsurfing', 'Lessons', 'Start Windsurfing - 5 Hours Course', 'Club', 'Cash', '2017-03-18 17:44:00', '2017-03-18 17:44:00', 20, '', '', '', '', '', '', NULL, NULL),
(38, 'Pedal Boats', 'Pedalboat With Slide, 30 Minutes', '', 'Club', 'Cash', '2017-06-07 17:44:00', '2017-03-18 17:44:00', 20, '', '', '', '', '', '', NULL, NULL),
(39, 'Sea Kayak', '30 Minutes', '', 'Club', 'Cash', '2017-03-18 17:44:00', '2017-03-18 17:44:00', 20, '', '', '', '', '', '', NULL, NULL),
(40, 'Sailing', 'Rent', 'HobleCat Ride With Instructor, Up To 2 Persons, 30 minutes', 'Club', 'Cash', '2017-03-20 21:44:00', '2017-03-20 21:44:00', 50, '', '', '', '', '', '', NULL, NULL),
(41, 'Jet-ski', '2 Persons 15 Minutes', '', 'Club', 'Cash', '2017-03-20 21:44:00', '2017-03-20 21:44:00', 12, '', '', '', '', '', '', NULL, NULL),
(42, 'Wakeboard, Wakesurf, Waterskate, Waterski', 'Lessons', 'Introduction Lesson - 1 Hour', 'Club', 'Cash', '2017-03-28 23:23:00', '2017-03-28 23:23:00', 190, '', '', '', '', '', '', NULL, NULL),
(43, 'Wakeboard, Wakesurf, Waterskate, Waterski', 'Tows', 'Wakeboard - Centurion 15 minutes - 1 tow', 'Club', 'Cash', '2017-03-28 23:25:00', '2017-03-28 23:25:00', 45, '', '', '', '', '', '', NULL, NULL),
(44, 'Wakeboard, Wakesurf, Waterskate, Waterski', 'Waterski - Lessons', 'Start Program - 3 Lessons 30 minutes each', 'Club', 'Cash', '2017-03-28 23:41:00', '2017-03-28 23:41:00', 160, '', '', '', '', '', '', NULL, NULL),
(45, 'Wakeboard, Wakesurf, Waterskate, Waterski', 'Lessons', 'Introduction Lesson - 1 Hour', 'Club', 'Cash', '2017-03-28 23:54:00', '2017-03-28 23:54:00', 190, '', '', '', '', '', '', NULL, NULL),
(46, 'Wakeboard, Wakesurf, Waterskate, Waterski', 'Tows', 'Wakeboard - Mastercraft 15 minutes - 1 tow', 'Club', 'Cash', '2017-03-29 00:06:00', '2017-03-29 00:06:00', 45, '', '', '', '', '', '', NULL, NULL),
(47, 'Wakeboard, Wakesurf, Waterskate, Waterski', 'Tows', 'Wakeboard - Othello 200HP 15 minutes - 1 tow', 'Club', 'Cash', '2017-03-29 00:06:00', '2017-03-29 00:06:00', 40, '', '', '', '', '', '', NULL, NULL),
(48, 'Wakeboard, Wakesurf, Waterskate, Waterski', 'Tows', 'Wakeboard - Othello 150HP 15 minutes - 1 tow', 'Club', 'Cash', '2017-03-29 00:08:00', '2017-03-29 00:08:00', 40, '', '', '', '', '', '', NULL, NULL),
(49, 'Wakeboard, Wakesurf, Waterskate, Waterski', 'Tows', 'Wakeboard - Othello 15 200HP minutes - Prepaid 5 hours', 'Club', 'Cash', '2017-03-28 00:12:00', '2017-03-28 00:12:00', 620, '', '', '', '', '', '', NULL, NULL),
(50, 'Windsurfing', 'Lessons', 'Wakeboard - Centurion', 'Club', 'Cash', '2017-06-08 22:40:00', '2017-06-08 22:40:00', 60, 'Mirko', '', '', '', '', '', NULL, NULL),
(51, 'Inflatables', 'Fly Fish 2 or 3 Persons, 10 Minutes', '', 'Club', 'Cash', '2017-06-12 23:42:00', '2017-06-11 23:42:00', 30, 'Mirko', '', '', '', '', '', NULL, NULL),
(52, 'Wakeboard, Wakesurf, Waterskate, Waterski', 'Tows', 'Wakeboard - Mastercraft 15 minutes - 1 tow', 'Club', 'Cash', '2017-06-12 23:43:00', '2017-06-11 23:43:00', 45, 'Mirko', '', '', '', '', '', NULL, NULL),
(53, 'Stand Up Paddle', 'Rent', '30 Hours', 'Club', 'Cash', '2017-06-13 00:41:00', '2017-06-13 00:41:00', 300, 'Mirko', '', '', '', '', '', NULL, NULL),
(54, 'Boat Rent', '200 Horse Power - 60 Minutes', '', 'Club', 'Cash', '2017-06-13 00:41:00', '2017-06-13 00:41:00', 240, 'Mirko', '', '', '', '', '', NULL, NULL),
(55, 'Wakeboard, Wakesurf, Waterskate, Waterski', 'Tows', 'Wakeboard - Centurion 15 minutes - 1 tow', 'Club', 'Cash', '2017-06-13 01:21:00', '2017-06-13 01:21:00', 45, 'Mirko', '', '', '', '', '', NULL, NULL),
(56, 'Jet-ski', '2 Persons 15 Minutes (Yamaha FX)', '', 'Club', 'Cash', '2017-06-13 02:12:00', '2017-06-13 02:12:00', 75, 'Mirko', '', '', '', '', '', NULL, NULL),
(57, 'Wakeboard, Wakesurf, Waterskate, Waterski', 'Tows', 'Wakeboard - Mastercraft 15 minutes - 1 tow', 'Club', 'Cash', '2017-06-13 02:12:00', '2017-06-13 02:12:00', 45, 'Mirko', '', '', '', '', '', NULL, NULL),
(58, 'Windsurfing', 'Lessons', 'Start Windsurfing - 5 Hours Course', 'Club', 'Cash', '2017-07-02 23:37:00', '2017-07-02 23:37:00', 250, '', 'Member', '', 'Yes', '', '', NULL, NULL),
(59, 'Windsurfing', 'Lessons', 'Start Windsurfing - 5 Hours Course', 'Club', 'Cash', '2017-07-03 00:08:00', '2017-07-03 00:28:00', 250, '', 'Member', '', 'Yes', '', 'Canceled', '250', NULL),
(60, 'Windsurfing', 'Lessons', 'Start Windsurfing - 5 Hours Course', 'Club', 'Cash', '2017-07-03 01:01:00', '2017-07-03 01:01:00', 250, '', 'Customer', '', 'No', '', 'Active', NULL, NULL),
(61, 'Jet-ski', '2 Persons 15 Minutes (Yamaha FX)', '', 'Club', 'Cash', '2017-07-03 01:17:00', '2017-07-03 01:17:00', 75, '', 'Member', '', 'Yes', '', 'Active', NULL, NULL),
(62, 'Inflatables', 'Sofas 2, 3 or 4 Persons, 10 Minutes', '', 'Club', 'Cash', '2017-07-03 01:20:00', '2017-07-03 01:20:00', 20, '', 'Member', '', 'Yes', '', 'Active', NULL, NULL),
(63, 'Wakeboard, Wakesurf, Waterskate, Waterski', 'Lessons', 'Introduction Lesson - 1 Hour', 'Club', 'Cash', '2017-07-03 01:21:00', '2017-07-03 01:21:00', 190, '', 'Member', '', 'Yes', '', 'Active', NULL, NULL),
(64, 'Windsurfing', 'Group Lessons - 3+ People', 'Start Windsurfing - 5 Hours Course', 'Club', 'Cash', '2017-07-04 00:47:00', '2017-07-04 00:47:00', 130, '', 'Member', '', 'Yes', '', 'Canceled', NULL, NULL),
(65, 'Wakeboard, Wakesurf, Waterskate, Waterski', 'Waterski - Lessons', 'Start Program - 3 Lessons 30 minutes each', 'Club', 'Cash', '2017-07-04 00:47:00', '2017-07-04 00:47:00', 160, '', 'Member', '', 'No', '', 'Active', NULL, NULL),
(66, 'Kitesurfing', 'Stages 1, 2 and 3  - 9 Hours Course', '', 'Club', 'Cash', '2017-07-04 00:48:00', '2017-07-04 00:48:00', 450, '', 'Customer', '', 'Yes', '', 'Canceled', '450', NULL),
(67, 'Inflatables', 'Fly Fish 2 or 3 Persons, 10 Minutes', '', 'Club', 'Cash', '2017-07-04 00:48:00', '2017-07-04 00:48:00', 30, '', 'Customer', '', 'No', '', 'Active', NULL, NULL),
(68, 'Wakeboard, Wakesurf, Waterskate, Waterski', 'Tows', 'Wakeboard - Othello 200HP 15 minutes - 5 tows', 'Club', 'Cash', '2017-07-04 22:36:00', '2017-07-04 22:36:00', 180, 'qwe', 'Member', '', 'Yes', '', 'Active', NULL, NULL),
(69, 'Windsurfing', 'Rent', '1 Day', 'Club', 'Cash', '2017-07-04 23:46:00', '2017-07-04 23:47:00', 75, '', 'Member', '', 'Yes', '', 'Active', NULL, NULL),
(70, 'Windsurfing', 'Lessons', 'Introduction Hour', 'Club', 'Cash', '2017-07-05 00:08:00', '2017-07-05 01:08:00', 60, '', 'Member', '', 'Yes', '', 'Active', NULL, NULL),
(71, 'Jet-ski', '2 Persons 15 Minutes with Fast Key', '', 'Club', 'Cash', '2017-07-05 00:33:00', '2017-07-05 00:48:00', 70, '', 'Member', '', 'Yes', '', 'Active', NULL, NULL),
(72, 'Sea Kayak', '1 Hour', '', 'Club', 'Cash', '2017-07-05 01:04:00', '2017-07-05 02:04:00', 10, '', 'Member', '', 'Yes', '', 'Active', NULL, NULL),
(73, 'Stand Up Paddle', 'Rent', '30 Hours', 'Club', 'Cash', '2017-07-05 01:23:00', '2017-07-06 07:23:00', 300, 'Ja', 'Member', '', 'Yes', '', 'Active', NULL, NULL),
(74, 'Windsurfing', 'Lessons', 'Introduction Hour', 'Club', 'Cash', '2017-07-06 19:37:00', '2017-07-06 20:37:00', 60, 'Da', 'Member', '', 'Yes', '', 'Active', NULL, NULL),
(75, 'Wakeboard, Wakesurf, Waterskate, Waterski', 'Tows', 'Wakeboard - Othello 150HP 15 minutes - 1 tow', 'Club', 'Cash', '2017-07-06 19:37:00', '2017-07-06 19:52:00', 40, '', 'Member', '', 'Yes', '', 'Active', NULL, NULL),
(76, 'Flyboard', '30 Miutes', '', 'Club', 'Cash', '2017-07-06 20:36:00', '2017-07-06 21:06:00', 110, 'Nesa', 'Nikola', 'Zivanovic', 'Yes', '', 'Active', NULL, NULL),
(77, 'Sea Kayak', '1 Hour', '', 'Club', 'Cash', '2017-07-06 20:38:00', '2017-07-06 21:38:00', 10, 'Eq', 'Nesa', 'Radeta', 'Yes', '', 'Active', NULL, NULL),
(78, 'Wakeboard, Wakesurf, Waterskate, Waterski', 'Tows', 'Wakeboard - Othello 150HP 15 minutes - 5 tows', 'Club', 'Cash', '2017-07-06 20:45:00', '2017-07-06 21:00:00', 180, 'Mirko', 'Nikola', 'Zivanovic', 'Yes', '', 'Active', NULL, NULL),
(79, 'Wakeboard, Wakesurf, Waterskate, Waterski', 'Tows', 'Wakeboard - Centurion 15 minutes - 1 tow', 'Club', 'Cash', '2017-07-06 21:05:00', '2017-07-06 21:20:00', 45, 'Ja', 'Nikola', 'Zivanovic', 'Yes', 'Member', 'Active', NULL, NULL),
(80, 'Yacht', '', '', 'Club', 'Cash', '2017-07-06 22:42:00', '2017-07-06 23:12:00', 5, 'Mirko', 'Nikola', 'Zivanovic', 'Yes', 'Member', 'Active', NULL, NULL),
(81, 'Inflatables', 'S - 1 Person - 10 Minutes', '', 'Club', 'Cash', '2017-07-07 00:50:00', '2017-07-07 01:00:00', 20, 'Mirko', 'Nikola', 'Zivanovic', 'Yes', 'Member', 'Active', NULL, NULL),
(82, 'Inflatables', 'L - 3 Persons - 50 Minutes', '', 'Club', 'Cash', '2017-07-07 02:01:00', '2017-07-07 02:51:00', 300, 'Mirko', 'Nesa', 'Zivanovic', 'Yes', 'Member', 'Active', NULL, NULL),
(83, 'Sailing', 'Rent', '3 Hours', 'Club', 'Cash', '2017-07-07 02:02:00', '2017-07-07 05:02:00', 120, 'Mirko', 'Nesa', 'Zivanovic', 'Yes', 'Member', 'Active', NULL, NULL),
(84, 'Kitesurfing', 'Stages 1, 2 and 3  - 9 Hours Course', '', 'Club', 'Cash', '2017-07-07 02:05:00', '2017-07-07 11:05:00', 450, 'Mirko', 'Nesa', 'Radeta', 'Yes', 'Member', 'Active', NULL, NULL),
(85, 'Wakeboard, Wakesurf, Waterskate, Waterski', 'Tows', 'Wakeboard - Othello 200HP 15 minutes - 1 tow', 'Club', 'Cash', '2017-07-07 02:12:00', '2017-07-07 02:27:00', 40, 'Mirko', 'Nesa', 'Radeta', 'Yes', 'Member', 'Active', NULL, NULL),
(86, 'Wakeboard, Wakesurf, Waterskate, Waterski', 'Tows', 'Wakeboard - Centurion 15 minutes - 5 tows', 'Club', 'Cash', '2017-07-07 02:17:00', '2017-07-07 02:32:00', 210, 'Ja', 'Nikola', 'Zivanovic', 'Yes', 'Member', 'Active', NULL, NULL),
(87, 'Wakeboard, Wakesurf, Waterskate, Waterski', 'Tows', 'Wakeboard - Mastercraft 15 minutes - 5 tows', 'Club', 'Cash', '2017-07-07 02:18:00', '2017-07-07 02:33:00', 210, 'Mirko', 'Nesa', 'Radeta', 'Yes', 'Member', 'Active', NULL, NULL),
(88, 'Windsurfing', 'Group Lessons - 3+ People', 'Windsurfing Intermediate - 3 Hours Course', 'Club', 'Cash', '2017-07-07 02:21:00', '2017-07-07 05:21:00', 80, 'Ja', 'Nesa', 'Radeta', 'Yes', 'Member', 'Active', NULL, NULL),
(89, 'Yacht', '', '', 'Club', 'Cash', '2017-07-07 21:12:00', '2017-07-07 23:42:00', 400, 'Mirko', 'Nesa', 'Zivanovic', 'Yes', 'Member', 'Active', NULL, NULL),
(90, 'Yacht', '', '', 'Club', 'Cash', '2017-07-08 14:50:00', '2017-07-08 20:50:00', 1100, 'Mirko', 'Nesa', 'Radeta', 'Yes', 'Member', 'Active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `activity_name`
--

CREATE TABLE `activity_name` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Windsurfing'),
(2, 'Stand Up Paddle'),
(3, 'Wakeboard, Wakesurf'),
(4, 'Sailing'),
(5, 'Kitesurfing'),
(6, 'Jet-ski'),
(7, 'Boat'),
(8, 'Flyboard'),
(9, 'Inflatables'),
(10, 'Pedal Boats'),
(11, 'Sea Kayak');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `agreement_no` int(11) NOT NULL,
  `other` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reg_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `phone`, `agreement_no`, `other`, `reg_date`) VALUES
(1, 'Barolina Elena', '97777063', 1, '', '2017-02-28 00:00:00'),
(2, 'Exodus', '01154789', 666, 'Brain dead', '2017-03-09 20:50:49');

-- --------------------------------------------------------

--
-- Table structure for table `drivers_shippers`
--

CREATE TABLE `drivers_shippers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `other` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `drivers_shippers`
--

INSERT INTO `drivers_shippers` (`id`, `name`, `phone`, `other`) VALUES
(1, 'Mirko', '99322583', 'Boat Driver'),
(2, 'Luca', '96753337', 'Boat Driver'),
(3, 'Andreas', '99359838', 'Boat Driver'),
(4, 'Antone', '', 'Boat Driver');

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE `instructors` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `other` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `equipment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `registration` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `other` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `shoe_size` int(11) NOT NULL,
  `other` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prepaid` float DEFAULT NULL,
  `used` float DEFAULT NULL,
  `saldo` float DEFAULT NULL,
  `reg_date` datetime NOT NULL,
  `weight` int(5) NOT NULL,
  `age` int(2) NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `emergency_contact` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `storage_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `storage_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `storage_3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `first_name`, `last_name`, `phone`, `size`, `gender`, `shoe_size`, `other`, `prepaid`, `used`, `saldo`, `reg_date`, `weight`, `age`, `status`, `emergency_contact`, `address`, `email`, `storage_1`, `storage_2`, `storage_3`) VALUES
(6, 'Nikola', 'Zivanovic', '064485564', 'L', 'Male', 43, 'Again', NULL, NULL, NULL, '2017-07-06 19:25:00', 62, 24, 'Active', '06544788', 'Sutjeska 76', NULL, NULL, NULL, NULL),
(9, 'Nesa', 'Radeta', '06655444', 'L', 'Male', 43, 'Updated', 600, NULL, NULL, '2017-07-06 19:09:42', 177, 24, 'Married', 'Peca', 'KS', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menu_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu_name`) VALUES
(1, 'Windsurfing'),
(2, 'Stand Up Paddle'),
(3, 'Wakeboard, Wakesurf, Waterkate, Waterki'),
(4, 'Sailing'),
(5, 'Kitesurfing'),
(6, 'Jet-ski'),
(7, 'Boat Rent'),
(8, 'Flyboard'),
(9, 'Inflatables'),
(10, 'Pedal Boats'),
(11, 'Sea Kayak'),
(12, 'Crest Photo Memories'),
(13, 'Membership');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

CREATE TABLE `price` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

CREATE TABLE `pricelist` (
  `id` int(11) NOT NULL,
  `code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `unit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pricelist`
--

INSERT INTO `pricelist` (`id`, `code`, `type`, `price`, `unit`) VALUES
(1, 'cv2233', 'Lessons', 50, 1);

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `date` datetime NOT NULL,
  `shop_other` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `comment`, `price`, `date`, `shop_other`) VALUES
(1, 'Ofc', 50, '2017-07-06 20:39:27', 'Shop'),
(2, 'Ofc', 50, '2017-07-06 20:39:44', 'Other'),
(3, 'Ofc', 50, '2017-07-08 16:08:25', 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `submenu`
--

CREATE TABLE `submenu` (
  `id` int(11) NOT NULL,
  `submenu_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `price` float DEFAULT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `submenu`
--

INSERT INTO `submenu` (`id`, `submenu_name`, `price`, `menu_id`) VALUES
(1, 'Lessons', NULL, 1),
(2, 'Group Lessons - 3+ People', NULL, 1),
(3, 'Rent', NULL, 1),
(4, 'Lessons', NULL, 2),
(5, 'Rent', NULL, 2),
(6, 'Tows', NULL, 3),
(7, 'Wakeboard, Wakesurf, Waterskate - Lessons', NULL, 3),
(8, 'Lessons', NULL, 4),
(9, 'Rent', NULL, 4),
(13, 'Stages 1, 2 or 3  - 3 Hours Course', 170, 5),
(14, 'Stage 1 and 2  - 6 Hours Course', 300, 5),
(15, 'Stages 1, 2 and 3  - 9 Hours Course', 450, 5),
(16, '1 Person 15 Minutes', 50, 6),
(17, '2 Persons 15 Minutes', 60, 6),
(18, '1 Person 15 Minutes with Fast Key', 60, 6),
(19, '2 Persons 15 Minutes with Fast Key', 70, 6),
(20, '1 Person 15 Minutes (Yamaha FX)', 65, 6),
(21, '2 Persons 15 Minutes (Yamaha FX)', 75, 6),
(22, '40 Horse Power - 30 Minutes', 80, 7),
(23, '40 Horse Power - 60 Minutes', 140, 7),
(24, '150 Horse Power - 30 Minutes', 110, 7),
(25, '150 Horse Power - 60 Minutes', 190, 7),
(26, '200 Horse Power - 30 Minutes', 140, 7),
(27, '200 Horse Power - 60 Minutes', 240, 7),
(28, 'Half Day Rental - 40 Horse Power, 3 Hours', 300, 7),
(29, '30 Miutes', 110, 8),
(30, '1 Hour', 160, 8),
(31, '3 Hours', 450, 8),
(32, 'Banana, Minimum 3 Persons, 10 Minutes', 15, 9),
(33, 'Sofas 2, 3 or 4 Persons, 10 Minutes', 20, 9),
(34, 'Fly Fish 2 or 3 Persons, 10 Minutes', 30, 9),
(35, 'Pedalboat Without Slide, 30 Minutes', 10, 10),
(36, 'Pedalboat Without Slide, 60 Minutes', 15, 10),
(37, 'Pedalboat With Slide, 30 Minutes', 15, 10),
(38, 'Pedalboat With Slide, 60 Minutes', 25, 10),
(39, '30 Minutes', 5, 11),
(40, '60 Minutes', 10, 11),
(43, 'Waterski - Lessons', NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `subtask`
--

CREATE TABLE `subtask` (
  `id` int(11) NOT NULL,
  `subtask_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `submenu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subtask`
--

INSERT INTO `subtask` (`id`, `subtask_name`, `price`, `submenu_id`) VALUES
(1, 'Introduction Hour', 60, 1),
(2, 'Start Windsurfing - 5 Hours Course', 250, 1),
(3, 'Windsurfing Intermediate - 3 Hours Course', 160, 1),
(4, 'Introduction Hour', 45, 2),
(5, 'Start Windsurfing - 5 Hours Course', 130, 2),
(6, 'Windsurfing Intermediate - 3 Hours Course', 80, 2),
(7, '1 Hour', 30, 3),
(8, '1 Day', 75, 3),
(9, '2 Day', 120, 3),
(10, '3 Day', 160, 3),
(11, '4 Day', 200, 3),
(12, '5 Day', 240, 3),
(13, '6 Day', 270, 3),
(14, '7 Day', 310, 3),
(15, '30 Minutes', 35, 4),
(16, '1 Hour', 20, 5),
(17, '30 Hours', 300, 5),
(18, 'Unlimited Use', 550, 5),
(19, 'Introduction Lesson - 1 Hour', 60, 8),
(20, 'Learn Sailing - 3 Hours + 1 Hour Free', 150, 8),
(25, '1 Hour', 45, 9),
(26, '3 Hours', 120, 9),
(27, '5 Hours', 180, 9),
(28, 'HobleCat Ride With Instructor, Up To 2 Persons, 30 minutes', 40, 9),
(29, 'Wakeboard - Mastercraft 15 minutes - 1 tow', 45, 6),
(30, 'Wakeboard - Mastercraft 15 minutes - 5 tows', 210, 6),
(31, 'Wakeboard - Mastercraft 15 minutes - Prepaid 5 hours', 720, 6),
(32, 'Wakeboard - Othello 150HP 15 minutes - 1 tow', 40, 6),
(33, 'Wakeboard - Othello 150HP 15 minutes - 5 tows', 180, 6),
(34, 'Wakeboard - Othello 150HP 15 minutes - Prepaid 5 hours', 620, 6),
(35, 'Wakesurf 15 minutes - 1 tow', 45, 6),
(36, 'Wakesurf 15 minutes - 5 tows', 210, 6),
(37, 'Waterski and waterskate 8-10 minutes - 1 tow', 30, 6),
(38, 'Waterski and waterskate 8-10 minutes - 5 tows', 130, 6),
(48, 'Introduction Hour - 1 lesson 30 minutes', 70, 7),
(49, 'Start Program - 3 Lessons 30 minutes each', 190, 7),
(50, 'Introduction Hour - 1 lesson 30 minutes', 60, 43),
(51, 'Start Program - 3 lesson, 30 minutes each', 160, 43),
(52, 'Wakeboard - Othello 200HP 15 minutes - 1 tow', 40, 6),
(53, 'Wakeboard - Othello 200HP 15 minutes - 5 tows', 180, 6),
(54, 'Wakeboard - Othello 200HP 15 minutes - Prepaid 5 hours', 620, 6),
(55, 'Wakeboard - Centurion 15 minutes - 1 tow', 45, 6),
(56, 'Wakeboard - Centurion 15 minutes - 5 tows', 210, 6),
(57, 'Wakeboard - Centurion 15 minutes - Prepaid 5 hours', 720, 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `reg_date` datetime NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `reg_date`, `last_login`) VALUES
(2, 'admin', 'admin', 'asd', 'admin', '2017-03-11 00:00:00', '2017-03-11 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `last_name` (`last_name`);

--
-- Indexes for table `activity_name`
--
ALTER TABLE `activity_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drivers_shippers`
--
ALTER TABLE `drivers_shippers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricelist`
--
ALTER TABLE `pricelist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indexes for table `subtask`
--
ALTER TABLE `subtask`
  ADD PRIMARY KEY (`id`),
  ADD KEY `submenu_id` (`submenu_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `activity_name`
--
ALTER TABLE `activity_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `drivers_shippers`
--
ALTER TABLE `drivers_shippers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `instructors`
--
ALTER TABLE `instructors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pricelist`
--
ALTER TABLE `pricelist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `submenu`
--
ALTER TABLE `submenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `subtask`
--
ALTER TABLE `subtask`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `submenu`
--
ALTER TABLE `submenu`
  ADD CONSTRAINT `submenu_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
