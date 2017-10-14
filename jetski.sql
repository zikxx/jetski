-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2017 at 07:20 PM
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
  `inflatables` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `paid_price` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `paid` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `start` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `end` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `driver` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `member_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `refund` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `name`, `submenu`, `subtask`, `inflatables`, `payment`, `price`, `paid_price`, `paid`, `start`, `end`, `driver`, `type`, `member_id`, `last_name`, `status`, `refund`, `comment`, `first_name`) VALUES
(11, 'Windsurfing', 'Group Lessons - 3+ People', 'Start Windsurfing - 5 Hours Course', NULL, 'Cash', 'Club', '50', '', '2017-03-13 12:00:00', '2017-03-13 12:15:00', '', '', NULL, 'Elena', '', NULL, NULL, 'Barollina'),
(16, 'Boat Rent', 'Rent', '1 Day', NULL, 'Cash', 'Club', '7', '', '2017-03-08 12:12:12', '2017-03-08 12:12:12', '', '', NULL, '', '', NULL, NULL, ''),
(19, 'Jet-ski', '1 Person 15 Minutes (Yamaha FX)', '', NULL, 'Cash', 'Club', '45', '', '2017-03-08 12:12:12', '2017-03-13 17:00:00', '', '', NULL, '', '', NULL, NULL, ''),
(21, 'Stand Up Paddle', 'Rent', '30 Hours', NULL, 'Cash', 'Club', '50', '', '2017-06-07 12:00:00', '2017-03-20 12:30:00', '', '', NULL, '', '', NULL, NULL, ''),
(22, 'Sea Kayak', '1 Hour', '', NULL, 'Cash', 'Club', '10', '', '2017-03-18 04:50:00', '2017-03-18 05:51:00', '', '', NULL, '', '', NULL, NULL, ''),
(23, 'Kitesurfing', 'Stages 1, 2 and 3  - 9 Hours Course', '', NULL, 'Cash', 'Club', '310', '', '2017-03-18 10:53:00', '2017-03-18 19:53:00', '', '', NULL, '', '', NULL, NULL, ''),
(24, 'Flyboard', '3 Hours', '', NULL, 'Cash', 'Club', '20', '', '2017-03-18 16:54:00', '2017-03-18 16:54:00', '', '', NULL, '', '', NULL, NULL, ''),
(25, 'Flyboard', '30 Miutes', '', NULL, 'Card', 'Club', '10', '', '2017-03-18 17:40:00', '2017-03-18 17:40:00', '', '', NULL, '', '', NULL, NULL, ''),
(26, 'Jet-ski', '1 Person 15 Minutes with Fast Key', '', NULL, 'Cash', 'Club', '50', '', '2017-03-18 17:40:00', '2017-03-18 17:40:00', '', '', NULL, '', '', NULL, NULL, ''),
(27, 'Jet-ski', '1 Person 15 Minutes with Fast Key', '', NULL, 'Cash', 'Club', '40', '', '2017-03-18 17:40:00', '2017-03-18 17:40:00', '', '', NULL, '', '', NULL, NULL, ''),
(28, 'Jet-ski', '2 Persons 15 Minutes (Yamaha FX)', '', NULL, 'Cash', 'Club', '60', '', '2017-03-18 17:41:00', '2017-03-18 17:41:00', '', '', NULL, '', '', NULL, NULL, ''),
(29, 'Jet-ski', '1 Person 15 Minutes (Yamaha FX)', '', NULL, 'Cash', 'Club', '30', '', '2017-03-18 17:41:00', '2017-03-18 17:41:00', '', '', NULL, '', '', NULL, NULL, ''),
(30, 'Boat Rent', '200 Horse Power - 60 Minutes', '', NULL, 'Cash', 'Club', '200', '', '2017-03-18 17:41:00', '2017-03-18 17:41:00', '', '', NULL, '', '', NULL, NULL, ''),
(31, 'Inflatables', 'Banana, Minimum 3 Persons, 10 Minutes', '', NULL, 'Cash', 'Club', '20', '', '2017-03-18 17:41:00', '2017-03-18 17:41:00', '', '', NULL, '', '', NULL, NULL, ''),
(32, 'Wakeboard, Wakesurf', 'Tows', '', NULL, 'Cash', 'Club', '10', '', '2017-03-18 17:41:00', '2017-03-18 17:41:00', '', '', NULL, '', '', NULL, NULL, ''),
(33, 'Wakeboard, Wakesurf', 'Rent', '', NULL, 'Cash', 'Club', '10', '', '2017-03-18 17:42:00', '2017-03-18 17:42:00', '', '', NULL, '', '', NULL, NULL, ''),
(34, 'Stand Up Paddle', 'Rent', '30 Hours', NULL, 'Cash', 'Club', '50', '', '2017-06-07 17:43:00', '2017-03-18 17:43:00', '', '', NULL, '', '', NULL, NULL, ''),
(35, 'Kitesurfing', 'Stage 1 and 2  - 6 Hours Course', '', NULL, 'Cash', 'Club', '50', '', '2017-03-18 17:43:00', '2017-03-18 17:43:00', '', '', NULL, '', '', NULL, NULL, ''),
(36, 'Windsurfing', 'Rent', '2 Days', NULL, 'Cash', 'Club', '20', '', '2017-03-18 17:43:00', '2017-03-18 17:43:00', '', '', NULL, '', '', NULL, NULL, ''),
(37, 'Windsurfing', 'Lessons', 'Start Windsurfing - 5 Hours Course', NULL, 'Cash', 'Club', '20', '', '2017-03-18 17:44:00', '2017-03-18 17:44:00', '', '', NULL, '', '', NULL, NULL, ''),
(38, 'Pedal Boats', 'Pedalboat With Slide, 30 Minutes', '', NULL, 'Cash', 'Club', '20', '', '2017-06-07 17:44:00', '2017-03-18 17:44:00', '', '', NULL, '', '', NULL, NULL, ''),
(39, 'Sea Kayak', '30 Minutes', '', NULL, 'Cash', 'Club', '20', '', '2017-03-18 17:44:00', '2017-03-18 17:44:00', '', '', NULL, '', '', NULL, NULL, ''),
(40, 'Sailing', 'Rent', 'HobleCat Ride With Instructor, Up To 2 Persons, 30 minutes', NULL, 'Cash', 'Club', '50', '', '2017-03-20 21:44:00', '2017-03-20 21:44:00', '', '', NULL, '', '', NULL, NULL, ''),
(41, 'Jet-ski', '2 Persons 15 Minutes', '', NULL, 'Cash', 'Club', '12', '', '2017-03-20 21:44:00', '2017-03-20 21:44:00', '', '', NULL, '', '', NULL, NULL, ''),
(42, 'Wakeboard, Wakesurf, Waterskate, Waterski', 'Lessons', 'Introduction Lesson - 1 Hour', NULL, 'Cash', 'Club', '190', '', '2017-03-28 23:23:00', '2017-03-28 23:23:00', '', '', NULL, '', '', NULL, NULL, ''),
(43, 'Wakeboard, Wakesurf, Waterskate, Waterski', 'Tows', 'Wakeboard - Centurion 15 minutes - 1 tow', NULL, 'Cash', 'Club', '45', '', '2017-03-28 23:25:00', '2017-03-28 23:25:00', '', '', NULL, '', '', NULL, NULL, ''),
(44, 'Wakeboard, Wakesurf, Waterskate, Waterski', 'Waterski - Lessons', 'Start Program - 3 Lessons 30 minutes each', NULL, 'Cash', 'Club', '160', '', '2017-03-28 23:41:00', '2017-03-28 23:41:00', '', '', NULL, '', '', NULL, NULL, ''),
(45, 'Wakeboard, Wakesurf, Waterskate, Waterski', 'Lessons', 'Introduction Lesson - 1 Hour', NULL, 'Cash', 'Club', '190', '', '2017-03-28 23:54:00', '2017-03-28 23:54:00', '', '', NULL, '', '', NULL, NULL, ''),
(46, 'Wakeboard, Wakesurf, Waterskate, Waterski', 'Tows', 'Wakeboard - Mastercraft 15 minutes - 1 tow', NULL, 'Cash', 'Club', '45', '', '2017-03-29 00:06:00', '2017-03-29 00:06:00', '', '', NULL, '', '', NULL, NULL, ''),
(47, 'Wakeboard, Wakesurf, Waterskate, Waterski', 'Tows', 'Wakeboard - Othello 200HP 15 minutes - 1 tow', NULL, 'Cash', 'Club', '40', '', '2017-03-29 00:06:00', '2017-03-29 00:06:00', '', '', NULL, '', '', NULL, NULL, ''),
(48, 'Wakeboard, Wakesurf, Waterskate, Waterski', 'Tows', 'Wakeboard - Othello 150HP 15 minutes - 1 tow', NULL, 'Cash', 'Club', '40', '', '2017-03-29 00:08:00', '2017-03-29 00:08:00', '', '', NULL, '', '', NULL, NULL, ''),
(49, 'Wakeboard, Wakesurf, Waterskate, Waterski', 'Tows', 'Wakeboard - Othello 15 200HP minutes - Prepaid 5 hours', NULL, 'Cash', 'Club', '620', '', '2017-03-28 00:12:00', '2017-03-28 00:12:00', '', '', NULL, '', '', NULL, NULL, ''),
(50, 'Windsurfing', 'Lessons', 'Wakeboard - Centurion', NULL, 'Cash', 'Club', '60', '', '2017-06-08 22:40:00', '2017-06-08 22:40:00', 'Mirko', '', NULL, '', '', NULL, NULL, ''),
(51, 'Inflatables', 'Fly Fish 2 or 3 Persons, 10 Minutes', '', NULL, 'Cash', 'Club', '30', '', '2017-06-12 23:42:00', '2017-06-11 23:42:00', 'Mirko', '', NULL, '', '', NULL, NULL, ''),
(52, 'Wakeboard, Wakesurf, Waterskate, Waterski', 'Tows', 'Wakeboard - Mastercraft 15 minutes - 1 tow', NULL, 'Cash', 'Club', '45', '', '2017-06-12 23:43:00', '2017-06-11 23:43:00', 'Mirko', '', NULL, '', '', NULL, NULL, ''),
(53, 'Stand Up Paddle', 'Rent', '30 Hours', NULL, 'Cash', 'Club', '300', '', '2017-06-13 00:41:00', '2017-06-13 00:41:00', 'Mirko', '', NULL, '', '', NULL, NULL, ''),
(54, 'Boat Rent', '200 Horse Power - 60 Minutes', '', NULL, 'Cash', 'Club', '240', '', '2017-06-13 00:41:00', '2017-06-13 00:41:00', 'Mirko', '', NULL, '', '', NULL, NULL, ''),
(55, 'Wakeboard, Wakesurf, Waterskate, Waterski', 'Tows', 'Wakeboard - Centurion 15 minutes - 1 tow', NULL, 'Cash', 'Club', '45', '', '2017-06-13 01:21:00', '2017-06-13 01:21:00', 'Mirko', '', NULL, '', '', NULL, NULL, ''),
(56, 'Jet-ski', '2 Persons 15 Minutes (Yamaha FX)', '', NULL, 'Cash', 'Club', '75', '', '2017-06-13 02:12:00', '2017-06-13 02:12:00', 'Mirko', '', NULL, '', '', NULL, NULL, ''),
(57, 'Wakeboard, Wakesurf, Waterskate, Waterski', 'Tows', 'Wakeboard - Mastercraft 15 minutes - 1 tow', NULL, 'Cash', 'Club', '45', '', '2017-06-13 02:12:00', '2017-06-13 02:12:00', 'Mirko', '', NULL, '', '', NULL, NULL, ''),
(58, 'Windsurfing', 'Lessons', 'Start Windsurfing - 5 Hours Course', NULL, 'Cash', 'Club', '250', 'Yes', '2017-07-02 23:37:00', '2017-07-02 23:37:00', '', '', NULL, '', '', NULL, NULL, 'Member'),
(59, 'Windsurfing', 'Lessons', 'Start Windsurfing - 5 Hours Course', NULL, 'Cash', 'Club', '250', 'Yes', '2017-07-03 00:08:00', '2017-07-03 00:28:00', '', '', NULL, '', 'Canceled', '250', NULL, 'Member'),
(60, 'Windsurfing', 'Lessons', 'Start Windsurfing - 5 Hours Course', NULL, 'Cash', 'Club', '250', 'No', '2017-07-03 01:01:00', '2017-07-03 01:01:00', '', '', NULL, '', 'Active', NULL, NULL, 'Customer'),
(61, 'Jet-ski', '2 Persons 15 Minutes (Yamaha FX)', '', NULL, 'Cash', 'Club', '75', 'Yes', '2017-07-03 01:17:00', '2017-07-03 01:17:00', '', '', NULL, '', 'Active', NULL, NULL, 'Member'),
(62, 'Inflatables', 'Sofas 2, 3 or 4 Persons, 10 Minutes', '', NULL, 'Cash', 'Club', '20', 'Yes', '2017-07-03 01:20:00', '2017-07-03 01:20:00', '', '', NULL, '', 'Active', NULL, NULL, 'Member'),
(63, 'Wakeboard, Wakesurf, Waterskate, Waterski', 'Lessons', 'Introduction Lesson - 1 Hour', NULL, 'Cash', 'Club', '190', 'Yes', '2017-07-03 01:21:00', '2017-07-03 01:21:00', '', '', NULL, '', 'Active', NULL, NULL, 'Member'),
(64, 'Windsurfing', 'Group Lessons - 3+ People', 'Start Windsurfing - 5 Hours Course', NULL, 'Cash', 'Club', '130', 'Yes', '2017-07-04 00:47:00', '2017-07-04 00:47:00', '', '', NULL, '', 'Canceled', NULL, NULL, 'Member'),
(65, 'Wakeboard, Wakesurf, Waterskate, Waterski', 'Waterski - Lessons', 'Start Program - 3 Lessons 30 minutes each', NULL, 'Cash', 'Club', '160', 'No', '2017-07-04 00:47:00', '2017-07-04 00:47:00', '', '', NULL, '', 'Active', NULL, NULL, 'Member'),
(66, 'Kitesurfing', 'Stages 1, 2 and 3  - 9 Hours Course', '', NULL, 'Cash', 'Club', '450', 'Yes', '2017-07-04 00:48:00', '2017-07-04 00:48:00', '', '', NULL, '', 'Canceled', '450', NULL, 'Customer'),
(67, 'Inflatables', 'Fly Fish 2 or 3 Persons, 10 Minutes', '', NULL, 'Cash', 'Club', '30', 'No', '2017-07-04 00:48:00', '2017-07-04 00:48:00', '', '', NULL, '', 'Active', NULL, NULL, 'Customer'),
(68, 'Wakeboard, Wakesurf, Waterskate, Waterski', 'Tows', 'Wakeboard - Othello 200HP 15 minutes - 5 tows', NULL, 'Cash', 'Club', '180', 'Yes', '2017-07-04 22:36:00', '2017-07-04 22:36:00', 'qwe', '', NULL, '', 'Active', NULL, NULL, 'Member'),
(69, 'Windsurfing', 'Rent', '1 Day', NULL, 'Cash', 'Club', '75', 'Yes', '2017-07-04 23:46:00', '2017-07-04 23:47:00', '', '', NULL, '', 'Active', NULL, NULL, 'Member'),
(70, 'Windsurfing', 'Lessons', 'Introduction Hour', NULL, 'Cash', 'Club', '60', 'Yes', '2017-07-05 00:08:00', '2017-07-05 01:08:00', '', '', NULL, '', 'Active', NULL, NULL, 'Member'),
(71, 'Jet-ski', '2 Persons 15 Minutes with Fast Key', '', NULL, 'Cash', 'Club', '70', 'Yes', '2017-07-05 00:33:00', '2017-07-05 00:48:00', '', '', NULL, '', 'Active', NULL, NULL, 'Member'),
(72, 'Sea Kayak', '1 Hour', '', NULL, 'Cash', 'Club', '10', 'Yes', '2017-07-05 01:04:00', '2017-07-05 02:04:00', '', '', NULL, '', 'Active', NULL, NULL, 'Member'),
(73, 'Stand Up Paddle', 'Rent', '30 Hours', NULL, 'Cash', 'Club', '300', 'Yes', '2017-07-05 01:23:00', '2017-07-06 07:23:00', 'Ja', '', NULL, '', 'Active', NULL, NULL, 'Member'),
(74, 'Windsurfing', 'Lessons', 'Introduction Hour', NULL, 'Cash', 'Club', '60', 'Yes', '2017-07-06 19:37:00', '2017-07-06 20:37:00', 'Da', '', NULL, '', 'Active', NULL, NULL, 'Member'),
(75, 'Wakeboard, Wakesurf, Waterskate, Waterski', 'Tows', 'Wakeboard - Othello 150HP 15 minutes - 1 tow', NULL, 'Cash', 'Club', '40', 'Yes', '2017-07-06 19:37:00', '2017-07-06 19:52:00', '', '', NULL, '', 'Active', NULL, NULL, 'Member'),
(76, 'Flyboard', '30 Miutes', '', NULL, 'Cash', 'Club', '110', 'Yes', '2017-07-06 20:36:00', '2017-07-06 21:06:00', 'Nesa', '', NULL, 'Zivanovic', 'Active', NULL, NULL, 'Nikola'),
(77, 'Sea Kayak', '1 Hour', '', NULL, 'Cash', 'Club', '10', 'Yes', '2017-07-06 20:38:00', '2017-07-06 21:38:00', 'Eq', '', NULL, 'Radeta', 'Active', NULL, NULL, 'Nesa'),
(78, 'Wakeboard, Wakesurf, Waterskate, Waterski', 'Tows', 'Wakeboard - Othello 150HP 15 minutes - 5 tows', NULL, 'Cash', 'Club', '180', 'Yes', '2017-07-06 20:45:00', '2017-07-06 21:00:00', 'Mirko', '', NULL, 'Zivanovic', 'Active', NULL, NULL, 'Nikola'),
(79, 'Wakeboard, Wakesurf, Waterskate, Waterski', 'Tows', 'Wakeboard - Centurion 15 minutes - 1 tow', NULL, 'Cash', 'Club', '45', 'Yes', '2017-07-06 21:05:00', '2017-07-06 21:20:00', 'Ja', 'Member', NULL, 'Zivanovic', 'Active', NULL, NULL, 'Nikola'),
(80, 'Yacht', '', '', NULL, 'Cash', 'Club', '5', 'Yes', '2017-07-06 22:42:00', '2017-07-06 23:12:00', 'Mirko', 'Member', NULL, 'Zivanovic', 'Active', NULL, NULL, 'Nikola'),
(81, 'Inflatables', 'S - 1 Person - 10 Minutes', '', NULL, 'Cash', 'Club', '20', 'Yes', '2017-07-07 00:50:00', '2017-07-07 01:00:00', 'Mirko', 'Member', NULL, 'Zivanovic', 'Active', NULL, NULL, 'Nikola'),
(82, 'Inflatables', 'L - 3 Persons - 50 Minutes', '', NULL, 'Cash', 'Club', '300', 'Yes', '2017-07-07 02:01:00', '2017-07-07 02:51:00', 'Mirko', 'Member', NULL, 'Zivanovic', 'Active', NULL, NULL, 'Nesa'),
(83, 'Sailing', 'Rent', '3 Hours', NULL, 'Cash', 'Club', '120', 'Yes', '2017-07-07 02:02:00', '2017-07-07 05:02:00', 'Mirko', 'Member', NULL, 'Zivanovic', 'Active', NULL, NULL, 'Nesa'),
(84, 'Kitesurfing', 'Stages 1, 2 and 3  - 9 Hours Course', '', NULL, 'Cash', 'Club', '450', 'Yes', '2017-07-07 02:05:00', '2017-07-07 11:05:00', 'Mirko', 'Member', NULL, 'Radeta', 'Active', NULL, NULL, 'Nesa'),
(85, 'Wakeboard, Wakesurf, Waterskate, Waterski', 'Tows', 'Wakeboard - Othello 200HP 15 minutes - 1 tow', NULL, 'Cash', 'Club', '40', 'Yes', '2017-07-07 02:12:00', '2017-07-07 02:27:00', 'Mirko', 'Member', NULL, 'Radeta', 'Active', NULL, NULL, 'Nesa'),
(86, 'Wakeboard, Wakesurf, Waterskate, Waterski', 'Tows', 'Wakeboard - Centurion 15 minutes - 5 tows', NULL, 'Cash', 'Club', '210', 'Yes', '2017-07-07 02:17:00', '2017-07-07 02:32:00', 'Ja', 'Member', NULL, 'Zivanovic', 'Active', NULL, NULL, 'Nikola'),
(87, 'Wakeboard, Wakesurf, Waterskate, Waterski', 'Tows', 'Wakeboard - Mastercraft 15 minutes - 5 tows', NULL, 'Cash', 'Club', '210', 'Yes', '2017-07-07 02:18:00', '2017-07-07 02:33:00', 'Mirko', 'Member', NULL, 'Radeta', 'Active', NULL, NULL, 'Nesa'),
(88, 'Windsurfing', 'Group Lessons - 3+ People', 'Windsurfing Intermediate - 3 Hours Course', NULL, 'Cash', 'Club', '80', 'Yes', '2017-07-07 02:21:00', '2017-07-07 05:21:00', 'Ja', 'Member', NULL, 'Radeta', 'Active', NULL, NULL, 'Nesa'),
(89, 'Yacht', '', '', NULL, 'Cash', 'Club', '400', 'Yes', '2017-07-07 21:12:00', '2017-07-07 23:42:00', 'Mirko', 'Member', NULL, 'Zivanovic', 'Active', NULL, NULL, 'Nesa'),
(90, 'Yacht', '', '', NULL, 'Cash', 'Club', '1100', 'Yes', '2017-07-08 14:50:00', '2017-07-08 20:50:00', 'Mirko', 'Member', NULL, 'Radeta', 'Active', NULL, NULL, 'Nesa'),
(91, 'Boat Rent', '200 Horse Power - 60 Minutes', '', NULL, 'Cash', 'Club', '240', 'Yes', '2017-07-09 22:20:00', '2017-07-09 23:20:00', 'Mirko', 'Member', NULL, 'Zivanovic', 'Active', NULL, NULL, 'Nesa'),
(92, 'Sea Kayak', '1 Hour', '', NULL, 'Cash', 'Club', '10', 'Yes', '2017-07-10 00:08:00', '2017-07-10 01:08:00', 'Mirko', 'Member', NULL, 'Zivanovic', 'Active', NULL, NULL, 'Nikola'),
(93, 'Wakeboard, Wakesurf, Waterskate, Waterski', 'Tows', 'Wakeboard - Othello 200HP 15 minutes - Prepaid 5 hours', NULL, 'Cash', 'Club', '620', 'Yes', '2017-07-10 00:11:00', '2017-07-10 00:26:00', 'Mirko', 'Member', NULL, 'Radeta', 'Active', NULL, NULL, 'Nesa'),
(94, 'Jet-ski', '1 Person 15 Minutes (Yamaha FX)', '', NULL, 'Cash', 'Club', '65', 'Yes', '2017-07-23 10:18:00', '2017-07-24 00:33:00', 'Mirko', 'Member', NULL, '', 'Active', NULL, NULL, ''),
(95, 'Yacht', '', '', NULL, 'Cash', 'Club', '1100', 'Yes', '2017-07-23 00:21:00', '2017-07-24 06:21:00', 'Mirko', 'Member', NULL, '', 'Active', NULL, NULL, ''),
(96, 'Yacht', '', '', NULL, 'Cash', 'Club', '1100', 'Yes', '2017-07-23 00:24:00', '2017-07-24 06:24:00', 'Da', 'Member', NULL, '', 'Active', NULL, NULL, ''),
(97, 'Yacht', '', '', NULL, 'Cash', 'Club', '500', 'Yes', '2017-07-23 00:33:00', '2017-07-24 03:33:00', 'Mirko', 'Member', NULL, '', 'Active', NULL, NULL, ''),
(98, 'Kitesurfing', 'Stages 1, 2 and 3  - 9 Hours Course', '', NULL, 'Cash', 'Club', '450', 'Yes', '2017-07-24 00:46:00', '2017-07-24 09:46:00', 'Mirko', 'Member', NULL, 'Zivanovic', 'Active', NULL, NULL, 'Nesa'),
(99, 'Yacht', '', '', NULL, 'Cash', 'Club', '1100', 'Yes', '2017-07-24 00:48:00', '2017-07-24 06:48:00', 'Mirko', 'Member', NULL, 'Zivanovic', 'Active', NULL, NULL, 'Nesa'),
(100, 'Yacht', '', '', NULL, 'Cash', 'Club', '500', 'Yes', '2017-07-24 00:50:00', '2017-07-24 03:50:00', 'Mirko', 'Member', NULL, '', 'Active', NULL, NULL, 'Nesa'),
(101, 'Stand Up Paddle', 'Rent', '30 Hours', NULL, 'Cash', 'Club', '300', 'Yes', '2017-08-08 00:51:00', '2017-08-09 06:51:00', 'Mirko', 'Member', NULL, 'Zivanovic', 'Active', NULL, NULL, 'Nesa'),
(102, 'Inflatables', 'M - 2 Persons - 30 Minutes', '', NULL, 'Cash', 'Club', '120', 'Yes', '2017-08-09 20:52:00', '2017-08-09 21:22:00', 'Mirko', 'Member', NULL, 'Zivanovic', 'Active', NULL, NULL, 'Nesa'),
(131, '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', 'Active', NULL, NULL, ''),
(132, '5', '14', '', '', '1', '1', '22', 'on', '2017-10-18 13:05:00', NULL, 'Luca', 'member', '9', '', 'Active', NULL, NULL, ''),
(133, '5', '14', '', '', '1', '1', '22', 'on', '2017-10-18 13:05:00', NULL, 'Luca', 'member', '9', '', 'Active', NULL, NULL, ''),
(134, '3', '7', '48', '', 'Cash', 'Club', '2', 'on', '2017-10-18 13:05:00', NULL, 'Luca', 'customer', 'Nesa', 'asd', 'Active', NULL, NULL, 'asd'),
(135, '1', '1', '1', '', 'Cash', 'Club', '11', 'on', '2017-10-07 13:25:00', NULL, '', 'member', 'Nikola', '', 'Active', NULL, NULL, '');

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
-- Table structure for table `inflatables`
--

CREATE TABLE `inflatables` (
  `id` int(11) NOT NULL,
  `inflatable_name` varchar(255) DEFAULT NULL,
  `subtask_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inflatables`
--

INSERT INTO `inflatables` (`id`, `inflatable_name`, `subtask_id`) VALUES
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
  `size` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shoe_size` int(11) DEFAULT NULL,
  `other` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prepaid` float DEFAULT NULL,
  `used` float DEFAULT NULL,
  `saldo` float DEFAULT NULL,
  `reg_date` datetime NOT NULL,
  `weight` int(5) DEFAULT NULL,
  `age` date DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emergency_contact` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `storage_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `storage_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `storage_3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `first_name`, `last_name`, `phone`, `size`, `gender`, `shoe_size`, `other`, `prepaid`, `used`, `saldo`, `reg_date`, `weight`, `age`, `status`, `emergency_contact`, `address`, `email`, `storage_1`, `storage_2`, `storage_3`) VALUES
(6, 'Nikola', 'Zivanovic', '064485564', 'L', 'Male', 43, 'Again', NULL, NULL, NULL, '2017-07-06 19:25:00', 178, '1993-04-24', 'Active', '06544788', 'Sutjeska 76', NULL, NULL, NULL, NULL),
(9, 'Nesa', 'Radeta', '06655444', 'L', 'Male', 43, 'Updated', 600, NULL, NULL, '2017-07-06 19:09:42', 177, '1969-06-30', 'Married', 'Peca', 'KS', '', '', '', '');

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
  `submenu_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` float DEFAULT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `submenu`
--

INSERT INTO `submenu` (`id`, `submenu_name`, `price`, `menu_id`) VALUES
(49, 'Wakeboard - Centurion / Mastercraft - 1 tow 15 minutes', 45, 14),
(50, 'Wakeboard - Othello - 1 tow 15 minutes', 40, 14),
(51, 'Wakeboard - Centurion - 1 tow 15 minutes', 45, 14),
(52, 'Introduction lesson - 30 Minutes', 70, 15),
(53, 'Start program - 3 lessons - 30 minutes each', 190, 15),
(54, 'Waterski - 1 tow - 8-10 minutes', 30, 16),
(55, 'Waterski - 5 tows - 8-10 minutes', 130, 16),
(56, 'Introduction lesson - 30 Minutes', 60, 16),
(57, 'Start program 3 lessons - 30 Minutes each', 160, 16),
(58, 'Wakeboard - Centurion / Mastercraft - 5 tows 15 minutes', 210, 14),
(59, 'Wakeboard - Othello - 5 tows 15 minutes', 180, 14),
(60, 'Wakeboard - Centurion - 5 tows 15 minutes', 210, 14),
(65, 'Waterskate 1 tow - 15 Minutes', 40, 17),
(66, 'Waterskate 5 tows - 15 Minutes', 180, 17),
(67, 'introduction lesson - 30 Minutes', 70, 17),
(68, 'Start program - 3 Lessons - 30 Minutes each', 190, 17),
(69, '1 Person - 15 Minutes', 50, 18),
(70, '2 Persons - 15 Minutes', 60, 18),
(71, '1 Person (Yamaha FX) - 15 Minutes', 65, 18),
(72, '2 Persons (Yamaha FX) - 15 Minutes', 75, 18),
(73, '30 Minutes', 110, 19),
(74, '30 Minutes', 110, 20),
(75, 'Lessons', NULL, 21),
(76, 'Group lessons (3+ people)', NULL, 21),
(77, 'Rent', NULL, 21),
(78, 'Stages 1, 2 or 3 - 3 hours course', 170, 22),
(79, 'Stages 1 and 2 - 6 hours course', 300, 22),
(80, 'Stages 1, 2 and 3 - 9 hours course', 450, 22),
(81, 'HobbleCat ride with Instructor, up to 2 persons', NULL, 23),
(82, 'Lessons', NULL, 23),
(83, '1 Hour rent', 15, 24),
(84, 'Lesson - 30 Minutes (+30 minutes free rent)', 35, 24),
(85, 'Group lessons (3+ people) - 30 Minutes (+30 minutes free rent)', 25, 24),
(86, 'Photo memories', 20, 25),
(87, 'Photo session', 90, 25),
(88, 'Single kayak - 30 Minutes', 5, 26),
(89, 'Double kayak - 30 Minutes', 10, 26),
(90, 'Double kayak - 60 Minutes', 15, 26),
(91, 'Pedal boat without slide - 30 Minutes', 10, 27),
(92, 'Pedal boat without slide - 60 Minutes', 15, 27),
(93, 'Pedal boat with slide - 30 Minutes', 15, 27),
(94, 'Pedal boat with slide - 60 Minutes', 25, 27),
(95, '150 Horse power - 30 Minutes', 110, 28),
(96, '150 Horse power - 60 Minutes', 190, 28),
(97, '200 Horse power - 30 Minutes', 130, 28),
(98, '200 Horse power - 60 Minutes', 220, 28),
(99, '30 Minutes - Max 6 people', 190, 33),
(100, '1 Hour - Max 6 people', 280, 33),
(101, '2 Hours - Max 6 people', 500, 33),
(102, '4 Hours - Max 6 people', 800, 33),
(103, 'Banana, minimal 3 persons - 10 Minutes', 15, 29),
(104, 'Sofas 2,3 or 4 persons - 10 Minutes', 20, 29),
(105, 'Tuna fishing - 6 Hours', 1100, 30),
(106, 'Hannos - 2.5 Hours', 400, 30),
(107, 'Octopus and seasonal fishing - 3 Hours', 550, 30),
(108, 'Fishing extra time - 1 Hour', 150, 30),
(109, 'Jeanneau 40.3 - Maximum 8 persons', NULL, 31),
(110, 'Delphia 40.3 - Maximum 8 persons', NULL, 31),
(111, 'Bavaria 47 - Maximum 10 persons', NULL, 31),
(112, 'Delphia 47 - Maximum 10 persons', NULL, 31),
(113, 'Delphia 1080S - Maximum 10 persons', NULL, 31),
(114, 'Selene 55 - Maximum 16 persons', NULL, 31),
(115, 'Princess 50 - Maximum 10 persons', NULL, 31),
(116, 'Princess 23m - Maximum 20 persons', NULL, 31);

-- --------------------------------------------------------

--
-- Table structure for table `subtask`
--

CREATE TABLE `subtask` (
  `id` int(11) NOT NULL,
  `subtask_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` float DEFAULT NULL,
  `submenu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subtask`
--

INSERT INTO `subtask` (`id`, `subtask_name`, `price`, `submenu_id`) VALUES
(82, 'Introduction hour', 60, 75),
(83, 'Start windsurfing - 5 Hours course (+ 3 hours rent)', 250, 75),
(84, 'Windsurfing intermediate (+ 1 hour rent)', 160, 75),
(85, 'Introduction hour', 45, 76),
(86, 'Start windsurfing - 5 Hours course (+ 2 hours rent)', 130, 76),
(87, 'Windsurfing intermediate (+ 1 hour rent)', 80, 76),
(88, '1 Hour', 25, 77),
(89, '1 day', 70, 77),
(90, '2 days', 120, 77),
(91, '3 days', 160, 77),
(92, '4 days', 200, 77),
(93, '5 days', 240, 77),
(94, '6 days', 270, 77),
(95, '7 days', 310, 77),
(96, '30 Minutes', 40, 81),
(97, '1 Hour', 40, 81),
(98, '3 Hours', 105, 81),
(99, '5 Hours', 160, 81),
(100, 'Introduction lesson - 1 Hour', 60, 82),
(101, 'Learn sailing - 3 Hours + 1 hour rent free', 150, 82),
(102, 'Half day cruise - 4 Hours', 600, 109),
(103, 'Full day cruise - 7 Hours', 800, 109),
(104, 'Weekly cruise', 2900, 109),
(105, 'Half day cruise - 4 Hours', 700, 110),
(106, 'Full day cruise - 7 Hours', 900, 110),
(107, 'Weekly cruise', 3300, 110),
(108, 'Half day cruise - 4 Hours', 750, 111),
(109, 'Full day cruise - 7 Hours', 900, 111),
(110, 'Weekly cruise', 4700, 111),
(111, 'Half day cruise - 4 Hours', 900, 112),
(112, 'Full day cruise - 7 Hours', 1200, 112),
(113, 'Sunset cruise - 2 Hours', 500, 112),
(114, 'Extra per hour', 280, 112),
(115, 'Weekly cruise', 5300, 112),
(122, 'Half day cruise - 4 Hours', 990, 113),
(123, 'Full day cruise - 7 Hours', NULL, 113),
(124, 'Weekly cruise', NULL, 113),
(125, 'Half day cruise - 4 Hours', 2600, 114),
(126, 'Full day cruise - 6 Hours', 3100, 114),
(127, 'Weekly cruise', NULL, 114),
(128, 'Half day cruise - 4 Hours', 3000, 115),
(129, 'Full day cruise - 6 Hours', 3500, 115),
(130, 'Weekly cruise', NULL, 115),
(131, 'Half day cruise - 4 Hours', 5990, 116),
(132, 'Full day cruise - 6 Hours', 6300, 116),
(133, 'Weekly cruise', NULL, 116);

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
(2, 'admin', '1964', 'asd', 'admin', '2017-03-11 00:00:00', '2017-03-11 00:00:00'),
(3, 'STR', '1964', 'asd', 'asd', '2017-07-09 18:00:00', '2017-07-09 18:00:00'),
(4, 'GRH', '1964', 'asd', 'asd', '2017-07-09 18:00:00', '2017-07-09 18:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
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
-- Indexes for table `inflatables`
--
ALTER TABLE `inflatables`
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `last_name` (`last_name`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;
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
-- AUTO_INCREMENT for table `inflatables`
--
ALTER TABLE `inflatables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `instructors`
--
ALTER TABLE `instructors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;
--
-- AUTO_INCREMENT for table `subtask`
--
ALTER TABLE `subtask`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `submenu`
--
ALTER TABLE `submenu`
  ADD CONSTRAINT `submenu_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`);

--
-- Constraints for table `subtask`
--
ALTER TABLE `subtask`
  ADD CONSTRAINT `subtask_ibfk_1` FOREIGN KEY (`submenu_id`) REFERENCES `submenu` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
