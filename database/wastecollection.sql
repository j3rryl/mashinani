-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2021 at 05:27 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wastecollection`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `phoneno` int(10) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `cdate` date DEFAULT NULL,
  `approval` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `phoneno`, `email`, `cdate`, `approval`) VALUES
(1, '637', 104426952, 'pphdwriter@gmail.com', '2021-03-09', 'Not Allowed'),
(2, '637', 104426952, 'pphdwriter@gmail.com', '2021-03-09', 'Not Allowed'),
(3, 'poor services', 373737384, 'mwaura@ian.com', '2021-03-23', 'Not Allowed');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `usname` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `usname`, `pass`) VALUES
(1, 'Admin', '1234'),
(4, 'Ian', '1234'),
(5, 'Mash', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `newsletterlog`
--

CREATE TABLE `newsletterlog` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(52) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `news` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) DEFAULT NULL,
  `title` varchar(5) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `twaste` varchar(30) DEFAULT NULL,
  `nroom` int(11) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `noofdays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `title`, `fname`, `lname`, `twaste`, `nroom`, `cin`, `noofdays`) VALUES
(2, 'Miss.', 'wilzon', 'arport', 'Deluxe Room', 1, '2019-03-08', -1),
(3, 'Miss.', 'wilzon', 'arport', 'Superior Room', 1, '2019-03-26', 3),
(4, 'Dr.', 'wilzon', 'arport', 'Biodegredable', 4, '2019-03-01', 6),
(5, 'Dr.', 'wilzon', 'arport', 'Deluxe Room', 1, '2019-03-15', 7),
(9, 'Dr.', 'James', 'Shiraho', 'office waste', 1, '2019-03-29', 1),
(10, 'Dr.', 'peter', 'ngure', 'office waste', 3, '2019-03-28', 3),
(11, 'Mr.', 'bidan', 'gitau', 'office waste', 7, '2019-03-21', -21),
(12, 'Mr.', 'kanji', '2012', 'office waste', 2, '2019-03-30', 1),
(15, 'Dr.', 'samurai', 'am', 'kitchen refuse', 1, '2019-03-08', 5),
(17, 'Dr.', 'peter', 'ngure', 'office waste', 5, '2019-03-01', 30),
(20, 'Dr.', 'kanji', '2012', 'kitchen refuse', 6, '2019-03-22', 0),
(13, 'Dr.', 'waste', 'collect', 'office waste', 3, '2019-03-20', 0),
(14, 'Dr.', 'wilzon', 'arport', 'Deluxe Room', 1, '2019-03-08', 7),
(16, 'Miss.', 'wer', 'wer', 'kitchen refuse', 1, '2019-03-08', 14),
(18, 'Mr.', 'PETER', 'SHIRAHO', 'office waste', 6, '2019-03-06', 22),
(19, 'Dr.', 'welcome', 'now', 'recycling waste', 2, '2019-03-09', 11);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `hash`, `active`) VALUES
(25, 'ian', 'Mwaura', 'mwaura@ian.com', '$2y$10$W5IWJxrVGIqm2b1EzpBWPew3hWAh2I85Ofaexi6znC2mx.ChdUX/i', 'c410003ef13d451727aeff9082c29a5c', 0),
(23, 'master', 'bater', 'bater@master.com', '$2y$10$Jw8pmD4eI0sL1ckNnmfvoO8Djg0LEGZz5EQUDSiRDrnDDfabqSvwO', 'd93ed5b6db83be78efb0d05ae420158e', 0);

-- --------------------------------------------------------

--
-- Table structure for table `waste_category`
--

CREATE TABLE `waste_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `FName` text DEFAULT NULL,
  `LName` text DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `County` varchar(30) DEFAULT NULL,
  `Consistuency` varchar(30) DEFAULT NULL,
  `Phone` int(34) DEFAULT NULL,
  `twaste` varchar(20) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `stat` varchar(15) DEFAULT NULL,
  `nodays` int(11) DEFAULT NULL,
  `nroom` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletterlog`
--
ALTER TABLE `newsletterlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `waste_category`
--
ALTER TABLE `waste_category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `newsletterlog`
--
ALTER TABLE `newsletterlog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `waste_category`
--
ALTER TABLE `waste_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
